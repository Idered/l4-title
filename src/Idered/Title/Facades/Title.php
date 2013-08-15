<?php namespace Idered\Title\Facades;

use Illuminate\Support\Facades\Facade;

class Title extends Facade {

  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'title'; }

}
