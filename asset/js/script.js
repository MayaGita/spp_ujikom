
$(function(){

    $(".Mymodal").on('click', function(){
     

        const id = $(this).data('id');

  
      
       
        
        $.ajax({
            type : "POST",
            data: {id : id},   
            url : 'http://localhost/spp_ujikom/entry/insert',
            dataType: 'json',
            success: function(){

            }

             
            
        });
        

       
    });




});

