$(":button").click( function() {
 // var data = $("#edituser3 :input #edit").serializeArray();
 //   $.post( $("#edituser3").attr("action"),data, function(info) { $("#dynamicuser").html(info) });
    
   // var name = $("input #edit").val();
   var val = $(":button #edit").click().val();
   $.post( $("#edituser3").attr("action"),val, function(info) { $("#dynamicuser").html(info) });
    alert(val);
});