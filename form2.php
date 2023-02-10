<!-- how to set value of previous page into html -->

<form method="POST">
<h1>Form 2</h1>
Color : <br><input type="radio" name="color2" value="red">Red
<input type="radio" name="color2" value="green">Green
<input type="hidden" name="form1val" value="<?php echo $_POST["color"] ?>">
<button type= "submit" name="submit2">Submit </button>
</form>


<?php

if(isset($_POST["submit2"])){

$form2 = $_POST["color2"];

if( $_POST["form1val"] == "green" && $form2=="green"){
    header('Location: green.php');
    exit;
}
elseif( $_POST["form1val"] == "red" && $form2=="red"){
    header('Location: red.php');
    exit;
}
else{
    header('Location: thankyou.php');
    exit;   
}
}
?>