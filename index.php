<?php   
session_start();

 error_reporting(E_PARSE); ?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<title>ARONO REBECCA</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="stylesheet.css" rel="start">
    <!-- MetisMenu CSS -->
<link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
<link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
<link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body style="position:relative; min-height:100%; top:0px; background-image:url(rebecca.png)">

<!--<div id="top-container">

<a class="navbar-brand" href="index.php"><img src="rebecca1.png" style="width:40px; height:40px;">REBECA ARONO</a>      
<ul class="nav navbar-top-links navbar-right">
	<li>
    	<i class="fa fa-star-half fa-fw">RISE</i>
    </li>
</ul>

</div>end of logo-->

<nav class="nav navbar-inverse navbar-fixed-top">
<div class="container-fluid">

	<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
    
    <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a><i class="fa fa-star-o fa-fw"></i>RISE</a>
                </li>
                <!-- /.dropdown -->
            </ul>
    
    <ul style="color:#F00" class=" nav navbar-nav">
    	<li>
        <a href="index.php" class="active">HOME</a>
        </li>
        
        <li>
         <a href="index.php?action=archive">ARCHIVEMENTS</a>
        </li>
        
        <li>
         <a href="index.php?action=experience">EXPERIENCE</a>
        </li>
        
        <li>
         <a href="index.php?action=interest">INTERESTS</a>
        </li>
        
        <li>
         <a href="next.php">GALLARY</a>
        </li>
        
        
    </ul>
</div>

</nav>

<div style="padding-left:150px; padding-right:150px; padding-top:80px; padding-bottom:50px; margin-left:auto; margin-right:auto;">
        <br/>
        <?php
		if(!empty($_REQUEST['action']))
		{			
			include "call.php";
		}
		else{?>
<p align="left"><b><img src="rebecca1.png" style="width:40px; height:40px; padding-right:2px"/>ARONO REBECCA</b></p>
<p><b>Nationality:</b> Ugandan </p>
<p><b> Email: </b>aronorebecca@gmail.com </p>
<p><b>Education:</b> </p>
<p>2011 to 2015:   Bachelor of Science in Software Engineering from Makerere University.</p>  
<p>2009-2010: Uganda Advanced Certificate Of Education St. Paul’s collage Mbale (UACE). </p>  
<p>2005-2008: Uganda Certificate of Education from St. Paul’s collage Mbale (UCE).</p> 
<p><b>Programming Laguages:</b></p>
<p>HTML,PHP,CSS,C# for windows phone,MYSQL,JAVASCRIPT</p>
<p><b>Tasks:</b></p>
<p> ANALYSIS, DESIGN, DEVELOPMENT and TESTING.</p>
<table>
<tr><th><a><i class="fa fa-facebook fa-fw"></i>Rebecca Arono</a></th><th><a><i class="fa fa-twitter fa-fw"></i>arono rebecca</a></th><th><a><i class="fa fa-skype fa-fw"></i>ARONO REBECCA</a></th></tr><tr><th><a><i class="fa fa-instagram fa-fw"></i>arono rebecca</a></th><th><a><i class="fa fa-mobile-phone fa-fw"></i>256 783 196136</a></th></tr>

</table>
			
			<?php }
		
		?>

</div>
        


<div class="nav navbar-inverse navbar-fixed-bottom" style="color:#FFF">
<p align="center"><b>&copy;<?php echo Date("Y"); ?> Arono Rebecca</b></p>
</div>


<script src="js/jquery-1.11.0.js"></script>

    
<script src="js/bootstrap.min.js"></script>

    
<script src="js/plugins/metisMenu/metisMenu.min.js"></script>

  
<script src="js/sb-admin-2.js"></script>

</body>


</html>
