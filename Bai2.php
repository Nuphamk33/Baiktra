<?php
$products = array(
    'Product 1' => array(
        'name' => 'Áo Hoodie',
        'price' => 1000,
        'quantity' => 3
    ),
    'Product 2' => array(
        'name' => 'Áo Sơmi',
        'price' => 230,
        'quantity' => 8
    ),
    'Product 3' => array(
        'name' => 'Áo phông',
        'price' => 300,
        'quantity' => 10
    )
);
echo "Thông tin của tất cả sản phẩm:"."<br>";
foreach ($products as $key => $product) {
    echo $key."<br>";
    echo "Name: " . $product['name'] . "<br>";
    echo "Price: $" . $product['price'] . "<br>";
    echo "Quantity: " . $product['quantity'] . "<br>";
    echo "-----------------"."<br>";
}
function TinhTong($products) {
    $Tong = 0;
    foreach ($products as $product) {
        $Tong += $product['price'] * $product['quantity'];
    }
    return $Tong;
}
echo "Tổng giá trị của tất cả sản phẩm: $" . TinhTong($products);
?>
