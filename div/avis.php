
<?php
class avis {
    private  $id_avis;
    private  $typeavis;
    private $nmbetoile;
    private $id_utilisateur;
	private $avis;
    
      



public function __construct(string $id_avis,string $id_utilisateur,int $nbetoile,string $typeavis,string $avis)
{
$this->id_avis=$id_avis;
$this->id_utilisateur=$id_utilisateur;
$this->nbetoile=$nbetoile;
$this->typeavis=$typeavis;
$this->avis=$avis;







}
public function getid(){
    echo $this->id_avis;
}


public function afficher(string $id){
require 'connection.php';

try {
$query =$pdo->prepare('SELECT * FROM avis WHERE id_avis = ?');
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
$query =$pdo->prepare('INSERT INTO avis (id_avis,id_utilisateur,nbetoile,typeavis,avis) VALUES(?,?,?,?,?)');
$query->bindParam(1,$this->id_avis);
$query->bindParam(2,$this->id_utilisateur);
$query->bindParam(3,$this->nbetoile);
$query->bindParam(4,$this->typeavis);
$query->bindParam(5,$this->avis);



echo "karim";

$query->execute();
echo "karim";

}
catch (PDOException $e){
echo $e->getMessage();
}
}

public function modifier(){
    require 'connection.php';
    try {
    $query =$pdo->prepare('UPDATE  avis SET  id_utilisateur= ? , nbetoile= ? ,typeavis=? ,avis=? where id_avis = ? ') ;
    $query->bindParam(5,$this->avis);
$query->bindParam(1,$this->id_utilisateur);
$query->bindParam(2,$this->nbetoile);
$query->bindParam(3,$this->typeavis);
$query->bindParam(5,$this->id_avis);
$query->bindParam(4,$this->avis);
    

     $query->execute();
    }
    
    
    catch (PDOException $e){
    $e->getMessage();
    
    }
    }
    public function supprimer(string $id){
        require 'connection.php';
        
        try {
        $query =$pdo->prepare('DELETE FROM avis WHERE id_avis = ?');
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
$query =$pdo->prepare('SELECT * FROM avis');
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
    $query =$pdo->prepare('SELECT * FROM avis ORDER BY id_utilisateur DESC');
    $query->execute();

    return $result = $query->fetchAll();
        } 
        if(strcmp($variable,'nmbetoile')==0){
            $query =$pdo->prepare('SELECT * FROM avis ORDER BY nmbetoile DESC');           
             $query->execute();
        
                 
}
    }
    catch (PDOException $e) {
    $e->getMessage();
    
    }
}

}