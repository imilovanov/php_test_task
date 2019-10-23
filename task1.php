<?
$handle = fopen('numbers.csv', 'w');

$min = 1;
$max = 100;
$numbers = [];

for($i = 0; $i < $max; $i++) {
    array_push($numbers, rand($min, $max));
}
fputcsv($handle, $numbers);

fclose($handle);
?>
