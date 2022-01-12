<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bloggo • Connexion</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custom.css" rel="stylesheet" />
        <style>
            body {
                background-color: var(--bs-primary);
            }
            
            #form {
                background-color: white;
            }
        </style>
    </head>

    <body class="page-top">
        <div class="container">
            <div class="row">
                <div id="form" class="col-10 col-md-6 mx-auto">
                    <!-- Login card-->
                    <h1>Se connecter</h1>
                    <form action="login" method="post">
                        <input type="text" class="form-control" id="name" placeholder="Nom d'utilisateur">
                        <input type="password" class="form-control" id="pwd" placeholder="Mot de passe">
                        
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Se souvenir de moi</label>
                        </div>
                        
                        <input type="submit" class="form-control btn btn-primary" value="Connexion">
                    </form>
                    <p class="text-muted">Pas encore inscrit ? <a href="#">Rejoignez-nous.</a></p>
                </div>
            </div>
        </div>
    </body>
</html>