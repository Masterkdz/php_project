-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Sam 05 Janvier 2013 à 13:05
-- Version du serveur: 5.5.27
-- Version de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `projet1`
--

-- --------------------------------------------------------

--
-- Structure de la table `articlesbestiaire`
--

CREATE TABLE IF NOT EXISTS `articlesbestiaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `article` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `articlesbestiaire`
--

INSERT INTO `articlesbestiaire` (`id`, `titre`, `article`) VALUES
(1, 'Le Dragon', '\n<p style=''color : white''>\nDe par son apparence reptilienne, le dragon est intimement lié à la terre. \nCependant il se détache du monde terrestre par sa capacité à voler, ce qui le distingue des rampants, à l''image des serpents (le plus souvent malfaisants) que l''on retrouve de par le monde. \nCes derniers s''opposent, au contraire, aux créatures aériennes, physiquement ou symboliquement\nSes représentations varient cependant énormément en fonction des civilisations. </br>\nSymbole de vie et de puissance en Chine, protecteur en Indonésie, protecteur de trésors en Grèce antique ou encore maléfique et ravisseur de princesses en Europe médiévale.\nUne distinction principale est à faire entre les dragons occidentaux et les dragons orientaux </br>\nLe dragon oriental comparé a l''occidental ressemble beaucoup plus a un serpent et ne possede pas d''ailes\n\n\n</p>\n<Img SRC=''img/dragon1.jpg''  height=''200''> <cite style=''color : white''> Dragon Occidental\n<Img SRC=''img/dragon3.jpg'' ; height=''200'' >Dragon oriental </cite>\n\n<h2 style=''font-family:X-files ; color:red ; background : black''> Le Dragon dans les films/jeux </h2>\n<p> \n<ul>\n<li style=''color : white''>Le dragon est probablement la créature mythique la plus connu de part le monde, de ce faite on ne compte plus sa représentation dans les films et les jeux.\nSi bien qu''ils semblent presque avoir éxisté comme les dinosaures, étaient des fossile du passé. </br>\nBien que dans plusieurs jeux ils n''occupent qu''une place secondaire au sein d''un bestiaire, la majeure partie du temps ce sont des créatures impressionnantes faisant partie intégrante du scénario.</br>\nLa présence de dragons dans les jeux vidéo se remarque d''autant plus que ceux-ci possèdent souvent un nom éponyme.</li></br> </br>\n\n\n<li style=''color : white''>Parmis les jeux les plus connus comptant les dragons parmis leurs rangs et dont ceux ci ont une place importante, on retrouve : Guild wars 2 ; Dark souls ; Dragon Age ; Spyro the dragon ; skyrim. </li> </br> </br>\n\n<li style=''color : white''>Pour les films on citera : Donjon & Dragon ; Le regne du feu ; Coeur de dragon ; The hobbit </li></br> </br>\n\n<li style=''color : white''>Les dragons qu''ils soient ennemis ou alliés représentent la puissance, ils possedent la force necessaire pour raser des villes entieres. Faisant aussi office de sage malgres leur image </li> \n\n</p>'),
(2, 'Les Mortvivants', '<p style="color : white">\n\nLe mort vivant communément appelé ZOMBIE d''apparence humaine est dans la plupart des cas une personne morte ramené à la vie via virus/sorcellerie.</br>\nBien que l''on pourrait se poser la question de savoir si il a sa place ou non dans le bestiaire, la réponse est oui car malgres son apparence humaine il ne possede aucune autre\ncaractéristique de l''humain car ce qui différencie un humain d''un animal c''est sa pensé, le zombie n''en possédant aucune il a alors bien sa place dans ce bestiaire \nLe terme est souvent utilisé pour décrire un individu hypnotisé manquant de conscience mais encore capable de réagir à des stimuli environnementaux. \nDepuis le 19e siècle, les zombis ont établi une popularité notable, en particulier dans les folklores européens et américains. </br>\nUne nuance importante doit cependant être faite entre deux acceptions du zombie. \n</br>La première, la plus ancienne, désigne les cadavres de revenants, souvent ressuscités par l''intermédiaire de sciences occultes et manipulés par un sorcier. \n</br>La seconde, plus récente, désigne en fait des personnes vivantes mais contaminées par une maladie ou un élément chimique qui leur donne l''apparence du mort-vivant, pourrissant debout, se trouvant dépourvu d''intelligence et recherchant continuellement la chair des vivants. \nLeur état est mieux explicable médicalement, mais ils sont souvent davantage incontrôlables1, et surtout, bien plus nombreux, les fictions mettant généralement en scène une poignée de héros face à des hordes innombrables de zombies.</br>\nDe nombreux jeux/films en ont fait leur theme et ont dérivé la forme du zombi lui enlevant l''aspect humain et faisant de lui une chose difforme assembler avec des morceaux de chairs.\n</p>\n<Img SRC="img/Zombi.jpg" height="200"> \n\n<h2 style="font-family:X-files ; color:black ; background:red"> Le mort-vivant dans les films/jeux </h2>\n<p style="color : white"> \n\n<ul style="color : white">\n\n<li>Ces monstres actuellement récurrents dans les histoires d''horreur ont été popularisés par le film La Nuit des morts-vivants en 1968. \nToutefois, en dépit de leur nom, ils ne dérivent pas vraiment du folklore vaudou, mais plutôt des revenants putréfiés et agressifs qui apparurent dans l''art occidental à la fin du Moyen Âge et à la Renaissance. \nÀ l''heure actuelle, le terme de zombie s''est généralisé pour désigner toute créature animée et en état de décomposition avec de larges plaies et cicatrices sur toute la surface de son corps </li> </br> </br>\n\n<li>Il est impossible de parler de mort vivant sans parler de <b>"RESIDENT EVIL"</b>, tout d''abord jeux video puis adapté au grand écran. Cette série exploite le theme du virus \nqui réveille les cellules mortes des individus donnant alors naissance a un mort-vivant, ne gardant que le systeme primaire de la faim bien que techniquement ils ne puissent en mourir\npuisqu''ils le sont déja.\n\nCette série marqua un grand tournant dans l''univers du jeux video a sa sortie.</li>\n</ul>\n</p>'),
(3, 'L''Elementaire', '<h1 style="font-family:X-files ; color:white ; background:green"> L''elementaire </h1>\n\n<p>\nUn élémentaire, est à l''origine une créature imaginaire composée de l''un des quatre éléments issus de la tradition grecque, \nc''est-à-dire l''eau, la terre, l''air et le feu. \nPar extension, certaines créatures sont considérées comme des élémentaires grâce au lien symbolique fort qu''elles entretiennent avec un élément en particulier, \ncomme le feu pour le phénix.\n\n\n\n\n\n</p><Img SRC="img/elemdefeu.jpg" height="50%" width="20%">'),
(4, 'Le Phenix', '\n<p style="color : white">Le phénix est un oiseau légendaire, doué de vie éternelle car caractérisé par le pouvoir de renaître de ses cendres, d''ou l''expression :\n<cite>"renaitre de ses cendres".</cite> </br>\nEn effet lorsqu''un phénix meurt il laisse derriere lui un tas de cendre dont jaillera un nouveau phénix un nouveau phénix, qui contrôlait le feu de mieux en mieux à chaque résurrection ; c''est aussi pour cela qu''on le nomme oiseau de feu \n<blockquote style="font-weight:bold ; font-size:18"> <cite style="color : white"> Ses ailes se teintaient d''un rouge flamme et se réchauffaient jusqu''à ce qu''un feu ardent en sorte, \ntandis que son bec pouvait, s''il le voulait, embraser une forêt avec un feu presque aussi puissant que les flammes du Soleil.</cite></blockquote>\n</p>\n<p style="color : white">\nIl n’existait jamais qu’un seul phénix à la fois ; il vivait très longtemps : aucune tradition ne mentionne une existence inférieure à cinq cents ans.\nIl symbolise ainsi les cycles de mort et de résurrection.\nGeorges Cuvier (1769-1832) voyait en lui le faisan doré (Chrysolophus pictus). Il a également été identifié aux oiseaux de paradis et aux flamants roses.\nDes oiseaux fabuleux semblables au phénix se trouvent dans les mythologies persane sous l''appellation de Simurgh ou Rokh, chinoise sous le nom de Fenghuang, amérindienne (Oiseau-tonnerre) ou aborigène (Oiseau Minka).\nIl s''agit d''un oiseau fabuleux, originaire d''Éthiopie (Afrique de l''est), et rattaché au culte du Soleil, en particulier dans l’ancienne Égypte et dans l’Antiquité classique. \nLe phénix était une sorte d’aigle, mais de taille considérable ; son plumage se parait de rouge, de bleu et d’or éclatant, et son aspect était splendide.\n</p>\n<Img SRC="img/phénix.jpg" height="200">\n\n\n<h2 style="font-family:X-files ; color:red ; background:black"> Le Phénix dans les films/jeux </h2>\n<p> \n<ul>\n<li style="color : white">Une apparition bien connu est celle du phénix dans <cite>"Harry potter"</cite>, le phénix de dumbledore, petit mais que l''on voit renaitre comme la légende le dit et qui a quelques\nreprises vient en aide aux héros de ces films <cite>"Harry potter et la chambre des secrets"</cite></li> </br>\n\n<li style="color : white">Il apparait également dans de nombreux jeux, soit comme une aide, soit comme un ennemi a combattre. Il possede bien des aspects et est souvent représenté de facon un peu différente \nmais globalement identique.</li></p> </ul>\n<blockquote> <cite style="color : white">En ami, il peut apparaitre sous la forme d''un puissant allié ou servir de moyen de transport au personnage </cite></blockquote>\n<blockquote> <cite style="color : white">En ennemi, il apparait comme un obstacle puissant et destructeur comme le feu qu''il incarne</cite></blockquote>\n\n<ul>\n<p><li style="color : white">Mais dans les 2 cas il est un animal mythique majestueux et flamboyant qui réduit ses ennemis en cendre a l''aide d''un souffle de feu dévastateur.</li>\n</ul>\n</p>\n');

-- --------------------------------------------------------

--
-- Structure de la table `articlesnouveautes`
--

CREATE TABLE IF NOT EXISTS `articlesnouveautes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `article` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `articlesnouveautes`
--

