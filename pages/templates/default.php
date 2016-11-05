<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SECURE_ZONE</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    
  </head>

  <body>

  <header>

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">

            <a class="navbar-brand" href="index.php">
              <p>secure_ZONE</p>
            </a>

            <?php if( isset($_SESSION["user"]) ): ?>

            <form class="navbar-form" action="index.php" method="post">

              <button action="index.php" method="post" class="btn btn-default navbar-btn" type="submit" name="deconnexion">Déconnexion</button>                          

            </form>
        
            <?php else : ?>

            <form class="navbar-form" action="index.php" method="post">
  
              <a href="?page=login"><button type="button" class="btn btn-default navbar-btn">LogIN</button></a>

            </form>

            <?php endif; ?>

        </div>
      </div>
    </nav>
  </header>

    <?php

                if ( isset ($_POST["deconnexion"]) ) 
                {
                  unset($_SESSION["user"]);
                  unset($_SESSION["pseudo"]);
                  echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
                }

    ?>     

    <div>

       <?= $content ?>

    </div>

    <!-- Bootstrap -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- End Bootstrap -->

  </body>
</html>