<?php
session_start();
echo "You want this much pinot noir: " . $_SESSION['noir'];
echo "<br><h1>You ordered this many noir: " . $_SESSION['noir'] . "</h1>";
echo "<br><br>";

echo "You want this much Riesling: " . $_SESSION['riesling'];
echo "<br><h1>You ordered this many riesling: " . $_SESSION['riesling'] . "</h1>";
echo "<br><br>";

echo "You want this much zinfendel: " . $_SESSION['zinfendel'];
echo "<br><h1>You ordered this many zinfendel: " . $_SESSION['zinfendel'] . "</h1>";
echo "<br><br>";

echo "You want this much cabernet: " . $_SESSION['cabernet'];
echo "<br><h1>You ordered this many cabernet: " . $_SESSION['cabernet'] . "</h1>";
echo "<br><br>";

echo "You want this much pinot grigio: " . $_SESSION['grigio'];
echo "<br><h1>You ordered this many pinot grigio: " . $_SESSION['grigio'] . "</h1>";
echo "<br><br>";

echo "You want this much Rose: " . $_SESSION['rose'];
echo "<br><h1>You ordered this many rose: " . $_SESSION['rose'] . "</h1>";
?>