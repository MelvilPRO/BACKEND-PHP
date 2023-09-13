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
<table border="1">
    <?php
        $listes = [
            [1, 2, 3],
            [4, 5, 6]
        ];

        foreach ($listes as $listeImbriquee)
        {
            echo "<tr>"; 
            foreach($listeImbriquee as $valeurInterne)
            {
                echo "<td>".$valeurInterne."</td>";
            }
            echo "</tr>";
        }
    ?>
</table>

<!--  Fruit - Prix/Kg - Stock -->
<table border="1">
    <?php
        $listeObjets = [
            [
                "fruit" => "pomme",
                "prix" => 7,
                "stock" => 100,
            ],
            [
                "fruit" => "poire",
                "prix" => 90,
                "stock" => 2,
            ]
        ];

        // description de ce que l'on stock (titre du tableau)
        echo "<td>fruit</td><td>prix</td><td>stock</td>";
        foreach ($listeObjets as $objetFruitActuel)
        {
            echo "<tr>";
            foreach($objetFruitActuel as $key => $value)
            {
                echo "<td>".$value."</td>";
            }
            echo "</tr>";
        }
    ?>
</table>