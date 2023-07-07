<html>
<head>
    <title>Admin Home Page</title>
</head>
<body>
<h2>Hello Admin</h2>

<form action="/addSongDetails" method="post" enctype="multipart/form-data">
    <div class="detail"><label>Song</label> <input type="text" name="songName" placeholder="Enter song name..."></div><br>
    <div class="detail"><label>Song Path</label> <input type="file" name="audioFile"></div><br>
    <div class="detail"><label>Song Image</label> <input type="file" name="songImage"></div><br>
    <div class="detail">
        <label>Artist name</label>
        <select name="artistName">
            <option value="ilayaraja">Ilayaraja</option>
            <option value="anirudh">Anirudh</option>
            <option value="sivakarthikeyan">Sivakarthikeyan</option>
        </select>
    </div><br>
    <div class="detail"><label>Artist Image</label> <input type="file" name="artistImage"></div><br><br>

    <button type="submit" name="save">Create</button>
</form>

<form action="/listingAllUsers" method="post">
    <button type="submit">All Users</button>
</form>

<form action="/allSongs" method="post">
    <button type="submit">All Songs</button>
</form>

</body>
</html>