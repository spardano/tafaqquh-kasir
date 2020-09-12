-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 26, 2017 at 04:00 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tafaqquh`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE IF NOT EXISTS `data_buku` (
  `IdBuku` varchar(30) NOT NULL,
  `NamaBuku` varchar(300) NOT NULL,
  `JumlahEx` int(3) NOT NULL,
  `HargaSatuan` int(10) NOT NULL,
  `IdPenerbit` int(6) NOT NULL,
  PRIMARY KEY (`IdBuku`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`IdBuku`, `NamaBuku`, `JumlahEx`, `HargaSatuan`, `IdPenerbit`) VALUES
('2147483647', 'Tertangkapnya Ular Jadi-Jadian', 2, 25500, 1234),
('47105', 'Ensiklopedi Akhir Zaman (1438)', 5, 210000, 1234),
('47115', 'Negeri-Negeri Akhir Zaman (1438)', 16, 125000, 1234),
('47120', 'Zikir Akhir Zaman (1438)', 15, 110000, 1234),
('2160', 'AYAH', 9, 49000, 1234),
('937594784948', 'indahnya berbagi', 2, 12000, 1234),
('978-602-341-006-4', 'Aku Seorang Muslim', 2, 69000, 1234),
('978-602-341-060-6', 'Al Qur''an Pedoman Hidupku', 14, 85000, 1234),
('978-602-341-000-2', 'Aku Rajin Sholat dan Puasa', 1, 80000, 1234),
('978-602-341-091-0', 'Kenapa Kita Harus Shalat', 1, 49500, 1234),
('978-602-341-061-3', 'Al-Matsurat Hijau Latin', 1, 5500, 1234),
('978-602-341-017-0', 'Amah Binti Khalid (Sahabat Cilik)', 1, 13500, 1234),
('978-602-341-016-3', 'Abdullah bin Zubair (Sahabat Cilik)', 1, 13500, 1234),
('978-602-341-007-1', 'Ar-Rubayyi Binti Mu''awwidz (Sahabat Cilik)', 0, 13500, 1234),
('978-602-341-020-0', 'Zaid Bin Tsabit (Sahabat Cilik)', 13, 13500, 1234),
('978-602-341-089-7', 'Usamah Bin Zaid (Sahabat Cilik)', 1, 13500, 1234),
('978-602-341-115-3', 'Zaid Bin Haritsah (Sahabat Cilik)', 1, 13500, 1234),
('978-602-341-010-1', 'Mari Mengenal 10 Malaikat', 1, 11000, 1234),
('978-602-341-100-9', 'Aku Pandai Berdoa - Opick', 1, 24000, 1234),
('978-602-341-066-8', 'Menjadi Ukhti Yang Da''iyah', 3, 20000, 1234),
('978-602-341-068-2', 'Ihyaa Us Sunnah', 3, 40000, 1234),
('978-602-341-051-4', 'Be an Inspiring Muslimah', 3, 43500, 1234),
('978-602-341-062-0', 'Yuk, Mengenal Islam', 3, 85000, 1234),
('978-602-341-063-7', 'Panduan Ibadah Ramadhan', 3, 25000, 1234),
('978-602-341-038-5', 'Biarkan Cinta Menepis Siksa', 3, 34000, 1234),
('978-602-341-071-2', 'Duhai Ukhty Engkau Adalah Ratu', 3, 22000, 1234),
('978-602-341-076-7', 'The Sharia Economic', 3, 50000, 1234),
('978-602-341-024-8', 'Fiqh Minoritas', 3, 28900, 1234),
('978-602-341-025-5', 'Kisah Islami', 2, 112500, 1234),
('978-602-341-087-3', 'The Straight Path', 3, 29800, 1234),
('978-602-341-030-9', 'Sang Penakluk Ansalusia', 5, 21000, 1234),
('978-602-7847-17-0', 'Al Qiyamah', 15, 48000, 1235),
('978-602-7847-44-7', 'Detik-Detik Terakhirku', 10, 30000, 1235),
('978-602-7847-4-8', 'Segenggam Iman Anak Kita', 10, 54000, 1235),
('978-602-7847-36-1', 'Succsess With Sholat', 10, 30000, 1235),
('978-602-7847-37-8', 'Prophetic Parenting', 3, 85000, 1235),
('978-602-7847-51-2', 'Zero To Hero', 3, 42000, 1235),
('978-602-7847-34-7', 'Dalam Dekapan Ukhuwah', 3, 74000, 1235),
('978-602-7847-10-9', 'Merindukan Jalan Dakwah', 3, 35000, 1235),
('978-979-7847-532-8', 'Membangun Kekuatan Islam', 3, 20000, 1235),
('978-602-7847-34-10', 'Agar Tidak Diperdaya Setan', 3, 36000, 1235),
('978-979-7847-527-4', 'Muslimah Cantik Cerdas Di Dapur', 3, 22000, 1235),
('978-979-7847-540-3', 'Cerdas Mengelola Keuangan Keluarga', 3, 24000, 1235),
('978-602-7847-78-2', 'Cerdas dan Shalehkan Bayi Anda Dengan Asi', 3, 20000, 1235),
('978-602-7847-06-4', 'Agar Nikah Lebih Barokah', 3, 36000, 1235),
('978-602-7847-35-4', 'Agar Ta''aruf Cinta Berbuah Pahala', 3, 34000, 1235),
('978-602-7847-19-5', 'Bercermin Pada Hatimu', 15, 28000, 1235),
('978-602-7847-48-2', 'Lebih Baik Dipaksa Masuk Surga', 6, 50000, 1235),
('978-602-7847-29-1', 'Tong Kosong Indonesia Bunyinya', 6, 35000, 1235),
('978-979-7847-547-2', 'Kupilih Engkau Karena Allah', 6, 35000, 1235),
('978-979-7847-537-3', 'Rahasia Muslimah Cantik', 6, 40000, 1235),
('978-602-7847-59-1', 'Saatnya Untuk Menikah', 8, 35000, 1235),
('978-979-592-709-9', 'Syariah Riyadush Shalihin 1', 5, 180000, 1236),
('978-979-592-709-10', 'Syariah Riyadush Shalihin 2', 6, 150000, 1236),
('978-979-592-714-3', 'Ada Surga Dirumahku', 3, 17000, 1236),
('978-979-592-619-1', 'Biografi Bukhori', 5, 10000, 1236),
('978-979-592-604-7', 'Bagaimana Mengenal Allah', 6, 10000, 1236),
('978-979-592-608-5', 'Pelopor Pendidikan', 3, 19000, 1236),
('978-979-592-649-8', 'Jurnalis', 5, 10000, 1236),
('978-979-592-695-5', 'Sejarah Agama Yahudi', 4, 18000, 1236),
('978-979-592-605-4', 'Kado Buah Hati', 2, 27000, 1236),
('978-979-592-637-5', 'Kemaksiatan', 4, 10000, 1236),
('978-979-592-671-9', 'Boikot', 3, 10000, 1236),
('978-979-592-678-8', 'Tips Mengambil Hati Mertua', 5, 5000, 1236),
('978-979-592-755-6', 'Hidup Sehat', 3, 10000, 1236),
('978-979-592-692-4', 'Fiqh Kuliner', 17, 45000, 1236),
('978-979-592-674-0', 'Asyiknya Belajar Membaca', 6, 35000, 1236),
('978-979-592-671-10', 'Boikot Produk Israel', 4, 35000, 1236),
('978-979-592-736-5', 'Faktor-faktor Pengubah Fatwa', 10, 15000, 1236),
('978-979-592-734-1', 'Fiqih Jurnalis', 5, 30000, 1236),
('978-979-592-600-9', 'Tipu Daya Wanita', 4, 50000, 1236),
('978-979-592-676-4', 'Pengkhianat-pengkhianat dalam Islam', 10, 23000, 1236),
('978-979-592-611-5', 'Mengubah Kebiasaan Cengeng Anak', 10, 15000, 1236),
('978-979-592-735-8', 'Tata Kota Menurut Islam', 3, 35000, 1236),
('978-979-592-639-9', 'Hidup Sehat dengan Seks Halal', 3, 35000, 1236),
('978-979-592-659-7', 'Kata Mutiara Pengubah Hidup', 3, 55000, 1236),
('978-979-592-760-0', 'Cobaan Para Ulama', 15, 85000, 1236),
('978-979-592-702-0', 'Sumbangan Keilmuan Islam Pada Dunia', 5, 99000, 1236),
('978-979-592-668-9', 'Yahudi Menggenggam Dunia', 5, 36000, 1236),
('978-979-592-648-1', 'Mengapa Saya Keluar Dari Syiah', 5, 30000, 1236),
('978-979-592-615-3', '60 Biografi Ulama Salafi', 20, 145000, 1236),
('978-979-592-664-1', 'Sirah Nabawiyah', 40, 75000, 1236),
('978-979-592-661-0', 'Aku Menciptakan Jin Dan Manusia Hanya Untuk Beribadah Kepadaku', 5, 35000, 1236),
('978-979-592-712-9', 'Kutitipkan Namamu dalam Doa Ku', 70, 85000, 1236),
('978-979-592-618-4', 'Naiklah Bersama Kami', 5, 21000, 1236),
('978-979-592-623-8', 'Kala Sakit Menerpa', 4, 21000, 1236),
('978-979-592-711-2', 'Waktu-waktu Penuh Berkah', 4, 50000, 1236),
('978-979-592-706-8', 'Yahudi Catatan Sejarah', 4, 60000, 1236),
('978-979-592-642-9', '10 Sebab Dicintai Allah', 4, 45000, 1236),
('978-979-592-725-9', 'Keajaiban Doa', 3, 50000, 1236),
('978-979-592-618-5', 'Tamasya Kesurga', 5, 29000, 1236),
('978-979-592-665-8', 'Aqiqah', 3, 30000, 1236),
('978-979-592-689-4', 'Dzammul Hawa', 30, 45000, 1236),
('978-979-039-185-7', 'Muttafaqun Alatih', 5, 189000, 1237),
('978-979-039-258-8', 'Islamic Parenting', 5, 83000, 1237),
('978-979-039-178-9', 'Bekal Pengantin', 2, 129000, 1237),
('978-979-039-354-7', 'Ruqyah Jalan Sihir & Terapinya', 3, 99000, 1237),
('978-979-039-319-6', 'Biografi 60 Sahabat Nabi', 5, 110000, 1237),
('978-979-039-340-0', 'Biografi Khalifah Rasulullah', 2, 73000, 1237),
('978-979-039-331-8', '9 Langkah Mudah Menghapal Al-Qur''an', 5, 170000, 1237),
('978-979-039-366-0', 'Bencana dan Peperangan Akhir Zaman', 3, 180000, 1237),
('978-979-039-307-3', 'Amalan Penghilang Susah', 2, 98000, 1237),
('978-979-039-181-9', 'Fikih Wanita', 5, 89000, 1237),
('9789790633421', 'Tertangkapnya Ular Jadi-Jadian', 5, 25500, 1234),
('9786027888258', 'Aku Cinta Nabi dan Rasul', 12, 87000, 1235),
('9791061033', 'Aku Seorang Muslim', 12, 69000, 1235),
('9789790635654', 'Al-Qur''an Pedoman Hidupku', 12, 85000, 1235),
('9789790633427', 'Aku Rajin Shalat dan Puasa', 12, 80000, 1234),
('9786021732915', 'Flora', 12, 45000, 1235),
('9786021648087', 'Laut', 12, 45000, 1235),
('9786028180894', 'Fauna', 12, 45000, 1235),
('9786029473339', 'Alam Semesta', 12, 94500, 1235),
('9786023410019', 'Dunia Komunikasi dan Gadget', 12, 94500, 1234),
('9786023420025', 'Kenapa Kita Harus Shalat', 10, 49500, 1234),
('10920053006', 'Al-Matsurat Hijau Latin', 10, 5500, 1234),
('10920053007', 'Calistung Membaca TK B 2013', 5, 17600, 1234),
('10920053008', 'Calistung Membaca TK A 2013', 5, 17600, 1234),
('10920053009', 'Calistung Menulis TK B 2013', 5, 17600, 1234),
('10920053010', 'Calistung Menghitung TK A 2013', 5, 16000, 1234),
('10920053011', 'Anggur ', 3, 22500, 1234),
('10920053012', 'Mangga', 3, 22500, 1234),
('10920053013', 'Buah Naga', 3, 2500, 1234),
('10920053014', 'Durian', 3, 22500, 1234),
('10920053015', 'Stroberi', 3, 22500, 1234),
('10920053016', 'Keistimewaan', 3, 27500, 1234),
('10920053017', 'Musang Yang Licik', 2, 12900, 1234),
('60220110027', 'Amah Binti Khalid (Sahabat Cilik)', 3, 13500, 1234),
('60220110033', 'Abdullah Bin Zubair (Sahabat Cilik)', 3, 13500, 1234),
('60220110039', 'Ar-Rubayyi'' Binti Mu''awwidz (Sahabat Cilik)', 3, 13500, 1234),
('60220110045', 'Zaid Bin Tsabit (Sahabat Cilik)', 3, 13500, 1234),
('60220110051', 'Usamah Bin Zaid (Sahabat Cilik)', 3, 13500, 1234),
('60220110057', 'Zaid Bin Harisah (Sahabat Cilik)', 3, 13500, 1234),
('60220110063', 'Tupi yang Suka Menabung ', 3, 37500, 1234),
('60220110069', 'Rinduku untuk Ayah', 5, 29500, 1234),
('60220110075', 'Kecil-kecil Gemar Bersedekah', 3, 42500, 1234),
('60220110081', 'Fatimah Binti Khatab', 3, 11000, 1234),
('60220110087', 'Mari Mengenal 10 Malaikat', 3, 24000, 1234),
('60220110093', 'Aku Pandai Berdoa-Opick', 10, 24000, 1234),
('60220110099', 'Harimau Si Belang yang Gemar Berburu', 3, 17500, 1234),
('60220110105', 'Landak Si Imut yang Berduri Tajam', 3, 17500, 1234),
('60220110111', 'Kanguru Hewan Berkantung dari Australia', 3, 17500, 1234),
('60220110117', 'Panda Si Gendut yang Lucu dan Imut', 3, 17500, 1234),
('60220110123', 'Diana Mengerti Berterima Kasih', 3, 37500, 1234),
('60220120005', 'Kartini Mama Cantik Juga ', 3, 14000, 1234),
('10320040003', 'Domba', 5, 16000, 1234),
('10320040004', 'Bebek', 5, 16000, 1234),
('10320040010', 'Rusa', 5, 16000, 1234),
('10320040008', 'Belalang', 5, 16000, 1234),
('10320040007', 'Unta', 5, 16000, 1234),
('20310350001', 'Spelling Expert 01', 3, 18000, 1234),
('20210170002', 'Rahasia Beruang Kutub Bertahan Hidup', 3, 45500, 1234),
('20210170003', 'Tiga Anak Kura-Kura yang Mandiri', 3, 45500, 1234),
('20210170004', 'Pelajaran Berharga untuk Belang dan Manis', 3, 45500, 1234),
('10210012001', 'Bintang Penghias Malam', 3, 12000, 1234),
('10210012005', 'Planet Pengembara Angkasa', 3, 12000, 1234),
('10210012004', 'Matahari Penerang Angkasa', 3, 12000, 1234),
('10210012002', 'Bulan Satelit Bumi', 3, 12000, 1234),
('10210012003', 'Bumi Rumah Manusia', 3, 12000, 1234),
('20310550002', 'Phoenix', 5, 13000, 1234),
('20310550005', 'Putri Duyung', 5, 13000, 1234),
('20310550003', 'Naga', 5, 13000, 1234),
('20210120011', 'Shrimp Udang ', 3, 16000, 1234),
('20310340004', 'Boneka Rambut Jagung', 3, 15000, 1234),
('20310340002', 'Kelapa Sawit Si Gudang Minyak', 3, 15000, 1234),
('11220210009', 'Zia dan Kakek Cinta Pahlawan', 3, 21000, 1234),
('20210120001', 'Octopus Gurita', 3, 16000, 1234),
('10320050002', 'Khadijah Binti Khuwailid', 3, 16500, 1234),
('10320050003', 'Zainab Binti Muhammad SAW', 3, 16500, 1234),
('20320180004', 'Kecil-kecil Penghafal Al-quran', 3, 27500, 1234),
('10320060008', 'Sayang Kepada Al-Quran', 5, 28500, 1234),
('20320180005', 'Kuas Lukis Ajaib', 3, 27500, 1234),
('20320180002', 'Penari Cilik', 3, 27500, 1234),
('20320180006', 'Aku Tak Penakut Lagi', 3, 27500, 1234),
('20320180007', 'Majmu Syarif', 8, 28000, 1234),
('979106100974', 'Ma''alim Fi Ath Thariq', 1, 50000, 1234),
('979106100103', 'Menggali ke Puncak Hati', 40, 56000, 1234),
('979106099232', 'Nikmatnya Pacaran Setelah Pernikahan', 20, 36000, 1234),
('979106098361', 'Bahagianya Merayakan Cinta Softcover', 15, 86000, 1234),
('979106097490', 'Jalan Cinta Para Pejuang', 10, 56000, 1234),
('979106096619', 'Wahai Muslimah, Jangan Menyerah !', 5, 38000, 1234),
('979106095748', 'Positive Parenting', 12, 54000, 1234),
('979106094877', 'Mata Air Inspirasi', 20, 38000, 1234),
('979106094006', 'Syarah Riyadhush Shalihin 1', 19, 180000, 1234),
('979106093135', 'Syarah Riyadhush Shalihin 2', 18, 150000, 1234),
('979106092264', 'Dipikir Sambil Dzikir', 5, 46000, 1234),
('979106091393', 'Lapis-Lapis Keberkahan', 5, 100000, 1234),
('979106090522', 'Prophetic Parenting', 15, 90000, 1234),
('979106089651', 'Saat Berharga Untuk Anak Kita', 7, 48000, 1234),
('979106088780', 'Al-Wafi : Syarah Hadits Arbain', 9, 85000, 1234),
('979106087909', 'Panduan Lengkap Shalat Menurut Empat Mazhab', 25, 84000, 1234),
('979106087038', 'Panduan Tahsin Tilawah Al-Quran dan Ilmu Tajwid', 29, 60000, 1234),
('979106086167', 'Piagam Madinah', 2, 49000, 1234),
('979106085296', 'Sirah Nabawiyah (SC)', 10, 75000, 1234),
('979106084425', 'Adabul Mufrad', 2, 105000, 1234),
('979106083554', 'Sirah Nabawiyah (HC)', 37, 110000, 1234),
('979106082683', '9 Langkah Mudah Menghafal Al-Quran', 38, 73000, 1234),
('979106081812', 'Amalan Penghapus Dosa Anda ', 2, 98000, 1234),
('979106080941', 'Amalan Penghilang Susah', 4, 96000, 1234),
('979106080070', 'Bekal Pengantin ', 9, 99000, 1234),
('10756156091', 'Bencana dan Peperangan Akhir Zaman', 6, 170000, 1234),
('10720046022', 'Biografi 60 Sahabat Nabi', 2, 98000, 1234),
('10683935953', 'Dosa-Dosa Besar', 2, 89000, 1234),
('10647825884', 'Materi Pengajian Setahun', 15, 129000, 1234),
('10611715815', 'Menyambut Buah Hati', 4, 88000, 1234),
('10575605746', 'Muttafaqun Alaih', 17, 189000, 1234),
('10539495677', 'Ruqyah Jin Sihir daan Terapinya', 11, 129000, 1234),
('10503385608', 'Tazkiyatun Nafs', 2, 79000, 1234),
('10467275539', 'Miracles of al-Quran dan As-Sunnah', 16, 73000, 1234),
('10431165470', 'Biografi 35 Sahabiyah Nabi', 5, 98000, 1234),
('10395055401', 'Islamic Parenting', 35, 83000, 1234),
('10358945332', 'Debat Islam vs Non Muslim', 115, 750000, 1234),
('10322835263', 'Komik 100 Kebiasaan Nabi', 20, 38000, 1234),
('10286725194', 'Roh', 13, 60000, 1234),
('10250615125', 'Fikih Ekonomi Umar Bin Khattab', 5, 140000, 1234),
('10214505056', 'Fiqih Wanita Edisi Lengkap (Hard Cover)', 18, 140000, 1234),
('10178394987', 'Komik  10 Pahlawan Islam ', 10, 70000, 1234),
('10142284918', 'Pro dan Kontra Maulid Nabi', 2, 45000, 1234),
('10106174849', 'Ringkasan Fikih Sunnah Sayyid Sabiq', 2, 185000, 1234),
('10070064780', '37 Masalah Populer', 15, 70000, 1234),
('10033954711', '77  Tanya Jawab Shalat', 20, 45000, 1234),
('9997844642', 'Panduan Tentang Syiah', 5, 25000, 1234),
('9961734573', '33 Tanggung Jawab Qurban', 105, 15000, 1234),
('9925624504', 'Selagi Masih Muda ', 2, 50000, 1234),
('9889514435', 'Dzammul Hewan', 2, 125000, 1234),
('9853404366', '60 Biografi Ulama', 2, 145000, 1234),
('9817294297', 'Bulughul Maram', 1, 88000, 1234),
('9781184228', 'CD Hadits', 32, 20000, 1234),
('9745074159', 'Kalender Harian', 3, 35000, 1234),
('9708964090', 'Kalender Anak', 3, 20000, 1234),
('9672854021', 'Al Qiyamah ', 5, 43000, 1234),
('9636743952', 'Inspirasi dari Rumah', 10, 55000, 1234),
('9600633883', '500 Tanya Jawab Transaksi Syariah', 4, 110000, 1234),
('02160/X/16', 'AYAH', 10, 49000, 1234),
('02160/X/17', 'Lembaga Budi', 10, 50000, 1234),
('02160/X/18', 'Tasawuf Hamka', 10, 63000, 1234),
('20310551045', 'How To Master Your Habits', 80, 55000, 1234),
('978791093310', 'Paket Buku Saku Terbaik Arifin Ilham', 30, 40000, 1234),
('978791087230', 'Zubair bin Awwam', 3, 15000, 1234),
('978791081150', 'Thalhah bin Ubaidillah', 3, 15000, 1234),
('978791075070', 'Usman bin Affan', 3, 15000, 1234),
('978791068990', 'Umar bin Khattab', 4, 15000, 1234),
('978791062910', 'Abdurrahman bin Auf', 3, 15000, 1234),
('978791056830', 'Sa''id bin Zaid', 4, 15000, 1234),
('978791050750', 'Ali bin Abi Thalib', 3, 15000, 1234),
('978791044670', 'Abu Bakar Ash Shidiq', 3, 15000, 1234),
('978791038590', 'Sa''ad bin Abi Waqqash', 3, 15000, 1234),
('978791032510', 'Unta Sang Musafir Padang Pasir', 3, 24800, 1234),
('978791026430', 'Lebah Si Penyengat yang Bermanfaat', 3, 24800, 1234),
('978791020350', 'Laba-Laba Si Penenun Handal', 3, 24800, 1234),
('978791014270', 'Sapi Hewan dengan Berjuta Jasa', 3, 24800, 1234),
('978791008190', 'Ular Makhluk Meliuk yang Menarik', 3, 24800, 1234),
('978791002110', 'Gajah Sang Raksasa Daratan', 3, 24800, 1234),
('978790996030', 'Kuda Si Pelari dengan Kaki Super', 3, 24800, 1234),
('978790989950', 'Gagak Si Hitam Yang Cerdik', 3, 24800, 1234),
('978790983870', 'Pintar Mengaji', 3, 16250, 1234),
('978790977790', 'Selamat datang Luki', 3, 12900, 1234),
('978790971710', 'Bumi Tempat yang Nyaman', 3, 33000, 1234),
('978790965630', 'Hujan Sumber Kehidupan', 3, 33000, 1234),
('978790959550', 'Makhluk Hidup Kembali Ke Tanah', 3, 33000, 1234),
('978790953470', 'Air Sungai, Danau dan Laut', 3, 33000, 1234),
('978790947390', 'Bulan & Bintang di Malam Hari', 3, 33000, 1234),
('978790941310', 'Cuaca yang Cerah', 3, 33000, 1234),
('978790935230', 'Ciri Khas Hewan yang Menakjubkan', 3, 25000, 1234),
('978790929150', 'Hal-Hal Unik di Sekitarmu', 3, 25000, 1234),
('978790923070', 'Tempat-Tempat Unik di Dunia', 3, 25000, 1234),
('978790916990', 'Rahasia di Balik Gangguan Pada Tubuhmu', 3, 25000, 1234),
('978790910910', 'Peristiwa Alam yang Menakjubkan', 2, 25000, 1234),
('978790904830', 'Perubahan Energi dan Wujud Benda', 3, 25000, 1234),
('978790898750', 'Bimbi dan Kindi', 3, 12000, 1234),
('978790892670', 'Kurcaci Merah (The Red Dwarf)', 3, 13500, 1234),
('978790886590', 'Raja Kurcaci (The King of Dwarf)', 3, 13500, 1234),
('978790880510', 'Kurcaci Kuning (The Yellow Dwarf)', 3, 13500, 1234),
('978790874430', 'Kurcaci Hitam (The Black Dwarf)', 3, 13500, 1234),
('978790868350', 'Meriahnya Lomba Tujuh Belasan', 3, 14000, 1234),
('9786027875333', 'Aksi Tiga Pahlawan Cilik', 3, 14000, 1234),
('9786020874029', 'Domba Kurban Untuk Nila', 3, 14000, 1234),
('9789795927129', 'Al-Adzkar', 3, 139000, 1234),
('9789795926863', 'Fikih Ekonomi Umar bin Khatab', 3, 155000, 1234),
('9786027820128', 'LAPIS-LAPIS KEBERKAHAN', 5, 100000, 1234),
('9786027820500', 'Rihwah Dakwah Sallm A. Fillah', 10, 70000, 1234),
('9786027820487', 'Bergiat Dakwah Merajut Ukhuwah', 10, 50000, 1234),
('9786027820418', 'Menggali ke Puncak Hati', 10, 56000, 1234),
('9786027190184', 'AGAR BIDADARI CEMBURU', 10, 36000, 1234),
('9786029578638', 'Cara Nabi Mendidik Perempuan', 10, 64000, 1234),
('9789790393011', 'Khusyuk Dalam Shalat', 20, 70000, 1234),
('9789790167124', 'Mengenai Pribadi Agung Muhammad', 3, 75000, 1234),
('9786027637290', 'Pedoman Hidup Harian Seorang Muslim', 2, 129000, 1234),
('9786029134988', 'Mukjizat Al-Qur''an yang Tak Terbantahkan', 2, 99000, 1234),
('9789790393646', 'Mukjizat Ilmiah di Lautan & Dunia Binatang', 2, 35000, 1234),
('9789791093330', 'Walisongo', 2, 45000, 1234),
('9789791093347', 'Sultan Fattah', 2, 45000, 1234),
('9789791093354', 'Kerajaan Islam Demak', 2, 45000, 1234),
('9789791093385', 'Negeri-Negeri Penghafal Al-quran', 5, 143000, 1234),
('9789793693118', 'Negeri-Negeri Akhir Zaman (1438)', 2, 125000, 1234),
('9789793693125', 'Ensiklopedi Akhir Zaman (1438)', 2, 210000, 1234),
('9789793693187', 'Zikir Akhir Zaman (1438)', 5, 110000, 1234),
('10920053041', 'The Miracle Of Dzikir', 20, 59000, 1234),
('10920053061', 'The Miracle Of Dzikir 2', 12, 65500, 1234),
('10920053052', 'Mudahnya Meraih Surga Allah', 5, 35000, 1234),
('10920090008', 'Paket Buku Saku Terbaik Arifin Ilham', 3, 40000, 1234),
('10920053056', 'Hal-hal yang Harus Disegerakan Dalam Hidup', 7, 8000, 1234),
('10920053055', 'Indahnya Hidup Dalam Ketaatan', 8, 8000, 1234),
('10920053059', 'Mengapa Kita Berdzikir', 3, 8000, 1234);

-- --------------------------------------------------------

--
-- Table structure for table `data_instansi`
--

CREATE TABLE IF NOT EXISTS `data_instansi` (
  `IdInstansi` int(4) NOT NULL AUTO_INCREMENT,
  `NamaInstansi` varchar(100) NOT NULL,
  `AlamatInstansi` varchar(300) NOT NULL,
  `NoInstansi` varchar(14) NOT NULL,
  PRIMARY KEY (`IdInstansi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `data_instansi`
