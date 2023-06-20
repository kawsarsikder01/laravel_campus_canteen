@php
$productsInJson = file_get_contents("data_source/products.json");
$products = json_decode($productsInJson);
@endphp

<div class="row">
    <?php
    foreach ($products as $key => $product):
        ?>
        <div class="col-12 col-md-12 col-lg-4 gy-4">
            <div class="card  text-center bg-white pb-2">
                <div class="card-body text-dark">
                    <div class="img-area mb-4">
                        <img src="<?= $product->src ?>" alt="<?= $product->alt ?>" width="100%" height="100%">
                    </div>
                    <h3 class="card-title"><?= $product->title ?></h3>
                    <p class="lead text-danger"><?= $product->price ?></p>
                    <a href="" class="btn bg-warning text-dark">See More</a>
                </div>
            </div>
        </div>
        <?php
    endforeach
    ?>
</div>
</div>