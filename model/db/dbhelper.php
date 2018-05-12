<?php

Class DBhelper {
    private $hostname='localhost';
    private $database = 'mvc_db';
    private $username='root';
    private $password ='';
    private $conn;

    function __construct(){
        try{
            $this->conn=new PDO("mysql:host=$this->hostname;dbname=$this->database",$this->username,$this->password);
        }catch(PDOException $e){
             echo $e->getMessage();
            }
    }

    function insertRecord($data,$fields,$table){
        $ok;
        $fld=implode(",",$fields);
        $q=array();
        foreach($data as $d) $q[]="?";
        $plc=implode(",",$q);
        $sql="INSERT INTO $table($fld) VALUES($plc)";
        try{
            $stmt=$this->conn->prepare($sql);
            $ok=$stmt->execute($data);				
        }catch(PDOException $e){ echo $e->getMessage();}
        return $ok;
    }
    // Retrieve
    function getAllRecord($table){
            $rows;
            $sql="SELECT * FROM $table";
            try{
                $stmt=$this->conn->prepare($sql);
                $stmt->execute();
                $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
            }catch(PDOException $e){ echo $e->getMessage();}
            return $rows;
        }

}
