<form action="/asisten/delete" method="post">
    <?= csrf_field() ?>
    <div class="mb-3">
        <label for="nim" class="form-label">NIM:</label>
        <input type="text" name="nim" class="form-control" id="nim">
    </div>
    <button type="submit" class="btn btn-danger">Delete</button>
</form>