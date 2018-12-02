

<?php session_start();
//to use session variables
//This is the first page that will be shown when server is run
?>
<html>
  <head>
    <link rel="stylesheet" href="public/static/style2.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src= 'public/static/script.js'></script>
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">

  </script>
  </head>
  <body class="containerfluid">

  <div class="loader">
  <span class="loader__inner"></span>
  <span class="loader__inner"></span>

  <div style= "text-align: center; color: white;font-size: 40px;font-family:'Orbitron', sans-serif;
  "><h2>Q.me</h2>


  </div>
</div>

<div style= 'position: absolute; bottom: 0; left: 40%; height: 50%'>
  <a href= "<?php
    if(!isset($_SESSION['user']))  //if user is not logged in this button will redirect to login page
      echo 'public/templates/login.php';

    else  //if user is logged in this button will redirect to questions page
        echo 'public/templates/questions.php';

    ?>" style= 'text-decoration: none'><h4 style= "text-align: center; color: white;font-size: 25px;font-family:'Orbitron', sans-serif;">Enter the world</h4></a>
</div>

  </body>
</html>
