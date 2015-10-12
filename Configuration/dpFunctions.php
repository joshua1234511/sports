<?php  
require_once ('dbConnect.php');   
session_start();  
    class dbFunction {  
            
        function __construct() {  
              
            $db = new dbConnect();;  
        }  
        function __destruct() {  
              
        }  
        public function userRegister($name, $userName, $email, $password, $country, $state, $phone ,$city, $postal){  
                $password = md5($password);  
                $qr = mysql_query("INSERT INTO users(name, userName, email, password, country, state, phone, city, postal) values('".$name."','".$userName."','".$email."','".$password."','".$country."','".$state."','".$phone."','".$city."','".$postal."')") or die(mysql_error());  
                return $qr;  
               
        }  
        public function userUpdate($name, $userName, $country, $state, $phone ,$city, $postal, $email){   
                $qr = mysql_query("UPDATE users SET name='$name', userName='$userName', country= '$country', state='$state', phone='$phone', city='$city', postal='$postal' WHERE email = '$email'") or die(mysql_error());  
                
                if($qr){
                  $_SESSION['userName'] = $userName; 
                }
                return $qr;  
               
        } 
        public function userUpdatePassword($password,$email){  
               $password = md5($password);   
                $qr = mysql_query("UPDATE users SET  password='$password' WHERE email = '$email'") or die(mysql_error());  
                return $qr;  
               
        }  
        public function login($email, $password){  
            $res = mysql_query("SELECT * FROM users WHERE (email ='".$email."' OR userName ='".$email."') AND password = '".md5($password)."' AND status = 'Active'");  
            $user_data = mysql_fetch_array($res);  
            $no_rows = mysql_num_rows($res);  
              
            if ($no_rows == 1)   
            {  
           
                $_SESSION['login'] = true;  
                $_SESSION['userName'] = $user_data['userName'];  
                $_SESSION['email'] = $user_data['email']; 
                $_SESSION['user'] = $user_data['role'];
                return TRUE;  
            }  
            else  
            {  
                return FALSE;  
            }  
               
                   
        } 
        public function isPasswordExist($email, $password){  
            $qr = mysql_query("SELECT * FROM users WHERE (email ='".$email."' OR userName ='".$email."') AND password = '".md5($password)."' AND status = 'Active'");
           $row = mysql_num_rows($qr);  
            if($row > 0){  
                return true;  
            } else {  
                return false;  
            }  
        }  
        public function isEmailExist($email){  
            $qr = mysql_query("SELECT * FROM users WHERE email = '".$email."'");  
           $row = mysql_num_rows($qr);  
            if($row > 0){  
                return true;  
            } else {  
                return false;  
            }  
        }  
        public function isUserNameExist($userName){  
            $qr = mysql_query("SELECT * FROM users WHERE userName = '".$userName."'");  
          $row = mysql_num_rows($qr);  
         
            if($row > 0){  
                return true;  
            } else {  
                return false;  
            }  
        } 
        public function isCategoriesExist($x){  
            $qr = mysql_query("SELECT * FROM categories WHERE base_id = '".$x."'");  
          $array = array(); 
             while ($k = mysql_fetch_assoc($qr)) 
            {  
                array_push($array,array("id" => $k['id'],"name" => $k['name'],"base_id" => $k['base_id']) ); 
            }  
           
                return $array;  
        } 
        public function profile($email){  
            $res = mysql_query("SELECT * FROM users WHERE (email ='".$email."' OR userName ='".$email."')  AND status = 'Active'");  
            $user_data = mysql_fetch_array($res);  
            $no_rows = mysql_num_rows($res);  
            $array;  
            if ($no_rows == 1)   
            {  
                $array = array(
                    "country" => $user_data['country']  ,
                    "state" =>  $user_data['state'] ,
                    "phone" => $user_data['phone']  ,
                    "city" =>  $user_data['city'] ,
                    "postal" => $user_data['postal'],
                    "name" =>  $user_data['name'] 
                    );  
            }  
           
                return $array;         
        }  
        public function uniqueCategories(){  
            $res = mysql_query("SELECT DISTINCT(base_id) as list FROM categories WHERE base_id !='0' ORDER BY list ");    
            $array = array(); 
             while ($k = mysql_fetch_assoc($res)) 
            {  
                array_push($array,$k['list']) ; 
            }  
           
                return $array;         
        }  


        
    }  
