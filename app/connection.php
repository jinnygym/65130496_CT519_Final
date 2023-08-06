<?php
// เชื่อมต่อฐานข้อมูล MySQL
// 127.0.0.1

$servername = "mysql";
$username = "myuser";
$password = "mypassword";
$dbname = "65130496_final";

$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create the books table
$sql_create_table = "CREATE TABLE IF NOT EXISTS books (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  author VARCHAR(100) NOT NULL,
  publication_date DATE,
  genre VARCHAR(50),
  description TEXT
)";

// Execute the CREATE TABLE query
if ($conn->query($sql_create_table) === TRUE) {
  //  echo "Table 'books' created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}

// ตรวจสอบการส่งข้อมูลจากฟอร์ม
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $TypeStatus = $_POST['TypeStatus'];
  if($TypeStatus == 'create'){
    $title = $_POST["Title"];
    $author = $_POST["author"];
    $genre = $_POST["genre"];
    $description = $_POST["description"];

    // เพิ่มข้อมูลลงในตาราง books
    $sql = "INSERT INTO books (title, author, genre, description)
            VALUES ('$title', '$author', '$genre', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "Book added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

   // header('Location: mybooks.php');
    exit;
  }else if($TypeStatus == 'read'){

    $sql = "SELECT * FROM books";
    $Res = $conn->query($sql);
  
    if ($Res->num_rows > 0) {
        // สร้าง array เพื่อเก็บข้อมูลที่ได้จากการ query
        $data = array();

        while ($row = $Res->fetch_assoc()) {
            // นำข้อมูลในแต่ละแถวมาใส่ใน array
            $data[] = $row;
            
         
        }
        echo json_encode($data);
    } else {
        echo "No data found.";
    }

    exit;
  }else if($TypeStatus == 'delete'){
    $edit_id = $_POST["edit_id"];

    // เพิ่มข้อมูลลงในตาราง books
    $sql = "DELETE FROM  books where id = '$edit_id' ";

    if ($conn->query($sql) === TRUE) {
      header('Location: mybooks.php');
      exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header('Location: mybooks.php');
    exit;
  }else if($TypeStatus == 'edit'){
    
    $edit_id = $_POST["edit_id"];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $genre = $_POST["genre"];
    $description = $_POST["description"];

    $sql = "UPDATE  books SET title = '$title', author = '$author' , genre = '$genre' , description = '$description' where id = '$edit_id' ";

    
    if ($conn->query($sql) === TRUE) {
        echo 'success';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

   
    exit;
  }
}

// ปิดการเชื่อมต่อฐานข้อมูล
// $conn->close();
?>
