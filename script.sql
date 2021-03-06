-- MySQL Script generated by MySQL Workbench
-- Fri Jan 13 10:37:32 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema yearl_madera
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema yearl_madera
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `yearl_madera` DEFAULT CHARACTER SET utf8 ;
USE `yearl_madera` ;

-- -----------------------------------------------------
-- Table `yearl_madera`.`Insee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yearl_madera`.`Insee` (
  `idInsee` INT NOT NULL,
  `nomVille` VARCHAR(100) NULL,
  `codePostal` VARCHAR(45) NULL,
  PRIMARY KEY (`idInsee`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yearl_madera`.`Client`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yearl_madera`.`Client` (
  `idClient` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NOT NULL,
  `prenom` VARCHAR(45) NOT NULL,
  `adresse` VARCHAR(100) NOT NULL,
  `ville` VARCHAR(45) NULL,
  `codePostal` INT NULL,
  `telephone` VARCHAR(45) NULL,
  `mail` VARCHAR(100) NULL,
  `Ville_idVille` INT NOT NULL,
  PRIMARY KEY (`idClient`, `Ville_idVille`),
  INDEX `fk_Client_Ville1_idx` (`Ville_idVille` ASC),
  CONSTRAINT `fk_Client_Ville1`
    FOREIGN KEY (`Ville_idVille`)
    REFERENCES `yearl_madera`.`Insee` (`idInsee`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yearl_madera`.`Livraison`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yearl_madera`.`Livraison` (
  `idLivraison` INT NOT NULL AUTO_INCREMENT,
  `dateLivraison` DATE NULL,
  `destination` VARCHAR(70) NULL,
  `transporteur` VARCHAR(70) NULL,
  PRIMARY KEY (`idLivraison`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yearl_madera`.`Commande`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yearl_madera`.`Commande` (
  `idCommande` INT NOT NULL AUTO_INCREMENT,
  `Livraison_idLivraison` INT NOT NULL,
  `dateCommande` DATE NULL,
  `vendeur` VARCHAR(45) NULL,
  `montant` DOUBLE NULL,
  PRIMARY KEY (`idCommande`, `Livraison_idLivraison`),
  INDEX `fk_Commande_Livraison1_idx` (`Livraison_idLivraison` ASC),
  CONSTRAINT `fk_Commande_Livraison1`
    FOREIGN KEY (`Livraison_idLivraison`)
    REFERENCES `yearl_madera`.`Livraison` (`idLivraison`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yearl_madera`.`Devis`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yearl_madera`.`Devis` (
  `idDevis` INT NOT NULL AUTO_INCREMENT,
  `Commande_idCommande` INT NOT NULL,
  `type` VARCHAR(45) NULL,
  `etat` VARCHAR(45) NULL,
  PRIMARY KEY (`idDevis`, `Commande_idCommande`),
  INDEX `fk_Devis_Commande1_idx1` (`Commande_idCommande` ASC),
  CONSTRAINT `fk_Devis_Commande1`
    FOREIGN KEY (`Commande_idCommande`)
    REFERENCES `yearl_madera`.`Commande` (`idCommande`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yearl_madera`.`Projet`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yearl_madera`.`Projet` (
  `idProjet` INT NOT NULL AUTO_INCREMENT,
  `idClient` INT NOT NULL,
  `Devis_idDevis` INT NOT NULL,
  `description` VARCHAR(500) NULL,
  `dateCreationProjet` DATE NOT NULL,
  PRIMARY KEY (`idProjet`, `idClient`, `Devis_idDevis`),
  INDEX `fk_Projet_Client1_idx` (`idClient` ASC),
  INDEX `fk_Projet_Devis2_idx` (`Devis_idDevis` ASC),
  CONSTRAINT `fk_Projet_Client1`
    FOREIGN KEY (`idClient`)
    REFERENCES `yearl_madera`.`Client` (`idClient`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Projet_Devis2`
    FOREIGN KEY (`Devis_idDevis`)
    REFERENCES `yearl_madera`.`Devis` (`idDevis`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yearl_madera`.`Gamme`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yearl_madera`.`Gamme` (
  `idGamme` INT NOT NULL AUTO_INCREMENT,
  `regleCalcul` VARCHAR(45) NULL,
  `nom` VARCHAR(45) NOT NULL,
  `finitionExterieur` VARCHAR(45) NULL,
  `typeIsolant` VARCHAR(45) NULL,
  `couverture` VARCHAR(45) NULL,
  `qualiteHuisserie` VARCHAR(45) NULL,
  PRIMARY KEY (`idGamme`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yearl_madera`.`Module`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yearl_madera`.`Module` (
  `idModule` INT NOT NULL AUTO_INCREMENT,
  `Gamme_idGamme` INT NOT NULL,
  `Unite` VARCHAR(45) NULL,
  `Nature` VARCHAR(45) NULL,
  `Epaisseur` VARCHAR(45) NULL,
  `longueur` DOUBLE NULL,
  `hauteur` DOUBLE NULL,
  `angleEntrant` DOUBLE NULL,
  `angleSortant` DOUBLE NULL,
  PRIMARY KEY (`idModule`, `Gamme_idGamme`),
  INDEX `fk_Module_Gamme1_idx` (`Gamme_idGamme` ASC),
  CONSTRAINT `fk_Module_Gamme1`
    FOREIGN KEY (`Gamme_idGamme`)
    REFERENCES `yearl_madera`.`Gamme` (`idGamme`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yearl_madera`.`Fournisseur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yearl_madera`.`Fournisseur` (
  `idFournisseur` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NOT NULL,
  `adresseMail` VARCHAR(45) NULL,
  `adresse` VARCHAR(45) NULL,
  PRIMARY KEY (`idFournisseur`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yearl_madera`.`FamilleComposant`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yearl_madera`.`FamilleComposant` (
  `idFamilleComposant` INT NOT NULL,
  `nom` VARCHAR(45) NULL,
  PRIMARY KEY (`idFamilleComposant`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yearl_madera`.`Composant`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yearl_madera`.`Composant` (
  `idComposant` INT NOT NULL AUTO_INCREMENT,
  `Fournisseur_idFournisseur` INT NOT NULL,
  `FamilleComposant_idFamilleComposant` INT NOT NULL,
  `Unite` VARCHAR(45) NULL,
  `Module_idModule` INT NOT NULL,
  `Nature` VARCHAR(45) NULL,
  `section` DOUBLE NULL,
  `longueur` DOUBLE NULL,
  `largeur` DOUBLE NULL,
  `epaisseur` DOUBLE NULL,
  `prix` DOUBLE NULL,
  `pourcentageCommerciaux` DOUBLE NULL,
  `pourcentageEntreprise` DOUBLE NULL,
  `quantite` INT NULL,
  PRIMARY KEY (`idComposant`, `Fournisseur_idFournisseur`, `FamilleComposant_idFamilleComposant`, `Module_idModule`),
  INDEX `fk_Composant_Fournisseur1_idx` (`Fournisseur_idFournisseur` ASC),
  INDEX `fk_Composant_FamilleComposant1_idx` (`FamilleComposant_idFamilleComposant` ASC),
  INDEX `fk_Composant_Module1_idx` (`Module_idModule` ASC),
  CONSTRAINT `fk_Composant_Fournisseur1`
    FOREIGN KEY (`Fournisseur_idFournisseur`)
    REFERENCES `yearl_madera`.`Fournisseur` (`idFournisseur`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Composant_FamilleComposant1`
    FOREIGN KEY (`FamilleComposant_idFamilleComposant`)
    REFERENCES `yearl_madera`.`FamilleComposant` (`idFamilleComposant`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Composant_Module1`
    FOREIGN KEY (`Module_idModule`)
    REFERENCES `yearl_madera`.`Module` (`idModule`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yearl_madera`.`TypeUtilisateur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yearl_madera`.`TypeUtilisateur` (
  `idTypeUtilisateur` INT NOT NULL,
  `Type` VARCHAR(45) NULL,
  PRIMARY KEY (`idTypeUtilisateur`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yearl_madera`.`Utilisateur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yearl_madera`.`Utilisateur` (
  `idUtilisateur` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(45) NOT NULL,
  `mdp` VARCHAR(45) NOT NULL,
  `TypeUtilisateur_idTypeUtilisateur` INT NOT NULL,
  `nom` VARCHAR(45) NULL,
  `prenom` VARCHAR(45) NULL,
  `mail` VARCHAR(100) NULL,
  PRIMARY KEY (`idUtilisateur`, `TypeUtilisateur_idTypeUtilisateur`),
  INDEX `fk_Utilisateur_TypeUtilisateur1_idx` (`TypeUtilisateur_idTypeUtilisateur` ASC),
  CONSTRAINT `fk_Utilisateur_TypeUtilisateur1`
    FOREIGN KEY (`TypeUtilisateur_idTypeUtilisateur`)
    REFERENCES `yearl_madera`.`TypeUtilisateur` (`idTypeUtilisateur`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yearl_madera`.`Produit`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yearl_madera`.`Produit` (
  `idProduit` INT NOT NULL AUTO_INCREMENT,
  `nomProduit` VARCHAR(70) NULL,
  `Projet_idProjet` INT NOT NULL,
  `Gamme_idGamme` INT NOT NULL,
  PRIMARY KEY (`idProduit`, `Projet_idProjet`, `Gamme_idGamme`),
  INDEX `fk_Produit_Projet1_idx` (`Projet_idProjet` ASC),
  INDEX `fk_Produit_Gamme1_idx` (`Gamme_idGamme` ASC),
  CONSTRAINT `fk_Produit_Projet1`
    FOREIGN KEY (`Projet_idProjet`)
    REFERENCES `yearl_madera`.`Projet` (`idProjet`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Produit_Gamme1`
    FOREIGN KEY (`Gamme_idGamme`)
    REFERENCES `yearl_madera`.`Gamme` (`idGamme`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yearl_madera`.`ModalitePaiement`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yearl_madera`.`ModalitePaiement` (
  `idModalitePaiement` INT NOT NULL,
  `pourcentage` DOUBLE NULL,
  PRIMARY KEY (`idModalitePaiement`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yearl_madera`.`EtapePaiement`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yearl_madera`.`EtapePaiement` (
  `idEtapePaiement` INT NOT NULL AUTO_INCREMENT,
  `nomEtapePaiement` VARCHAR(45) NULL,
  `datePaiement` DATE NULL,
  `Devis_idDevis` INT NOT NULL,
  `ModalitePaiement_idTypeUtilisateur` INT NOT NULL,
  PRIMARY KEY (`idEtapePaiement`, `Devis_idDevis`, `ModalitePaiement_idTypeUtilisateur`),
  INDEX `fk_EtapePaiement_Devis1_idx` (`Devis_idDevis` ASC),
  INDEX `fk_EtapePaiement_ModalitePaiement1_idx` (`ModalitePaiement_idTypeUtilisateur` ASC),
  CONSTRAINT `fk_EtapePaiement_Devis1`
    FOREIGN KEY (`Devis_idDevis`)
    REFERENCES `yearl_madera`.`Devis` (`idDevis`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_EtapePaiement_ModalitePaiement1`
    FOREIGN KEY (`ModalitePaiement_idTypeUtilisateur`)
    REFERENCES `yearl_madera`.`ModalitePaiement` (`idModalitePaiement`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
