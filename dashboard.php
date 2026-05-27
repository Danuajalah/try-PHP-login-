<?php

    session_start();
    if(!isset($_SESSION['nama'])){
        header("Location: index.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Dashboard</title>

    <!-- bootstrap -->    
     <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">


    <link rel="stylesheet" href="style.css">
     
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary shadow">
        <div class="container justify-content-end position-relative">
            <a class="navbar-brand position-absolute start-0" href="index.php"><span class="bi bi-arrow-left-square me-2"></span>Logout</a>
            <a class="navbar-brand" href="#">Movies List</a>
            <p id="userName" class="navbar-text">Welcome,<span class="text-uppercase fw-bold"> <?php echo $_SESSION['nama']; ?></span></p>
        </div>
    </nav>

    <main class="container mt-5">
        <h2 class="mb-3">Film Populer Hari Ini</h2>

        <div id="movieContainer" class="row row-cols-1 row-cols-md-4 g-4"></div>
    </main>

    <script src="second.js">

    

    </script>

</body>
</html>
