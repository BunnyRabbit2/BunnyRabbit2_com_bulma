<!DOCTYPE html>
<html lang="en">

<head>
  <title>My custom Bulma website</title>
  <link rel="stylesheet" href="css/mystyles.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

</head>

<body class="has-navbar-fixed-top">
  <?php include("navbar.php"); ?>
    
  <?php include("profile.php"); ?>

  <?php include("portfolio.php"); ?>

  <?php include("about.php"); ?>
	
	<?php include("contact.php"); ?>
	
	<?php include("footer.php"); ?>

  <script type="text/javascript" src="/js/bulma-accordion.min.js"></script>
  <script type="text/javascript" src="/js/rabbit.js"></script>

</body>

</html>