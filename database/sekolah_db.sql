-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Nov 2025 pada 10.21
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id`, `photo`) VALUES
(5, '6dff4b4cbcef007e3860d4f446facfe3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `banners`
--

INSERT INTO `banners` (`id`, `title`, `text`, `photo`) VALUES
(1, 'Selamat Datang', 'Website Resmi SD Negeri 03 Sikampuh Kroya', '951bb201c0ceb224c5b3d4e8481983cf.jpeg'),
(9, 'Tenaga Pengajar Profesional', 'Guru-guru Berkualitas dan Berpengalaman', '32f82f201c4097b466fbf1609ed5f430.jpeg'),
(10, 'PPDB 2025/2026', 'Penerimaan Peserta Didik Baru Tahun Ajaran 2025/2026', '3f2a925c768bf276c6a5384d7924d001.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bg_majors`
--

CREATE TABLE `bg_majors` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bg_majors`
--

INSERT INTO `bg_majors` (`id`, `photo`) VALUES
(1, '65e0e15f390dbce87e3d434a63789634.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekskul`
--

CREATE TABLE `ekskul` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ekskul`
--

INSERT INTO `ekskul` (`id`, `judul`, `foto`, `deskripsi`, `created_at`, `updated_at`) VALUES
(3, 'Tari', 'siswa.jpg', 'Tari adalah sebuah bentuk seni yang menggunakan gerak tubuh sebagai media ekspresi. Melalui rangkaian gerakan yang teratur, tari mampu menyampaikan cerita, perasaan, dan makna yang mendalam. Setiap gerakan dalam tari memiliki nilai estetika, ritme, dan simbol yang menggambarkan budaya, tradisi, atau pesan tertentu.Dalam perkembangannya, tari terbagi menjadi berbagai jenis seperti tari tradisional, tari modern, dan tari kreasi.', '2025-09-08 05:03:01', '2025-11-24 09:16:22'),
(4, 'Pramuka', 'pramuka1.jpg', 'Pramuka merupakan kegiatan yang di lakukan oleh sekelompok orang ', '2025-09-08 05:08:07', '2025-11-24 09:18:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `facilities`
--

INSERT INTO `facilities` (`id`, `name`, `photo`) VALUES
(3, 'Ruang kelas', 'ruang-kelas-20251114082739.jpg'),
(6, 'Lapangan', 'lapangan-20251114082754.jpeg'),
(9, 'Musholla', 'musholla-20251114082807.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `jabatan` varchar(100) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nama`, `nip`, `jabatan`, `foto`, `created_at`) VALUES
(3, 'Prantoko, S.Pd.Jas', '197712112010011012', 'kepala sekolah', 'kepala_sekolah.jpg', '2025-11-14 07:59:54'),
(4, 'Esti Wahyuningsih, S.Pd', '199301192019022003', 'Guru Kelas 6', 'ChatGPT_Image_19_Nov_2025,_22_27_42_(1).jpg', '2025-11-14 08:00:34'),
(5, 'Gayuh Lestari S. S,Pd', '198703272022212013', 'Guru PJOK', 'bu_gayuh1.jpg', '2025-11-14 08:00:56'),
(6, 'Sidik Gunawan', '199404212022211005', 'Guru Kelas 4', 'pak_sidik1.jpg', '2025-11-14 08:01:20'),
(7, 'Nearly Sulistyowati, S.Pd.SD', '197509072022212008', 'Guru Kelas 1 dan 2', 'bu_nearly1.jpg', '2025-11-14 08:02:11'),
(8, 'Setya Murti, S.Pd.I', '-', 'Guru PAI', 'bu_setya1.jpg', '2025-11-14 08:03:13'),
(9, 'Vawziyyah', '-', 'Guru Kelas 5', 'bu_vawziyah1.jpg', '2025-11-14 08:03:55'),
(11, 'Bangkit Nasukha, S.IPust', '-', 'Perpustakaan dan Operator Sekolah', 'pak_bangkit1.jpg', '2025-11-14 08:45:48'),
(12, 'Nurul Khasanah, S.Pd', '-', 'Guru Kelas 4', 'bu_hana.jpg', '2025-11-14 08:46:11'),
(13, 'Sugiarto', '-', 'Penjaga Sekolah', 'pak_sugiarto1.jpg', '2025-11-14 08:46:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `identity`
--

CREATE TABLE `identity` (
  `id` int(11) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `identity`
--

INSERT INTO `identity` (`id`, `meta_title`, `meta_description`, `meta_keyword`, `photo`) VALUES
(1, '', '.SDN 3 Sikampuh Kroya', 'SDN Sikampuh 3 ', '18efe02e7fcc5c6a4ee8c619e501a7d9.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `alamat` text DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `maps` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `alamat`, `telepon`, `email`, `maps`, `created_at`) VALUES
(4, 'Jl. Hiu No. 47 Sikampuh Kecamatan Kroya Kabupaten Cilacap, Provinsi Jawa Tengah, (53282).', '081392298453', 'sdnegerisikampuh03@gmail.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.6004354027164!2d109.19619067357732!3d-7.618380875318433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6541501cf6f5af:0x7c25d6da342e9dd3!2sSDN Sikampuh 03!5e0!3m2!1sid!2sid!4v1757591671580!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '2025-09-08 15:37:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `majors`
--

CREATE TABLE `majors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi_pelajaran`
--

CREATE TABLE `materi_pelajaran` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deskripsi` text DEFAULT NULL,
  `kelas` tinyint(1) NOT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `materi_pelajaran`
--

INSERT INTO `materi_pelajaran` (`id`, `judul`, `isi`, `created_at`, `deskripsi`, `kelas`, `file`) VALUES
(12, 'pepek', NULL, '2025-09-08 09:56:57', 'pepek dan konr', 2, 'Surat-Pernyataan-Tidak-Unggah-Artikel.pdf'),
(13, 'lore,', NULL, '2025-09-08 10:05:17', 'lore', 1, 'Brosur-Online-PPDB-2019.pdf'),
(14, 'woii', NULL, '2025-09-08 10:06:15', 'kajkahu', 3, 'Pengumuman_Wisuda_Ke-77_(signed).pdf'),
(15, 'Gelar Reses di Adireja Wetan, Sawino: Pengurus Tetap Kompak dan Solid', NULL, '2025-09-08 10:20:42', 'mmmmmmmmmmmmmmmmm', 1, 'Pengumuman_Wisuda_Ke-77_(signed)1.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menus`
--

INSERT INTO `menus` (`id`, `user_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 2, 'Pengaturan Web', '#', 'fas fa-fw fa-cog', 'Y'),
(3, 2, 'Manajemen Media', '#', 'fas fa-fw fa-school', 'Y'),
(4, 2, 'Struktur Organisasi', 'struktur', 'fas fa-fw fa-sitemap', 'Y'),
(5, 1, 'Manajemen User', 'user', 'fas fa-fw fa-user', 'Y'),
(8, 1, 'Akademik', '#', 'fas fa-fw fa-book', 'Y'),
(9, 1, 'PPDB', 'c_ppdb', 'fas fa-file-alt', 'Y'),
(10, 1, 'Guru', 'c_guru', 'fas fa-chalkboard-teacher', 'Y'),
(11, 1, 'Kontak', 'c_kontak', 'fas fa-envelope', 'Y'),
(12, 1, 'Profile', '#', 'fas fa-fw fa-home', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `opening`
--

CREATE TABLE `opening` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `opening`
--

INSERT INTO `opening` (`id`, `content`, `photo`) VALUES
(1, 'Assalamualaikum Warahmatullahi Wabarakatuh,\r\nSebagai lembaga pendidikan, SD Negeri 03 Sikampuh tanggap terhadap perkembangan teknologi dan informasi. Dengan dukungan sumber daya manusia yang dimiliki, sekolah ini siap berkompetisi dengan sekolah lain dalam memberikan pelayanan informasi publik. Teknologi informasi, khususnya melalui website sekolah, menjadi sarana bagi SD Negeri 03 Sikampuh untuk menyampaikan informasi secara cepat, jelas, dan akuntabel.\r\nMelalui layanan ini pula, sekolah membuka diri terhadap saran dan masukan dari berbagai pihak agar dapat menjawab kebutuhan masyarakat dengan lebih baik.\r\nLayanan informasi berbasis website sangat penting dalam meningkatkan eksistensi SD Negeri 03 Sikampuh sebagai instansi pendidikan formal. Website sekolah ini nantinya akan menjadi wadah penyebaran berbagai informasi secara luas. Dengan adanya website SD Negeri 03 Sikampuh, segala hal dapat dijangkau dalam hitungan menit, dan informasi pun dapat diakses kapan saja dan di mana saja.\r\nMelalui website sekolah, SD Negeri 03 Sikampuh berkomitmen untuk meningkatkan kredibilitas serta memperkuat kepercayaan masyarakat, yang pada akhirnya dapat berdampak positif terhadap peningkatan jumlah peserta didik setiap tahunnya.\r\nWassalamualaikum warahmatullahi wabarakatuh.', 'fc85d4bd9bb6c4fee692c11e85796a4a.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `is_active` char(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `title`, `seo_title`, `content`, `photo`, `is_active`, `date`) VALUES
(1, 'Hari Batik', 'hari-batik', 'Hari Batik Nasional adalah hari perayaan nasional Indonesia untuk memperingati ditetapkannya batik sebagai Warisan Kemanusiaan untuk Budaya Lisan dan Nonbendawi (Masterpieces of the Oral and Intangible Heritage of Humanity) pada 2 Oktober 2009 oleh UNESCO.Pada tanggal ini, beragam lapisan masyarakat dari pejabat pemerintah dan pegawai BUMN hingga pelajar disarankan untuk mengenakan batik.', '-20251114082834.jpg', 'Y', '2025-11-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb`
--

CREATE TABLE `ppdb` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ppdb`
--

INSERT INTO `ppdb` (`id`, `judul`, `deskripsi`, `link`, `foto`, `created_at`) VALUES
(7, 'PPDB SD NEGERI 03 SIKAMPUH', 'Syarat Pendaftaran Peserta Didik Baru (PPDB) Sekolah Dasar\r\nUntuk mengikuti proses Penerimaan Peserta Didik Baru (PPDB) Sekolah Dasar, calon peserta didik wajib memenuhi persyaratan sebagai berikut:\r\n1. Usia calon peserta didik minimal 6 tahun per tanggal 1 Juli pada tahun berjalan.\r\n2. Fotokopi Akte Kelahiran (dibawa juga dokumen asli untuk verifikasi).\r\n3. Fotokopi Kartu Keluarga (KK) (dibawa juga dokumen asli untuk verifikasi).\r\n4. Pas foto terbaru ukuran 3×4 sebanyak 2 lembar (latar belakang sesuai ketentuan sekolah).\r\n5. Mengisi formulir pendaftaran yang disediakan oleh sekolah.\r\n6. Melampirkan bukti imunisasi dasar lengkap (jika diperlukan sesuai kebijakan sekolah).\r\n7. Tidak ada tes akademik sebagai syarat masuk, sesuai ketentuan Kemendikbud.', 'https://docs.google.com/forms/d/e/1FAIpQLSel1sA_Zt-fBOynHA_EQxqyTArPZBYBIo97wKiO6x1RxaAeEg/viewform?usp=dialog', 'b360399d0cd84de51c7574e78cbdb12a.jpg', '2025-10-14 12:42:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `aktif` enum('Y','N') DEFAULT 'Y',
  `diupload` datetime DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prestasi`
--

INSERT INTO `prestasi` (`id`, `judul`, `deskripsi`, `foto`, `aktif`, `diupload`, `isi`, `created_at`) VALUES
(7, 'Juara 1 Balap Karung', 'SD Negeri mengucapkan selamat dan sukses kepada Raffa Daniswara atas prestasinya sebagai Juara 1 Balap Karung.', '1f25b09faf236e5d140be5bff3801fc8.jpg', 'Y', '2025-09-07 14:59:01', NULL, '2025-09-07 12:59:01'),
(8, 'Juara 2 Gobak Sodor', 'SD Negeri 03 mengucapkan selamat dan sukses kepada Oki, Arinal Khusna, Erlina, Rifki, Hanan atas prestasinya sebagai Juara 2 Gobak Sodor.', 'e8e86be3188b39cfc086208e70581a03.jpg', 'Y', '2025-09-07 15:08:17', NULL, '2025-09-07 13:08:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `jumlah_siswa` int(11) NOT NULL,
  `wali_kelas` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `tahun_ajaran`, `nama_kelas`, `jumlah_siswa`, `wali_kelas`, `created_at`) VALUES
(1, '2024/2025', 'kelas 1', 8, 'Nearly Sulistyowati, S.Pd.SD.', '2025-09-12 09:54:45'),
(2, '2024/2025', 'Kelas 2', 12, 'Nearly Sulistyowati, S.Pd.SD.', '2025-09-12 09:55:32'),
(3, '2024/2025', 'Kelas 3', 12, 'Sidik Gunawan, S.Pd.', '2025-09-12 10:02:14'),
(4, '2024/2025', 'Kelas 4', 10, 'Nurul Khasanah Makhfudz, S Pd.', '2025-11-01 16:47:47'),
(5, '2024/2025', 'Kelas 5', 6, 'Vawziyyah, S.P.d.', '2025-11-01 16:48:28'),
(6, '2024/2025', 'Kelas 6', 5, 'Esti Wahyuningsih, S.Pd.', '2025-11-01 16:48:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `structure`
--

CREATE TABLE `structure` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `structure`
--

INSERT INTO `structure` (`id`, `photo`) VALUES
(1, 'efadc773f1937d6e425bbe90b61d3b21.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `submenus`
--

CREATE TABLE `submenus` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `sub_title` varchar(50) NOT NULL,
  `sub_url` varchar(100) NOT NULL,
  `is_active` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `submenus`
--

INSERT INTO `submenus` (`id`, `menu_id`, `sub_title`, `sub_url`, `is_active`) VALUES
(1, 1, 'Identitas Web', 'identitas', 'Y'),
(2, 3, 'Sambutan', 'sambutan', 'Y'),
(3, 3, 'Banner', 'banner', 'Y'),
(4, 3, 'Fasilitas', 'fasilitas', 'Y'),
(5, 3, 'Berita', 'berita', 'Y'),
(8, 8, 'Ekstrakurikuler', 'c_ekskul', 'Y'),
(9, 8, 'Prestasi', 'c_prestasi', 'Y'),
(10, 8, 'Siswa', 'c_siswa', 'Y'),
(11, 3, 'Videos', 'c_videos', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `photo`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$BBPqlWe4MA3eX7ZvYvMLa.FQCcuomF45ayoxuSmiWyGRkYB9rfn6O', 'admin@example.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1763975721, 1, 'Admin', 'SDN 3 Sikampuh Kroya', NULL, '2147483647', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(58, 1, 1),
(59, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `videos`
--

INSERT INTO `videos` (`id`, `judul`, `link`, `thumbnail`, `created_at`) VALUES
(2, 'Study Tour 2023 SDN 03 Sikampuh Kroya|Jogjakarta 11 Maret 2023 Bersama Abata Wisata', 'https://youtu.be/sl8TIBSUtJg?si=wWfF0L1x1_WwQVmP', 'a07b81b1efcb2c7cb7daf0e35ffdeffe.png', '2025-09-11 10:10:39'),
(4, 'Aksi Nyata Kurikulum Merdeka Eli Retnoningsih - SD Negeri Sikampuh 03 Kroya', 'https://youtu.be/d0c876AKgJQ?si=-sqXLRIYcMFLf5VY', '2a68042f260a8fb6a4e65246eee82e2b.png', '2025-09-11 11:06:41');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ekskul`
--
ALTER TABLE `ekskul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ppdb`
--
ALTER TABLE `ppdb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `structure`
--
ALTER TABLE `structure`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `submenus`
--
ALTER TABLE `submenus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indeks untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indeks untuk tabel `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ekskul`
--
ALTER TABLE `ekskul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ppdb`
--
ALTER TABLE `ppdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `structure`
--
ALTER TABLE `structure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `submenus`
--
ALTER TABLE `submenus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
