<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class WisataController extends Controller
{
    private $client;

    public function __construct() {
        $this->client = new Client ([
            'base_uri' => 'https://weesata.000webhostapp.com/'
        ]);
    }

    public function guzzleRequest ($method, $endPoint, $params = null) {
        try {
            if($params) {
            $response = $this->client->$method($endPoint, $params);
            } else {
                $response = $this->client->$method($endPoint);
            }

            if($response->getStatusCode() == 200) {
                $body = $response->getBody()->getContents();
                $data = json_decode($body, true);
            }
        }

        catch(Exception $e) {
            $data = "Error:".$e->getMessage();
        }

        return $data;
    }

    public function index () {
        return view('index');
    }

    public function wisata () {
        $responseWisata= $this->guzzleRequest('get', '/getall');
        $wisata = $responseWisata['response'];
        $jumlah = count($wisata);

        return view('wisata', ['wisata' => $wisata, 'jumlah' => $jumlah]);
    }

    public function cariWisata (Request $request) {
        if ($request->input('nama_tempat') != null) {
            $nama = $request->input('nama_tempat');
        } else {
            $nama = "all";
        }

        if ($request->input('jenis') != null) {
            $kategori = $request->input('jenis');
        } else {
            $kategori = "all";
        }

        if ($request->input('kota') != null) {
            $tempat = $request->input('kota');
        } else {
            $tempat = "all";
        }


        // $nama = $request->input('nama_tempat');
        // $kategori = $request->input('jenis');
        // $tempat = $request->input('kota');

        //dd($tempat);

        return redirect()->route('hasil', ['nama' => $nama, 'kategori' => $kategori, 'lokasi' => $tempat]);
        //dd($request->all());

        // $data = [
        //     'form_params' => [
        //         "nama" => $request->input('nama_tempat'),
        //         "jenis" => $request->input('jenis'),
        //         "kota" => $request->input('kota')
        //     ]
        // ];
        // $response = $this->client->post("/searchbykondisi", $data);
        // $responseWisata = json_decode($response->getBody()->getContents());
        // $wisata = $responseWisata->response;
        // $jumlah = count($wisata);

        // return view('cari', ['wisata' => $wisata, 'jumlah' => $jumlah]);
    }


    public function hasilWisata ($nama, $kategori, $lokasi) {
        if ($nama == "all") {
            $nama = "";
        }

        if ($kategori == "all") {
            $kategori = "";
        }

        if ($lokasi == "all") {
            $lokasi = "";
        }

        $data = [
            'form_params' => [
                "nama" => $nama,
                "jenis" => $kategori,
                "kota" => $lokasi
            ]
        ];
        $response = $this->client->post("/searchbykondisi", $data);
        $responseWisata = json_decode($response->getBody()->getContents());
        $wisata = $responseWisata->response;
        $jumlah = count($wisata);

        return view('cari', ['wisata' => $wisata, 'jumlah' => $jumlah]);
    }

    // public function searchkondisi(Request $request){
    //     $data = [
    //         'headers'     => [
    //             'X-CSRF-Token' => csrf_token()
    //         ],
    //         'form_params' => [
    //             "nama" => $request->input('nama_tempat'),
    //             "jenis" => $request->input('jenis'),
    //             "kota" => $request->input('kota')
    //         ]
    //     ];
    //     $response = $this->client->post("/searchbykondisi", $data);
    //     $json = json_decode($response->getBody()->getContents());
    //     $jumlah = count($json);

    //     return view('wisata', ['wisata' => $json, 'jumlah' => $jumlah]);
    // }

    public function detail ($tempat) {
        $url_nama_tempat = '/searchbynama/'.$tempat;
        $responseTempat = $this->guzzleRequest('get', $url_nama_tempat);
        $tempat = $responseTempat['response'][0];

        return view('detail', ['tempat' => $tempat]);
    }
}
