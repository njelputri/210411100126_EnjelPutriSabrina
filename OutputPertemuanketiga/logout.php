<?php

session_start();

if(isset($_SESSION['username'])){
    session_destroy();
    echo "<script>location='login.php'</script>";
}
else{
    echo "<script>location='login.php'</script>";
}
?>