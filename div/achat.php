<?php

class achat {
    private  $id_produit;
    private  $quantite;
    private  $prix;
    private  $nom;
    private $id_commande;
    



public function __construct($produit,$quantite,$prix,$nom,$commande)
{

$this->id_produit=$produit;
$this->quantite= $quantite;
$this->prix= $prix;
$this->nom=$nom;
$this->id_commande=$commande;

}
public function getid(){
    echo $this->id_produit;
}


public function afficher(string $id){
require 'connection.php';

try {
$query =$pdo->prepare('SELECT * FROM achat WHERE id_produit = ?');
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
$query =$pdo->prepare('INSERT INTO achat (id_produit,nom,prix,quantite,id_commande) VALUES(?,?,?,?,?)');
$query->bindParam(1,$this->id_produit);
$query->bindParam(2,$this->nom);
$query->bindParam(3,$this->prix);
$query->bindParam(4,$this->quantite);
$query->bindParam(5,$this->id_commande);

$query->execute();
}
catch (PDOException $e){
$e->getMessage();
}
}

public function modifier(){
    require 'connection.php';
    try {
    $query =$pdo->prepare('UPDATE  achat SET nom= ? , prix= ? , quantite= ? where id_produit = ? ') ;
    
    $query->bindParam(1,$this->nom);
   
    $query->bindParam(2,$this->prix);
    $query->bindParam(3,$this->quantite);
    $query->bindParam(4,$this->id_produit);
     $query->execute();
    }
    
    
    catch (PDOException $e){
    $e->getMessage();
    
    }
    }
    public function supprimer(string $id){
        require 'connection.php';
        
        try {
        $query =$pdo->prepare('DELETE FROM achat WHERE id_produit = ?');
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
$query =$pdo->prepare('SELECT * FROM achat');
$query->execute();
return $result = $query->fetchAll();



}
catch (PDOException $e){
$e->getMessage();

}
}

    }

?>