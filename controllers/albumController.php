<?php
require_once 'models/Album.php';

class AlbumController {
    private $album;

    public function __construct($album) {
        $this->album = $album;
    }

    public function listAlbums() {
        $albums = Album::getAllAlbums(); // Llama al método estático para obtener todos los álbumes
        include 'views/view_album.php'; // Incluye la vista donde se mostrarán los álbumes
    }

    public function addAlbum() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $artist = $_POST['artist'];
            $style = $_POST['style'];
            $year = $_POST['year'];
            $image = $_FILES['image']['name'];
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($image);
            move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

            if ($this->album->addAlbum($name, $artist, $style, $year, $image)) {
                include 'views/success.php';
            } else {
                echo "Error añadiendo album.";
            }
        } else {
            include 'views/add_album.php';
        }
    }
}
?>
