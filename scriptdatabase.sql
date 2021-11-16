-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Calendario
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Calendario
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Calendario` DEFAULT CHARACTER SET utf8 ;
USE `Calendario` ;

-- -----------------------------------------------------
-- Table `mydb`.`PROFESOR`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Calendario`.`PROFESOR` (
  `DNI` VARCHAR(9) NOT NULL,
  `Nombre` VARCHAR(45) NOT NULL,
  `Apellidos` VARCHAR(45) NOT NULL,
  `Contraseña` VARCHAR(45) NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  `Fecha_nacimiento` DATE NULL,
  `Genero` VARCHAR(45) NULL,
  `Telefono` INT NULL,
  PRIMARY KEY (`DNI`),
  UNIQUE INDEX `DNI_UNIQUE` (`DNI` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`VACACIONES`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Calendario`.`VACACIONES` (
  `DIA` DATE NOT NULL,
  `PROFESOR_DNI` VARCHAR(9) NOT NULL,
  INDEX `fk_VACACIONES_PROFESOR_idx` (`PROFESOR_DNI` ASC) VISIBLE,
  CONSTRAINT `fk_VACACIONES_PROFESOR`
    FOREIGN KEY (`PROFESOR_DNI`)
    REFERENCES `mydb`.`PROFESOR` (`DNI`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
