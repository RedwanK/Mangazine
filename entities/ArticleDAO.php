<?PHP
require_once(PATH_MODELS.'DAO.php');
require_once(PATH_ENTITY.'Article.php');
class ArticleDAO extends DAO{

  public function getArticle(){
    $requete = "Select * from Article";
    $data = $this->queryAll($requete);
    $i = 0;//compteur pour remplir le tableau d'objet
    if(empty($data) ){
      $ArTab = null;
    }else{
    foreach($data as $dat){//pour chaque ligne du tab a 2D

      $ArTab[]= new Article($dat[0], $dat[1], $dat[2], $dat[3], $dat[4], $dat[5], $dat[6], $dat[7], $dat[8], $dat[9]);//on créé un objet dans ce tableau
      $i++;
    }
  }
    return ($ArTab);
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
