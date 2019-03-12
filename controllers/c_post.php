<?php


require_once(PATH_ENTITY.'ArticleDAO.php');
require_once(PATH_ENTITY.'Article.php');

$ADAO = new ArticleDAO();

$ArTab = $ADAO->getArticle();

if(isset($_GET['post'])){
    $post=$_GET['post'];
    foreach($ArTab as $art){
        if ($art->getTitre()==$post){
            $currentArticle = $art;
        }
    }
}

require_once(PATH_VIEWS.$page.'.php');
