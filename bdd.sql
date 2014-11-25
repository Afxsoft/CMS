-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 25 Novembre 2014 à 22:53
-- Version du serveur: 5.5.40
-- Version de PHP: 5.4.4-14+deb7u14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `my`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `title`, `alias`, `body`, `update`) VALUES
(1, 'Mention légal', 'mention-legal', '<strong>La seule contrepartie à l''utilisation de ces mentions légales, est l''engagement total à laisser le lien crédit subdelirium sur cette page de mentions légales.</strong><br />\r\nVos mentions légales :\r\n<h2>Informations légales</h2>\r\n<h3>1. Présentation du site.</h3>\r\n<p>En vertu de l''article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l''économie numérique, il est précisé aux utilisateurs du site <a href="http://www.sitruc.com/" title="Mme Chantal Bardé - www.sitruc.com">www.sitruc.com</a> l''identité des différents intervenants dans le cadre de sa réalisation et de son suivi :</p>\r\n<p><strong>Propriétaire</strong> : Mme Chantal Bardé – 75390480400014 – 23 657<br />\r\n<strong>Créateur</strong>  : <a href="web-itech.com">Web-Itech</a><br />\r\n<strong>Responsable publication</strong> : Mme Patou – contact@sitruc.com<br />\r\nLe responsable publication est une personne physique ou une personne morale.<br />\r\n<strong>Webmaster</strong> : Mme Patou – patou@sitruc.com<br />\r\n<strong>Hébergeur</strong> : OVH – 93140<br />\r\nCrédits : les mentions légales ont étés générées et offertes par Subdelirium <a target="_blank" href="http://www.subdelirium.com/site-mobile/" alt="creation site mobile responsive">création de site responsive</a></p>\r\n\r\n<h3>2. Conditions générales d’utilisation du site et des services proposés.</h3>\r\n<p>L’utilisation du site <a href="http://www.sitruc.com/" title="Mme Chantal Bardé - www.sitruc.com">www.sitruc.com</a> implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site <a href="http://www.sitruc.com/" title="Mme Chantal Bardé - www.sitruc.com">www.sitruc.com</a> sont donc invités à les consulter de manière régulière.</p>\r\n<p>Ce site est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par Mme Chantal Bardé, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.</p>\r\n<p>Le site <a href="http://www.sitruc.com/" title="Mme Chantal Bardé - www.sitruc.com">www.sitruc.com</a> est mis à jour régulièrement par Mme Patou. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>\r\n<h3>3. Description des services fournis.</h3>\r\n<p>Le site <a href="http://www.sitruc.com/" title="Mme Chantal Bardé - www.sitruc.com">www.sitruc.com</a> a pour objet de fournir une information concernant l’ensemble des activités de la société.</p>\r\n<p>Mme Chantal Bardé s’efforce de fournir sur le site <a href="http://www.sitruc.com/" title="Mme Chantal Bardé - www.sitruc.com">www.sitruc.com</a> des informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>\r\n<p>Tous les informations indiquées sur le site <a href="http://www.sitruc.com/" title="Mme Chantal Bardé - www.sitruc.com">www.sitruc.com</a> sont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site <a href="http://www.sitruc.com/" title="Mme Chantal Bardé - www.sitruc.com">www.sitruc.com</a> ne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>\r\n<h3>4. Limitations contractuelles sur les données techniques.</h3>\r\n<p>Le site utilise la technologie JavaScript.</p>\r\n<p>Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour</p>\r\n<h3>5. Propriété intellectuelle et contrefaçons.</h3>\r\n<p>Mme Chantal Bardé est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels.</p>\r\n<p>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : Mme Chantal Bardé.</p>\r\n<p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>\r\n<h3>6. Limitations de responsabilité.</h3>\r\n<p>Mme Chantal Bardé ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site www.sitruc.com, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>\r\n<p>Mme Chantal Bardé ne pourra également être tenue responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site <a href="http://www.sitruc.com/" title="Mme Chantal Bardé - www.sitruc.com">www.sitruc.com</a>.</p>\r\n<p>Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. Mme Chantal Bardé se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, Mme Chantal Bardé se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie…).</p>\r\n<h3>7. Gestion des données personnelles.</h3>\r\n<p>En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l''article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>\r\n<p>A l''occasion de l''utilisation du site <a href="http://www.sitruc.com/" title="Mme Chantal Bardé - www.sitruc.com">www.sitruc.com</a>, peuvent êtres recueillies : l''URL des liens par l''intermédiaire desquels l''utilisateur a accédé au site <a href="http://www.sitruc.com/" title="Mme Chantal Bardé - www.sitruc.com">www.sitruc.com</a>, le fournisseur d''accès de l''utilisateur, l''adresse de protocole Internet (IP) de l''utilisateur.</p>\r\n<p> En tout état de cause Mme Chantal Bardé ne collecte des informations personnelles relatives à l''utilisateur que pour le besoin de certains services proposés par le site <a href="http://www.sitruc.com/" title="Mme Chantal Bardé - www.sitruc.com">www.sitruc.com</a>. L''utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu''il procède par lui-même à leur saisie. Il est alors précisé à l''utilisateur du site <a href="http://www.sitruc.com/" title="Mme Chantal Bardé - www.sitruc.com">www.sitruc.com</a> l’obligation ou non de fournir ces informations.</p>\r\n<p>Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.</p>\r\n<p>Aucune information personnelle de l''utilisateur du site <a href="http://www.sitruc.com/" title="Mme Chantal Bardé - www.sitruc.com">www.sitruc.com</a> n''est publiée à l''insu de l''utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l''hypothèse du rachat de Mme Chantal Bardé et de ses droits permettrait la transmission des dites informations à l''éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l''utilisateur du site <a href="http://www.sitruc.com/" title="Mme Chantal Bardé - www.sitruc.com">www.sitruc.com</a>.</p>\r\n<p>Le site n''est pas déclaré à la CNIL car il ne recueille pas d''informations personnelles. .</p>\r\n<p>Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>\r\n<h3>8. Liens hypertextes et cookies.</h3>\r\n<p>Le site <a href="http://www.sitruc.com/" title="Mme Chantal Bardé - www.sitruc.com">www.sitruc.com</a> contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de Mme Chantal Bardé. Cependant, Mme Chantal Bardé n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.</p>\r\n<p>La navigation sur le site <a href="http://www.sitruc.com/" title="Mme Chantal Bardé - www.sitruc.com">www.sitruc.com</a> est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation.</p>\r\n<p>Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies :</p>\r\n<p>Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok.</p>\r\n<p>Sous Firefox : en haut de la fenêtre du navigateur, cliquez sur le bouton Firefox, puis aller dans l''onglet Options. Cliquer sur l''onglet Vie privée.\r\n  Paramétrez les Règles de conservation sur :  utiliser les paramètres personnalisés pour l''historique. Enfin décochez-la pour  désactiver les cookies.</p>\r\n<p>Sous Safari : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par un rouage). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section "Confidentialité", cliquez sur Paramètres de contenu. Dans la section "Cookies", vous pouvez bloquer les cookies.</p>\r\n<p>Sous Chrome : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par trois lignes horizontales). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section "Confidentialité", cliquez sur préférences.  Dans l''onglet "Confidentialité", vous pouvez bloquer les cookies.</p>\r\n\r\n<h3>9. Droit applicable et attribution de juridiction.</h3>\r\n<p>Tout litige en relation avec l’utilisation du site <a href="http://www.sitruc.com/" title="Mme Chantal Bardé - www.sitruc.com">www.sitruc.com</a> est soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux compétents de Paris.</p>\r\n<h3>10. Les principales lois concernées.</h3>\r\n<p>Loi n° 78-87 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l''informatique, aux fichiers et aux libertés.</p>\r\n<p> Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l''économie numérique.</p>\r\n<h3>11. Lexique.</h3>\r\n<p>Utilisateur : Internaute se connectant, utilisant le site susnommé.</p>\r\n<p>Informations personnelles : « les informations qui permettent, sous quelque forme que ce soit, directement ou non, l''identification des personnes physiques auxquelles elles s''appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>', '0000-00-00 00:00:00'),
(2, 'Qui somme nous', 'qui-sommes-nous', '<div class="row">\r\n          <div class="col-md-12">\r\n            <h1 class="hl text-center top-zero">Qui sommes-nous ?</h1>\r\n            <p class="lead text-center">\r\n              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget consequat sapien. Phasellus ac augue velit. Cras malesuada lectus et purus consequat porttitor. Vivamus a ultrices ante. Praesent nec dui at tortor tempor ultrices eu nec diam. Nam in aliquam orci, at interdum enim. Donec volutpat turpis vitae placerat suscipit.\r\n            </p>\r\n            <br>\r\n          </div>\r\n        </div>\r\n        <div class="row">\r\n          <div class="col-md-4">\r\n            <div class="about-icon"><i class="fa fa-briefcase"></i></div>\r\n            <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>\r\n            <p class="about-p">\r\n              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget consequat sapien. Phasellus ac augue velit. Cras malesuada lectus et purus consequat porttitor.\r\n            </p>\r\n            <div class="clearfix"></div>\r\n          </div>\r\n          <div class="col-md-4">\r\n            <div class="about-icon"><i class="fa fa-archive"></i></div>\r\n            <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>\r\n            <p class="about-p">\r\n              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget consequat sapien. Phasellus ac augue velit. Cras malesuada lectus et purus consequat porttitor.\r\n            </p>\r\n            <div class="clearfix"></div>\r\n          </div>\r\n          <div class="col-md-4">\r\n            <div class="about-icon"><i class="fa fa-tasks"></i></div>\r\n            <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>\r\n            <p class="about-p">\r\n              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget consequat sapien. Phasellus ac augue velit. Cras malesuada lectus et purus consequat porttitor.\r\n            </p>\r\n            <div class="clearfix"></div>\r\n          </div>\r\n        </div>\r\n        <div class="row">\r\n          <div class="col-md-12">\r\n            <div class="about-btn">\r\n              <a class="btn btn-default" href="/page/notre-equipe">Notre équipe</a> <a class="btn btn-default" href="contact">Nous contacter</a>\r\n            </div>\r\n          </div>\r\n        </div>', '2014-11-25 18:39:00'),
(3, 'Nous contacter', 'contact', '\r\n        <div class="row">\r\n        <!-- Contact us form -->\r\n        <div class="col-sm-8">\r\n          <h2 class="hl top-zero">Nous contacter</h2>\r\n          <hr>\r\n          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin congue tellus ut velit mollis condimentum. Nulla egestas neque sed odio varius facilisis. Donec ac metus gravida leo dictum porttitor.</p>\r\n            <form role="form">\r\n              <div class="form-group">\r\n                <label for="email">Votre adresse mail</label>\r\n                <input type="email" class="form-control" id="email" placeholder="Entrer cotre email">\r\n              </div>\r\n              <div class="form-group">\r\n                <label for="name">Votre nom</label>\r\n                <input type="text" class="form-control" id="name" placeholder="Entrer votre nom">\r\n              </div>\r\n              <div class="form-group">\r\n                <label for="message">Votre message</label>\r\n                <textarea class="form-control" rows="3" id="message" placeholder="Entrer votre message"></textarea>\r\n              </div>\r\n              <div class="checkbox">\r\n                <label>\r\n                  <input type="checkbox"> Recevoir un copie du mail\r\n                </label>\r\n              </div>\r\n              <button type="submit" class="btn btn-green">Envoyer</button>\r\n            </form>\r\n        </div>\r\n        <!-- Right column -->\r\n        <div class="col-sm-4">\r\n          <!-- Out Address -->\r\n          <h4>Notre adresse</h4>\r\n          <hr>\r\n          <p>\r\n           127 Boulevard de la Révolution<br />\r\n                23 657 Gothan City<br />\r\n                Tèl: +0 000 000 00 00<br />\r\n                Fax: +0 000 000 00 00<br />\r\n                Email: <a href="mailto:contact@sitruc">contact@sitruc</a>\r\n          </p>\r\n          <hr>\r\n          <!-- Google Maps -->\r\n          <h4>Google Maps</h4>\r\n          <hr>\r\n          <div class="google-maps">\r\n            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2623.3957597711924!2d2.3933609!3d48.888794399999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66db639224235%3A0xc14c5ed7fbb528de!2s218+Avenue+Jean+Jaur%C3%A8s%2C+75019+Paris!5e0!3m2!1sfr!2sfr!4v1416945632923" width="400" height="300" frameborder="0" style="border:0"></iframe>\r\n          </div>\r\n        </div>\r\n      </div>\r\n        ', '2014-11-25 20:03:58'),
(4, 'Infos & tarifs', 'infos-et-tarifs', ' \r\n        <div class="row">\r\n          <h1 class="hl text-center zero-top">Infos & Tarifs</h1>\r\n          <hr>\r\n        </div>\r\n        <div class="row pricing">\r\n          <div class="col-sm-3">\r\n            <div class="item animated fadeInDown first">\r\n              <div class="head">\r\n                <h4>Scolaire</h4>\r\n                <div class="arrow"></div>\r\n              </div>\r\n              <div class="sceleton">\r\n                <h5>25€<span>/mois</span></h5>\r\n                <ul>\r\n                  <li>Lorem ipsum dolor sit amet</li>\r\n                  <li>Lorem ipsum dolor sit amet</li>\r\n                  <li>Lorem ipsum dolor sit amet</li>\r\n                  <li>Lorem ipsum dolor sit amet</li>\r\n                </ul>\r\n\r\n              </div>\r\n            </div>\r\n          </div>\r\n          <div class="col-sm-3">\r\n            <div class="item animated fadeInDown second">\r\n              <div class="head">\r\n                <h4>Scolaire</h4>\r\n                <div class="arrow"></div>\r\n              </div>\r\n              <div class="sceleton">\r\n                <h5>35€<span>/mois</span></h5>\r\n                <ul>\r\n                  <li>Lorem ipsum dolor sit amet</li>\r\n                  <li>Lorem ipsum dolor sit amet</li>\r\n                  <li>Lorem ipsum dolor sit amet</li>\r\n                  <li>Lorem ipsum dolor sit amet</li>\r\n                </ul>\r\n\r\n              </div>\r\n            </div>\r\n          </div>\r\n          <div class="col-sm-3">\r\n            <div class="item animated fadeInDown third">\r\n              <div class="head">\r\n                <h4>Pro</h4>\r\n                <div class="arrow"></div>\r\n              </div>\r\n              <div class="sceleton">\r\n                <h5>45€<span>/mois</span></h5>\r\n                <ul>\r\n                  <li>Lorem ipsum dolor sit amet</li>\r\n                  <li>Lorem ipsum dolor sit amet</li>\r\n                  <li>Lorem ipsum dolor sit amet</li>\r\n                  <li>Lorem ipsum dolor sit amet</li>\r\n                </ul>\r\n\r\n              </div>\r\n            </div>\r\n          </div>\r\n          <div class="col-sm-3">\r\n            <div class="item animated fadeInDown fourth">\r\n              <div class="head">\r\n                <h4>Spécifique</h4>\r\n                <div class="arrow"></div>\r\n              </div>\r\n              <div class="sceleton">\r\n                <h5>55€<span>/mois</span></h5>\r\n                <ul>\r\n                  <li>Lorem ipsum dolor sit amet</li>\r\n                  <li>Lorem ipsum dolor sit amet</li>\r\n                  <li>Lorem ipsum dolor sit amet</li>\r\n                  <li>Lorem ipsum dolor sit amet</li>\r\n                </ul>\r\n\r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n        ', '2014-11-25 18:52:52'),
(5, 'Itinéraire', 'itineraire', '<div class="row">\r\n          <div class="col-md-12">\r\n            <h1 class="hl text-center top-zero">Itinéraire</h1>\r\n            <br>\r\n          </div>\r\n        </div>\r\n        \r\n        <div class="row">\r\n        <div id="destinationForm">\r\n          <form action="" method="get" name="direction" id="direction">\r\n            <label>Point de départ :</label>\r\n            <input type="text" name="origin" id="origin">\r\n            <label>Destination :</label>\r\n            <input type="text" name="destination" id="destination">\r\n            <input type="button" value="Calculer l''itinéraire" onclick="javascript:calculate()">\r\n          </form>          \r\n        </div>\r\n        <div id="panel"></div>\r\n        <div id="map">\r\n          <p>Veuillez patienter pendant le chargement de la carte...</p>\r\n        </div>\r\n        </div>\r\n      </div>', '2014-11-25 19:36:35'),
(6, 'Notre équipe', 'notre-equipe', '<div class="row">\r\n        <div class="col-xs-12">\r\n          <h1 class="hl text-center top-zero">Notre équipe</h1>\r\n          <p class="lead text-center">\r\n            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget consequat sapien. Phasellus ac augue velit. Cras malesuada lectus et purus consequat porttitor. Vivamus a ultrices ante.\r\n          </p>\r\n          <br>\r\n        </div>\r\n      </div>\r\n      <div class="row">\r\n        <div class="col-md-8 col-md-offset-2">\r\n          <div class="team">\r\n            <div class="member-left">\r\n              <img src="/Public/app/img/chauf1.jpg" alt="Team Member" class="left">\r\n              <h4>Pierre paul</h4>\r\n              <p class="position">Chauffeur</p>\r\n              <a class="btn btn-default " href="/Public/app/cv.pdf" target="_blank">Voir le cv</a>\r\n            </div>\r\n            <div class="member-right">\r\n              <img src="/Public/app/img/chauf2.jpg" alt="Team Member" class="left">\r\n              <h4>Joseph Noel</h4>\r\n              <p class="position">Chauffeur</p>\r\n              <a class="btn btn-default " href="/Public/app/cv.pdf" target="_blank">Voir le cv</a>\r\n            </div>\r\n            <div class="member-left">\r\n              <img src="/Public/app/img/chauf4.jpg" alt="Team Member" class="left">\r\n              <h4>Anne marie</h4>\r\n              <p class="position">Chauffeur</p>\r\n              <a class="btn btn-default " href="/Public/app/cv.pdf" target="_blank">Voir le cv</a>\r\n            </div>\r\n            <div class="member-right">\r\n              <img src="/Public/app/img/chauf3.jpg" alt="Team Member" class="left">\r\n              <h4>Arnaud Michel</h4>\r\n              <p class="position">Chauffeur</p>\r\n              <a class="btn btn-default " href="/Public/app/cv.pdf" target="_blank">Voir le cv</a>\r\n            </div>\r\n          </div>\r\n        </div>\r\n      </div>\r\n      <div class="row">\r\n        <div class="col-xs-12">\r\n          <div class="about-btn">\r\n            <a class="btn btn-default" href="/page/qui-sommes-nous">Qui sommes-nous</a> <a class="btn btn-default" href="/page/contact">Nous contacter</a>\r\n          </div>\r\n        </div>\r\n      </div>\r\n        ', '2014-11-25 20:39:37'),
(7, 'Calendrier', 'calendrier', ' <div class="row">\r\n          <div class="col-md-12">\r\n            <h1 class="hl text-center top-zero">Calendrier</h1>\r\n            <br>\r\n          </div>\r\n        </div>\r\n\r\n        <div class="row">\r\n          <div id="filtre_content" class="four columns">\r\n\r\n          </div>\r\n          <div id="calendrier" class="ten columns">\r\n            <div id="navigation">\r\n              <div id="moisPrecedent" class="onglet"><i class="fa fa-arrow-circle-left"></i></div>\r\n              <div class="date_content">\r\n                <div id="mois_actuel" class="titre"></div>\r\n                <div id="annee_actuelle" class="sstitre"></div>\r\n              </div>\r\n              <div id="moisSuivant" class="onglet"><i class="fa fa-arrow-circle-right"></i></div>\r\n              <div id="btn_show_filtre" class="onglet"><i class="fa fa-sliders"></i></div>\r\n              <div id="btn_show_admin" class="onglet"><i class="fa fa-cog"></i></div>\r\n              <span class="clear"></span>\r\n            </div>\r\n            <div id="tete">\r\n              <div class="jour">L</div>\r\n              <div class="jour">M</div>\r\n              <div class="jour">M</div>\r\n              <div class="jour">J</div>\r\n              <div class="jour">V</div>\r\n              <div class="jour">S</div>\r\n              <div class="jour">D</div>\r\n              <span class="clear"></span>\r\n            </div>\r\n            <div id="content"></div>\r\n            <div id="list"></div>\r\n          </div>\r\n          <div id="admin_content" class="two columns">\r\n            <div id="ajoutEventList"><i class="fa fa-plus"></i></div>\r\n            <div id="suppEventList"><i class="fa fa-trash"></i></div>\r\n            <div id="modifEventList"><i class="fa fa-pencil"></i></div>\r\n            <div id="viewChauffeur"><i class="fa fa-eye"></i></div>\r\n          </div>\r\n\r\n\r\n\r\n          <div id="popup_add_event" class="popup_block ten columns offset-by-four" method="post">\r\n            <div class="close"><i class="fa fa-times"></i></div>\r\n            <form id="add_event_form" novalidate>\r\n              <div class="wrapper">\r\n                <label for="titre">Titre</label>\r\n                <input type="text" id="titre" name="titre" class="form-control"/>\r\n              </div>\r\n              <div class="wrapper">\r\n                <label for="dateDebut">Date de départ : </label>\r\n                <input type="text" id="dateDebut" name="dateDebut" class="chp-date form-control" placeholder="Date de départ"/>\r\n                <input type="text" id="heureDebut" name="heureDebut" class="chp-heure form-control" placeholder="HH:MM:SS"/>\r\n              </div>\r\n              <div class="wrapper">\r\n                <label for="lieuFin">Lieu de départ :</label>\r\n                <input type="text" id="lieuDebut" name="lieuDebut" class="form-control"  placeholder="Lieu de départ"/>\r\n              </div>\r\n              <div class="wrapper">\r\n                <label for="dateFin">Date d''arrivée :</label>\r\n                <input type="text" id="dateFin" name="dateFin" class="chp-date form-control" placeholder="Date d''arrivée"/>\r\n                <input type="text" id="heureFin" name="heureFin" class="chp-heure form-control" placeholder="HH:MM:SS"/>\r\n              </div>\r\n              <div class="wrapper">\r\n                <label for="lieuFin">Lieu d''arrivée :</label>\r\n                <input type="text" id="lieuFin" name="lieuFin" class="form-control"  placeholder="Lieu d''arrivée"/>\r\n              </div>\r\n              <div class="wrapper">\r\n                <label for="detail">Détails :</label>\r\n                <textarea id="detail" name="detail" rows="3" class="form-control"></textarea>\r\n              </div>\r\n              <div class="wrapper">\r\n                <label for="type">Type :</label>\r\n                <select id="type" name ="type">\r\n                </select>\r\n              </div>\r\n              <div class="wrapper">\r\n                <label for="chauffeur">Chauffeur :</label>\r\n                <select id="chauffeur" name ="chauffeur">\r\n                </select>\r\n              </div>\r\n              <input type="submit" id="btn_add_event" formnovalidate="formnovalidate" value="Ajouter" class="btn large">\r\n            </form>\r\n          </div>\r\n\r\n          <div id="popup_supp_event" class="popup_block ten columns offset-by-four" method="post">\r\n            <div class="close"><i class="fa fa-times"></i></div>\r\n            <form id="supp_event_form" novalidate>\r\n              <div id="eventListContent">\r\n\r\n\r\n\r\n              </div>\r\n              <input type="submit" id="btn_supp_event" formnovalidate="formnovalidate" value="Supprimer" class="btn large">\r\n              <input type="submit" id="btn_select_event" formnovalidate="formnovalidate" value="Selectionner" class="btn large">\r\n            </form>\r\n          </div>\r\n          <div id="fade"></div>\r\n\r\n\r\n\r\n\r\n\r\n        </div>', '2014-11-25 21:45:03');

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

