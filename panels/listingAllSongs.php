<html>
<head>
    <title>Songs list</title>
    <style>
        .allSongs{
            display: flex;
            justify-content: start;
            color: white;
            gap: 20px;
        }
        .detail{
            padding: 10px;
            background-color: #444040;
        }
    </style>
</head>
<body>
<h1>List of Songs</h1>
<div class="allSongs">
    <?php foreach ($allSongs as $songData): ?>
        <div class="detail">
            <h4><?= $songData->song_name; ?></h4>
            <audio controls>
                <source src="<?php echo $songData->song_path; ?>">
            </audio><br>
            <img class="img" height="100px" width="100px" src="<?php echo $songData->song_image; ?>">
            <h3><?= $songData->artist_name; ?></h3>
            <img height="100px" width="100px" src="<?= $songData->artist_image ?>">
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>