<?php
    // echo $_POST['input1']; vulnerable a XSS
    echo htmlspecialchars($_POST['input1']); // remplace des caractères afin d'éviter l'execution de code

    /*
    $variable = "Hello world!";
    for ($i = 0; $i < 10; $i++)
    {
        $variable = htmlentities($variable);
        echo $variable;
        echo "<br>";
    }
    */
?>