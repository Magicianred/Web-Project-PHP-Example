<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
	<h5 class="my-0 mr-md-auto font-weight-normal">MoboHile</h5>
	<nav class="my-2 my-md-0 mr-md-3">
		<a class="p-2 text-dark" href="/produtos">Produtos</a>
		<a class="p-2 btn btn-outline-primary" href="/carrinho">
			<?php
					$total = 1;
					if (isset($_SESSION['total'])) {
						$total = $_SESSION['total'];
					}
					echo 'Carrinho (R$ ' . htmlspecialchars($total) . ')';
				?>
		</a>
	</nav>
</div>