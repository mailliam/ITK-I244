#tabeli loomine

CREATE TABLE mkeerus_cats (
    id integer PRIMARY KEY auto_increment,
    name varchar(100) NOT NULL,
    age integer DEFAULT 1,
    gender ENUM('M', 'F') DEFAULT 'M',
    color varchar(200),
    owner_id integer
);

#selekteerimine

SELECT * FROM owners;
SELECT * FROM owners WHERE age<25;
SELECT * FROM owners WHERE age>15 AND age<25;
SELECT firstname, lastname FROM owners WHERE age<25;

#sisestamine

INSERT INTO mkeerus_cats VALUES (NULL, 'Tom', 23, 'M', 'grey', 2);
INSERT INTO mkeerus_cats (name, gender, age, owner_id) VALUES ('Nurri', 'N', 1, '3');
INSERT INTO mkeerus_cats (name, gender, age, color, owner_id) VALUES
('Mamma-mia', 'F', 7, 'triibuline', '3'),
('Prints', 'M', 5, 'mustavalgekirju', '1'),
('Pätu', 'F', 3, 'hall', '4'),
('Kõuts', 'M', 6, 'must', '3');

# uuendamine

UPDATE mkeerus_cats SET gender='F', color='pruun', age=age+1 WHERE name='Nurri';

#sorteerimine

SELECT * FROM mkeerus_cats WHERE gender='f' ORDER BY age DESC;

SELECT * FROM mkeerus_cats LIMIT 2,2; #teisest reast kaks tk Kui ainult üks number, siis alates esimesest reast

SELECT CONCAT(firstname,' ',lastname) as fullname FROM OWNERS;

SELECT count(*), sum(age), max(age), min(age) FROM mkeerus_cats;

SELECT owner_id, count(*) as kasse FROM mkeerus_cats GROUP BY owner_id;

SELECT name, firstname, FROM mkeerus_cats, owners_m;

SELECT name as cat, firstname as owner FROM mkeerus_cats, owners_m
WHERE owners_m.id=mkeerus_cats.owner_id;
