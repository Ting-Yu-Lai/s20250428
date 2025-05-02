<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>迴圈</title>
</head>

<style>
    #table99 {
        border-collapse: collapse;
        margin: 20px;
        box-shadow:
        -3px -3px 6px rgba(255, 0, 0, 0.2),
         3px  3px 6px rgba(255, 0, 0, 0.6); 
    }
    #table99 td {
        padding:4px 8px;
        border:1px solid black;
        text-align: center;
        width: 10px;
        text-shadow:1px 1px 2px lightgray;
    }

    #table99 tr:nth-child(1),
    td:nth-child(1){
        background-color:#999;
        color:white;
    }

    #table99 td:hover {
        background-color:brown;
    }

</style>
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
    $tmp = 0;
    for ($i=2;$i<=100;$i++) {
        $isprime = true;
        for($j=2;$j<=7;$j++){
            if ($i % $j == 0) {
                $isprime = false;
                break;
            }
        }
        if ($isprime){
            echo $i . "是質數,";
        }
    }
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
    <h2>九九乘法表</h2>
    <table id='table99'>
        <tr>
            <td></td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
        </tr>
        <?php
            for ($i=1; $i<10; $i++) {

                echo "<tr>";
                    echo "<td>$i</td>" ;

                for($j=1; $j<10; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";
                }

                echo "</tr>";
            }
        ?>
    </table>
    <h2>斜角九九乘法表</h2>
    <table id='table99'>
        <tr>
            <td></td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
        </tr>
        <?php
            for ($i=1; $i<10; $i++) {
                echo "<tr>";
                    echo "<td>$i</td>" ;
                for($j=1; $j<10; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";
                }

                echo "</tr>";
            }
        ?>
    </table>
</body>


</html>