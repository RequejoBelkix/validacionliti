<?php
$servername = "167.71.167.215";
$database = "Registro_lab";
$username = "root";
$password = "123456";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

if (isset($_POST["Nombre"], $_POST["Apellido"], $_POST["Cedula"],$_POST["telefono"],$_POST["token"],$_POST["chat_Id"],$_POST["huella"],
$_POST["clave"],$_POST["id_Rol_usuarios"]) and $_POST["Nombre"] !="" and $_POST["Apellido"]!="" and $_POST["Cedula"]!="" and $_POST["telefono"]!="" 
and $_POST["token"]!="" and $_POST["chat_Id"]!="" and $_POST["huella"]!="" and $_POST["clave"]!="" and $_POST["id_Rol_usuarios"]!="" )
{
    echo "<br>Dentro del if";
    $Nombre = $_POST["Nombre"];
    $Apellido= $_POST["Apellido"];
    $Cedula = $_POST["Cedula"];
    $telefono = $_POST["telefono"];
    $token = $_POST["token"];
    $chat_Id = $_POST["chat_Id"];
    $huella = $_POST["huella"];
    $clave = $_POST["clave"];
    $id_Rol_usuarios = $_POST["id_Rol_usuarios"];

    $consulta = "INSERT INTO Usuario
    (Nombre,Apellido,Cedula,telefono,token,chat_Id,huella,clave,id_Rol_usuarios) VALUES ('$Nombre','$Apellido','$Cedula','$telefono','$token','$chat_Id','$huella','$clave','$id_Rol_usuarios')";

    if (mysqli_query($conn, $consulta) ){
        echo "<p>Registro agregado.</p>"; 
    } else {
        echo "<p>No se agregó...</p>";
    }

}


mysqli_close($conn);
?>