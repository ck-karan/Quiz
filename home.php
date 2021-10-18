<?php
session_start();
if(!(isset($_SESSION['uname'])))
    header("Location:index.html");
?>

<head>
        <title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
include "header.php";
?>

<div class="col-xs-12" style="position: relative; padding-right: 0px; background-color: orange;margin: 0px 0px 50px;">
                                <h1 style="line-height: 40px; font-size: 30px; font-family: Verdana; font-weight: normal; padding: 10px; margin: 10px">
                                <center>Welcome to Quiz Buzz !</center>
                                </h1>
</div>

<center>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://source.unsplash.com/1080x360/?exam,computer" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/1080x360/?exam" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src=https://source.unsplash.com/1080x360/?exam" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<br>

<div class="card text-dark bg-light mb-1" style="max-width: 50rem;">
  <div class="card-header">Examination System</div>
  <div class="card-body">
    <h5 class="card-title">Quizes...!</h5>
    <p class="card-text">Online quizzes are a popular form of entertainment for web surfers. Online quizzes are generally
		 free to play and for entertainment purposes only though some online quiz websites offer prizes.
		 Websites feature online quizzes on many subjects.
		This website helps in daily basis for students for improving their skills in Computer Science Field. Quiz Buzz is also useful to take test online in colleges which very time consuming and effort consuming.</p>
  </div>
</div>
</center>
    <?php include "footer.php"; ?>

</body>
