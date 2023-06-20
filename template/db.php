<?php

function renderLesson($items, $ParentId) {
    foreach ($items as $item) {
        if ($item["ParentId"] == $ParentId) {
            echo '<div class="list-item list-item_open" data-parent>' .
                '<div class="list-item__inner">' .
                '<img class="list-item__arrow" src="./img20/chevron-down.png" alt="" data-open>' .
                '<img class="list-item__folder" src="./img20/folder.png" alt="">';
            echo $item["name"];
            echo '</div>';
            echo '<div class="list-item__items">';
            renderLesson($items, $item["id"]);
            echo '</div>';
            echo '</div>';
        }
    }
}
?>
<div class="list-items" id="list-items">
    <?=renderLesson(getDatabase(), null)?>
</div>


