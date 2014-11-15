<?php namespace Yottaram\MultiLoginRestrictor\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class MultiLoginRestrictor extends Facade {
 
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'multi-login-restrictor'; }
 
}
