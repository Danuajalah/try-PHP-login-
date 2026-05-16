const container = document.getElementById('formContainer');
const btnDaftar = document.getElementById('btnDaftar');

btnDaftar.addEventListener('click', function(){
    container.innerHTML = `
    <form id="formDaftar" class="form col-4 bg-info-subtle d-block flex-column shadow-lg mt-5 p-5 rounded-3" action="daftar.php" method="post">

        <h3>Form Daftar</h3>

        <label class="" for="namaNew">Nama:</label>
        <input class="form-control" type="text" name="namaNew" id="namaNew" placeholder="nama">

        <label for="statusNew">Status:</label>
        <input class="form-control" type="text" name="statusNew" id="statusNew" placeholder="status">

        <label for="passwordNew">Password:</label>
        <input class="form-control" type="password" name="passwordNew" id="passwordNew" placeholder="password">

        <div class="row justify-content-around">
        <button class="btn col-4 btn-outline-dark mt-4" type="button" onclick="location.reload()">Kembali</button>
        <button class="btn col-4 btn-outline-danger mt-4" type="submit">Daftar</button>
        </div>

    </form>`
})
