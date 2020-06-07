$.ajax({
    url: 'https://weesata.000webhostapp.com/searchbykondisi',
    type: 'POST',
    data: {
        '_token': token
    },
    dataType: "json",
    beforeSend:function(){
        //do stuff
    },
    success: function(data) {
        //do stuff
    },
    error: function(data) {
        //do stuff
    },
    complete: function(){
        //do stuff
    }
});
