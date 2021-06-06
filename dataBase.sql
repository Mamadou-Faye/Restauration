-- Host : 127.0.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

-- ceation de ma base de données
CREATE DATABASE restaurant;


-- Création de ma table des produits
CREATE TABLE admin (
	idAdmin int(100) primary key,
	name varchar(100) NOT NULL,
	email varchar(100) UNIQUE KEY NOT NULL,
	password text NOT NULL,
	admin_active enum('0','1') NOT NULL DEFAULT '0'
) ENGINE = InnoDB AUTO_INCREMENT = 9;

-- Insrtion des administrateurs de l'application

INSERT INTO admin (idAdmin, name, email, password, admin_active)
	values(3, "Mamadou Faye", "fayem7409@gmail.com", "fayefaye@20", '0'),
	(4, "faye_faye", "mamadou.faye18@uvs.edu.sn", 'faye@2003', '0');


-- Création de la table clients

CREATE TABLE clients (
	idClient int(200) PRIMARY KEY NOT NULL,
	nom varchar(100) NOT NULL,
	email varchar(50) NOT NULL,
	password varchar(20) NOT NULL,
	telephone varchar(15) NOT NULL,
	adresse varchar(100) NOT NULL
) ENGINE = InnoDB;


-- table réservation ajouter dans les services
CREATE TABLE reservation (
	idReservation int(100) PRIMARY KEY NOT NULL,
	nombre_place int(200) NOT NULL,
	dateReserve date NOT NULL,
	heureReserve time NOT NULL,
	commentaire varchar(255) NOT NULL
);



-- Création de la table pour la list du menu

CREATE TABLE menu (
	numMenu int(100) PRIMARY KEY NOT NULL,
	nom varchar(255) NOT NULL,
	prix float NOT NULL,
	quantity int(100) NOT NULL,
	description varchar(300) NOT NULL 
) ENGINE = InnoDB;

-- Insertion des produits dans menu

INSERT INTO menu (numMenu, nom, prix, quantity, description)
	VALUES(1, "produit_1", 15002.00, 1, "lorem ipsum mon produit"),
	(2, "produit_2", 1425.00, 1, "lorem ipsum mon produit"),
	(3, "produit_3", 6500.00, 1, "lorem ipsum mon produit"),
	(4, "produit_4", 78952.00, 1, "lorem ipsum mon produit"),
	(5, "produit_5", 54000.00, 1, "lorem ipsum mon produit"),
	(6, "produit_6", 6000.00, 1, "lorem ipsum mon produit"),
	(7, "produit_7", 1000.00, 1, "lorem ipsum mon produit"),
	(8, "produit_8", 2500.00, 1, "lorem ipsum mon produit"),
	(9, "produit_9", 3010.00, 1, "lorem ipsum mon produit"),
	(10, "produit_10", 1400.00, 1, "lorem ipsum mon produit"),
	(11, "produit_11", 4000.00, 1, "lorem ipsum mon produit"),
	(12, "produit_12", 3500.00, 1, "lorem ipsum mon produit"),
	(13, "produit_13", 800.00, 11, "lorem ipsum mon produit"),
	(14, "produit_14", 500.00, 1, "lorem ipsum mon produit"),
	(15, "produit_15", 700.00, 1, "lorem ipsum mon produit"),
	(16, "produit_16", 900.00, 1, "lorem ipsum mon produit"),
	(17, "produit_17", 1100.00, 1, "lorem ipsum mon produit"),
	(18, "produit_18", 11100.00, 1, "lorem ipsum mon produit"),
	(19, "produit_19", 5600.00, 1, "lorem ipsum mon produit"),
	(20, "produit_20", 12300.00, 1, "lorem ipsum mon produit"),
	(21, "produit_21", 2100.00, 1, "lorem ipsum mon produit"),
	(22, "produit_22", 8000.00, 1, "lorem ipsum mon produit");


-- Création de la tables des commandes 

CREATE TABLE commande (
	idCom int(100) PRIMARY KEY NOT NULL,
	client_id int(100) NOT NULL,
	prod_id int(100) NOT NULL,
	qte_com int(100) NOT NULL,
	com_total float NOT NULL
) ENGINE = InnoDB;

-- Insertion de quelques commandes

INSERT INTO commande (idCom, client_id, prod_id, qte_com, com_total)
	VALUES(1, 1, 22, 2, 16000.00),
	(2, 1, 21, 3, 6300.00),
	(3, 1, 17, 2, 2200.00);


-- pour la table admin
ALTER TABLE admin 
MODIFY idAdmin int(100) NOT NULL AUTO_INCREMENT;


-- pour la table client
ALTER TABLE clients
MODIFY idClient int(100) NOT NULL AUTO_INCREMENT;


-- pour la table des produits
ALTER TABLE menu 
MODIFY numMenu int(100) NOT NULL AUTO_INCREMENT;


-- pour la table commande
ALTER TABLE commande 
MODIFY idCom int(100) NOT NULL AUTO_INCREMENT;


-- The foreign key for commande
ALTER TABLE commande
ADD KEY fk_commande_client (client_id);


ALTER TABLE commande 
ADD KEY fk_commande_menu (prod_id);


ALTER TABLE commande 
ADD CONSTRAINT fk_commande_client FOREIGN KEY (client_id) REFERENCES clients (idClient),
ADD CONSTRAINT fk_commande_menu FOREIGN KEY (prod_id) REFERENCES menu (numMenu);