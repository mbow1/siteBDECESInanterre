INSERT INTO boiteidee (Titre_Idee, Description_Idee)
	VALUES
    ('Après-midi LAN', 'Venez au CESI jeudi 8 février pour une grande après midi LAN ! Concours de FIFA et Fortnite sont attendus'),
    ('Club dramatique', 'Le club d\'art dramatique du CESI nanterre se rassemble à nouveau tout le monde est bienvenue ! Venez nombreux !'),
    ('Tournoi de foot', 'Venez tater du ballon rond durant toute une après-midi pour gagner un panini chez Ali'),
    ('Initiation Jeu de rôle', 'Le club JdR est disposé à vous accueillir tout les jeudis pour des aventures passionantes ! Ce jeudi le club JdR ouvrira ses portes avec des sessions plus courtes que les sessions habituelles afin de vous faire découvrir le monde du JdR dans ');


INSERT INTO evenement (Titre_Event, Description_Event, DateEvent)
	VALUES
    ('Après-midi LAN', 'Venez au CESI jeudi 8 février pour une grande après midi LAN ! Concours de FIFA et Fortnite sont attendus', '2018-02-08 13:30:00'),
    ('Club dramatique', 'Le club d\'art dramatique du CESI nanterre se rassemble à nouveau tout le monde est bienvenue ! Venez nombreux !', '2018-02-15 13:00:00'),
    ('Tournoi de foot', 'Venez tater du ballon rond durant toute une après-midi pour gagner un panini chez Ali', '2018-02-15 14:00:00'),
    ('Initiation Jeu de rôle', 'Le club JdR est disposé à vous accueillir tout les jeudis pour des aventures passionantes ! Ce jeudi le club JdR ouvrira ses portes avec des sessions plus courtes que les sessions habituelles afin de vous faire découvrir le monde du JdR dans ', '2018-02-22 13:30:00');


INSERT INTO   user (Nom_User, Prenom_User,AdresseMail_User,MotDePasse_User,Statut) Values

('CIMBERT','Dylan-Bruce','dylanbruce@viacesi.fr','LeSatffboss46',3),
('Donavo','Micky','donavomicky@viacesi.fr','Etudiant125',2),
('Muerte','Mor','muertemor@viacesi.fr','Lamuerte12',1),
('Zacki','Michel','zackimichel@viacesi.fr','Etudiant146',1),
('Moriane','Ghislaine','ghislainemoria@viacesi.fr','LeSatffboss289',2),
('Doriono','Dodo','dorionododo@viacesi.fr','BDEde246',3),
('Baka','Benjamin','benjaminbaka@viacesi.fr','LeSatffbs4512',1),
('Gogo','Polo','gogopolo@viacesi.fr','Ledobo14',3),
('golant','Chloe','golantchloe@viacesi.fr','Jesuislavaleurgout14',1),
('koko','dakotin','kokodakotin@viacesi.fr','Yugioh4',2),
('Aototi','Cornelio','aototicornelio@viacesi.fr','Craftwo9',1);


INSERT INTO type (Type_Event)
	VALUES
    ('payant'),
    ('gratuit'),
    ('ponctuelle'),
    ('récurrent');

INSERT INTO commentaire(Com)
VALUES
('il est bien cette événement'),
('Comment a-t-il réussit à participer à ce laser-game ),
('respect  tu as mérité cette victoire );

insert into produit(Nom_Produit,Image_Produit,Description_Produit,Prix_Produit)
VALUES
('pantalonVS','C:\wamp64\\www\\TestWeb\\pantalonCesi.jpg','Le pantalon est flockée avec le logo du cesi.Il est super pratique ,léger et souple',11),
('porte-clé','C:\wamp64\\www\\TestWeb\\porteCle.jpg','Le porte-clé est en argent très solide.Il a le symbole du Cesi en couleur bleu.Indispensable pour tous les fans du cesi',3),
('DVD Cesi','C:\\wamp64\\www\\TestWeb\\DvD.jpg','Vous avez beaucoup de chance, voici le DVD de la competition entre le Cesi et les meilleurs écoles supérieurs.Il contient énormement de souvenir sur notre victoire écrasante.',6),
('T-shirtEx','C:\\wamp64\\www\\TestWeb\\Shirt.jpg','Voici  le fameux T-shirt conçue par notre meilleur designer Rayan ,composé du logo Exia avec des dessins très bien détaillé',10);
