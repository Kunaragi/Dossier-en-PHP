html>
  <header>
    <h1> Voici le deuxième exemple d'algorithme en PHP </h1>
  </header>
  <body>
    <h2>Question n°2</h2>
      <h3>The elephant with "for"</h3>
        <?php
          for($i=100;$i>=1;$i--){
            echo($i);
            echo("-");
        }
        ?>

      <h3>The elephant with "while"</h3>
      <?php
        $i=100;
          while($i>=1){
            echo($i);
            echo("-");
            $i=$i-1;
        }
        ?>
   </body>
</html>
