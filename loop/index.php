<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>迴圈t</title>
</head>

<body>
    <h2>使用for迴圈產生以下的數列</h2>

    <ul>
        <li>1,3,5,7,9……n</li>
        <li>10,20,30,40,50,60……n</li>
        <li> 3,5,7,11,13,17……97</li>
    </ul>
    <?php
    $n = 30;
    for ($i = 1; $i <= 9; $i = $i + 2) {
        echo $i . ",";
    }
    echo "<br>";
    ?>

    <?php
    $n = 100;
    for ($i = 10; $i <= $n; $i = $i + 10) {
        echo  $i . ",";
    }
    echo "<br>";
    ?>

    <?php
    //質數程式碼回家做
    ?>

    <table border=1>
        <?php
        for ($i = 1; $i < 10; $i++) {
            echo "<tr>";
            for ($j = 1; $j < 10; $j++) {
                echo "<td>" . $j . "*" .  $i . "=" . ($i * $j) . "</td>";
            }
        }
        ?>
    </table>
</body>

</html>