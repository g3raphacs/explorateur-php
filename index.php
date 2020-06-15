<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Explorer</title>
    <!-- lien Bootstrap CDN  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div id="container">
        <div id="top">
            <dix id="topBar">
                <!-- logo et liste de tri ici  -->
                <header>
                    <h1>Explorateur de fichiers</h1>
                    <p><a href="#"></a> icone retour</p>
                </header>
                <div class="btn-group">
                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Trier par
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">nom</a>
                        <a class="dropdown-item" href="#">taille</a>
                        <a class="dropdown-item" href="#">type</a>
                        <a class="dropdown-item" href="#">date de création</a>
                    </div>
            </div>
            <div id="navigation">
                <!-- fil d'ariane ici  -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="#">Travail</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Nouveau dossier</li>
                    </ol>
                </nav>

            </div>
        </div>

        <div id="files">
            <!-- afficher les fichiers ici  -->

        </div>

        <div id="actionsBar">
            <!-- boutons d'action ici  -->

        </div>

    </div>







    <!-- scrips necessaires à bootstrap  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>