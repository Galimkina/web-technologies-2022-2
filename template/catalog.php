<br><h2>Каталог</h2>
<div>
    <?php foreach ($catalog as $item): ?>
    <div>
        <h2><?=$item['name']?></h2>
        <img id = "pizza" src="/img18/<?=$item['image']?>" alt="<?=$item['image']?>" width="250">
        <span>Цена: <?=$item['price']?></span>
        <button>Купить</button>
        <hr>
    </div>
    <?php endforeach; ?>
</div>
