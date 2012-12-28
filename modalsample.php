<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<title>Twitter Bootstrap Modals Example</title> 
<meta name="description" content="Creating Modal Window with Twitter Bootstrap">
<link href="css/bootstrap.css" rel="stylesheet"> 
</head>
<body>
<div class="container">
<h2>Example of creating Modals with Twitter Bootstrap</h2>
			<div id="example" class="modal hide fade in" style="display: none; ">
					<div class="modal-header">
					<a class="close" data-dismiss="modal">×</a>
					<h3>This is a Modal Heading</h3>
					</div>
					
					<div class="modal-body">
					<h4>Text in a modal</h4>
					<p>You can add some text here.</p>		
					<input type="text" name="test" id="test">
					<input type="text" name="test1" id="test1">
							<input type="text" name="test2" id="test2">			
					</div>

					<div class="modal-footer">
					
					<a href="#" class="btn btn-success">Call to action</a>
					<a href="#" class="btn" data-dismiss="modal">Close</a>
					</div>
			</div>
<p><a data-toggle="modal" href="#example" class="btn btn-primary btn-large">Launch demo modal</a></p>
<table id="jan4" name="jan4">

<tr id="jan2" name="jan2" data-toggle="modal" href="#example">

<td id="naj" value="tesasdsad"><?php echo "testt"; ?></td>
<td id="naj1">asd</td>
<td id="naj2">asd1</td>
</tr>

<tr id="jan2" name="jan2" data-toggle="modal" href="#example">

<td id="naj" name="naj"><?php echo "testt"; ?></td>
<td id="naj1">asdasd</td>
<td id="naj2">asasdsad1</td>
</tr>



</table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/bootstrap-modal.js"></script>
<script>
/*$("#test").click(function() {
	var a = $("#jan").val();
	alert(a);

});*/

$("tr").click( function() {
   /*var a= $("#naj").html();
		$("#test").val(a);
  alert(a);*/
		$("#jan4 td").each(function() {
				var value= $("#naj").html();
				$("#test").val(value);
												//alert(value);
				var value1= $("#naj1 ").html();
		
				$("#test1").val(value1);
		
				var value2= $("#naj2").html();
		
				$("#test2").val(value2);
		
		
		});
 
 
  
});





</script>






</body>
</html>
            