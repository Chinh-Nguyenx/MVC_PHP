<?php
//ham co 2 loai 
// co tra ve

//khong tra ve
// function hienthi($a,$b,$c){
//     echo $a+$b+$c;
// }

// hienthi(7,8,10);

//Key word: get current year in php
// function thongtin($name,$year,$add){
//     echo $name."<br>";
//     echo date("Y") - $year."<br>";
//     echo $add;
// }
// thongtin('Nguyen Dinh Chinh',2003,'Ha Noi');

// function thongtin2($mssv,$name,$add,$year,$d1,$d2){
//     echo $mssv."<br>";
//     echo $name."<br>";
//     echo $add."<br>";
//     echo tuoi($year)."<br>";
//     echo dtb($d1,$d2);
//     echo "<br>";
//     echo xeploai($d1,$d2);
// }

// thongtin2("PH25585","Nguyen Chinh","Ha Noi",2003,5,4);

// function tuoi($year){
//     return date("Y") - $year;
// }
// function dtb($d1,$d2){
//     return ($d1+$d2)/2;
// }
// function xeploai($d1,$d2){
//     dtb($d1,$d2);
//     if(dtb($d1,$d2)>= 5){
//         echo "Pass";
//     }
//     else{
//         echo "Not pass";
//     }
// }



function thamnien($year){
    return date("Y")-$year;
}
function luong($ltb,$hour){
    return $ltb*$hour;
}
function thongtinGV($mgv,$name,$year,$ltb,$hour){
    echo $mgv."--".$name."--".thamnien($year)."--".luong($ltb,$hour);
}
thongtinGV("Gv01","Nguyen Thang",2015,2000000,50);
