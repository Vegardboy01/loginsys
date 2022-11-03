<?php
    include_once 'header.php';
?>
<section>
    <?php
            if (isset($_SESSION["useruid"])) {
                    echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
                    
                }
                
    ?>
    <img src="img/cute-giraffe-animal-z3771lfygkaihtsb-z3771lfygkaihtsb.jpg" alt="giraffe looking into the camera">
</section>

<?php
    include_once 'footer.php'
?>