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

INSERT INTO players (name, photo_path, nationality, flag_path, club, logo_path, position, rating)
VALUES
('John Smith', '/photos/john_smith.jpg', 'England', '/flags/england.png', 'Manchester United', '/logos/man_utd.png', 'GK', 85),
('David Brown', '/photos/david_brown.jpg', 'France', '/flags/france.png', 'PSG', '/logos/psg.png', 'ST', 90),
('Emily White', '/photos/emily_white.jpg', 'USA', '/flags/usa.png', 'Chelsea', '/logos/chelsea.png', 'CM', 88),
('Liam Johnson', '/photos/liam_johnson.jpg', 'Germany', '/flags/germany.png', 'Bayern Munich', '/logos/bayern.png', 'LB', 84),
('Sophia Martinez', '/photos/sophia_martinez.jpg', 'Spain', '/flags/spain.png', 'Barcelona', '/logos/barcelona.png', 'RW', 89),
('Oliver Davis', '/photos/oliver_davis.jpg', 'Italy', '/flags/italy.png', 'Juventus', '/logos/juventus.png', 'CB', 87),
('Emma Wilson', '/photos/emma_wilson.jpg', 'Brazil', '/flags/brazil.png', 'Real Madrid', '/logos/real_madrid.png', 'LW', 91),
('James Lee', '/photos/james_lee.jpg', 'Netherlands', '/flags/netherlands.png', 'Ajax', '/logos/ajax.png', 'RB', 82),
('Ava Patel', '/photos/ava_patel.jpg', 'India', '/flags/india.png', 'Mumbai City', '/logos/mumbai.png', 'CDM', 80),
('Lucas Zhang', '/photos/lucas_zhang.jpg', 'China', '/flags/china.png', 'Beijing FC', '/logos/beijing_fc.png', 'GK', 83);

INSERT INTO goalkeeper_attributes (player_id, diving, handling, kicking, reflexes, speed, positioning)
VALUES
(1, 88, 86, 84, 90, 65, 85),
(10, 85, 82, 78, 88, 60, 80); 

INSERT INTO outfield_attributes (player_id, shooting, pace, dribbling, defending, physical, passing)
VALUES
(2, 92, 89, 87, 45, 80, 75),
(3, 75, 78, 85, 70, 77, 88),
(4, 55, 72, 68, 80, 84, 70),
(5, 85, 88, 90, 50, 78, 80),
(6, 60, 65, 50, 88, 85, 62),
(7, 90, 92, 89, 45, 79, 76),
(8, 50, 78, 75, 84, 70, 68),
(9, 65, 60, 68, 85, 87, 75);



select * FROM players;

-- DROP DATABASE football_players;