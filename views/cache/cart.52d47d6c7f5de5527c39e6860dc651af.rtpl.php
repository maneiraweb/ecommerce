<?php if(!class_exists('Rain\Tpl')){exit;}?>	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(res/site/images/heading-pages-01.jpg);">
		<h2 class="l-text2 t-center">
			Cart
		</h2>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Produto</th>
							<th class="column-3">Preço</th>
							<th class="column-4 p-l-70">Quantidade</th>
							<th class="column-5">Total</th>
						</tr>
						<?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>
						<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2"><a href="/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a> </td>
							<td class="column-3">R$<?php echo formatPrice($value1["vlprice"]); ?></td>
							<td class="column-4">
								<div class="flex-w bo5 of-hidden w-size17">
									<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="1">

									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
								</div>
							</td>
							<td class="column-5">R$<?php echo formatPrice($value1["vltotal"]); ?></td>
						</tr>
						<?php } ?>
						
					</table>
				</div>
			</div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					<div class="size11 bo4 m-r-10">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="Coupon Code">
					</div>

					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- Button -->
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Aplicar
						</button>
					</div>
				</div>

				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Atualizar Valores
					</button>
				</div>
			</div>

			<!-- Total -->
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					Total do Pedido

				</h5>

				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						R$<?php echo formatPrice($cart["vlsubtotal"]); ?>
					</span>
				</div>

				<!--  -->
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						FRETE

					</span>

					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
							Informe o CEP para entrega:
						</p>
						<div class="size13 bo4 m-b-22">
							<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="postcode" placeholder="CEP">
						</div>

						<div class="size14 trans-0-4 m-b-10">
							<!-- Button -->
							<button formmethod="post" formaction="/cart/freight" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
								Calcular
							</button>
						</div>
						<div class="response">
							<label><input type="radio" name="pac"> PAC - R$ <?php echo formatPrice($cart["vlfreight"]); ?> <?php if( $cart["nrdays"] >= 0 ){ ?>
							<small> Em média: <?php echo htmlspecialchars( $cart["nrdays"], ENT_COMPAT, 'UTF-8', FALSE ); ?> dia(s)</small> <?php } ?></label>

							<label><input type="radio" name="sedex"> SEDEX - R$ <?php echo formatPrice($cart["vlfreight"]); ?> <?php if( $cart["nrdays"] >= 0 ){ ?> <small>Em média <?php echo htmlspecialchars( $cart["nrdays"], ENT_COMPAT, 'UTF-8', FALSE ); ?> dia(s)</small><?php } ?></label>
						</div>
					</div>
				</div>

				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						R$<?php echo formatPrice($cart["vltotal"]); ?>
					</span>
				</div>

				<div class="size15 trans-0-4">
					<!-- Button -->
					<button type="submit" name="proceed" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Finalizar Compra
					</button>
				</div>
			</div>
		</div>
	</section>

