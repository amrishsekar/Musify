<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Home page</title>
    <!---->
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #2b2b2b;
        }
        form{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        label{
            color: white;
        }
        li{
            text-align: center;
            color: white;
        }
        h2{
            color: white;
            text-align: center;
        }
        button.btn.btn-primary {
            position: relative;
            top: 5px;
            left: 5px;
        }
    </style>
    <!---->
</head>
<body>
<form action="/searchSongs" method="post">
    <div class="mb-3">
        <label>Search Songs</label>
        <input type="search" name="searchName" class="form-control" placeholder="Search Songs...">
    </div>
    <button type="submit" name="search" class="btn btn-primary">Search</button>
</form>

<div>
    <h2>Song Name</h2>
    <?php foreach ($searchedSong as $name): ?>
        <li><?= $name->song_name ?></li>
    <?php endforeach; ?>
</div>

<form action="/searchArtists" method="post">
    <div class="mb-3">
        <label>Search Artist</label>
        <input type="search" name="searchName" class="form-control" placeholder="Search Artists...">
    </div>
    <button type="submit" name="search" class="btn btn-primary">Search</button>
</form>

<div>
    <h2>Artist Name</h2>
    <?php foreach ($searchedArtist as $name): ?>
        <li><?= $name->artist_name; ?></li>
    <?php endforeach; ?>
</div>

</body>
</html>