--

INSERT INTO `data_instansi` (`IdInstansi`, `NamaInstansi`, `AlamatInstansi`, `NoInstansi`) VALUES
(1, 'Masjid Agung Annur', 'jl. diponegoro depan rumah sakit arifin achmad', '08217368575');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengguna`
--

CREATE TABLE IF NOT EXISTS `data_pengguna` (
  `IdUser` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `LevelUser` int(2) NOT NULL,
  `Jabatan` varchar(30) NOT NULL,
  PRIMARY KEY (`IdUser`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `data_pengguna`
--

INSERT INTO `data_pengguna` (`IdUser`, `UserName`, `Password`, `LevelUser`, `Jabatan`) VALUES
(11, 'super', '1b3231655cebb7a1f783eddf27d254ca', 0, 'super admin'),
(12, 'asmarita', '5638114a9ad4597b6d8488deaff38663', 1, 'office'),
(13, 'suply', 'f416f6a03b1a213262d7e30fd30a8855', 4, 'office'),
(22, 'kasir', 'c7911af3adbd12a035b289556d96470a', 2, 'office'),
(23, 'bazar', '4b01091127aec1384c655f32d91b1366', 5, 'office'),
(27, 'pimpinan', '90973652b88fe07d05a4304f0a945de8', 3, 'Pimpinan');

-- --------------------------------------------------------

--
-- Table structure for table `detail_jual`
--

CREATE TABLE IF NOT EXISTS `detail_jual` (
  `id_jual_detail` varchar(5) NOT NULL DEFAULT '',
  `no_faktur_jual` varchar(10) DEFAULT NULL,
  `IdBuku` varchar(30) DEFAULT NULL,
  `harga_sub` decimal(10,0) DEFAULT NULL,
  `qty_jual` int(10) DEFAULT NULL,
  `diskon` int(3) NOT NULL,
  PRIMARY KEY (`id_jual_detail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_jual`
--

INSERT INTO `detail_jual` (`id_jual_detail`, `no_faktur_jual`, `IdBuku`, `harga_sub`, `qty_jual`, `diskon`) VALUES
('DJ001', 'PEN0000001', '47115', '123750', 1, 1),
('DJ002', 'PEN0000001', '2147483647', '44880', 2, 12),
('DJ003', 'PEN0000001', '978-979-592-642-9', '45000', 1, 0),
('DJ004', 'PEN0000002', '47105', '378000', 2, 10),
('DJ005', 'PEN0000002', '47120', '99000', 1, 10),
('DJ006', 'PEN0000003', '978-979-592-605-4', '27000', 1, 0),
('DJ007', 'PEN0000003', '2147483647', '22950', 1, 10),
('DJ008', 'PEN0000004', '47120', '220000', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `detail_suply`
--

CREATE TABLE IF NOT EXISTS `detail_suply` (
  `id_suply_detail` varchar(5) NOT NULL,
  `no_suply` varchar(13) DEFAULT NULL,
  `IdBuku` varchar(30) DEFAULT NULL,
  `harga_sub` int(10) DEFAULT NULL,
  `diskon` int(5) DEFAULT NULL,
  `qty_suply` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_suply_detail`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_suply`
--

INSERT INTO `detail_suply` (`id_suply_detail`, `no_suply`, `IdBuku`, `harga_sub`, `diskon`, `qty_suply`) VALUES
('DJ001', 'SUP0000001', '9', 39690, 2, 3),
('DJ002', 'SUP0000001', '11', 75600, 20, 7),
('DJ003', 'SUP0000010', '11', 60750, 10, 5),
('DJ004', 'SUP0000011', '2', 202860, 2, 3),
('DJ005', 'SUP0000011', '2', 327750, 5, 5),
('DJ006', 'SUP0000012', '12345', 28800, 20, 3),
('DJ007', 'SUP0000013', '4', 192000, 20, 3),
('DJ008', 'SUP0000013', '12', 38880, 4, 3),
('DJ009', 'SUP0000014', '2147483647', 27971, 29, 6),
('DJ010', 'SUP0000014', '12345', 63360, 12, 6),
('DJ011', 'SUP0000014', '9', 26190, 3, 2),
('DJ012', 'SUP0000014', '12345', 31680, 12, 3),
('DJ013', 'SUP0000015', '2', 76800, 20, 2),
('DJ014', 'SUP0000015', '123254354', 72000, 20, 3),
('DJ015', 'SUP0000016', '6', 21120, 12, 2),
('DJ016', 'SUP0000016', '5', 21120, 12, 2),
('DJ017', 'SUP0000016', '15', 591360, 12, 12),
('DJ018', 'SUP0000016', '32', 180000, 0, 2),
('DJ019', 'SUP0000016', '26', 200000, 0, 5),
('DJ020', 'SUP0000017', '26', 500000, 0, 10),
('DJ021', 'SUP0000018', '110', 135000, 10, 5),
('DJ022', 'SUP0000018', '26', 160000, 0, 2),
('DJ023', 'SUP0000001', '47115', 21600, 10, 12),
('DJ024', 'SUP0000001', '978', 129600, 10, 12),
('DJ025', 'SUP0000001', '978-602-7847-19-5', 23760, 1, 12),
('DJ026', 'SUP0000002', '47120', 250000, 0, 5),
('DJ027', 'SUP0000002', '978-602-7847-59-1', 120000, 0, 2),
('DJ028', 'SUP0000003', '978-602-341-060-6', 21600, 10, 12);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `IdJabatan` int(5) NOT NULL AUTO_INCREMENT,
  `NamaJabatan` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  PRIMARY KEY (`IdJabatan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`IdJabatan`, `NamaJabatan`, `level`) VALUES
