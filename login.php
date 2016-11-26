<?php
class Login {
    function index() {
        
        // daca e setata sesiunea -> admin
        // verificare(criptare) parola
        
        if (!empty($_POST["email"]) && isset($_POST["submit"])) {
            require MODELS . "loginmodel.php";
            $loginData = new LoginModel();
            $result = $loginData->validUser($_POST);
            // validate DB result - check the pass 
            if ($result) {
                $_SESSION['isLogged'] = TRUE;
                
                header("Location: ".BASE_URL."admin");
            }
            else {
                echo "Login failed! Try again!";
            }
        }
        
        $date = date("d/m/Y");
        $title = "Login page";
        $pageContent = "loginview.php";
        include VIEWS."layoutview.php";
    }
    function logout(){
        unset($_SESSION['isLogged']);
        session_destroy();
        header("Location: ".BASE_URL);
        exit;
    
    }
}
?>
