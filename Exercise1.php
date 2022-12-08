<!--Cho 1 mảng n = [1,3,5,4,7,3,10,0]-->
<!--    a. Viết chương trình tìm phần tử lớn nhất trong mảng-->
<?php
$n = [1,3,5,4,7,3,10,20];
$x = $n[0];
foreach ($n as $value){
    if($x<$value){
        $x = $value;
    } else {
        $x = $x;
    }
}
echo "Số lớn nhất là: $x";

    b. Nhỏ nhất trong mảng
foreach ($n as $value){
    if($x<$value){
        $x = $x;
    } else {
        $x = $value;
    }
}
echo "Số nhỏ nhất là: $x";

    c. Tìm phần tử lặp lại trong mảng
$array = [1,3,5,4,7,3,10,20,20,40,20];
$new_array = array();
foreach ($array as $key => $value) {
    if(isset($new_array[$value]))
        $new_array[$value] += 1;
    else
        $new_array[$value] = 1;
}
foreach ($new_array as $number => $n) {
    if($n > 1)
        echo "Phần tử lặp lại trong mảng: $number, với số lượng lặp lại: ($n)";
    echo "<br />";
}

    d. Xóa phần tử có key = 1 khỏi mảng n
$n = [1,3,5,4,7,3,10,20];
foreach ($n as $key => $value){
    if ($key == 1){
        continue;
    } else {
        $n[] = $value;
    }
    echo $value;
}

e. Cho 1 mảng m = [4,6,8] và cho các phần tử của mảng m vào n và sắp xếp mảng từ nhỏ → lớn.
$n = [1,3,5,4,7,3,10,20];
$m = [4,6,8];
foreach ($m as $value){
//    print_r($value);
    $n[] = $value;
}
sort($n);
foreach ($n as $value){
//    print_r($value);
    echo $value;
}
