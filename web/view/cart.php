<table id="cart" class="table table-hover table-condensed">
	<thead>
		<tr>
			<th style="width:58%">Product</th>
			<th style="width:10%">Price</th>
			<!-- <th style="width:8%">Quantity</th> -->
			<th style="width:22%" class="text-center">Subtotal</th>
			<th style="width:10%"></th>
		</tr>
	</thead>
	<tbody>
		<?php if (isset($_SESSION['cart_items']['product_data']) && !empty($_SESSION['cart_items']['product_data'])): ?>
			<?php $total_price = 0 ?>	
			<?php foreach ($_SESSION['cart_items']['product_data'] as $product): ?>

			<tr>
				<td data-th="Product">
					<div class="row">
						<div class="col-sm-2 col-md-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
						<div class="col-sm-10 col-md-10">
							<h4 class="nomargin"><?php echo $product['name'] ?></h4>
							<p><?php echo $product['description'] ?></p>
						</div>
					</div>
				</td>
				<?php $total_price += (int)$product['price'] ?>
				<td data-th="Price">Rs.<?php echo $product['price'] ?></td>
				<!-- <td data-th="Quantity">
					<input type="number" class="form-control text-center" value="1">
				</td> -->
				<td data-th="Subtotal" class="text-center">Rs.<?php echo $total_price; ?></td>
				<td class="actions" data-th="">
					<a class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></a>
					<a class="btn btn-danger btn-sm removeFromCartBtn" data-id="<?php echo $product['id'] ?>"><i class="fa fa-trash-o"></i></a>								
				</td>
			</tr>
			

			<?php endforeach ?>

		<?php endif ?>
		
	</tbody>
	<tfoot>
		<tr class="visible-xs">
			<td class="text-center"><strong>Total Rs.<?php echo $total_price; ?></strong></td>
		</tr>
		<tr>
			<td><a href="http://localhost/petdoctor/web/controllers/ForDogs.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
			<td colspan="2" class="hidden-xs"></td>
			<td class="hidden-xs text-center"><strong>Total Rs.<?php echo $total_price; ?></strong></td>
			<td><a href="http://localhost/petdoctor/web/controllers/Payment.php?amount=<?php echo $total_price; ?>" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
		</tr>
	</tfoot>
</table>