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
        <div class="wrapper__search-box">
            <div class="search-box">
                <input type="text" id="search">
                <div class="clear"></div>
                <div class="search-results">
                    <div class="result-item" data-lat='111' data-lng='222'>
                        <span class="loc-type">Restaurant</span>
                        <span class="loc-title">Akbar juje</span>
                    </div>
                    <div class="result-item" data-lat='111' data-lng='222'>
                        <span class="loc-type">University</span>
                        <span class="loc-title">Tehran University</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="mapContainer">
            <div id="map"></div>
        </div>
    </div>

    <div class="modal-overlay">
        <div class="modal">
            <span class="close">x</span>
            <h3 class="modal-title">Register a Location</h3>
            <div class="modal-content">
                <form id='addLocationForm' method="post">
                    <div class="field-row">
                        <div class="field-title">Coordinates:</div>
                        <div class="field-content">
                            <input type="text" name='lat' id="lat-display" readonly style="width: 160px;text-align: center;">
                            <input type="text" name='lng' id="lng-display" readonly style="width: 160px;text-align: center;">
                        </div>


                    </div>
                    <div class="field-row">
                        <div class="field-title">Location Name: </div>
                        <div class="field-content">
                            <input type="text" name="title" id='l-title' placeholder="Iran mall , Mellat Park ...">
                        </div>
                    </div>
                    <div class="field-row">
                        <div class="field-title">Type</div>
                        <div class="field-content">
                            <select name="type" id='l-type'>

                                <option value="0">public</option>
                                <option value="1">Office</option>
                                <option value="2">Market</option>
                                <option value="3">Service</option>
                                <option value="4">Restuarant</option>
                                <option value="5">University</option>
                                <option value="6">Museum</option>
                                <option value="7">Park</option>

                            </select>
                        </div>
                    </div>
                    <div class="field-row">
                        <div class="field-title">Save</div>
                        <div class="field-content">
                            <input type="submit" value=" save ">
                        </div>
                    </div>
                    <div class="ajax-result"></div>
                </form>
            </div>
        </div>
    </div>


    <script src="<?php echo siteUrl("assets/js/script.js" . "?v=" . rand(1, 9999999)); ?>"></script>

</body>

</html>