<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Free Css Layout</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<body>
<div id="container">
<div id="header"><h1><a href="/">Junhyeok's Gallery</a></h1></div>
  <div id="wrapper">
    <div id="content">
      <p id="title"><strong>Your photos</strong></p>
      <?php 
      	foreach($images as $image) { 
      		echo '<img src="/upload/' . $image . '" />';
      	}
      ?>
    </div>
  </div>	 
  <div id="navigation">
    <p><strong>Contents</strong></p>
    <ul>
      <li><a href="/gallery">Gallery - Bicycle</a></li>
      <li><a href="/gallery2">Gallery - Food</a></li>
      <li><a href="/upload">Gallery - Upload file</a></li>
    </ul>
    <form method="post" enctype="multipart/form-data">
    <input type="file" name="file" />
    <input type="submit" />
    </form>
  </div>
  <div id="extra">
        <p><strong>Help</strong></p>
    <p>If you have any question, please contact below.<br/><br/>
    e-mail: jnh03151@gmail.com
    phone: +41 76 280 4468</p>
    </div>
  <div id="footer">
 <?php echo "Hello " . $_SESSION["email"]; ?>
  <form action="/logout" Method="post">
        <input type="submit" value="logout"></input>
    </form>
  </div>
</div>
</body>
</html>