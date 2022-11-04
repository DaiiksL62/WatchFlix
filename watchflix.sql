-- --------------------------------------------------------
-- Hôte:                         localhost
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour watchflix
CREATE DATABASE IF NOT EXISTS `watchflix` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci */;
USE `watchflix`;

-- Listage de la structure de la table watchflix. commentaire
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT '',
  `message` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- Listage des données de la table watchflix.commentaire : ~0 rows (environ)
/*!40000 ALTER TABLE `commentaire` DISABLE KEYS */;
/*!40000 ALTER TABLE `commentaire` ENABLE KEYS */;

-- Listage de la structure de la table watchflix. inscription
CREATE TABLE IF NOT EXISTS `inscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `nom` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `prenom` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `user_pass` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_kind` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '2',
  `photo` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- Listage des données de la table watchflix.inscription : ~7 rows (environ)
/*!40000 ALTER TABLE `inscription` DISABLE KEYS */;
INSERT INTO `inscription` (`id`, `username`, `nom`, `prenom`, `email`, `user_pass`, `user_kind`, `photo`) VALUES
	(74, 'Admin', 'Monsieur ', 'Patate', 'monsieurpatate@', '$2y$10$EZEXP87/ruboagjMjGs3A.trGsi9Jm17uETIyCw1WkB4JoI8g2AD.', '1', 'avatar_63628bf540640.jpg'),
	(75, 'Daiik', 'Duval', 'Florian', 'perotflorian@gmail.com', '$2y$10$bpsz/bVxsl1bqbZEC5BrT.e8JdL5cSYrpLFk10FGev6psw2h5ubNS', '2', 'avatar_6363d6b079c80.jpg'),
	(76, 'Daiik', 'Duval', 'Florian', 'perotflorian@gmail.com', '$2y$10$wGyDvS6fa3SDLqrjA25lbe3AC2AaqROFCTs.AzpT0wQzdBHV6x7sm', '2', 'avatar_6363d6c1b9a5e.jpg'),
	(77, 'Daiik', 'Duval', 'Florian', 'perotflorian@gmail.com', '$2y$10$fd94e4cLQ5rh9UdQuaAsIue8lpAMybNP2ZW.RGX.SWFai2.0KxWKW', '2', 'avatar_6363d6e06d959.jpg'),
	(78, 'Daiik', 'Duval', 'Florian', 'perotflorian@gmail.com', '$2y$10$j7rXBjCw6oSKKdIwxYfGwe7OWxW3THq4SuTO/UYjl233zFgOxJBVu', '2', 'avatar_6363d72a39fb1.jpg'),
	(79, 'Daiik', 'Duval', 'Florian', 'perotflorian@gmail.com', '$2y$10$QxCbANiJvK2i1mcD3kIM9.wRfijAmG5QYhdHTNkY10b/SB6bDRBlq', '2', 'avatar_6363d7510761c.jpg'),
	(80, 'Daiik', 'Duval', 'Florian', 'perotflorian@gmail.com', '$2y$10$8lE.BlGkSBRaGRNs2Ib9KuMjXrTxZMT3RqyB1AdUHodEHQPy1hG7K', '2', 'avatar_6363da09501d4.jpg');
/*!40000 ALTER TABLE `inscription` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
