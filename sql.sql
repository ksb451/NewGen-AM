-- teachet table create
CREATE TABLE teacher_detail(
  	id INT(11) AUTO_INCREMENT PRIMARY KEY,
  	name VARCHAR(256) NOT NULL,
    username varchar(256) NOT NULL,
    mobile INT(11) NOT NULL,
    email INT(11) NOT NULL,
    pwd VARCHAR(256) NOT NULL,
    otp_data VARCHAR NOT NULL
);

INSERT INTO teacher_detail (name, username, mobile, email, pwd)
VALUES ('Rahul Kala', 'rkala', 7728993605, 'ujjwal24batra@gmail.com', '68478b0d24f10bfb2948e02dd55019fad8003d626b7a52aaee5dd7a3581db28e');


CREATE TABLE subject_detail(
	id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(256) NOT NULL,
    subcode VARCHAR(256) NOT NULL,
    sec varchar(12) NOT NULL,
    room INT(11) NOT NULL,
    m INT(2) NOT NULL,
    t INT(2) NOT NULL,
    w INT(2) NOT NULL,
    th INT(2) NOT NULL,
    f INT(2) NOT NULL
)

INSERT INTO subject_detail (name, subcode, sec, room, m, t, w, th, f)
VALUES ('rkala', 'DSA', 'A', 5006, 1, 0, 1, 0 , 1);

INSERT INTO subject_detail (name, subcode, sec, room, m, t, w, th, f) 
VALUES ('rkala', 'DBMS', 'A', 5008, 1, 1, 1, 0 , 0);

INSERT INTO subject_detail (name, subcode, sec, room, m, t, w, th, f) 
VALUES ('rkala', 'ITP', 'C', 5007, 1, 1, 1, 0 , 1);
