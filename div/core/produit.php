<?php

class produit {
    private  $id_produit;
    private  $prix;
    private $nom;
    private  $description1;
    private  $quantite;
    private  $id_categorie;
    private $img;    
      



public function __construct(string $produit,string $description,string $id_categorie,int $quantite1,int $prix1,string $im,string $nom)
{
$this->description1=$description;
$this->id_categorie=$id_categorie;
$this->id_produit=$produit;
$this->quantite= $quantite1;
$this->prix= $prix1;
$this->img= $im;
$this->nom=$nom;




}
public function getid(){
    echo $this->id_produit;
}


public function afficher(string $id){
require 'connection.php';

try {
$query =$pdo->prepare('SELECT * FROM produit WHERE id_produit = ?');
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
$query =$pdo->prepare('INSERT INTO produit (id_produit,descrip,id_categorie,prix,quantite,img) VALUES(?,?,?,?,?,?)');
$query->bindParam(1,$this->id_produit);
$query->bindParam(2,$this->description1);
$query->bindParam(3,$this->id_categorie);
$query->bindParam(4,$this->prix);
$query->bindParam(5,$this->quantite);
$query->bindParam(5,$this->img);

$query->execute();
}
catch (PDOException $e){
$e->getMessage();
}
}

public function modifier(){
    require 'connection.php';
    try {
    $query =$pdo->prepare('UPDATE  produit SET id_categorie= ? , prix= ? , quantite= ? descrip= ? where id_produit = ? ') ;
    
    $query->bindParam(1,$this->id_categorie);
    $query->bindParam(2,$this->prix);
    $query->bindParam(3,$this->quantite);
    $query->bindParam(4,$this->description1);

    $query->bindParam(5,$this->id_produit);
     $query->execute();
    }
    
    
    catch (PDOException $e){
    $e->getMessage();
    
    }
    }
    public function supprimer(string $id){
        require 'connection.php';
        
        try {
        $query =$pdo->prepare('DELETE FROM produit WHERE id_produit = ?');
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
$query =$pdo->prepare('SELECT nom,prix FROM produit');
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
        if(strcmp($variable,'prix')==0){
    $query =$pdo->prepare('SELECT * FROM produit ORDER BY prix DESC');
    $query->execute();

    return $result = $query->fetchAll();
        } 
        if(strcmp($variable,'quantite')==0){
            $query =$pdo->prepare('SELECT * FROM produit ORDER BY quantite DESC');
            $query->execute();
        
            return $result = $query->fetchAll();
                } 
                if(strcmp($variable,'id_produit')==0){
                    $query =$pdo->prepare('SELECT * FROM produit ORDER BY id_produit DESC');
                    $query->execute();
                
                    return $result = $query->fetchAll();
                        }    
                           
                            if(strcmp($variable,'id_categorie')==0){
                                    $query =$pdo->prepare('SELECT * FROM produit ORDER BY id_categorie DESC');
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
    $query =$pdo->prepare('SELECT img FROM produit');
    $query->execute();
    return $result = $query->fetchAll();
    
    
    
    }
    catch (PDOException $e){
    $e->getMessage();
    
    }
    }
}
?>