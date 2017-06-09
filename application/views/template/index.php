<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>My Site</title>
  <style type="text/css">
  #header{
    background: black;
    padding: 2px;
  }
  #header ul > li{
    display: inline;
    list-style-type: none;
    padding-right: 10px;
  }
  #header li a{
    color: white;
    text-decoration: none;
    padding: 5px;
  }
  #header li > a:hover{
    background: white;
    color: black;
  }
  #content{
    background: #EBEBEB;
    min-height: 450px;
    padding: 10px;
  }
  #footer{
    background: black;
    padding: 5px;
    color: white;
    text-align: center;
  }
  </style>
</head>
<body>
<div id="header">
  <!-- <?php 
  /*
   * Variabel $headernya diambil dari libraries template.php
   * (application/libraries/template.php)
   * */
  echo $headernya; ?> -->
</div>
<div id="content">
  <!-- <?php 
  /*
   * Variabel $contentnya diambil dari libraries template.php
   * (application/libraries/template.php)
   * */
  echo $contentnya; ?> -->
</div>
<div id="footer">
 <!--  <?php 
  /*
   * Variabel $footernya diambil dari libraries template.php
   * (application/libraries/template.php)
   * */
  echo $footernya; ?> -->
</div>
</body>
</html>