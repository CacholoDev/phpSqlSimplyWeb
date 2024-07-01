<?php

require_once 'config/config.php';

class Album {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function addAlbum($name, $artist, $style, $year, $image) {
        $stmt = $this->pdo->prepare("INSERT INTO albums (name, artist, style, year, image) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$name, $artist, $style, $year, $image]);
    }

    public static function getAllAlbums() {
        global $pdo;
        $stmt = $pdo->query('SELECT * FROM albums');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
?>
