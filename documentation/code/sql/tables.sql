CREATE TABLE `fakturalinje` (
  `OrdreNummer` int NOT NULL AUTO_INCREMENT,
  `VareID` int DEFAULT NULL,
  `Antal` int DEFAULT NULL,
  `Pris` decimal(10,2) DEFAULT NULL,
  `Subtotal` decimal(10,2) GENERATED ALWAYS AS ((`Antal` * `Pris`)) VIRTUAL,
  KEY `VareID` (`VareID`),
  KEY `OrdreNummer` (`OrdreNummer`),
  CONSTRAINT `fakturalinje_ibfk_2` FOREIGN KEY (`VareID`) REFERENCES `vare` (`VareID`),
  CONSTRAINT `fakturalinje_ibfk_3` FOREIGN KEY (`OrdreNummer`) REFERENCES `faktura` (`OrdreNummer`)
);


CREATE TABLE participant (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(25),
    Point INT,
    Win INT,
    Loss INT
);

CREATE TABLE typematch (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Grade VARCHAR(15),
    Win_point INT,
    Loss_point INT
);

CREATE TABLE match (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Matchdate DATE,
    Typematch_id INT,
    FOREIGN KEY (Typematch_id) REFERENCES typematch(id)
);


CREATE TABLE score (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Match_id INT,
    FOREIGN KEY (Match_id) REFERENCES match(id),
    Participant_id INT,
    FOREIGN KEY (Participant_id) REFERENCES participant(id),
    Is_winner TINYINT(1) NOT NULL DEFAULT 0
);


CREATE TABLE point_change(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Participant_id INT,
    FOREIGN KEY (Participant_id) REFERENCES participant(id),
    Match_id INT,
    FOREIGN KEY (Match_id) REFERENCES match(id),
    Change INT,
    Reason VARCHAR (255)
);

