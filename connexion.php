<!DOCTYPE html>
<html lang="fr">

<head>
        <!-- Basic -->
        <meta charset="utf-8">
        <title>Coupe du monde 2018 Russie</title>
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="SportsCup - Bootstrap 4 Theme for Sports">
        <meta name="author" content="iwthemes.com">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Theme CSS -->
        <link href="assets/css/main.css" rel="stylesheet" media="screen">

        <!-- Favicons -->
        <link rel="shortcut icon" href="img/icons/favicon.ico">
        <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">
    </head>

    <body>
        <?php
          include "includes/db.php";
          $login = $password = $error = "";

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ok = true;
            $login = $_POST['login'];
            $password = $_POST['password'];

            if ($ok) {
              // $passwd = sha1($passwd);
              $query = $bdd -> prepare("SELECT login,password FROM arbitre WHERE login=? AND password=?");
              $query -> execute(array($login,$password));
              if ($query -> rowCount() > 0) {
                session_start();
                $query = $bdd -> prepare("SELECT prenom_arbitre,nom_arbitre FROM arbitre WHERE login=? AND password=?");
                $query -> execute(array($login,$password));
                $resultat = $query -> fetch();
                $_SESSION['prenom'] = $resultat['prenom_arbitre'];
                $_SESSION['nom'] = $resultat['nom_arbitre'];
                $_SESSION['login'] = $login;
                header('Location: arbitre.php');
              }
              else {
                $error = "Login ou mot de passe incorrect ! Veuillez réessayer.";
              }
            }
          }
        ?>
        <!-- layout-->
        <div id="layout">
            <!-- Header-->
            <header>
                <!-- End headerbox-->
                <div class="headerbox">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <!-- Logo-->
                            <div class="col">
                               <div class="logo">
                                   <a href="index.php" title="Retourner à l'accueil">
                                        <img src="img/logo.png" alt="Logo" class="logo_img">
                                    </a>
                               </div>
                            </div>
                            <!-- End Logo-->
                        </div>
                    </div>
                </div>
                <!-- End headerbox-->
            </header>
            <!-- End Header-->

            <!-- mainmenu-->
            <nav class="mainmenu">
                <div class="container">
                    <!-- Menu-->
                    <ul class="sf-menu" id="menu">
                        <li class="current">
                            <a href="index.php">Accueil</a>
                        </li>

                        <li>
                            <a href="#">Coupe du Monde</a>
                            <div class="sf-mega">
                                <div class="row">
                                     <div class="col-md-3">
                                        <h5><i class="fa fa-trophy" aria-hidden="true"></i>Coupe du Monde</h5>
                                        <ul>
                                            <li><a href="table-point.html">Classement</a></li>
                                            <li><a href="groups.html">Groupes</a></li>
                                            <li><a href="connexion.php">Connectez-vous</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-3">
                                      <h5><i class="fa fa-users" aria-hidden="true"></i> Liste des equipes</h5>
                                      <div class="img-hover">
                                         <img src="img/blog/1.jpg" alt="" class="img-responsive">
                                         <div class="overlay"><a href="teams.html">+</a></div>
                                      </div>
                                    </div>

                                    <div class="col-md-3">
                                      <h5><i class="fa fa-futbol-o" aria-hidden="true"></i> Liste des joueurs</h5>
                                      <div class="img-hover">
                                         <img src="img/blog/2.jpg" alt="" class="img-responsive">
                                         <div class="overlay"><a href="players.html">+</a></div>
                                      </div>
                                    </div>

                                    <div class="col-md-3">
                                      <h5><i class="fa fa-gamepad" aria-hidden="true"></i> Resultats</h5>
                                      <div class="img-hover">
                                         <img src="img/blog/3.jpg" alt="" class="img-responsive">
                                         <div class="overlay"><a href="results.html">+</a></div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="current">
                            <a href="teams.html">Equipes</a>
                            <ul class="sub-current">
                                <li>
                                    <a href="teams.html">Liste des equipes</a>
                                </li>
                                <li>
                                    <a href="single-team.html">Infos Equipe</a>
                                </li>
                            </ul>
                        </li>

                        <li class="current">
                            <a href="players.html">Joueurs</a>
                            <ul class="sub-current">
                                <li>
                                    <a href="players.html">Liste des joueurs</a>
                                </li>
                                <li>
                                    <a href="single-player.html">Infos joueur</a>
                                </li>
                            </ul>
                        </li>
                        <li class="current">
                            <a href="results.html">Resultats</a>
                            <ul class="sub-current">
                                <li>
                                    <a href="results.html">Resultats</a>
                                </li>
                                <li>
                                    <a href="single-result.html">Infos match</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="table-point.html">Classement</a>
                        </li>

                        <li>
                            <a href="groups.html">Groupes</a>
                        </li>

                        <li>
                            <a href="connexion.php">Connectez-vous</a>
                        </li>
                    </ul>
                    <!-- End Menu-->
                </div>
            </nav>
            <!-- End mainmenu-->

            <!-- Mobile Nav-->
            <div id="mobile-nav">
                <!-- Menu-->
                <ul>
                    <li>
                        <a href="index.php">Accueil</a>
                    </li>

                    <li>
                        <a href="#">Coupe du Monde</a>
                        <ul>
                            <li>
                               <a href="#">Coupe du Monde</a>
                                <ul>
                                    <li><a href="table-point.html">Classement</a></li>
                                    <li><a href="groups.html">Groupes</a></li>
                                    <li><a href="connexion.php">Connectez-vous</a></li>
                                </ul>
                            </li>

                            <li><a href="teams.html">Liste des equipes</a></li>
                            <li><a href="players.html">Liste des joueurs</a></li>
                            <li><a href="results.html">Resultats</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="teams.html">Equipes</a>
                        <ul>
                            <li>
                                <a href="teams.html">Liste des equipes</a>
                            </li>
                            <li>
                                <a href="single-team.html">Infos Equipe</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="players.html">Joueurs</a>
                        <ul>
                            <li>
                                <a href="players.html">Liste des joueurs</a>
                            </li>
                            <li>
                                <a href="single-player.html">Infos joueur</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="results.html">Resultats</a>
                        <ul>
                            <li>
                                <a href="results.html">Resultats</a>
                            </li>
                            <li>
                                <a href="single-result.html">Infos match</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="table-point.html">Classement</a>
                    </li>

                    <li>
                        <a href="groups.html">Groupes</a>
                    </li>

                    <li>
                        <a href="connexion.php">Connectez-vous</a>
                    </li>
                </ul>
                <!-- End Menu-->
            </div>
            <!-- End Mobile Nav-->

            <!-- Section Area - Content Central -->
            <section id="login" class="bg-dark text-white">
              <div class="container text-center">
                <h2 class="mb-4" style="color: white">Connectez-vous !</h2>
                <form class="form-inline" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                  <label class="sr-only" for="login">Login</label>
                  <input type="text" class="form-control mb-2 mr-sm-2" name="login" placeholder="Entrez votre login">

                  <label class="sr-only" for="inlineFormInputGroupUsername2">Mot de passe</label>
                  <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">@</div>
                    </div>
                    <input type="password" class="form-control" name="password" placeholder="Entrez votre mot de passe">
                  </div>

                  <div class="form-check mb-2 mr-sm-2">
                    <label class="form-check-label" for="inlineFormCheck"><?php echo $error; ?></label>
                  </div>

                  <button type="submit" class="btn btn-primary mb-2">Valider</button>
                </form>
              </div>
            </section>
            <!-- End Section Area -  Content Central -->
        </div>
        <!-- End layout-->

        <!-- ======================= JQuery libs =========================== -->
        <!-- jQuery local-->
        <script type="text/javascript" src="assets/js/jquery.js"></script>
        <!-- popper.js-->
        <script type="text/javascript" src="assets/js/popper.min.js"></script>
        <!-- bootstrap.min.js-->
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- required-scripts.js-->
        <script type="text/javascript" src="assets/js/theme-scripts.js"></script>
        <!-- theme-main.js-->
        <script type="text/javascript" src="assets/js/theme-main.js"></script>
        <!-- ======================= End JQuery libs =========================== -->

    </body>

</html>
