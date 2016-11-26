<?php
    require "db.php";

    class ContactModel extends DB {

        // Add new contact message    
        function addContact($message) {
            $params = [':user_name' => $message["name"], ':email' => $message["email"], ':content' => $message["content"]];
            $sql = 'INSERT INTO messages(user_name, email, content) VALUES (:user_name, :email, :content)';
            $sth = $this->dbh->prepare($sql);
            $result = $sth->execute($params);
            return $sth->rowCount();
        }

    }
    
?>