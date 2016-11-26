<?php
    require "db.php";

    // Articles class manages all operations on article table
    // Extends DB to open and have access to the connection
    class ArticlesModel extends DB {
        
        // Get list of all published articles
        function getArticles($search = '') {
            $sqlSearch = ($search !== '') ? " and title LIKE '%$search%'" : "";   
            
            $sql = 'SELECT * from articles WHERE published = 1' . $sqlSearch;
            $sth = $this->dbh->prepare($sql);
            $sth->execute();
            
            return $sth->fetchAll(PDO::FETCH_ASSOC);    
        }
        //pagination 
         function getArticlesPaginated($params) {
            //prepare limit and offset
            $limit  = $params['limit'];      // records number
            $page   = $params['page'];       // page number
            $search  = $params['search'];
            $offset = $limit * $page - $limit; // numarul de la care incepe lista de articole 
            $sQuery = ($search === "") ?  '' :" and title like '%$search%'";
            
            //get data
            $sql = "SELECT * from articles WHERE  published = 1 $sQuery limit $offset, $limit";
            $sth = $this->dbh->prepare($sql);
            $sth->execute();
            //send response
            return $sth->fetchAll(PDO::FETCH_ASSOC);   
        }
        
        function getArticlesCount(){
            $sql = "SELECT count(*) as articles_count from articles";
            $sth = $this->dbh->prepare($sql);
            $sth -> execute();
            
                 //send response
            return $sth->fetch(PDO::FETCH_ASSOC);
            
            
        }
        
        // Get article by id
        function getArticle($id) {
            $params = [':id' => $id]; 
            $sql = 'SELECT * from articles where id = :id AND published = 1';
            $sth = $this->dbh->prepare($sql);
            $sth->execute($params);
            
            return $sth->fetch(PDO::FETCH_ASSOC);      
        }
        
        // Delete article by id
        function deleteArticle($id) {
            $params = [':id' => $id]; 
            $sql = 'UPDATE articles SET published = 0 WHERE id = :id';
            $sth = $this->dbh->prepare($sql);
            $sth->execute($params);
            return $sth->rowCount(); 
        }
        
        // Add new article
        function addArticle($article) {
            $params = [':title' => $article["title"], ':content' => $article["content"], ':image' => $article["image"]]; 
            $sql = "INSERT INTO articles(title, content, image, cd) VALUES (:title, :content, :image, CURDATE())";
            $sth = $this->dbh->prepare($sql);
            $result = $sth->execute($params);
            return $sth->rowCount();
        }
        
        function updateArticle($article) {
            $params = [':id' => $article['id'], ':title' => $article["title"], ':content' => $article["content"]];
            $sql = 'UPDATE articles SET title = :title, content = :content WHERE id = :id';
            $sth = $this->dbh->prepare($sql);
            $sth->execute($params);
            return $sth->rowCount(); 
        }
     
    }
    
// SELECT articles.id, comments.name, comments.comment
// FROM articles
// INNER JOIN comments
// ON articles.id = comments.article_id;