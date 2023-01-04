<h1>Insert Items </h1>
<section class="grid">
    <div class="container">
        <form action="/products/store" method="POST" enctype='multipart/form-data' class="d-flex justify-content-center flex-column gap-3 px-5 mb-5 ">
            <div class="image-upload ">
                <label for="file-input">
                    <img src="https://via.placeholder.com/300x300.png?text=UPLOAD" style="pointer-events: none" />
                </label>

                <input id="file-input" type="file" />
            </div>

            <div id="name-place" class="form-group col-4 mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control mt-2" id="name" name="name">
            </div>
            <div class="form-group col-5 mb-3">
                <label for="cost">Cost</label>
                <input type="number" class="form-control mt-2" id="cost" name="cost">
            </div>

            <div class="row">
                <div class="form-group col-5 mb-3">
                    <label for="selling_price">Selling Price</label>
                    <input type="number" class="form-control mt-2" id="selling_price" name="selling_price">
                </div>
                <div class="form-group col-5 mb-3">
                    <label for="stock_quantity">Stock Available</label>
                    <input type="number" class="form-control mt-2" id="stock_quantity" name="sstock_quantity">
                </div>
            </div>
            <button type="submit" class="btn btn-primary col-2 mb-2 mb-3">Add Item</button>
        </form>

    </div>
</section>