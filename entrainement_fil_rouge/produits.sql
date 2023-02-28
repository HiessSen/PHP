-- Creation de la base de donnée
CREATE DATABASE IF NOT EXISTS BDDProjetFilRouge;

-- Création de la table 'produit'
CREATE TABLE IF NOT EXISTS produits
(
  idRecette int PRIMARY KEY,
  titre varchar[255] NOT NULL,
  sousTitre varchar [255],
  image,
  marque,
  prix,
  description
)