<div id="main">
    <div class="post_title"><h2>Моя галерея</h2></div>
    <div class="gallery">
        <?php
        foreach ($arrImg['1'] as $img){
            ?>
            <a rel="gallery" class="photo" href='<?=$img?>' target="_blank">
                <img src="<?=$img?>" width="180px" height="120" alt="img" />
            </a>
            <?php
        }
        ?>
    </div>
</div>