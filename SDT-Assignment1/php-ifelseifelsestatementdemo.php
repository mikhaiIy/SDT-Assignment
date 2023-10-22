<?php
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>

<br><br><button>
    <a href="php-ifstatement.html">Back to PHP if...else...elseif Statements</a>
</button>

