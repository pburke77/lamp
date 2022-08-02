<?php
$total = 0;
$random = [];

if (isset($_POST['submit'])) {

    for ($i = 0; $i < $_POST['amount']; $i++) {
        $rand = rand($i, $_POST['sides']);
        array_push($random, $rand);
        $total += $rand;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Number Generator</title>

    <style>
        form {
            margin: 1rem 0;
        }

        button {
            margin-top: 1rem;
            cursor: pointer;
            padding: 5px;
            border-radius: 6px;
            background-color: teal;
        }
    </style>
</head>

<body>
    <h1>Random Number Generator</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Select No of Dice to Roll: </td>
                <td>
                    <input type="number" name="amount" required>
                </td>
            </tr>

            <tr>
                <td>Type Of Dice: </td>
                <td>
                    <select name="sides" id="sides">
                        <option value="4">d4</option>
                        <option value="6" selected>d6</option>
                        <option value="8">d8</option>
                        <option value="10">d10</option>
                        <option value="12">d12</option>
                        <option value="20">d20</option>
                    </select>
                </td>
            </tr>


        </table>

        <button name="submit">Good Luck</button>
    </form>


    <table style="border-spacing: 1rem;">
        <?php $num = 0; ?>
        <?php foreach ($random as $ran) : $num++ ?>
            <tr>
                <td>
                    Value <?= $num ?> :
                </td>
                <td id="push">
                    <b><?= $ran ?></b>
                </td>
            </tr>
        <?php endforeach; ?>


        <tr>
            <td>Total: </td>
            <td><b><?= $total ?></b></td>
        </tr>
    </table>


</body>

</html>