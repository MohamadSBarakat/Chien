INSERT INTO Race (nameRace) VALUES 
    ('Labrador'), ('Chihuahua'), ('Berger Allemand'), ('Pit Bull'), ('Teckel'), ('Boxer'), ('Basenji'), ('Bichpoo'), ('Super Rare'), ('Doxle');

INSERT INTO userDog (email, pwd, lastConnectionDate, lastName, firstName, country, city) VALUES 
    ('sabine@realise.ch', '$2y$10$RZvlSXN4j9ufEUA9/mh45Od7dQ0nOPZM3SI2fewLc6vHBlpYEZdKa', '2019-01-01 12:12:12', 'Sabine', 'Palazzotto', 'Suisse', 'Genève'),
    ('ange@realise.ch', '$2y$10$RZvlSXN4j9ufEUA9/mh45Od7dQ0nOPZM3SI2fewLc6vHBlpYEZdKa', '2019-01-01 12:12:12', 'Ange', 'Gnamba', 'Suisse', 'Genève'),
    ('cyril@realise.ch', '$2y$10$RZvlSXN4j9ufEUA9/mh45Od7dQ0nOPZM3SI2fewLc6vHBlpYEZdKa', '2019-01-01 12:12:12', 'Cyril', 'Tekpo', 'Suisse', 'Genève'),
    ('odile@realise.ch', '$2y$10$RZvlSXN4j9ufEUA9/mh45Od7dQ0nOPZM3SI2fewLc6vHBlpYEZdKa', '2019-01-01 12:12:12', 'Odile', 'Bouo', 'Suisse', 'Bern'),
    ('eulalia@realise.ch', '$2y$10$RZvlSXN4j9ufEUA9/mh45Od7dQ0nOPZM3SI2fewLc6vHBlpYEZdKa', '2019-01-01 12:12:12', 'Eulalia', 'Bottelho', 'Suisse', 'Bern'),
    ('marine@realise.ch', '$2y$10$RZvlSXN4j9ufEUA9/mh45Od7dQ0nOPZM3SI2fewLc6vHBlpYEZdKa', '2019-01-01 12:12:32', 'Marine', 'Cerdelli', 'Suisse', 'Genève'),
    ('melodie@realise.ch', '$2y$10$RZvlSXN4j9ufEUA9/mh45Od7dQ0nOPZM3SI2fewLc6vHBlpYEZdKa', '2019-01-01 12:12:12', 'Melodie', 'Kenkalite', 'Suisse', 'Vaud'),
    ('mohamad@realise.ch', '$2y$10$RZvlSXN4j9ufEUA9/mh45Od7dQ0nOPZM3SI2fewLc6vHBlpYEZdKa', '2019-01-01 12:12:12', 'Mohamad', 'Mabarak', 'Suisse', 'Valais'),
    ('paolo@realise.ch', '$2y$10$RZvlSXN4j9ufEUA9/mh45Od7dQ0nOPZM3SI2fewLc6vHBlpYEZdKa', '2019-01-01 12:12:12', 'Paolo', 'Palazzotto', 'Suisse', 'Vaud'),
    ('pauline@realise.ch', '$2y$10$RZvlSXN4j9ufEUA9/mh45Od7dQ0nOPZM3SI2fewLc6vHBlpYEZdKa', '2019-01-01 12:12:12', 'Pauline', 'Dubois', 'Suisse', 'Valais'),
    ('rodney@realise.ch', '$2y$10$RZvlSXN4j9ufEUA9/mh45Od7dQ0nOPZM3SI2fewLc6vHBlpYEZdKa', '2019-01-01 12:12:12', 'Rodney', 'Massima', 'Suisse', 'Fribourg'),
    ('walid@realise.ch', '$2y$10$RZvlSXN4j9ufEUA9/mh45Od7dQ0nOPZM3SI2fewLc6vHBlpYEZdKa', '2019-01-01 12:12:12', 'Walid', 'Affin', 'Suisse', 'Zurich')
