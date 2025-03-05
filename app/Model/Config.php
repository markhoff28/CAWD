<?php

namespace App\Model;

class Config
{
  private $settings;

  public function __construct($file)
  {
    if (!file_exists($file)) {
      throw new \Exception("Config file not found");
    }
    $this->settings = parse_ini_file($file, true);
  }

  public function get($section, $key)
  {
    return $this->settings[$section][$key] ?? null;
  }
}
