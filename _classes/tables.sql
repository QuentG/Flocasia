--
-- Table structure for table `forum_categories`
--

CREATE TABLE `forum_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `forum_messages`
--

CREATE TABLE `forum_messages` (
  `id` int(11) NOT NULL,
  `id_topic` int(11) NOT NULL,
  `id_posteur` int(11) NOT NULL,
  `date_heure_post` datetime NOT NULL,
  `date_heure_edition` datetime NOT NULL,
  `meilleure_reponse` tinyint(1) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `forum_sous-categories`
--

CREATE TABLE `forum_sous-categories` (
  `id` int(11) NOT NULL,
  `id_categories` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `forum_suivis`
--

CREATE TABLE `forum_suivis` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_topic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `forum_topics`
--

CREATE TABLE `forum_topics` (
  `id` int(11) NOT NULL,
  `id_createur` int(11) NOT NULL,
  `sujet` text NOT NULL,
  `contenu` text NOT NULL,
  `date-heure-creation` datetime NOT NULL,
  `resolu` tinyint(1) NOT NULL,
  `notif_createur` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `forum_topics-categorie`
--

CREATE TABLE `forum_topics-categorie` (
  `id` int(11) NOT NULL,
  `id_topic` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_souscategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forum_categories`
--
ALTER TABLE `forum_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_messages`
--
ALTER TABLE `forum_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_sous-categories`
--
ALTER TABLE `forum_sous-categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_suivis`
--
ALTER TABLE `forum_suivis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_topics`
--
ALTER TABLE `forum_topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_topics-categorie`
--
ALTER TABLE `forum_topics-categorie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forum_categories`
--
ALTER TABLE `forum_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum_messages`
--
ALTER TABLE `forum_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum_sous-categories`
--
ALTER TABLE `forum_sous-categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum_suivis`
--
ALTER TABLE `forum_suivis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum_topics`
--
ALTER TABLE `forum_topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum_topics-categorie`
--
ALTER TABLE `forum_topics-categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
