<?php
session_start();
echo "<br><h3 align='right'>Admin : ".$_SESSION['uname']."&emsp;&emsp;&emsp;&emsp;<h3>";

$_SESSION['addquiz'] = $_GET['qname'];
echo "Quiz Name : ".$_SESSION['addquiz'];

?>

<center><form action = 'addquiz.php' method = 'post'>

Que : <input type='text' name='que' required><br><br>
        option a : <input type='text' name='a' required>&emsp;&emsp;&emsp;&emsp;
        option b : <input type='text' name='b' required><br><br>
        option c : <input type='text' name='c' required>&emsp;&emsp;&emsp;&emsp;
        option d : <input type='text' name='d' required><br><br>
                                                        <br>
        answer : <input type='text' name='ans' required><br>
<br><br>

<br><br>
<input type='submit' value= 'Submit Quiz'>
</form>
<br><br>
<a href='addque.php'><button >Add 1 more que</button></a>
</center>


