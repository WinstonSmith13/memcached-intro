<?php
// Vérifiez si l'extension Memcached est chargée
if (!class_exists('Memcached')) {
    die("L'extension Memcached n'est pas installée ou activée.");
}

$memcached = new Memcached();
$memcached->addServer('127.0.0.1', 11211);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $key = $_POST['key'];
    $value = $_POST['value'];
    $memcached->set($key, $value, 3600);
    echo json_encode(["status" => "success", "message" => "Data stored in cache"]);
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $key = $_GET['key'];
    $value = $memcached->get($key);
    if ($value) {
        echo json_encode(["status" => "success", "data" => $value]);
    } else {
        echo json_encode(["status" => "error", "message" => "Data not found in cache"]);
    }
}
?>
