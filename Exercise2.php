<!--Đếm các kí tự ( không tính kí tự trống )-->
<?php
$str = "welcome to bap company";
$count = 0;
for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] != ' ') {
        $count += 1;
    }
}
echo $count;

//Tìm những kí tự lặp lại > 2.
for ($i = 0; $i < strlen($str) - 1; $i++) {
    $count = 1;
    if ($str[$i] != ' ') {
        for ($j = $i + 1; $j < strlen($str); $j++) {
            if ($str[$j] != ' ') {
                if ($str[$i] == $str[$j]) {
                    $count += 1;
                    if ($count > 2) {
                        echo "Chữ lặp lại: $str[$i]";
                    }
                }
            }
        }
    }
}

//thay thế  “ company” bằng “software”.
echo str_replace('company', "software",  $str);
