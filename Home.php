<!DOCTYPE html>
<html>
  <head>
    <title> -- Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
  </head>
  <body id="home" class="home-index">

    <div class="body-header">
      <section class="container index"> 
        <div class="header-container">                      
          <?php include "_/components/php/header.php"; ?>   
        </div>   
          
      </section>
    </div>
    

    <div class="body-intro">

      <section class="containe">
           <div class="intro-idea-container">    
              
             <?php include "_/components/php/intro.php"; ?>
          </div>
      </section>
    </div>
  

  <div class="body-popular-idea">
    
      <div class="popular-idea-container row">
              <?php include "_/components/php/popular-idea.php"; ?>
      </div><!-- popular-idea -->
  </div>

  <div class="body-idea-area">
      <div class="idea-area-container row">
            <?php include "_/components/php/idea-area.php"; ?>          
      </div><!-- idea-area -->    
  </div>

  <div class="body-teams">
    <section class="container index"> 
        <div class="teams-container row">         
            <?php include "_/components/php/teams.php"; ?>              
        </div>
    </section>
  </div>  


  <div class="body-idea-name">

    <?php include "_/components/php/idea-name.php"; ?>                                                                
  </div>  

  
    <div class="body-footer">
      <section class="container index">   
       <div class="header-container">                      
         <?php include "_/components/php/footer.php"; ?>
       </div>
      </section>
    </div>

    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>
