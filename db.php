<?php
    // Set DB configs
    define("MySQL_USER", getenv('C9_USER'));
    define("MySQL_PASSWORD", "");
    define("MySQL_DB_NAME", "blog");
    define("MySQL_HOST", getenv('IP'));
   
    // DB Class used to open and set current db connection
    // Use by all classes that manage db tables
    class DB {
        protected $dbh;
        
        function __construct() {
            try {
                // Set connection on class property
                $this->dbh = new PDO('mysql:host='.MySQL_HOST.';dbname=' . MySQL_DB_NAME, MySQL_USER, MySQL_PASSWORD);     
            } catch (PDOException $e) {
                print "Error!: Cannot connect to db! Check connection " . $e->getMessage() . "<br/>";
                die();
            }    
        }
        
    }

?>