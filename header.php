<?php
?>
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
</head>
<div class="topnav"><center>
        <center>
<a href = "home.php">Home</a>
<a href = "quiz.php">Quiz</a>
<a href = "results.php">Result</a>
<a href = "profile.php">Profile</a>
<a href = "about.php">About Us</a>
<a href = "logout.php">LogOut</a>
</center>
</div>


<h5 align="right">
<a href="profile.php" class="button">User : <?php echo $_SESSION['uname']; ?></a></h5>

