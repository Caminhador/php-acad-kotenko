<?php

function render($template, $layout, array $variables)
{
    extract($variables);

    ob_start();
    require_once $template;
    $content = ob_get_clean();

    ob_start();
    require_once $layout;
    return ob_get_clean();
}
