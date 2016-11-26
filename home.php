<?php
class Home {
    function index() {
        $date = date("d/m/Y");
        $title = "Home Page";
        $pageContent = "homeview.php";
        include VIEWS."layoutview.php";
    }    
}
?>