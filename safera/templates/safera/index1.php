
  
<!DOCTYPE HTML>
<html>
	<head>
		<?php
$bg = array('001.jpg', '002.jpg', '003.jpg', '004.jpg', '005.jpg', '006.jpg', '007.jpg', '008.jpg', '009.jpg', '010.jpg', '011.jpg', '012.jpg', '013.jpg', '014.jpg', '015.jpg', '016.jpg', '017.jpg', '018.jpg', '019.jpg', '020.jpg', '021.jpg', '022.jpg', '023.jpg', '024.jpg'); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
  ?>
		<link href="{% static '/images/ss.png' %}" rel="shortcut icon">
		<meta name="Author" content="Safera">
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
		<title>Safera</title>
		

<!-- CSS styles for standard search box with placeholder text-->
<style type="text/css">
	.tfclear{
		clear:both;
	}
</style>

	


<style type="text/css">
<!--
body{
background: url({% static 'images/background/'%}<?php echo $selectedBg; ?>) no-repeat;
background-position:center;


}
-->
        </style>
            <style type="text/css">
			.logo {
				width:100px;
				height:100px;
				margin-left:5px;
				
			}
			.safera {
				width:250px;
				height:100px;
			}
			.link {
				width:75px;
				height:75px;
				position:static;
				
			}
			.footer {
				font-family:"Times New Roman", Times, serif;
				font-size:12px;
				color:#999;
				position:static;
				text-align:center;
				text-transform:capitalize;
			}
			.form {
	margin-top:150px;
	height:70px;
	width:400px;
	vertical-align:middle;
	position:static;
	left: 250px;
	top: 250px;
			}

			.top {
				height:100px;
						
			}
			.button {
				visibility:hidden
				
				}
		</style>
            
	</head>
	<body class="body">
   <span class="logo">
      	  <img src=" {% static 'images/S.png' %} " name="logo" alt="Safera"/>
   	    </span>
      	  
           

           <center>
      	          
            <span> <!-- HTML for SEARCH BAR -->
	<div class="text-center col-sm-12 col-md-12">

<form method="get" action="#" id="search_form" role="search">
    <div class="input-group col-md-8 col-md-offset-2">
        <input type="search" name="q" class="form-control input-lg autofocus" id="q" placeholder="Search for..." autocomplete="off" value="">
        <span class="input-group-btn">
            <button type="submit"  class="button"><span class="hide_if_nojs"><span class="glyphicon glyphicon-search"></span></span><span >Start search</span></button>
        </span>
    </div>
</form>
</div>
</span>
</center>

       
      	  <!--This is the Footer of the page. Place items before this line-->        
   
      	<div class="footer" style="margin-top:275px">
        	<b>Copyrights &copy;2018 Safera&reg;. All rights reserved</b>
        </div>
	</body>
</html>