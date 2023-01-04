<div class="row h-100 col-10" style="text-align: justify;">
    <div class="container-item">

        <div class="all-items">
            <h3>ALL Items (<?= $data->items_count ?>)</h3>
        </div>

        <div class="row">
            <div class="col-3 ">
                <?php foreach ($data->products as $product) : ?>
                    <a href="#" class="card">
                        <img src="../assets/img/1.jpeg" class="card-img-top" alt="Item 2"><?= $item->img ?>
                        <div class="card-body">
                            <p class="card-text"> item name:<?= $item->name ?></p>
                            <p class="card-text">Cost:<?= $item->cost ?></p>
                            <p class="card-text">Selling Price:<?= $item->selling_price ?></p>
                            <p class="card-text">Quantity:<?= $item->stock_quantity ?> </p>
                        </div>
                    </a>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>