CREATE TABLE IF NOT EXISTS `cv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pdf` varchar(255) NOT NULL,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zipcode` int(5) NOT NULL,
  `city` varchar(255) NOT NULL,
  `schedule` varchar(255) NOT NULL,
  `date_start` timestamp NULL DEFAULT NULL,
  `date_end` timestamp NULL DEFAULT NULL,
  `ticket` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `event`
--

INSERT INTO `event` (`id`, `title`, `alias`, `description`, `image`, `address`, `zipcode`, `city`, `schedule`, `date_start`, `date_end`, `ticket`, `price`, `update`) VALUES
(1, 'evenement test', 'evenement-test', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget sodales risus. Nullam feugiat accumsan aliquam. Suspendisse sagittis commodo feugiat. Cras aliquet et lorem a feugiat. Vestibulum sed ante quam. Duis semper magna egestas egestas scelerisque. Nam pharetra quam nec mauris pulvinar eleifend. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam lacinia mollis odio sed euismod. Nullam vestibulum id sem vel tincidunt. Nulla lobortis metus nec viverra porttitor. In eget gravida ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>', '/Public/img/event/nom.jpg', '19 rue jean robert', 75018, 'Paris', ' 17h20', '2014-12-03 23:00:00', '2014-12-03 23:00:00', 50, '', '2014-11-23 09:29:52');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `alias` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `president_word`
--

CREATE TABLE IF NOT EXISTS `president_word` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `body` text NOT NULL,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`id`, `name`, `update`) VALUES
(1, 'admin', '2014-08-20 10:54:36'),
(2, 'anonym', '2014-08-20 10:54:36');

-- --------------------------------------------------------

--
-- Structure de la table `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_role` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `nickname`, `mail`, `password`, `update`, `id_role`) VALUES
(2, 'test', 'tata@gmail.com', '123', '2014-11-11 17:52:03', 2),
(4, 'tes3', 'fat@mail.com', '123', '2014-11-11 17:50:10', 2),
(10, 'archimed', 'archimed@meil.com4', 'e10adc3949ba59abbe56e057f20f883e', '2014-11-10 11:37:48', 2),
(11, 'admin', 'afxsdoft@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2014-11-11 18:40:58', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
