<?php
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str); // Outputs 4
?>

<br><br><button>
    <a href="php-regex.html">Back to PHP RegEx</a>
</button>
