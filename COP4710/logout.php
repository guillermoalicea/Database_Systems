<?php

  require_once 'header.php';

  if (isset($_SESSION['user']))
  {
    destroySession();
    header('Location: index.php?l=true');
  }
  else echo "<div class='main'><br>" .
            "You cannot log out because you are not logged in";
?>

    <br><br></div>
  </body>
</html>
