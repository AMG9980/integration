<?php

class catalog {
    private  $id_catalog;
    private  $nom;
    private $desc;
    
      



public function __construct(string $id_catalog,string $nom,string $desc)
{
$this->id_catalog=$id_catalog;
$this->nom=$nom;

$this->nom=$nom;




}
public function getid(){
    echo $this->id_catalog;
}


public function afficher(string $id){
require 'connection.php';

try {
$query =$pdo->prepare('SELECT * FROM cataloge WHERE id_catalog = ?');
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
$query =$pdo->prepare('INSERT INTO cataloge (id_catalog,catalog_nom,descr) VALUES(?,?,?)');
$query->bindParam(1,$this->id_catalog);
$query->bindParam(2,$this->nom);
$query->bindParam(3,$this->desc);


$query->execute();
}
catch (PDOException $e){
$e->getMessage();
}
}

public function modifier(){
    require 'connection.php';
    try {
    $query =$pdo->prepare('UPDATE  cataloge SET  catalog_nom= ? , descr= ?  where id_catalog = ? ') ;
    
    $query->bindParam(1,$this->nom);
    $query->bindParam(2,$this->desc);
    $query->bindParam(3,$this->id_catalog);
    

     $query->execute();
    }
    
    
    catch (PDOException $e){
    $e->getMessage();
    
    }
    }
    public function supprimer(string $id){
        require 'connection.php';
        
        try {
        $query =$pdo->prepare('DELETE FROM cataloge WHERE id_catalog = ?');
        $query->bindParam(1,$id);
        $query->execute();
        echo 'succ';

        
        }
        catch (PDOException $e){
        $e->getMessage();
        
        }
        }

public function affichertout(){
require 'connection.php';

try {
$query =$pdo->prepare('SELECT * FROM catalog');
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
        if(strcmp($variable,'catalog_nom')==0){
    $query =$pdo->prepare('SELECT * FROM cataloge ORDER BY catalog_nom DESC');
    $query->execute();

    return $result = $query->fetchAll();
        } 
        if(strcmp($variable,'descr')==0){
            $query =$pdo->prepare('SELECT * FROM cataloge ORDER BY descr DESC');           
             $query->execute();
        
                 
}
    }
    catch (PDOException $e) {
    $e->getMessage();
    
    }
}

}
?>