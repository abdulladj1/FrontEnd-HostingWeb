<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/login.css" />
    <link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">
</head>
<body>
    <div id="formFooter">
    <p><a class="btn btn-primary btn-lg px-4 gap-3" href="index.php?target=login">Log In</a></p>
    </div>
    <?php 
        session_start();
        session_destroy();
        header("Location: loginnew.php");
    ?>
</body>
</html>
