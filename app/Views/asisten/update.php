<form action="/asisten/update" method="post">
    <?= csrf_field() ?>
    <div class="mb-3">
        <label for="nim" class="form-label">NIM:</label>
        <input type="text" name="nim" class="form-control" id="nim">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">NAMA:</label>
        <input type="text" name="nama" class="form-control" id="nama">
    </div>
    <div class="mb-3">
        <label for="praktikum" class="form-label">PRAKTIKUM:</label>
        <input type="text" name="praktikum" class="form-control" id="praktikum">
    </div>
    <div class="mb-3">
        <label for="ipk" class="form-label">IPK:</label>
        <input type="text" name="ipk" class="form-control" id="ipk">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>