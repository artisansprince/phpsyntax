<?php


echo "\nLoop menggunakan while:\n";
$i = 0;
while ($i < 5) {
    echo "Angka: $i\n";
    $i++;
}

echo "\nLoop menggunakan do-while:\n";
$i = 0;
do {
    echo "Angka: $i\n";
    $i++;
} while ($i < 5);

echo "Loop menggunakan for:\n";
for ($i = 0; $i < 5; $i++) {
    echo "Angka: $i\n";
}

echo "\nLoop menggunakan foreach:\n";
$numbers = [0, 1, 2, 3, 4];
foreach ($numbers as $number) {
    echo "Angka: $number\n";
}
?>
