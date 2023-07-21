<?php

function getCheckUps ($connect) {
    $checkups = mysqli_query($connect, "SELECT * FROM `checkups`");
    $checkupsList = [];
    while ($checkup = mysqli_fetch_assoc($checkups)) {
        $checkupsList[] = $checkup;
    }
    echo( json_encode($checkupsList));
}
function getCheckUpsCount ($connect) {
    $checkups = mysqli_query($connect, "SELECT * FROM `checkups`");
    $checkupsList = [];
    while ($checkup =  mysqli_fetch_assoc($checkups)) {
        $checkupsList[] = $checkup;
    }
    echo(count($checkupsList));
}

