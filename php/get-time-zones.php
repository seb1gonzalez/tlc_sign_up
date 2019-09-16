<?php

//--------------------------------------------------------------------------------------------------
// This script outputs a JSON array of all timezones (like "America/Chicago") that PHP supports.
//
// Requires PHP 5.2.0 or higher.
//--------------------------------------------------------------------------------------------------
$timezone = Array();
array_push($timezone,"America/Denver");
echo json_encode($timezone);