<?php
require_once(PATH_ENTITY.'Links.php');
require_once('DAO.php');
class LinksDAO extends DAO{

  public function getLinkByUrl($url){
    $requete = "SELECT * FROM links WHERE url = ?";
    $donnees = array($url);
    $res = $this->queryRow($requete, $donnees);
    if($res){
      return new Links($res['id'], $res['url'], $res['shortcut']);
    }
    else return null;
  }

  public function getLinkByShortcut($shortcut){
    $requete = "SELECT * FROM links WHERE shortcut = ?";
    $donnees = array($shortcut);
    $res = $this->queryRow($requete, $donnees);
    if($res){
      return new Links($res['id'], $res['url'], $res['shortcut']);
    }
    else return null;
  }

  public function newLink($link){
    $requete = "INSERT INTO links(url, shortcut) VALUES(?, ?)";
    $donnees = array($link->getUrl(), $link->getShortcut());
    $res = $this->queryInsert($requete, $donnees);
    if($res == false){
      return false;
    } else {
      return true;
    }
  }
}
?>
