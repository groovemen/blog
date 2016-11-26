<?php 
require HELPERS."functions.php";
require MODELS."commentsmodel.php";

class Comments {

    function index() {
        
        //request data from db
        $commentsModel = new CommentsModel();
        $comments = $commentsModel -> getComments($article["id"]);

        //render view
        $title = $article["title"];
        $pageContent = "articleview.php";
        include VIEWS."layoutview.php";
    }
    
    function addComment() {
        $commentsModel = new CommentsModel();
        $result = $commentsModel->addComment($_POST);
        sendResponseToJSON(array("result"=>$result));
    }
    
    function getComments() {
        $commentsModel = new CommentsModel();
        $result = $commentsModel->getComments($_GET["id"]);
        sendResponseToJSON($result);
    }
}


?>