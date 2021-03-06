<!DOCTYPE html>
<html>
  <head>
    <title> -- Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles-all.css" rel="stylesheet" media="screen">        
    <!-- <link href="_/css/mystyles-profile.css" rel="stylesheet" media="screen"> -->
  </head>
  <body id="home" class="home-index">

    <div class="body-header">
        <div class="header-container">                      
          <?php include "_/components/php/header.php"; ?>   
        </div>          
    </div>
    
    <div class="body-profile-contact">
           <div class="profile-contact-container index-profile">                  
             <?php include "_/components/php/profile-contact.php";?>
          </div>
    </div>

    <div class="body-user-recommendation">
           <div class="profile-contact-container index-profile">                  
             <?php include "_/components/php/profile-user-recommendation.php";?>
          </div>
    </div>

    <div class="body-ideas-teams">
           <div class="ideas-teams-container index-profile">                  
             <?php include "_/components/php/profile-ideas-teams.php";?>
          </div>
    </div>

    <div class="body-favorite-idea">
           <div class="favorite-idea-container index-profile">                  
             <?php include "_/components/php/profile-favorite-idea.php";?>
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
