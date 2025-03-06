<?php

namespace App\Controller;

use App\Model\Config;
use App\View\DashboardView;

class DashboardController
{
  public function index()
  {
    $config = new Config('config.ini');

    $data = [
      'title' => $config->get('dashboard', 'title'),
      'widgets' => []
    ];

    foreach ($config->get('widgets', 'items') as $widget) {
      $data['widgets'][] = [
        'icon' => html_entity_decode($config->get($widget, 'icon')),
        'url' => $config->get($widget, 'url'),
        'name' => $config->get($widget, 'name')
      ];
    }

    $view = new DashboardView();
    $view->render($data);
  }
}
