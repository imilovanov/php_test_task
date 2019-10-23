<?
$factorial = 1;
echo "Введите число: ";
$handle = fopen ("php://stdin","r");
$number = (int)fgets($handle);

if ((is_int($number) == false) || ($number < 1) || ($number > 10)) {
    echo "Invalid input";
} else {
    $temp = $number;
    while ($temp != 1) {
        $factorial = $factorial * $temp;
	$temp = $temp - 1;
    }

    echo "Факториал числа $number:  $factorial";
}

fclose($handle);
?>
