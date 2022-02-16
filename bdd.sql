-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  sam. 17 avr. 2021 à 21:38
-- Version du serveur :  10.3.9-MariaDB
-- Version de PHP :  7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `zfl2-zkonateas`
--

-- --------------------------------------------------------

--
-- Structure de la table `TA_SELECTION_SEL`
--

CREATE TABLE `TA_SELECTION_SEL` (
  `SEL_ID` int(11) NOT NULL,
  `ELE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `TA_SELECTION_SEL`
--

INSERT INTO `TA_SELECTION_SEL` (`SEL_ID`, `ELE_ID`) VALUES
(2, 7),
(3, 2),
(3, 3),
(3, 4),
(3, 18),
(3, 19),
(3, 22),
(3, 23),
(3, 24),
(3, 25),
(3, 26),
(3, 27),
(3, 28),
(3, 29),
(3, 31),
(3, 38),
(3, 39),
(4, 1),
(4, 5),
(4, 6),
(4, 20),
(8, 32),
(8, 33),
(8, 34),
(9, 35),
(9, 36),
(9, 37);

-- --------------------------------------------------------

--
-- Structure de la table `T_ACTUALITE_ACT`
--

CREATE TABLE `T_ACTUALITE_ACT` (
  `ACT_ID` int(50) NOT NULL,
  `CPT_PSEUDO` varchar(60) NOT NULL,
  `ACT_TITRE` varchar(50) NOT NULL,
  `ACT_Texte` varchar(256) NOT NULL,
  `ACT_DATE_PUBLICATION` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ACT_ETAT` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `T_ACTUALITE_ACT`
--

INSERT INTO `T_ACTUALITE_ACT` (`ACT_ID`, `CPT_PSEUDO`, `ACT_TITRE`, `ACT_Texte`, `ACT_DATE_PUBLICATION`, `ACT_ETAT`) VALUES
(2, 'ananas12', 'En vedette!', 'Le lait caillé et le petit mil...', '2021-04-15 10:39:08', 'A'),
(3, 'banana12', 'Le Togo!', 'Le Donkounou accompagné de sa sauce et ses oignons crues!', '2021-04-15 10:39:08', 'A'),
(4, 'mango12', 'En vedette!', 'Le plantain frit et son poulet...', '2021-04-15 10:39:08', 'A'),
(6, 'karite12', 'Allons vers lOuest !', 'Le Babenda!...', '2021-04-15 10:39:08', 'A'),
(7, 'karite12', 'Allons vers lOuest !', 'Le Babenda!...', '2021-04-15 10:39:08', 'A'),
(8, 'gestionnaire1', 'Le pays des hommes intègres!', 'Le Benga!...', '2021-04-15 10:39:08', 'A'),
(9, 'coco12', 'Le pays des elephant!', 'Le Foutou à la sauce graine!...', '2021-04-15 10:39:08', 'A'),
(10, 'mango12', 'Le Niger', 'Le Clichi!...', '2021-04-15 10:39:08', 'A'),
(11, 'vanille12', 'Le senegal!', 'Le Tchiep!...', '2021-04-15 10:39:08', 'A'),
(12, 'karite12', 'Le Congo', 'Le Pondu!...', '2021-04-15 10:39:08', 'A'),
(27, 'karite12', 'La Guinée Conakry', 'La sauce à base de mangue ', '2021-04-15 10:39:08', 'A'),
(33, 'banana12', 'Le pays des éléphants', 'placali', '2021-04-15 10:39:08', 'A'),
(34, 'karite12', 'Le Téédoo', 'Jus à base de pain de singe et de lait', '2021-04-14 22:00:00', 'A'),
(36, 'lili', 'Tarte', 'tarte aux bananes', '2021-04-15 22:00:00', 'A'),
(37, 'lili', 'pain', 'pain a la banane', '2021-04-16 07:06:52', 'A'),
(46, 'gestionnaire1', 'Mangué sauce', 'Sauce à base de mangue originaire de la Guinée Conakry', '2021-04-16 22:00:00', 'A');

-- --------------------------------------------------------

--
-- Structure de la table `T_COMPTE_UTILISATEUR_CPT`
--

CREATE TABLE `T_COMPTE_UTILISATEUR_CPT` (
  `CPT_PSEUDO` varchar(60) NOT NULL,
  `CPT_MOT_DE_PASSE` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `T_COMPTE_UTILISATEUR_CPT`
--

INSERT INTO `T_COMPTE_UTILISATEUR_CPT` (`CPT_PSEUDO`, `CPT_MOT_DE_PASSE`) VALUES
('ada', '37f525e2b6fc3cb4abd882f708ab80eb'),
('ananas12', 'ba724abff1c570ac7de8480baae8782e'),
('banana12', 'ba724abff1c570ac7de8480baae8782e'),
('choco12', 'ba724abff1c570ac7de8480baae8782e'),
('coco12', '098f6bcd4621d373cade4e832627b4f6'),
('dina', '37f525e2b6fc3cb4abd882f708ab80eb'),
('François', '37f525e2b6fc3cb4abd882f708ab80eb'),
('gestionnaire1', '388d4ca7d89f912a8fe96b04fb3d8e22'),
('gestionnaire10', 'ba724abff1c570ac7de8480baae8782e'),
('gestionnaire2', 'ba724abff1c570ac7de8480baae8782e'),
('gestionnaire3', 'ba724abff1c570ac7de8480baae8782e'),
('karite12', 'ba724abff1c570ac7de8480baae8782e'),
('lala', '37f525e2b6fc3cb4abd882f708ab80eb'),
('Lara', '37f525e2b6fc3cb4abd882f708ab80eb'),
('lili', '37f525e2b6fc3cb4abd882f708ab80eb'),
('lulu', '37f525e2b6fc3cb4abd882f708ab80eb'),
('mango12', 'ba724abff1c570ac7de8480baae8782e'),
('popo', '4f22a4b4bcbe105cc8a7bbeb24eaa0dc'),
('taty16', '37f525e2b6fc3cb4abd882f708ab80eb'),
('vanille12', 'ba724abff1c570ac7de8480baae8782e'),
('Yunia', '37f525e2b6fc3cb4abd882f708ab80eb'),
('yuyu', '17324235011af66d659cbb7a2d2cbe6e');

-- --------------------------------------------------------

--
-- Structure de la table `T_ELEMENT_ELE`
--

CREATE TABLE `T_ELEMENT_ELE` (
  `ELE_ID` int(11) NOT NULL,
  `ELE_INTITULE` varchar(50) NOT NULL,
  `ELE_DESCRIPTIF` varchar(100) NOT NULL,
  `ELE_DATE_AJOUT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ELE_IMAGE` varchar(100) NOT NULL,
  `ELE_ETAT` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `T_ELEMENT_ELE`
--

INSERT INTO `T_ELEMENT_ELE` (`ELE_ID`, `ELE_INTITULE`, `ELE_DESCRIPTIF`, `ELE_DATE_AJOUT`, `ELE_IMAGE`, `ELE_ETAT`) VALUES
(1, 'Le Dèguè', 'Lait caillé et grumaux de petit mil', '2021-04-06 11:54:03', 'degue.JPG', 'c'),
(2, 'Tiguètiguè', 'Sauce à base de pâte darrachide légumes viande ou poisson', '2021-04-07 04:32:57', 'mafe.JPG', 'c'),
(3, 'Yassa', 'Sauce à base doignons de moutarde et de poulet mariné', '2021-04-07 04:33:26', 'yassa.JPG', 'c'),
(4, 'Riz poulet et légumes', 'Riz gras au poulets accompagné de légumes', '2021-04-07 06:25:42', 'rizpoule.jpg', 'c'),
(5, 'Bourmassa', 'De délicieux beignets , idéale pour le goûter', '2021-04-05 22:00:00', 'beignets.JPG', 'c'),
(6, 'Caracoro', 'De délicieux beignets à la banane, idéale pour le goûter', '2021-04-05 22:00:00', 'caracoro.JPG', 'c'),
(7, 'Avocats aux crevettes', 'Avocats accompagné de crevettes marinées et de sa sauce rose.', '2021-04-07 04:51:54', 'avocat.JPG', 'A'),
(18, 'Attiékè', 'Semoule  de manioc accompagné de légumes de viande ou de poisson et de bananes plantain frit', '2021-04-07 05:15:29', 'attieke.JPG', 'A'),
(19, 'Benga', 'Haricots cuit avec du riz accompagné de poulet ou viande et d\'oignons frits', '2021-04-07 06:03:45', 'bengaa.jpg', 'A'),
(20, 'Massa', 'Galettes de petit mil', '2021-04-07 05:16:19', 'massa.JPG', 'A'),
(21, 'Mouikolgo', 'Riz a base de soumbala et de poulet', '2021-04-07 05:16:28', 'mouikolgo.JPG', 'A'),
(22, 'Poulet mariné', 'Poulet mariné cuit au four', '2021-04-07 05:29:01', 'puletfour.JPG', 'A'),
(23, 'Riz et viande', 'Riz accompagné de légumes et d\'agneau', '2021-04-07 05:21:01', 'rizviande.JPG', 'C'),
(24, 'Tchiep', 'Riz accompagné de légume , de capitaine et d\'une petite sauce', '2021-04-07 05:20:29', 'tchiep.JPG', 'C'),
(25, 'Vermicelles poulet', 'vermicelles accompagnés de légumes et de poulet', '2021-04-07 05:23:08', 'vermisselle.JPG', 'A'),
(26, 'Tilapia au four', 'Tilapia mariné au four accompagné de légumes et d\'aloco!', '2021-04-07 05:23:08', 'tilapia.JPG', 'A'),
(27, 'Foutou Banane', 'Igname et banane plantain pilé accompagnée de sauce arachide ou sauce graine', '2021-04-07 06:07:00', 'foutou.JPG', 'A'),
(28, 'Attiékè Poulet', 'Semoule de manioc accompagné de légumes, de poulet et d\'aloco', '2021-04-07 06:07:00', 'attiekep.jpg', 'A'),
(29, 'Gigot d\'agneau', 'Gigot d\'agneau bien mariné et cuit au four', '2021-04-07 06:09:08', 'agneau.JPG', 'A'),
(30, 'Riz légumes', 'Riz gras accompagné de légumes et poulet', '2021-04-07 06:09:08', 'rizlegume.jpg', 'C'),
(31, 'Riz poisson', 'Riz gras au poisson et légumes', '2021-04-07 06:10:19', 'rizg.jpg', 'A'),
(32, 'Number cake', 'Gâteau idéal pour vos évènements', '2021-04-07 06:15:55', '25.JPG', 'A'),
(33, 'Number Cake!', 'Idéal évènement', '2021-04-07 06:15:55', '22.JPG', 'A'),
(34, 'Fraisier', 'fraisier', '2021-04-07 06:15:55', 'fraisier.jpg', 'A'),
(35, 'Box aloco', 'Idéal évènement', '2021-04-07 06:18:35', 'alocopain.jpg', 'A'),
(36, 'Box brochettes', 'Idéal évènement', '2021-04-07 06:18:35', 'brochette.jpg', 'A'),
(37, 'Box samoussa', 'Idéal évènement', '2021-04-07 06:22:03', 'samoussa.JPG', 'A'),
(38, 'Riz et steak', 'riz accompagné de steak et légumes', '2021-04-07 06:27:16', 'steak.JPG', 'A'),
(39, 'Ragoût de pomme de terre', 'Délicieux ragoût ', '2021-04-14 17:47:18', 'ragouhaut.JPG', 'A');

-- --------------------------------------------------------

--
-- Structure de la table `T_LIEN`
--

CREATE TABLE `T_LIEN` (
  `LIEN_ID` int(11) NOT NULL,
  `ELE_ID` int(11) NOT NULL,
  `LIEN_TITRE` varchar(70) NOT NULL,
  `LIEN_URL` varchar(200) NOT NULL,
  `LIEN_AUTEUR` varchar(80) NOT NULL,
  `LIEN_DATE_PUBLICATION` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `T_LIEN`
--

INSERT INTO `T_LIEN` (`LIEN_ID`, `ELE_ID`, `LIEN_TITRE`, `LIEN_URL`, `LIEN_AUTEUR`, `LIEN_DATE_PUBLICATION`) VALUES
(1, 2, 'Le Dèguè', 'https://www.instagram.com/b.o.o.t.a.m.a/', 'mango12', '2019-08-28 18:52:23'),
(2, 2, 'Le Dèguè', 'https://www.instagram.com/b.o.o.t.a.m.a/', 'mango12', '2019-08-28 18:52:23');

-- --------------------------------------------------------

--
-- Structure de la table `T_PRESENTATION_PRES`
--

CREATE TABLE `T_PRESENTATION_PRES` (
  `PRES_ID` int(11) NOT NULL,
  `CPT_PSEUDO` varchar(60) NOT NULL,
  `PRES_NOM_STRUCTURE` varchar(70) NOT NULL,
  `PRES_ADESSE` varchar(200) NOT NULL,
  `PRES_telephone` char(12) NOT NULL,
  `PRES_mail` varchar(200) NOT NULL,
  `PRES_HORAIRE` varchar(64) NOT NULL,
  `PRES_TEXTE_BIENVENUE` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `T_PRESENTATION_PRES`
--

INSERT INTO `T_PRESENTATION_PRES` (`PRES_ID`, `CPT_PSEUDO`, `PRES_NOM_STRUCTURE`, `PRES_ADESSE`, `PRES_telephone`, `PRES_mail`, `PRES_HORAIRE`, `PRES_TEXTE_BIENVENUE`) VALUES
(1, 'coco12', 'BOOTAMA', '17 RUE DU LION', '0752256471', 'bootama@gmail.com', '11h00-23h30', 'BIENVENUE CHEZ BOOTAMA!goût et couleurs dans vos assiettes!');

-- --------------------------------------------------------

--
-- Structure de la table `T_PROFIL_UTILISATEUR_PRO`
--

CREATE TABLE `T_PROFIL_UTILISATEUR_PRO` (
  `CPT_PSEUDO` varchar(60) NOT NULL,
  `PRO_NOM` varchar(64) NOT NULL,
  `PRO_prenom` varchar(64) NOT NULL,
  `PRO_mail` varchar(200) NOT NULL,
  `PRO_DATE_CREATION` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `PRO_validite` char(1) NOT NULL,
  `PRO_statu` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `T_PROFIL_UTILISATEUR_PRO`
--

INSERT INTO `T_PROFIL_UTILISATEUR_PRO` (`CPT_PSEUDO`, `PRO_NOM`, `PRO_prenom`, `PRO_mail`, `PRO_DATE_CREATION`, `PRO_validite`, `PRO_statu`) VALUES
('ada', 'KONATE', 'Ashley', 'kozldmd@gmail.com', '2021-04-15 22:00:00', 'D', 'R'),
('ananas12', 'Sanfo', 'Ouzeifa', 'ouzi@gmail.com', '2021-04-14 15:00:49', 'A', 'R'),
('banana12', 'Bamogo', 'Christopher', 'bamogo@gmail.com', '2021-04-14 15:01:36', 'A', 'R'),
('choco12', 'Sawadogo', 'Seydou', 'diana@gmail.com', '2019-11-18 19:52:23', 'A', 'R'),
('coco12', 'Dianka', 'Mustapha', 'mustaphadianka@gmail.com', '2021-04-14 15:01:13', '1', 'R'),
('dina', 'Koita', 'Hana', 'hana@gmail.com', '2021-04-14 22:00:00', 'D', 'R'),
('François', 'Konaté', 'ah to', 'DOKO@GMAIL.com', '2019-11-18 19:52:23', 'D', 'R'),
('gestionnaire1', 'Miller', 'Diana', 'diana@gmail.com', '2021-04-14 15:02:11', 'A', 'A'),
('gestionnaire10', 'Miller', 'Diana', 'diana@gmail.com', '2021-01-31 23:00:00', 'A', 'R'),
('gestionnaire2', 'Sanogo', 'Diana', 'diana@gmail.com', '2021-04-14 15:02:26', 'A', 'A'),
('gestionnaire3', 'Ky', 'dalia', 'diana@gmail.com', '2021-04-14 15:02:35', 'A', 'A'),
('karite12', 'Kone', 'Safi', 'diana@gmail.com', '2019-11-18 19:52:23', 'A', 'R'),
('lala', 'konate', 'ash', 'DOKO@GMAIL.com', '2021-04-07 13:03:47', 'A', 'R'),
('Lara', 'Koita', 'Hana', 'hana@gmail.com', '2021-04-14 22:00:00', 'D', 'R'),
('lili', 'KONATE', 'Ashley', 'DOKO@GMAIL.com', '2021-04-17 19:25:13', 'A', 'R'),
('lulu', 'KONATE', 'Ashley', 'kozldmd@gmail.com', '2021-04-15 19:01:36', 'A', 'R'),
('mango12', 'Miller', 'Diana', 'diana@gmail.com', '2019-11-18 19:52:23', 'A', 'R'),
('popo', 'KONATE', 'Ashley', 'dskck@gmail.com', '2021-04-13 11:13:25', 'D', 'R'),
('taty16', 'o\'mallay', 'Ashley', 'kozldmd@gmail.com', '2021-04-16 07:19:46', 'A', 'R'),
('vanille12', 'Ouedraogo', 'Dina', 'dinaoued@gmail.com', '2021-04-17 19:36:46', 'A', 'R'),
('Yunia', 'DA', 'Kelidah', 'Kelidah@gmail.com', '2021-04-14 22:00:00', 'D', 'R'),
('yuyu', 'KONATE', 'Ashley', 'kozldmd@gmail.com', '2021-04-16 06:12:04', 'D', 'R');

-- --------------------------------------------------------

--
-- Structure de la table `t_selection_sel`
--

CREATE TABLE `t_selection_sel` (
  `SEL_ID` int(11) NOT NULL,
  `CPT_PSEUDO` varchar(60) NOT NULL,
  `SEL_INTITULE` varchar(60) NOT NULL,
  `SEL_TEXTE_INTRODUCTIF` varchar(200) NOT NULL,
  `SEL_DATE_AJOUT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_selection_sel`
--

INSERT INTO `t_selection_sel` (`SEL_ID`, `CPT_PSEUDO`, `SEL_INTITULE`, `SEL_TEXTE_INTRODUCTIF`, `SEL_DATE_AJOUT`) VALUES
(2, 'coco12', 'Entrées', 'entrée conçu pour vous enjailler dès le début!', '2019-03-28 19:52:23'),
(3, 'ananas12', 'Plats', 'Enjoy your meal !', '2019-03-31 18:52:23'),
(4, 'banana12', 'Desserts', 'Du nouveau!', '2021-04-07 04:48:04'),
(8, 'ananas12', 'Pâtisseries', 'Pour le plaisir de vos yeux et de votre ventre!', '2021-04-07 05:31:11'),
(9, 'banana12', 'BOX', 'Ensembles composés intéressants', '2021-04-07 05:38:30'),
(11, 'banana12', 'Autres', 'Quelques idées de repas baby shower', '2021-04-14 15:57:31');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `TA_SELECTION_SEL`
--
ALTER TABLE `TA_SELECTION_SEL`
  ADD PRIMARY KEY (`SEL_ID`,`ELE_ID`),
  ADD KEY `ELE_ID` (`ELE_ID`);

--
-- Index pour la table `T_ACTUALITE_ACT`
--
ALTER TABLE `T_ACTUALITE_ACT`
  ADD PRIMARY KEY (`ACT_ID`),
  ADD KEY `fk_act_cpt` (`CPT_PSEUDO`);

--
-- Index pour la table `T_COMPTE_UTILISATEUR_CPT`
--
ALTER TABLE `T_COMPTE_UTILISATEUR_CPT`
  ADD PRIMARY KEY (`CPT_PSEUDO`);

--
-- Index pour la table `T_ELEMENT_ELE`
--
ALTER TABLE `T_ELEMENT_ELE`
  ADD PRIMARY KEY (`ELE_ID`);

--
-- Index pour la table `T_LIEN`
--
ALTER TABLE `T_LIEN`
  ADD PRIMARY KEY (`LIEN_ID`),
  ADD KEY `fk_LIEN_ELE` (`ELE_ID`);

--
-- Index pour la table `T_PRESENTATION_PRES`
--
ALTER TABLE `T_PRESENTATION_PRES`
  ADD PRIMARY KEY (`PRES_ID`),
  ADD KEY `fk_pres_cpt` (`CPT_PSEUDO`);

--
-- Index pour la table `T_PROFIL_UTILISATEUR_PRO`
--
ALTER TABLE `T_PROFIL_UTILISATEUR_PRO`
  ADD PRIMARY KEY (`CPT_PSEUDO`);

--
-- Index pour la table `t_selection_sel`
--
ALTER TABLE `t_selection_sel`
  ADD PRIMARY KEY (`SEL_ID`),
  ADD KEY `fk_sel_cpt` (`CPT_PSEUDO`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `T_ACTUALITE_ACT`
--
ALTER TABLE `T_ACTUALITE_ACT`
  MODIFY `ACT_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT pour la table `T_ELEMENT_ELE`
--
ALTER TABLE `T_ELEMENT_ELE`
  MODIFY `ELE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `T_LIEN`
--
ALTER TABLE `T_LIEN`
  MODIFY `LIEN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `T_PRESENTATION_PRES`
--
ALTER TABLE `T_PRESENTATION_PRES`
  MODIFY `PRES_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `t_selection_sel`
--
ALTER TABLE `t_selection_sel`
  MODIFY `SEL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `TA_SELECTION_SEL`
--
ALTER TABLE `TA_SELECTION_SEL`
  ADD CONSTRAINT `TA_SELECTION_SEL_ibfk_1` FOREIGN KEY (`SEL_ID`) REFERENCES `t_selection_sel` (`SEL_ID`),
  ADD CONSTRAINT `TA_SELECTION_SEL_ibfk_2` FOREIGN KEY (`ELE_ID`) REFERENCES `T_ELEMENT_ELE` (`ELE_ID`);

--
-- Contraintes pour la table `T_ACTUALITE_ACT`
--
ALTER TABLE `T_ACTUALITE_ACT`
  ADD CONSTRAINT `fk_act_cpt` FOREIGN KEY (`CPT_PSEUDO`) REFERENCES `T_COMPTE_UTILISATEUR_CPT` (`CPT_PSEUDO`);

--
-- Contraintes pour la table `T_LIEN`
--
ALTER TABLE `T_LIEN`
  ADD CONSTRAINT `fk_LIEN_ELE` FOREIGN KEY (`ELE_ID`) REFERENCES `T_ELEMENT_ELE` (`ELE_ID`);

--
-- Contraintes pour la table `T_PRESENTATION_PRES`
--
ALTER TABLE `T_PRESENTATION_PRES`
  ADD CONSTRAINT `fk_pres_cpt` FOREIGN KEY (`CPT_PSEUDO`) REFERENCES `T_COMPTE_UTILISATEUR_CPT` (`CPT_PSEUDO`);

--
-- Contraintes pour la table `T_PROFIL_UTILISATEUR_PRO`
--
ALTER TABLE `T_PROFIL_UTILISATEUR_PRO`
  ADD CONSTRAINT `fk_pro_cpt` FOREIGN KEY (`CPT_PSEUDO`) REFERENCES `T_COMPTE_UTILISATEUR_CPT` (`CPT_PSEUDO`);

--
-- Contraintes pour la table `t_selection_sel`
--
ALTER TABLE `t_selection_sel`
  ADD CONSTRAINT `fk_sel_cpt` FOREIGN KEY (`CPT_PSEUDO`) REFERENCES `T_COMPTE_UTILISATEUR_CPT` (`CPT_PSEUDO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
