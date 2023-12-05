<?=$header?>
<div class="container">
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <?php foreach($classes as $item): ?>
    <div class="col">
        <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#55595c"/><text text-align="center" y="50%"  fill="#eceeef" dy=".3em"><?=$item['title']?></text></svg>
            <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <button type="button" class="btn btn-sm btn-outline-secondary">Подробнее</button>
            </div>
        </div>
    </div>
    <?php endforeach;?>
</div>
</div>
<?=$footer?>