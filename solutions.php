<?php
// Задача 1: Создание простого массива

// Создаем массив с именами друзей
$friends = ['Вася', 'Коля', 'Вова', 'Миша', 'Леша'];

// Выводим каждое имя на новой строке
foreach ($friends as $friend) {
    echo $friend . "\n";
}

// Задача 2: Индексы массива

// 1. Создаем массив из 5 произвольных чисел
$numbers = [12, 45, 78, 23, 56];

// 2. Выводим на экран элемент с индексом 2
echo $numbers[2]; // Это выведет 78

// Задача 3: Ассоциативный массив

// 1. Создаем ассоциативный массив с информацией о друге
$friend = [
    'name' => 'Роман',
    'age' => 37,
    'city' => 'Санкт-Петербург'
];

// 2. Выводим на экран имя и возраст друга
echo "Имя: " . $friend['name'] . "\n";
echo "Возраст: " . $friend['age'] . " лет\n";

// Задача 4: Массивы с циклами

// 1. Создаем массив из 5 чисел
$numbers = [5, 12, 8, 20, 3];

// 2. Используем цикл foreach для вывода чисел больше 10
foreach ($numbers as $number) {
    if ($number > 10) {
        echo $number . "\n"; // Выводим число, если оно больше 10
    }
}

// Задача 5: Работа с массивами функций

// 1. Создаем массив из 5 чисел
$numbers = [5, 10, 15, 20, 25];

// 2. Используем встроенную функцию array_sum() для нахождения суммы всех чисел
$sum = array_sum($numbers);

// Выводим сумму на экран
echo "Сумма чисел в массиве: " . $sum;

// Задача 6: Учет товаров в магазине

// 1. Создаем массив товаров
$products = [
    [
        'name' => 'Яблоки',
        'price' => 50,
        'quantity' => 100
    ],
    [
        'name' => 'Бананы',
        'price' => 60,
        'quantity' => 80
    ],
    [
        'name' => 'Апельсины',
        'price' => 70,
        'quantity' => 50
    ],
    [
        'name' => 'Груши',
        'price' => 80,
        'quantity' => 40
    ],
    [
        'name' => 'Киви',
        'price' => 90,
        'quantity' => 30
    ]
];

// 2. Функция для вывода списка всех товаров
function displayProducts($products) {
    echo "Список товаров:\n";
    foreach ($products as $product) {
        echo "Название: " . $product['name'] . ", Цена: " . $product['price'] . " руб., Количество: " . $product['quantity'] . "\n";
    }
}

// 3. Функция для добавления нового товара
function addProduct(&$products, $name, $price, $quantity) {
    $products[] = [
        'name' => $name,
        'price' => $price,
        'quantity' => $quantity
    ];
}

// 4. Функция для обновления количества товара на складе
function updateProductQuantity(&$products, $name, $quantity) {
    foreach ($products as &$product) {
        if ($product['name'] === $name) {
            $product['quantity'] += $quantity;
            return;
        }
    }
    echo "Товар с названием '$name' не найден.\n";
}

// Выводим список товаров
displayProducts($products);

// Добавляем новый товар
addProduct($products, 'Манго', 100, 20);

// Обновляем количество товара на складе
updateProductQuantity($products, 'Яблоки', 20);

// Снова выводим список товаров
displayProducts($products);

?>