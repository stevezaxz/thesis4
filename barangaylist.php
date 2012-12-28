<?php
session_start();

if(isset($_SESSION['uid'])) {
    include_once("barangaylist.php");
}
elseif(!(isset($_SESSION['uid']))) {
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html>
    <?php 
    include 'connectdb.php';
    include('tabs-pills.html');
  
    //include('start.html');

    ?>
    <title>Youth Development Program</title> 

    <head>
       
        <script type="text/javascript" src="js/jquery.validate.js"></script>
       <script src="js/getblist.js"></script> 
        
        
        <style type="text/css">
                label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
                p { clear: both; }
                .submit { margin-left: 12em; }
                em { font-weight: bold; padding-right: 1em; vertical-align: top; }
        </style>
  <script>
  $(document).ready(function(){
    $("#form_validation").validate();
  });
  </script>
        
    </head>   
    
    
    
<link href="css/bootstrap.css" rel="stylesheet"> 

<body style="background: url(img/retro.jpg);">

        <div class="container" style='margin-top: 60px;' position: relative;>
               <div class="hero-unit">  
			   <div class="head">
                   <center>
                      <h3>Barangay Record List</h3>
                   </center>
				</div>
         
        <div class="row-fluid">
                <div class="span12">
   <!-- <fieldset id="fsdyna"> -->
	<legend>   <h3>Information</h3> </legend>
                            <div class="row-fluid">
                                  <form action="getbarangaylist.php" name="getlist" id="getlist">
									          
		 <select id="barangaylist" name="barangaylist" onchange="showUser(this.value)">
									 <option value="Agusan">Agusan</option>
                                                                    <option value="Baikingon">Baikingon</option>
                                                                    <option value="Balubal">Balubal</option>
                                                                    <option value="Balulang">Balulang</option>
                                                                    <option value="Bayabas">Bayabas</option>
                                                                    <option value="Bayanga">Bayanga</option>
                                                                    <option value="Besigan">Besigan</option>
                                                                    <option value="Bonbon">Bonbon</option>
                                                                    <option value="Bugo">Bugo</option>
                                                                    <option value="Bulua">Bulua</option>
                                                                    <option value="Camaman-an">Camaman-an</option>
                                                                    <option value="Canitoan">Canitoan</option>
                                                                    <option value="Carmen">Carmen</option>
                                                                    <option value="Consolacion">Consolacion</option>
                                                                    <option value="Cugman">Cugman</option>
                                                                    <option value="Dansolihon">Dansolihon</option>
                                                                    <option value="F.S Catanico">F.S Catanico</option>
                                                                    <option value="Gusa">Gusa</option>
                                                                    <option value="Indahag">Indahag</option>
                                                                    <option value="Iponan">Iponan</option>
                                                                    <option value="Kauswagan">Kauswagan</option>
                                                                    <option value="Lapasan">Lapasan</option>
                                                                    <option value="Lumbia">Lumbia</option>
                                                                    <option value="Macabalan">Macabalan</option>
                                                                    <option value="Macasandig">Macasandig</option>
                                                                    <option value="Mambuaya">Mambuaya</option>
                                                                    <option value="Nazareth">Nazareth</option>
                                                                    <option value="Pagalungan">Pagalungan</option>
                                                                    <option value="Pagatpat">Pagatpat</option>
                                                                    <option value="Pigsag-an">Pigsag-an</option>
                                                                    <option value="Puerto">Puerto</option>
                                                                    <option value="San Simon">San Simon</option>
                                                                    <option value="Tablon">Tablon</option>
                                                                    <option value="Taglimao">Taglimao</option>
                                                                    <option value="Tagpangi">Tagpangi</option>
                                                                    <option value="Tignapoloan">Tignapoloan</option>
                                                                    <option value="Tuburan">Tuburan</option>
                                                                    <option value="Barangay 1">Barangay 1</option>
                                                                    <option value="Barangay 2">Barangay 2</option>
                                                                    <option value="Barangay 3">Barangay 3</option>
                                                                    <option value="Barangay 4">Barangay 4</option>
                                                                    <option value="Barangay 5">Barangay 5</option>
                                                                    <option value="Barangay 6">Barangay 6</option>
                                                                    <option value="Barangay 7">Barangay 7</option>
                                                                    <option value="Barangay 8">Barangay 8</option>
                                                                    <option value="Barangay 9">Barangay 9</option>
                                                                    <option value="Barangay 10">Barangay 10</option>
                                                                    <option value="Barangay 11">Barangay 11</option>
                                                                    <option value="Barangay 12">Barangay 12</option>
                                                                    <option value="Barangay 13">Barangay 13</option>
                                                                    <option value="Barangay 14">Barangay 14</option>
                                                                    <option value="Barangay 15">Barangay 15</option>
                                                                    <option value="Barangay 16">Barangay 16</option>
                                                                    <option value="Barangay 17">Barangay 17</option>
                                                                    <option value="Barangay 18">Barangay 18</option>
                                                                    <option value="Barangay 19">Barangay 19</option>
                                                                    <option value="Barangay 20">Barangay 20</option>
                                                                    <option value="Barangay 21">Barangay 21</option>
                                                                    <option value="Barangay 22">Barangay 22</option>
                                                                    <option value="Barangay 23">Barangay 23</option>
                                                                    <option value="Barangay 24">Barangay 24</option>
                                                                    <option value="Barangay 25">Barangay 25</option>
                                                                    <option value="Barangay 26">Barangay 26</option>
                                                                    <option value="Barangay 27">Barangay 27</option>
                                                                    <option value="Barangay 28">Barangay 28</option>
                                                                    <option value="Barangay 29">Barangay 29</option>
                                                                    <option value="Barangay 30">Barangay 30</option>
                                                                    <option value="Barangay 31">Barangay 31</option>
                                                                    <option value="Barangay 32">Barangay 32</option>
                                                                    <option value="Barangay 33">Barangay 33</option>
                                                                    <option value="Barangay 34">Barangay 34</option>
                                                                    <option value="Barangay 35">Barangay 35</option>
                                                                    <option value="Barangay 36">Barangay 36</option>
                                                                    <option value="Barangay 37">Barangay 37</option>
                                                                    <option value="Barangay 38">Barangay 38</option>
                                                                    <option value="Barangay 39">Barangay 39</option>
                                                                    <option value="Barangay 40">Barangay 40</option>

								  </select>    
									
									
									
									
									
								</form>
		
									<div class="span12" id="dynamicrecords" name="dynamicrecords">
									
									
									
									</div>
      
                            </div>
              </div>
                </div>
         </div>
                   
            </form>
                   
                   
                   
            </div>
        </div>
    
    
   
    
    
    
    
    
    
    
    
</body>


<div class="footer">
      <footer>
        <center><p>&copy; 2012 &nbsp; Community Improvement Division</p></center>
      </footer>
</div>
<script src="js/jquery.js"></script>



</html>