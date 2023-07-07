CREATE DATABASE musify;

USE musify;

CREATE TABLE users(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),
    is_admin INT,
    created_at timestamp,
    updated_at timestamp
);
insert into users(name, email, password, is_admin, created_at, updated_at) VALUES
("Amrish", "amrishsekar@gmail.com", "amrish@123", 1, now(), now()),
("Rehan", "usamarehan@gmail.com", "rehan@1994", 1, now(), now()),
("Fury", "furythetravellar@gmail.com", "fury@travel25", 0, now(), now()),
("Gokul", "gokulpeace143@gmail.com", "gokul@143", 0, now(), now()),
("Vinith", "vinithkrishnan@gmail.com", "vinu@anger", 0, now(), now()),
("Sunil", "sunilmithran@gmail.com", "sunil@musify", 0, now(), now());

CREATE TABLE songsData(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    song_name VARCHAR(255),
    song_path VARCHAR(255),
    song_image VARCHAR(255),
    artist_name VARCHAR(255),
    artist_image VARCHAR(255),
    created_at timestamp,
    updated_at timestamp
);