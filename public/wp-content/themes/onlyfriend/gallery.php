<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <!-- Set Current Directory Variable -->
        <script>var current_dir = 'gallery.php';</script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <?php include_once 'include/favicons.php'; ?>
</head>
<body>
    <?php include_once 'include/header.php'; ?>

    <main>
        <section id="gallery">
            <div class="block-wrap">

            <?php
                include_once 'include/db.php';
                if (isset($_GET['search'])) {
                    $search = htmlspecialchars($_GET['search']);
                    $sql = "SELECT * FROM curated_baskets WHERE visibility='y' AND (title LIKE '%{$search}%' OR description LIKE '%{$search}%' OR included LIKE '%{$search}%');";
                    } else {
                    $sql = "SELECT * FROM curated_baskets WHERE visibility = 'y';";
                    }
                $result = mysqli_query($connection, $sql);
            
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                    
                        echo "<div class='block'>";
                            echo "<h2>{$row['title']}</h2>";
                            echo "<img src='graphics/baskets/{$row['img_file_name']}' alt='{$row['title']}'>";
                            echo "<p>{$row['description']}</p>";
                            echo "<a class='contains-button' href='single.php?id={$row['id']}'>";
                                echo "<button>Choose this Basket</button>";
                            echo "</a>";
                        echo "</div>";

                    }
                } else {
                    header("Location: 404.php");
                }
            ?>

            </div>
        </section>
    </main>

    <?php include_once 'include/footer.php'; ?>
</body>

<style>
    section button {
        background: var(--gradient-blue)
    }
</style>

<?php include_once 'include/scripts.php'; ?>

</html>