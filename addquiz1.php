<?php
session_start();
include "adminHeader.php";
?>
<br>

<center>
<form action = 'createquiz.php' method = 'post'>
New Quiz Name : <input type = 'text' name='qname' required><br><br>
About Quiz : <textarea name='info'></textarea> <br><br>
Quiz Difficulty : 
    <select name="diff">
        <option value="Low">Low</option>
        <option value="Medium">Medium</option>
        <option value="High">High</option>
    </select>
    <br><br>
Add Questions maniually : <input type = 'submit' value='Add'>
</form>
<br><br>

<center>

