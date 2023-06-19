<?php

function renderTemplate($page, $content = '', $menu = '')
{
    ob_start();
    include "./template/" . $page . ".php";

    return ob_get_clean();
}

echo renderTemplate("layout", renderTemplate('menu'), renderTemplate('main'));