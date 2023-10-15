<?php 

namespace Esteban\Facturacion\models;

use Esteban\Facturacion\lib\Database;
use PDO;

class Client extends Database{
    public function __construct(private string $name,private string $lastName,private string $email,private string $address,private string $DNI,private string $RUC, private string $business_name)
    {     
        parent::__construct();
    }

    public function save(){
        $query = $this->connect()->prepare("INSERT INTO clients ( 'name', 'lastName', 'email', 'address')values(:name,:lastName,:email,:address)");
        $query->execute(['name'=>$this->name,'lastName'=>$this->lastName,'email'=>$this->email,'address'=>$this->address]);

    } 

    public function obtener(){
        $query = $this->connect()->prepare("SELECT * FROM clients where email = :email");
        if($query){
            $query->bindParam(":email",$this->email);
            $query->execute();
            $resultado = $query->fetch(PDO::FETCH_ASSOC);
            return $resultado;
        }
    }


/*     public function getAllClients(){
        $query = $this->connect()->query("SELECT * FROM clients");
        $resultados = $query->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
    } */

    public static function getAll(){
        $clients= [];
        $db =new Database();
        $query = $db->connect()->query("SELECT * FROM clients");
        
        while($r=$query->fetch(PDO::FETCH_ASSOC)){
            $client = Client::createFromArray($r);
            array_push($clients,$client);
        }


        return $clients;
    }

    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function getAddress(){
        return $this->address;
    }
    public function getDNI(){
        return $this->DNI;
    }
    public function getRUC(){
        return $this->RUC;
    }
    public function getBusiness_name(){
        return $this->business_name;
    }


    
    public static function createFromArray($arr){
        $client = new Client($arr['name'],$arr['lastName'],$arr['email'],$arr['address'],$arr['DNI'],$arr['RUC'],$arr['business_name']);
        return $client;
    }

}