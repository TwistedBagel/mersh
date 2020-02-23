
<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Variable Form Tester</title>
<meta charset="utf-8">
<meta name="robots" content="noindex">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<!--[if lt IE 9]>
   <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"> </script>   
<![endif]-->
<style>
	header, main, nav, footer, figure, figcaption { display: block; }
	body { background-color: #eee;
	      color: #666666;
		  font-family: Arial, Helvetica, sans-serif;
	}
	#wrapper { width: 80%;
	           margin-left: auto;
			   margin-right: auto;
			   background-color: #F3F3F3; 
			   min-width: 960px;
			   max-width: 2048px;
			   box-shadow: 0px 2px 10px #333333;
	}
	header { background-color: #1879d0;
	       color: #FFFFFF;
		   text-align: left;
		   padding: 20px;
		   padding:20px;
	}
	h1 { margin-bottom: 0;
	    margin-top: 0;
	    font-family: Georgia, "Times New Roman", serif;
		letter-spacing: 5px;
	} 
	main { padding: 1px 20px 20px 30px; 
	      display: block;
		  background-color: #FFFFFF;
	}
	h2 { color: #424242;
		font-family: Georgia, "Times New Roman", serif;
		text-shadow: 1px 1px 1px #ccc;
	}
	h3 { color: #BA1C21;
		font-family: Georgia, "Times New Roman", serif;
	}
	
	main ul { list-style-image: url(marker.gif);
	}   
	
	@media only screen and (max-width: 64em) {
		body  { margin: 0;
		       background-color: #FFFFFF;
		}
		#wrapper { min-width: 0;
		           width: auto;
				   box-shadow: none;
		}
		#homehero, #yurthero, #trailhero { margin-left: 0;
		            height: 200px; 
		}
		main { margin-left: 0; }
	}
	@media only screen and (max-width: 37.5em) {
	   main { padding: 0.1em 1em;
			 font-size: 90%;
		}
		header { padding-top: 1em; 
		}
		h1 { font-size: 1.5em;
	    }
		
	  }
</style>
</head>
<body>
<div id="wrapper">
<header><h1>PHP Form Variables</h1></header>
<main>
<h4>Below is a list of variables captured</h4>


<?php
	if ($_POST != NULL) {
		echo "<p>The following <strong>POST</strong> variables were received.</p><ul>";
		foreach ($_POST as $key => $value){
			echo "<li><strong>{$key}</strong> = {$value}</li>";
		}
		echo "</ul>";
		}
	if ($_GET != NULL) {	
		echo "<p>The following <strong>GET</strong> variables were received.</p><ul>";
		foreach ($_GET as $key => $value){
			echo "<li><strong>{$key}</strong> = {$value}</li>";
		}
		echo "</ul>";
		}
?>

</main>
</div>
</body>
</html>








