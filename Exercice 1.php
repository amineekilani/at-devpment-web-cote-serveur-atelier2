<!DOCTYPE html>
<html>
    <head>
        <title>Atelier 2 | Exercice 1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </head>
    <body class="bg-info-subtle text-primary">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand text-primary" href="Atelier 2.php">Atelier 2</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-primary active" href="Exercice 1.php"><strong>Exercice 1</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="Exercice 2.php">Exercice 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="Exercice 3.php">Exercice 3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="Exercice 4.php">Exercice 4</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="Exercice 5.php">Exercice 5</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container my-3">
            <?php
                $Notes=["Rami"=>7.50,"Mohamed"=>19.00,"Amira"=>15.50,"Asma"=>10.00,"Ahmed"=>09.5,"Yassine"=>15.5,"Islem"=>12.00];
                //1
                echo "<strong>1.</strong><br>";
                echo "<h4>Etudiants qui ont la moyenne supérieure ou égale à 10</h4>";
                foreach ($Notes as $key=>$value)
                {
                    if ($value>=10)
                        echo $key."<br>";
                }
                //2
                echo "<strong>2.</strong><br>";
                echo "<h4>Nombre d'étudiants : ".count($Notes)."</h4>";
                //3
                echo "<strong>3.</strong><br>";
                foreach ($Notes as $key=>$value)
                {
                    if (max($Notes)==$value)
                        echo "<h4>L'étudiant qui a la meilleure note : $key</h4>";
                }
                //4
                echo "<strong>4.</strong><br>";
                echo "<h4>Tableau</h4><table class='table table-striped'><tr class='table-info'><th>Nom</th><th>Note en PHP</th></tr>";
                foreach ($Notes as $key=>$value)
                    echo "<tr><td>$key</td><td>$value</td></tr>";
                echo "</table>";
                //5
                echo "<strong>5.</strong><br>";
                asort($Notes);
                echo "<h4>Tableau trié selon un ordre croissant des notes</h4><table class='table table-striped'><tr class='table-info'><th>Nom</th><th>Note en PHP</th></tr>";
                foreach ($Notes as $key=>$value)
                    echo "<tr><td>$key</td><td>$value</td></tr>";
                echo "</table>";
                //6
                echo "<strong>6.</strong><br>";
                krsort($Notes);
                echo "<h4>Tableau trié selon un ordre décroissant des noms</h4><table class='table table-striped'><tr class='table-info'><th>Nom</th><th>Note en PHP</th></tr>";
                foreach ($Notes as $key=>$value)
                    echo "<tr><td>$key</td><td>$value</td></tr>";
                echo "</table>";
                //7
                echo "<strong>7.</strong><br>";
                $somme=0;
                foreach ($Notes as $key=>$value)
                {
                    $somme+=$value;
                }
                echo "<h4>La moyenne des notes : ".($somme/count($Notes))."</h4>";
            ?>
        </div>
    </body>
</html>