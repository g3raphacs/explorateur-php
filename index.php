<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Explorer</title>
    <!-- lien Bootstrap CDN  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- lien style.css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div id="top">
            <dix id="topBar">
                <!-- logo et liste de tri ici  -->
                <header>
                    <h1>Explorateur de fichiers</h1>
                    <p><a href="#"><span class="fas fa-arrow-circle-left"></span></a></p>
                </header>
                <div class="btn-group">
                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    trier par
                    <span class="fas fa-sort"></span>
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
                        <li class="breadcrumb-item"><a><span class="fas fa-home"></span></a></li>
                        <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="#">Travail</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Nouveau dossier</li>
                    </ol>
                </nav>

            </div>
        </div>

        <div id="files">
            <!-- afficher les fichiers ici  -->
            <div class="fileblock">
                <a href="#">
                    <div><span class="icon fas fa-folder"></span></div>
                    <p>nom_de_fichier.txt</p>
                </a>
            </div>
            <div class="fileblock">
                <a href="#">
                    <div><span class="icon fas fa-folder"></span></div>
                    <p>nom_de_fichier.txt</p>
                </a>
            </div>
            <div class="fileblock">
                <a href="#">
                    <div><span class="icon fas fa-folder"></span></div>
                    <p>nom_de_fichier.txt</p>
                </a>
            </div>
            <div class="fileblock">
                <a href="#">
                    <div><span class="icon fas fa-file-alt"></span></div>
                    <p>nom_de_fichier.txt</p>
                </a>
            </div>


        </div>

        <div id="actionsBar">
            <!-- boutons d'action ici  -->
            <div class="flex between">
                <div class="flex column"><button type="button" class="btn btn-outline-secondary"><span class="far fa-edit"></span></button><p>Modifier</p></div> 
                <div class="flex column"><button type="button" class="btn btn-outline-secondary"><span class="fas fa-cut"></span></button><p>Couper</p></div>
                <div class="flex column"><button type="button" class="btn btn-outline-secondary"><span class="far fa-copy"></span></button><p>Copier</p></div>
                <div class="flex column"><button type="button" class="btn btn-outline-secondary"><span class="fas fa-paste"></span></span></button><p>Coller</p></div>
                <div class="flex column"><button type="button" class="btn btn-outline-secondary"><span class="fas fa-minus-circle"></span></button><p>Supprimer</p></div>
            </div>
            <div class="flex between">
                <div class="flex column"><button type="button" class="btn btn-outline-secondary"><span class="far fa-eye"></span></button><p>Afficher</p></div>
                <div class="flex column"><button type="button" class="btn btn-outline-secondary"><span class="far fa-eye-slash"></span></button><p>Masquer</p></div>
                <div class="flex column"><button type="button" class="btn btn-outline-secondary"><span class="far fa-trash-alt"></span></button><p>Corbeille</p></div>
                <div class="flex column"><button type="button" class="btn btn-outline-secondary"><span class="fas fa-trash-restore"></span></button><p>Restaurer</p></div>
                <div class="flex column"><button type="button" class="btn btn-outline-secondary"><span class="fas fa-upload"></span></button><p>Mise à jour</p></div>
            </div>
            






        </div>

    </div>






    <!-- script Font Awesome______________________________________________________________________ -->
    <script src="https://kit.fontawesome.com/d5dcbc8efb.js" crossorigin="anonymous"></script>
    <!-- scripts necessaires à bootstrap  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>