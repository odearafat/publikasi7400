-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2019 at 10:14 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `publikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_transaksi`
--

CREATE TABLE `jenis_transaksi` (
  `id_jenis_transaksi` int(11) NOT NULL,
  `nama_transaksi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `authKey` varchar(50) DEFAULT NULL,
  `accessToken` varchar(50) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `authKey`, `accessToken`, `role`) VALUES
(1, 'mursit', 'bismillah', 'mursit-12345', 'mumu2937412912zzzz', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `master_bidang`
--

CREATE TABLE `master_bidang` (
  `id_bidang` char(2) NOT NULL,
  `nm_bidang` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_bidang`
--

INSERT INTO `master_bidang` (`id_bidang`, `nm_bidang`) VALUES
('1', 'Bagian Tata Usaha'),
('2', 'Bidang Statistik Sosial'),
('3', 'Bidang Statistik Produksi'),
('4', 'Bidang Statistik Distribusi'),
('5', 'Bidang Neraca dan Wilayah dan Analisis Statistik'),
('6', 'Bidang Integrasi Pengolahan dan Diseminasi Statistik');

-- --------------------------------------------------------

--
-- Table structure for table `master_gol`
--

CREATE TABLE `master_gol` (
  `id_gol` char(2) NOT NULL,
  `n_gol` char(5) NOT NULL,
  `pangkat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_gol`
--

INSERT INTO `master_gol` (`id_gol`, `n_gol`, `pangkat`) VALUES
('11', 'I/a', 'Juru Muda'),
('12', 'I/b', 'Juru Muda Tk. I'),
('13', 'I/c', 'Juru'),
('14', 'I/d', 'Juru Tk. I'),
('21', 'II/a', 'Pengatur Muda'),
('22', 'II/b', 'Pengatur Muda Tk. I'),
('23', 'II/c', 'Pengatur'),
('24', 'II/d', 'Pengatur Tk. I'),
('31', 'III/a', 'Penata Muda'),
('32', 'III/b', 'Penata Muda Tk. I'),
('33', 'III/c', 'Penata'),
('34', 'III/d', 'Penata Tk. I'),
('41', 'IV/a', 'Pembina'),
('42', 'IV/b', 'Pembina Tk. I'),
('43', 'IV/c', 'Pembina Utama Muda'),
('44', 'IV/d', 'Pembina Utama Madya'),
('45', 'IV/e', 'Pembina Utama');

-- --------------------------------------------------------

--
-- Table structure for table `master_pegawai`
--

CREATE TABLE `master_pegawai` (
  `niplama` varchar(9) NOT NULL,
  `nipbaru` varchar(25) NOT NULL,
  `gelar_depan` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `gelar_belakang` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_gol` char(2) NOT NULL,
  `id_org` char(5) NOT NULL,
  `id_satker` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_pegawai`
--

INSERT INTO `master_pegawai` (`niplama`, `nipbaru`, `gelar_depan`, `nama`, `gelar_belakang`, `email`, `id_gol`, `id_org`, `id_satker`) VALUES
('340007093', '196008201980012001', '', 'Nurbaety Setram', 'S.Si, M.S', 'nurbaety@bps.go.id', '42', '92800', '7471'),
('340007464', '195906181980031002', '', 'Sunadi', 'SE', 'sunadi4@bps.go.id', '42', '92800', '7403'),
('340008433', '196110311981031002', '', 'Syarif Usman', 'SE', 'syarif.usman@bps.go.id', '34', '92530', '7400'),
('340009534', '196004031982031007', '', 'Mohammad Hidayat Basiran', '', 'hidayat.basiran@bps.go.id', '32', '92870', '7407'),
('340009535', '196011101982031009', '', 'Daniel Roso', '', 'daniel.roso@bps.go.id', '34', '92630', '7400'),
('340009536', '196012311982032025', '', 'Idah', 'SE, M.Si', 'idah.se@bps.go.id', '41', '92330', '7400'),
('340009539', '196010301982032001', '', 'Salipah S', 'SE', 'salipah@bps.go.id', '34', '92630', '7400'),
('340009540', '195812311982031079', '', 'La Ode Zihadu M', '', 'zihadu@bps.go.id', '34', '92810', '7402'),
('340009541', '195912311982031035', '', 'La Dia', '', 'la.dia@bps.go.id', '34', '92820', '7402'),
('340009542', '196106071982031006', '', 'Laode Muhamad Alfarid', 'SE', 'alfarid@bps.go.id', '34', '92420', '7400'),
('340009543', '196006051982031010', '', 'Sinana ', 'SE', 'sinana@bps.go.id', '34', '92830', '7471'),
('340009544', '195912311982032016', '', 'Aminati', 'SE', 'aminati@bps.go.id', '34', '92150', '7400'),
('340009546', '196210081982032001', '', 'Suharni', '', 'suharni@bps.go.id', '32', '92860', '7471'),
('340009547', '196011021982032004', '', 'Nurwiah', '', 'nurwiah@bps.go.id', '32', '92810', '7472'),
('340009548', '196101091982031003', '', 'Asaruddin', '', 'asaruddin@bps.go.id', '32', '92830', '7402'),
('340009549', '196012311982031083', '', 'La Mane', '', 'lamane@bps.go.id', '34', '92870', '7471'),
('340009589', '196212311982032006', '', 'Wa Zalima', 'S.Si', 'zalima@bps.go.id', '42', '92500', '7400'),
('340009709', '196012311982032024', '', 'Sumiati', '', '', '32', '92130', '7400'),
('340009859', '196012311983011007', '', 'Aminuddin', 'S.Sos', 'aminuddin@bps.go.id', '34', '92140', '7400'),
('340010190', '196112311983022003', '', 'Masni', '', 'masni@bps.go.id', '32', '92410', '7400'),
('340010192', '196006161983022001', '', 'Waode Mariani', '', 'waode.mariani@bps.go.id', '32', '92870', '7472'),
('340010193', '196108261983022001', '', 'Hanawiah', '', 'hanawiah@bps.go.id', '34', '92810', '7406'),
('340010194', '196012311983021009', '', 'Harianto', 'SH', 'harianto2@bps.go.id', '34', '92810', '7472'),
('340010195', '196007151983021003', '', 'La Hansu', 'SP', 'la.hansu@bps.go.id', '34', '92830', '7404'),
('340010196', '196209011983022001', '', 'Sarlina', '', 'sarlina@bps.go.id', '34', '92810', '7405'),
('340010202', '196008261983021001', '', 'La Ode Munarwi', '', 'munarwi@bps.go.id', '34', '92810', '7407'),
('340010345', '196212311983021007', '', 'Laode Haris Sumba', 'SST', 'hsumba@bps.go.id', '42', '92800', '7401'),
('340010704', '196401011983112001', '', 'Bonda Binti Saleh Duro', '', 'bonda@bps.go.id', '32', '92860', '7471'),
('340010847', '196312311984031006', '', 'Aladin', 'SE, MM', 'aladin@bps.go.id', '41', '92320', '7400'),
('340011058', '196204121985031033', '', 'Agus Pambudi', '', 'agus.pambudi@bps.go.id', '33', '92870', '7403'),
('340011167', '195905111985031005', '', 'Andi Lutfi S', '', 'andi.lutfi@bps.go.id', '34', '92810', '7404'),
('340011174', '196004031985031004', '', 'Said Ladesi', '', 'said.ladesi@bps.go.id', '34', '92820', '7405'),
('340011532', '196112311986031034', '', 'La Ode Musarafa', '', 'musarafa@bps.go.id', '34', '92840', '7401'),
('340011534', '196109191986031003', '', 'Sakka S', '', 'sakkas@bps.go.id', '34', '92870', '7406'),
('340011548', '196205031986031005', '', 'Basran', '', 'basran2@bps.go.id', '33', '92840', '7410'),
('340011687', '196405081987021002', 'Ir', 'Atqo Mardiyanto', 'M.Si', 'atqo@bps.go.id', '43', '92000', '7400'),
('340011778', '196205311987111001', '', 'Teguh Winarna', 'SE', 'teguhwin@bps.go.id', '34', '92830', '7403'),
('340011801', '196412311988021002', '', 'Jufiadi', '', 'jufiadi@bps.go.id', '34', '92870', '7404'),
('340011802', '196709221988021001', '', 'Zubair', '', 'zubair@bps.go.id', '34', '92870', '7402'),
('340011824', '196904271988022001', '', 'Sultriawati Efendy', 'SP, M.S.', 'sultri@bps.go.id', '42', '92800', '7406'),
('340011825', '196710171988022001', '', 'Sitti Maswiah', 'SE, M.S', 'maswiah@bps.go.id', '41', '92230', '7400'),
('340011914', '196902031988031001', '', 'Hendra Gunawan', '', 'hendra.gunawan@bps.go.id', '32', '92840', '7403'),
('340011923', '196410301988031002', '', 'Arsyad Kadir', '', 'arsyad.kadir@bps.go.id', '34', '92810', '7408'),
('340011963', '196301011988031004', '', 'Amiruddin', 'SE', 'amirud@bps.go.id', '34', '92840', '7404'),
('340012057', '196712311989021008', '', 'La Kuruni', 'SP', 'la.kuruni@bps.go.id', '34', '92840', '7402'),
('340012058', '196812311989021004', '', 'La Samsudin', 'SP', 'la.samsudin@bps.go.id', '34', '92830', '7402'),
('340012059', '196612311989021005', '', 'La Madi Ibrahim', '', 'lamadi@bps.go.id', '33', '92870', '7401'),
('340012060', '196512311989021003', '', 'Tahir', '', 'tahir@bps.go.id', '33', '92870', '7402'),
('340012061', '196307051989021001', '', 'Kaharuddin', '', 'kaharuddin@bps.go.id', '33', '92870', '7409'),
('340012062', '196509221989022001', '', 'Wa Ode Mulia. S', '', 'waode.mulia@bps.go.id', '33', '92860', '7402'),
('340012063', '196601011989021001', '', 'Sudin', '', 'sudin@bps.go.id', '33', '92860', '7403'),
('340012064', '196503161989021001', '', 'Muslimin', 'SP', 'muslimin@bps.go.id', '34', '92850', '7404'),
('340012065', '196807071989021002', '', 'Masdin', 'SP, M.Si', 'masdin@bps.go.id', '33', '92830', '7410'),
('340012066', '196703011989021001', '', 'Wasruddin', 'SP', 'waswas@bps.go.id', '34', '92810', '7410'),
('340012067', '196601121989021002', '', 'Sidik SE', '', 'sidik2@bps.go.id', '41', '92810', '7403'),
('340012068', '196810091989021001', '', 'Nawir', '', 'nawir2@bps.go.id', '32', '92870', '7405'),
('340012094', '196105131989021003', '', 'Paulus T', '', 'paulust@bps.go.id', '32', '92130', '7400'),
('340012188', '196007251989031002', '', 'Ruben Rambo', '', 'ruben.rambo@bps.go.id', '32', '92310', '7400'),
('340012215', '196612311989031013', '', 'Muhlis', 'SE, M.Si', 'muhlisse@bps.go.id', '42', '92800', '7404'),
('340012333', '196610111989031002', '', 'Hasim', '', 'hasim@bps.go.id', '33', '92810', '7409'),
('340012427', '197001271990021002', '', 'Manggoa Joni', '', 'manggoa.joni@bps.go.id', '31', '92520', '7400'),
('340012439', '196803091990031002', '', 'Amaluddin Hasan', '', 'amal@bps.go.id', '32', '92870', '7401'),
('340012467', '196803141990031007', '', 'Samar', '', 'samar@bps.go.id', '34', '92830', '7405'),
('340012562', '196709111990031002', '', 'Toto Haryanto Silitonga', 'SSi, M.Eng', 'tsilitonga@bps.go.id', '41', '92300', '7400'),
('340012632', '196805071990081001', '', 'Muhammad Bambang', '', 'mbambang@bps.go.id', '32', '92870', '7401'),
('340012722', '196702061991011001', '', 'Sudirman K', 'S.Pi, M.Si', 'sudirmank@bps.go.id', '42', '92800', '7472'),
('340012723', '196802171991012001', '', 'Syamsiah Rajiani', '', '', '32', '92130', '7400'),
('340012790', '196804061991021002', '', 'La Ode Ibrahim', '', 'laode.ibrahim@bps.go.id', '32', '92870', '7472'),
('340012943', '196704241991031003', '', 'Abd. Ahya. L', '', 'ahya@bps.go.id', '33', '92870', '7403'),
('340012987', '196912101991121001', '', 'Dani Jaelani', 'S.Si, M.T.', 'jaelani@bps.go.id', '41', '92200', '7400'),
('340013115', '196909071992031002', '', 'Herianto', '', 'herianto@bps.go.id', '34', '92870', '7404'),
('340013116', '196907061992032003', '', 'Nurjana', '', 'nurjana@bps.go.id', '32', '92870', '7472'),
('340013152', '196912311992031035', '', 'Mulyono SP', '', 'muliono@bps.go.id', '34', '92820', '7407'),
('340013153', '196701021992032001', '', 'Waode Sri Marjanawati Oba', 'SE, M.Si', 'marjanawati@bps.go.id', '42', '92800', '7405'),
('340013166', '197105011992031006', '', 'Syafrudin', '', 'syafrudin@bps.go.id', '23', '92870', '7401'),
('340013173', '196512311992032005', '', 'Suraidah SE, MM', '', 'suraidah@bps.go.id', '41', '92810', '7471'),
('340013207', '197201051992031005', '', 'Arianto Abd Rahim', '', 'arianto.rahim@bps.go.id', '33', '92820', '7409'),
('340013315', '196908201992081001', '', 'Muhamad Agus ', 'SE', 'm.agus@bps.go.id', '33', '92850', '7471'),
('340013322', '196912311992101001', '', 'Darul', '', 'darul2@bps.go.id', '32', '92150', '7400'),
('340013443', '196704201992121001', '', 'Hasyuril Hadini', 'SE', 'hasyuril@bps.go.id', '42', '92600', '7400'),
('340013444', '196705201992121001', '', 'Burhanuddin', 'SE, M.Si', 'burhanu@bps.go.id', '42', '92800', '7409'),
('340013560', '196707161993011001', '', 'Muh Amin', 'SE', 'muh.amin@bps.go.id', '42', '92800', '7408'),
('340013608', '196601071993022001', 'Ir', 'Martini', 'M.S', 'martini@bps.go.id', '42', '92100', '7400'),
('340013609', '197102071993021001', '', 'La Damri', '', 'damri@bps.go.id', '22', '92870', '7401'),
('340013817', '197106011993121001', '', 'Ishak Dihiru', '', 'dihiru@bps.go.id', '32', '92870', '7401'),
('340013818', '197304161993121001', '', 'Musdin', 'SST', 'musdin@bps.go.id', '33', '92840', '7472'),
('340013819', '196912311993121001', '', 'La Janabu', '', 'janabu@bps.go.id', '32', '92870', '7401'),
('340013823', '197103251993121002', '', 'Saidin', '', 'saidin@bps.go.id', '31', '92870', '7403'),
('340013824', '197006111993122001', '', 'Yunifa', 'S.TP', 'yunifa@bps.go.id', '34', '92820', '7472'),
('340014213', '197210201994011001', '', 'Mani Daud', 'SE, M.Si', 'manidaud@bps.go.id', '34', '92840', '7403'),
('340014288', '196509021994012001', 'Ir', 'Sitti Marwiah', '', 'marwiah@bps.go.id', '34', '92120', '7400'),
('340014289', '196607161994012001', 'Ir', 'Surianti Toar', 'M.S', 'antitoar@bps.go.id', '42', '92400', '7400'),
('340014304', '196411011994011001', 'Ir', 'Ahmad Zakih', '', 'zakih@bps.go.id', '34', '92830', '7472'),
('340014399', '196710171994011001', 'Ir', 'Kadir Pua', '', 'kadirpua@bps.go.id', '42', '92800', '7402'),
('340015258', '197305311996031001', '', 'Asman', '', 'asman2@bps.go.id', '32', '92870', '7401'),
('340015652', '197407051998031003', '', 'Raimon Mahmudin Darma Sakti', 'SE', 'rmdarmasakti@bps.go.id', '34', '92110', '7400'),
('340015653', '197603221998032001', '', 'St. Rasnani Manafi', 'SE.,M.Si', 'st.rasnani@bps.go.id', '33', '92110', '7400'),
('340015834', '197203221999031004', '', 'Towedy Marthinus Layico', 'S.Si', 'towedy@bps.go.id', '34', '92310', '7400'),
('340016171', '197907092000121002', '', 'Fatchur Rochman', 'SST', 'fatoer@bps.go.id', '34', '92800', '7410'),
('340016230', '197906212000122002', '', 'Harningsih', 'S.ST', 'harningsih@bps.go.id', '34', '92510', '7400'),
('340016257', '197709262000121001', '', 'Ade Ida Mane', 'SST, M.Si', 'aim@bps.go.id', '41', '92800', '7407'),
('340016400', '197501222001122001', '', 'Rachmatiah Rachman', 'SE, M.Si', 'rachmatiah@bps.go.id', '32', '92510', '7400'),
('340016655', '196912312002121020', '', 'La Hariddin', 'SP', 'la.hariddin@bps.go.id', '33', '92830', '7409'),
('340016783', '197801102002122005', '', 'Suriani', 'S.Kel', 'suriani@bps.go.id', '32', '92810', '7404'),
('340016784', '197105292002121002', '', 'Syafrin Suufi', '', 'syarfin@bps.go.id', '24', '92870', '7472'),
('340016785', '197207312002121004', '', 'Edy Sofian', 'SE', 'edy.sofian@bps.go.id', '33', '92840', '7405'),
('340017046', '197809242003122003', '', 'Burit Retnowati', 'SST', 'b_retnowati@bps.go.id', '34', '92410', '7400'),
('340017264', '197811012003122004', '', 'Iqra Kusumawaty Kasim', '', 'iqra.kasim@bps.go.id', '24', '92820', '7402'),
('340017265', '197510282003121004', '', 'Hayuddin', '', 'hayuddin@bps.go.id', '24', '92870', '7409'),
('340017266', '197607032003121004', '', 'Badam Akbar Fahrunaddi', 'SP', 'badam@bps.go.id', '33', '92840', '7407'),
('340017267', '197705052003121002', '', 'Muhamad Natsir', '', 'natsir@bps.go.id', '24', '92870', '7401'),
('340017268', '197312312003121012', '', 'La Emi', '', 'la.emi@bps.go.id', '24', '92320', '7400'),
('340017269', '197808282003122010', '', 'Wa Ode Nilawati', '', 'waode.nilawati@bps.go.id', '24', '92870', '7402'),
('340017375', '198109162004122001', '', 'Sahunan Qola Jayati', 'SST', 'sahunan@bps.go.id', '34', '92130', '7400'),
('340017377', '198206182004122001', '', 'Nike Roso Wulandari', 'SST, M.E', 'nikeroso@bps.go.id', '34', '92210', '7400'),
('340017614', '197307032005022002', '', 'Evi Eriany', 'SE', 'evi.eriany@bps.go.id', '33', '92530', '7400'),
('340017615', '198503182005021002', '', 'Allan Jani', '', 'kai_molawe@bps.go.id', '23', '92870', '7410'),
('340017616', '197703032005021002', '', 'La Ode Awaluddin', '', 'laode.awaluddin@bps.go.id', '23', '92870', '7402'),
('340017617', '197209152005021002', '', 'La Ode Muhammad Amsil', '', 'amsil@bps.go.id', '23', '92810', '7401'),
('340017750', '198004222005021001', '', 'Syahbudin', '', 'syahbudin@bps.go.id', '23', '92870', '7407'),
('340017751', '198101122005022002', '', 'Maulida', 'S.P', 'maulida@bps.go.id', '32', '92310', '7400'),
('340017752', '198504032005021001', '', 'Darwadi Arifin', '', 'dadieng@bps.go.id', '24', '92870', '7405'),
('340017753', '198405072005022001', '', 'Insyirah Rejeki', '', 'insyirah@bps.go.id', '23', '92870', '7471'),
('340017754', '198004302005021001', '', 'Sardiman', '', 'sardiman@bps.go.id', '23', '92320', '7400'),
('340017755', '198404222005022002', '', 'Farha Imamiah Gaffar', '', 'farha@bps.go.id', '23', '92220', '7400'),
('340017756', '198003112005022001', '', 'Astutyningsih SP', '', 'laode.haerul@bps.go.id', '32', '92120', '7400'),
('340017757', '198108022005022004', '', 'Rahmawati', '', 'rahmawat@bps.go.id', '23', '92870', '7402'),
('340017758', '198510132005021002', '', 'Asrul Ashar Alimuddin', '', 'asrul.ashar@bps.go.id', '23', '92870', '7471'),
('340017759', '198610262005022001', '', 'Irna Octaviana Latif', '', 'irna.latif@bps.go.id', '23', '92140', '7400'),
('340017760', '198405192005022002', '', 'Wa Ode Vitria Astika Sari', 'S.Si', 'vitria@bps.go.id', '32', '92870', '7471'),
('340017761', '198511122005021001', '', 'Muljaya Samari', 'SP', 'muljaya@bps.go.id', '32', '92870', '7409'),
('340017866', '198210082006021003', '', 'Yahya Ubaid', 'SST, M.Sta', 'yahya.ubaid@bps.go.id', '33', '92430', '7400'),
('340017867', '198309282006021002', '', 'Agung Septianto Wibowo', 'SST', 'aseptianto@bps.go.id', '34', '92610', '7400'),
('340017868', '198211162006021001', '', 'La Ode Ikhsanuddin Hamid', 'SST', 'ikhsanuddin@bps.go.id', '34', '92820', '7401'),
('340017878', '198210082006021002', '', 'Zablin', 'SST, M.Si', 'zablin@bps.go.id', '34', '92820', '7410'),
('340018389', '198301112006041004', '', 'Tatarudin', 'S.Si', 'tatarudin@bps.go.id', '32', '92830', '7402'),
('340018390', '198404062006041003', '', 'Tri Alva Novel', '', 'novel@bps.go.id', '23', '92870', '7401'),
('340018391', '197907182006041005', '', 'Alim Bakhri', '', 'alim.bakhri@bps.go.id', '23', '92870', '7404'),
('340018472', '197507202006042001', '', 'Hasriati', 'S.Pi', 'hasriati@bps.go.id', '31', '92870', '7403'),
('340018475', '197311172006042001', '', 'Nita Nurhawa', 'SP', 'nita.nurhawa@bps.go.id', '32', '92810', '7471'),
('340018476', '198605222006041003', '', 'Anugerah Akbar Ramadhan', '', 'anugerah.ramadhan@bps.go.id', '23', '92870', '7405'),
('340018477', '197307092006041002', '', 'Abdul Rahman Husain', '', 'abdul.husain@bps.go.id', '23', '92870', '7405'),
('340018478', '197410112006041002', '', 'Muhamad Kadarsah', 'SP', 'kadarsah@bps.go.id', '32', '92870', '7471'),
('340018479', '198402092006042003', '', 'Diana Pratiwi Moningka', 'SE', 'diana.moningka@bps.go.id', '31', '92130', '7400'),
('340018481', '198503012006041003', '', 'La Sarima', 'SST', 'la.sarima@bps.go.id', '31', '92870', '7402'),
('340018482', '198705112006041003', '', 'Mulawarman', '', 'mula@bps.go.id', '23', '92630', '7400'),
('340018483', '198602072006042001', '', 'Indryanty Yakub', 'SST', 'indryanty@bps.go.id', '31', '92870', '7401'),
('340018484', '198511172006042002', '', 'Sartina', '', 'thyna@bps.go.id', '23', '92810', '7472'),
('340018828', '198006012006042042', '', 'Tumisi', 'SE', 'tumisi@bps.go.id', '32', '92870', '7471'),
('340018829', '197201142006042016', '', 'Wa Dorayati', 'S.TP', 'dorayati@bps.go.id', '32', '92870', '7471'),
('340018866', '198204252006041018', '', 'Heriyanto', '', 'heriyanto2@bps.go.id', '23', '92870', '7405'),
('340018888', '197608142006041020', '', 'Armin', '', 'armin@bps.go.id', '23', '92870', '7405'),
('340018889', '197101102006041023', '', 'Tasripin', '', 'tasripin@bps.go.id', '23', '92870', '7410'),
('340018890', '197109172006041008', '', 'Isran', '', 'isran@bps.go.id', '23', '92870', '7408'),
('340018891', '197803122006041028', '', 'Muh. Sadar', '', 'msadar@bps.go.id', '24', '92870', '7408'),
('340018892', '197307232006041020', '', 'Moh Hasanul Sahiddin', '', 'hasanul@bps.go.id', '23', '92870', '7407'),
('340018893', '197511102006041029', '', 'Arisandy Abd. Rahim', '', 'arisandy@bps.go.id', '23', '92870', '7407'),
('340018894', '197806232006042020', '', 'Rosnini', '', 'rosnini@bps.go.id', '23', '92870', '7407'),
('340018895', '197703172006041018', '', 'Muhammad Kasim Nur', 'S.Pi', 'kasimnur@bps.go.id', '32', '92870', '7401'),
('340018905', '197905232006041018', '', 'Sumarlin', '', 'sumarlin2@bps.go.id', '23', '92870', '7405'),
('340019013', '197012042006041010', '', 'Predi Siampa', '', 'predi@bps.go.id', '23', '92140', '7400'),
('340019050', '198502282006041004', '', 'Hendri', '', 'hendri2@bps.go.id', '23', '92870', '7472'),
('340019061', '198208082006041013', '', 'Agusdianto', '', 'agusdianto@bps.go.id', '23', '92810', '7405'),
('340019063', '196801012006041035', '', 'Sudirman', '', 'sudirman11@bps.go.id', '23', '92870', '7410'),
('340019064', '198501062006041006', '', 'Janwar Ilahi', '', 'janwar.ilahi@bps.go.id', '23', '92870', '7405'),
('340019065', '196902272006041007', '', 'Samsul', '', 'samsul2@bps.go.id', '24', '92870', '7403'),
('340019066', '196908082006041016', '', 'Nusa', '', 'nusa@bps.go.id', '23', '92870', '7403'),
('340019082', '197010042006041011', '', 'Asri Samsu Alam', '', 'asri.alam@bps.go.id', '24', '92870', '7404'),
('340019090', '196401252006041007', '', 'Ramli', '', 'ramli2@bps.go.id', '24', '92870', '7403'),
('340019242', '198310152007012004', '', 'Sri Wastuti. Ar ', 'SST', 'wastuti@bps.go.id', '33', '92850', '7471'),
('340019243', '198312152007011010', '', 'Muh. Mulyadi', 'SST', 'muh.mulyadi@bps.go.id', '34', '92620', '7400'),
('340019244', '198212172007011006', '', 'Abdul Murat Musyafir', 'SST', 'murat@bps.go.id', '34', '92850', '7471'),
('340019245', '198412012007012003', '', 'Yesi Desiawati Sirman', 'SST', 'yesidesi@bps.go.id', '33', '92860', '7471'),
('340019246', '198402122007012006', '', 'Rizkiani', 'SST', 'rizkiani@bps.go.id', '34', '92520', '7400'),
('340019247', '198406042007011006', '', 'Azwar Surahman', 'SST, MA', 'azwars@bps.go.id', '33', '92220', '7400'),
('340019278', '198312182007011003', '', 'Dedi Yanto', 'SST', 'dedyanto@bps.go.id', '34', '92310', '7400'),
('340019418', '196607142007011005', '', 'Salomo', '', 'salomo@bps.go.id', '23', '92870', '7410'),
('340019419', '197403012007011001', '', 'Rahmin', '', 'rahmin@bps.go.id', '24', '92870', '7403'),
('340019420', '196506072007011003', '', 'Juslan', '', 'juslan@bps.go.id', '23', '92810', '7403'),
('340019469', '197504202007011002', '', 'La Munaria', '', 'la.munaria@bps.go.id', '24', '92870', '7402'),
('340019536', '197205142007012002', '', 'Erny Rigay', '', 'erny.rigay@bps.go.id', '24', '92870', '7406'),
('340019538', '196904202007012005', '', 'Rahmawati', '', 'rahmaw@bps.go.id', '24', '92870', '7406'),
('340019712', '196812312007011033', '', 'Haeruddin', '', 'haeruddin@bps.go.id', '24', '92870', '7406'),
('340019877', '196512312007011659', '', 'Untung', '', 'untung5@bps.go.id', '21', '92810', '7404'),
('340019878', '196203012007011001', '', 'Rusdin', '', '', '23', '92870', '7472'),
('340019879', '197002052007011003', '', 'Yunus Samuel Tandi Bua', '', 'rusdin@bps.go.id', '22', '92230', '7400'),
('340020155', '198401292008012006', '', 'Rahmah Farida', 'SST, M.Si.', 'rahmahfarida@bps.go.id', '33', '92210', '7400'),
('340020230', '198505092008012004', '', 'Nita Isnawati', 'SST', 'nita.isnawati@bps.go.id', '33', '92820', '7403'),
('340020232', '198508232008012002', '', 'Dewi Ratna Wati', 'SST', 'dewiratna@bps.go.id', '33', '92860', '7405'),
('340020233', '198504202008012004', '', 'Iska Susiyanti', 'SST', 'iska@bps.go.id', '33', '92820', '7471'),
('340020235', '198510152008012003', '', 'Sri Aryani', 'SST, M.Si', 'sriaryani@bps.go.id', '33', '92840', '7471'),
('340020237', '198312012008011002', '', 'Supriyadi', 'SST', 'supri.yadi@bps.go.id', '33', '92850', '7405'),
('340020263', '198804102008012001', '', 'Herawati', '', 'herawati2@bps.go.id', '23', '92430', '7400'),
('340020469', '198501092007101001', '', 'Rudianto', '', 'rudianto@bps.go.id', '24', '92870', '7403'),
('340020472', '198003132007101001', '', 'Akbar Ratulangi', '', 'akbar.ratulangi@bps.go.id', '24', '92870', '7403'),
('340020502', '196512312007101001', '', 'Nurdin Sule', '', 'nurdin.sule@bps.go.id', '24', '92870', '7402'),
('340020503', '197411172007101001', '', 'Asrun Samba', '', 'asrunsamba@bps.go.id', '24', '92870', '7403'),
('340020509', '198006092007102001', '', 'Umi Ratni Arni Laparesa', '', 'umi.laparesa@bps.go.id', '23', '92870', '7405'),
('340020513', '197503112007101001', '', 'Alan Mini Reza', '', 'alan.reza@bps.go.id', '22', '92870', '7402'),
('340020514', '197109252007101001', '', 'Muhammad Asban Saleh', '', 'asban.saleh@bps.go.id', '23', '92870', '7406'),
('340020517', '197709052007101002', '', 'Abdul Asis', '', 'abdul.asis@bps.go.id', '24', '92870', '7406'),
('340020529', '198105212007101002', '', 'Khaidir', '', 'khaidir@bps.go.id', '23', '92140', '7400'),
('340020579', '196202222007101001', '', 'Risman Bumbung H', '', 'risman.bumbung@bps.go.id', '23', '92870', '7405'),
('340050002', '198505172009021001', '', 'Anton Ari Widodo', 'SST', 'antonari@bps.go.id', '33', '92830', '7471'),
('340050091', '198601082009022004', '', 'Fatimatuz Zahro', 'SST', 'fatimatuz@bps.go.id', '32', '92230', '7400'),
('340050139', '198601252009021004', '', 'Leman Jaya', 'SST', 'leman@bps.go.id', '33', '92820', '7402'),
('340050156', '198412172009021002', '', 'Mochamad Fahim', 'SST', 'fahim@bps.go.id', '33', '92850', '7404'),
('340050193', '198701032009022004', '', 'Nurlyah', 'SST', 'nurlyah@bps.go.id', '32', '92410', '7400'),
('340050220', '198610302009021001', '', 'Rietmianggara Yudha Candra', 'SST', 'rietmi@bps.go.id', '33', '92860', '7404'),
('340050250', '198612152009021005', '', 'Suharjufito Endo', 'SST', 'fito@bps.go.id', '32', '92850', '7403'),
('340051041', '198406092009022013', '', 'Anisa Noor Rosidah', 'S.Si', 'anisanr@bps.go.id', '33', '92850', '7472'),
('340051120', '198309112009022007', '', 'Erra Septy Vibriane', 'S.Si', 'erra@bps.go.id', '33', '92420', '7400'),
('340051326', '198606132009021004', '', 'Slamet Riyadi', 'A.Md', 's.riyadi@bps.go.id', '24', '92150', '7400'),
('340052013', '196904242009011007', '', 'Adoli', '', 'adoli@bps.go.id', '22', '92870', '7410'),
('340052017', '197204032009011009', '', 'Agus', '', 'agus2@bps.go.id', '23', '92870', '7404'),
('340052029', '198501262009011006', '', 'Andi Pawannari', '', 'andi.pawannari@bps.go.id', '22', '92870', '7405'),
('340052035', '197408312009011007', '', 'Arman', '', '', '23', '92870', '7403'),
('340052038', '197509262009011003', '', 'Ashadi', '', 'ashadi@bps.go.id', '23', '92870', '7404'),
('340052043', '197509092009011006', '', 'Badardin', '', 'badardin@bps.go.id', '23', '92870', '7408'),
('340052049', '197304012009011007', '', 'Bobi Sahrun', '', 'bobi.sahrun@bps.go.id', '23', '92870', '7404'),
('340052058', '198501022009012011', '', 'Dahlia', '', 'dahlia@bps.go.id', '23', '92870', '7406'),
('340052074', '198208042009012005', '', 'Eka Safitri', 'SP', 'safitri.eka@bps.go.id', '31', '92870', '7471'),
('340052086', '197108062009012004', '', 'Farida', '', 'farida2@bps.go.id', '23', '92870', '7406'),
('340052101', '197006192009011008', '', 'Hartono', '', 'hartono3@bps.go.id', '22', '92870', '7405'),
('340052103', '196809122009011005', '', 'Hasanuddin', '', 'hasanuddin@bps.go.id', '22', '92870', '7471'),
('340052104', '197510102009012006', '', 'Hasnawati P.', '', 'hasnawati@bps.go.id', '23', '92870', '7404'),
('340052105', '197211132009011003', '', 'Hasnur Hazan', '', 'hasnur.hazan@bps.go.id', '23', '92870', '7406'),
('340052128', '198204062009011008', '', 'Idhar Rahim', '', 'idhar.rahim@bps.go.id', '23', '92870', '7404'),
('340052131', '196905032009011001', '', 'Imran Kamrin', '', 'imran.karim@bps.go.id', '23', '92870', '7403'),
('340052132', '197405032009011002', '', 'Inda Hidayat', '', 'inda.hidayat@bps.go.id', '23', '92870', '7403'),
('340052141', '196706192009011002', '', 'Irwan Subair', '', 'subair@bps.go.id', '22', '92870', '7410'),
('340052144', '197204042009011006', '', 'Isrun A.', '', 'isrun.a@bps.go.id', '23', '92870', '7402'),
('340052159', '197005042009011007', '', 'Kasbi', '', 'kasbi@bps.go.id', '23', '92870', '7408'),
('340052160', '197509112009011006', '', 'Kasmada', '', 'kasmada@bps.go.id', '22', '92810', '7408'),
('340052169', '197312312009011051', '', 'La Ode Hadiri', '', 'laode.hadiri@bps.go.id', '23', '92870', '7402'),
('340052170', '197312312009011054', '', 'La Ode Mili', '', 'laode.mili@bps.go.id', '23', '92870', '7402'),
('340052172', '197403232009011005', '', 'Lamiq', '', 'lamiq@bps.go.id', '22', '92870', '7405'),
('340052173', '196912312009011032', '', 'La Ode Abu Bakar', '', 'laode.abu@bps.go.id', '22', '92870', '7402'),
('340052175', '197907132009011009', '', 'La Ode Mursidin Mahmud', '', 'mursidin@bps.go.id', '22', '92870', '7401'),
('340052190', '197306122009012003', '', 'Marniati', '', 'marniati@bps.go.id', '23', '92870', '7404'),
('340052192', '197803232009011011', '', 'Marsun', '', 'marsun2@bps.go.id', '22', '92870', '7471'),
('340052194', '196411102009081001', '', 'Kaimuddin', '', 'kai_molawe@bps.go.id', '22', '92870', '7410'),
('340052204', '196610072009011004', '', 'Muhamad Yamin', '', 'muhamad.yamin@bps.go.id', '23', '92870', '7402'),
('340052214', '196801142009011002', '', 'Mustari', '', 'musta@bps.go.id', '22', '92870', '7402'),
('340052216', '196701272009011003', '', 'Naim', '', 'naim2@bps.go.id', '22', '92870', '7409'),
('340052217', '197408082009011006', '', 'Nasruddin', '', 'nasruddin@bps.go.id', '22', '92870', '7410'),
('340052220', '198203062009011013', '', 'Nehriyawan', '', 'ksatrio.jati@bps.go.id', '22', '92830', '7472'),
('340052230', '196806052009012001', '', 'Nurida', '', 'rida@bps.go.id', '22', '92870', '7407'),
('340052244', '196609082009011002', '', 'Raipin', '', 'raipin@bps.go.id', '23', '92870', '7403'),
('340052246', '198609042009011003', '', 'Rendra Tihaar Lataniambo', '', 'rendra.lataniambo@bps.go.id', '23', '92870', '7402'),
('340052267', '197505022009011008', '', 'Sabarudin', '', 'sabarudin@bps.go.id', '22', '92870', '7402'),
('340052272', '197409132009011005', '', 'Sapari', '', 'sapar@bps.go.id', '23', '92870', '7404'),
('340052273', '197101032009011002', '', 'Sarjal Sjahrir', '', 'jhal@bps.go.id', '23', '92870', '7403'),
('340052274', '197601252009011004', '', 'Sartono', '', 'sarton@bps.go.id', '23', '92870', '7403'),
('340052281', '198508292009011006', '', 'Sudarwo', '', 'sudarwo@bps.go.id', '22', '92870', '7401'),
('340052285', '197301012009012001', '', 'Sunarti', '', 'sunarti4@bps.go.id', '23', '92870', '7404'),
('340052294', '198601292009011006', '', 'Syahrul Hidayat', '', '', '23', '92870', '7406'),
('340052297', '196901202009011004', '', 'Tamrin', '', 'tamrin@bps.go.id', '22', '92870', '7405'),
('340052302', '198012252009011008', '', 'Thomas', '', 'thomas2@bps.go.id', '22', '92870', '7408'),
('340052307', '197311102009011005', '', 'Usmawi', '', 'usmawi@bps.go.id', '23', '92870', '7408'),
('340052323', '196612312009011029', '', 'Zainal Moh. Hamzah', '', 'zainal.hamzah@bps.go.id', '22', '92870', '7406'),
('340053134', '198412032009111001', '', 'Aditya Warman', '', 'warman.aditya@bps.go.id', '22', '92870', '7472'),
('340053135', '197603102009111001', '', 'Adrianus', '', 'adria@bps.go.id', '23', '92870', '7402'),
('340053136', '198004112009111001', '', 'Ary Sutrisno', 'SP', 'ary.sutrisno@bps.go.id', '31', '92870', '7405'),
('340053137', '198307112009111001', '', 'Aswaju', '', 'aswaju@bps.go.id', '22', '92870', '7405'),
('340053138', '197603012009112001', '', 'Asti', '', 'asti2@bps.go.id', '22', '92870', '7472'),
('340053139', '198310252009111001', '', 'Aswadi', '', 'aswadi@bps.go.id', '22', '92810', '7407'),
('340053140', '198607022009111001', '', 'Dedy Priyanto', '', 'dedy.priyanto@bps.go.id', '22', '92870', '7405'),
('340053142', '198210022009111001', '', 'Irman', '', 'irman2@bps.go.id', '22', '92810', '7403'),
('340053143', '197712312009111001', '', 'Jasni Mudjatip', '', 'jasni@bps.go.id', '22', '92870', '7407'),
('340053145', '198304112009111001', '', 'La Hamid', '', 'la.hamid@bps.go.id', '23', '92870', '7402'),
('340053147', '197712102009111001', '', 'Muhamad Hasdi', '', 'mhasdi@bps.go.id', '22', '92870', '7408'),
('340053148', '197907152009111001', '', 'Purnama', '', 'purnama2@bps.go.id', '22', '92870', '7405'),
('340053149', '198108242009112001', '', 'Purwati', '', 'purwati@bps.go.id', '22', '92870', '7406'),
('340053150', '198406022009111001', '', 'Rahmadan Salehani', '', 'rahmadan.salehani@bps.go.id', '22', '92810', '7402'),
('340053152', '197803262009111001', '', 'Sanur Saprah', '', 'sanur.saprah@bps.go.id', '22', '92870', '7404'),
('340053153', '198004192009111001', '', 'Saripin', '', 'saripin@bps.go.id', '21', '92870', '7403'),
('340053154', '198003102009111001', '', 'Suardi', '', 'suardi@bps.go.id', '22', '92870', '7408'),
('340053157', '197605092009112001', '', 'Yerni', '', 'yerni@bps.go.id', '22', '92870', '7401'),
('340053274', '198708152009122005', '', 'Siti Rogayah', 'SST', 'siro_gaya@bps.go.id', '33', '92850', '7410'),
('340053332', '198705212009122006', '', 'Alfiany Fitria Wardhiningrum', 'SST', 'alfiany@bps.go.id', '33', '92820', '7406'),
('340053349', '198712242009121001', '', 'Dini Amirul', 'SST', 'diniamirul@bps.go.id', '33', '92860', '7410'),
('340053355', '198701022009121002', '', 'Syamsul Ma\'arif ', 'SST', 'syamsul@bps.go.id', '33', '92860', '7406'),
('340053913', '198606042010031002', '', 'Afrizal', 'A.Md', 'afriz@bps.go.id', '31', '92870', '7406'),
('340053914', '198103252010031001', '', 'Bastian Bachrun Bau', 'SP', 'bastianbb@bps.go.id', '32', '92820', '7410'),
('340053915', '198705212010031001', '', 'Darmin Laipo', 'A.Md', 'darmin.laipo@bps.go.id', '31', '92870', '7405'),
('340053916', '198801102010031001', '', 'Hendry Pramudia Putra', 'A.Md', 'hendry.putra@bps.go.id', '31', '92870', '7405'),
('340053917', '198307272010031001', '', 'Hermin', 'S.Si', 'hermin@bps.go.id', '32', '92870', '7401'),
('340053918', '198803302010031001', '', 'Majiddin', 'A.Md', 'majiddin@bps.go.id', '24', '92810', '7406'),
('340053919', '198711232010032001', '', 'Marlyah', 'A.Md', 'marlyah@bps.go.id', '31', '92870', '7406'),
('340053920', '198102272010031002', '', 'Ma\'ruf', 'SP', 'maruf@bps.go.id', '32', '92870', '7404'),
('340053921', '198601312010032001', '', 'Masrawati Nonsi', 'S.Si', 'masra@bps.go.id', '33', '92850', '7402'),
('340053922', '198612122010031001', '', 'Muhammad Riswan', 'A.Md', 'mriswan@bps.go.id', '31', '92870', '7408'),
('340053923', '198805132010031001', '', 'Parlindungan Siregar', 'A.Md', 'parlindungan.siregar@bps.go.id', '31', '92870', '7405'),
('340053948', '198005222010032002', '', 'Wiwi Siu Kaimudin', 'SE', 'wiwi.kaimudin@bps.go.id', '32', '92870', '7401'),
('340054300', '198611152010122004', '', 'Ana Rahmawati', 'SST', 'anarah@bps.go.id', '32', '92860', '7402'),
('340054302', '198806112010122004', '', 'Lilis Dinayati', 'SST', 'ldina@bps.go.id', '31', '92850', '7471'),
('340054303', '198708112010121004', '', 'Najmuddin Tamin', 'SST', 'najmud@bps.go.id', '32', '92860', '7472'),
('340054304', '198903162010122004', '', 'Puji Rahmawati', 'SST', 'pujir@bps.go.id', '32', '92840', '7406'),
('340054307', '198807062010122004', '', 'Wulan Isfah Jamil', 'SST', 'isfah@bps.go.id', '32', '92110', '7400'),
('340054308', '198612262010122006', '', 'Yuni Kusuma Dewi', 'SST', 'yunikd@bps.go.id', '32', '92830', '7406'),
('340054309', '198812192010122004', '', 'Za\'ima Nurrusydah', 'SST', 'zaima@bps.go.id', '32', '92330', '7400'),
('340054314', '198804232010122005', '', 'Anna Rahmayanti Bahsuan', 'SST', 'anna.bahsuan@bps.go.id', '32', '92150', '7400'),
('340054412', '198009242011011006', '', 'Ridwan Kun Satria', 'S.Si', 'ridwan_ks@bps.go.id', '32', '92860', '7403'),
('340055487', '198703152011011008', '', 'Adiman Suriawan', 'SE', 'adiman@bps.go.id', '32', '92850', '7406'),
('340055488', '197606092011011006', '', 'Amrullah', 'SE', 'amrull@bps.go.id', '32', '92870', '7404'),
('340055489', '198004102011012007', '', 'Apri Dian Sulistiana', 'SE', 'apridiansulistiana@bps.go.id', '32', '92870', '7403'),
('340055490', '198205112011011011', '', 'Ardiman Adami', 'S.Psi', 'astuty@bps.go.id', '32', '92120', '7400'),
('340055491', '198803152011012019', '', 'Dewiyanti', 'A.Md', 'dewiyanti@bps.go.id', '24', '92840', '7407'),
('340055492', '198812052011011005', '', 'Eka Baktiar', 'A.Md', 'eka_baktiar@bps.go.id', '24', '92810', '7410'),
('340055493', '198909132011012015', '', 'Farziah', 'A.Md', 'farziah@bps.go.id', '24', '92870', '7402'),
('340055494', '198309182011012010', '', 'Fitharia Susiyanti', 'SE', 'fitha@bps.go.id', '32', '92870', '7403'),
('340055495', '198510082011011014', '', 'Haeruddin', 'SP', '', '32', '92870', '7403'),
('340055496', '198510292011011009', '', 'Hidayatullah', 'SE', 'hidayatullah@bps.go.id', '32', '92870', '7408'),
('340055497', '198706102011011013', '', 'Idham', 'S.Si', 'idham@bps.go.id', '32', '92870', '7401'),
('340055498', '198806142011012014', '', 'Irfan Saputri', 'A.Md', 'irfansaputri@bps.go.id', '31', '92830', '7403'),
('340055499', '198201052011011011', '', 'Komang Damike', 'A.Md', 'damike@bps.go.id', '24', '92140', '7400'),
('340055500', '198709052011011008', '', 'La Ode Haerul Saleh Wahid', 'S.H', 'ardie_adami@bps.go.id', '32', '92120', '7400'),
('340055501', '198305182011012007', '', 'Muliani Kadir', 'S.Si', 'muliani.kadir@bps.go.id', '32', '92870', '7403'),
('340055502', '198701162011012018', '', 'Nur Lela', 'S.Si', 'nur.lela@bps.go.id', '32', '92870', '7402'),
('340055503', '198905292011012012', '', 'Rezky Susanty Nurdin', 'A.Md', 'rezky.sn@bps.go.id', '24', '92110', '7400'),
('340055504', '198610282011011010', '', 'Ridwan', 'S.Si', 'ridwan3@bps.go.id', '32', '92870', '7403'),
('340055505', '198302082011011010', '', 'Safarudin', 'S.Si', 'safarudin@bps.go.id', '32', '92870', '7402'),
('340055506', '198901172011012010', '', 'Sofiana', 'S.Si', 'sofia@bps.go.id', '32', '92870', '7406'),
('340055507', '198507152011011013', '', 'Sudarmini', 'S.Si', 'sudarmini@bps.go.id', '32', '92870', '7402'),
('340055508', '198601012011011018', '', 'Sudirman', 'A.Md', 'sudirmana@bps.go.id', '31', '92820', '7471'),
('340055509', '198804252011011008', '', 'Zulkifli', 'A.Md', 'zulkifli4@bps.go.id', '24', '92860', '7472'),
('340055703', '198803012011012020', '', 'Sitti Karmila Yaddi', 'A.Md', 'sitti.karmila@bps.go.id', '24', '92810', '7402'),
('340055724', '198801122012111001', '', 'Amirudin SST', 'SST', 'nurkamal@bps.go.id', '31', '92830', '7401'),
('340055821', '198905032012111002', '', 'Kasman Abu', 'SST', 'kasma@bps.go.id', '31', '92860', '7401'),
('340055840', '198904302012112001', '', 'Miftahtul Khair Anwar', 'SST', 'tayounk@bps.go.id', '31', '92520', '7400'),
('340055869', '198811142012112001', '', 'Novi Utami', 'SST', 'noviutami@bps.go.id', '31', '92860', '7471'),
('340055927', '198902282012111001', '', 'Sudarmajid Muchsin', 'SST', 'sudarmajid.muchsin@bps.go.id', '31', '92840', '7401'),
('340055950', '198806222012112001', '', 'Wa Ode Rahmina Sari', 'SST', 'waodesari@bps.go.id', '31', '92850', '7403'),
('340056155', '198907152012121003', '', 'A. Ranuwirawan Rahim', 'S.Si', 'ranuwira@bps.go.id', '31', '92870', '7409'),
('340056156', '198910082012121001', '', 'Aditya Ariwibowo', 'A.Md', 'aditya.ariwibowo@bps.go.id', '23', '92870', '7406'),
('340056157', '198603192012122001', '', 'Asdriani Nopita', 'SP', 'asdriani.nopita@bps.go.id', '31', '92870', '7406'),
('340056158', '198612012012122003', '', 'Indriani', 'S.Si', 'indriani@bps.go.id', '31', '92870', '7408'),
('340056159', '198510302012122002', '', 'Irma Suryani', 'S.Si', 'irma.suryani@bps.go.id', '31', '92810', '7404'),
('340056160', '198806132012122003', '', 'Lanny Salamat', 'SE', 'lanny.salamat@bps.go.id', '31', '92810', '7472'),
('340056161', '198810212012122002', '', 'Nursanti Tamsil', 'A.Md', 'nursanti.tamsil@bps.go.id', '23', '92870', '7402'),
('340056198', '199107102013111001', '', 'Agung Darwin', 'SST', 'adarwin@bps.go.id', '31', '92840', '7404'),
('340056221', '199001162013112001', '', 'Arizka Selviana', 'SST', 'arizka.selviana@bps.go.id', '31', '92630', '7400'),
('340056305', '198910142013111001', '', 'Hermawan', 'SST', 'hermawan@bps.go.id', '31', '92840', '7405'),
('340056364', '199101212013112001', '', 'Mislina Sumarni', 'SST', 'mislina.s@bps.go.id', '31', '92840', '7409'),
('340056417', '198912162013111001', '', 'Rezki', 'SST', 'rezki.yusuf@bps.go.id', '31', '92840', '7402'),
('340056462', '199001302013112001', '', 'Sri Wahyuni', 'SST', 'hyuni@bps.go.id', '31', '92820', '7403'),
('340056478', '199007262013112001', '', 'Vianey Weda Rahesti', 'SST', 'vianey.wr@bps.go.id', '31', '92820', '7405'),
('340056648', '196412312014061007', '', 'La Mini', '', 'la.mini@bps.go.id', '21', '92870', '7402'),
('340056649', '197010172014061001', '', 'Ridwan', '', 'ridwan7@bps.go.id', '21', '92870', '7405'),
('340056650', '197505272014062001', '', 'Riyanti', '', 'riyanti3@bps.go.id', '21', '92840', '7471'),
('340056671', '199003102014102001', '', 'Marlina Primasari', 'SST', 'marlinap@bps.go.id', '31', '92840', '7408'),
('340056681', '199102152014101001', '', 'Muhammad Haris La Ode', 'SST', 'harislaode@bps.go.id', '31', '92860', '7407'),
('340056690', '199201032014102001', '', 'Nurul Puspita Sari', 'SST', 'nurul.ps@bps.go.id', '31', '92850', '7401'),
('340056721', '199008152014102001', '', 'Yuniar Iriyanti', 'SST', 'yuniar.iriyanti@bps.go.id', '31', '92820', '7409'),
('340056728', '199109162014101002', '', 'La Ode Ahmad Arafat', 'SST', 'ahmad.arafat@bps.go.id', '31', '92860', '7400'),
('340056789', '199006032014101001', '', 'Amrin Barata', 'SST', 'amrin.barata@bps.go.id', '31', '92850', '7407'),
('340056815', '199104062014102001', '', 'Dwina Wardhani Nasution', 'SST', 'dwina.wn@bps.go.id', '31', '92820', '7401'),
('340056825', '199101042014101001', '', 'Fajar Choirul Anwar', 'SST', 'fajar.c.anwar@bps.go.id', '31', '92830', '7408'),
('340056827', '199110142014102001', '', 'Fani Dewi Astuti', 'SST', 'fani.da@bps.go.id', '31', '92330', '7400'),
('340056847', '198911202014101001', '', 'Jaka Pratama', 'SST', 'jaka.pratama@bps.go.id', '31', '92840', '7401'),
('340056867', '198904262014101001', '', 'Muhammad Nur Kamal', 'SST', 'amirbuton@bps.go.id', '31', '92830', '7401'),
('340056900', '199012162014102001', '', 'Suci Safitriani', 'SST', 'safitriani@bps.go.id', '31', '92830', '7410'),
('340056946', '199009022014102001', '', 'Dyah Ayu Ratna Nurmalinda', 'SST', 'dyahayu@bps.go.id', '31', '92820', '7410'),
('340056997', '199203272014121001', '', 'Arsan Darmawansyah', 'SST', 'arsan.darmawansyah@bps.go.id', '31', '92840', '7409'),
('340057015', '199109162014121001', '', 'Chandra Ciputra Suyadi', 'SST', 'chandra.suyadi@bps.go.id', '31', '92830', '7407'),
('340057027', '199212312014122001', '', 'Desy Astriana Sari', 'SST', 'desy.sari@bps.go.id', '31', '92840', '7405'),
('340057096', '199109072014121001', '', 'Iman Setiawan', 'SST', 'iman.setiawan@bps.go.id', '31', '92850', '7402'),
('340057113', '199307302014121001', '', 'La Ode Rachman Anjani', 'SST', 'laode.anjani@bps.go.id', '31', '92850', '7410'),
('340057141', '199203162014121001', '', 'Muhammad Arifiansyah Ayub', 'SST', 'muhammad.ayub@bps.go.id', '31', '92840', '7403'),
('340057179', '198905202014121001', '', 'Pramu Mai Sandi', 'SST', 'pramu.sandi@bps.go.id', '31', '92840', '7472'),
('340057200', '199106202014121001', '', 'Risman', 'SST', 'risman3@bps.go.id', '31', '92830', '7402'),
('340057236', '199303082014121001', '', 'Wayan Permana Saputra', 'SST', 'wayan.saputra@bps.go.id', '31', '92610', '7400'),
('340057253', '199212122014122001', '', 'Zulfadilah Zur', 'SST', 'zulfadilah.zur@bps.go.id', '31', '92830', '7404'),
('340057269', '199210062016021001', '', 'Ahmad Muhaimin', 'SST', 'ahmad.muhaimin@bps.go.id', '31', '92850', '7408'),
('340057270', '199210062016021002', '', 'Yusfil Khoir Pulungan', 'SST', 'yusfilpulungan@bps.go.id', '31', '92860', '7408'),
('340057284', '199307122016022001', '', 'Anis Fakhrunnisa', 'SST', 'anis.fakhrunnisa@bps.go.id', '31', '92850', '7410'),
('340057293', '199312012016021001', '', 'Anugrah Adi Dwi Yarto', 'SST', 'anugrah.adi@bps.go.id', '31', '92860', '7403'),
('340057295', '199304142016022001', '', 'Aprilia Uswatun Chasanah', 'SST', 'aprilia.uswatun@bps.go.id', '31', '92820', '7402'),
('340057297', '199303122016021002', '', 'Ari Hidayat', 'SST', 'ari.hidayat@bps.go.id', '31', '92850', '7403'),
('340057317', '199306162016021002', '', 'Bakri Malik Ahmad Ismael', 'SST', 'bakri.malik@bps.go.id', '31', '92820', '7404'),
('340057344', '199303012016021001', '', 'Dicky Muhammad Ramdhani', 'SST', 'dicky.muhammad@bps.go.id', '31', '92820', '7407'),
('340057372', '199311102016021001', '', 'Fadli', 'SST', 'fadl@bps.go.id', '31', '92840', '7409'),
('340057393', '199203162016021001', '', 'Galuh Diantoro', 'SST', 'galuh.diantoro@bps.go.id', '31', '92820', '7471'),
('340057405', '199401312016021001', '', 'Hari Akhiardy Tofri', 'SST', 'akhiardy.tofri@bps.go.id', '31', '92850', '7405'),
('340057415', '199206172016021001', '', 'Hujaji Ramli', 'SST', 'hujaji@bps.go.id', '31', '92860', '7471'),
('340057452', '199306152016022001', '', 'Khodijah Kamilatul Muslimah', 'SST', 'khodijahkamilah@bps.go.id', '31', '92860', '7409'),
('340057459', '199304172016021001', '', 'Ksatrio Jati Putro Utomo', 'SST', 'nehriyawan@bps.go.id', '31', '92830', '7472'),
('340057494', '199210192016021001', '', 'Muhamad Fikri Anwar', 'SST', 'fikri.anwar@bps.go.id', '31', '92840', '7472'),
('340057503', '199301032016021001', '', 'Muhammad Rizki Syazali', 'SST', 'mrizki.syazali@bps.go.id', '31', '92860', '7472'),
('340057512', '199309122016022001', '', 'Nia Afriani Salim', 'SST', 'nia.salim@bps.go.id', '31', '92860', '7402'),
('340057517', '199211242016022002', '', 'Nofri Kamila', 'SST', 'nofri.kamila@bps.go.id', '31', '92850', '7406'),
('340057523', '199307202016021001', '', 'Nur Kholis', 'SST', 'nur.kholis@bps.go.id', '31', '92850', '7401'),
('340057636', '199308222016022001', '', 'Wa Ode Hasmayuli', 'SST', 'waode.hasmayuli@bps.go.id', '31', '92840', '7406'),
('340057644', '199401292016022001', '', 'Yamanora Sylvia Rosalin', 'SST', 'yamanora.rosalin@bps.go.id', '31', '92850', '7407'),
('340057659', '199306192016022001', '', 'Yunita Nur Khasanah', 'SST', 'yunita.khasanah@bps.go.id', '31', '92860', '7404'),
('340057786', '47647484848', '', 'test2', '', 'ghjgjh@f.com', '12', '92100', '7400'),
('340060000', '576585', '', 'tes pimpinan kab', '', 'fgcdghdhg', '12', '92840', '7409'),
('340098778', '35437373673', '', 'test 1', '', 'vvnmvfhgjfhfg', '12', '92100', '7400');

-- --------------------------------------------------------

--
-- Table structure for table `master_publikasi`
--

CREATE TABLE `master_publikasi` (
  `id_publikasi` int(11) NOT NULL,
  `nama_publikasi` varchar(200) NOT NULL,
  `tgl_upload` date NOT NULL,
  `tgl_rilis` date NOT NULL,
  `tgl_periksa_bidang` date NOT NULL,
  `tgl_periksa_ipds` date NOT NULL,
  `id_penyusun` varchar(9) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_publikasi`
--

INSERT INTO `master_publikasi` (`id_publikasi`, `nama_publikasi`, `tgl_upload`, `tgl_rilis`, `tgl_periksa_bidang`, `tgl_periksa_ipds`, `id_penyusun`, `tahun`) VALUES
(1, 'Statitik Kesejahteraan Rakyat', '2019-04-09', '2019-04-09', '2019-04-09', '2019-04-09', '340056728', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `master_satker`
--

CREATE TABLE `master_satker` (
  `id_satker` char(4) NOT NULL,
  `nm_satker` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_satker`
--

INSERT INTO `master_satker` (`id_satker`, `nm_satker`) VALUES
('7400', 'BPS PROVINSI SULAWESI TENGGARA'),
('7401', 'BPS KABUPATEN BUTON'),
('7402', 'BPS KABUPATEN MUNA'),
('7403', 'BPS KABUPATEN KONAWE'),
('7404', 'BPS KABUPATEN KOLAKA'),
('7405', 'BPS KABUPATEN KONAWE SELATAN'),
('7406', 'BPS KABUPATEN BOMBANA'),
('7407', 'BPS KABUPATEN WAKATOBI'),
('7408', 'BPS KABUPATEN KOLAKA UTARA'),
('7409', 'BPS KABUPATEN BUTON UTARA'),
('7410', 'BPS KABUPATEN KONAWE UTARA'),
('7471', 'BPS KOTA KENDARI'),
('7472', 'BPS KOTA BAU-BAU');

-- --------------------------------------------------------

--
-- Table structure for table `master_seksi`
--

CREATE TABLE `master_seksi` (
  `id_seksi` char(2) NOT NULL,
  `nm_seksi` varchar(150) NOT NULL,
  `id_bidang` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_seksi`
--

INSERT INTO `master_seksi` (`id_seksi`, `nm_seksi`, `id_bidang`) VALUES
('1', 'Subbagian Tata Usaha', ''),
('10', 'Subbagian Urusan Dalam', '1'),
('11', 'Subbagian Perlengkapan', '1'),
('12', 'Seksi Statistik Kependudukan', '2'),
('13', 'Seksi Statistik Ketahanan Pangan', '2'),
('14', 'Seksi Statistik Kesejahteraan Rakyat', '2'),
('15', 'Seksi Ststistik Pertanian', '3'),
('16', 'Seksi Statistik Industri', '3'),
('17', 'Seksi Statistik Pertambangan, Energi dan Konstruks', '3'),
('18', 'Seksi Statistik Harga Konsumen dan harga Perdagangan Besar', '4'),
('19', 'Seksii Statistik Keuangan dan Harga Produsen', '4'),
('2', 'Seksi Sosial', ''),
('20', 'Seksi Statistik Niaga dan  Jasa', '4'),
('21', 'Seksi Neraca Produksi', '5'),
('22', 'Seksi Neraca Konsumsi', '5'),
('23', 'Seksi Analisis Statistik Lintas Sektoral', '5'),
('24', 'Seksi Integrasi Pengolahan Data', '6'),
('25', 'Seksi jaringan dan Rujukan Statistik', '6'),
('26', 'Seksi Diseminasi dan layanan Statistik', '6'),
('3', 'Seksi Produksi', ''),
('4', 'Seksi Distribusi', ''),
('5', 'Seksi Neraca Wilayah dan Analisis Statistik', ''),
('6', 'Seksi Integrasi Pengolahan dan Diseminasi Statisti', ''),
('7', 'Subbagian Bina Program', '1'),
('8', 'Subbagian Kepegawaian & Hukum', '1'),
('9', 'Subbagian Keuangan', '1');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_publikasi`
--

CREATE TABLE `transaksi_publikasi` (
  `id_transaksi` int(11) NOT NULL,
  `jenis_transaksi` int(11) NOT NULL,
  `file_address` varchar(300) NOT NULL,
  `catatan` text NOT NULL,
  `niplama` varchar(9) NOT NULL,
  `id_publikasi` int(11) NOT NULL,
  `time_transaksi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_publikasi`
--

INSERT INTO `transaksi_publikasi` (`id_transaksi`, `jenis_transaksi`, `file_address`, `catatan`, `niplama`, `id_publikasi`, `time_transaksi`) VALUES
(1, 0, '', 'cfdsfdsf', '', 0, '2019-06-11 16:06:49'),
(2, 0, '', 'cfdsfdsffdsfsfds', '', 0, '2019-06-11 16:12:54'),
(3, 0, '', 'cfdsfdsffdsadadsfsfds', '', 0, '2019-06-11 16:13:01'),
(4, 0, '', 'cfdsfdsffdsadadsfsfds', '', 0, '2019-06-11 16:13:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_bidang`
--
ALTER TABLE `master_bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `master_gol`
--
ALTER TABLE `master_gol`
  ADD PRIMARY KEY (`id_gol`);

--
-- Indexes for table `master_pegawai`
--
ALTER TABLE `master_pegawai`
  ADD PRIMARY KEY (`niplama`);

--
-- Indexes for table `master_publikasi`
--
ALTER TABLE `master_publikasi`
  ADD PRIMARY KEY (`id_publikasi`);

--
-- Indexes for table `master_satker`
--
ALTER TABLE `master_satker`
  ADD PRIMARY KEY (`id_satker`);

--
-- Indexes for table `master_seksi`
--
ALTER TABLE `master_seksi`
  ADD PRIMARY KEY (`id_seksi`);

--
-- Indexes for table `transaksi_publikasi`
--
ALTER TABLE `transaksi_publikasi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_publikasi` (`id_publikasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi_publikasi`
--
ALTER TABLE `transaksi_publikasi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
