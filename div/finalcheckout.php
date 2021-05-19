<?php
session_start();
include 'commande.php';
include 'livraison.php';
include 'achat.php';


function afficherliv(){

    $c = new livraison(1,1,1,1);

    return $result=$c->affichertout();

}



function affichercom(){
$c = new commande(1,1,1,1,1);
return $result=$c->affichertout();

}
function ajoutercommande(string $id_commande,string $utilisateur,string $livreur,int $total){
    $c = new commande($id_commande,$utilisateur,$livreur,$total);
    $c->ajouter();
    
    }
    function ajouterlivraison(string $commande,string $livreur,string $id_livraison,string $adresse){
        $c = new livraison( $commande,$livreur,$id_livraison,$adresse);
        $c->ajouter();
        
        }

function ajouterproduit($produit,$quantite,$prix,$nom,$commande){
    $c = new achat($produit,$quantite,$prix,$nom,$commande);
    $c->ajouter();
    
    }
function genereidc(){
$result=affichercom();

$id_commande="id-";
$id_commande=$id_commande .strval(rand(0,1000));
$id_commande=$id_commande. str_repeat ( '0' , 8-(strlen(strval(count($result))) ));
$id_commande=$id_commande. strval(count($result));
return $id_commande;

}
function genereidl(){
    $result=afficherliv();
    
    $id_liv="liv-";
    $id_liv= $id_liv. strval(rand(0,1000));
    $id_liv=$id_liv. str_repeat ( '0' , 8-(strlen(strval(count($result))) ));
    $id_liv=$id_liv. strval(count($result));
    return $id_liv;
    
    }

$id_commande =genereidc();
$id_livraison=genereidl();

for($i=0;$i<count($_SESSION['count']);$i++){
    ajouterproduit(10,$_SESSION['count'][$i][1],$_SESSION['count'][$i][2],$_SESSION['count'][$i][0],$id_commande);
}
ajoutercommande($id_commande,$_SESSION['nom'],'fadi',$_SESSION['total']);
ajouterlivraison($id_commande,'fadi',$id_livraison,$_POST['adresse']);


echo 'sucess';

?>

