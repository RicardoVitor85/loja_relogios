<?php
session_start();

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "O carrinho está vazio.";
    exit;
}

$total = 0;
foreach ($_SESSION['cart'] as $item) {
    $total += $item['price'] * $item['quantity'];
}

include '../partials/header.php';
?>

<div class="container mt-5">
  <h2>Finalizar Compra</h2>
  <p>Total a pagar: <strong>€<?php echo number_format($total, 2); ?></strong></p>

  <div id="paypal-button-container"></div>
</div>

<!-- Substitui SEU_CLIENT_ID_SANDBOX pelo Client ID da tua app PayPal Sandbox -->
<script src="https://www.paypal.com/sdk/js?client-id=SEU_CLIENT_ID_SANDBOX&currency=EUR"></script>
<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '<?php echo number_format($total, 2); ?>'
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      return actions.order.capture().then(function(details) {
        alert('Pagamento realizado com sucesso por ' + details.payer.name.given_name + '!');
        window.location.href = 'pedido_confirmado.php';
      });
    },
    onCancel: function (data) {
      alert('Pagamento cancelado.');
    },
    onError: function (err) {
      alert('Ocorreu um erro no pagamento.');
      console.error(err);
    }
  }).render('#paypal-button-container');
</script>

<?php include '../partials/footer.php'; ?>
