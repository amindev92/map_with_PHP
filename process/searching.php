<?php

include "../bootstrap/init.php";

if (!isAjaxRequest()) {
    displayMessage("Invalid Request!");
}

echo $_POST["keyword"];

if (!isset($_POST["keyword"]) and is_null($_POST["keyword"]) and empty($_POST["keyword"])) {
    echo "Please Type a location name for search ...";
}
$params = $_POST;
// displayInformation($params);
$locations = getLocations($params);
// displayInformation($locations);
foreach ($locations as $location) {
    // echo $location->title;
    echo " <div class='result-item' data-lat='$location->lat' data-lng='$location->lng'>
                            <span class='loc-type'>$location->status</span>
                            <span class='loc-title'>$location->title</span>
                        </div> ";
}