;

INSERT INTO Dog (nickName, birthday, picture, userId) VALUES 
    ('anjuide', '2018-01-12', 'anjuide.jpeg', '2'),
    ('didi', '2018-02-11', 'didi.jpeg', '4'),
    ('lulu', '2018-03-10', 'lulu.jpeg', '5'),
    ('mareine', '2018-04-09', 'mareine.jpeg', '6'),
    ('abio', '2018-05-08', 'abio.jpeg', '1'),
    ('paupau', '2018-06-07', 'paupau.jpeg', '10'),
    ('pao', '2018-07-06', 'pao.jpeg', '9'),
    ('angel', '2018-08-05', 'angel.jpeg', '2'),
    ('abibi', '2018-09-04', 'abibi.jpeg', '1'),
    ('wale', '2018-10-03', 'wale.jpeg', '12'),
    ('dixie', '2018-11-02', 'dixie.jpeg', '4'),
    ('manou', '2018-12-01', 'manou.jpeg', '6'),
    ('cycy', '2018-12-01', 'cycy.jpeg', '3'),
    ('paopao', '2018-11-02', 'paopao.jpeg', '9'),
    ('mel', '2018-10-03', 'mel.jpeg', '7'),
    ('rod', '2018-09-04', 'rod.jpeg', '11'),
    ('marou', '2018-08-05', 'marou.jpeg', '6'),
    ('momo', '2018-07-06', 'momo.jpeg', '8'),
    ('ajax', '2018-06-07', 'ajax.jpeg', '2'),
    ('mimi', '2018-05-08', 'mimi.jpeg', '8'),
    ('moimoi', '2018-04-09', 'moimoi.jpeg', '8'),
    ('cyhy', '2018-03-10', 'cyhy.jpeg', '3')
;

INSERT INTO DogRace (dogId, raceId) VALUES 
    ('1', '1'),
    ('2', '2'),
    ('3', '2'),
    ('4', '2'),
    ('5', '3'),
    ('6', '3'),
    ('7', '3'),
    ('8', '4'),
    ('9', '4'),
    ('10', '4'),
    ('11', '4'),
    ('12', '5'),
    ('13', '6'),
    ('14', '6'),
    ('15', '7'),
    ('16', '7'),
    ('17', '7'),
    ('18', '8'),
    ('19', '8'),
    ('20', '9'),
    ('21', '10'),
    ('22', '10')
