<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Album</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <div class="container">
    <h1>Añadir un nuevo Album</h1>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <label for="name">Nombre del album:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="artist">Artista/Grupo:</label>
        <input type="text" id="artist" name="artist" required><br>

        <label for="style">Estilo:</label>
        <input type="text" id="style" name="style" required><br>

        <label for="year">Año:</label>
        <input type="Date" id="year" name="year" required><br>

        <label for="image">Imagen:</label>
        <input type="file" id="image" name="image" required><br>

        <!--<input type="submit" value="Add Album">  -->
        <button type="submit" style="font-weight: bold;" class="btn btn-outline-dark" value="Add Album">Add Album</button>
    </form>

    </div>
    <script src="./js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
