<!DOCTYPE html>
<html>
  <head>
    <title> -- Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles-profile.css" rel="stylesheet" media="screen">
  </head>
  <body id="home" class="home-index">

    <div class="body-header">
      <section class="container index"> 
        <div class="header-container">                      
          <?php include "_/components/php/header.php"; ?>   
        </div>   
          
      </section>
    </div>
    

    <div class="body-profile-contact">
      <section class="container">  
           <div class="profile-contact-container">                  
             <?php include "_/components/php/profile-contact.php";?>
          </div>
      </section>
    </div>

    <div class="body-user-recommendation">
      <section class="container">  
           <div class="profile-contact-container">                  
             <?php include "_/components/php/user-recommendation.php";?>
          </div>
      </section>
    </div>

    <div class="body-ideas-teams">
      <section class="container">  
           <div class="ideas-teams-container">                  
             <?php include "_/components/php/ideas-teams.php";?>
          </div>
      </section>
    </div>

    <div class="body-favorite-idea">
      <section class="container">  
           <div class="favorite-idea-container">                  
             <?php include "_/components/php/favorite-idea.php";?>
          </div>
      </section>
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
