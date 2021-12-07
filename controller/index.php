<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Conecta a la base de datos  con usuario, contraseña y userName de la BD
$servidor = "localhost"; $usuario = "root"; $contrasenia = ""; $userNameBaseDatos = "exampledb";
$conexionBD = new mysqli($servidor, $usuario, $contrasenia, $userNameBaseDatos);


// Consulta datos y recepciona una clave para consultar dichos datos con dicha clave
if (isset($_GET["consultar"])){
    $sqlExample = mysqli_query($conexionBD,"SELECT * FROM example WHERE id=".$_GET["consultar"]);
    if(mysqli_num_rows($sqlExample) > 0){
        $example = mysqli_fetch_all($sqlExample,MYSQLI_ASSOC);
        echo json_encode($example);
        exit();
    }
    else{  echo json_encode(["success"=>0]); }
}
//borrar pero se le debe de enviar una clave ( para borrado )
if (isset($_GET["borrar"])){
    $sqlExample = mysqli_query($conexionBD,"DELETE FROM example WHERE id=".$_GET["borrar"]);
    if($sqlExample){
        echo json_encode(["success"=>1]);
        exit();
    }
    else{  echo json_encode(["success"=>0]); }
}
//Inserta un nuevo registro y recepciona en método post los datos de userName y correo
if(isset($_GET["insertar"])){
    $data = json_decode(file_get_contents("php://input"));
    $userName=$data->userName;
    $userPassword=$data->userPassword;
    $correo=$data->correo;
    $age=$data->age;
        if(($correo!="")&&($userName!="")){
            
    $sqlExample = mysqli_query($conexionBD,"INSERT INTO example(userName,userPassword,email,age) VALUES('$userName','$correo','$userPassword','$correo','$age') ");
    echo json_encode(["success"=>1]);
        }
    exit();
}
// Actualiza datos pero recepciona datos de userName, correo y una clave para realizar la actualización
if(isset($_GET["actualizar"])){
    
    $data = json_decode(file_get_contents("php://input"));

    $id=(isset($data->id))?$data->id:$_GET["actualizar"];
    $userName=$data->userName;
    $userPassword=$data->userPassword;
    $correo=$data->correo;
    $age=$data->age;
    
    $sqlExample = mysqli_query($conexionBD,"UPDATE example SET userName='$userName',userPassword='$userPassword',email='$correo',age='$age' WHERE id='$id'");
    echo json_encode(["success"=>1]);
    exit();
}
// Consulta todos los registros de la tabla example
$sqlExample = mysqli_query($conexionBD,"SELECT * FROM example ");
if(mysqli_num_rows($sqlExample) > 0){
    $example = mysqli_fetch_all($sqlExample,MYSQLI_ASSOC);
    echo json_encode($example);
}
else{ echo json_encode([["success"=>0]]); }


?>
