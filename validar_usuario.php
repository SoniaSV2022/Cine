<?php
sesion_start();

$user_username=$_POST['user_username'];
$user_pass=$POST['user_pass'];

required("conexion.php");

$query=mysqli_query($link, "SELECT * FROM credenciales where user_username='$user_username'");

if($query2=mysqli_fetch_assoc($query)){

    if($user_pass==base64_decode($query2['user_pass'])){
        $_SESSION['user_id']=$query2['user_id'];
        $_SESSION['user_username']=$query2['user_username'];
        $_SESSION['user_nombre']=$query2['user_nombre'];
        $_SESSION['user_apeido']=$query2['user_apeido'];
        echo '<script>alert("Bienvenido")</script>';
        echo "<script>location.href='menu.php'</script>";
    }else{
        echo'<script>alert("Error en la autenticacion")</script>';
        echo"<script>location.href='index.php'</script>";
    }
}else{
    echo'<script>alert("Usuario no registrado.")</script>';
    echo "<script>location.href='index.php'</script>";
}
mysqli_close($link);
?>