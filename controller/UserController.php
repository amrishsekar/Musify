<?php

require 'model/UserModel.php';

class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        require 'view/commonPage.php';
    }

    public function loginRender()
    {
        if (isset($_POST['admin']) || isset($_POST['user']))
        {
            require 'view/login.php';
        }
        elseif (isset($_POST['guest']))
        {
            require 'view/guestHome.php';
        }
    }

    public function adminRender()
    {
        require 'view/adminHome.php';
    }

    public function userRender()
    {
        require 'view/userHome.php';
    }

    public function checkUser($loginData)
    {
        $this->userModel->checkLoginUser($loginData);
    }

    public function createSong($songData, $songFile)
    {
        $this->userModel->insertSong($songData, $songFile);
    }

    public function usersList()
    {
        $allUser = $this->userModel->listingAllUsers();
        require 'view/listingAllUsers.php';
    }

    public function songsList()
    {
        $allSongs = $this->userModel->listingSongs();
        require 'panels/listingAllSongs.php';
    }

    public function searchSongs($SearchName)
    {
        $searchedSong = $this->userModel->searchSongs($SearchName);
        require 'panels/guestAndUserHome.php';
    }

    public function searchArtist($SearchName)
    {
        $searchedArtist = $this->userModel->searchArtist($SearchName);
        require 'panels/guestAndUserHome.php';
    }
}