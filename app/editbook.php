<!DOCTYPE html>
<html>
<head>
  <title>Edit Book</title>
</head>
<body>

<?php 
// ตรวจสอบว่ามีการกด submit จากฟอร์มหรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["edit-book"])) {
  // ดึงค่า title ที่ผู้ใช้กรอกในฟอร์ม
  $newTitle = $_POST["title"];

  // เชื่อมต่อกับฐานข้อมูล (ตัวอย่างเท่านั้น)
  // ในสภาวะจริงๆ การเชื่อมต่อต้องใช้ฟังก์ชันหรือเทคโนโลยีเชิงความปลอดภัยเพื่อป้องกัน SQL Injection
  $dbConnection = mysqli_connect("localhost", "username", "password", "database_name");

  // ทำการอัปเดท title ในฐานข้อมูล (ตัวอย่างเท่านั้น)
  $bookIdToUpdate = 1; // ระบุ ID ของหนังสือที่ต้องการแก้ไข
  $query = "UPDATE books SET title = '$newTitle' WHERE id = $bookIdToUpdate";
  mysqli_query($dbConnection, $query);

  // ปิดการเชื่อมต่อฐานข้อมูล (ตัวอย่างเท่านั้น)
  mysqli_close($dbConnection);

  echo "Book title updated successfully.";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <label for="title">Title:</label>
  <input type="text" id="title" name="title">
  <input type="submit" value="Edit Book" name="edit-book">
</form>

</body>
</html>
