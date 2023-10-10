<?php
// Sample data for autocomplete
$data = [
    "Apple",
    "Banana",
    "Cherry",
    "Grapes",
    "Lemon",
    "Orange",
    "Peach",
    "Strawberry",
    "Watermelon",
];

if (isset($_GET['term'])) {
    $term = $_GET['term'];
    $matches = [];

    // Filter data based on the search term
    foreach ($data as $item) {
        if (stripos($item, $term) !== false) {
            $matches[] = $item;
        }
    }

    // Sort the matched items
    sort($matches);

    // Output JSON response
    echo json_encode($matches);
}
?>
