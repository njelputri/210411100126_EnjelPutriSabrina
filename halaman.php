<?php

$username="admin";
$password="admin";

session_start();

if(isset($_SESSION['username'])){
    echo "<h1>welcome ".$_SESSION['username']."</h1>";
    echo "<br> <a href='logout.php'> <input type=button value=logout name=logout> </a>";

}
else{
    if($_POST['username']==$username && $_POST['password']==$password);{
    $_SESSION['username']=$username;
    echo "<script>location.href='halaman.php'</script>";
    }
    
}
?>