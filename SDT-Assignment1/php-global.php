<?php
$x = 75;
$y = 25;

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
?>

<br><br><button>
    <a href="php-superglobals.html">Back to PHP superglobals</a>
</button>
