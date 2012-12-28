$("#submit").click( function() {
   
   
   if(($("#form_validation #fname").val()=="")) {
        
    }
  
  
  else if(($("#form_validation #mname").val()=="")) {
        
    }
    

   else if(($("#form_validation #lname").val()=="")) {
        
    }
    
    
   else if(($("#form_validation #username").val()=="")) {
       
    }
    
    else if(($("#form_validation #password").val()=="")) {
      
    }
    
    
    else {
          var data = $("#form_validation").serializeArray();
          $.post( $("#form_validation").attr("action"),data, function(info) { $("#result").html(info) }); 
       
          $("#hidden").fadeIn(3000);
          $("#hidden").fadeOut(3000);
        
        
    }
    
    
    
    
    
});
   
/////////////////
/////////////////
$("#form_validation").submit( function() {
     
  return false;
  
});


function clear() {
    $("#form_validation :input").each(function() {
       $(this).val(''); 
        
    });
    
    
}