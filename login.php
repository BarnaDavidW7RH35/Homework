<?php
    if(isset($_POST['username']) && isset($_POST['password'])) {
        try {
            
            // Connecting
            $dbh = new PDO('mysql:host=localhost;dbname=taffid;charset=utf8', 'taffid', 'cicus123',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC));
            //$dbh->query('SET NAMES utf8 COLLATE utf8_general_ci');
            
            // Search user
            $sqlSelect = "select id, first_name, last_name from users where user_name = :username and password = sha1(:password)";
            $sth = $dbh->prepare($sqlSelect);
            $sth->execute(array(':username' => $_POST['username'], ':password' => $_POST['password']));
            $row = $sth->fetch(PDO::FETCH_ASSOC);
            
            if($row) {
                session_start();
                $_SESSION['fn'] = $row['first_name']; 
                $_SESSION['ln'] = $row['last_name']; 
                $_SESSION['user'] = $_POST['username'];
                header("Location:http://tdbolt.nhely.hu/index.php");
            }else{
                header("Location:http://tdbolt.nhely.hu/index.php?page=login");
            }
            
        }
        catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
        }      
    }else{
        header("Location: .");
    }
?>
