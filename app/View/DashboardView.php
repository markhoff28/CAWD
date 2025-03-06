<?php

namespace App\View;

class DashboardView
{
  public function render($data)
  {
    include __DIR__ . '/Template/dashboard.phtml';
  }
}
