<!DOCTYPE html>
<html>
    <head>
        <title>Atelier 2 | Exercice 3</title>
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
                            <a class="nav-link text-primary" href="Exercice 2.php">Exercice 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary active" href="Exercice 3.php"><strong>Exercice 3</strong></a>
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
                $TAB=["Atelier N°2","Bonjour Tout le monde","Vous êtes les bienvenus"];
                //2
                $JSON="{";
                foreach ($TAB as $key=>$value)
                {
                    $JSON.="\"$key\":\"$value\"";
                }
                $JSON[-1]="}";
                echo $JSON."<br>";
                //4
                echo str_contains($JSON,"Bonjour")?"Bonjour existe":"Bonjour n'existe pas";
            ?>
        </div>
    </body>
</html>