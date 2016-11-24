<html>
  <header>
    <h1> Voici un exemple d'algorithme en PHP </h1>
  </header>
  <body>
    <h2>Question n°1</h2>
      <h3>The elephant with "for"</h3>
        <?php
          for($i=1;$i<101;$i++){
            echo($i);
            echo("-");
        }
        ?>

      <h3>The elephant with "while"</h3>
      <?php
        $i=1;
          while($i<101){
            echo($i);
            echo("-");
            $i=$i+1;
        }
        ?>
   </body>
</html>
