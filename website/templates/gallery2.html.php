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
      <p id="title"><strong>FOOD</strong></p>
      <p><img class="photo" alt="10" src="10.jpg"></p>
      <p><img class="photo" alt="11" src="11.jpg"></p>
      <p><img class="photo" alt="12" src="12.jpg"></p>
      <p><img class="photo" alt="13" src="13.jpg"></p>
    </div>
  </div>	 
  <div id="navigation">
    <p><strong>Contents</strong></p>
    <ul>
      <li><a href="/gallery">Gallery - Bicycle</a></li>
      <li><a href="/gallery2">Gallery - Food</a></li>
    </ul>
  </div>
  <div id="extra">
    <p><strong>More stuff here.</strong></p>
    <p>sit malesuada lacus pellus parturpiscing. Pellenterdumat maecenatoque cras a magna nibh et quis diam ames et. Laoremvolutpat ac dolor eget eget temper lacus vestibus velit lacus venean. Magnaipsum tellus morbi leo aliquat nulla convallis pellentesque.</p>
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