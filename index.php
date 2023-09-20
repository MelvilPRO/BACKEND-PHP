<?php
    // Les définitions des variables...
    $variable = "Hello World!";
    $floatVar = 9.0;

    // Les boucles...
    for ($index = 0; $index < 20; $index++)
    {
        echo $variable;
        echo "<br>";
    }

    // Les conditions...
    if ($floatVar <= 10)
    {
        echo "floatVar est inférieur ou égal a 10";
    }

    // Les fonctions...
    function similaireAJavaScript($param1, $param2)
    {
        echo "<br>";
        echo $param1;
        echo "<br>";
        echo $param2;
        echo "<br>";
    }
    similaireAJavaScript("Coucou", "Thomas");

    // Les tableaux...
    $tabNumbers = [1, 2, 3, 0xFF];
    echo $tabNumbers[3];
    echo "<br>";

    $tabArchive = [
        "Première case" => 42, 
        "Deuxième case" => "Incroyable"
    ];
    echo $tabArchive["Deuxième case"];

    // Les boucles foreach...
    // foreach ($tabArchive as $value) indexée
    foreach ($tabArchive as $key => $value)
    {
        echo "<br/>";
        echo $key;
        echo "<br/>";
        echo $value;
        echo "<br/>";
    }
?>

<!-- C'est ici que PHP commence a être utile, on peut automatiser des tâches répétitives -->
<ul>
    <?php
        for ($i = 0; $i < 100; $i++)
        {
            echo "<li>".$i."</li>";
        }

        $produits = ["pommes", "poires"];
        foreach($produits as $value)
        {
            echo "<li>".$value."</li>";
        }
    ?>
</ul>

<!-- A partir d'un tableau de tableau, afficher un tableau avec les valeurs imbriquées -->
<?php
    $listes = [
        [1, 2, 3],
        [4, 5, 6]
    ];

    echo '<table border="1">';
    foreach ($listes as $listeImbriquee)
    {
        echo "<tr>"; 
        foreach($listeImbriquee as $valeurInterne)
        {
            echo "<td>".$valeurInterne."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>

<!--  Fruit - Prix/Kg - Stock -->
<?php
    $listeObjets = [
        [
            "fruit" => "pomme",
            "prix" => 7,
            "stock" => 100,
            "kg" => 0.50,
        ],
        [
            "fruit" => "poire",
            "prix" => 90,
            "stock" => 2,
            "kg" => 0.60,
        ]
    ];

    $nombreObjets = 0;
    foreach($listeObjets as $objetFruitActuel)
    {
        $nombreObjets = $nombreObjets + 1;
    }

    /* Créer un tableau si le tableau contient des éléments */
    if ($nombreObjets > 0)
    {
        echo '<table border="1">';
        /* On écrit chaque clés aux entêtes du tableau */
        foreach($listeObjets as $objetFruitActuel)
        {
            foreach($objetFruitActuel as $key => $value)
            {
                echo "<th>".$key."</th>";
            }
            break;
        }
        /* On écrit chaque valeurs dans de nouvelles lignes */
        foreach ($listeObjets as $objetFruitActuel)
        {
            echo "<tr>";
            foreach($objetFruitActuel as $key => $value)
            {
                echo "<td>".$value."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
?>
