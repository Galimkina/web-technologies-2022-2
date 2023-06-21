<?php foreach ($catalog as $item): ?>
<div>
    <h1>Вы выбрали: <?= $item['name'] ?></h1>
    <img id = "pizza" src="/img18/<?=$item['image']?>" alt="<?=$item['image']?>" width="250"><br>
    <h3>Подробное описание: <?= $item['description'] ?></h3>
<div>
<?php endforeach; ?>

<h1>Отзывы</h1>
<form action="/feedback/add" method="post">
    Оставить отзыв: <br>
    <input type="text" name="name" placeholder="Вашу имя"><br>
    <input type="text" name="feedback" placeholder="Ваш отзыв"><br>
    <input type="number" name="catalogId" hidden value="<?= $_GET['id'] ?>"><br>
    <input type="submit" value="Добавить">
</form>
<br>

<?php foreach ($feedback as $item): ?>
<div>
    <b><span class="author"><?=$item['name']?>: </span></b>
    <span class="text"><?= $item['feedback'] ?></span>
</div>
<?php endforeach; ?>