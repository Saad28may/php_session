
<form method="POST">
<h1>Form 1</h1>
Color : <br><input type="radio" name="color" value="red">Red
<input type="radio" name="color" value="green">Green
<button type= "submit" name="submit">Submit </button>
</form>

<?php
if(isset($_POST["submit"])){
session_start();
$_SESSION['form1'] = $_POST["color"];
header('Location: form2.php');
exit;
}
//check
?>