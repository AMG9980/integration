<?php

class livraison {
    private  $id_commande;
    private  $id_livreur;
    private  $id_livraison;
    private  $adresse;



public function __construct(string $commande,string $livreur,string $id_livraison,string $adresse)
{
$this->id_commande=$commande;

$this->id_livreur=$livreur;

$this->id_livraison= $id_livraison;
$this->adresse= $adresse;
}

public function getid(){
    echo $this->id_commande;
}


public function afficher(string $id){
require 'connection.php';

try {
$query =$pdo->prepare('SELECT * FROM livraison WHERE id_livraison = ?');
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
$query =$pdo->prepare('INSERT INTO livraison (id_commande,id_livreur,id_livraison,adresse) VALUES(?,?,?,?)');
$query->bindParam(1,$this->id_commande);
$query->bindParam(2,$this->id_livreur);
$query->bindParam(3,$this->id_livraison);
$query->bindParam(4,$this->adresse);
$query->execute();
}
catch (PDOException $e){
$e->getMessage();
}
}

public function modifier(){
    require 'connection.php';
    try {
    $query =$pdo->prepare('UPDATE  livraison SET id_commande= ? , id_livreur= ?, adresse= ? where id_livraison = ? ') ;
    
    $query->bindParam(1,$this->id_commande);
    $query->bindParam(2,$this->id_livreur);
    $query->bindParam(3,$this->adresse);
    $query->bindParam(4,$this->id_livraison);
     $query->execute();
    }
    
    
    catch (PDOException $e){
    $e->getMessage();
    
    }
    }
    public function supprimer(string $id){
        require 'connection.php';
        
        try {
        $query =$pdo->prepare('DELETE FROM livraison WHERE id_livraison = ?');
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
$query =$pdo->prepare('SELECT * FROM livraison');
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
    
    try {
        if(strcmp($variable,'id_livraison')==0){
    $query =$pdo->prepare('SELECT * FROM livraison ORDER BY id_livraison DESC');
    $query->execute();

    return $result = $query->fetchAll();
        } 
        if(strcmp($variable,'adresse')==0){
            $query =$pdo->prepare('SELECT * FROM commande ORDER BY adresse DESC');
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
                                  
}
    catch (PDOException $e) {
    $e->getMessage();
    
    }
}
    }

?>