(4, 'Front Office Bazar', 5),
(5, 'Front Office Suply', 4),
(6, 'Front Office Kasir', 2),
(7, 'Pimpinan', 3),
(9, 'Administrator', 1),
(10, 'Super Administrator', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jual`
--

CREATE TABLE IF NOT EXISTS `jual` (
  `no_faktur_jual` varchar(10) NOT NULL DEFAULT '',
  `tgl_transaksi` date DEFAULT NULL,
  `total_harga` decimal(20,0) NOT NULL,
  `IdPegawai` int(11) NOT NULL,
  PRIMARY KEY (`no_faktur_jual`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jual`
--

INSERT INTO `jual` (`no_faktur_jual`, `tgl_transaksi`, `total_harga`, `IdPegawai`) VALUES
('PEN0000001', '2017-01-26', '213630', 22),
('PEN0000002', '2017-01-26', '477000', 22),
('PEN0000003', '2017-01-26', '49950', 22);

-- --------------------------------------------------------

--
-- Table structure for table `jual_bazar`
--

CREATE TABLE IF NOT EXISTS `jual_bazar` (
  `no_transkansi_bazar` varchar(11) NOT NULL,
  `id_kegiatan_bazar` int(11) NOT NULL,
  `IdBuku` varchar(30) NOT NULL,
  `jumlah_qty` int(3) NOT NULL,
  `diskon` int(3) NOT NULL,
  `total_income` int(11) NOT NULL,
  PRIMARY KEY (`no_transkansi_bazar`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jual_bazar`
--

INSERT INTO `jual_bazar` (`no_transkansi_bazar`, `id_kegiatan_bazar`, `IdBuku`, `jumlah_qty`, `diskon`, `total_income`) VALUES
('JB000000005', 4, '10', 1, 10, 25500),
('JB000000003', 4, '10', 1, 10, 25500),
('JB000000004', 4, '11', 1, 10, 210000);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_bazar`
--

CREATE TABLE IF NOT EXISTS `kegiatan_bazar` (
  `IdKegiatan` int(11) NOT NULL AUTO_INCREMENT,
  `NamaKegiatan` varchar(50) NOT NULL,
  `LokasiKegiatan` varchar(300) NOT NULL,
  `TglMulai` date NOT NULL,
  `TglSelesai` date NOT NULL,
  `PenanggungJawab` int(11) NOT NULL,
  `IdInstansi` int(11) NOT NULL,
  PRIMARY KEY (`IdKegiatan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `kegiatan_bazar`
--

INSERT INTO `kegiatan_bazar` (`IdKegiatan`, `NamaKegiatan`, `LokasiKegiatan`, `TglMulai`, `TglSelesai`, `PenanggungJawab`, `IdInstansi`) VALUES
(4, 'Bazar Meriah', 'jl garuda sakti km 2 ', '2016-12-31', '2017-01-07', 2147483647, 1);

-- --------------------------------------------------------

--
-- Table structure for table `list_bazar`
--

CREATE TABLE IF NOT EXISTS `list_bazar` (
  `id_lb` bigint(10) NOT NULL AUTO_INCREMENT,
  `id_buku` varchar(30) NOT NULL,
  `id_bazar` varchar(10) NOT NULL,
  `JumlahBuku` int(5) NOT NULL,
  PRIMARY KEY (`id_lb`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `list_bazar`
--

INSERT INTO `list_bazar` (`id_lb`, `id_buku`, `id_bazar`, `JumlahBuku`) VALUES
(7, '2147483647', '3', 1),
(8, '47105', '3', 1),
(9, '2160', '5', 1),
(10, '2147483647', '4', 1),
(11, '47105', '4', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` bigint(11) NOT NULL COMMENT 'id pegawai, pk',
  `nama` varchar(30) NOT NULL COMMENT 'nama pegawai',
  `jk` varchar(10) NOT NULL COMMENT 'jenis kelamin',
  `alamat` text NOT NULL COMMENT 'alamat pegawai',
  `no_hp` varchar(12) NOT NULL COMMENT 'no hp pegawai',
  `jabatan` varchar(30) NOT NULL COMMENT 'status jabatan ',
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `jk`, `alamat`, `no_hp`, `jabatan`) VALUES
(989, 'Aidil, SE', 'laki-laki', 'jl.Guru', '0963682', 'Kasi Konservasi dan Preparasi'),
(9388484848, 'riander hanif', 'perempuan', 'jl. gajah tunggal', '082390264267', 'pegawai'),
(9544138733, 'Rita Agus Tina, Spd', 'perempuan', 'Jl.Jaya', '08397783644', 'Kasi Konservasi dan Preparasi'),
(10101018897, 'Dra.Iriani', 'Perempuan', 'Jl.Jend Sudirman', '085211452331', 'Kasubbag Tata Usaha');

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE IF NOT EXISTS `penerbit` (
  `IdPenerbit` varchar(5) NOT NULL,
  `NamaPenerbit` varchar(200) NOT NULL,
  `AlamatPenerbit` varchar(300) NOT NULL,
  `NoPenerbit` varchar(14) NOT NULL,
  PRIMARY KEY (`IdPenerbit`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`IdPenerbit`, `NamaPenerbit`, `AlamatPenerbit`, `NoPenerbit`) VALUES
('1234', 'BESTARI BUANA MURNI', 'Jl . Adisucipto Gg. BRI No 341', '0761-4814650'),
('1235', 'PRO U MEDIA', 'Jl. Jogokariyan 41 Yogyakarta', '0274 376301'),
('1236', 'PUSTAKA AL-KAUTSAR', 'Jl. Cipinang Muara Raya No. 63 Jakarta Timur 13420', '021-8507590'),
('1237', 'PT. AQWAM MEDIA PROFETIKA', 'Jl. Menco Raya No.112 Sukoharjo- Solo', '0271 7653000'),
('1238', 'ZANAFA', 'Jl. HR. Soebrantas Kompleks Metropolitan City/ Giant Blok A 39-40', '0761 589935'),
('1239', 'PUSTAKA ILMU', 'Jl. Balam Ujung No. 11 E', '85278980901'),
('1240', 'AGROMEDIA', 'Jl. Moch. Kahfi No. 12 Jakarta Selatan 12640', '0761 704 9995'),
('1241', 'Al-Fatih Bookstore', 'Jl.Jimbaran 1A-14 Kalideres-Jakarta Barat', '0887-877-815-9'),
('1242', 'Tafaqquh', 'Jl.Jend Sudirman Pekanbaru Sudirman Raya Blok D-5', '0853-7637-9136'),
('1243', 'PT.Pustaka Abdi Bangsa', 'Jl.Kav.POLRI Blok I No.65 Jagakarsa-Jakarta Selatan', '021-7819127-28'),
('00000', 'Zanafa2', 'Jl.Subrantas', '0909009');

-- --------------------------------------------------------

--
-- Table structure for table `suply`
--

CREATE TABLE IF NOT EXISTS `suply` (
  `no_suply` varchar(10) NOT NULL,
  `tgl_suply` date NOT NULL,
  `total_harga` int(11) NOT NULL,
  PRIMARY KEY (`no_suply`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suply`
--

INSERT INTO `suply` (`no_suply`, `tgl_suply`, `total_harga`) VALUES
('SUP0000001', '2017-01-26', 0),
('SUP0000002', '2017-01-26', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
