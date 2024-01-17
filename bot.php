<?php
// Function to load and display the URL content
function loadURL($url) {
    $content = file_get_contents($url);
    echo $content;
}

// URL to be loaded
$url = "https://sites.google.com/view/direct-link-test01-adsterra/d-l-adsterra-ads-test02";

// Loop to continuously load and refresh the URL every 3 minutes
while (true) {
    loadURL($url);
    sleep(180); // Sleep for 180 seconds (3 minutes)
}
?>
