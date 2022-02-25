<?php

namespace Manuel\GamePhp\Core;

use Gui\Application;
use Gui\Components\Button;

use Gui\Components\InputText;

use Gui\Components\TextArea;

class Game
{
  public Application $app;
  public function __construct()
  {
    $this->app = new Application(['processName'=>'Jooj']);
    // $this->app->on('start', $this->start);
    $this->app->run();
  }

  public function start($application)
  {
  }
}
