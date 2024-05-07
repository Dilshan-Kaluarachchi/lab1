<?php

function filterInvalidShows(array $shows): array {
    foreach ($shows as $showName => $showDates) {
        // Check if the key or value is null or an empty string
        if (is_null($showName) || $showName === '' || is_null($showDates) || $showDates === '') {
            unset($shows[$showName]);
        }
    }
    return $shows;
}


function displayShowInfo(array $shows): void {
    echo "<h1>Shows</h1>";
    foreach ($shows as $showName => $showDates) {
        echo "<p>$showName: $showDates</p>";
    }
}

// An associative array of show names and associated dates when the shows aired
$shows = [
    'Seinfeld' => 'July 5th, 1989 - May 14th, 1998',
    'Curb Your Enthusiasm' => 'October 15th, 2000 - Current',
    'The Simpsons' => 'December 17, 1989 - Current',
    'Invalid data1' => '',
    'Invalid data2' => null,
    null => 'December 17, 1999 - Current',
    '' => 'December 30, 1999 - Current',
];

$validShows = filterInvalidShows($shows); // Filtering the shows
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1, Part 1</title>
</head>

<body>
    <?php
    // Display the filtered show information
    displayShowInfo($validShows);
    ?>
</body>

</html>
