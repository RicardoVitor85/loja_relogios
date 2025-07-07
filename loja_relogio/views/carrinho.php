<?php
session_start();
include '../partials/header.php';

// Simular produtos no carrinho se estiver vazio (apenas para teste)
// Remove esta parte quando usares carrinho real da tua loja
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    $_SESSION['cart'] = [
        ['name' => 'Relógio Clássico', 'price' => 99.90, 'quantity' => 1],
        ['name' => 'Relógio Esportivo', 'price' => 150.00, 'quantity' => 2],
    ];
}

?>

<div class="container mt-5">
    <h2>O Meu Carrinho</h2>

    <?php if (empty($_SESSION['cart'])): ?>
        <p>O carrinho está vazio.</p>
    <?php else: ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Preço Unitário</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                foreach ($_SESSION['cart'] as $item):
                    $subtotal = $item['price'] * $item['quantity'];
                    $total += $subtotal;
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($item['name']); ?></td>
                    <td><?php echo intval($item['quantity']); ?></td>
                    <td>€<?php echo number_format($item['price'], 2); ?></td>
                    <td>€<?php echo number_format($subtotal, 2); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h4>Total a Pagar: €<?php echo number_format($total, 2); ?></h4>

        <!-- Botão para finalizar compra -->
        <a href="checkout.php" class="btn btn-success mt-3">Finalizar Compra</a>
    <?php endif; ?>
</div>

<?php include '../partials/footer.php'; ?>
