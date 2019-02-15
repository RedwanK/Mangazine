<?php

class Links
{
  private $_id;

  private $_url;

  private $_shortcut;

  public function __construct($id, $url, $shortcut)
  {
    $this->_id = $id;
    $this->_url = $url;
    $this->_shortcut = $shortcut;
  }

  public function getId() {
    return $this->_id;
  }

  public function setId($id){
    $this->_id = $id;
  }

  public function getUrl() {
    return $this->_url;
  }

  public function setUrl($url){
    $this->_url = $url;
  }

  public function getShortcut() {
    return $this->_shortcut;
  }

  public function setShortcut($shortcut){
    $this->_shortcut = $shortcut;
  }
}
