<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Explorer</title>
    <link rel="icon" type="img/png" href="img/favicon-explorer.png"/>
    <!-- lien Bootstrap CDN  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- lien font -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;500&display=swap" rel="stylesheet">
    <!-- lien style.css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div id="top">
            <dix id="topBar">
                <!-- logo et liste de tri ici  -->
                <header>
                    <h1>File explorer</h1>
                </header>

            <div id="navigation">
                <!-- fil d'ariane ici  -->
                <nav aria-label="breadcrumb">
                    <ol id="aria" class="breadcrumb">
                        <!-- elements aria crées ici  -->
                    </ol>
                </nav>
                <div class="btn-group">
                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sort by
                        <span class="fas fa-sort"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="sortItem dropdown-item" href="#">name</a>
                        <a class="sortItem dropdown-item" href="#">size</a>
                        <a class="sortItem dropdown-item" href="#">type</a>
                        <a class="sortItem dropdown-item" href="#">date</a>
                    </div>
                </div>

            </div>
        </div>

        <div id="files">
            <!-- afficher les fichiers ici  -->
        </div>

        <div id="actionsBar">
            <!-- boutons d'action ici  -->
            <div class="flex between">
                <div class="flex column"><button type="button" class="btn btn-outline-secondary"><span class="far fa-edit"></span></button><p>Edit</p></div> 
                <div id="btn-cut" class="flex column"><button type="button" class="btn btn-outline-secondary"><span class="fas fa-cut"></span></button><p>Cut</p></div>
                <div id ="btn-copy" class="flex column"><button type="button" class="btn btn-outline-secondary"><span class="far fa-copy"></span></button><p>Copy</p></div>
                <div id ="btn-paste" class="flex column"><button type="button" class="btn btn-outline-secondary"><span class="fas fa-paste"></span></span></button><p>Paste</p></div>
                <div id="btn-delete" class="flex column"><button type="button" class="btn btn-outline-secondary"><span class="fas fa-minus-circle"></span></button><p>Delete</p></div>
            </div>
            <div class="flex between">
                <div id="btn-hidden" class="flex column"><button type="button" class="btn btn-outline-secondary"><span class="far fa-eye"></span></button><p>Eyes</p></div>
                <div class="flex column"><button type="button" class="btn btn-outline-secondary"><span class="far fa-trash-alt"></span></button><p>Trash</p></div>
                <div class="flex column"><button type="button" class="btn btn-outline-secondary"><span class="fas fa-trash-restore"></span></button><p>Restore</p></div>
                <div class="flex column"><button type="button" class="btn btn-outline-secondary"><span class="fas fa-upload"></span></button><p>Upload</p></div>
            </div>
        </div>

    </div>






    <!-- script Ajax______________________________________________________________________ -->
    <script src="scripts/ajax.js"></script>
    <!-- script Font Awesome______________________________________________________________________ -->
    <script src="https://kit.fontawesome.com/d5dcbc8efb.js" crossorigin="anonymous"></script>
    <!-- scripts necessaires à bootstrap  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>