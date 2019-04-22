<?php if (empty($data)): ?>
  <h1>No Data</h1>
  
<?php else: ?>

<?php foreach ($data as $count => $row) {?>
  <?php if ($count % 4 == 0) {?>
  <div class="row">
  <?php } ?>
  <div class="col-md-3">
    <div class="product-card">
        <div class="product-card-thumbnail">
          <a href="#"><img src="https://placehold.it/180x180"/></a>
        </div>
        <h2 class="product-card-title"><a href="#"><?php echo $row['name']; ?></a></h2>
        <span class="product-card-desc"><?php echo $row['description']; ?></span>
        <span class="product-card-price">Rs. <?php echo $row['price']; ?></span><span class="product-card-sale"><?php echo $row['product_category']; ?></span>
        <div class="product-card-buttons">
          <a href="#" class="btn btn-sm btn-primary">Buy</a>
          <a href="" class="btn btn-sm btn-warning addToCartBtn" data-id="<?php echo $row['id'] ?>">Add To Cart</a>
        </div>
    </div>
  </div>
  <?php if (($count+1) % 4 == 0 || $count == count($data) - 1) {?>
  </div>
  <?php } ?>

<?php }?>

<?php endif ?>

