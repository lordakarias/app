<!DOCTYPE html>
<html>
   <head>
    <title> -- Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles-all.css" rel="stylesheet" media="screen">        
    <!-- <link href="_/css/mystyles.css" rel="stylesheet" media="screen"> -->
  </head>
  <body id="home" class="home-index">

    <div class="body-header">
      <div class="header-container">                      
        <?php include "_/components/php/header.php"; ?>   
      </div><!--header-container-->           
    </div><!--body-header-->
    
    <div class="home-body-intro">
        <div class="home-intro-idea-container index">
          <?php include "_/components/php/home-intro.php"; ?>
        </div>
    </div><!-- body-intro -->
  
    <div class="body-popular-idea">
      <div class="popular-idea-container index">
        <?php include "_/components/php/popular-idea.php"; ?>
      </div><!-- popular-idea-container -->
    </div><!--  body-popular-idea -->

    <div class="home-body-idea-area">
      <div class="home-idea-area-container index">
        <?php include "_/components/php/home-idea-area.php"; ?>          
      </div><!-- idea-area-container -->    
    </div><!-- idea-area-container -->
 
    <div class="home-body-find-teams">
      <div class="home-find-teams-container index">         
        <?php include "_/components/php/home-find-teams.php"; ?>              
      </div><!-- teams-container -->
    </div> <!-- body-teams --> 

    <div class="home-body-idea-name">
      <?php include "_/components/php/home-idea-name.php"; ?>                                                                
    </div>  <!-- body-idea-name -->

  
    <div class="body-footer">
       <div class="footer-container">                      
         <?php include "_/components/php/footer.php"; ?>
       </div>
    </div>

    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>
