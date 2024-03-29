<?php
//-----------------------------------------------------
// 3. Використайте функцію в двох варіантах:
// коли вона повертає нове число і змінює передане.
//-----------------------------------------------------

// Функція, що повертає нове число
function incrementNumber($num) {
    return $num + 1;
}

// Функція, яка змінює передане число
/*
 * Амперсанд (&) перед параметром функції вказує, що цей параметр передається
 * за посиланням (по посиланню),а не за значенням (за замовчуванням).
 * Це означає, що якщо змінити значення параметра в середині функції,
 * то ця зміна також вплине на змінну, яка була передана при виклику функції.
 *
 * В вашій функції incrementNumberByReference(&$num), амперсанд перед $num робить $num передаваним за посиланням,
 * і будь-які зміни, які ви робите з $num всередині функції, вплинуть на оригінальну змінну,
 * яка була передана у вигляді аргументу функції.
 *
 * Отже, це корисний механізм, коли потрібно змінити значення змінної всередині функції
 * та мати ці зміни відображені в оригінальній змінній, з якою я працюю.
 * */

function incrementNumberByReference(&$num) {
    $num += 1;
}

// Перевірка функції, що повертає нове число
$number1 = 5;
$result1 = incrementNumber($number1);
echo "Функція, що повертає нове число: $result1" . PHP_EOL;

// Перевірка функції, яка змінює передане число
$number2 = 10;
incrementNumberByReference($number2);
echo "Функція, яка змінює передане число: $number2" . PHP_EOL;