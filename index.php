<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Infofelb</title>
        <link rel="stylesheet" href="css/estilo.css" type="text/css"/>
      
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <div id="container">
            <div id="header">
                <center><img src="img/logo.png"width=250"height="120"></center>
            </div>
            <div id="menu">
                <?php
                include 'menu.php';
                ?>
            </div>
            <div id="content">
                <div id="content-main">
                    <?php
                    $pg = $_GET["pg"];
                    if (!empty($pg)) {
                        include $pg . '.php';
                    } else {
                        include 'home.php';
                    }
                    ?>
                </div>

                <br>

                <center><div id="footer"> 
                        <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
                            <i class="fa fa-facebook-official w3-hover-text-indigo"></i>
                            <i class="fa fa-instagram w3-hover-text-purple"></i>
                            <i class="fa fa-snapchat w3-hover-text-yellow"></i>
                            <i class="fa fa-pinterest-p w3-hover-text-red"></i>
                            <i class="fa fa-twitter w3-hover-text-light-blue"></i>
                            <i class="fa fa-linkedin w3-hover-text-indigo"></i>
                            <br>
                            <span>
                                Todos os direitos reservados - &copy; - 2016.
                            </span>
                        </footer>
                    </div></center>
            </div>
    </body>
</html>
