<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="library/min.css"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Message Board</title>
</head>
<body>

    <?php 
        // include("includes/nav.php");
        if(!isset($_REQUEST["page"])){
            if(isset($_SESSION["user"])){
                include("includes/dashboard.inc.php");
            }else{
                include("includes/main.inc.php");
            }
        }else{
            $pageName = $_REQUEST["page"];
            $nextPage = "includes/$pageName.inc.php";
            include($nextPage);
        }
      ?>
      <!-- JS script -->
      <script src="library/min.js"></script>
</body>
</html>