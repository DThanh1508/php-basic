<!--Giải phương trình bậc hai một ẩn: ax2 + bx + c = 0.-->
<?php
$result = '';
if (isset($_POST['calculate'])) {
    $a = isset($_POST['a']) ? $_POST['a'] : '';
    $b = isset($_POST['b']) ? $_POST['b'] : '';
    $c = isset($_POST['c']) ? $_POST['c'] : '';

    $delta = ($b*$b) - (4*$a*$c);

    if ($delta < 0){
        $result = 'Phương trình vô nghiệp';
    }
    else if ($delta == 0){
        $result = 'Phương trình nghiệp kép x1 = x2 = ' . (-$b/2*$a);
    }
    else {
        $result = 'Phương trình có hai nghiệp phân biệt, x1 = ' . ((-$b + sqrt($delta))/2*$a);
        $result .= ',x2 = ' . ((-$b - sqrt($delta))/2*$a);
    }
}
?>
<form method="post" action="">
    X <sup>2</sup> = <input type="text" name="a" value=""/> <br><br>
    X = <input type="text" name="a" value=""/> <br><br>
    C =<input type="text" name="a" value=""/> <br><br>
    = 0
    <br/><br/>
    <input type="submit" name="calculate" value="Tính" />
</form>
<?php echo $result; ?>
