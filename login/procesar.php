<?php

/* start the session */
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
 <title>Procesamiento de Datos</title>
 <meta charset = "utf8" />
</head>


<?php

 
require('../Conexion/conexion.php');


// sent from form
$username = $_POST['username'];
$password = $_POST['pass'];

$consulta= "SELECT * FROM usuario WHERE username = '$username' and pass = '$password'";


$result=mysql_query($consulta);

// counting table row
$count = mysql_num_rows($result);
// If result matched $username and $password

if($count == 1){

 $_SESSION['loggedin'] = true;
 $_SESSION['username'] = $username;
 $_SESSION['start'] = time();
 $_SESSION['expire'] = $_SESSION['start'] + (5 * 60) ;

header('Location: ../index.php');
}
 else {
header('Location: login.php');

}

?>

</body>
</html>
