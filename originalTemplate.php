<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
  include("dbconnect.php");
?>
<html>
<head>
<title>Welcome to Carsss</title>

<link href="styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
    <?php
        include("header.php");
    if(!isset($_GET['page'])){
        ?><div class="banner">
            <!--<img src="images/banner.jpg"/> -->       
          </div>
        <?php
      }
    ?>
    <div class="maincontent">
      <?php
        if(!isset($_GET['page'])){
          include("home.php");
        } else {
          $page = $_GET['page'];
          include("$page.php");
        }
      ?>

 <!-- main content goes here-->
      <p>Welcome to the Carsss Website</p>
  </div>
   <div class="seccontent">
    <table width="259" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" class="textheading">Contact:</td>
    <td><p>admin@carsss.com</p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
    </div><!--End of secondary content-->

	<div class="footer"></div>
</div><!-- Container ends here-->
</body>
</html>
