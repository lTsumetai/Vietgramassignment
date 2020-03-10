<?php
include "login.php";
session_start();
?>
 
<?php
if($_POST['login']){
	$user	= $_POST['username'];
	$pass	= $_POST['password'];
 
	if($user && $pass){
		$cek_db	= "SELECT * FROM user WHERE username= $user";
        $query	= mysql_query($cek_db);    
    }   else(mysql_num_rows($query) != 0)  {  
        $row = mysql_fetch_assoc($query);
        $db_user = $row['username'];
        $db_pass = $row['password'];
    }
}