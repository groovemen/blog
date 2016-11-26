<?php 
require HELPERS. "functions.php";
require MODELS."articlesmodel.php";

class Article {

    function index() {
        
        //request data from db
        $articleModel = new ArticlesModel();
        $article = $articleModel->getArticle($_GET["id"]);

        //render view
        $title = $article["title"];
        $pageContent = VIEWS. "articleview.php";
        include VIEWS."layoutview.php";
        
        
    }
}

?>