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
    <title><?php echo $row['title']; ?></title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/single.css">
    <!-- Set Current Directory Variable -->
        <script>var current_dir = 'single.php';</script>
    <?php include_once 'include/favicons.php'; ?>
</head>
<body>
    <main>
        <?php include_once 'include/header.php'; ?>

        <section id="single">
            <h1><?php echo $row['title']; ?></h1>
            <div class="block-wrap">
                <div class='block'>
                    <div class="block-area" id="product-info">
                        <h2>Product Info</h2>
                        <p><?php echo $row['description']; ?></p>
                        <img src='graphics/baskets/<?php echo $row['img_file_name']; ?>' alt='<?php echo $row['title']; ?>'>
                    </div>
                </div>
                <div class="block">
                    <!-- <h2>Breakdown</h2> -->
                    <table>
                        <thead>
                            <tr>
                                <th class="upper">Order Summary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Merchandise:</td>
                                <td><?php echo '$'.number_format((float)$row['price'], 2, '.', '');; ?></td>
                            </tr>
                            <tr>
                                <td>Shipping:</td>
                                <td><?php echo '$'.number_format((float)$row['shipping'], 2, '.', '');; ?></td>
                            </tr>
                            <tr>
                                <td>Order SubTotal:</td>
                                <td>
                                    <?php
                                        $subtotal =  $row['price'] + $row['shipping'];
                                        echo '$'.number_format((float)$subtotal, 2, '.', '');;
                                        ?>
                                </td>
                            </tr>
                            <tr>
                                <td>State Sales Tax:</td>
                                <td>
                                    <?php
                                        $tax =  ($subtotal / 100) * 7;
                                        echo '$'.number_format((float)$tax, 2, '.', '');;
                                        ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="upper">Order Total:</td>
                                <td>
                                    <?php
                                        $total =  $subtotal + $tax;
                                        echo '$'.number_format((float)$total, 2, '.', '');;
                                        ?>
                                </td>
                            </tr>
                            <tr id="checkout-tr">
                                <td id="checkout-td">
                                    <form id="order" method="GET" action="checkout.php">
                                        <input type="text" name="promo_entre" placeholder="Have a Promo Code?">
                                        <input type="text" name="id" value="<?php echo $id; ?>" hidden>
                                        <button id="checkout" name="submit" type="submit">Purchase ></button>
                                    </form>
                                <td>
                            </tr>
                        </tbody>
                    </table>
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