<!DOCTYPE html>
<html>
  <head>
    <title> -- Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles-logged-in.css" rel="stylesheet" media="screen">
  </head>
  <body id="home" class="home-idex-logged-in">

		<div class="body-header">
      <section class="container index"> 
        <div class="header-container">                      
          <?php include "_/components/php/header.php"; ?>   
        </div>   
      </section>
    </div>
      
    <div class="body-welcom-user">
      <section class="container index">     
        <div class="welcome-user-container row">
           <?php include "_/components/php/welcome-user.php"; ?>
        </div>
      </section>
    </div>

    <div class="body-welcom-user1">
      <section class="container index">     
        <div class="welcome-user-container row">
           <?php include "_/components/php/index-logged-in-related-area.php"; ?>
        </div>
      </section>
    </div>

    <div class="body-challenges-logged-in">  
      <section class="container index">   
        <div class="challenges-logged-in-container row">
                <?php include "_/components/php/challenges-logged-in.php"; ?>
        </div><!-- register -->  
      </section>
    </div>

    <div class="body-category-logged-in">  
      <section class="container index">   
        <div class="category-logged-in-container row">
                <?php include "_/components/php/category-logged-in.php"; ?>
        </div><!-- register -->     
                    
      </section>
    </div>

    <div class="body-recommended-logged-in">  
      <section class="container index">   
        <div class="recommended-logged-in-container row">
                <?php include "_/components/php/recommended-category-logged-in.php"; ?>
        </div><!-- register -->     
      </section>
    </div>

       <div class="body-popular-idea">

          <div class="popular-idea-container row">
                  <?php include "_/components/php/popular-idea.php"; ?>
       </div>

<div class="body-footer">
      <section class="container">   
       <div class="header-container">                      
         <?php include "_/components/php/footer.php"; ?>
       </div>
      </section>
    </div>

    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>
