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

    $name = $conn->real_escape_string($_POST['name']);
    $surname = $conn->real_escape_string($_POST['surname']);
    $rating = $conn->real_escape_string($_POST['rating']);
    $book_title = $conn->real_escape_string($_POST['book']);
    $review_text = $conn->real_escape_string($_POST['review']);

    $full_name = $name . " " . $surname;


    $sql = "INSERT INTO book_review (full_name , book_title , review_text, rating)
VALUES ('$full_name', '$book_title' , '$review_text' , '$rating')";


    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    echo  "<a href='http://localhost:8000/list.php'>Apskatīt Grāmatas</a>";
    echo  "<a href='http://localhost:8000/'>Pievienot Grāmatu</a>";
    $conn->close();
    ?> 