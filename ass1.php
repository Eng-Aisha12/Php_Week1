<?php
echo "<h2>PHP Assignment 1</h2>";
// =====================================================
// QUESTION 1: Greatest and Smallest of Three Numbers
// =====================================================

echo "<h3>1. Greatest and Smallest Number</h3>";
$a = 15;
$b = 8;
$c = 20;
if ($a >= $b && $a >= $c) {
    $greatest = $a;
} elseif ($b >= $a && $b >= $c) {
    $greatest = $b;
} else {
    $greatest = $c;
}
if ($a <= $b && $a <= $c) {
    $smallest = $a;
} elseif ($b <= $a && $b <= $c) {
    $smallest = $b;
} else {
    $smallest = $c;
}
echo "Greatest = $greatest<br>";
echo "Smallest = $smallest<br>";

// ====================================================
// QUESTION 2: Divisible by 3, 5, Both or None
// =====================================================

echo "<h3>2. Divisibility Check</h3>";
$num = 15;
if ($num % 3 == 0 && $num % 5 == 0) {
    echo "$num is divisible by both 3 and 5.<br>";
} elseif ($num % 3 == 0) {
    echo "$num is divisible by 3.<br>";
} elseif ($num % 5 == 0) {
    echo "$num is divisible by 5.<br>";
} else {
    echo "$num is divisible by neither 3 nor 5.<br>";
}
// =====================================================
// QUESTION 3: Odd Numbers 2 to 20
// =====================================================

echo "<h3>3. Odd Numbers from 2 to 20</h3>";
for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
echo "<br>";
// Even Numbers from 35 to 7
echo "<h3>Even Numbers from 35 to 7</h3>";
for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
echo "<br>";
// =====================================================
// QUESTION 4: Divisible by 2 and 5 from 50 to 2
// =====================================================

echo "<h3>4. Numbers Divisible by 2 and 5</h3>";
for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }
}
echo "<br>";
// =====================================================
// QUESTION 5: Reverse of a Number
// =====================================================

echo "<h3>5. Reverse of a Number</h3>";
$num = 12345;
$reverse = 0;
while ($num > 0) {
    $digit = $num % 10;
    $reverse = ($reverse * 10) + $digit;
    $num = (int)($num / 10);
}
echo "Reverse = $reverse<br>";
// =====================================================
// QUESTION 6: LCM of Two Numbers
// =====================================================

echo "<h3>6. LCM of Two Numbers</h3>";
$a = 8;
$b = 12;
$lcm = ($a > $b) ? $a : $b;
while (true) {
    if ($lcm % $a == 0 && $lcm % $b == 0) {
        break;
    }
    $lcm++;
}
echo "LCM of  $a and $b = $lcm<br>";
// =====================================================
// QUESTION 7: HCF of Two Numbers
// =====================================================

echo "<h3>7. HCF of Two Numbers</h3>";
$a = 18;
$b = 24;
while ($b != 0) {
    $remainder = $a % $b;
    $a = $b;
    $b = $remainder;
}
echo "HCF = $a<br>";
// =====================================================
// QUESTION 8: Multiplication Table 1 to 12
// =====================================================

echo "<h3>8. Multiplication Table</h3>";
echo "<table border='1' cellpadding='8'>";
for ($i = 1; $i <= 12; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 12; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
// =====================================================
// QUESTION 9: Prime or Non-Prime
// =====================================================

echo "<h3>9. Prime or Non-Prime</h3>";
$num = 17;
$isPrime = true;
if ($num < 2) {
    $isPrime = false;
}
for ($i = 2; $i <= $num / 2; $i++) {
    if ($num % $i == 0) {
        $isPrime = false;
        break;
    }
}
if ($isPrime) {
    echo "$num is a Prime number.<br>";
} else {
    echo "$num is a Non-Prime number.<br>";
}
// =====================================================
// QUESTION 10: Prime Numbers from 10 to 50
// =====================================================

echo "<h3>10. Prime Numbers from 10 to 50</h3>";
for ($num = 10; $num <= 50; $num++) {
    $isPrime = true;
    if ($num < 2) {
        $isPrime = false;
    }
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
    if ($isPrime) {
        echo $num . " ";
    }
}
?>