<!DOCTYPE html>
<html>
  <head>
    <title> -- Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles-all.css" rel="stylesheet" media="screen">        
    <!-- <link href="_/css/mystyles-project-page-logged-in.css" rel="stylesheet" media="screen"> -->
  </head>
  <body id="home" class="home-index">

    <div class="body-header">
        <div class="header-container">                      
          <?php include "_/components/php/header.php"; ?>   
        </div>           
    </div>

	  <div class="body-project-page-logged-in-title">
	      <div class="project-page-logged-in-title-container index-project-page-logged-in">                      
	        <?php include "_/components/php/project-page-logged-in-member-title.php"; ?>   
	      </div>         
	  </div>

   	<div class="body-project-page-logged-in-main">
       <div class="project-page-logged-in-main-container index-project-page-logged-in">                  
         <?php include "_/components/php/project-page-logged-in-member-main.php"; ?>
      </div>
    </div>
    
    <div class="body-footer">
       <div class="header-container">                      
         <?php include "_/components/php/footer.php"; ?>
       </div>
    </div>

    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>
