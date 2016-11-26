<?php
$pages = array(
        "/"=>array("path" => "home.php", 
                    "class" => "Home",
                    "method" => "index"),
                    
        "/admin" => array("path" => "admin.php", 
                            "class" => "Admin", 
                            "method" => "index"),
                            
        "/aboutus" => array("path" => "aboutus.php", 
                            "class" => "AboutUs", 
                            "method" => "index"),
                            
        "/articles" => array("path" => "articles.php", 
                             "class" => "Articles", 
                             "method" => "index"),
                             
        "/shop" => array("path" => "shop.php", 
                         "class" => "Items", 
                         "method" => "index"),
                         
        "/contact" => array("path" => "contact.php", 
                             "class" => "Contact", 
                             "method" => "index"),
                             
        "/login" => array("path" => "login.php", 
                          "class" => "Login", 
                          "method" => "index"),
                          
        "/logout" => array("path" => "login.php", 
                           "class" => "Login", 
                           "method" => "logout"),
                           
        "/article" => array("path" => "article.php", 
                            "class" => "Article", 
                            "method" => "index"),
                            
        "/article/addComment" => array("path" => "comments.php", 
                                       "class" => "Comments", 
                                       "method" => "addComment"),
                                       
        "/article/comments" => array("path" => "comments.php", 
                                     "class" => "Comments", 
                                     "method" => "getComments"),
                                     
        "/admin/articles"=>array("path" => "admin.php", 
                                 "class" => "Admin",
                                 "method" => "articles"),
                                 
        "/admin/article"=>array("path" => "admin.php", 
                                "class" => "Admin",
                                "method" => "article"),
                                
        "/admin/article/add" => array("path" => "admin.php", 
                                      "class" => "Admin", 
                                      "method" => "addArticle"),
                                      
        "/admin/articles/update"=>array("path" => "admin.php", 
                                        "class" => "Admin",
                                        "method" => "updateArticle"),
                                        
        "/admin/articles/delete"=>array("path" => "admin.php", 
                                        "class" => "Admin",
                                        "method" => "deleteArticle"),
                                        
        "/admin/article/upload" => array("path" => "admin.php", 
                                      "class" => "Admin", 
                                      "method" => "uploadFile"),
       
        );