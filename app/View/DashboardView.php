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
        <div class="cardBox gray" style="--i: 2;">
          <?php foreach ($widgets as $widget): ?>
            <div class="card">
              <span><?php echo $widget['icon']; ?></span>
              <a href="<?php echo htmlspecialchars($widget['url']); ?>">
                <?php echo htmlspecialchars($widget['name']); ?>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </section>

    </body>

    </html>
<?php
  }
}
