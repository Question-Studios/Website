<?php
    
?>

<html>
    <head>
        <?php include_once("Standardized/Linker.php");?>
    </head>

    <body>
        <?php include_once("Standardized/Header.php");?>
        
        <div id="preview" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#preview" data-slide-to="0" class="active"></li>
          </ol>
          
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
                <img class="margin: auto;" src="Assets/Images/eurpoeanfront_preview_01.png" alt="Eurpoean Front"/>
                <div class="carousel-caption">
                  <h3>Eurpoean Front</h3>
                  <p>Mass UPDATE!</p>
                </div>
            </div>
          </div>
        
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#preview" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#preview" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        
        <?php include_once("Standardized/Footer.php");?>
    </body>
</html>