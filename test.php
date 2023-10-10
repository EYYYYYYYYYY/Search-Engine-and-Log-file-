<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>

    <?php
    // Get the search query from the URL
    $query = $_GET['query'];

    // Simulated database or content to search through
    $content = array(
        "Lorem ipsum dolor sit amet.",
        "Consectetur adipiscing elit.",
        "Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        // Add more content items here
    );

    // Perform simple search
    $results = array_filter($content, function ($item) use ($query) {
        return strpos(strtolower($item), strtolower($query)) !== false;
    });

    // Display search results
    if (count($results) > 0) {
        echo "<ul>";
        foreach ($results as $result) {
            echo "<li>$result</li>";
        }
        echo "</ul>";
    } else {
        echo "No results found.";
    }
    ?>
</body>
</html>
