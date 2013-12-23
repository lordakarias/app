<!DOCTYPE html>
<html>
  <head>
    <title> -- Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles-all.css" rel="stylesheet" media="screen">    
    <!-- <link href="_/css/mystyles-logged-in.css" rel="stylesheet" media="screen"> -->
  </head>
  <body id="home" class="home-idex-logged-in">

		<div class="body-header">
        <div class="header-container">                      
          <?php include "_/components/php/header.php"; ?>   
        </div>   
    </div>
      
    <div class="body-home-logged-in-welcom-user">
        <div class="welcome-user-container index-home-logged-in">
          <?php include "_/components/php/home-logged-in-welcome-user.php"; ?>
        </div>
    </div>

    <div class="body-home-logged-in-related-area">
        <div class="welcome-user-container index-home-logged-in">
          <?php include "_/components/php/home-logged-in-related-area.php"; ?>
        </div>
    </div>

    <div class="body-home-logged-in-challenges">  
        <div class="challenges-logged-in-container index-home-logged-in">
          <?php include "_/components/php/home-logged-in-challenges.php"; ?>
        </div><!-- register -->  
    </div>

    <div class="body-home-logged-in-category">  
        <div class="category-logged-in-container index-home-logged-in">
          <?php include "_/components/php/home-logged-in-category.php"; ?>
        </div><!-- register -->                         
    </div>

    <div class="body-home-logged-in-recommended">  
        <div class="recommended-logged-in-container index-home-logged-in">
          <?php include "_/components/php/home-logged-in-recommended-challenges.php"; ?>
        </div><!-- register -->     
    </div>

    <div class="body-popular-idea">
      <div class="popular-idea-container index">
        <?php include "_/components/php/popular-idea.php"; ?>
      </div><!-- popular-idea-container -->
    </div><!--  body-popular-idea -->

   <div class="body-footer">
       <div class="header-container">                      
         <?php include "_/components/php/footer.php"; ?>
       </div>
    </div>

    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>
