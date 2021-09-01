<?php

if (isset($_POST['submit']))
{
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    echo $email;
}

?>
<?php header("refresh:0.2;url=DANIEL-LIEN.php");?>