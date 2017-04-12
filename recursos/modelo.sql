-- -----------------------------------------------------
-- Table `plataforma_uisrael`.`session`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `non_axebo`.`session` (
  `id` CHAR(32) CHARACTER SET 'utf8' NOT NULL DEFAULT '',
  `name` CHAR(32) CHARACTER SET 'utf8' NOT NULL DEFAULT '',
  `modified` INT(11) NULL DEFAULT NULL,
  `lifetime` INT(11) NULL DEFAULT NULL,
  `data` TEXT CHARACTER SET 'utf8' NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `name`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;



-- -----------------------------------------------------
-- Table `non_axebo`.`Persona`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `non_axebo`.`Persona` (
  `codPersona` INT NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(20) NOT NULL,
  `primerApellido` VARCHAR(45) NOT NULL,
  `segundoApellido` VARCHAR(45) NULL,
  `genero` VARCHAR(45) NULL,
  `correo` VARCHAR(45) NOT NULL,
  `tipoDocumento` VARCHAR(45) NULL,
  `numeroDocumento` VARCHAR(45) NULL,
  `edad` VARCHAR(45) NULL,
  `celular` CHAR(12) NULL,
  `nacionalidad` VARCHAR(45) NULL,
  PRIMARY KEY (`codPersona`))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `codPersona_UNIQUE` ON `non_axebo`.`Persona` (`codPersona` ASC);


-- -----------------------------------------------------
-- Table `non_axebo`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `non_axebo`.`Usuario` (
  `codUsuario` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(45) NOT NULL,
  `clave` VARCHAR(45) NULL,
  `rol` VARCHAR(45) NULL,
  `estado` TINYINT(1) NULL,
  PRIMARY KEY (`codUsuario`))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `codUsuario_UNIQUE` ON `non_axebo`.`Usuario` (`codUsuario` ASC);


-- -----------------------------------------------------
-- Table `non_axebo`.`Administrador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `non_axebo`.`Administrador` (
  `codAdministrador` INT NOT NULL AUTO_INCREMENT,
  `codPersona` INT NOT NULL,
  `codUsuario` INT NOT NULL,
  `estado` TINYINT(1) NULL,
  PRIMARY KEY (`codAdministrador`),
  CONSTRAINT `fk_Administrador_Persona`
    FOREIGN KEY (`codPersona`)
    REFERENCES `non_axebo`.`Persona` (`codPersona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Administrador_Usuario1`
    FOREIGN KEY (`codUsuario`)
    REFERENCES `non_axebo`.`Usuario` (`codUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE UNIQUE INDEX `codAdministrador_UNIQUE` ON `non_axebo`.`Administrador` (`codAdministrador` ASC);

CREATE INDEX `fk_Administrador_Persona_idx` ON `non_axebo`.`Administrador` (`codPersona` ASC);

CREATE INDEX `fk_Administrador_Usuario1_idx` ON `non_axebo`.`Administrador` (`codUsuario` ASC);


-- -----------------------------------------------------
-- Table `non_axebo`.`Estudiante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `non_axebo`.`Estudiante` (
  `codEstudiante` INT NOT NULL AUTO_INCREMENT,
  `estado` TINYINT(1) NULL,
  `codPersona` INT NOT NULL,
  `codUsuario` INT NOT NULL,
  PRIMARY KEY (`codEstudiante`),
  CONSTRAINT `fk_Estudiante_Persona1`
    FOREIGN KEY (`codPersona`)
    REFERENCES `non_axebo`.`Persona` (`codPersona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Estudiante_Usuario1`
    FOREIGN KEY (`codUsuario`)
    REFERENCES `non_axebo`.`Usuario` (`codUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE UNIQUE INDEX `codEstudiante_UNIQUE` ON `non_axebo`.`Estudiante` (`codEstudiante` ASC);

CREATE INDEX `fk_Estudiante_Persona1_idx` ON `non_axebo`.`Estudiante` (`codPersona` ASC);

CREATE INDEX `fk_Estudiante_Usuario1_idx` ON `non_axebo`.`Estudiante` (`codUsuario` ASC);


-- -----------------------------------------------------
-- Table `non_axebo`.`Taller`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `non_axebo`.`Taller` (
  `codTaller` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(2000) NULL,
  `imagen` VARCHAR(200) NULL,
  `precio` INT NOT NULL,
  `duracion` VARCHAR(45) NULL,
  `horario` VARCHAR(45) NULL,
  `profesor` VARCHAR(200) NULL,
  `aforo` INT NULL,
  PRIMARY KEY (`codTaller`))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `codTaller_UNIQUE` ON `non_axebo`.`Taller` (`codTaller` ASC);


-- -----------------------------------------------------
-- Table `non_axebo`.`Matricula`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `non_axebo`.`Matricula` (
  `codMatricula` INT NOT NULL AUTO_INCREMENT,
  `fechaMatricula` DATE NULL,
  `codDeposito` VARCHAR(45) NULL,
  `imagen` VARCHAR(45) NULL,
  `modoPago` VARCHAR(45) NULL,
  `Taller_codTaller` INT NOT NULL,
  `Estudiante_codEstudiante` INT NOT NULL,
  PRIMARY KEY (`codMatricula`),
  CONSTRAINT `fk_Matricula_Taller1`
    FOREIGN KEY (`Taller_codTaller`)
    REFERENCES `non_axebo`.`Taller` (`codTaller`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Matricula_Estudiante1`
    FOREIGN KEY (`Estudiante_codEstudiante`)
    REFERENCES `non_axebo`.`Estudiante` (`codEstudiante`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE UNIQUE INDEX `codMatricula_UNIQUE` ON `non_axebo`.`Matricula` (`codMatricula` ASC);

CREATE INDEX `fk_Matricula_Taller1_idx` ON `non_axebo`.`Matricula` (`Taller_codTaller` ASC);

CREATE INDEX `fk_Matricula_Estudiante1_idx` ON `non_axebo`.`Matricula` (`Estudiante_codEstudiante` ASC);


-- -----------------------------------------------------
-- Data for table `non_axebo`.`Usuario`
-- -----------------------------------------------------
START TRANSACTION;
USE `non_axebo`;
INSERT INTO `non_axebo`.`Usuario` (`codUsuario`, `usuario`, `clave`, `rol`, `estado`) VALUES (1, 'admin', 'admin', 'admin', 1);

COMMIT;


-- -----------------------------------------------------
-- VISTAS
-- -----------------------------------------------------


CREATE VIEW vw_estudiante
AS
  SELECT e.codEstudiante,
		p.codPersona, p.nombres, p.primerApellido, p.segundoApellido, p.genero, p.correo, p.tipoDocumento, p.numeroDocumento, p.edad, p.celular, p.nacionalidad,
        u.usuario, u.rol
  FROM estudiante e
  INNER JOIN persona p ON p.codPersona = e.codPersona
  LEFT JOIN usuario u ON u.codUsuario = e.codUsuario;
  
  
 CREATE VIEW vw_administrador
AS
  SELECT a.codAdministrador,
		p.codPersona, p.nombres, p.primerApellido, p.segundoApellido, p.genero, p.correo, p.tipoDocumento, p.numeroDocumento, p.edad, p.celular, p.nacionalidad,
        u.usuario, u.rol
  FROM administrador a
  INNER JOIN persona p ON p.codPersona = a.codPersona
  LEFT JOIN usuario u ON u.codUsuario = a.codUsuario;
  
  
   CREATE VIEW vw_administrador
AS
  SELECT a.codAdministrador,
		p.codPersona, p.nombres, p.primerApellido, p.segundoApellido, p.genero, p.correo, p.tipoDocumento, p.numeroDocumento, p.edad, p.celular, p.nacionalidad,
        u.usuario, u.rol
  FROM administrador a
  INNER JOIN persona p ON p.codPersona = a.codPersona
  LEFT JOIN usuario u ON u.codUsuario = a.codUsuario;

