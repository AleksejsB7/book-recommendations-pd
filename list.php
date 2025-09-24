 <?php
    $servername = "localhost";
    $username = "book_review_user_24092025";
    $password = "password";
    $dbname = "book_review_24092025";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, full_name , book_title , review_text, rating, submitted_at FROM book_review";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo  "Fullname: " . $row["full_name"] . "<br>" . " Book title: " . $row["book_title"] . "<br>" . "Book review: " . $row["review_text"] . "<br>" . "Rating: " . $row["rating"] . "<br>" . "Submitted at: " . $row["submitted_at"] . "<br>";
            echo "<br><br>";
        }
    } else {
        echo "0 results";
    }
    echo 
    $conn->close();
    ?> 