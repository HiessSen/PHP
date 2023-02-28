-- Creation de la base de donnée
CREATE DATABASE IF NOT EXISTS BDDProjetFilRouge;

-- Création de la table 'utilisateur'
CREATE TABLE IF NOT EXISTS utilisateur
(
  id int PRIMARY KEY,
  nom varchar[255] NOT NULL,
  prenom varchar [255]
)