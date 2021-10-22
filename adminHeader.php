<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script type="text/javascript">
        $("a").click(function(){
                $("a").css("background-color", "");
                $(this).css("background-color", "black");
        });
  
  </script>
</head>
 <body style="background-color:#f0e5d5;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">Quiz Buzzz</a>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav navbar-nav">
      <li class="nav-item"><a class="nav-link" href = "homeAdmin.php">Home</a></li>
      <li class="nav-item"><a class="nav-link" href = "allQuizes.php">Quizes</a></li>
      <li class="nav-item"><a class="nav-link" href = "resultSelect.php">Results</a></li>
      <li class="nav-item"><a class="nav-link" href = "addQuizSelect.php">Add Quiz</a></li>
      <li class="nav-item"><a class="nav-link" href = "deleteQuiz.php">Delete</a></li>
      <li class="nav-item"><a class="nav-link" href = "about.php">About Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right ml-auto">
      <li class="nav-item"><a class="nav-link" href="profile.php"><img src="images/user3.jfif" width="25" height="25"><?php echo " ".$_SESSION['uname']." " ; ?></a></li>
      <li class="nav-item"><a class="nav-link" href="logout.php"><img src="images/logout.png" width="25" height="25"></span>&nbsp;Log Out</a></li>
    </ul>
  </div>
</div>
</nav>
