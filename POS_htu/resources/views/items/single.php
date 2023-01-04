<?php

use Core\Helpers\Helper;
?>
<div class="mt-5 d-flex flex-row-reverse gap-3">
    <?php if (Helper::check_permission(['item:read', 'item:update'])) : ?>
        <a href="/items/edit?id=<?= $data->item->id ?>" class="btn btn-warning">Edit</a>
    <?php endif;
    if (Helper::check_permission(['item:read', 'item:delete'])) :
    ?>
        <a href="/items/delete?id=<?= $data->item->id ?>" class="btn btn-danger">Delete</a>
    <?php endif; ?>
    <a href="/items" class="btn btn-success">Back</a>

</div>


<div class="my-5">
    <!-- for admins -->
    <h1 class="text-center">
        <?= $data->item->name ?>
    </h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">item name</th>
                <th scope="col">cost</th>
                <th scope="col">selling price</th>
                <th scope="col">Quantity</th>
                <th scope="col">created at</th>
                <th scope="col">updated at</th>
                <th scope="col">stock
                    available quantity</th>

            </tr>
        </thead>
        <tbody>

            <th scope="row">
                <?= $data->item->name ?>
            </th>
            <td> <?= $data->item->cost ?>
            </td>
            <td> <?= $data->item->selling_price ?>
            </td>
            <td> <?= $data->item->stock_quantity ?>
            </td>
            <td> <?= $data->item->created_at ?>
            </td>
            <td> <?= $data->item->updated_at ?>
            </td>
            <td>
                <?php
                // get the item and stock level
                if ($data->item->stock_quantity > 0) {
                    echo 'Available ';
                } else {
                    echo 'Out of stock';
                } ?>
            </td>



            </tr>

        </tbody>
    </table>

</div>