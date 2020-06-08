<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;


class WeesataController extends Controller
{
    private $client;
    
    public function __construct() {
        $this->client = new Client (['base_uri' => 'https://qrary-fuseki-service.herokuapp.com']);
    }


    public function getall(){
        $options = [
            'headers'=>[
                "Accept" => "application/sparql-results+json,*/*;q=0.9",
                "Content-Type" => "application/x-www-form-urlencoded; charset=UTF-8"
            ],
            'form_params' => [
                "query" => "PREFIX ws:<http://weesata.com/ns/weesatalist#>\n\n
                SELECT ?deskripsi ?gambar ?harga ?hari ?jam ?jenis ?kota ?lokasi ?nama\n
                WHERE {\n    
                    ?w   ws:deskripsi  ?deskripsi;\n        
                    ws:gambar     ?gambar;\n        
                    ws:harga      ?harga;\n        
                    ws:hari       ?hari;\n        
                    ws:jam        ?jam;\n        
                    ws:jenis      ?jenis;\n        
                    ws:kota       ?kota;\n        
                    ws:lokasi     ?lokasi;\n        
                    ws:nama      ?nama;\n    
                   }",
            ]
        ];
        $response = $this->client->request('POST',"/weesata/query", $options);
        $json = json_decode($response->getBody()->getContents());
        // dd($json);
        return response()->json([
            'status' => 'Data tempat wisata berhasil diambil',
            'response'=> $json->results->bindings
        ],200);
    }

