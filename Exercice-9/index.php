<?php
$taches=['title' =>'title',
                'date' =>'11/11/2011',
                'nom' =>'Abdeladim',
                'done' => true];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tache</title>
</head>

<body>
    <table border="solide">
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <?php foreach ($taches as $key => $value) { {
                if ($key == 'done' && $value == true)
                {
                    $value = 'Done';
                } elseif ($key == 'done' && $value == false)
                {
                    $value = 'Doing';
                }
            } ?>
            <tr>
                <td>
                    <?php echo $key ?>
                </td>
                <td>
                    <?php echo $value ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>
