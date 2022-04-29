<?php

    class DB {
        public function __construct(){
            try{
                $db = new PDO('mysql:host=localhost;dbname=test', 'root', '');
            }catch(PDOexception $e){
                echo $e -> getMessage();
            }
        }
    }

    class ListDB extends DB{
        public function List(){
            
            $query = $db -> prepare("SELECT * from join_daireler");
            $query -> exection();

            $row = $query -> fetchAll(PDO::FETCH_ASSOC);

            foreach($row as $value){
                return $value . '<br>';
            }
        }
    }

new DB;
$ListDB = new ListDB;

echo $ListDB -> List();