<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Analytics
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title><?php if($pageTitle) echo ucwords($pageTitle) . ' | '; ?>Nemichandra Jain</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Javascript calls
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/viewer.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/fonts.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/navbar.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/homepage.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/profile.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/general.css">

    <!-- Fonts
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Raleway:200,300,400|Roboto:300,400&amp;subset=latin-ext" rel="stylesheet"> -->

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="<?=PUBLIC_URL?>images/favicon.png?v=2.0">
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-5 p-5">
                <img class="img-fluid" src="<?=PUBLIC_URL?>images/portrait.jpg" alt="Portrait" />
            </div>
            <div class="col-md-3 signature">
                <img class="img-fluid" src="<?=PUBLIC_URL?>images/signature.png" alt="signature" />
                <p>Nemichandra Jain<br />1919-2005</p>
            </div>
        </div>
    </div>
    <!-- Navigation
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <nav id="mainNavBar" class="navbar navbar-light navbar-expand-lg">
        <div class="container-fluid clear-paddings">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php $this->printNavigation($navigation, ' class="navbar-nav nav m-auto"'); ?>
            </div>
        </div>
    </nav>
    <!-- End Navigation
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
