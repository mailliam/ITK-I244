CREATE TABLE mkeerus_loomaaed (
    id integer PRIMARY KEY auto_increment,
    nimi text,
    vanus integer,
    liik text,
    puur integer
);

INSERT INTO mkeerus_loomaaed (nimi, vanus, liik, puur) VALUES
('Kunn', 23, 'lõvi', 2),
('Jänn', 6, 'jänes', 1),
('Repsu', 5, 'rebane', 3),
('Hundu', 12, 'hunt', 3),
('Reelika', 20, 'lõvi', 2),
('Bambi', 7, 'metskits', 1),
('Sarvik', 14, 'põder', 1);

SELECT puur, nimi FROM mkeerus_loomaaed WHERE puur=1;

SELECT MIN(vanus) AS 'Noorim', MAX(vanus) AS 'Vanim' FROM mkeerus_loomaaed;

SELECT puur, COUNT(puur) AS 'Loomade arv' FROM mkeerus_loomaaed GROUP BY puur;

UPDATE mkeerus_loomaaed SET vanus=vanus+1;
