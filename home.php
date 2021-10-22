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
<br>
<div class="mx-auto" style="width: 1200px;">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
<!--new carousel -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://source.unsplash.com/1080x360/?exam,school" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Hi</h5>
        <p>Hello...!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://source.unsplash.com/1080x360/?exam,computer" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Hi</h5>
        <p>Hello...!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://source.unsplash.com/1080x360/?exam,college" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Hi</h5>
        <p>Hello...!</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<br>

<div class="align-middle">
<div class="card text-dark bg-light mx-auto" style="max-width: 50rem;">
  <div class="card-header">Examination System</div>
  <div class="card-body">
    <h5 class="card-title">Quiz Buzzz...!</h5>
    <p class="card-text">Online quizzes are a popular form of entertainment for web surfers. Online quizzes are generally
		 free to play and for entertainment purposes only though some online quiz websites offer prizes.
		 Websites feature online quizzes on many subjects.
		This website helps in daily basis for students for improving their skills in Computer Science Field. Quiz Buzz is also useful to take test online in colleges which very time consuming and effort consuming.</p>
  </div>
</div>
</div>
<br><br><br>
    <?php include "footer.php"; ?>

</body>
