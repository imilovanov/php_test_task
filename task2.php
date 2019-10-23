<?
$csvFile = file_get_contents('numbers.csv');
$array = explode(',', $csvFile);
$count = 0;

foreach($array as $number) {
if ($number <= 50) {
    $second_number = 0;
}
if ($number > 50) {
    $second_number = 1;
    $count += 1;
}
echo $number . "\t" . $second_number . "\n";
}

echo "Количество чисел больше 50: " . $count;
?>
