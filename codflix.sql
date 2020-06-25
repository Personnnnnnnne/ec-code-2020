-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  jeu. 25 juin 2020 à 19:30
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Codflix`
--

-- --------------------------------------------------------

--
-- Structure de la table `episode`
--

CREATE TABLE `episode` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `episode_number` int(11) NOT NULL,
  `saison_number` int(11) NOT NULL,
  `summary` varchar(200) DEFAULT NULL,
  `duration` int(11) NOT NULL,
  `url` varchar(100) DEFAULT NULL,
  `serie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `episode`
--

INSERT INTO `episode` (`id`, `title`, `episode_number`, `saison_number`, `summary`, `duration`, `url`, `serie_id`) VALUES
(1, 'Episode1', 1, 1, 'En 866, le fils ainé du roi saxon de Bebbanburg voit arriver des drakkars et est tué par le comte danois Ragnar. ...', 3540, 'https://www.youtube.com/embed/ZV5LqPzoQAs?autoplay=true', 3),
(2, 'Episode2', 2, 1, 'Après être venu affirmer aux portes de Bebbanburg qu\'il récupérerait son bien, Uhtred est pris en chasse par son oncle Aelfric. ', 3480, 'https://www.youtube.com/embed/iD-cFgDDuqM?autoplay=true', 3),
(3, 'Episode3', 3, 1, 'Serment d\'allégeance. Les indications d\'Uhtred ont permis aux hommes du Wessex de mettre les troupes de Guthrum en déroute,', 3540, 'https://www.youtube.com/embed/iD-cFgDDuqM?autoplay=true', 3),
(6, 'Episode1', 1, 2, 'Un nouvel espoir. Uhtred, l\'intrépide et instinctif guerrier, entame son périple vers le nord pour accomplir son destin', 3360, 'https://www.youtube.com/embed/iD-cFgDDuqM?autoplay=true', 3),
(7, 'Episode2', 2, 2, 'Retrouvez tous les épisodes de la saison 2 de la série TV The Last Kingdom ainsi que les news, personnages, photos et indiscrétions de tournage.', 3420, 'https://www.youtube.com/embed/iD-cFgDDuqM?autoplay=true', 3);

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id`, `name`) VALUES
(1, 'Action'),
(2, 'Horreur'),
(3, 'Science-Fiction');

-- --------------------------------------------------------

--
-- Structure de la table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `finish_date` datetime DEFAULT NULL,
  `watch_duration` int(11) NOT NULL DEFAULT '0' COMMENT 'in seconds'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `history`
--

INSERT INTO `history` (`id`, `user_id`, `media_id`, `start_date`, `finish_date`, `watch_duration`) VALUES
(7, 8, 6, '2020-06-24 00:00:00', '2020-06-24 00:00:00', 12),
(8, 7, 1, '2020-06-24 00:00:00', '2020-06-24 00:00:00', 142);

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `release_date` date NOT NULL,
  `summary` longtext NOT NULL,
  `trailer_url` varchar(100) NOT NULL,
  `duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `media`
--

INSERT INTO `media` (`id`, `genre_id`, `title`, `type`, `status`, `release_date`, `summary`, `trailer_url`, `duration`) VALUES
(1, 1, 'Spider-Man', 'Film', 'Média Publié', '2002-06-12', 'Orphelin, Peter Parker est élevé par sa tante May et son oncle Ben dans le quartier Queens de New York. Tout en poursuivant ses études à l\'université, il trouve un emploi de photographe au journal Daily Bugle. Il partage son appartement avec Harry Osborn, son meilleur ami, et rêve de séduire la belle Mary Jane.', 'https://www.youtube.com/embed/TYMMOjBUPMM?autoplay=true', 7980),
(2, 2, 'Get Out', 'Film', 'Média Non Publié', '2017-05-03', 'Maintenant que Chris et sa copine Rose vont rencontrer leurs parents respectifs, elle l\'invite dans la résidence secondaire de sa famille pour un week-end. D\'abord Chris comprend que le comportement un peu étrange de la famille de Rose est lié au fait qu\'il est noir et qu\'elle est blanche. Cependant, il découvre que la vérité est bien plus dérangeante.', 'https://www.youtube.com/embed/DzfpyUB60YY?autoplay=true', 0),
(3, 1, 'The Last Kingdom', 'Série', 'Média Publié', '2015-10-10', 'Au IXe siècle, l\'Angleterre, séparée en de nombreux royaumes, est envahie par les Vikings menés par le Roi Alfred. Alors que le royaume de Wessex est le seul à résister, Uhtred doit choisir entre son pays natal et le peuple qui l\'a élevé.', 'https://www.youtube.com/embed/WxPApTGWwas?autoplay=true', 17340),
(4, 3, 'Star Wars, épisode III, La revanche des Sith', 'Film', 'Média Publié', '2005-05-18', 'La Guerre des Clones fait rage. Une franche hostilité oppose désormais le Chancelier Palpatine au Conseil Jedi. Anakin Skywalker, jeune Chevalier Jedi pris entre deux feux, hésite sur la conduite à tenir. Séduit par la promesse d\'un pouvoir sans précédent, tenté par le côté obscur de la Force, il prête allégeance au maléfique Darth Sidious et devient Dark Vador.Les Seigneurs Sith s\'unissent alors pour préparer leur revanche, qui commence par l\'extermination des Jedi.', 'https://www.youtube.com/embed/ZV5LqPzoQAs?autoplay=true', 8400),
(5, 2, 'The Order', 'Série', 'Média Non Publié', '2019-03-17', 'Pour venger la mort de sa mère, l\'étudiant Jack Morton rejoint un ordre secret et découvre un monde de magie, de monstres et d\'intrigues. Dans ce chaos, une guerre fait rage entre les loups-garous et les pratiquants de magie noire.', 'https://www.youtube.com/embed/iD-cFgDDuqM?autoplay=true', 0),
(6, 3, 'Lucifer', 'Série', 'Média Non Publié', '2016-01-16', 'Lassé et mécontent de sa position de Seigneur des Enfers, Lucifer Morningstar démissionne et abandonne son royaume pour la bouillonnante Los Angeles. Dans la Cité des anges, l\'ex maître diabolique est le patron d\'un nightclub baptisé Lux.', 'https://www.youtube.com/embed/X4bF_quwNtw?autoplay=true', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(7, 'ui@ui.ui', '$2y$10$8tF8DpCVUmdOH58a0OrJIuzmkl6eXwRpUF2AS8rRihpNd76sbJB3a'),
(8, 'alexnadre.beroule@edu.itescia.fr', '$2y$10$iKunCmxItmxkCr/E0dc1b.F2C1qDMNnoMvU2zVPvq5DbfUPa5mAQS'),
(9, 'coding@gmail.com', '$2y$10$6bIMilUc5N/8HzCNYwCGzunQgGPdwnTNQPKM/V5eLXS9SiWgfRKru');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`id`),
  ADD KEY `serie_id` (`serie_id`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `history_user_id_fk_media_id` (`user_id`),
  ADD KEY `history_media_id_fk_media_id` (`media_id`);

--
-- Index pour la table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_genre_id_fk_genre_id` (`genre_id`) USING BTREE;

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `episode`
--
ALTER TABLE `episode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `episode`
--
ALTER TABLE `episode`
  ADD CONSTRAINT `episode_ibfk_1` FOREIGN KEY (`serie_id`) REFERENCES `media` (`id`);

--
-- Contraintes pour la table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_media_id_fk_media_id` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `history_user_id_fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_genre_id_b1257088_fk_genre_id` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`);
