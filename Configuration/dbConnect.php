<?php  
    class dbConnect {  
        function __construct() {  
            require_once('config.php');  
            $conn = mysql_connect(HOSTNAME, USERNAME, PASSWORD);  
            mysql_select_db(DATABASE, $conn);  
            if(!$conn)
            {  
                die ("Cannot connect to the database");  
            }   
            return $conn;  
        }  
        public function Close(){  
            mysql_close();  
        }  
    }  
