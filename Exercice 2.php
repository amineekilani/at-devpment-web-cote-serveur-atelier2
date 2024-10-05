<!DOCTYPE html>
<html>
    <head>
        <title>Atelier 2 | Exercice 2</title>
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
                            <a class="nav-link text-primary" href="Exercice 1.php">Exercice 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary active" href="Exercice 2.php"><strong>Exercice 2</strong></a>
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
                //1
                $tabpays1=["Tunisie","Algérie","Portugal"];
                echo "<h4>Tableau 1 :</h4><table class='table table-striped-columns'><tr>";
                foreach ($tabpays1 as $value)
                    echo "<td>$value</td>";
                echo "</tr></table>";
                //2
                sort($tabpays1);
                echo "<h4>Tableau 1 trié par ordre alphabétique croissant :</h4><table class='table table-striped-columns'><tr>";
                foreach ($tabpays1 as $value)
                    echo "<td>$value</td>";
                echo "</tr></table>";
                rsort($tabpays1);
                echo "<h4>Tableau 1 trié par ordre alphabétique décroissant :</h4><table class='table table-striped-columns'><tr>";
                foreach ($tabpays1 as $value)
                    echo "<td>$value</td>";
                echo "</tr></table>";
                //4
                $tabpays2=["Tunisie"=>"Tunis","Algérie"=>"Alger","Portugal"=>"Lisbonne"];
                echo "<h4>Tableau 2 :</h4><table class='table table-striped'><tr class='table-info'><th>Pays</th><th>Capitale</th></tr>";
                foreach ($tabpays2 as $pays=>$capitale)
                    echo "<tr><td>$pays</td><td>$capitale</td></tr>";
                echo "</table>";
                //5
                ksort($tabpays2);
                echo "<h4>Tableau 2 trié par ordre alphabétique croissant des indices :</h4><table class='table table-striped'><tr class='table-info'><th>Pays</th><th>Capitale</th></tr>";
                foreach ($tabpays2 as $pays=>$capitale)
                echo "<tr><td>$pays</td><td>$capitale</td></tr>";
                echo "</table>";
                krsort($tabpays2);
                echo "<h4>Tableau 2 trié par ordre alphabétique décroissant des indices :</h4><table class='table table-striped'><tr class='table-info'><th>Pays</th><th>Capitale</th></tr>";
                foreach ($tabpays2 as $pays=>$capitale)
                echo "<tr><td>$pays</td><td>$capitale</td></tr>";
                echo "</table>";
            ?>
        </div>
    </body>
</html>