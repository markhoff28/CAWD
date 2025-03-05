<?php
spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $base_dir = __DIR__ . '/app/';

    // Überprüfen, ob die Klasse den Prefix enthält
    if (strpos($class, $prefix) !== 0) {
        return;
    }

    // Namespace entfernen und in einen Pfad umwandeln
    $relative_class = substr($class, strlen($prefix));
    $file = $base_dir . str_replace(['\\', '/'], DIRECTORY_SEPARATOR, $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    } else {
        throw new Exception("Autoload-Fehler: Datei '$file' nicht gefunden!");
    }
});
