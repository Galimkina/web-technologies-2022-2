<?php foreach ($gallery as $filename): ?>
    <a rel="gallery" class="photo" href="gallery_img/big/<?=$filename?>" target="_blank">
        <img src="gallery_img/small/<?=$filename?>" width="150" height="100" alt="img" />
        </a>
<?php endforeach; ?>

<div class="add">
    <form method="post" enctype="multipart/form-data">
        <input id="file" type="file" name="myFile" accept="image/jpg, image/jpeg">
        <input id="submit" type="submit" value="Загрузить">
    </form>
</div>
