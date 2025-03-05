<?php

namespace App\Controller;

use App\Model\Config;
use App\View\DashboardView;

class DashboardController
{
  public function index()
  {
    $config = new Config('config.ini');
    $title = $config->get('dashboard', 'title');

    $widgets = [];
    foreach ($config->get('widgets', 'items') as $widget) {
      $widgets[] = [
        'icon' => $config->get($widget, 'icon'),
        'url' => $config->get($widget, 'url'),
        'name' => $config->get($widget, 'name')
      ];
    }

    $view = new DashboardView();
    $view->render($title, $widgets);
  }
}
