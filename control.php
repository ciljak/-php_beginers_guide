
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
        <span class="headline"> 1. Ternary operator.</span>
             <br> <br> 
              Syntax of ternary operator looks like: <span class="blue"> condition </span> ? <span class="green">command_1_true </span> : <span class="red">command_2_false </span> .
        </p>      
             <pre class="pre"> Solution: 
                Examle for ternary operator ussage will follow
                $value = 38.6 ;
                  
                 
                  echo "< p>" . ($value > 37) ? "Temperature above normal!" : "Normal body temperature.". "< /p>";
                
                    </pre>
        
            <?php 
                  $value = 38.6 ;
                  
                  echo "<p>";
                  echo "<p>" . ($value > 37) ? "Temperature above normal!" : "Normal body temperature.". "</p>";   
                  echo "</p>" ; ?>   
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