<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Album</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <div class="container">
    <div class="album-list">
            <h2>Albums Creados</h2>
            <?php
            // Aquí el código PHP para recuperar y mostrar los álbumes desde la base de datos
            ?>
         <ul>
        <?php if (!empty($albums)): ?>
            <?php foreach ($albums as $album): ?>
                <li><?php echo htmlspecialchars($album['name']) ?> - <?php echo htmlspecialchars($album['artist']) ?></li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>Sin albumes.</li>
        <?php endif; ?>
    </ul>
        </div>
    </div>
    </div>
    <script src="./js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
