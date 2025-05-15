<?php
header('Content-Type: application/json');

$products = [
    ['name' => 'WordPress', 'languages' => ['PHP', 'JavaScript'], 'stars' => 18000],
    ['name' => 'Drupal', 'languages' => ['PHP', 'JavaScript'], 'stars' => 6000],
    ['name' => 'Laravel', 'languages' => ['PHP'], 'stars' => 76000],
    ['name' => 'Magento', 'languages' => ['PHP', 'JavaScript'], 'stars' => 7000],
    ['name' => 'React', 'languages' => ['JavaScript'], 'stars' => 210000]
];

$famousProducts = array_filter($products, function ($product) {
    return in_array('PHP', $product['languages']) && in_array('JavaScript', $product['languages']);
});

usort($famousProducts, function ($a, $b) {
    return $b['stars'] <=> $a['stars'];
});

echo json_encode(array_values($famousProducts), JSON_PRETTY_PRINT);
