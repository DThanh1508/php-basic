<?php
    if ( isset($_POST['day']))
        $day = $_POST['day'];
    switch ($day) {
        case "2":
            $result = "Monday";
            break;
        case "3":
            $result = "Tuesday";
            break;
        case "4":
            $result = "Wednesday";
            break;
        case "5":
            $result = "Thursday";
            break;
        case "6":
            $result = "Friday";
            break;
        case "7":
            $result = "Saturday";
            break;
        case "8":
            $result = "Sunday";
            break;

        default:
            $result = "invalid";
            break;
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Day: <input type="text" name="day" value="<?php echo $day? $day  : '' ?> "><br>
        Result: <input type="text" name="result" value="<?php echo $result? $result  : '' ?> "><br>
        <button type="submit">Gửi</button>
    </form>
