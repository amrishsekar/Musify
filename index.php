<?php

session_start();
require 'router.php';

$server = new router();

$server->post("/", "main");
$server->post("/check", "check");
$server->post("/checkUser", "checkUser");
$server->post("/adminHome", "adminHome");
$server->post("/userHome", "userHome");
$server->post("/guestHome", "guestHome");
$server->post("/addSongDetails", "addSongDetails");
$server->post("/listingAllUsers", "listingAllUsers");
$server->post("/allSongs", "allSongs");
$server->post("/searchSongs", "searchSongs");
$server->post("/searchArtists", "searchArtists");
$server->route();