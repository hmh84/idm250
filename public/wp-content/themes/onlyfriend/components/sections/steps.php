<?php
    $rows = get_field('steps');
    if( $rows ) { ?>
    
    <section id="build">
        <h1>Build a Basket</h1>
        <div class="block-wrap">
    
    <?php
        foreach( $rows as $row ) {
            $heading = $row['heading'];
            $body = $row['body'];
            $graphic = $row['graphic'];
    ?>

            <div class="block">
                <h2><?php echo $heading; ?></h2>
                <p><?php echo $body; ?></p>
                <div class="img-area">
                    <img src="<?php echo $graphic['url']; ?>" alt="<?php echo $graphic['alt']; ?>">
                </div>
            </div>

    <?php } ?>

            </div>
            <a class="contains-button" href="build.php" rel="noopener noreferrer">
                <button>Let's Build</button>
            </a>
        </section>

<?php } ?>