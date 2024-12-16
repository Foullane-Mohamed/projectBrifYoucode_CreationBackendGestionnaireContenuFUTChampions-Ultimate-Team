CREATE DATABASE football_players;

USE football_players;


CREATE TABLE players (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    photo_path VARCHAR(255),
    nationality VARCHAR(255) NOT NULL,
    flag_path VARCHAR(255),
    club VARCHAR(255) NOT NULL,
    logo_path VARCHAR(255),
    position ENUM('GK', 'CM', 'CB', 'LB', 'RB', 'LW', 'CDM', 'ST', 'RW') NOT NULL,
    plan ENUM('premier', 'deuxieme') NOT NULL,
    rating TINYINT UNSIGNED NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE goalkeeper_attributes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    player_id INT NOT NULL,
    diving TINYINT UNSIGNED,
    handling TINYINT UNSIGNED,
    kicking TINYINT UNSIGNED,
    reflexes TINYINT UNSIGNED,
    speed TINYINT UNSIGNED,
    positioning TINYINT UNSIGNED,
    FOREIGN KEY (player_id) REFERENCES players(id) ON DELETE CASCADE
);


CREATE TABLE outfield_attributes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    player_id INT NOT NULL,
    shooting TINYINT UNSIGNED,
    pace TINYINT UNSIGNED,
    dribbling TINYINT UNSIGNED,
    defending TINYINT UNSIGNED,
    physical TINYINT UNSIGNED,
    passing TINYINT UNSIGNED,
    FOREIGN KEY (player_id) REFERENCES players(id) ON DELETE CASCADE
);


-- Active: 1734305693723@@127.0.0.1@3306@team_foot
CREATE DATABASE team_foot;

USE team_foot;


CREATE TABLE players (
    name VARCHAR(50) NOT NULL,
    photo VARCHAR(300) NOT NULL,
    position VARCHAR(4) NOT NULL,
    nationality VARCHAR(50) NOT NULL,
    flag VARCHAR(300) NOT NULL,
    logo VARCHAR(300) NOT NULL,
    club VARCHAR(50) NOT NULL,
    rating INT NOT NULL,
    pace INT NOT NULL,
    shooting INT NOT NULL,
    passing INT NOT NULL,
    dribbling INT NOT NULL,
    defending INT NOT NULL,
    physical INT NOT NULL
);
CREATE TABLE goal_keepers (
    name VARCHAR(50) NOT NULL,
    photo VARCHAR(300) NOT NULL,
    position VARCHAR(4) NOT NULL,
    nationality VARCHAR(50) NOT NULL,
    flag VARCHAR(300) NOT NULL,
    logo VARCHAR(300) NOT NULL,
    club VARCHAR(50) NOT NULL,
    rating INT NOT NULL,
    diving INT NOT NULL,
    handling INT NOT NULL,
    kicking INT NOT NULL,
    reflexes INT NOT NULL,
    speed INT NOT NULL,
    positioning INT NOT NULL,
);



INSERT INTO players VALUES (
    "med",
    "https://cdn.sofifa.net/players/212/622/25_120.png",
    "ST",
    "Germany",
    "https://cdn.sofifa.net/flags/de.png",
    "Bayern Munich",
    "https://cdn.sofifa.net/meta/team/503/120.png",
    89,
    70,
    75,
    88,
    84,
    89,
    81
);

select * FROM players;