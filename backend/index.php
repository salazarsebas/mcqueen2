<?php
header('Content-Type: application/json');

$response = [
    "message" => "Hola desde PHP!"
];

echo json_encode($response);
