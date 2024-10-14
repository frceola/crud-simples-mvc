<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <script src="assets/jquery-3.3.1.min.js"></script>
    <script src="assets/bootstrap.bundle.min.js"></script>
    <title>CRUD SIMPLES - MVC</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <br>
            <?php
                if(file_exists($file))
                {
                    include_once $file;
                }
            ?>
        </div>
    </div>
</body>
</html>