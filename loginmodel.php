<?php
    require "db.php";

    class LoginModel extends DB {
        
        function validUser($loginData) {
            $params = [':email' => $loginData["email"], ':password' => $loginData["password"]];
            $sql = 'SELECT * FROM users WHERE email = :email AND password = :password';
            $sth = $this->dbh->prepare($sql);
            $result = $sth->execute($params);
        
            $userData = $sth->fetch(PDO::FETCH_ASSOC);

            if (!$userData) {
                return false;
            }
         
            return true;
        }
    }
    
?>
