
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
                <li><a href="./control.php">Control structures</a></li>
                <li><a href="./settings.htm">Nastavenie stránok</a></li>
              </ul>

           
              
            </nav>
     <div class="header">
       <h3>Introduction to PHP scripting</h3>
     </div>

     <div class="articlearea">

         <p class="introduction">
           <span class="headline"> 1. Example of outputing text string or part of HTML code.</span>
             <br> <br> <?php echo htmlentities("Solution: <?php echo '<p>Output: Hello World! </p>'; ?> "); ?>
        </p>
            <?php echo '<p>Output: Hello World! </p>'; ?> 
        <p class="introduction">
        <span class="headline"> 2. Assignment a value into a variable.</span>
             <br> <br> 
              Two numbers are asiggned to a vriable c1 and c2. Then are outputed with echo command.
        </p>      
             <pre class="pre"> Solution:  
                    $c1= 10;
                    $c2 = 15;
                    echo '< p>Output: Addition of number ';
                    echo $c1;
                    echo ' and ';
                    echo $c2;
                    echo ' is ';
                    echo ($c1 + $c2) ;
                    echo '< /p>'; ?>   ");  </pre>
        
            <?php $c1= 10;
                $c2 = 15;
                    echo '<p>Output: Addition of number ';
                    echo $c1;
                    echo ' and ';
                    echo $c2;
                    echo ' is ';
                    echo ($c1 + $c2) ;
                    echo '</p>'; ?>
                    
        <p class="introduction">
           <span class="headline"> 3. Different types of variable types.</span>
             <br> <br>
             There is no need for type declaration in php. But function for detection of "type"
             into a variable are avialable. Next part shows assignment of different types of variables
             and how automatticaly was type recognized.
          </p> 
             <pre class="pre"> Solution:  
                    $variable1= 10;
                    $variable2= false;
                    $variable3= "Simple sentence";

                    echo '< p>' ;
                        echo '< br>' ;
                        echo $variable1 ;
                        echo '< br>' ;
                        echo gettype($variable1), "\n";
                        echo '< br>< br>' ;
                        echo $variable2 ;
                        echo '< br>' ;
                        echo gettype($variable2), "\n";
                        echo '< br>< br>' ;
                        echo $variable3 ;
                        echo '< br>' ;
                        echo gettype($variable3), "\n";
                    echo '< /p>' ;
                     </pre>
        
            <?php   $variable1= 10;
                    $variable2= false;
                    $variable3= "Simple sentence";

                    echo '<p>' ;
                    echo 'Output: Variables and handling with them ';
                   
                        echo '<br>' ;
                        echo $variable1 ;
                        echo '<br>' ;
                        echo gettype($variable1), "\n";
                        echo '<br><br>' ;
                        echo $variable2 ;
                        echo '<br>' ;
                        echo gettype($variable2), "\n";
                        echo '<br><br>' ;
                        echo $variable3 ;
                        echo '<br>' ;
                        echo gettype($variable3), "\n";
                    echo '</p>' ;

                   
                  ?>  

        <p class="introduction">
        <span class="headline"> 4. Concatenating of string.</span>
             <br> <br> 
              Output string is created after concatenation of separate parts with . symbol.
        </p>      
             <pre class="pre"> Solution:  
                $substring1 = "First part";
                $substring2 = " of sentence";
                echo "< p>" . $substring1 . $substring2 . "< /p>";
                    </pre>
        
            <?php 
                $substring1 = "First part";
                $substring2 = " of sentence";
                echo "<p>" . $substring1 . $substring2 . "</p>"; ?>       
      </div>  

       <p class="introduction">
        <span class="headline"> 5. Arrays in PHP.</span>
             <br> <br> 
              Next example shows usage of two-dimensional arrays in PHP.
        </p>      
             <pre class="pre"> Solution: 
                Basic syntax for 2D array is
                $my_array [0][0]= "Date of birth " ;
                $my_array [0][1]= "9.9.1999" ;
                $my_array [1][0]= "Date of birth " ;
                $my_array [1][1]= "1.1.2011" ;
                
                echo "< p>" . $my_array [0][0]. $my_array [0][1]. "< /p>";
                echo "< p>" . $my_array [1][0]. $my_array [1][1] ."< /p>";
                    </pre>
        
            <?php 
                 $my_array [0][0]= "Date of birth " ;
                 $my_array [0][1]= "9.9.1999" ;
                 $my_array [1][0]= "Date of birth " ;
                 $my_array [1][1]= "1.1.2011" ;
                 
                 echo "<p>" . $my_array [0][0]. $my_array [0][1]. "</p>";
                 echo "<p>" . $my_array [1][0]. $my_array [1][1] ."</p>"; ?>       
      </div>    
      
      <p class="introduction">
        <span class="headline"> 6. Asociative arays in PHP.</span>
             <br> <br> 
              Asociative array is relative new construct in programing language.
              These types of array can use string as their index. These approach make work
              with separate parts of array mouch more simple.
        </p>      
             <pre class="pre"> Solution: 
                Basic syntax for asociative array is
                $my_array ["name"]= "John " ;
                $my_array ["age"]= 25 ;
               
                echo "< p>" . $my_array ["name"]. $my_array ["age"]. "< /p>";
                
                    </pre>
        
            <?php 
                  $my_array ["name"]= "John " ;
                  $my_array ["age"]= 25 ;
                 
                  echo "<p>" . $my_array ["name"]. $my_array ["age"]. "</p>"; ?>       
      </div>    
      <footer>
              <p>Short introduction to PHP</p>
              <div class="row">
                <div class="column">
                    <h4>About project</h4>
                    <p>
                        In this tutorial are introduced basic language constructs of PHP.
                        In simple and readlbe steps are introduced variables and mechanism for handling them,
                        language structures and program flow controll commands.</p>
                </div>
                <div class="column">
                    <h4>HTML+CSS+PHP</h4>
                    <p>
                       These pages use HTML5 as markoup language, external stylling with CSS and server 
                       side scripting with PHP.</p>
                </div>
                <div class="column">
                    <h4>Usefull links</h4>
                    
                    <ul class="links">
                      <li><a href="https://www.php.net"> PHP homepage </a></li>
                      <li><a href="https://www.w3schools.com/"> w3school </a></li>
                      <li><a href="https://www.cdesigner.eu"> my homepage CDesigner.eu</a></li>
                      <li><a href="https://htmlcheatsheet.com/"> usefull cheatsheet</a></li>
                   </ul>
                   
                </div>
              </div>

        </footer> 
 </body>
</html>