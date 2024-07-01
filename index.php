<?php
require 'config/config.php';
require 'controllers/AlbumController.php';

$album = new Album($pdo);
$controller = new AlbumController($album);
$controller->addAlbum();
$controller->listAlbums();
?>
