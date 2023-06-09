<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container">
        <h1 class="mt-3 mb-3">Login</h1>
        <form action="/login/check" method="post">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label for="usr" class="form-label col-1">Username:</label>
                <input type="text" name="usr" class="form-control-sm" id="usr" required>
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label col-1">Password:</label>
                <input type="password" name="pwd" class="form-control-sm" id="pwd" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>

</html>