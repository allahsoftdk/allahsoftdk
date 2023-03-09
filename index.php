<?php
?>
<html lang="en">
<head>
    <title>Allahsoft</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/stylesheet.css">
    <meta name="description" content="A website for the Allahsoft app">
    <meta name="author" content="Isaac Vorköper, Frederik Vilhelmsen, Kristoffer Clausen, Victor Neerholt">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <header class="site-header sticky-top py-1" style="background-color: #c5c5c5">
        <nav class="navbar navbar-expand container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" href="#" aria-label="Product">
                <img src="assets/img/allahsoft-logo-text.png" width="70" height="35">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarToggler">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
        <div id="home" class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal" style="color: #165d31">Allahsoft App</h1>
                <p class="lead fw-normal">Qibla Compass: More Than Just Direction-Finding! Experience Muslim Forums, Prayer Alarms, and Calendar Conversion!</p>
                <a class="btn downloadBtn" href="https://github.com/allahsoftdk/allahsoft-react-native-app/releases/download/Pre-Production/Allahsoft.apk">Download now</a>
            </div>
            <img src="assets/app-showcase/mainPicture.png" style="max-width: 20%; height: auto;">
        </div>
    </div>
    <div id="features" class="container pb-2">
        <div class="row">
            <div class="col-sm">
                <h1 class="text-center fw-bold" style="color: #165d31">Features</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-sm">
                <h3>Compass</h3>
                <h5 class="fw-normal">Find the Direction of Mecca with Ease</h5>
                <img src="assets/app-showcase/compass.png" style="max-width: 80%; height: auto;">
            </div>
            <div class="col-sm">
                <h3>Calender</h3>
                <h5 class="fw-normal">Stay Up-to-Date with Important Islamic Dates</h5>
                <img src="assets/app-showcase/calender.png" style="max-width: 80%; height: auto;">
            </div>
            <div class="col-sm">
                <h3>Prayer overview</h3>
                <h5 class="fw-normal">Never Miss a Prayer Time Again</h5>
                <img src="assets/app-showcase/prayerScreen.png" style="max-width: 80%; height: auto;">
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm">
                <h3>Quran page</h3>
                <h5 class="fw-normal">Read and Study the Quran Anywhere, Anytime</h5>
                <img src="assets/app-showcase/quranPage.png" style="max-width: 80%; height: auto;">
            </div>
            <div class="col-sm">
                <h3>Islamic Forum</h3>
                <h5 class="fw-normal">Connect with Like-Minded Muslims Worldwide</h5>
                <img src="assets/app-showcase/chatPage.png" style="max-width: 80%; height: auto;">
            </div>
            <div class="col-sm">
                <h3>Date Converter</h3>
                <h5 class="fw-normal">Easily Convert Between Hijri and Gregorian Dates</h5>
                <img src="assets/app-showcase/dateConverter.png" style="max-width: 80%; height: auto;">
            </div>
        </div>
    </div>
    <footer class="py-3 mt-4" style="background-color: #c5c5c5">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#features" class="nav-link px-2 text-muted">Features</a></li>
        </ul>
        <p class="text-center text-muted">© 2023 Allahsoft</p>
    </footer>

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

