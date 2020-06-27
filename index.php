
<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>PHP Test</title>
  <link rel="stylesheet" href="./style.css">
 </head>
 <body>
          <nav>
              <ul class="menu">
                <li><a href="./index.php">Simple PHP codes</a></li>
                <li><a href="#">Odkaz 2</a></li>
                <li><a href="./settings.htm">Nastavenie stránok</a></li>
              </ul>

           
              
            </nav>
     <div class="header">
       <h3>Introduction to PHP scripting</h3>
     </div>

     <div class="articlearea">
        <?php echo '<p> Hello World! </p>'; ?> 
        <?php $c1= 10;
            $c2 = 15;
                echo '<p> Addition of number ';
                echo $c1;
                echo ' and ';
                echo $c2;
                echo ' is ';
                echo ($c1 + $c2) ;
                echo '</p>'; ?> 
      </div>   
      
      <footer>
              <p>Pätička dokumentu</p>
              <div class="row">
                <div class="column">
                    <h4>Column 1</h4>
                    <p>
                        Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. 
                        Donec rutrum congue leo eget malesuada. Nulla porttitor accumsan tincidunt.</p>
                </div>
                <div class="column">
                    <h4>Column 2</h4>
                    <p>
                        Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. 
                        Donec rutrum congue leo eget malesuada. Nulla porttitor accumsan tincidunt.</p>
                </div>
                <div class="column">
                    <h4>Column 3</h4>
                    <p>
                        Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. 
                        Donec rutrum congue leo eget malesuada. Nulla porttitor accumsan tincidunt.</p>
                </div>
              </div>

        </footer> 
 </body>
</html>