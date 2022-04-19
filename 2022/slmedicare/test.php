<?php

class Connection{
 
    private function __construct(){
        echo 'new object created!<br>';
    }
 
    public static function getInstance(){
        static $instance = null;

        if(null == $instance){
            $instance = new static();
        }else{
            echo 'using existing instance!<br>'
        }
        return $instance;
    }
}

 $obj1 = Connection::getInstance();
 $obj2 = Connection::getInstance();

?>