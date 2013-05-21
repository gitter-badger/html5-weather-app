<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>PaToWeather</title>
		<meta name="keywords" content="" />
		<meta name="author" content="" />        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,700|BenchNine:300,400|Quicksand:300,400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
        


        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
        
        
        
        
    </head>
    <body>


    	<div id="app">
	    	
	    	<div class="panel" id="main-panel">
		    	
		    	<div class="panel-contents">
		    	
			    	
			    	<div class="top-left">
				    	<p class="now">teraz:</p>
				    	<p class="city-date">Wrocław, 20.05.2013</p>
			    	</div>
			    	
			    	<div class="temp">
				    	12 <span>o</span>
			    	</div>
			    	
			    	<div class="sky">
				    	<div class="image">
					    	image
				    	</div>
				    	<div class="desc">
					    	<p>asdasd</p>
					    	<p>asdasd2</p>
				    	</div>
			    	</div>
			    	
			    	<div class="more-info">
				    	
				    	more info
				    	
			    	</div>
			    	
			    	
			    	
                
                </div><!-- / panel contents -->

	    	</div><!-- / main panel -->
	    	
	    	
	    	<div class="panel" id="days-panel">
		    	
		    	<div class="panel-contents">
		    	
			    	<div class="day cf">
				    	
				    	<div class="date">
					    	<p>21.05.2013</p>
				    	</div>

				    	<div class="temp">
					    	12 <span>o</span>
				    	</div>
				    	
				    	<div class="sky">
					    	<div class="image">image</div>	
				    	</div>
				    	
				    	<div class="more-info">
					    	<p>more info</p>
					    	<p>more info</p>
				    	</div>
			    	
			    	</div><!-- / single day -->			    	

			    	<div class="day cf">
				    	
				    	<div class="date">
					    	<p>22.05.2013</p>
				    	</div>

				    	<div class="temp">
					    	12 <span>o</span>
				    	</div>
				    	
				    	<div class="sky">
					    	<div class="image">image</div>	
				    	</div>
				    	
				    	<div class="more-info">
					    	<p>more info</p>
					    	<p>more info</p>
				    	</div>
			    	
			    	</div><!-- / single day -->		
			    	
			    	<div class="day cf">
				    	
				    	<div class="date">
					    	<p>23.05.2013</p>
				    	</div>

				    	<div class="temp">
					    	12 <span>o</span>
				    	</div>
				    	
				    	<div class="sky">
					    	<div class="image">image</div>	
				    	</div>
				    	
				    	<div class="more-info">
					    	<p>more info</p>
					    	<p>more info</p>
				    	</div>
			    	
			    	</div><!-- / single day -->					    				    	
                
                </div><!-- / panel contents -->

	    	</div><!-- / days panel -->
	    	
	    	<div class="panel" id="settings-panel">
		    	
		    	<div class="panel-contents">
			    	
					<h2>panel ustawień</h2>
								    	
		    	</div>
		    	
	    	</div><!-- / settings panel -->
	    	
	    	<div class="panel" id="new-city-panel">
		    	
		    	<div class="panel-contents">
			    	
			    	<?php //include('lib/api/getWeather.php'); ?>
	                <h2>Wpisz szukane miasto w formularzu</h2>
	                <form method="post" action="">
	
	                    <input type="text" name="location" value="Wroclaw" />
	                    <input type="submit" name="submit"/>
	
	                </form>
			    	
			    	
		    	</div>
		    	
	    	</div><!-- /new city panel -->
	    	
    	</div><!-- / main app screen -->

    	
        <script src="js/jquery.1.9.1.js"></script>
        <script src="lib/touchswipe/jquery.touchSwipe.min.js"></script>
        <script src="js/engine.js"></script>
        <script src="js/scripts.js"></script>
        
        
    </body>
</html>