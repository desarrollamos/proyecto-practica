-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: modelopractica1
-- ------------------------------------------------------
-- Server version	5.7.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `actividad`
--

DROP TABLE IF EXISTS `actividad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actividad` (
  `idActividad` int(11) NOT NULL AUTO_INCREMENT,
  `acNombre` varchar(30) DEFAULT NULL,
  `acValor` int(11) DEFAULT NULL,
  `Especialidad_idEspecialidad` int(11) NOT NULL,
  PRIMARY KEY (`idActividad`,`Especialidad_idEspecialidad`),
  KEY `fk_Actividad_Especialidad1_idx` (`Especialidad_idEspecialidad`),
  CONSTRAINT `fk_Actividad_Especialidad1` FOREIGN KEY (`Especialidad_idEspecialidad`) REFERENCES `especialidad` (`idEspecialidad`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actividad`
--

LOCK TABLES `actividad` WRITE;
/*!40000 ALTER TABLE `actividad` DISABLE KEYS */;
/*!40000 ALTER TABLE `actividad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `boleta`
--

DROP TABLE IF EXISTS `boleta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `boleta` (
  `idBoleta` int(11) NOT NULL AUTO_INCREMENT,
  `Pago_idPago` int(11) NOT NULL,
  PRIMARY KEY (`idBoleta`,`Pago_idPago`),
  KEY `fk_Boleta_Pago1_idx` (`Pago_idPago`),
  CONSTRAINT `fk_Boleta_Pago1` FOREIGN KEY (`Pago_idPago`) REFERENCES `pago` (`idPago`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `boleta`
--

LOCK TABLES `boleta` WRITE;
/*!40000 ALTER TABLE `boleta` DISABLE KEYS */;
/*!40000 ALTER TABLE `boleta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `boletahonorario`
--

DROP TABLE IF EXISTS `boletahonorario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `boletahonorario` (
  `idBoletaHonorario` int(11) NOT NULL,
  `bhValorTotal` int(11) DEFAULT NULL,
  `bhFecha` datetime DEFAULT NULL,
  `ConsultaMedica_idConsultaMedica` int(11) NOT NULL,
  PRIMARY KEY (`idBoletaHonorario`,`ConsultaMedica_idConsultaMedica`),
  KEY `fk_BoletaHonorarios_ConsultaMedica1_idx` (`ConsultaMedica_idConsultaMedica`),
  CONSTRAINT `fk_BoletaHonorarios_ConsultaMedica1` FOREIGN KEY (`ConsultaMedica_idConsultaMedica`) REFERENCES `consultamedica` (`idConsultaMedica`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `boletahonorario`
--

LOCK TABLES `boletahonorario` WRITE;
/*!40000 ALTER TABLE `boletahonorario` DISABLE KEYS */;
/*!40000 ALTER TABLE `boletahonorario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bonoconsulta`
--

DROP TABLE IF EXISTS `bonoconsulta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bonoconsulta` (
  `idBonoConsulta` int(11) NOT NULL,
  `bcValor` int(11) DEFAULT NULL,
  `bcFecha` datetime DEFAULT NULL,
  `Paciente_idPaciente` int(11) NOT NULL,
  `Reserva_idReserva` int(11) NOT NULL,
  `Usuario_EspecialidadUsuario_idEspecialidadUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idBonoConsulta`,`Paciente_idPaciente`,`Reserva_idReserva`,`Usuario_EspecialidadUsuario_idEspecialidadUsuario`),
  KEY `fk_BonoConsulta_Paciente1_idx` (`Paciente_idPaciente`),
  KEY `fk_BonoConsulta_Reserva1_idx` (`Reserva_idReserva`),
  KEY `fk_BonoConsulta_Usuario1_idx` (`Usuario_EspecialidadUsuario_idEspecialidadUsuario`),
  CONSTRAINT `fk_BonoConsulta_Paciente1` FOREIGN KEY (`Paciente_idPaciente`) REFERENCES `paciente` (`idPaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_BonoConsulta_Reserva1` FOREIGN KEY (`Reserva_idReserva`) REFERENCES `reserva` (`idReserva`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_BonoConsulta_Usuario1` FOREIGN KEY (`Usuario_EspecialidadUsuario_idEspecialidadUsuario`) REFERENCES `usuario` (`EspecialidadUsuario_idEspecialidadUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bonoconsulta`
--

LOCK TABLES `bonoconsulta` WRITE;
/*!40000 ALTER TABLE `bonoconsulta` DISABLE KEYS */;
/*!40000 ALTER TABLE `bonoconsulta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `ctNombre` varchar(45) DEFAULT NULL,
  `ctFechaCreacion` datetime DEFAULT NULL,
  `ctFechaEdicion` datetime DEFAULT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consultaactividad`
--

DROP TABLE IF EXISTS `consultaactividad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consultaactividad` (
  `caFecha` datetime DEFAULT NULL,
  `ConsultaMedica_idConsultaMedica` int(11) NOT NULL,
  `Actividad_idActividad` int(11) NOT NULL,
  PRIMARY KEY (`ConsultaMedica_idConsultaMedica`,`Actividad_idActividad`),
  KEY `fk_Ficha_has_Actividad_Actividad1_idx` (`Actividad_idActividad`),
  KEY `fk_FichaActividad_ConsultaMedica1_idx` (`ConsultaMedica_idConsultaMedica`),
  CONSTRAINT `fk_FichaActividad_ConsultaMedica1` FOREIGN KEY (`ConsultaMedica_idConsultaMedica`) REFERENCES `consultamedica` (`idConsultaMedica`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Ficha_has_Actividad_Actividad1` FOREIGN KEY (`Actividad_idActividad`) REFERENCES `actividad` (`idActividad`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consultaactividad`
--

LOCK TABLES `consultaactividad` WRITE;
/*!40000 ALTER TABLE `consultaactividad` DISABLE KEYS */;
/*!40000 ALTER TABLE `consultaactividad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consultamedica`
--

DROP TABLE IF EXISTS `consultamedica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consultamedica` (
  `idConsultaMedica` int(11) NOT NULL AUTO_INCREMENT,
  `BonoConsulta_idBonoConsulta` int(11) NOT NULL,
  `Reserva_idReserva` int(11) NOT NULL,
  `Usuario_EspecialidadUsuario_idEspecialidadUsuario` int(11) NOT NULL,
  `Paciente_idPaciente` int(11) NOT NULL,
  PRIMARY KEY (`idConsultaMedica`,`BonoConsulta_idBonoConsulta`,`Reserva_idReserva`,`Usuario_EspecialidadUsuario_idEspecialidadUsuario`,`Paciente_idPaciente`),
  KEY `fk_ConsultaMedica_BonoConsulta1_idx` (`BonoConsulta_idBonoConsulta`),
  KEY `fk_ConsultaMedica_Reserva1_idx` (`Reserva_idReserva`),
  KEY `fk_ConsultaMedica_Usuario1_idx` (`Usuario_EspecialidadUsuario_idEspecialidadUsuario`),
  KEY `fk_ConsultaMedica_Paciente1_idx` (`Paciente_idPaciente`),
  CONSTRAINT `fk_ConsultaMedica_BonoConsulta1` FOREIGN KEY (`BonoConsulta_idBonoConsulta`) REFERENCES `bonoconsulta` (`idBonoConsulta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ConsultaMedica_Paciente1` FOREIGN KEY (`Paciente_idPaciente`) REFERENCES `paciente` (`idPaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ConsultaMedica_Reserva1` FOREIGN KEY (`Reserva_idReserva`) REFERENCES `reserva` (`idReserva`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ConsultaMedica_Usuario1` FOREIGN KEY (`Usuario_EspecialidadUsuario_idEspecialidadUsuario`) REFERENCES `usuario` (`EspecialidadUsuario_idEspecialidadUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consultamedica`
--

LOCK TABLES `consultamedica` WRITE;
/*!40000 ALTER TABLE `consultamedica` DISABLE KEYS */;
/*!40000 ALTER TABLE `consultamedica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactoempresa`
--

DROP TABLE IF EXISTS `contactoempresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactoempresa` (
  `idContactoEmpresa` int(11) NOT NULL AUTO_INCREMENT,
  `ceKey` varchar(30) DEFAULT NULL,
  `ceValue` varchar(50) DEFAULT NULL,
  `Empresa_idEmpresa` int(11) NOT NULL,
  PRIMARY KEY (`idContactoEmpresa`,`Empresa_idEmpresa`),
  KEY `fk_ContactoEmpresa_Empresa1_idx` (`Empresa_idEmpresa`),
  CONSTRAINT `fk_ContactoEmpresa_Empresa1` FOREIGN KEY (`Empresa_idEmpresa`) REFERENCES `empresa` (`idEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactoempresa`
--

LOCK TABLES `contactoempresa` WRITE;
/*!40000 ALTER TABLE `contactoempresa` DISABLE KEYS */;
/*!40000 ALTER TABLE `contactoempresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactousuario`
--

DROP TABLE IF EXISTS `contactousuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactousuario` (
  `idContactoUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `cuKey` varchar(100) NOT NULL,
  `cuValue` varchar(100) NOT NULL,
  PRIMARY KEY (`idContactoUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactousuario`
--

LOCK TABLES `contactousuario` WRITE;
/*!40000 ALTER TABLE `contactousuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `contactousuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contrato`
--

DROP TABLE IF EXISTS `contrato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contrato` (
  `idContrato` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idContrato`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contrato`
--

LOCK TABLES `contrato` WRITE;
/*!40000 ALTER TABLE `contrato` DISABLE KEYS */;
/*!40000 ALTER TABLE `contrato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamento`
--

DROP TABLE IF EXISTS `departamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departamento` (
  `idDepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `dpNombre` varchar(30) DEFAULT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idDepartamento`,`Usuario_idUsuario`),
  KEY `fk_Departamento_Usuario1_idx` (`Usuario_idUsuario`),
  CONSTRAINT `fk_Departamento_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamento`
--

LOCK TABLES `departamento` WRITE;
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleado`
--

DROP TABLE IF EXISTS `empleado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empleado` (
  `idEmpleado` int(11) NOT NULL AUTO_INCREMENT,
  `emHorasPorDia` varchar(45) DEFAULT NULL,
  `emDiasATrabajar` varchar(45) DEFAULT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  `Empresa_idEmpresa` int(11) NOT NULL,
  PRIMARY KEY (`idEmpleado`,`Usuario_idUsuario`,`Empresa_idEmpresa`),
  KEY `fk_Usuario_has_Empresa_Empresa1_idx` (`Empresa_idEmpresa`),
  KEY `fk_Usuario_has_Empresa_Usuario1_idx` (`Usuario_idUsuario`),
  CONSTRAINT `fk_Usuario_has_Empresa_Empresa1` FOREIGN KEY (`Empresa_idEmpresa`) REFERENCES `empresa` (`idEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuario_has_Empresa_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleado`
--

LOCK TABLES `empleado` WRITE;
/*!40000 ALTER TABLE `empleado` DISABLE KEYS */;
/*!40000 ALTER TABLE `empleado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresa` (
  `idEmpresa` int(11) NOT NULL AUTO_INCREMENT,
  `emRut` varchar(12) DEFAULT NULL,
  `emNombre` varchar(50) DEFAULT NULL,
  `emFechaCreacion` datetime DEFAULT NULL,
  `Inventario_idInventario` int(11) NOT NULL,
  PRIMARY KEY (`idEmpresa`,`Inventario_idInventario`),
  KEY `fk_Empresa_Inventario1_idx` (`Inventario_idInventario`),
  CONSTRAINT `fk_Empresa_Inventario1` FOREIGN KEY (`Inventario_idInventario`) REFERENCES `inventario` (`idInventario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresadepartamento`
--

DROP TABLE IF EXISTS `empresadepartamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresadepartamento` (
  `Empresa_idEmpresa` int(11) NOT NULL,
  `Departamento_idDepartamento` int(11) NOT NULL,
  PRIMARY KEY (`Empresa_idEmpresa`,`Departamento_idDepartamento`),
  KEY `fk_Empresa_has_Departamento_Departamento1_idx` (`Departamento_idDepartamento`),
  KEY `fk_Empresa_has_Departamento_Empresa1_idx` (`Empresa_idEmpresa`),
  CONSTRAINT `fk_Empresa_has_Departamento_Departamento1` FOREIGN KEY (`Departamento_idDepartamento`) REFERENCES `departamento` (`idDepartamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Empresa_has_Departamento_Empresa1` FOREIGN KEY (`Empresa_idEmpresa`) REFERENCES `empresa` (`idEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresadepartamento`
--

LOCK TABLES `empresadepartamento` WRITE;
/*!40000 ALTER TABLE `empresadepartamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresadepartamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresaespecialidad`
--

DROP TABLE IF EXISTS `empresaespecialidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresaespecialidad` (
  `Empresa_idEmpresa` int(11) NOT NULL,
  `Especialidad_idEspecialidad` int(11) NOT NULL,
  PRIMARY KEY (`Empresa_idEmpresa`,`Especialidad_idEspecialidad`),
  KEY `fk_Empresa_has_Especialidad_Especialidad1_idx` (`Especialidad_idEspecialidad`),
  KEY `fk_Empresa_has_Especialidad_Empresa1_idx` (`Empresa_idEmpresa`),
  CONSTRAINT `fk_Empresa_has_Especialidad_Empresa1` FOREIGN KEY (`Empresa_idEmpresa`) REFERENCES `empresa` (`idEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Empresa_has_Especialidad_Especialidad1` FOREIGN KEY (`Especialidad_idEspecialidad`) REFERENCES `especialidad` (`idEspecialidad`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresaespecialidad`
--

LOCK TABLES `empresaespecialidad` WRITE;
/*!40000 ALTER TABLE `empresaespecialidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresaespecialidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresausuario`
--

DROP TABLE IF EXISTS `empresausuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresausuario` (
  `Empresa_idEmpresa` int(11) NOT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`Empresa_idEmpresa`,`Usuario_idUsuario`),
  KEY `fk_Empresa_has_Usuario_Usuario1_idx` (`Usuario_idUsuario`),
  KEY `fk_Empresa_has_Usuario_Empresa1_idx` (`Empresa_idEmpresa`),
  CONSTRAINT `fk_Empresa_has_Usuario_Empresa1` FOREIGN KEY (`Empresa_idEmpresa`) REFERENCES `empresa` (`idEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Empresa_has_Usuario_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresausuario`
--

LOCK TABLES `empresausuario` WRITE;
/*!40000 ALTER TABLE `empresausuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresausuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `especialidad`
--

DROP TABLE IF EXISTS `especialidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `especialidad` (
  `idEspecialidad` int(11) NOT NULL AUTO_INCREMENT,
  `epNombre` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idEspecialidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `especialidad`
--

LOCK TABLES `especialidad` WRITE;
/*!40000 ALTER TABLE `especialidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `especialidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `especialidadusuario`
--

DROP TABLE IF EXISTS `especialidadusuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `especialidadusuario` (
  `idEspecialidadUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `euNombre` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`idEspecialidadUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `especialidadusuario`
--

LOCK TABLES `especialidadusuario` WRITE;
/*!40000 ALTER TABLE `especialidadusuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `especialidadusuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `factura`
--

DROP TABLE IF EXISTS `factura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `factura` (
  `idFactura` int(11) NOT NULL AUTO_INCREMENT,
  `Pago_idPago` int(11) NOT NULL,
  PRIMARY KEY (`idFactura`,`Pago_idPago`),
  KEY `fk_Factura_Pago1_idx` (`Pago_idPago`),
  CONSTRAINT `fk_Factura_Pago1` FOREIGN KEY (`Pago_idPago`) REFERENCES `pago` (`idPago`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `factura`
--

LOCK TABLES `factura` WRITE;
/*!40000 ALTER TABLE `factura` DISABLE KEYS */;
/*!40000 ALTER TABLE `factura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ficha`
--

DROP TABLE IF EXISTS `ficha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ficha` (
  `idFicha` int(11) NOT NULL AUTO_INCREMENT,
  `fcNombre` varchar(40) DEFAULT NULL,
  `fcFechaCreacion` datetime DEFAULT NULL,
  `Empresa_idEmpresa` int(11) NOT NULL,
  `ConsultaMedica_idConsultaMedica` int(11) NOT NULL,
  PRIMARY KEY (`idFicha`,`Empresa_idEmpresa`,`ConsultaMedica_idConsultaMedica`),
  KEY `fk_Ficha_Empresa1_idx` (`Empresa_idEmpresa`),
  KEY `fk_Ficha_ConsultaMedica1_idx` (`ConsultaMedica_idConsultaMedica`),
  CONSTRAINT `fk_Ficha_ConsultaMedica1` FOREIGN KEY (`ConsultaMedica_idConsultaMedica`) REFERENCES `consultamedica` (`idConsultaMedica`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Ficha_Empresa1` FOREIGN KEY (`Empresa_idEmpresa`) REFERENCES `empresa` (`idEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ficha`
--

LOCK TABLES `ficha` WRITE;
/*!40000 ALTER TABLE `ficha` DISABLE KEYS */;
/*!40000 ALTER TABLE `ficha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inmueble`
--

DROP TABLE IF EXISTS `inmueble`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inmueble` (
  `idInmuebles` int(11) NOT NULL AUTO_INCREMENT,
  `inDireccion` varchar(30) DEFAULT NULL,
  `tipoInmueble` varchar(30) DEFAULT NULL,
  `inUnidad` varchar(30) DEFAULT NULL,
  `inValor` int(11) DEFAULT NULL,
  `Stock_idStock` int(11) NOT NULL,
  PRIMARY KEY (`idInmuebles`,`Stock_idStock`),
  KEY `fk_Inmueble_Stock1_idx` (`Stock_idStock`),
  CONSTRAINT `fk_Inmueble_Stock1` FOREIGN KEY (`Stock_idStock`) REFERENCES `stock` (`idStock`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inmueble`
--

LOCK TABLES `inmueble` WRITE;
/*!40000 ALTER TABLE `inmueble` DISABLE KEYS */;
/*!40000 ALTER TABLE `inmueble` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inventario`
--

DROP TABLE IF EXISTS `inventario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inventario` (
  `idInventario` int(11) NOT NULL AUTO_INCREMENT,
  `inNombre` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idInventario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventario`
--

LOCK TABLES `inventario` WRITE;
/*!40000 ALTER TABLE `inventario` DISABLE KEYS */;
/*!40000 ALTER TABLE `inventario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marca`
--

DROP TABLE IF EXISTS `marca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marca` (
  `idMarca` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idMarca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marca`
--

LOCK TABLES `marca` WRITE;
/*!40000 ALTER TABLE `marca` DISABLE KEYS */;
/*!40000 ALTER TABLE `marca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materiaprima`
--

DROP TABLE IF EXISTS `materiaprima`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materiaprima` (
  `idMateriaPrima` int(11) NOT NULL AUTO_INCREMENT,
  `mpPeso` varchar(30) DEFAULT NULL,
  `mpMedida` varchar(30) DEFAULT NULL,
  `mpVolumen` varchar(30) DEFAULT NULL,
  `mpCantidad` int(11) DEFAULT NULL,
  `Stock_idStock` int(11) NOT NULL,
  PRIMARY KEY (`idMateriaPrima`,`Stock_idStock`),
  KEY `fk_MateriaPrima_Stock1_idx` (`Stock_idStock`),
  CONSTRAINT `fk_MateriaPrima_Stock1` FOREIGN KEY (`Stock_idStock`) REFERENCES `stock` (`idStock`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materiaprima`
--

LOCK TABLES `materiaprima` WRITE;
/*!40000 ALTER TABLE `materiaprima` DISABLE KEYS */;
/*!40000 ALTER TABLE `materiaprima` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materiaprima_has_producto`
--

DROP TABLE IF EXISTS `materiaprima_has_producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materiaprima_has_producto` (
  `MateriaPrima_idMateriaPrima` int(11) NOT NULL,
  `Producto_idProductos` int(11) NOT NULL,
  `mhpPorcentaje` float DEFAULT NULL,
  PRIMARY KEY (`MateriaPrima_idMateriaPrima`,`Producto_idProductos`),
  KEY `fk_MateriaPrima_has_Producto_Producto1_idx` (`Producto_idProductos`),
  KEY `fk_MateriaPrima_has_Producto_MateriaPrima1_idx` (`MateriaPrima_idMateriaPrima`),
  CONSTRAINT `fk_MateriaPrima_has_Producto_MateriaPrima1` FOREIGN KEY (`MateriaPrima_idMateriaPrima`) REFERENCES `materiaprima` (`idMateriaPrima`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_MateriaPrima_has_Producto_Producto1` FOREIGN KEY (`Producto_idProductos`) REFERENCES `producto` (`idProductos`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materiaprima_has_producto`
--

LOCK TABLES `materiaprima_has_producto` WRITE;
/*!40000 ALTER TABLE `materiaprima_has_producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `materiaprima_has_producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelo`
--

DROP TABLE IF EXISTS `modelo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modelo` (
  `idModelo` int(11) NOT NULL AUTO_INCREMENT,
  `Marca_idMarca` int(11) NOT NULL,
  PRIMARY KEY (`idModelo`,`Marca_idMarca`),
  KEY `fk_Modelo_Marca1_idx` (`Marca_idMarca`),
  CONSTRAINT `fk_Modelo_Marca1` FOREIGN KEY (`Marca_idMarca`) REFERENCES `marca` (`idMarca`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelo`
--

LOCK TABLES `modelo` WRITE;
/*!40000 ALTER TABLE `modelo` DISABLE KEYS */;
/*!40000 ALTER TABLE `modelo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `otro`
--

DROP TABLE IF EXISTS `otro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `otro` (
  `idOtro` int(11) NOT NULL AUTO_INCREMENT,
  `Pago_idPago` int(11) NOT NULL,
  PRIMARY KEY (`idOtro`,`Pago_idPago`),
  KEY `fk_Otros_Pago1_idx` (`Pago_idPago`),
  CONSTRAINT `fk_Otros_Pago1` FOREIGN KEY (`Pago_idPago`) REFERENCES `pago` (`idPago`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `otro`
--

LOCK TABLES `otro` WRITE;
/*!40000 ALTER TABLE `otro` DISABLE KEYS */;
/*!40000 ALTER TABLE `otro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paciente`
--

DROP TABLE IF EXISTS `paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paciente` (
  `idPaciente` int(11) NOT NULL AUTO_INCREMENT,
  `pcTipoSangre` varchar(45) DEFAULT NULL,
  `pcPeso` varchar(45) DEFAULT NULL,
  `pcAlergia` varchar(45) DEFAULT NULL,
  `pcObservaciones` varchar(45) DEFAULT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  `Prevision_idPrevision` int(11) NOT NULL,
  PRIMARY KEY (`idPaciente`,`Usuario_idUsuario`,`Prevision_idPrevision`),
  KEY `fk_Paciente_Usuario1_idx` (`Usuario_idUsuario`),
  KEY `fk_Paciente_Prevision1_idx` (`Prevision_idPrevision`),
  CONSTRAINT `fk_Paciente_Prevision1` FOREIGN KEY (`Prevision_idPrevision`) REFERENCES `prevision` (`idPrevision`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Paciente_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paciente`
--

LOCK TABLES `paciente` WRITE;
/*!40000 ALTER TABLE `paciente` DISABLE KEYS */;
/*!40000 ALTER TABLE `paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pago`
--

DROP TABLE IF EXISTS `pago`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pago` (
  `idPago` int(11) NOT NULL AUTO_INCREMENT,
  `Transaccion_idTransaccion` int(11) NOT NULL,
  PRIMARY KEY (`idPago`,`Transaccion_idTransaccion`),
  KEY `fk_Pago_Transaccion1_idx` (`Transaccion_idTransaccion`),
  CONSTRAINT `fk_Pago_Transaccion1` FOREIGN KEY (`Transaccion_idTransaccion`) REFERENCES `transaccion` (`idTransaccion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pago`
--

LOCK TABLES `pago` WRITE;
/*!40000 ALTER TABLE `pago` DISABLE KEYS */;
/*!40000 ALTER TABLE `pago` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido` (
  `idPedido` int(11) NOT NULL AUTO_INCREMENT,
  `Inventario_idInventario` int(11) NOT NULL,
  PRIMARY KEY (`idPedido`,`Inventario_idInventario`),
  KEY `fk_Pedido_Inventario1_idx` (`Inventario_idInventario`),
  CONSTRAINT `fk_Pedido_Inventario1` FOREIGN KEY (`Inventario_idInventario`) REFERENCES `inventario` (`idInventario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permiso`
--

DROP TABLE IF EXISTS `permiso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permiso` (
  `idPermiso` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idPermiso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permiso`
--

LOCK TABLES `permiso` WRITE;
/*!40000 ALTER TABLE `permiso` DISABLE KEYS */;
/*!40000 ALTER TABLE `permiso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prevision`
--

DROP TABLE IF EXISTS `prevision`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prevision` (
  `idPrevision` int(11) NOT NULL AUTO_INCREMENT,
  `prNombre` varchar(45) DEFAULT NULL,
  `prFechaMod` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPrevision`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prevision`
--

LOCK TABLES `prevision` WRITE;
/*!40000 ALTER TABLE `prevision` DISABLE KEYS */;
/*!40000 ALTER TABLE `prevision` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producto` (
  `idProductos` int(11) NOT NULL AUTO_INCREMENT,
  `prPeso` int(11) DEFAULT NULL,
  `prMedida` int(11) DEFAULT NULL,
  `prVolumen` varchar(30) DEFAULT NULL,
  `prCantidad` int(11) DEFAULT NULL,
  `prValor` int(11) DEFAULT NULL,
  `Modelo_idModelo` int(11) NOT NULL,
  `Stock_idStock` int(11) NOT NULL,
  PRIMARY KEY (`idProductos`,`Modelo_idModelo`,`Stock_idStock`),
  KEY `fk_Producto_Modelo1_idx` (`Modelo_idModelo`),
  KEY `fk_Producto_Stock1_idx` (`Stock_idStock`),
  CONSTRAINT `fk_Producto_Modelo1` FOREIGN KEY (`Modelo_idModelo`) REFERENCES `modelo` (`idModelo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Producto_Stock1` FOREIGN KEY (`Stock_idStock`) REFERENCES `stock` (`idStock`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recetamedica`
--

DROP TABLE IF EXISTS `recetamedica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recetamedica` (
  `idRecetaMedica` int(11) NOT NULL AUTO_INCREMENT,
  `rmTipo` varchar(40) DEFAULT NULL,
  `rmValor` int(11) DEFAULT NULL,
  `rmFecha` datetime DEFAULT NULL,
  `rmValidez` datetime DEFAULT NULL,
  `ConsultaMedica_idConsultaMedica` int(11) NOT NULL,
  PRIMARY KEY (`idRecetaMedica`,`ConsultaMedica_idConsultaMedica`),
  KEY `fk_RecetaMedica_ConsultaMedica1_idx` (`ConsultaMedica_idConsultaMedica`),
  CONSTRAINT `fk_RecetaMedica_ConsultaMedica1` FOREIGN KEY (`ConsultaMedica_idConsultaMedica`) REFERENCES `consultamedica` (`idConsultaMedica`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recetamedica`
--

LOCK TABLES `recetamedica` WRITE;
/*!40000 ALTER TABLE `recetamedica` DISABLE KEYS */;
/*!40000 ALTER TABLE `recetamedica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reserva`
--

DROP TABLE IF EXISTS `reserva`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reserva` (
  `idReserva` int(11) NOT NULL AUTO_INCREMENT,
  `reFechaInicio` datetime DEFAULT NULL,
  `reFechaFin` datetime DEFAULT NULL,
  `reEstado` varchar(20) NOT NULL,
  `reHora` datetime DEFAULT NULL,
  `Stock_idStock` int(11) NOT NULL,
  PRIMARY KEY (`idReserva`,`Stock_idStock`),
  KEY `fk_Reserva_Stock1_idx` (`Stock_idStock`),
  CONSTRAINT `fk_Reserva_Stock1` FOREIGN KEY (`Stock_idStock`) REFERENCES `stock` (`idStock`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reserva`
--

LOCK TABLES `reserva` WRITE;
/*!40000 ALTER TABLE `reserva` DISABLE KEYS */;
/*!40000 ALTER TABLE `reserva` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservaactividad`
--

DROP TABLE IF EXISTS `reservaactividad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservaactividad` (
  `Reserva_idReserva` int(11) NOT NULL,
  `Actividad_idActividad` int(11) NOT NULL,
  PRIMARY KEY (`Reserva_idReserva`,`Actividad_idActividad`),
  KEY `fk_Reserva_has_Actividad_Actividad1_idx` (`Actividad_idActividad`),
  KEY `fk_Reserva_has_Actividad_Reserva1_idx` (`Reserva_idReserva`),
  CONSTRAINT `fk_Reserva_has_Actividad_Actividad1` FOREIGN KEY (`Actividad_idActividad`) REFERENCES `actividad` (`idActividad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Reserva_has_Actividad_Reserva1` FOREIGN KEY (`Reserva_idReserva`) REFERENCES `reserva` (`idReserva`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservaactividad`
--

LOCK TABLES `reservaactividad` WRITE;
/*!40000 ALTER TABLE `reservaactividad` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservaactividad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservausuario`
--

DROP TABLE IF EXISTS `reservausuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservausuario` (
  `ruCantidad` int(11) DEFAULT NULL,
  `ruValorTotal` int(11) DEFAULT NULL,
  `Reserva_idReserva` int(11) NOT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`Reserva_idReserva`,`Usuario_idUsuario`),
  KEY `fk_ReservaUsuario_Reserva1_idx` (`Reserva_idReserva`),
  KEY `fk_ReservaUsuario_Usuario1_idx` (`Usuario_idUsuario`),
  CONSTRAINT `fk_ReservaUsuario_Reserva1` FOREIGN KEY (`Reserva_idReserva`) REFERENCES `reserva` (`idReserva`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ReservaUsuario_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservausuario`
--

LOCK TABLES `reservausuario` WRITE;
/*!40000 ALTER TABLE `reservausuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservausuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stock` (
  `idStock` int(11) NOT NULL AUTO_INCREMENT,
  `stCategoria` varchar(30) DEFAULT NULL,
  `stCantidad` varchar(30) DEFAULT NULL,
  `Inventario_idInventario1` int(11) NOT NULL,
  `Transaccion_idTransaccion` int(11) NOT NULL,
  PRIMARY KEY (`idStock`,`Inventario_idInventario1`,`Transaccion_idTransaccion`),
  KEY `fk_Stock_Inventario1_idx` (`Inventario_idInventario1`),
  KEY `fk_Stock_Transaccion1_idx` (`Transaccion_idTransaccion`),
  CONSTRAINT `fk_Stock_Inventario1` FOREIGN KEY (`Inventario_idInventario1`) REFERENCES `inventario` (`idInventario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Stock_Transaccion1` FOREIGN KEY (`Transaccion_idTransaccion`) REFERENCES `transaccion` (`idTransaccion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stock`
--

LOCK TABLES `stock` WRITE;
/*!40000 ALTER TABLE `stock` DISABLE KEYS */;
/*!40000 ALTER TABLE `stock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipousuario`
--

DROP TABLE IF EXISTS `tipousuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipousuario` (
  `idTipoUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `tuNombre` varchar(40) DEFAULT NULL,
  `Permiso_idPermiso` int(11) NOT NULL,
  PRIMARY KEY (`idTipoUsuario`,`Permiso_idPermiso`),
  KEY `fk_TipoUsuario_Permiso1_idx` (`Permiso_idPermiso`),
  CONSTRAINT `fk_TipoUsuario_Permiso1` FOREIGN KEY (`Permiso_idPermiso`) REFERENCES `permiso` (`idPermiso`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipousuario`
--

LOCK TABLES `tipousuario` WRITE;
/*!40000 ALTER TABLE `tipousuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipousuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaccion`
--

DROP TABLE IF EXISTS `transaccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaccion` (
  `idTransaccion` int(11) NOT NULL AUTO_INCREMENT,
  `trTipo` varchar(30) DEFAULT NULL,
  `trFecha` datetime DEFAULT NULL,
  `Pedido_idPedido` int(11) NOT NULL,
  PRIMARY KEY (`idTransaccion`,`Pedido_idPedido`),
  KEY `fk_Transaccion_Pedido1_idx` (`Pedido_idPedido`),
  CONSTRAINT `fk_Transaccion_Pedido1` FOREIGN KEY (`Pedido_idPedido`) REFERENCES `pedido` (`idPedido`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaccion`
--

LOCK TABLES `transaccion` WRITE;
/*!40000 ALTER TABLE `transaccion` DISABLE KEYS */;
/*!40000 ALTER TABLE `transaccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `turno`
--

DROP TABLE IF EXISTS `turno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `turno` (
  `idTurno` int(11) NOT NULL AUTO_INCREMENT,
  `tnEntrada` varchar(45) DEFAULT NULL,
  `tnSalida` varchar(45) DEFAULT NULL,
  `tnFecha` varchar(45) DEFAULT NULL,
  `tnColacion` varchar(45) DEFAULT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idTurno`,`Usuario_idUsuario`),
  KEY `fk_Turno_Usuario1_idx` (`Usuario_idUsuario`),
  CONSTRAINT `fk_Turno_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `turno`
--

LOCK TABLES `turno` WRITE;
/*!40000 ALTER TABLE `turno` DISABLE KEYS */;
/*!40000 ALTER TABLE `turno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `usNombre` varchar(20) NOT NULL,
  `usApellido` varchar(20) NOT NULL,
  `usFechaNacimiento` varchar(20) NOT NULL,
  `usRut` varchar(10) NOT NULL,
  `usFechaMod` datetime NOT NULL,
  `usFechaCreacion` datetime NOT NULL,
  `ContactoUsuario_idContactoUsuario` int(11) NOT NULL,
  `TipoUsuario_idTipoUsuario` int(11) NOT NULL,
  `EspecialidadUsuario_idEspecialidadUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`,`ContactoUsuario_idContactoUsuario`,`TipoUsuario_idTipoUsuario`,`EspecialidadUsuario_idEspecialidadUsuario`),
  KEY `fk_Usuario_ContactoUsuario1_idx` (`ContactoUsuario_idContactoUsuario`),
  KEY `fk_Usuario_TipoUsuario1_idx` (`TipoUsuario_idTipoUsuario`),
  KEY `fk_Usuario_EspecialidadUsuario1_idx` (`EspecialidadUsuario_idEspecialidadUsuario`),
  CONSTRAINT `fk_Usuario_ContactoUsuario1` FOREIGN KEY (`ContactoUsuario_idContactoUsuario`) REFERENCES `contactousuario` (`idContactoUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuario_EspecialidadUsuario1` FOREIGN KEY (`EspecialidadUsuario_idEspecialidadUsuario`) REFERENCES `especialidadusuario` (`idEspecialidadUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuario_TipoUsuario1` FOREIGN KEY (`TipoUsuario_idTipoUsuario`) REFERENCES `tipousuario` (`idTipoUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-01 15:56:32
