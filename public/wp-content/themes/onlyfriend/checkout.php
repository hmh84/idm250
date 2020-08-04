<?php
    include_once 'include/db.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM curated_baskets WHERE id={$id} AND visibility = 'y';";

    $result = mysqli_query($connection, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
        if ($row = mysqli_fetch_assoc($result)) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- Set Current Directory Variable -->
        <script>var current_dir = 'checkout.php';</script>
    <?php include_once 'include/favicons.php'; ?>
</head>
<body>
    <main>
        <?php include_once 'include/header.php'; ?>

        <section id="checkout">
            <h1><?php echo 'Checkout - '.$row['title']; ?></h1>
            <div class="block-wrap">
                <div class="block">
                    <div id="paypal-button-container"></div>
                        <script src="https://www.paypal.com/sdk/js?client-id=AQnoaVC4n4pEf4DVJS2HqL8f-_9lhYUe50B2_2eCxWwfu-otTiaaXKORK1Vu7IKfAgMwxhoojsxIlKrQ&currency=USD" data-sdk-integration-source="button-factory"></script>
                        <script>
                            paypal.Buttons({
                                style: {
                                shape: 'rect',
                                color: 'blue',
                                layout: 'vertical',
                                label: 'paypal',
                            },
                            createOrder: function(data, actions) {
                                return actions.order.create({
                                    purchase_units: [{
                                        amount: {
                                            value: '.01'
                                        }
                                    }]
                                });
                            },
                            onApprove: function(data, actions) {
                                return actions.order.capture().then(function(details) {
                                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                                });
                            }
                            }).render('#paypal-button-container');
                        </script>
            </div>
                </div>
        </section>
    </main>
</body>
    <?php
        include_once 'include/footer.php';
        include_once 'include/scripts.php';
            }
        }
    ?>
</html>