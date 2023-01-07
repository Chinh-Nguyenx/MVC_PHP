<?php 
$a ="FPOLY";
$b =" Hoc sinh";
echo $a.$b;

// $mang = array(1,2,3,4,5,6,7);

// echo $mang[5]; 
// echo "<br>";
// echo $mang[6];

// foreach($mang as $m){
//     if($m%2==0){
//         echo $m;
//     }
// }

// //mảng liên hợp $key=>$value

$mangln = ['G'=>10,'F'=>9,'H'=>9,'J'=>4];

echo $mangln['F'];
echo $mangln['J'];

$color = ['green'=>'Xanh lá','blue'=>'Xanh dương','red'=>'đỏ'];

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>KEY</td>
            <td>                VALUE</td>
            <td>Color</td>
        </tr>
        <?php
            foreach($color as $key=>$value){
        ?>
        <tr>
            <td>               <?= $key?>           </td>
            <td>               <?= $value?>           </td>
            <td style="background-color: <?php echo $key ?>">                                        </td>
        </tr>
        <?php } ?>
    </table>    
</body>
</html>
