<?php

$file = __DIR__ . '/Penguins.jpg';

header('Content-Type: ' . mime_content_type($file));
//header('Location: ./', true, 301);
//exit;

header('Content-Description: File Transfer');
header('Content-Disposition: attachment; filename="Penguins.jpg"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($file));

echo file_get_contents($file);
