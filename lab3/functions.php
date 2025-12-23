<?php
declare(strict_types=1);

$extensions = get_loaded_extensions();
$totalFunctions = 0;

foreach ($extensions as $ext) {
    $functions = get_extension_funcs($ext);
    $functionCount = $functions ? count($functions) : 0;
    $totalFunctions += $functionCount;

    echo "<h2>Модуль: {$ext} ({$functionCount} функций)</h2>";
    
    if ($functions) {
        echo '<ul>';
        foreach ($functions as $func) {
            echo "<li>{$func}</li>";
        }
        echo '</ul>';
    } else {
        echo '<p>Нет доступных функций для модуля</p>';
    }
}

echo "<h3>Итого: {$totalFunctions} функций в " . count($extensions) . " модулях</h3>";
?>
