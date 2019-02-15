<?php

function choixAlert($message, $short = null)
{
  $alert = array();
  switch($message)
  {
    case 'URL_INVALIDE' :
      $alert['messageAlert'] = MESSAGE_URL_I;
      break;
    case 'SHORT' :
      $alert['messageAlert'] = LINK.'?q='.$short;
      $alert['strongAlert'] = MESSAGE_SHORT;
      break;
    default :
      $alert['messageAlert'] = MESSAGE_ERREUR;
  }
  return $alert;
}
