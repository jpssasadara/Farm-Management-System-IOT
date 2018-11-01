<?php

// DB connection class

class DB_CONNECT {
 
    // construct function

    function __construct() {
        
        $this->connect();
    }
 
    // desstruct function

    function __destruct() {
        
        $this->close();
    }
 
   // db connect method

    function connect() {

        
        $filepath = realpath (dirname(__FILE__));
        // select file path

        require_once($filepath."/dbconfig.php");
        
		
        $con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());
 
        
        $db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());
 
      
        return $con;
    }
 
	// close db connection

    function close() {
       
        mysql_close();
    }
 
}
 
?>