--
-- table `#__ticket`
--
CREATE TABLE IF NOT EXISTS `#__ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `priority` tinyint(1) NOT NULL,
  `theme` int(4) NOT NULL,
  `state` int(4) NOT NULL,
  `affected_to` int(11) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `comment` varchar(255) NOT NULL DEFAULT '',
  `created` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `ordering` int(11) NOT NULL DEFAULT '0',
  `hits` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_jsupport_ticket_created` (`created`),
  KEY `idx_jsupport_ticket_ordering` (`ordering`),
  KEY `ordering` (`ordering`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

INSERT INTO `#__ticket` (id, title, alias, description, priority, theme, state, affected_to, published, hits, created, created_by, modified, modified_by, ordering) VALUES
(2, 'Je n''arrive plus a me connecter', 'ticket_2', 'bla bla ...', 2, 1, 2, 7053, 1, 3, '2013-10-12 11:18:00', 7053, '2013-10-12 11:37:00', 7053, 2),
(3, 'Erreur 404 ?', 'ticket_3', 'Bla bla ...', 3, 1, 1, 0, 1, 1, '2013-10-12 14:56:00', 7053, '0000-00-00 00:00:00', 0, 3),
(4, 'Cadenas sur article en admin ?', 'ticket_4', 'bla bla ...', 4, 1, 3, 7053, 1, 12, '2013-10-12 18:08:00', 7053, '2013-10-12 18:35:00', 7053, 5),
(5, 'les emails ne sont plus envoyés', 'ticket_5', 'bla bla ...', 1, 1, 1, 7053, 0, 2, '2013-10-12 19:08:00', 7053, '0000-00-00 00:00:00', 7053, 8),
(6, 'Le menu contact ne s''affiche plus', 'ticket_6', 'bla bla ...', 1, 1, 1, 7053, 1, 0, '2013-10-20 18:08:00', 7053, '0000-00-00 00:00:00', 7053, 11),
(7, 'Comment ajouter un menu ?', 'ticket_7', 'bla bla ...', 1, 1, 1, 7053, 1, 0, '2013-10-21 11:08:00', 7053, '0000-00-00 00:00:00', 7053, 14);

--
-- table `#__ticket_state`
--
CREATE TABLE IF NOT EXISTS `#__ticket_state` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `label` varchar(30) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `ordering` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

INSERT INTO `#__ticket_state` (`id`, `label`, `published`, `ordering`) VALUES
(1, 'Ouvert', 1, 10),
(2, 'Affecté', 1, 20),
(3, 'Confirmé', 1, 30),
(4, 'Corrigé', 1, 40),
(5, 'Clôturé', 1, 50);

--
-- table `#__ticket_theme`
--
CREATE TABLE IF NOT EXISTS `#__ticket_theme` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `label` varchar(30) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `ordering` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=104 ;

INSERT INTO `#__ticket_theme` (`id`, `label`, `published`, `ordering`) VALUES
(100, 'Installation', 1, 10),
(101, 'Template', 1, 20),
(102, 'Administration', 1, 30),
(103, 'Extensions', 1, 40);
