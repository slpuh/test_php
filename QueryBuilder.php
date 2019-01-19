<?php

class QueryBuilder
{
    public $pdo;

    function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=traffic_count', 'root', 'z$ESXjuJ71nA');
    }

    function getAllTraffic()
    {
        $sql = "SELECT * FROM traffic ORDER BY period DESC";
        $statement = $this->pdo->prepare($sql); 
        $result = $statement->execute(); 
        $traffic_item = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $traffic_item;
    }

    function addTraffic()
    { 
       if (!empty($_GET['code'])) { 
           
           if (!$this->updateTraffic()) {
            $data = [
                "period"    =>  date("Y-m-d"),
                "code" =>  $_GET['code'],
                "raw_count"   =>  1
            ];                             
            $sql = "INSERT INTO traffic (period, code, raw_count) VALUES (:period, :code, :raw_count)";
            
            
            $statement = $this->pdo->prepare($sql);
            $statement->execute($data); 
        }           
    }        
}     

function updateTraffic()
{ 
   if (!empty($_GET['code'])) {
    
    $data = [
        "period"    =>  date("Y-m-d"),
        "code" =>  $_GET['code'],
        "raw_count"   =>  1
    ]; 
    foreach ($this->getAllTraffic() as $t) {
        
        $period = $t['period'];
        $code = $t['code'];
        $raw_count = $t['raw_count'];
        
        if ($code===$_GET['code'] && $period === $data['period']) {  
            $data['raw_count']+=$raw_count;                                             
            $sql = "UPDATE traffic SET raw_count=:raw_count WHERE code=:code AND period=:period";
        }                    
    } 
    
    $statement = $this->pdo->prepare($sql);
    $result = $statement->execute($data); 
    return $result;          
}       
}     
}