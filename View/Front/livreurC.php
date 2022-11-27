<?php

include '../../Model/livreur.php';

class livreurC
{
 
    public function listlivreur()
    {
        $sql = "SELECT * FROM livreur";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function addlivreur($livreur)
    {
        
        $nom=$livreur->getnom();
        $numero=$livreur->getnumero();
        
      
   
		$sql="INSERT INTO `livreur` (`nom`, `numero` ) VALUES (:nom,:numero)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $req->bindValue(':nom',$nom);
		$req->bindValue(':numero',$numero);

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function recupererlivreur($id_livreur){
		$sql="SELECT * from livreur where id_livreur='$id_livreur'";
		$db = config::getConnexion();
		try{
			$query=$db->prepare($sql);
			$query->execute();

			$livreur=$db->query($sql);
			$modif=$livreur->fetch(PDO::FETCH_ASSOC);
		return $modif;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}

    function updatelivreur($livreur , $id_livreur){
		try {
			$db = config::getConnexion();
			$query = $db->prepare(
				'UPDATE livreur SET 
					
			        nom = :nom,
                    numero = :numero
				
				WHERE  id_livreur = :id_livreur'
			); echo ('taadina el prepare');
			
			$query->execute([
				'nom' => $livreur ->getnom(),
				'numero' => $livreur ->getnumero(),
                'id_livreur' =>  $id_livreur,
				
			]);
			echo $query->rowCount() . " records UPDATED successfully <br>";
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}


    function supprimerlivreur($id_livreur){
		$sql="DELETE FROM livreur where id_livreur= :id_livreur";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_livreur',$id_livreur);
		print('Effacement de ' .$id_livreur.'');
		try{
            $req->execute();

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}




	function AffecterLivreur(){
		$sql="SELECT * from livreur ORDER BY RAND ( )";
		$db = config::getConnexion();
		try{
			$query=$db->prepare($sql);
			$query->execute();

			$livreur=$db->query($sql);
			$modif=$livreur->fetch(PDO::FETCH_ASSOC);
		return $modif;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
}
