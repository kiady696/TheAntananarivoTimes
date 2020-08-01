CREATE TABLE news (
        id int(11) NOT NULL AUTO_INCREMENT,
        title varchar(128) NOT NULL,
        slug varchar(128) NOT NULL,
        text text NOT NULL,
        PRIMARY KEY (id),
        KEY slug (slug)
);

INSERT INTO NEWS VALUES (1,'CVO INEFFICACE','Medicament-cvo-curatif-preventif-est-claque-au-sol','Présenté il y a un mois, ce médicament est nul à chier');
INSERT INTO NEWS VALUES (2,'CVO TSY LASA MITSY EEH!','Medicament-cvo-tsy-lasa-mitsy','Présenté il y a un mois, ce médicament est nul à chier mais vraiment nul de chez nul');

DELETE FROM NEWS;