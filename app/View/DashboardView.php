<?php

namespace App\View;

class DashboardView
{
  public function render($title, $widgets)
  {
?>
    <!DOCTYPE html>
    <html>

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php echo htmlspecialchars($title); ?></title>
      <link rel="stylesheet" href="public/css/style.css">
    </head>

    <body>
      <section class="main">
        <h1><?php echo htmlspecialchars($title); ?></h1>
        <ul>
          <?php foreach ($widgets as $widget): ?>
            <li>
              <a href="<?php echo htmlspecialchars($widget['url']); ?>">
                <span><?php echo $widget['icon']; ?></span>
                <?php echo htmlspecialchars($widget['name']); ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </section>

    </body>

    </html>
<?php
  }
}
