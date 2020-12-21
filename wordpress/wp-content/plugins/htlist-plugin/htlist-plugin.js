(function($){ 


    $('.hi').on('click',function(){
        alert('hi');
    });

   

    $(document).ready(function(){
        $(".he").click(function(){
            var vid=$(this).attr("id");
            //alert(vid);
            $.ajax({
                url: ajax_object.ajaxurl, // this is the object instantiated in wp_localize_script function
                type: 'POST',
                data:{ 
                  action:'htajax', // this is the function in your functions.php that will be triggered
                  vid: vid,
                },
                success: function( data ){
                  $("#ress").html(data);    
                  //Do something with the result from server
                  console.log( data );
                }
              });           
        });
    });
}(jQuery));