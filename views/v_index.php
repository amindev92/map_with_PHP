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
                <div class="search-results" style="display: none;">
                    
                </div>
            </div>
        </div>
        <div class="mapContainer">
            <div id="map"></div>
        </div>
        <img src="assets/img/current.png" class="currentLoc">

    </div>

    <div class="modal-overlay" style="display: none;">
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
                                <?php foreach (locationTypes as $index => $item) : ?>
                                    <option value="<?php echo $index; ?>"><?php echo $item; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="field-row">
                        <div class="field-title">Save</div>
                        <div class="field-content">
                            <input type="submit" value="save">
                        </div>
                    </div>
                    <div class="saveResult"></div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="<?php echo siteUrl("assets/js/script.js" . "?v=" . rand(1, 9999999)); ?>"></script>
    <script>
        <?php if ($location) : ?>

            L.marker([<?php echo $location -> lat; ?>,<?php echo $location -> lng; ?>]).addTo(map).bindPopup("<?php echo $location->title; ?>").openPopup();

        <?php endif; ?>
    </script>

</body>

</html>