INSERT INTO `articlesnouveautes` (`id`, `titre`, `article`) VALUES
(1, 'La Wii U', '<p>	C''est a l''E3 2011 que la nouvelle de Nintendo a &eacute;t&eacute; annonc&eacute;e. Elle fait partie de la huiti&egrave;me g&eacute;n&eacute;ration\n	 de consoles et propose in gameplay in&eacute;dit.\n		En effet, la Wii U est la premi&egrave;re console de salon &agrave; proposer une manette avec un &eacute;cran tactile int&eacute;gr&eacute;,\n		 le Wii U GamePad,bien que ce concept provienne de la GameCube,pouvant &ecirc;tre connect&eacute;e &agrave; la Game Boy Advance via un c&acirc;ble. Les deux principales nouveaut&eacute;s de la console sont apport&eacute;es par celui-ci. D''une part, le Wii U GamePad permet, mais seulement pour certains jeux, de continuer une partie, gr&acirc;ce &agrave; son &eacute;cran int&eacute;gr&eacute;, m&ecirc;me lorsque la t&eacute;l&eacute;vision n''est pas disponible. D''autre part en compl&eacute;ment ''logique'' de la pr&eacute;c&eacute;dente, il offre en multijoueur une exp&eacute;rience de jeu dite "d''informations asym&eacute;triques" des participants, c''est-&agrave;-dire que les joueurs ne disposent pas forcement des m&ecirc;mes informations sur l''affichage de leur pad respectif.\n		A sa sortie, une gamme vari&eacute;e de jeu utilisant le gamepad  apparaissent.\n		 On peut citer les plus connus tels que : New super Mario Bros U , ou envore Zombie U (un jeu survival horror)\n		 . L''avis des joueurs est tr&egrave;s partag&eacute; quant &agrave; cette console : certains la disent ''r&eacute;volutionnaire'' , et d''autres restent &agrave; l''&eacute;cart car pour eux la Wii U reste tr&eacute;s proche de l''ancienne version. </p>'),
(3, 'titre', '<p class="p1">test</p>');

