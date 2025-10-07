<?php
// 1. Store fruit names in an array
$fruits = array("Mango", "Orange", "Apple", "Papaya", "Banana");

// Display using for loop
echo "Original Fruit List:<br>";
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . "<br>";
}

// a. Sort the array and print again
sort($fruits);
echo "<br>Sorted Fruit List:<br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

// b. Check if it is an array
if (is_array($fruits)) {
    echo "<br>Values are included in an array<br>";
} else {
    echo "<br>It is not an array<br>";
}

// c. Check whether "Cherry" is in the array
if (in_array("Cherry", $fruits)) {
    echo "<br>Cherry is here<br>";
} else {
    // If not found, add Cherry at the end
    $fruits[] = "Cherry";
    echo "<br>Cherry added at the end<br>";
    foreach ($fruits as $fruit) {
        echo $fruit . "<br>";
    }
}

// d. Delete "Banana" from the list and display again
$key = array_search("Banana", $fruits); // find index of Banana
if ($key !== false) {
    unset($fruits[$key]); // remove Banana
}

// Display final fruit list
echo "<br>Final Fruit List (after deleting Banana):<br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
?>
