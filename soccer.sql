CREATE TABLE schedule (
    id int NOT NULL,
    date date,
    time time,
    week varchar(25),
    team1 varchar(50), 
	vs varchar(1),
	team2 varchar(50),
	PRIMARY KEY(ID)
);