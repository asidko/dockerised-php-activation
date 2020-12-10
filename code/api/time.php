<?php
header('Content-Type: application/json');

$dt = new DateTime('2010-12-30 23:21:46');
$dt->setTimezone(new DateTimeZone('UTC'));
$time = $dt->format('Y-m-d\TH:i\Z');

echo json_encode(["currentDateTime" => $time]);