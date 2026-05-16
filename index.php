<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap -->

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />

</head>
<body>
    <main id="formContainer" class="container d-flex justify-content-center">
    <form id="formMasuk" class="form col-4 bg-info-subtle d-block flex-column shadow-lg mt-5 p-5 rounded-3" action="masuk.php" method="post">

        <h3>From Masuk</h3>

        <label class="" for="nama">Nama:</label>
        <input class="form-control" type="text" name="nama" id="nama" placeholder="nama">

        <label for="status">Status:</label>
        <input class="form-control" type="text" name="status" id="status" placeholder="status">

        <label for="password">Password:</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="password">

        <div class="row justify-content-around">
        <button class="btn col-4 btn-outline-info mt-4" type="submit">Masuk</button>
        <button id="btnDaftar" class="btn col-4 btn-outline-danger mt-4" type="button">Daftar</button>
        </div>

    </form>
    </main>

    <script src="main.js"></script>
</body>
</html>