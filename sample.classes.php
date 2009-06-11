<?php

interface iOther {
  public function q($name);
}

interface iSome {
  public function r($gio);
}

abstract class Our {
  public abstract function cd();
}

/**
 * undocumented class
 *
 * @package default
 * @author Hugo Wetterberg
 */
class Abc extends Our implements iSome, iOther {
  private function ab() {
    
  }
  
  public function cd() {
    
  }
  
  /**
   * undocumented function
   *
   * @param string $name 
   * @return void
   * @author Hugo Wetterberg
   */
  public function q($name) {
    return $name;
  }
  
  public function r($gio) {
    return $gio;
  }
}

public function asasd() {
  
}