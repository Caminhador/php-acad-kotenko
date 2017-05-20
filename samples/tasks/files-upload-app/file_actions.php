<?php

if ($_FILES['image']['tmp_name']) {
    uploadMyFile($_FILES['image']);
}
if ($_FILES['images']['tmp_name'][0]) {
    $files = reArrayFiles($_FILES['images']);
    foreach ($files as $file) {
        uploadMyFile($file);
    }
}

function uploadMyFile($uploadArray)
{
    global $config;

    if (!in_array($uploadArray['type'], $config['allowedFiles'])) {
        die('File mime type is not allowed. Allowed types: ' . implode(', ', $config['allowedFiles']));
    }

    if ($config['maxFileSize'] <= $uploadArray['size']) {
        die('File is large. Max size: ' . $config['maxFileSize'] . 'b');
    }

    $destination = $config['storageDirectory'] . '/' . $uploadArray['name'];
    if (move_uploaded_file($uploadArray['tmp_name'], $destination)) {
        echo 'File ' . $uploadArray['name'] . ' uploaded' . PHP_EOL;
    } else {
        echo 'File uploading error' . PHP_EOL;
    }
}
