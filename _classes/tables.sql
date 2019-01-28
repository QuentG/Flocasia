--
-- Table `forum_categorie`
--

CREATE TABLE `forum_categorie` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_nom` varchar(30) collate latin1_general_ci NOT NULL,
  `cat_ordre` int(11) NOT NULL,
  PRIMARY KEY  (`cat_id`),
  UNIQUE KEY `cat_ordre` (`cat_ordre`)
);

--
-- Table `forum_forum`
--

CREATE TABLE `forum_forum` (
  `forum_id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_cat_id` mediumint(8) NOT NULL,
  `forum_name` varchar(30) collate latin1_general_ci NOT NULL,
  `forum_desc` text collate latin1_general_ci NOT NULL,
  `forum_ordre` mediumint(8) NOT NULL,
  `forum_last_post_id` int(11) NOT NULL,
  `forum_topic` mediumint(8) NOT NULL,
  `forum_post` mediumint(8) NOT NULL,
  `auth_view` tinyint(4) NOT NULL,
  `auth_post` tinyint(4) NOT NULL,
  `auth_topic` tinyint(4) NOT NULL,
  `auth_annonce` tinyint(4) NOT NULL,
  `auth_modo` tinyint(4) NOT NULL,
  PRIMARY KEY  (`forum_id`)
);


--
-- Table `forum_membres`
--

CREATE TABLE `forum_membres` (
  `membre_id` int(11) NOT NULL AUTO_INCREMENT,
  `membre_pseudo` varchar(30) collate latin1_general_ci NOT NULL,
  `membre_mdp` varchar(32) collate latin1_general_ci NOT NULL,
  `membre_email` varchar(250) collate latin1_general_ci NOT NULL,
  `membre_msn` varchar(250) collate latin1_general_ci NOT NULL,
  `membre_siteweb` varchar(100) collate latin1_general_ci NOT NULL,
  `membre_avatar` varchar(100) collate latin1_general_ci NOT NULL,
  `membre_signature` varchar(200) collate latin1_general_ci NOT NULL,
  `membre_localisation` varchar(100) collate latin1_general_ci NOT NULL,
  `membre_inscrit` int(11) NOT NULL,
  `membre_derniere_visite` int(11) NOT NULL,
  `membre_rang` tinyint (4) DEFAULT 2,
  `membre_post` int(11) NOT NULL,
  PRIMARY KEY  (`membre_id`)
);


--
-- Table `forum_post`
--

CREATE TABLE `forum_post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_createur` int(11) NOT NULL,
  `post_texte` text collate latin1_general_ci NOT NULL,
  `post_time` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `post_forum_id` int(11) NOT NULL,
  PRIMARY KEY  (`post_id`)
);



--
-- Table  `forum_topic`
--

CREATE TABLE `forum_topic` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_id` int(11) NOT NULL,
  `topic_titre` char(60) collate latin1_general_ci NOT NULL,
  `topic_createur` int(11) NOT NULL,
  `topic_vu` mediumint(8) NOT NULL,
  `topic_time` int(11) NOT NULL,
  `topic_genre` varchar(30) collate latin1_general_ci NOT NULL,
  `topic_last_post` int(11) NOT NULL,
  `topic_first_post` int(11) NOT NULL,
  `topic_post` mediumint(8) NOT NULL,
  PRIMARY KEY  (`topic_id`),
  UNIQUE KEY `topic_last_post` (`topic_last_post`)
);
