<?php

require 'panels/guestAndUserHome.php';

?>

<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Songs List page</title>
    <!---->
        <style>
            body{
                background-color: #2b2b2b;
            }
        </style>
    <!---->
</head>
<body>

<br>

<form action="/createPlaylist" method="post">
    <button type="submit" class="btn btn-primary">Create Playlist</button>
</form>
<br>
<br>

<a href="/allSongs" class="btn btn-primary">View Songs</a>

</body>
</html>
