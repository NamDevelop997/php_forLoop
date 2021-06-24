<?php
$total = 0;
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "{$i}<br/>";
        $total += $i;
    }
}
echo "Total: {$total}";
