
$(function(){

    $(".Mymodal").on('click', function(){
     

        const id = $(this).data('id');       

        
        $.ajax({
            url : 'http://localhost/spp_ujikom/entry/insert',
            data: {id : $(id).val()},   
            type : "POST",        
            success: function(data){
                 $('insert').html(data); 
              
            }

             
            
        });
        

       
    });




});

