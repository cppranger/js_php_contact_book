<?  
    // CONNECTING TO MYSQL
    $mysqli = new Mysqli('localhost', 'root', 'root', 'db');

    // READING INFO
    $name = trim($_POST['name']);
    $tel = trim($_POST['tel']);

    // SENDING INFO
    $query = $mysqli->query("INSERT INTO `users` VALUES(NULL, '$name', '$tel')");

?>