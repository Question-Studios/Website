<?php 
    if (!isset($_GET['selected']))
        $_GET['selected'] = "home";
?>
        <!-- Header -->     
        <nav class="navbar navbar-inverse navbar-static-top">
            <div style="background-color: #333;">
                    <img src="http://<?php echo $_SERVER['SERVER_NAME'] . "/questionstudios"?>/logo.png" style="width: 240; height: 120;"/>
            </div>
          <div class="container-fluid">
            <ul class="nav navbar-nav">
              <li><a href="http://<?php echo $_SERVER['SERVER_NAME'] . "/questionstudios";?>">Home</a></li>
              <li><a href="http://<?php echo $_SERVER['SERVER_NAME'] . "/questionstudios";?>/forums">Forums</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="http://<?php echo $_SERVER['SERVER_NAME'] . "/questionstudios";?>/store">Store
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="http://<?php echo $_SERVER['SERVER_NAME'] . "/questionstudios";?>/store/games">Games</a></li>
                  <li><a href="http://<?php echo $_SERVER['SERVER_NAME'] . "/questionstudios";?>/store/merchandise">Merchandise</a></li>
                </ul>
              </li>
              <li><a href="http://<?php echo $_SERVER['SERVER_NAME'] . "/questionstudios";?>/news">News</a></li>
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
              <li><a href="http://<?php echo $_SERVER['SERVER_NAME'] . "/questionstudios";?>/login/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="http://<?php echo $_SERVER['SERVER_NAME'] . "/questionstudios";?>/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
          </div>
        </nav>