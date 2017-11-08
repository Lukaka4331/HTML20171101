<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/8
 * Time: 上午 10:18
 */

?>

    <html lang="en">
<head>
    <title>Welcome to my site</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<table border="1">
    <?php
    $n=5;
    $m=6;
    for($i=1;$i<$n;$i++){
" <tr>";
        for($j=1;$j<$m;$j++){
            echo " <td>"." <span style='font-size=5em',font-size=5em'>".$i*$j." "."</td>"."</span> "  ;


        }
         echo "<tr />";
    }
    ?>
</table>
</head>


