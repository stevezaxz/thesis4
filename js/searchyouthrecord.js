$("#fname").keyup(function() {
  //  alert("asd");
//    if(!($("#fname").val()=="") && $("#lname").val()=="") {
       // alert("test");//check
    
        
     var data = { barangaylist:$("#barangaylist option:selected").val(), fname:$("#fname").val(), flag:"1" };
       $.post($("#searchrecordlist").attr("action"),data, function(info) { $("#dynamicrecords").html(info) })
       
       
       
 //   }
 
});

$("#lname").keyup(function() {
    if(!($("#lname").val()=="") && $("#fname").val()=="") {
       // alert("tes2t");//check
       
        var data = { barangaylist:$("#barangaylist option:selected").val(), lname:$("#lname").val(), flag:"2" };
       $.post($("#searchrecordlist").attr("action"),data, function(info) { $("#dynamicrecords").html(info) })
       
    }

});

$("#fname").keyup(function() {
   if(!($("#fname").val()=="") && !($("#lname").val()=="")) {
     //  alert("test3");
      
     var data = { barangaylist:$("#barangaylist option:selected").val(), fname:$("#fname").val(), lname:$("#lname").val(), flag:"3" };
       $.post($("#searchrecordlist").attr("action"),data, function(info) { $("#dynamicrecords").html(info) })
   } 
    
});


$("#lname").keyup(function() {
   if(!($("#fname").val()=="") && !($("#lname").val()=="")) {
   //    alert("test4");
   var data = { barangaylist:$("#barangaylist option:selected").val(), fname:$("#fname").val(), lname:$("#lname").val(), flag:"4" };
       $.post($("#searchrecordlist").attr("action"),data, function(info) { $("#dynamicrecords").html(info) })
   } 
    
});





