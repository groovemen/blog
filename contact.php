<?php 
require MODELS."contactmodel.php";

class Contact {
    function index() {
  
        if (isset($_POST["email"])) {
            $message = new ContactModel();
            $result = $message->addContact($_POST);

            if ($result != 0) {
                echo "Thank you for your message. You will get a response shortly.";
            }else {
                echo "Failed to send your message.";
            }
        }
        $pageTitle = "Contact page";
        $pageContent = "contactview.php";
        include VIEWS."layoutview.php"; 
    }
}


?>