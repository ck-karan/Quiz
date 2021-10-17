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


<div class="quiz">
<h2 style="color:dark;" align="center">		
		Online quizzes are a popular form of entertainment for web surfers. Online quizzes are generally
		 free to play and for entertainment purposes only though some online quiz websites offer prizes.
		 Websites feature online quizzes on many subjects.
		<p>
		This website helps in daily basis for students for improving their skills in Computer Science Field. Quiz Buzz is also useful to take test online in colleges which very time consuming and effort consuming.
</p></h2></div>
    <?php include "footer.php"; ?>

</body>
