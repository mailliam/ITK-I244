CREATE TABLE mkeerus_pildid (
    id integer PRIMARY KEY auto_increment,
    thumb varchar(200),
    pilt varchar(200),
    pealkiri varchar(200),
    autor varchar(200),
    punktid integer
);

INSERT INTO mkeerus_pildid (thumb, pilt, pealkiri, autor, punktid) VALUES
('pildid/thumbs/thumb1.jpg', 'pildid/nameless1.jpg','Esimene', 'Tundmatu', '87'),
('pildid/thumbs/thumb2.jpg', 'pildid/nameless2.jpg','Teine', 'Tundmatu', '36'),
('pildid/thumbs/thumb3.jpg', 'pildid/nameless3.jpg','Kolmas', 'Tundmatu', '12'),
('pildid/thumbs/thumb4.jpg', 'pildid/nameless4.jpg','Neljas', 'Tundmatu', '56'),
('pildid/thumbs/thumb5.jpg', 'pildid/nameless5.jpg','Viies', 'Tundmatu', '42'),
('pildid/thumbs/thumb6.jpg', 'pildid/nameless6.jpg','Kuues', 'Tundmatu', '98');

SELECT * FROM mkeerus_pildid WHERE punktid<50 ORDER BY punktid DESC;

UPDATE mkeerus_pildid SET autor='Mari' WHERE id=2;
UPDATE mkeerus_pildid SET autor='Mari' WHERE id=4;
UPDATE mkeerus_pildid SET autor='Jüri' WHERE id=1;
UPDATE mkeerus_pildid SET autor='Jüri' WHERE id=3;
UPDATE mkeerus_pildid SET autor='Jüri' WHERE id=5;
UPDATE mkeerus_pildid SET autor='Karmen' WHERE id=6;

SELECT * FROM mkeerus_pildid WHERE autor='Jüri' ORDER BY punktid DESC;

UPDATE mkeerus_pildid SET punktid=punktid+3;

SELECT autor, COUNT(*) AS 'piltide arv' FROM mkeerus_pildid GROUP BY autor;

SELECT SUM(punktid) FROM mkeerus_pildid;

SELECT autor, AVG(punktid) AS 'Keskmine punktide arv' FROM mkeerus_pildid
GROUP BY autor
ORDER BY punktid DESC;
