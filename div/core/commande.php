<?php

class commande {
    private  $id_commande;
    private  $id_livreur;
    private  $id_utilisateur;
    private  $id_produit;
    private  $quantite;
    private  $prix;



public function __construct(string $commande,string $utilisateur,string $livreur,string $produit,int $quantite1,int $prix1)
{
$this->id_commande=$commande;
$this->id_utilisateur=$utilisateur;
$this->id_livreur=$livreur;
$this->id_produit=$produit;
$this->quantite= $quantite1;
$this->prix= $prix1;
}
public function getid(){
    echo $this->id_commande;
}


public function afficher(string $id){
require 'connection.php';

try {
$query =$pdo->prepare('SELECT * FROM commande WHERE id_commande = ?');
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
$query =$pdo->prepare('INSERT INTO commande (id_commande, id_produit,id_utilisateur,id_livreur,prix,quantite) VALUES(?,?,?,?,?,?)');
$query->bindParam(1,$this->id_commande);
$query->bindParam(2,$this->id_produit);
$query->bindParam(3,$this->id_utilisateur);
$query->bindParam(4,$this->id_livreur);
$query->bindParam(5,$this->prix);
$query->bindParam(6,$this->quantite);
$query->execute();
}
catch (PDOException $e){
$e->getMessage();
}
}

public function modifier(){
    require 'connection.php';
    try {
    $query =$pdo->prepare('UPDATE  commande SET id_produit= ? , id_utilisateur= ? , id_livreur= ? , prix= ? , quantite= ? where id_commande = ? ') ;
    
    $query->bindParam(1,$this->id_produit);
    $query->bindParam(2,$this->id_utilisateur);
    $query->bindParam(3,$this->id_livreur);
    $query->bindParam(4,$this->prix);
    $query->bindParam(5,$this->quantite);
    $query->bindParam(6,$this->id_commande);
     $query->execute();
    }
    
    
    catch (PDOException $e){
    $e->getMessage();
    
    }
    }
    public function supprimer(string $id){
        require 'connection.php';
        
        try {
        $query =$pdo->prepare('DELETE FROM commande WHERE id_commande = ?');
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
$query =$pdo->prepare('SELECT * FROM commande');
$query->bindParam(1,$id);
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
    $query =$pdo->prepare('SELECT * FROM commande ORDER BY prix DESC');
    $query->execute();

    return $result = $query->fetchAll();
        } 
        if(strcmp($variable,'quantite')==0){
            $query =$pdo->prepare('SELECT * FROM commande ORDER BY quantite DESC');
            $query->execute();
        
            return $result = $query->fetchAll();
                } 
                if(strcmp($variable,'id_commande')==0){
                    $query =$pdo->prepare('SELECT * FROM commande ORDER BY id_commande DESC');
                    $query->execute();
                
                    return $result = $query->fetchAll();
                        }    
                        if(strcmp($variable,'id_livreur')==0){
                            $query =$pdo->prepare('SELECT * FROM commande ORDER BY id_livreur DESC');
                            $query->execute();
                        
                            return $result = $query->fetchAll();
                                }    
                            if(strcmp($variable,'id_utilisateur')==0){
                                    $query =$pdo->prepare('SELECT * FROM commande ORDER BY id_utilisateur DESC');
                                    $query->execute();
                                
                                    return $result = $query->fetchAll();
                                        }       
}
    catch (PDOException $e) {
    $e->getMessage();
    
    }
}
    }

?>