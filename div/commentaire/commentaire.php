<?php
class commentaire {
    private  $id_commentaire;
    private  $id_utilisateur;
    private $texte;
    
    
      



public function __construct(string $id_commentaire,string $id_utilisateur,string $texte)
{
$this->id_commentaire=$id_commentaire;
$this->id_utilisateur=$id_utilisateur;
$this->texte=$texte;






}
public function getid(){
    echo $this->id_commentaire;
}


public function afficher(string $id){
require 'connection.php';

try {
$query =$pdo->prepare('SELECT * FROM commentaire WHERE id_commentaire = ?');
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
$query =$pdo->prepare('INSERT INTO commentaire (id_commentaire,id_utilisateur,texte) VALUES(?,?,?)');
$query->bindParam(1,$this->id_commentaire);
$query->bindParam(2,$this->id_utilisateur);
$query->bindParam(3,$this->texte);



$query->execute();
}
catch (PDOException $e){
$e->getMessage();
}
}

public function modifier(){
    require 'connection.php';
    try {
    $query =$pdo->prepare('UPDATE  commentaire SET  id_utilisateur= ? , texte=? where id_commentaire = ? ') ;
    
$query->bindParam(1,$this->id_utilisateur);
$query->bindParam(2,$this->texte);
$query->bindParam(3,$this->id_commentaire);

    

     $query->execute();
    }
    
    
    catch (PDOException $e){
    $e->getMessage();
    
    }
    }
    public function supprimer(string $id){
        require 'connection.php';
        
        try {
        $query =$pdo->prepare('DELETE FROM commentaire WHERE id_commentaire = ?');
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
$query =$pdo->prepare('SELECT * FROM commentaire');
$query->execute();
return $result = $query->fetchAll();



}
catch (PDOException $e){
$e->getMessage();

}
}

public function trier(string $variable){
    require 'connection.php';
    
        try{
            $query =$pdo->prepare('SELECT * FROM commentaire ');           
             $query->execute();
        }
                 

    
    catch (PDOException $e) {
    $e->getMessage();
    
    }
}

}
?>