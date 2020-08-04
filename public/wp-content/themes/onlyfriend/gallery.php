<?php get_header(); ?>
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
    <?php get_footer(); ?>
</body>
<style>
    section button {
        background: var(--gradient-blue);
    }
</style>
</html>