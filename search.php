<?php
include 'db.php';
include('header.php')
; // Include your DB connection

// Check if the search query is set and not empty
if (isset($_GET['query']) && !empty($_GET['query'])) {
    $search = htmlspecialchars($_GET['query']);
    
    // Prepare and execute the query
    $stmt = $conn->prepare("SELECT * FROM products WHERE name LIKE ?");
    $like = "%" . $search . "%";
    $stmt->bind_param("s", $like);
    $stmt->execute();
    $result = $stmt->get_result();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Products</title>
    <link rel="stylesheet" href="style.css"> <!-- Optional: External CSS for styling -->
</head>
<body>

   

    <?php
    // If a search query has been submitted, display the results
    if (isset($search)) {
        echo "<h2>Results for '<strong>" . htmlspecialchars($search) . "</strong>'</h2>";

        // Check if any results were found
        if ($result->num_rows > 0) {
            echo "<div class='results-container'>";
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product-item'>";
                echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
                echo "<p>" . htmlspecialchars($row['description']) . "</p>";
                // You can add more details like price, images, etc. here
                echo "</div>";
            }
            echo "</div>";
        } else {
            echo "<p>No results found for '<strong>" . htmlspecialchars($search) . "</strong>'.</p>";
        }
        $stmt->close();
    }
    ?>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>

<style>
    

.results-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.product-item {
    width: 250px;
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
}

.product-item h3 {
    font-size: 18px;
    margin-bottom: 10px;
}

.product-item p {
    font-size: 14px;
    color: #555;
}

</style>