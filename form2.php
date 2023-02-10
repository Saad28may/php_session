<form method="POST">
<h1>Form 2</h1>
Color : <br><input type="radio" name="color" value="red">Red
<input type="radio" name="color" value="green">Green
<button type= "submit" name="submit2">Submit </button>
</form>

<?php
session_start();

if(isset($_POST["submit2"])){

$_SESSION['form2'] = $_POST["color"];


if($_SESSION['form1']== "green" && $_SESSION['form2']=="green"){
    header('Location: green.php');
    exit;
}
elseif($_SESSION['form1']== "red" && $_SESSION['form2']=="red"){
    header('Location: red.php');
    exit;
}
else{
    header('Location: thankyou.php');
    exit;   
}
}
?>