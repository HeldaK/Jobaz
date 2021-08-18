<!DOCTYPE html>
<html>
    <head>
        <title>JOBAZ</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    <div class="container">
        <div class="header clearfix">
            <nav>
                <ul class="nav nav-pills float-end">
                    <li class="nav-item">
                        <a class="nav-link secondary" href="index.php">Startseite</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link secondary" href="create.php">Jobs Hinzufügen</a>
                    </li>
                </ul>
            </nav>
            <h3 class="primary"><?php echo SITE_TITLE; ?></h3>
        </div>
        <?php displayMessage(); ?>
 