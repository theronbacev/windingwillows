<?php
require("database.php");

session_start();

$customer = "SELECT customerId FROM customers_t ORDER BY customerId DESC LIMIT 1;";
$results = mysqli_query($dbc, $customer);
$row = mysqli_fetch_assoc($results);

$query = "INSERT INTO orders_t (customerId, Pinot_Noir, Cabernet_Sauvignon, Riesling, Pinot_Grigio, 
    Zinfendel, Rose, OrderTotal) VALUES (?,?,?,?,?,?,?,?);";


$stmt = mysqli_prepare($dbc, $query);

mysqli_stmt_bind_param(
    $stmt,
    'ssssssss',
    $row['customerId'],
    $_SESSION['noir'],
    $_SESSION['cabernet'],
    $_SESSION['riesling'],
    $_SESSION['grigio'],
    $_SESSION['zinfendel'],
    $_SESSION['rose'],
    $_SESSION['total']
);

$result = mysqli_stmt_execute($stmt);

if ($result) {
    $cabernetSelect = "SELECT Quantity FROM inventory_t WHERE ProductID=1;";
    $cabernetUpdate = mysqli_query($dbc, $cabernetSelect);
    $row1 = mysqli_fetch_assoc($cabernetUpdate);
    $newcabernet = $row1['Quantity'] - $_SESSION['cabernet'];
    $cabernetQuery = "UPDATE inventory_t SET Quantity = ? WHERE ProductId = 1;";
    $stmt_cabernet = mysqli_prepare($dbc, $cabernetQuery);
    mysqli_stmt_bind_param(
        $stmt_cabernet,
        's',
        $newcabernet
    );
    $result1 = mysqli_stmt_execute($stmt_cabernet);

    $grigioSelect = "SELECT Quantity FROM inventory_t WHERE ProductID=2;";
    $grigioUpdate = mysqli_query($dbc, $grigioSelect);
    $row1 = mysqli_fetch_assoc($grigioUpdate);
    $newgrigio = $row1['Quantity'] - $_SESSION['grigio'];
    $grigioQuery = "UPDATE inventory_t SET Quantity = ? WHERE ProductId = 2;";
    $stmt_grigio = mysqli_prepare($dbc, $grigioQuery);
    mysqli_stmt_bind_param(
        $stmt_grigio,
        's',
        $newgrigio
    );
    $result2 = mysqli_stmt_execute($stmt_grigio);

    $noirSelect = "SELECT Quantity FROM inventory_t WHERE ProductID=3;";
    $noirUpdate = mysqli_query($dbc, $noirSelect);
    $row1 = mysqli_fetch_assoc($noirUpdate);
    $newnoir = $row1['Quantity'] - $_SESSION['noir'];
    $noirQuery = "UPDATE inventory_t SET Quantity = ? WHERE ProductId = 3;";
    $stmt_noir = mysqli_prepare($dbc, $noirQuery);
    mysqli_stmt_bind_param(
        $stmt_noir,
        's',
        $newnoir
    );
    $result3 = mysqli_stmt_execute($stmt_noir);

    $rieslingSelect = "SELECT Quantity FROM inventory_t WHERE ProductID=4;";
    $rieslingUpdate = mysqli_query($dbc, $rieslingSelect);
    $row1 = mysqli_fetch_assoc($rieslingUpdate);
    $newriesling = $row1['Quantity'] - $_SESSION['riesling'];
    $rieslingQuery = "UPDATE inventory_t SET Quantity = ? WHERE ProductId = 4;";
    $stmt_riesling = mysqli_prepare($dbc, $rieslingQuery);
    mysqli_stmt_bind_param(
        $stmt_riesling,
        's',
        $newriesling
    );
    $result4 = mysqli_stmt_execute($stmt_riesling);

    $roseSelect = "SELECT Quantity FROM inventory_t WHERE ProductID=5;";
    $roseUpdate = mysqli_query($dbc, $roseSelect);
    $row1 = mysqli_fetch_assoc($roseUpdate);
    $newrose = $row1['Quantity'] - $_SESSION['rose'];
    $roseQuery = "UPDATE inventory_t SET Quantity = ? WHERE ProductId = 5;";
    $stmt_rose = mysqli_prepare($dbc, $roseQuery);
    mysqli_stmt_bind_param(
        $stmt_rose,
        's',
        $newrose
    );
    $result5 = mysqli_stmt_execute($stmt_rose);

    $zinfendelSelect = "SELECT Quantity FROM inventory_t WHERE ProductID=6;";
    $zinfendelUpdate = mysqli_query($dbc, $zinfendelSelect);
    $row1 = mysqli_fetch_assoc($zinfendelUpdate);
    $newzinfendel = $row1['Quantity'] - $_SESSION['zinfendel'];
    $zinfendelQuery = "UPDATE inventory_t SET Quantity = ? WHERE ProductId = 6;";
    $stmt_zinfendel = mysqli_prepare($dbc, $zinfendelQuery);
    mysqli_stmt_bind_param(
        $stmt_zinfendel,
        's',
        $newzinfendel
    );
    $result6 = mysqli_stmt_execute($stmt_zinfendel);

    header("Location:confirmation.php");
    exit;
} else {
    echo "There was an error sending the data.  Please try again.";
}
