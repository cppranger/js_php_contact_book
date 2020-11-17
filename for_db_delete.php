<?  
    // CONNECTING TO MYSQL
    $mysqli = new Mysqli('localhost', 'root', 'root', 'db');

    // READING INFO
    $id = trim($_POST['id']);

    // SENDING INFO
    $query = $mysqli->query("DELETE FROM `users` WHERE id = '$id'");

?>