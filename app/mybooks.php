<?php 
?>  

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>My Books</title>
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!--slick slider stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- slick slider -->

  <link rel="stylesheet" href="css/slick-theme.css" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>
<body class="sub_page">
  <div class="main_body_content">
    <div class="hero_area">
      <!-- header section strats -->
      <?php 
        include ('navbar.php');
    ?>
      <!-- end header section -->
    </div>

<!-- chocolate section -->
<section class="chocolate_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                My Books
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="chocolate_container">
    
    <h2>Add New Book</h2>
<div class="row">
    <div class="col-6">
    <form method="POST" action="">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" class="form-control form-control-sm" required><br>
    <input type="hidden" id="edit_id" name="title" class="form-control form-control-sm" >
    <label for="author">Author:</label>
    <input type="text" id="author" name="author" required class="form-control form-control-sm"><br>


    <label for="genre">Genre:</label>
    <input type="text" id="genre" name="genre" required class="form-control form-control-sm"><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required class="form-control form-control-sm"></textarea><br>

    <button class="btn btn-sm btn-success" onclick="CreateBook()" type="button">Add Book</button>
    <button class="btn btn-sm btn-info" onclick="EditBook()" type="button">Edit Book</button>
    <button class="btn btn-sm btn-danger" onclick="DeleteBook()" type="button">Delete Book</button>
  
    </form>

    </div>
</div>
    

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ccc;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
            <div class="container-fluid" >
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Genre</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody id="table_data">
                       
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</section>
    <?php 
        include('footer.php');
    ?>
  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- slick slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->

  <script>
    ReloadData();
    function ReloadData(){
        var TypeStatus = "read";
        var dataSet = { 'TypeStatus': TypeStatus};

        $.ajax({
            url: 'connection.php',
            type: 'POST',
            data: dataSet,
            dataTye: 'json',
            success: function(response) {
                // Handle the response from the server here
                var response = JSON.parse(response);

                var htmldata = "";
                var RowTemp = 0;
                response.forEach(function(book) {
                    RowTemp++;
                    htmldata += `<tr onclick="GetEdit('${RowTemp}')">
                      <td>${book.title}</td>
                      <td>${book.author}</td>
                      <td>${book.genre}</td>
                      <td>${book.description}</td>
                      <input type='hidden' id="data_id${RowTemp}" value="${book.id}">
                      <input type='hidden' id="data_title${RowTemp}" value="${book.title}">
                      <input type='hidden' id="data_author${RowTemp}" value="${book.author}">
                      <input type='hidden' id="data_genre${RowTemp}" value="${book.genre}">
                      <input type='hidden' id="data_description${RowTemp}" value="${book.description}">
                    </tr>`; 
                });
                
                document.getElementById('table_data').innerHTML = htmldata;
            },
            error: function(xhr, status, error) {
                // Handle any errors that occur during the Ajax request
                console.error('Error: ' + error);
            }
        });
    }

    function GetEdit(Row){
        var RowId = document.getElementById('data_id'+Row).value

        var data_title = document.getElementById('data_title'+Row).value
        var data_author = document.getElementById('data_author'+Row).value
        var data_genre = document.getElementById('data_genre'+Row).value
        var data_description = document.getElementById('data_description'+Row).value


        document.getElementById('title').value = data_title;
        document.getElementById('author').value = data_author;
        document.getElementById('genre').value = data_genre;
        document.getElementById('description').value = data_description;
        document.getElementById('edit_id').value = RowId;
        

    }
    function CreateBook(){
        var Title = document.getElementById('title').value
        var author = document.getElementById('author').value
        var genre = document.getElementById('genre').value
        var description = document.getElementById('description').value
        var TypeStatus = "create";
        var dataSet = {'Title': Title, 'author': author, 'genre': genre, 'description': description, 'TypeStatus': TypeStatus};

        $.ajax({
            url: 'connection.php',
            type: 'POST',
            data: dataSet,
            success: function(response) {
                // Handle the response from the server here
		    console.log(response);
			ReloadData();
            },
            error: function(xhr, status, error) {
                // Handle any errors that occur during the Ajax request
                console.error('Error: ' + error);
            }
        });
    }

    function DeleteBook(){
        var edit_id = document.getElementById('edit_id').value;
        var TypeStatus = "delete";
        var dataSet = {'edit_id': edit_id ,'TypeStatus': TypeStatus};

        $.ajax({
            url: 'connection.php',
            type: 'POST',
            data: dataSet,
            success: function(response) {
                // Handle the response from the server here
                console.log(response);
                location.reload();
            },
            error: function(xhr, status, error) {
                // Handle any errors that occur during the Ajax request
                console.error('Error: ' + error);
            }
        });
    }

    function EditBook(){
        var edit_id = document.getElementById('edit_id').value;

        var title = document.getElementById('title').value;
        var author = document.getElementById('author').value;
        var genre = document.getElementById('genre').value;
        var description = document.getElementById('description').value;

        var TypeStatus = "edit";
        var dataSet = {'edit_id': edit_id ,'TypeStatus': TypeStatus, 'title': title, 'author': author, 'genre': genre, 'description': description};

        $.ajax({
            url: 'connection.php',
            type: 'POST',
            data: dataSet,
            success: function(response) {
                // Handle the response from the server here
                console.log(response);
                ReloadData();
            },
            error: function(xhr, status, error) {
                // Handle any errors that occur during the Ajax request
                console.error('Error: ' + error);
            }
        });
    }
  </script>
</body>

</html>
