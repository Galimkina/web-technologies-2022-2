<?php

//5
echo "<p><b>5. </b>";

echo renderTemplate("layout", renderTemplate('main'));

function renderTemplate($page, $content = '', $menu = '', $main = '', $tasks = '')
{
    ob_start();
    include "./template/" . $page . ".php";

    return ob_get_clean();
}


