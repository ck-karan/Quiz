<?php
?>
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

<h2 style="color:darkred;" align="right">
<a href="profile.php" style="text-decoration: none; padding:5px 45px; background-color: #2b2b2b; color: #fff;">

<?php
echo $_SESSION['uname']."</a>&emsp;&emsp;&emsp;&emsp;    ";
?></h2>
