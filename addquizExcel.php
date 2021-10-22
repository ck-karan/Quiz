<?php
session_start();
include "adminHeader.php";
?>
<br>

<center>
<form action="addQuizFromExcel.php" method="post" enctype="multipart/form-data">

New Quiz Name : <input type = 'text' name='qname' required><br><br>
About Quiz : <textarea name='info'></textarea> <br><br>
Quiz Difficulty : 
    <select name="diff">
        <option value="Low">Low</option>
        <option value="Medium">Medium</option>
        <option value="High">High</option>
    </select>
    <br><br>

Select file: <input type="file" name="file" required/>

<br><br>    
      <p><button type="submit" name="submit">Submit</button></p>
</form>
</center>