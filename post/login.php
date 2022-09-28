<?php session_start() ?>
<?php 
    
    if (!empty($_POST['login']) or !empty($_POST['password'])){
        echo "форма отправлена";
        echo '<br>';
        
        // $login = $_POST['login'];
        // $password = $_POST['password'];
    
        $_SESSION['login'] = 'admin';

        if (array_key_exists('login',$_SESSION)):
            echo "<a href='/' class='mdc-button mdc-button--raised mdc-button--leading'>logout</a>";
            // unset($_SESSION['login']);
        
        endif;

        // header('Location: /');
    }
    else{
        echo "Форма не отправлена";
        include '../pages/autherror.php';
        // header('Location: ../auth');
    }
?>

