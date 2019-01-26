<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sort functions</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<header>

</header>
<main>
    <?php

    for ($p = 0; $p < 100; $p++) {
        $unsortedArr[$p] = mt_rand(-100, 100);   // random unsorted input array
    }
    echo 'unsorted input array:', '</br>';
    foreach ($unsortedArr as $k => $v) {
        echo '[', $k, ']', '=', $v, ';', '&nbsp &nbsp';
        ?>
    <?php }                                     //close symbol '}' of foreach function
    ?>

    <?php
    function insertionSort($unsortedArr)
    {
        $startTime = microtime(true);
        $array = $unsortedArr;
        $n = count($array);
                                       //first cycle
        for ($i = 1; $i < $n; $i++) {                // start with second element $array[1] and go to the right
            $val = $array[$i];                   // memorize value of current element  $array[$i]
            $k = $i;                             // $k - index for second cycle
                                       //second cycle
            while (($k > 0) && ($array[$k - 1] > $val)) {  // comparison current element with left-hand element.
                $array[$k] = $array[$k - 1];          // If true, copy left-hand element and paste to the current position
                $k = $k - 1;                          // go to the left and repeat check
            }                                          // If false, stop search and write memorized value
            $array[$k] = $val;                         // to the new (correct) position
        }                                           // after that go to the next element $array[$i], and repeat.
        echo "Time:  " . (number_format((microtime(true) - $startTime), 8) * 1000) . " ms\n", '</br>';
        return $array;
    }

    function bubbleSort($unsortedArr)
    {
        $startTime = microtime(true);
        $array = $unsortedArr;
        $flag = true;
        $n = count($array);
        while ($flag) {
            $flag = false;
            for ($i = 1; $i < $n; $i++) {
                $a = $array[$i - 1];
                $b = $array[$i];
                if ($a > $b) {
                    $array[$i - 1] = $b;
                    $array[$i] = $a;
                    $flag = $flag + 1;
                }
            }
        }
        echo "Time:  " . (number_format((microtime(true) - $startTime), 8) * 1000) . " ms\n", '</br>';
        return $array;
    }

    echo '</br>', '</br>';
    echo 'sorted array (insertionSort):', '</br>';
    foreach (insertionSort($unsortedArr) as $k => $v) {
        echo '[', $k, ']', '=', $v, ';', '&nbsp &nbsp &nbsp';
    }

    echo '</br>', '</br>';
    echo 'sorted array (bubbleSort):', '</br>';
    foreach (bubbleSort($unsortedArr) as $k => $v) {
        echo '[', $k, ']', '=', $v, ';', '&nbsp &nbsp &nbsp';
    }

    ?>

</main>

<footer>

</footer>

<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>