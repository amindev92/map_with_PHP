<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo siteUrl("assets/css/app.css"); ?>">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <title><?php echo SITE_TITLE; ?></title>
</head>

<body>

    <div class="wrapper">

        <div class="input">
            <input type="text" id="search" placeholder="Enter a place ...">
        </div>
        <div class="mapContainer">
            <div class="map" id="map">

            </div>
        </div>



    </div>
    <footer class="footer">
        Amin Ataei - 2023
    </footer>


    <script src="<?php echo siteUrl("assets/js/script.js" . "?v=" . rand(1, 9999999)); ?>"></script>

</body>

</html>