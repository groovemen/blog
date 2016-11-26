<?php

require "app/helpers/functions.php";
require MODELS."articlesmodel.php";

class Admin {
    function __construct() {
        if (!isset($_SESSION["isLogged"]) || !$_SESSION["isLogged"]) {
            header("Location: login");
        }
    }
    
    function index() {
        $title = "Admin Page";
        $pageContent = "adminview.php";
        include VIEWS."layoutview.php";
    }   
    
    function articles() {
        $search = (!empty($_GET['search'])) ? $_GET['search'] : '';
        $articlesModel = new ArticlesModel();
        $result = $articlesModel->getArticles($search);
        sendResponseToJSON($result);
    }
    function addArticle(){
        $articlesModel = new ArticlesModel();
        $result = $articlesModel->addArticle($_POST);
        
        // validari !!
        
        sendResponseToJSON(array("result"=>$result));
    }
    
    function uploadFile(){
        if (!empty($_FILES)) {
            move_uploaded_file($_FILES['file']['tmp_name'], './assets/img/uploads/' . $_FILES['file']['name']);
        
        sendResponseToJSON(array("files" => $_FILES));
        }
    }
    function deleteArticle() {
        parse_str(file_get_contents("php://input"), $DELETE);
        
        $articlesModel = new ArticlesModel();
        $result = $articlesModel->deleteArticle($DELETE["id"]);

        sendResponseToJSON(array("deleted" => $result));
    }
    
    function article() {
        $articlesModel = new ArticlesModel();
        $result = $articlesModel->getArticle($_GET["id"]); 

        sendResponseToJSON($result);
    }
    
    function updateArticle() {
        $articlesModel = new ArticlesModel();
        $result = $articlesModel->updateArticle($_POST);
        
        sendResponseToJSON(array("result"=>$result));
    }
    
    
    
    
    
    
}
?>