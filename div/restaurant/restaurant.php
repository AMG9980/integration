<?php

class restaurant {
    private  $id_restaurant;
    private  $adresse;
    private $nom;
    private $img;
      



public function __construct(string $id_restaurant,string $adresse,string $img,string $nom)
{
$this->id_restaurant=$id_restaurant;
$this->adresse=$adresse;
$this->img=$img;

$this->nom=$nom;




}
public function getid(){
    echo $this->id_restaurant;
}


public function afficher(string $id){
require 'connection.php';

try {
$query =$pdo->prepare('SELECT * FROM restaurant WHERE id_restaurant = ?');
$query->bindParam(1,$id);
$query->execute();
return $result = $query->fetchAll();
}
catch (PDOException $e) {
$e->getMessage();

}
}
public function ajouter(){
require 'connection.php';

try {
 $img="LOAD_FILE('salad.jpg')";       

$query =$pdo->prepare('INSERT INTO restaurant (id_restaurant,adresse,nom,img) VALUES(?,?,?,?)');

$query->bindParam(1,$this->id_restaurant);
$query->bindParam(2,$this->adresse);
$query->bindParam(3,$this->nom);
$query->bindParam(4,$img);


$query->execute();


}
catch (PDOException $e){
echo $e->getMessage();
}
}

public function modifier(){
    require 'connection.php';
    try {
    $query =$pdo->prepare('UPDATE  restaurant SET adresse= ? , img= ? , nom= ?  where id_restaurant = ? ') ;
    
    $query->bindParam(1,$this->adresse);
    $query->bindParam(2,$this->img);
    $query->bindParam(3,$this->nom);
    $query->bindParam(4,$this->id_restaurant);

     $query->execute();
    }
    
    
    catch (PDOException $e){
    $e->getMessage();
    
    }
    }
    public function supprimer(string $id){
        require 'connection.php';
        
        try {
        $query =$pdo->prepare('DELETE FROM restaurant WHERE id_restaurant = ?');
        $query->bindParam(1,$id);
        $query->execute();

        
        }
        catch (PDOException $e){
        $e->getMessage();
        
        }
        }

public function affichertout(){
require 'connection.php';

try {
$query =$pdo->prepare('SELECT nom,adresse,id_restaurant  FROM restaurant');
$query->execute();
return $result = $query->fetchAll();



}
catch (PDOException $e){
$e->getMessage();

}
}
public function affichertoutp(int $min,int $max){
require 'connection.php';

try {
$query =$pdo->prepare('SELECT nom,adresse,id_restaurant FROM restaurant where (prix>? AND prix<?)');
$query->bindParam(1,$min);
$query->bindParam(2,$max);
$query->execute();
return $result = $query->fetchAll();



}
catch (PDOException $e){
$e->getMessage();

}
}
public function trier(string $variable){
    require 'connection.php';
    echo $variable;
    try {
        if(strcmp($variable,'adresse')==0){
    $query =$pdo->prepare('SELECT * FROM restaurant ORDER BY adresse DESC');
    $query->execute();

    return $result = $query->fetchAll();
        } 
        if(strcmp($variable,'nom')==0){
            $query =$pdo->prepare('SELECT * FROM restaurant ORDER BY nom DESC');
            $query->execute();
        
            return $result = $query->fetchAll();
                } 
                   
                           
                            if(strcmp($variable,'id_restaurant')==0){
                                    $query =$pdo->prepare('SELECT * FROM restaurant ORDER BY id_restaurant DESC');
                                    $query->execute();
                                
                                    return $result = $query->fetchAll();
                                        }       
}
    catch (PDOException $e) {
    $e->getMessage();
    
    }
}
public function afficherimg(){
    require 'connection.php';
    
    try {
    $query =$pdo->prepare('SELECT img FROM restaurant');
    $query->execute();
    return $result = $query->fetchAll();
    
    
    
    }
    catch (PDOException $e){
    $e->getMessage();
    
    }
    }
public function afficherimgp(){
    require 'connection.php';
    
    try {
    $query =$pdo->prepare('SELECT img FROM restaurant where (prix>? AND prix<?)');
  $query->bindParam(1,$min);
$query->bindParam(2,$max);  
$query->execute();
    return $result = $query->fetchAll();
    
    
    
    }
    catch (PDOException $e){
    $e->getMessage();
    
    }
    }
}
?>