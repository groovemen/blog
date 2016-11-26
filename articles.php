<?php
require MODELS."articlesmodel.php";

class Articles {
    
    public $page;
    public $limit;
    function index() {
        //set pagination params
        $params = [];
        $params['page'] = isset($_GET["page"]) ? $_GET["page"] : 1;
        $params['limit'] = isset($_GET["items_per_page"]) ? $_GET["items_per_page"] : 3;
        $params['search'] = isset($_GET['search']) ? $_GET['search'] : '';
        
        $this->page = $params['page'];
        $this->limit = $params['limit'];
        
        //request data from db
        $articlesModel = new ArticlesModel();
        $articles = $articlesModel->getArticlesPaginated($params);
        // $comments = $articlesModel->getComment();
        
        //render view
        $title = "Articles Page";
        $pageContent = "articlesview.php";
        include VIEWS."layoutview.php";
    }
    
    function ifPageNotExist($page) {
        if ($page < 1) {
            return 'disabled';
        }
        
        $articlesModel = new ArticlesModel();
        $result = $articlesModel->getArticlesCount();
        $articles_count = $result['articles_count'];
        $numOfPages = ceil($articles_count / $this->limit);
        
        var_dump($numOfPages);
        
        if ($page > $numOfPages) {
            return 'disabled';
        } 
    }

}
?>
