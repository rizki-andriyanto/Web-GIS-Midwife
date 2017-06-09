/*
Navicat MariaDB Data Transfer

Source Server         : localhost_3306
Source Server Version : 100017
Source Host           : localhost:3306
Source Database       : web_gis_midwife

Target Server Type    : MariaDB
Target Server Version : 100017
File Encoding         : 65001

Date: 2017-06-10 00:24:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for hospital
-- ----------------------------
DROP TABLE IF EXISTS `hospital`;
CREATE TABLE `hospital` (
  `id_hospital` int(20) NOT NULL AUTO_INCREMENT,
  `nama_hospital` varchar(254) DEFAULT NULL,
  `x` double(20,5) DEFAULT NULL,
  `y` double(20,5) DEFAULT NULL,
  `alamat` varchar(254) DEFAULT NULL,
  `no_telpon` int(12) DEFAULT NULL,
  `foto` varchar(254) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `id_post` varchar(5) DEFAULT NULL,
  `fg1` varchar(50) DEFAULT NULL,
  `fg2` varchar(50) DEFAULT NULL,
  `fg3` varchar(50) DEFAULT NULL,
  `layer` varchar(50) DEFAULT NULL,
  UNIQUE KEY `OGR_FID` (`id_hospital`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hospital
-- ----------------------------
INSERT INTO `hospital` VALUES ('1', 'Rumah Sakit Bersalin Mitra Bunda', '112.24138', '-7.54837', 'Jl. Airlangga No.25, Jelakombo', '850005', 'hospital1.jpg', 'Jombang', null, null, null, null, 'rsLayer');
INSERT INTO `hospital` VALUES ('2', 'Rumah Sakit Ibu dan Anak Muslimat', '112.23385', '-7.54397', 'Jl. Urip Sumoharjo, Kepatihan', '861479', 'hospital2.jpg', 'Jombang', null, null, null, null, 'rsLayer');
INSERT INTO `hospital` VALUES ('3', 'Rumah Sakit Bersalin PKU Muhammadiyah', '112.22652', '-7.54629', 'Jl. Sayid Sulaiman No.33, Sengon', '495668', 'hospital3.jpg', 'Jombang', null, null, null, null, 'rsLayer');
INSERT INTO `hospital` VALUES ('4', 'Rumah Sakit Muhammadiyah Jombang', '112.23268', '-7.55331', 'Jl. Dr. Soetomo No. 15, Jombatan', '853480', 'hospital4.jpg', 'Jombang', null, null, null, null, 'rsLayer');
INSERT INTO `hospital` VALUES ('5', 'Rumah Sakit Islam Jombang', '112.23753', '-7.53033', 'Jl. Brigjen Kretarto No.22A, Sambong Dukuh', '860074', 'hospital5.jpg', 'Jombang', null, null, null, null, 'rsLayer');
INSERT INTO `hospital` VALUES ('6', 'Rumah Sakit Bersalin INNA', '112.34616', '-7.56233', 'Mancilan', '0', 'hospital6.jpg', 'Mojoagung', null, null, null, null, 'rsLayer');
INSERT INTO `hospital` VALUES ('7', 'Rumah Sakit Kristen Mojowarno', '112.30176', '-7.63551', ' Jl. Merdeka No.59, Mojowangi', '495093', 'hospital7.jpg', 'Mojowarno', null, null, null, null, 'rsLayer');
INSERT INTO `hospital` VALUES ('8', 'Rumah Sakit Umum Dr. Moedjito Dwidjosiswojo', '112.24356', '-7.54287', 'Jl. Hayam Wuruk No.9, Kepanjen', '877276', 'hospital8.jpg', 'Jombang', null, null, null, null, 'rsLayer');
INSERT INTO `hospital` VALUES ('10', 'Rumah Sakit Umum Daerah Kabupaten Jombang', '112.23613', '-7.54992', 'Jl. KH. Wahid Hasyim No.52, Kepanjen', '865716', 'hospital9.jpg', 'Jombang', null, null, null, null, 'rsLayer');
INSERT INTO `hospital` VALUES ('11', 'RS Al AZIZ', '112.23139', '-7.48306', 'Jl. Raya Tembelang', '853757', 'hospital10.jpg', 'Tembelang', null, null, null, null, 'rsLayer');
INSERT INTO `hospital` VALUES ('12', 'Rumah Bersalin (RB) Dim 0814 Jombang ', '112.23642', '-7.54842', 'JL.K.H Wahid Hasyim, No. 13, Kepanjen', '81524', 'hospital11.jpg', 'Jombang', null, null, null, null, 'rsLayer');
INSERT INTO `hospital` VALUES ('13', 'Pelengkap Medical Center', '112.23552', '-7.54879', ' Kepanjen', '877945', 'hospital12.jpg', 'Jombang', null, null, null, null, 'rsLayer');
INSERT INTO `hospital` VALUES ('14', 'Rumah Sakit Umum Daerah Ploso', '112.21754', '-7.45356', 'Jl. Darmo Sugondo No.83, Rejoagung', '888615', 'hospital13.jpg', 'Ploso', null, null, null, null, 'rsLayer');

-- ----------------------------
-- Table structure for midwife
-- ----------------------------
DROP TABLE IF EXISTS `midwife`;
CREATE TABLE `midwife` (
  `id_midwife` int(20) NOT NULL AUTO_INCREMENT,
  `nama_midwife` text,
  `x` double(20,5) DEFAULT NULL,
  `y` double(20,5) DEFAULT NULL,
  `alamat` text NOT NULL,
  `no_telpon` varchar(15) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `kecamatan` text NOT NULL,
  `id_post` varchar(5) DEFAULT NULL,
  `fg1` varchar(50) DEFAULT NULL,
  `fg2` varchar(50) DEFAULT NULL,
  `fg3` varchar(50) DEFAULT NULL,
  `layer` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_midwife`),
  UNIQUE KEY `OGR_FID` (`id_midwife`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of midwife
-- ----------------------------
INSERT INTO `midwife` VALUES ('1', 'Ny. Dayaroh Amd. Keb', '112.17225', '-7.58570', 'Jl. Raya Sembung, Sembung', '0', 'bidan1.jpg', 'Perak', '61461', null, null, null, 'midwifeLayer');
INSERT INTO `midwife` VALUES ('2', 'Ny Titik S Wahyu Amd Keb', '112.19548', '-7.56804', ' Jalan Lapangan Temuwulan Perak, Temuwulan', '082140010849', 'bidan2.jpg', 'Perak', '61461', null, null, null, 'midwifeLayer');
INSERT INTO `midwife` VALUES ('3', 'Nanik Eryani', '112.23598', '-7.60094', 'Jl. Irian Jaya No.9a, Kwaron, Diwek', '', 'bidan3.jpg', 'Diwek', '61461', null, null, null, 'midwifeLayer');
INSERT INTO `midwife` VALUES ('4', 'Salamah', '112.25505', '-7.53773', 'Jl. Brawijaya No.60, Mancar', '0', 'bidan4.jpg', 'Peterongan', '61461', null, null, null, 'midwifeLayer');
INSERT INTO `midwife` VALUES ('9', 'Nurmaliati', '112.29904', '-7.68365', 'Jl. A. Yani No.12', '', 'bidan5.jpg', 'Bareng', '61461', null, null, null, 'midwifeLayer');
INSERT INTO `midwife` VALUES ('8', 'Lilik', '112.35899', '-7.55997', 'Dukuhdimoro', '', 'bidan6.jpg', 'Mojoagung', '61461', null, null, null, 'midwifeLayer');
INSERT INTO `midwife` VALUES ('7', 'Yuni', '112.25433', '-7.56327', 'Sumbermulyo', '855188', 'bidan7.jpg', 'Jogoroto', '61461', null, null, null, 'midwifeLayer');
INSERT INTO `midwife` VALUES ('6', 'Ny. Lilis Hartono', '112.29844', '-7.60269', ' Jl. Raya Menganto, Menganto', '', 'bidan8.jpg', 'Mojowarno', '61461', null, null, null, 'midwifeLayer');
INSERT INTO `midwife` VALUES ('10', 'Ruliati', '112.27676', '-7.56349', 'Jalan Makam, Ngumpul', '', 'bidan9.jpg', 'Jogoroto', '61461', null, null, null, 'midwifeLayer');
INSERT INTO `midwife` VALUES ('11', 'Bu SULIANI S.ST', '112.21894', '-7.56335', 'Jl. Basuki Rahmad', '', 'bidan10.jpg', 'Jombang', '61461', null, null, null, 'midwifeLayer');
INSERT INTO `midwife` VALUES ('12', 'Ny.Denok FA Amd.Keb', '112.35264', '-7.49465', 'Kendalsari, Sumobito', ' 082233558002', 'bidan11.jpg', 'Sumobito', '61461', null, null, null, 'midwifeLayer');
INSERT INTO `midwife` VALUES ('13', 'Lilis Zumrotin Nisa', '112.29530', '-7.60150', 'Jl. Raya Menganto, Menganto', ' 082232145050', 'bidan12.jpg', 'Mojowarno', '61461', null, null, null, 'midwifeLayer');
INSERT INTO `midwife` VALUES ('15', 'Khusnul Muassyiroh', '112.32544', '-7.56202', ' Plemahan, Sumobito', ' 081330609069', 'bidan13.jpg', 'Sumobito', '61461', null, null, null, 'midwifeLayer');
INSERT INTO `midwife` VALUES ('17', 'Ny. Diyah', '112.38496', '-7.46130', 'Blimbing, Kesamben', '', 'bidan14.jpg', 'Kesamben', '61461', null, null, null, 'midwifeLayer');
INSERT INTO `midwife` VALUES ('18', 'Yanita Dwi Fatmawati', '112.15185', '-7.40067', 'Marmoyo, RT. 01 / RW. 01', ' 082244183330', 'bidan15.jpg', 'Kabuh', '61461', null, null, null, 'midwifeLayer');
INSERT INTO `midwife` VALUES ('20', 'Sumarnik', '112.28645', '-7.54497', 'Jl. Raya Peterongan, Plosokerep', '', 'bidan16.jpg', 'Sumobito', '61461', null, null, null, 'midwifeLayer');
INSERT INTO `midwife` VALUES ('21', 'Kasriati', '112.26260', '-7.61708', 'Grogol', ' 085815566952', 'bidan17.jpg', 'Diwek', '61461', null, null, null, 'midwifeLayer');
INSERT INTO `midwife` VALUES ('22', 'Ratna', '112.32403', '-7.49720', 'Gedangan, Sumobito', '', 'bidan18.jpg', 'Sumobito', '61461', null, null, null, 'midwifeLayer');
INSERT INTO `midwife` VALUES ('23', 'Delima Eka Mamik Farida', '112.12008', '-7.56320', 'Brodot', ' 085336218801', 'bidan19.jpg', 'Bandar Kedungmulyo', '61461', null, null, null, 'midwifeLayer');

-- ----------------------------
-- Table structure for poin
-- ----------------------------
DROP TABLE IF EXISTS `poin`;
CREATE TABLE `poin` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of poin
-- ----------------------------
INSERT INTO `poin` VALUES ('1', 'hospital', 'hospital.png');
INSERT INTO `poin` VALUES ('2', 'midwife', 'midwife-logo.png');

-- ----------------------------
-- Table structure for subdistrict
-- ----------------------------
DROP TABLE IF EXISTS `subdistrict`;
CREATE TABLE `subdistrict` (
  `id_subdistrict` int(50) NOT NULL AUTO_INCREMENT,
  `name_subdistrict` text NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `amount_village` float(10,0) DEFAULT NULL,
  `amount_population` float(10,0) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `area` double(10,2) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_subdistrict`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of subdistrict
-- ----------------------------
INSERT INTO `subdistrict` VALUES ('1', 'Bandar Kedungmulyo', 'Perak adalah sebuah kecamatan di Kabupaten Jombang, Jawa Timur, Indonesia. Terletak di bagian barat Kabupaten Jombang, berbatasan pula dengan wilayah Kabupaten Kediri. Di Perak terdapat pondok pesantren yang berafiliasi dengan LDII.', '13', '48989', 'Jawa Timur', '29.05', 'Jombang');
INSERT INTO `subdistrict` VALUES ('2', 'Perak', 'Perak adalah sebuah kecamatan di Kabupaten Jombang, Jawa Timur, Indonesia. Terletak di bagian barat Kabupaten Jombang, berbatasan pula dengan wilayah Kabupaten Kediri. Di Perak terdapat pondok pesantren yang berafiliasi dengan LDII.', '13', '48989', 'Jawa Timur', '29.05', 'Jombang');
INSERT INTO `subdistrict` VALUES ('3', 'Gudo', 'Perak adalah sebuah kecamatan di Kabupaten Jombang, Jawa Timur, Indonesia. Terletak di bagian barat Kabupaten Jombang, berbatasan pula dengan wilayah Kabupaten Kediri. Di Perak terdapat pondok pesantren yang berafiliasi dengan LDII.', '13', '48989', 'Jawa Timur', '29.05', 'Jombang');
INSERT INTO `subdistrict` VALUES ('4', 'Diwek', 'Perak adalah sebuah kecamatan di Kabupaten Jombang, Jawa Timur, Indonesia. Terletak di bagian barat Kabupaten Jombang, berbatasan pula dengan wilayah Kabupaten Kediri. Di Perak terdapat pondok pesantren yang berafiliasi dengan LDII.', '13', '48989', 'Jawa Timur', '29.05', 'Jombang');
INSERT INTO `subdistrict` VALUES ('5', 'Ngoro', 'Perak adalah sebuah kecamatan di Kabupaten Jombang, Jawa Timur, Indonesia. Terletak di bagian barat Kabupaten Jombang, berbatasan pula dengan wilayah Kabupaten Kediri. Di Perak terdapat pondok pesantren yang berafiliasi dengan LDII.', '13', '48989', 'Jawa Timur', '29.05', 'Jombang');
INSERT INTO `subdistrict` VALUES ('6', 'Mojowarno', 'Perak adalah sebuah kecamatan di Kabupaten Jombang, Jawa Timur, Indonesia. Terletak di bagian barat Kabupaten Jombang, berbatasan pula dengan wilayah Kabupaten Kediri. Di Perak terdapat pondok pesantren yang berafiliasi dengan LDII.', '13', '48989', 'Jawa Timur', '29.05', 'Jombang');
INSERT INTO `subdistrict` VALUES ('7', 'Bareng', 'Perak adalah sebuah kecamatan di Kabupaten Jombang, Jawa Timur, Indonesia. Terletak di bagian barat Kabupaten Jombang, berbatasan pula dengan wilayah Kabupaten Kediri. Di Perak terdapat pondok pesantren yang berafiliasi dengan LDII.', '13', '48989', 'Jawa Timur', '29.05', 'Jombang');
INSERT INTO `subdistrict` VALUES ('8', 'Wonosalam', 'Perak adalah sebuah kecamatan di Kabupaten Jombang, Jawa Timur, Indonesia. Terletak di bagian barat Kabupaten Jombang, berbatasan pula dengan wilayah Kabupaten Kediri. Di Perak terdapat pondok pesantren yang berafiliasi dengan LDII.', '13', '48989', 'Jawa Timur', '29.05', 'Jombang');
INSERT INTO `subdistrict` VALUES ('9', 'Mojoagung', 'Perak adalah sebuah kecamatan di Kabupaten Jombang, Jawa Timur, Indonesia. Terletak di bagian barat Kabupaten Jombang, berbatasan pula dengan wilayah Kabupaten Kediri. Di Perak terdapat pondok pesantren yang berafiliasi dengan LDII.', '13', '48989', 'Jawa Timur', '29.05', 'Jombang');
INSERT INTO `subdistrict` VALUES ('10', 'Sumobito', 'Perak adalah sebuah kecamatan di Kabupaten Jombang, Jawa Timur, Indonesia. Terletak di bagian barat Kabupaten Jombang, berbatasan pula dengan wilayah Kabupaten Kediri. Di Perak terdapat pondok pesantren yang berafiliasi dengan LDII.', '13', '48989', 'Jawa Timur', '29.05', 'Jombang');
INSERT INTO `subdistrict` VALUES ('11', 'Jogoroto', 'Perak adalah sebuah kecamatan di Kabupaten Jombang, Jawa Timur, Indonesia. Terletak di bagian barat Kabupaten Jombang, berbatasan pula dengan wilayah Kabupaten Kediri. Di Perak terdapat pondok pesantren yang berafiliasi dengan LDII.', '13', '48989', 'Jawa Timur', '29.05', 'Jombang');
INSERT INTO `subdistrict` VALUES ('12', 'Peterongan', 'Perak adalah sebuah kecamatan di Kabupaten Jombang, Jawa Timur, Indonesia. Terletak di bagian barat Kabupaten Jombang, berbatasan pula dengan wilayah Kabupaten Kediri. Di Perak terdapat pondok pesantren yang berafiliasi dengan LDII.', '13', '48989', 'Jawa Timur', '29.05', 'Jombang');
INSERT INTO `subdistrict` VALUES ('13', 'Jombang', 'Perak adalah sebuah kecamatan di Kabupaten Jombang, Jawa Timur, Indonesia. Terletak di bagian barat Kabupaten Jombang, berbatasan pula dengan wilayah Kabupaten Kediri. Di Perak terdapat pondok pesantren yang berafiliasi dengan LDII.', '13', '48989', 'Jawa Timur', '29.05', 'Jombang');
INSERT INTO `subdistrict` VALUES ('14', 'Megaluh', 'Perak adalah sebuah kecamatan di Kabupaten Jombang, Jawa Timur, Indonesia. Terletak di bagian barat Kabupaten Jombang, berbatasan pula dengan wilayah Kabupaten Kediri. Di Perak terdapat pondok pesantren yang berafiliasi dengan LDII.', '13', '48989', 'Jawa Timur', '29.05', 'Jombang');
INSERT INTO `subdistrict` VALUES ('15', 'Tembelang', 'Perak adalah sebuah kecamatan di Kabupaten Jombang, Jawa Timur, Indonesia. Terletak di bagian barat Kabupaten Jombang, berbatasan pula dengan wilayah Kabupaten Kediri. Di Perak terdapat pondok pesantren yang berafiliasi dengan LDII.', '13', '48989', 'Jawa Timur', '29.05', 'Jombang');
INSERT INTO `subdistrict` VALUES ('16', 'Kesamben', 'Perak adalah sebuah kecamatan di Kabupaten Jombang, Jawa Timur, Indonesia. Terletak di bagian barat Kabupaten Jombang, berbatasan pula dengan wilayah Kabupaten Kediri. Di Perak terdapat pondok pesantren yang berafiliasi dengan LDII.', '13', '48989', 'Jawa Timur', '29.05', 'Jombang');
INSERT INTO `subdistrict` VALUES ('17', 'Kudu', 'Perak adalah sebuah kecamatan di Kabupaten Jombang, Jawa Timur, Indonesia. Terletak di bagian barat Kabupaten Jombang, berbatasan pula dengan wilayah Kabupaten Kediri. Di Perak terdapat pondok pesantren yang berafiliasi dengan LDII.', '13', '48989', 'Jawa Timur', '29.05', 'Jombang');
INSERT INTO `subdistrict` VALUES ('18', 'Ngusikan', 'Perak adalah sebuah kecamatan di Kabupaten Jombang, Jawa Timur, Indonesia. Terletak di bagian barat Kabupaten Jombang, berbatasan pula dengan wilayah Kabupaten Kediri. Di Perak terdapat pondok pesantren yang berafiliasi dengan LDII.', '13', '48989', 'Jawa Timur', '29.05', 'Jombang');
INSERT INTO `subdistrict` VALUES ('19', 'Ploso', 'Perak adalah sebuah kecamatan di Kabupaten Jombang, Jawa Timur, Indonesia. Terletak di bagian barat Kabupaten Jombang, berbatasan pula dengan wilayah Kabupaten Kediri. Di Perak terdapat pondok pesantren yang berafiliasi dengan LDII.', '13', '48989', 'Jawa Timur', '29.05', 'Jombang');
INSERT INTO `subdistrict` VALUES ('20', 'Kabuh', 'Perak adalah sebuah kecamatan di Kabupaten Jombang, Jawa Timur, Indonesia. Terletak di bagian barat Kabupaten Jombang, berbatasan pula dengan wilayah Kabupaten Kediri. Di Perak terdapat pondok pesantren yang berafiliasi dengan LDII.', '13', '48989', 'Jawa Timur', '29.05', 'Jombang');
INSERT INTO `subdistrict` VALUES ('21', 'Plandaan', 'Perak adalah sebuah kecamatan di Kabupaten Jombang, Jawa Timur, Indonesia. Terletak di bagian barat Kabupaten Jombang, berbatasan pula dengan wilayah Kabupaten Kediri. Di Perak terdapat pondok pesantren yang berafiliasi dengan LDII.', '13', '48989', 'Jawa Timur', '29.05', 'Jombang');
