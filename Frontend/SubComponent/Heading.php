<?php
include '../Datas/HeadingData.php';
$classin = "H-classin";
$container = "H-container";
echo "<div class=" . $container . ">";
foreach ($ClassArray as $array) {
    echo "<a href=" . $array["addr"] . " class=" . $classin . ">" . $array["standard"] . "</a>";
}
echo "</div";
