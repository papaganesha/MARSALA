# Host: 127.0.0.1  (Version 5.7.19)
# Date: 2017-12-04 21:02:49
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "imagedata"
#

CREATE TABLE `imagedata` (
  `idpic` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `imagePath` varchar(1024) NOT NULL,
  PRIMARY KEY (`idpic`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "imagedata"
#

INSERT INTO `imagedata` VALUES (1,'images/aaecbd0e33c59075af81b641ede8dbe6..jpg');

#
# Structure for table "textdata"
#

CREATE TABLE `textdata` (
  `textID` int(11) NOT NULL AUTO_INCREMENT,
  `stTextContent` mediumtext,
  `ndTextContent` mediumtext,
  `rdTextContent` mediumtext,
  PRIMARY KEY (`textID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "textdata"
#

INSERT INTO `textdata` VALUES (1,'Dolor sit amet, consectetur adipiscing elit. Aliquam vitae fringilla augue. Maecenas in lectus lorem. In et accumsan mi. Aenean vestibulum nisl eu arcu viverra iaculis. In hac habitasse platea dictumst. In vehicula diam et mauris imperdiet aliquet In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. .In vehicula diam et mauris In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet.','Dolor sit amet, consectetur adipiscing elit. Aliquam vitae fringilla augue. Maecenas in lectus lorem. In et accumsan mi. Aenean vestibulum nisl eu arcu viverra iaculis. In hac habitasse platea dictumst.  In vehicula diam et mauris imperdiet aliquet In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. .In vehicula diam et mauris\r\nIn vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet.','Dolor sit amet, consectetur adipiscing elit. Aliquam vitae fringilla augue. Maecenas in lectus lorem. In et accumsan mi. Aenean vestibulum nisl eu arcu viverra iaculis. In hac habitasse platea dictumst.  In vehicula diam et mauris imperdiet aliquet In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet. .In vehicula diam et mauris\r\nIn vehicula diam et mauris imperdiet aliquet. In vehicula diam et mauris imperdiet aliquet.');

#
# Structure for table "usuario"
#

CREATE TABLE `usuario` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `usuario` char(32) NOT NULL,
  `senha` char(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "usuario"
#

INSERT INTO `usuario` VALUES (1,'admin','senha123');
