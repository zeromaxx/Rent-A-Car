<?php

$age = $_POST['age'];
$cubic = $_POST['cubic'];
$day = $_POST['day'];
$totalcost = 0;

function CalcInsurance($_cubic, $_age)
{
    $insurance = 0;
    $age = $_age;
    $cubic = $_cubic;

    if ($age >= 18 && $age < 22) {
        $insurance = $age * 0.00042 * $cubic;
    }
    if ($age >= 22 && $age < 30) {
        $insurance = $age * 0.00036 * $cubic;
    }
    if ($age >= 30) {
        $insurance = $age * 0.00023 * $cubic;
    }

    return $insurance;
}

function calcRent($_cubic, $_day)
{
    $rent = 0;
    $cubic = $_cubic;
    $day = $_day;

    if ($day <= 5 && $cubic < 1600) {
        $rent = $day * 15.42;
    }

    if ($day <= 5 && $cubic > 1600 && $cubic <= 2000) {
        $rent = $day * 16.82;
    }

    if ($day <= 5 && $cubic > 2000) {
        $rent = $day * 18.22;
    }

    if ($day >= 6 && $day <= 10 && $cubic < 1600) {
        $rent = $day * 14.62;
    }

    if ($day >= 6 && $day <= 10 && $cubic > 1600 && $cubic <= 2000) {
        $rent = $day * 15.76;
    }

    if ($day >= 6 && $day <= 10 && $cubic > 2000) {
        $rent = $day * 17.1;
    }

    if ($day > 10 && $cubic < 1600) {
        $rent = $day * 13.15;
    }

    if ($day > 10 && $cubic > 1600 && $cubic <= 2000) {
        $rent = $day * 14.8;
    }

    if ($day > 10 && $cubic > 2000) {
        $rent = $day * 16.2;
    }


    return
        $rent;
}

function totalcost($_age, $_cubic, $_day)
{
    $age = $_age;
    $cubic = $_cubic;
    $day = $_day;

    return calcRent($cubic, $day) + calcInsurance($cubic, $age);
}
