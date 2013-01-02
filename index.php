<?php
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Flavrl - Homepage</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
        <link href="css/styles.css" rel="stylesheet"/>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
    </head>
    <body>
        <div class="navbar">
          <div class="navbar-inner">
            <a class="brand">Flavrl</a>
                <div class="nav-collapse">
                    <ul class="nav" role="navigation">
                        <li class="dropdown">
                          <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-th icon-white"></i>
                            <b class="caret"></b>
                          </a>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                            <li><a tabindex="-1" href=""><img src="img/reddit-favcon.jpg"/> Reddit</a></li>
                            <li><a tabindex="-1" href=""><img src="img/reddit-favcon.jpg"/> Twitch</a></li>
                            <li><a tabindex="-1" href=""><img src="img/reddit-favcon.jpg"/> Weather</a></li>
                          </ul>
                        </li>
                    </ul>
                    <ul class="nav pull-right">
                        <li>
                            <div class="btn-group pull-right">
                              <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="icon-user"></i>
                                Dylan
                                <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu force-arrow">
                                <li><a href="">Settings</a></li>
                              </ul>
                            </div>
                        </li>
                    </ul>
                </div>
          </div>
        </div>
    </body>
</html>