<?php
class reservation {
    private  $id_reservation;
    private  $id_restaurant;
    private $id_utilisateur;
    private $date_reservation;
    
      



public function __construct(string $id_reservation,string $id_restaurant,string $id_utilisateur,string $date_reservation)
{
$this->id_reservation=$id_reservation;
$this->id_restaurant=$id_restaurant;
$this->id_utilisateur=$id_utilisateur;
$this->date_reservation=$date_reservation;






}
public function getid(){
    echo $this->id_reservation;
}


public function afficher(string $id){
require 'connection.php';

try {
$query =$pdo->prepare('SELECT * FROM reservation WHERE id_reservation = ?');
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
$query =$pdo->prepare('INSERT INTO reservation (id_reservation,id_restaurant,id_utilisateur,date_reservation) VALUES(?,?,?,?)');
$query->bindParam(1,$this->id_reservation);
$query->bindParam(2,$this->id_restaurant);
$query->bindParam(3,$this->id_utilisateur);
$query->bindParam(4,$this->date_reservation);



$query->execute();
}
catch (PDOException $e){
$e->getMessage();
}
}

public function modifier(){
    require 'connection.php';
    try {
    $query =$pdo->prepare('UPDATE  reservation SET  id_restaurant= ? , id_utilisateur= ? ,date_reservation=? where id_reservation = ? ') ;
    
$query->bindParam(1,$this->id_restaurant);
$query->bindParam(2,$this->id_utilisateur);
$query->bindParam(3,$this->date_reservation);
$query->bindParam(4,$this->id_reservation);

    

     $query->execute();
    }
    
    
    catch (PDOException $e){
    echo $e->getMessage();
    
    }
    }
    public function supprimer(string $id){
        require 'connection.php';
        
        try {
        $query =$pdo->prepare('DELETE FROM reservation WHERE id_reservation = ?');
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
$query =$pdo->prepare('SELECT * FROM reservation');
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
        if(strcmp($variable,'id_utilisateur')==0){
    $query =$pdo->prepare('SELECT * FROM reservation ORDER BY id_utilisateur DESC');
    $query->execute();

    return $result = $query->fetchAll();
        } 
        if(strcmp($variable,'date_reservation')==0){
            $query =$pdo->prepare('SELECT * FROM reservation ORDER BY date_reservation DESC');           
             $query->execute();
        
                 
}
    }
    catch (PDOException $e) {
    $e->getMessage();
    
    }
}

}