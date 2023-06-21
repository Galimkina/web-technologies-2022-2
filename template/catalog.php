<br><h1>Каталог</h1>
<div>
    <?php foreach ($catalog as $item): ?>
    <div>
        <h2><?=$item['name']?></h2>
        <img id = "pizza" src="/img18/<?=$item['image']?>" alt="<?=$item['image']?>" width="250">
        <span>Цена: <?=$item['price']?></span><p>
<!--        <button>Купить</button>-->
        <a href="feedback/?id=<?=$item['id']?>">Подробная информация</a>
        <hr>
    </div>
    <?php endforeach; ?>
</div>
