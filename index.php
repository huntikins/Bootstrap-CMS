<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap CMS | Home</title>
    </head>
    <body>
        <?php $connection = mysqli_connect("localhost:8889", "root", "root", "bootstrap_cms");?>
        <h1>Hello World</h1>
        <?php echo var_dump($connection); ?>
    </body>
</html>