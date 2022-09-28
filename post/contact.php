<?php 
    echo "форма отправлена";
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $adress = $_POST['adress'];
    file_put_contents('../data/'.$phone.'.txt', $username.';'.$phone.';'.$adress.PHP_EOL, FILE_APPEND);
    header('Location: /');
?>