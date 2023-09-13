<h1>
    <?php echo "Hello World! PHP!"; ?>
    <?php 
        echo "<em>Texte en italique avec partie HTML insérée dans le code PHP</em>";
    ?>
    <p>
        <?php
            echo "Lorem ipsum...";
        ?>
    </p>
    <?php
        for ($i = 1; $i <= 20; $i++) {
            echo "<br>";
            echo $i;
        }  
    ?>
</h1>