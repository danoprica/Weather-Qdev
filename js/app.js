

$(function(){

// aici initializezi chestii
// alert('m-am incarcat');

// app.bagaAlert('slbz');

// Adauga event cand da click pe search sa apeleze functia

$('.navbar-brand').on('click',function(){

    alert(1);

})

});


app = {


	getWeather: function(){
		
        // ia valoarea searchboxului
        city = $("#searchTerm").val();
       
        //alert(city);

        $.ajax({
            type: 'POST',
            url: 'php/core-ajax.php?req=getWeather',
            data: {city:city},
            dataType: 'html',
            // async: false,
            success: function(data){
                console.log(data);
            }
        });

    },

    bagaAlert: function(value){
        alert(value);
    }


}