;
INSERT INTO Article (title, picture, description, publicationDate, dogId) VALUES 
    ('ange', 'abio_article1.jpeg', 'Ange a un chien qui s''appel anjuide', '2019-01-01 09:05:00', '5'),
    ('Marine', 'abio_article2.jpeg', 'Marine a un chien qui s''appel mareine', '2019-02-11 05:05:05', '5'),
    ('Youka', 'abio_article3.jpeg', 'Youka a un chien qui s''appel youyou', '2019-01-03 13:25:10', '5'),
    ('Eulalia', 'abio_article4.jpeg', 'Eulalia a un chien qui s''appel lulu', '2019-01-01 15:25:20', '5'),
    ('Alessandro', 'abio_article5.jpeg', 'Alessandro a un chien qui s''appel porci', '2019-01-02 09:15:10', '5'),
    ('Odile', 'abio_article6.jpeg', 'Odile a un chien qui s''appel didi', '2019-01-05 11:15:00', '5'),

    ('Youka', 'anjuide_article1.jpeg', 'Youka a un chien qui s''appel youyou', '2019-02-03 07:10:00', '1'),
    ('Eulalia', 'anjuide_article2.jpeg', 'Eulalia a un chien qui s''appel lulu', '2019-02-15 09:06:00', '1'),
    ('Alessandro', 'anjuide_article3.jpeg', 'Alessandro a un chien qui s''appel porci', '2019-02-13 14:00:00', '1'),
    ('Odile', 'anjuide_article4.jpeg', 'Odile a un chien qui s''appel didi', '2019-02-15 16:00:00', '1'),

    ('Youka', 'angel_article1.jpeg', 'Youka a un chien qui s''appel youyou', '2019-01-21 15:10:15', '8'),
    ('Eulalia', 'angel_article2.jpeg', 'Eulalia a un chien qui s''appel lulu', '2019-01-07 11:05:20', '8'),
    ('Alessandro', 'angel_article3.jpeg', 'Alessandro a un chien qui s''appel porci', '2019-02-15 13:10:15', '8'),
    ('Odile', 'angel_article4.jpeg', 'Odile a un chien qui s''appel didi', '2019-02-09 19:05:20', '8'),

    ('Alessandro', 'ajax_article1.jpeg', 'Alessandro a un chien qui s''appel porci', '2019-02-15 13:10:15', '19'),
    ('Odile', 'ajax_article2.jpeg', 'Odile a un chien qui s''appel didi', '2019-02-09 19:05:20', '19'),

    ('Alessandro', 'cycy_article1.jpeg', 'Alessandro a un chien qui s''appel porci', '2019-02-15 13:10:15', '13'),
    ('Odile', 'cycy_article2.jpeg', 'Odile a un chien qui s''appel didi', '2019-02-09 19:05:20', '13'),

    ('Youka', 'didi_article1.jpeg', 'Youka a un chien qui s''appel youyou', '2019-01-21 15:10:15', '2'),
    ('Eulalia', 'didi_article2.jpeg', 'Eulalia a un chien qui s''appel lulu', '2019-01-07 11:05:20', '2'),
    ('Alessandro', 'didi_article3.jpeg', 'Alessandro a un chien qui s''appel porci', '2019-02-15 13:10:15', '2'),
    ('Odile', 'didi_article4.jpeg', 'Odile a un chien qui s''appel didi', '2019-02-09 19:05:20', '2'),

    ('ange', 'lulu_article1.jpeg', 'Ange a un chien qui s''appel anjuide', '2019-01-01 09:05:00', '3'),
    ('Marine', 'lulu_article2.jpeg', 'Marine a un chien qui s''appel mareine', '2019-02-11 05:05:05', '3'),
    ('Youka', 'lulu_article3.jpeg', 'Youka a un chien qui s''appel youyou', '2019-01-03 13:25:10', '3'),
    ('Eulalia', 'lulu_article4.jpeg', 'Eulalia a un chien qui s''appel lulu', '2019-01-01 15:25:20', '3'),
    ('Alessandro', 'lulu_article5.jpeg', 'Alessandro a un chien qui s''appel porci', '2019-01-02 09:15:10', '3'),
    ('Odile', 'lulu_article6.jpeg', 'Odile a un chien qui s''appel didi', '2019-01-05 11:15:00', '3'),

    ('Youka', 'manou_article1.jpeg', 'Youka a un chien qui s''appel youyou', '2019-01-21 15:10:15', '12'),
    ('Eulalia', 'manou_article2.jpeg', 'Eulalia a un chien qui s''appel lulu', '2019-01-07 11:05:20', '12'),
    ('Alessandro', 'manou_article3.jpeg', 'Alessandro a un chien qui s''appel porci', '2019-02-15 13:10:15', '12'),

    ('Youka', 'marou_article1.jpeg', 'Youka a un chien qui s''appel youyou', '2019-01-21 15:10:15', '17'),
    ('Eulalia', 'marou_article2.jpeg', 'Eulalia a un chien qui s''appel lulu', '2019-01-07 11:05:20', '17'),
    ('Alessandro', 'marou_article3.jpeg', 'Alessandro a un chien qui s''appel porci', '2019-02-15 13:10:15', '17'),
    ('Odile', 'marou_article4.jpeg', 'Odile a un chien qui s''appel didi', '2019-02-09 19:05:20', '17'),

    ('Youka', 'mel_article1.jpeg', 'Youka a un chien qui s''appel youyou', '2019-01-21 15:10:15', '15'),

    ('Youka', 'momo_article1.jpeg', 'Youka a un chien qui s''appel youyou', '2019-01-21 15:10:15', '18'),

    ('Youka', 'mimi_article1.jpeg', 'Youka a un chien qui s''appel youyou', '2019-01-21 15:10:15', '20'),
    ('Eulalia', 'mimi_article2.jpeg', 'Eulalia a un chien qui s''appel lulu', '2019-01-07 11:05:20', '20'),
    ('Alessandro', 'mimi_article3.jpeg', 'Alessandro a un chien qui s''appel porci', '2019-02-15 13:10:15', '20'),

    ('Youka', 'moimoi_article1.jpeg', 'Youka a un chien qui s''appel youyou', '2019-01-21 15:10:15', '21'),
    ('Eulalia', 'moimoi_article2.jpeg', 'Eulalia a un chien qui s''appel lulu', '2019-01-07 11:05:20', '21'),
    ('Alessandro', 'moimoi_article3.jpeg', 'Alessandro a un chien qui s''appel porci', '2019-02-15 13:10:15', '21'),

    ('Youka', 'pao_article1.jpeg', 'Youka a un chien qui s''appel youyou', '2019-01-21 15:10:15', '7'),

    ('Youka', 'paopao_article1.jpeg', 'Youka a un chien qui s''appel youyou', '2019-01-21 15:10:15', '14'),
    ('Eulalia', 'paopao_article2.jpeg', 'Eulalia a un chien qui s''appel lulu', '2019-01-07 11:05:20', '14'),
    ('Alessandro', 'paopao_article3.jpeg', 'Alessandro a un chien qui s''appel porci', '2019-02-15 13:10:15', '14'),

    ('Youka', 'rod_article1.jpeg', 'Youka a un chien qui s''appel youyou', '2019-01-21 15:10:15', '16'),
    ('Eulalia', 'rod_article2.jpeg', 'Eulalia a un chien qui s''appel lulu', '2019-01-07 11:05:20', '16'),
    ('Alessandro', 'rod_article3.jpeg', 'Alessandro a un chien qui s''appel porci', '2019-02-15 13:10:15', '16'),
    ('Odile', 'rod_article4.jpeg', 'Odile a un chien qui s''appel didi', '2019-02-09 19:05:20', '16'),

    ('Youka', 'pao_article1.jpeg', 'Youka a un chien qui s''appel youyou', '2019-01-21 15:10:15', '10'),

    ('Youka', 'pao_article1.jpeg', 'Youka a un chien qui s''appel youyou', '2019-01-21 15:10:15', '7')
;

INSERT INTO Comment (comment, publicationDate, articleId, userId) VALUES 
    ('joli', '2019-01-08 05:21:24', '1', '1'),
    ('beau', '2019-01-08 05:21:24', '2', '1'),
    ('pas mal', '2019-01-08 05:21:24', '3', '1'),
    ('Il vient d''où?','2019-01-08 05:21:24', '4', '1'),
    ('Joli', '2019-01-08 05:21:24', '5', '1'),
    ('Joli toutou', '2019-01-08 05:21:24', '6', '1'),
    ('Beau toutou', '2019-01-08 05:21:24', '7', '1'),
    ('Il te ressemble', '2019-01-08 05:21:24', '8', '1'),
    ('Il est pas beau', '2019-01-08 05:21:24', '9', '1'),
    ('Non', '2019-01-08 05:21:24', '10', '1'),
    ('Pk?', '2019-01-08 05:21:24', '1', '1'),
    ('J''admire', '2019-01-08 05:21:24', '2', '1'),
    ('Quoi?', '2019-01-08 05:21:24', '3', '1'),
    ('Allo!', '2019-01-08 05:21:24', '4', '1'),
    ('Magnifique', '2019-01-08 05:21:24', '5', '1')
;



