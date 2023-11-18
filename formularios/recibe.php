<?php
// print_r($_POST);
// print_r($_GET);

if (!$_POST) {
    header('Location: http://localhost:3000/formularios/index.php');
}


    $nombre = $_POST['nombre'];
    $sexo = $_POST['sexo'];
    $year = $_POST['year'];
    $terminos = $_POST['terminos'];

    echo 'Hola, ' . $nombre . ' eres ' . $sexo;
    exit();  // Ensure that the script exits after the redirect


// if (!$_GET) {
//     header('Location: http://localhost:3000/formularios/index.php');
// }

// $nombre = $_GET['nombre'];
// $sexo = $_GET['sexo'];
// $year = $_GET['year'];
// $terminos = $_GET['terminos'];

// echo $nombre.' <br/>';
// echo $sexo.'<br/>';
// echo $year.'<br/>';
// echo $terminos.'<br>';

?>
