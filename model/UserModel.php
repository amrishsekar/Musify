<?php

class database
{
    public $db;

    public function __construct()
    {
        try
        {
            $this->db = new PDO(
                'mysql:host=localhost;dbname=musify',
                'admin',
                'welcome'
            ) ;
        }
        catch (Exception $e)
        {
            die("Connection failed: ".$e->getMessage());
        }
    }
}

class UserModel extends database
{
    public function checkLoginUser($data)
    {
        $email = $data['email'];
        $password = $data['pwd'];

//        if ($email && $password)
//        {
//            try {
//                $adminUser = $this->db->query("SELECT * FROM users WHERE email = '$email' OR password = '$password' AND is_admin = 1");
//                $adminExists = $adminUser->fetchAll(PDO::FETCH_OBJ);
//
//                if ($adminExists)
//                {
//                    header('location: /adminHome');
//                }
//                else{
//                    header('location: /');
//                }
//            }
//            catch (PDOException $e){
//                die($e->getMessage());
//            }
//        }
//
//

        $loginUser = $this->db->query("SELECT * FROM users WHERE email = '$email' OR password = '$password' AND is_admin = 0");
        $userExists = $loginUser->fetchAll(PDO::FETCH_OBJ);

        if ($userExists)
        {
            header('location: /userHome');
        }
        else
        {
            header('location: /');
        }
    }

    public function insertSong($data, $file)
    {
        $songName = $data['songName'];

        $artistNames = $data['artistName'];
        $name = "";
        switch ($artistNames)
        {
            case "ilayaraja":
                $name = "Ilayaraja";
                break;
            case "anirudh":
                $name = "Anirudh";
                break;
            case "sivakarthikeyan":
                $name = "Sivakarthikeyan";
                break;
        }

        $dir = "songs/";
        $song = $file['audioFile'];
        $songPath = $dir.$song["name"];
        move_uploaded_file($song["tmp_name"], "$songPath");

        $songImages = $file['songImage'];
        $songImagePath = "images/".$songImages["name"];
        move_uploaded_file($songImages["tmp_name"], "$songImagePath");

        $artistImages = $file['artistImage'];
        $artistImagePath = "images/".$artistImages["name"];
        move_uploaded_file($artistImages["tmp_name"], "$artistImagePath");

        if ($songPath)
        {
            $checkSong = $this->db->query("SELECT * FROM songsData  WHERE song_path = '$songPath'");
            $exists = $checkSong->fetchAll(PDO::FETCH_OBJ);
//            var_dump($exists);

            if($exists)
            {
                echo "Song already exists";
            }
            else{
                try {
                    $this->db->query("INSERT INTO songsData(song_name, song_path, song_image, artist_name, artist_image) VALUES ('$songName', '$songPath', '$songImagePath', '$name', '$artistImagePath')");
                    header('location: /adminHome');
                }
                catch (PDOException $e)
                {
                    die("Insertion fail: ".$e->getMessage());
                }
            }
        }
    }

    public function listingAllUsers()
    {
        $allUser = $this->db->query("SELECT * FROM users");
        return $user = $allUser->fetchAll(PDO::FETCH_OBJ);
    }

    public function listingSongs()
    {
        $fetchSongs = $this->db->query("SELECT * FROM songsData");
        return $data = $fetchSongs->fetchAll(PDO::FETCH_OBJ);
    }

    public function searchSongs($name)
    {
        if (isset($_POST['search']))
        {
            $name = $name['searchName'];
            $fetchSearchSong = $this->db->query("SELECT * FROM songsData WHERE song_name LIKE '%$name%'");
            return $fetch = $fetchSearchSong->fetchAll(PDO::FETCH_OBJ);
        }
    }

    public function searchArtist($name)
    {
        if (isset($_POST['search']))
        {
            $name = $name['searchName'];
            $fetchSearchSong = $this->db->query("SELECT * FROM songsData WHERE artist_name LIKE '%$name%'");
            return $fetch = $fetchSearchSong->fetchAll(PDO::FETCH_OBJ);
        }
    }
}