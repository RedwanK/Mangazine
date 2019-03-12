<?PHP
require_once(PATH_MODELS.'DAO.php');
require_once(PATH_ENTITY.'Article.php');
class ArticleDAO extends DAO{

  public function getHebergement(){
    $requete = "Select * from Hebergement";
    $data = $this->queryAll($requete);
    $i = 0;//compteur pour remplir le tableau d'objet
    if(empty($data) ){
      $HebTab = null;
    }else{
    foreach($data as $dat){//pour chaque ligne du tab a 2D

      $HebTab[]= new Hebergement($dat[0], $dat[1], $dat[2], $dat[3], $dat[4], $dat[5], $dat[6], $dat[7], $dat[8]);//on créé un objet dans ce tableau
      $i++;
    }
  }
    return ($HebTab);
  }

  public function addHebergement($identifiant, $type, $adresse, $numeroTel, $capacite, $services, $placesRestantes,$nom, $numUser){
    $requete = "Insert into Hebergement (identifiant, type, adresse, numeroTel, capacite, services, placesRestantes, nom, gerant) values(?,?,?,?,?,?,?,?,?)";
    $rep = $this->queryAll($requete, array($identifiant, $type, $adresse, $numeroTel, $capacite, $services, $placesRestantes,$nom,$numUser));
    return ($rep);
  }


  public function actualisePR($pr, $id){
    $requete = "Update Hebergement set 	placesRestantes=? where identifiant = ?";
    $rep = $this->queryAll($requete, array($pr , $id));
    return ($rep);
  }
}