    public function searchbynama($nama){
        $query="PREFIX ws: <http://weesata.com/ns/weesatalist#>\n \n
                SELECT ?nama ?lokasi ?kota ?gambar ?jenis ?deskripsi ?harga ?jam ?hari\n
                WHERE\n
                    {\n 
                        ?w     ws:nama    ?nama ;\n        
                        ws:lokasi    ?lokasi ;\n        
                        ws:kota    ?kota ;\n        
                        ws:gambar    ?gambar ;\n        
                        ws:jenis    ?jenis ;\n        
                        ws:deskripsi ?deskripsi ;\n        
                        ws:harga     ?harga ;\n        
                        ws:jam       ?jam ;\n        
                        ws:hari      ?hari .\n\n  
                        FILTER contains(lcase(str(?nama)), lcase(str(\"".$nama."\")))\n}";

        $options = [
            'headers'=>[
                "Accept" => "application/sparql-results+json,*/*;q=0.9",
                "Content-Type" => "application/x-www-form-urlencoded; charset=UTF-8"
            ],
            'form_params' => [
                "query" => $query,
            ]
        ];
        $response = $this->client->request('POST',"/weesata/query", $options);
        $json = json_decode($response->getBody()->getContents());
        // dd($json);
        return response()->json([
            'status' => 'Data pencarian berdasarakan nama : '.$nama.' berhasil diambil',
            'response'=> $json->results->bindings
        ],200);
    }

    public function searchbyjenis($jenis){
        $query="PREFIX ws: <http://weesata.com/ns/weesatalist#>\n \n
                SELECT ?nama ?lokasi ?kota ?gambar ?jenis ?deskripsi ?harga ?jam ?hari\n
                WHERE\n
                    {\n 
                        ?w     ws:nama    ?nama ;\n        
                        ws:lokasi    ?lokasi ;\n        
                        ws:kota    ?kota ;\n        
                        ws:gambar    ?gambar ;\n        
                        ws:jenis    ?jenis ;\n        
                        ws:deskripsi ?deskripsi ;\n        
                        ws:harga     ?harga ;\n        
                        ws:jam       ?jam ;\n        
                        ws:hari      ?hari .\n\n  
                        FILTER contains(lcase(str(?jenis)), lcase(str(\"".$jenis."\")))\n}";
                        
        $options = [
            'headers'=>[
                "Accept" => "application/sparql-results+json,*/*;q=0.9",
                "Content-Type" => "application/x-www-form-urlencoded; charset=UTF-8"
            ],
            'form_params' => [
                "query" => $query,
            ]
        ];
        $response = $this->client->request('POST',"/weesata/query", $options);
        $json = json_decode($response->getBody()->getContents());
        // dd($json);
        return response()->json([
            'status' => 'Data pencarian berdasarakan jenis : '.$jenis.' berhasil diambil',
            'response'=> $json->results->bindings
        ],200);
    }

    public function searchbykota($kota){
        $query="PREFIX ws: <http://weesata.com/ns/weesatalist#>\n \n
                SELECT ?nama ?lokasi ?kota ?gambar ?jenis ?deskripsi ?harga ?jam ?hari\n
                WHERE\n
                    {\n 
                        ?w     ws:nama    ?nama ;\n        
                        ws:lokasi    ?lokasi ;\n        
                        ws:kota    ?kota ;\n        
                        ws:gambar    ?gambar ;\n        
                        ws:jenis    ?jenis ;\n        
                        ws:deskripsi ?deskripsi ;\n        
                        ws:harga     ?harga ;\n        
                        ws:jam       ?jam ;\n        
                        ws:hari      ?hari .\n\n  
                        FILTER contains(lcase(str(?kota)), lcase(str(\"".$kota."\")))\n}";
                        
        $options = [
            'headers'=>[
                "Accept" => "application/sparql-results+json,*/*;q=0.9",
                "Content-Type" => "application/x-www-form-urlencoded; charset=UTF-8"
            ],
            'form_params' => [
                "query" => $query,
            ]
        ];
        $response = $this->client->request('POST',"/weesata/query", $options);
        $json = json_decode($response->getBody()->getContents());
        // dd($json);
        return response()->json([
            'status' => 'Data pencarian berdasarakan kota : '.$kota.' berhasil diambil',
            'response'=> $json->results->bindings
        ],200);
    }
    public function searchbykondisi(Request $request){
        $query="PREFIX ws: <http://weesata.com/ns/weesatalist#>\n \n
                SELECT ?nama ?lokasi ?kota ?gambar ?jenis ?deskripsi ?harga ?jam ?hari\n
                WHERE\n
                    {\n 
                        ?w     ws:nama    ?nama ;\n        
                        ws:lokasi    ?lokasi ;\n        
                        ws:kota    ?kota ;\n        
                        ws:gambar    ?gambar ;\n        
                        ws:jenis    ?jenis ;\n        
                        ws:deskripsi ?deskripsi ;\n        
                        ws:harga     ?harga ;\n        
                        ws:jam       ?jam ;\n        
                        ws:hari      ?hari .\n\n  
                        FILTER contains(lcase(str(?kota)), lcase(str(\"".$request['kota']."\")))\n  
                        FILTER contains(lcase(str(?nama)), lcase(str(\"".$request['nama']."\")))\n  
                        FILTER contains(lcase(str(?jenis)), lcase(str(\"".$request['jenis']."\")))\n}";

                    $options = [
                        'headers'=>[
                            "Accept" => "application/sparql-results+json,*/*;q=0.9",
                            "Content-Type" => "application/x-www-form-urlencoded; charset=UTF-8"
                        ],
                        'form_params' => [
                            "query" => $query,
                            //"_token" =>"g7d0oQkYRCIm1FGloFGwf8kXwdnNINu5JowPoV0f"
                        ]
                    ];
                    $response = $this->client->request('POST',"/weesata/query", $options);
                    $json = json_decode($response->getBody()->getContents());
                    // dd($json);
                    // return $query;
                    return response()->json([
                        'status' => 'Data pencarian berdasarakan kota : '.$request['kota'].' , nama : '.$request['nama'].' , kategori : '.$request['jenis'].' berhasil diambil',
                        'response'=> $json->results->bindings
                    ],200);
    }
}
