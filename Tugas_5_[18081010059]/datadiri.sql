CREATE TABLE contactPerson(
    id INT(2) AUTO_INCREMENT PRIMARY KEY,
    platform VARCHAR(20) NOT NULL,
    username VARCHAR(30) NOT NULL
);

CREATE TABLE pendidikan(
    id INT(2) AUTO_INCREMENT PRIMARY KEY,
    jenjang VARCHAR(3) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    tahun VARCHAR(4) NOT NULL
);

INSERT INTO contactPerson (platform, username)
VALUES ('telepon', '+62 8785-5630-276'),
('facebook', '@jefriismail99'),
('instagram', '@jefriismail'),
('email', 'jefriismail@netcom.id');

INSERT INTO pendidikan (jenjang, nama, tahun)
VALUES ('SD', 'SDN Putat Jaya V/381 Surabaya', '2012'),
('SMP', 'SMPN 4 Surabaya', '2015'),
('SMA', 'SMAN 6 Surabaya', '2018'),
('S1', 'UPN "Veteran" Jawa Timur', 'now');