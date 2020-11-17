<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="author" content="Заболотский Антон github.com/cppranger/">
        <link rel="shortcut icon" href="/media/favicon.png" type="image/x-icon">
        <title>Тестовое задание - Заболотский Антон Игоревич</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
        </style>
        <link rel="stylesheet" href="/styles/zerostyle.css" media="screen" charset="UTF-8">
        <link rel="stylesheet" href="/styles/style.css" media="screen" charset="UTF-8">
        <script src="/js/jquery.min.js"></script>
        <script src="/js/main.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="block" id="textFields">
                <p class="block-header">Добавить контакт</p>
                <hr class="divider">
                <form class="inputs" method="post" >
                    <div class="column" id="form">
                        <input type="text" name="name" class="nameField label" placeholder="Имя" REQUIRED>
                        <input type="text" name="surname" class="telField label" placeholder="Телефон" REQUIRED>
                        <input type="submit" value="Добавить" class="button">
                    </div>
                </form>
            </div>

            <div class="block" >
                <p class="block-header">Список контактов</p>
                <hr class="divider">
                <div class="bd_list" id="userList"> 
                    <?php 
                        // CONNECTING TO MYSQL
                        $mysqli = new Mysqli('localhost', 'root', 'root', 'db');
                        // SENDING A QUERY
                        $result = $mysqli->query('SELECT * FROM `users`');
                        // SHOWING RESULTS
                        while($row = $result->fetch_assoc()){
                            $text = '<div class="user"><div class="name+del"><p class="bd_name">'.$row['name'].'<a href=# id="'.$row['id'].'" class="del_button">×</a></p></div><p class="bd_tel">'.$row['tel'].'</p></div> <hr class="bd_divider">';
                            echo ($text);
                        }
                    ?>
                </div>
            </div>
        </div> 
    </body>
</html>