-- --------------------------------------------------------

--
-- Structure de la table `identifiants`
--

CREATE TABLE IF NOT EXISTS `identifiants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` text NOT NULL,
  `motdepasse` text NOT NULL,
  `email` text NOT NULL,
  `statut` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Contenu de la table `identifiants`
--

INSERT INTO `identifiants` (`id`, `pseudo`, `motdepasse`, `email`, `statut`) VALUES
(28, 'Admin', '6a4e012bd9583858a5a6fa15f58bd86a25af266d3a4344f1ec2018b778f29ba83be86eb45e6dc204e11276f4a99eff4e2144fbe15e756c2c88e999649aae7d94', 'admin@hotmail.fr', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `livreor`
--

CREATE TABLE IF NOT EXISTS `livreor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` text NOT NULL,
  `commentaire` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `livreor`
--

INSERT INTO `livreor` (`id`, `pseudo`, `commentaire`, `date`) VALUES
(11, 'test', 'test\r\n', '2013-01-05'),
(12, 'test', 'test\r\n', '2013-01-05'),
(13, '', '', '2013-01-05'),
(14, 'admin2', 'admin\r\n', '2013-01-05');

-- --------------------------------------------------------

--
-- Structure de la table `tshirt`
--

CREATE TABLE IF NOT EXISTS `tshirt` (
  `TshirtHill` varchar(100) NOT NULL,
  `TshirtGears` varchar(100) NOT NULL,
  `TshirtWar` varchar(100) NOT NULL,
  `TshirtEvil` varchar(100) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `tshirt`
--

INSERT INTO `tshirt` (`TshirtHill`, `TshirtGears`, `TshirtWar`, `TshirtEvil`, `Nom`, `Prenom`, `id`) VALUES
('0', '0', '6', '4', 'Doncourt', 'Vincent', 15),
('1', '1', '1', '1', 'La payche', 'Dear', 16),
('5', '5', '5', '5', 'De Zorzi', 'Kévin', 17),
('5', '2', '3', '6', 'dezorzi ', 'kevin', 18),
('', '', '', '', '', '', 19);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
