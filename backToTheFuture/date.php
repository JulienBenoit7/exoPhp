<?php

$timezone = 'Europe/Paris';
$presentTime = new DateTime('now', new DateTimeZone($timezone));
$destinationTime = new DateTime('2015-10-21 04:29:00');

$presentTimeString = $presentTime->format('m-d-Y h:i A');
$destinationTimeString = $destinationTime->format('m-d-Y h:i A');

$interval = $presentTime->diff($destinationTime);

$years = $interval->y;
$months = $interval->m;
$days = $interval->d;
$hours = $interval->h;
$minutes = $interval->i;

$totalMinutes = $interval->y * 365 * 24 * 60;
$totalMinutes += $interval->m * 12 * 24 * 60;
$totalMinutes += $interval->d * 24 * 60;
$totalMinutes += $interval->h * 60;
$totalMinutes += $interval->i;

$gas = round($totalMinutes / 10000, 2);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Back to the future</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="dashboard">
            <h1>Back to the Future</h1>
            <div class="time">
                <p>
                    <span class="label green-label">Present Time</span>:
                    <span><?= $presentTimeString ?></span>
                </p>
                <p>
                    <span class="label red-label">Destination Time</span>:
                    <span><?= $destinationTimeString ?></span>
                </p>
                <p>
                    <span class="label">Difference</span>:
                    <span>
                        <?= $years ?>
                        years,
                        <?= $months ?>
                        months,
                        <?= $days ?>
                        days,
                        <?= $hours ?>
                        hours,
                        <?= $minutes ?>
                        minutes
                    </span>
                </p>
                <p>
                    <span class="label">Gas needed</span>:
                    <span><?= $gas ?></span>
                </p>
            </div>
        </div>
    </body>
</html>

