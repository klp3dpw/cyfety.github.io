-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2021 at 12:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyfety`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `dilihat` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `slug`, `gambar`, `isi`, `tanggal`, `dilihat`) VALUES
(2, 'Apa itu Cyberbullying?', 'Apa-itu-Cyberbullying', '1.jpg', '<p>Cyberbullying (perundungan dunia maya) ialah bullying/perundungan dengan menggunakan teknologi digital. Hal ini dapat terjadi di media sosial, platform chatting, platform bermain game, dan ponsel. Adapun menurut Think Before Text, cyberbullying adalah perilaku agresif dan bertujuan yang dilakukan suatu kelompok atau individu, menggunakan media elektronik, secara berulang-ulang dari waktu ke waktu, terhadap seseorang yang dianggap tidak mudah melakukan perlawanan atas tindakan tersebut. Jadi, terdapat perbedaan kekuatan antara pelaku dan korban. Perbedaan kekuatan dalam hal ini merujuk pada sebuah persepsi kapasitas fisik dan mental.</p>\r\n\r\n<p>Cyberbullying merupakan perilaku berulang yang ditujukan untuk menakuti, membuat marah, atau mempermalukan mereka yang menjadi sasaran. Contohnya termasuk: Menyebarkan kebohongan tentang seseorang atau memposting foto memalukan tentang seseorang di media sosial, mengirim pesan atau ancaman yang menyakitkan melalui platform chatting, menuliskan kata-kata menyakitkan pada kolom komentar media sosial, atau memposting sesuatu yang memalukan/menyakitkan dan masih banyak lagi.</p>\r\n\r\n<p>Bullying secara langsung atau tatap muka dan cyberbullying seringkali dapat terjadi secara bersamaan. Namun cyberbullying meninggalkan jejak digital &ndash; sebuah rekaman atau catatan yang dapat berguna dan memberikan bukti ketika membantu menghentikan perilaku salah ini.</p>\r\n', '2021-07-03', 2),
(3, 'Lorem Ipsum', 'Lorem-Ipsum', '8.jpg', '<p>Morbi venenatis aliquet neque, rhoncus vehicula diam vestibulum non. Sed sem massa, posuere vitae metus et, condimentum blandit arcu. Nullam dapibus ornare erat. Aliquam diam ex, convallis sed velit vel, aliquam scelerisque justo. Donec interdum eget nunc vel porta. Aenean imperdiet lacus dolor, egestas euismod arcu dapibus eget. Ut condimentum rutrum tempus. Integer augue lacus, molestie varius faucibus quis, lobortis vel tortor. Suspendisse feugiat diam vel tellus porta, eget lacinia nisi pharetra.</p>', '2021-07-03', 1),
(4, 'Bagaimana kita membedakan antara lelucon/candaan dengan bullying?', 'Bagaimana-kita-membedakan-antara-lelucon-atau-candaan-dengan-bullying', '2.jpg', '<p>Semua teman suka bercanda dengan satu sama lain, tetapi kadang-kadang sulit untuk mengatakan apakah seseorang hanya sedang bersenang-senang atau mencoba menyakitimu, terutama saat di internet. Kadang-kadang mereka akan menertawakannya dengan mengatakan &ldquo;cuma bercanda kok,&rdquo; atau &ldquo;jangan dianggap serius dong.&rdquo;</p>\r\n\r\n<p>Tetapi kalau kamu merasa terluka atau berpikir sepertinya mereka &lsquo;menertawakanmu&rsquo; bukan &lsquo;tertawa bersamamu&rsquo;, maka lelucon atau candaannya mungkin sudah terlalu jauh. Kalau itu terus berlanjut bahkan setelah kamu meminta orang itu untuk berhenti dan kamu masih saja merasa kesal tentang hal itu, maka ini bisa jadi adalah <em>bullying</em>.</p>\r\n\r\n<p>Dan ketika <em>bullying</em> terjadi secara <em>online</em>, ini dapat menarik perhatian yang tidak diinginkan dari berbagai orang termasuk orang asing yang tidak kamu kenal. Di mana pun itu terjadi, jika kamu tidak nyaman dengan hal itu, kamu perlu melakukan pembelaan.</p>\r\n\r\n<p>Katakan apa yang kamu inginkan &ndash; jika kamu merasa tidak senang dan tetap saja tidak berhenti, maka ada baiknya kamu mencari bantuan. Menghentikan <em>cyberbullying</em> bukan hanya tentang mengungkapkan siapa saja para pelaku <em>bully</em>, namun juga tentang menekankan bahwa semua orang berhak untuk dihormati &ndash; baik di dunia maya maupun di dunia nyata.</p>\r\n', '2021-07-03', 0),
(6, 'Kepada siapa saya harus berbicara? Mengapa melapor itu penting?', 'Kepada-siapa-saya-harus-berbicara-Mengapa-melapor-itu-penting', '5.jpg', '<p>Jika kamu merasa sedang di-<em>bully</em>, langkah pertama yang perlu dilakukan adalah mencari bantuan dari seseorang yang kamu percaya seperti orang tua, anggota keluarga terdekat atau orang dewasa terpercaya lainnya.</p>\r\n\r\n<p>Di sekolah, kamu bisa menghubungi guru yang kamu percaya seperti guru BK, guru olahraga, atau guru mata pelajaran.</p>\r\n\r\n<p>Dan jika kamu merasa tidak nyaman berbicara dengan seseorang yang kamu kenal, <a href=\"https://www.facebook.com/TePSAKEMENSOS/\">hubungi Telepon Pelayanan Sosial Anak (TePSA)</a> di nomor telepon 1500 771, atau nomor handphone / Whatsapp 081238888002 dan kamu bisa ngobrol dengan konselor profesional yang ramah!</p>\r\n\r\n<p>Jika <em>bullying</em> terjadi di media sosial, kamu bisa memblokir akun pelaku dan melaporkan perilaku mereka di media sosial itu sendiri. Media sosial berkewajiban menjaga keamanan penggunanya, loh.</p>\r\n\r\n<p>Mengumpulkan dan menyimpan bukti-bukti bisa membantumu nanti untuk menunjukkan apa yang telah terjadi &ndash; misalnya seperti pesan dalam <em>chatting </em>dan <em>screenshot</em> postingan di media sosial.</p>\r\n\r\n<p>Agar <em>bullying</em> berhenti, kuncinya ialah perlu diidentifikasi dan dilaporkan lebih lanjut. Hal ini juga dapat menunjukkan kepada pelaku <em>bully </em>bahwa tindakan mereka tidak dapat diterima.</p>\r\n\r\n<p>Jika kamu berada dalam keadaan bahaya saat itu juga, maka kamu harus menghubungi polisi atau layanan darurat, seperti berikut:</p>\r\n\r\n<ul>\r\n	<li>Ambulan: 118 atau 119</li>\r\n	<li>Polisi: 110</li>\r\n	<li>Pemadam Kebakaran: 113 atau 1131</li>\r\n	<li>Badan Search and Rescue Nasional (BASARNAS): 115</li>\r\n</ul>\r\n\r\n<p><strong>Facebook/Instagram: </strong>Jika kamu di-<em>bully </em>secara <em>online</em>, kami mendorongmu untuk membicarakannya dengan orang tua, guru, atau seseorang yang kamu percaya &ndash; kamu punya hak untuk merasa aman. Melaporkan tindakan <em>bullying </em>secara langsung sangat dimudahkan di Facebook maupun Instagram.</p>\r\n\r\n<p>Kamu selalu dapat mengirim laporan (secara anonim) mengenai postingan, komentar, atau <em>story </em>yang tidak menyenangkan di Facebook maupun Instagram.</p>\r\n\r\n<p>Facebook maupun Instagram memiliki tim yang selalu melihat laporan-laporan ini selama 24 jam di seluruh dunia dalam lebih dari 50 bahasa, dan postingan apa pun yang bersikap kasar, mengganggu, atau membully akan segera dihapus. Laporan-laporan ini selalu anonim (atau tidak diperlihatkan siapa yang melapor).</p>\r\n\r\n<p>Kami punya <a href=\"https://www.facebook.com/safety/bullying/teens\">panduan</a> di Facebook yang dapat mengarahkanmu untuk melalui proses penanganan <em>bullying</em> &ndash; atau apa yang harus dilakukan jika kamu melihat seseorang dibully. Di Instagram, kita juga punya <a href=\"https://parentalk.id/file/2019/09/Panduan-Instagram-untuk-Orang-Tua.pdf\">Panduan untuk Orang Tua</a> yang memberikan rekomendasi untuk orang tua, wali, dan orang dewasa terpercaya tentang cara menyikapi <em>cyberbullying</em>, dan sebuah <em><a href=\"http://safety.instagram.com/\">central hub</a></em> &nbsp;dimana kamu bisa mempelajari tentang perangkat keamanan Instagram.</p>\r\n\r\n<p><strong>Twitter:</strong> Jika kamu pikir bahwa kamu sedang dibully, hal terpenting adalah memastikan dirimu aman. Sangat penting untuk memiliki seseorang untuk diajak bicara tentang apa yang sedang kamu alami. Bisa saja seorang guru, orang dewasa terpercaya lainnya, atau orang tua. Bicaralah dengan orang tua dan temanmu tentang apa yang harus dilakukan jika kamu (atau seorang teman) sedang mengalami <em>cyberbullying</em>.</p>\r\n\r\n<p>Kami mendorong setiap orang untuk melaporkan akun yang melanggar aturan. Kamu bisa melakukan ini melalui halaman <a href=\"https://help.twitter.com/id\">Pusat Bantuan</a> atau mengklik pilihan &ldquo;Laporkan Tweet&rdquo; pada Tweet seseorang.</p>\r\n', '2021-07-03', 0),
(7, 'There is no one who loves pain itself', 'There-is-no-one-who-loves-pain-itself', '51.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed tortor et tortor ultrices posuere. Integer semper rutrum commodo. Curabitur faucibus massa risus, in placerat nisi aliquet eu. Cras eget pellentesque diam. Cras eu rutrum dui. Donec mollis laoreet tincidunt. Etiam ac fringilla nisi. Etiam libero purus, semper at arcu pharetra, vehicula placerat augue. Duis facilisis semper blandit. Nunc ac posuere turpis. Morbi imperdiet ullamcorper porta. Donec in facilisis lorem. Nullam eu quam at orci eleifend lobortis at sagittis nulla. Cras mollis urna dui, nec fringilla ipsum placerat id. Donec eu arcu nec quam ullamcorper malesuada. Mauris laoreet porta leo, eget eleifend odio ornare eget.</p>\r\n\r\n<p>Praesent pharetra lobortis egestas. Donec et ornare tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam scelerisque at sem nec tempus. Fusce ut faucibus nisi. Mauris in arcu ultricies nulla consequat malesuada. Sed mattis ut odio eget suscipit. Pellentesque quam libero, ultricies quis bibendum quis, pulvinar convallis mauris. Praesent non imperdiet nunc, eget vestibulum odio. Suspendisse nec tellus ut sem aliquet blandit. Sed sed ultricies enim. Vestibulum ornare, erat vitae dictum vulputate, odio augue posuere magna, non pulvinar sem ligula nec nisi. Sed at velit tristique, suscipit nisl a, efficitur augue. Etiam bibendum rutrum felis quis tristique. Aenean nec condimentum urna, nec ornare enim. Praesent maximus libero nec diam laoreet, vel mollis nisi scelerisque.</p>\r\n\r\n<p>Aenean ut velit quis quam lobortis eleifend non ultrices augue. Maecenas posuere faucibus vulputate. Curabitur a enim finibus, consectetur dui id, maximus risus. Mauris bibendum, lectus eu consequat tempor, ex augue vestibulum ligula, et molestie mauris dolor vitae enim. Duis at leo dictum, sodales turpis sed, pulvinar diam. In hac habitasse platea dictumst. Maecenas lacinia mauris nec diam laoreet, et pharetra eros pellentesque. Ut eget porta dui, ut elementum odio. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>\r\n\r\n<p>Aenean lobortis varius neque, a suscipit massa tempus eu. Sed in lobortis dolor. Donec interdum leo eu nisi condimentum commodo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut vel convallis nisi. Cras dapibus, ante ut aliquet condimentum, eros tortor vulputate dui, a maximus leo libero bibendum risus. Fusce consequat ut felis et tincidunt. Maecenas varius, est nec pretium commodo, lorem purus mollis nisi, eu efficitur metus nisl vitae nisl. Aliquam in posuere tellus. Curabitur convallis tristique odio ut ullamcorper. Etiam convallis sapien non arcu scelerisque commodo. Nulla dignissim at turpis vel bibendum.</p>\r\n\r\n<p>Morbi venenatis aliquet neque, rhoncus vehicula diam vestibulum non. Sed sem massa, posuere vitae metus et, condimentum blandit arcu. Nullam dapibus ornare erat. Aliquam diam ex, convallis sed velit vel, aliquam scelerisque justo. Donec interdum eget nunc vel porta. Aenean imperdiet lacus dolor, egestas euismod arcu dapibus eget. Ut condimentum rutrum tempus. Integer augue lacus, molestie varius faucibus quis, lobortis vel tortor. Suspendisse feugiat diam vel tellus porta, eget lacinia nisi pharetra.</p>\r\n\r\n<p>Nunc ornare feugiat aliquet. Vivamus eget laoreet odio. Vivamus ultrices malesuada nisl, a hendrerit dui molestie non. Etiam odio risus, tincidunt eget nunc ac, fermentum tincidunt nibh. Morbi lacinia, lacus ac dapibus venenatis, diam arcu mollis nulla, sit amet viverra nulla lorem sit amet velit. Integer feugiat augue sed leo gravida fringilla. Maecenas a faucibus enim. Suspendisse varius consequat velit, convallis aliquet purus tempor et. Nullam eu nisl neque. Fusce dui nulla, gravida vel odio facilisis, egestas sollicitudin felis. Sed nec erat congue, placerat lacus vel, dictum nibh. Aenean gravida rhoncus mi, nec cursus lorem egestas vitae. Aenean lobortis ullamcorper nibh sed sagittis. Aliquam dui ipsum, tempor eget accumsan et, egestas nec libero.</p>\r\n\r\n<p>Praesent ex quam, efficitur in tellus eu, eleifend interdum eros. Etiam quis tortor condimentum, vehicula enim nec, faucibus leo. Nulla facilisi. Duis fringilla, purus ut laoreet elementum, risus quam tincidunt purus, eget condimentum justo quam at ante. Proin nunc tortor, vulputate vitae nisi nec, dignissim dictum nunc. Suspendisse viverra magna non placerat porta. In convallis lorem quis dolor consequat hendrerit. Mauris vel ipsum auctor, ullamcorper lorem in, lobortis ipsum. Curabitur quis aliquam mauris, a pharetra arcu. Donec ac congue purus, eu cursus turpis. Ut vitae ornare metus. Fusce eget leo nisi. Morbi sed diam sagittis, cursus nisi non, lacinia lorem. Quisque facilisis ipsum elit, vitae volutpat turpis aliquam quis. Duis vel nibh id elit ultricies ultricies vitae eu ante. Integer lobortis, nisl id viverra suscipit, ante tortor vulputate augue, id volutpat ligula est mattis elit.</p>\r\n\r\n<p>Donec malesuada quis lorem eu ullamcorper. Nunc finibus posuere finibus. Donec ac dolor non leo molestie tempor. Aliquam eu ante ac nulla lacinia ornare sed id neque. Nam auctor massa sed pharetra scelerisque. Phasellus molestie lorem leo, id faucibus velit semper sed. Vivamus ut mollis mi. Nullam turpis erat, fringilla cursus faucibus ac, cursus nec odio. Etiam in neque diam. Sed posuere ut est id tempus. Phasellus posuere lorem ac consectetur faucibus. Phasellus nec egestas tellus, et accumsan quam.</p>\r\n', '2021-07-04', 1),
(14, 'Lorem Ipsum', 'Lorem-Ipsum', '81.jpg', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<h2>Where can I get some?</h2>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '2021-07-19', 0),
(19, 'Bagaimana cara membedakan cyberbullying dengan bercanda?', 'Bagaimana-cara-membedakan-cyberbullying-dengan-bercanda-', 'blog-inside-post.jpg', '<p>Tes artikel</p>\r\n', '2021-07-24', 1),
(20, 'Bagaimana cara mengetahui/membedakan cyberbullying?? Simak artikel berikut ini', 'Bagaimana-cara-mengetahui-membedakan-cyberbullying---Simak-artikel-berikut-ini', '', '<p>tes.</p>\r\n', '2021-07-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- Error reading data for table cyfety.login: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `cyfety`.`login`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `kronologi` text NOT NULL,
  `tindakan` varchar(255) NOT NULL,
  `platform` varchar(255) NOT NULL,
  `postingan_ada` varchar(255) NOT NULL,
  `username_user` varchar(255) NOT NULL,
  `username_pelaku` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `nama`, `alamat`, `jenis_kelamin`, `tgl_lahir`, `no_hp`, `email`, `kronologi`, `tindakan`, `platform`, `postingan_ada`, `username_user`, `username_pelaku`, `link`) VALUES
(1, 'Riskatul', 'Barru', 'Perempuan', '2001-10-20', '081122342627', 'riskatul@gmail.com', 'cyberbullying', 'beritahu dan lapor ke sekolah pelaku,', 'Twitter', 'Iya', 'riskaaa_', 'pelaku123', 'https://twitter.com/home'),
(2, 'Mawar', 'Jl. Melati', 'Perempuan', '2001-02-20', '081234567891', 'mawarmerahindah@gmail.com', 'Cyberbullying terjadi di instagram', 'hapus status atau komentar yang berkaitan,', 'Facebook', 'Iya', 'mawar_merah', 'pelaku__xx', 'https://facebook.com/home'),
(3, 'Dian Resky Dirman', 'Toa Daeng 3', 'Perempuan', '2000-11-20', '085211839491', 'dianresky@gmail.com', 'Cyberbullying', 'beritahu dan lapor ke sekolah pelaku,hapus status atau komentar yang berkaitan,', 'Twitter', 'Iya', 'diannreskyy', 'pelaku123', 'https://twitter.com/home');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(128) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'mubarak', 'dedemubarak54@gmail.com', 'default.jpg', '$2y$10$gpNtuHTSpDW2NWl4wlb1X.nG6XIxL6XA2ROo/K.FOOYOrokDWfWWu', 2, 1, '0000-00-00'),
(2, 'rayn', 'saharuddin.putraalluu@gmail.com', 'default.jpg', '$2y$10$SoVGSy4WAaAjRPfFSZyQdO7jg1vztNIS9QoqXx.yg9kaBk02CHaQq', 2, 1, '0000-00-00'),
(3, 'dian', 'dianresky9701@gmail.com', 'default.jpg', '$2y$10$osSCR8.Y/6JEJDUfUqzl4O35q7ssLlve95PDroQPq7j7o2v7Ey1Ga', 2, 1, '0000-00-00'),
(4, 'admin', 'admin@gmail.com', 'default.jpg', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 1, '0000-00-00'),
(6, 'riskatul', 'riskatul@gmail.com', '', '$2y$10$wUK9gnhRNYOEawWhgFEtaezu8/id71UbMPtb27hF2bYimDuFkDz.u', 2, 0, '0000-00-00'),
(8, 'dian', 'dianresky@gmail.com', '', '$2y$10$Pw6oxXC.XOjq6y6ocNX0YOXyfafph9vANFtqpXqPKKfhj4op3n2rO', 2, 1, '0000-00-00'),
(9, 'bulan', 'bulan123@gmail.com', '', '$2y$10$NtCnYX8o/teuR0/snCl78ez3yU28nNaMN8RVSMJw2P6XQAXrHooQy', 2, 1, '0000-00-00'),
(12, 'bintang', 'bintang123@gmail.com', 'dafault.jpg', '835a4ec91c6e00272439acbd7baab3057c8ec409', 2, 1, '0000-00-00'),
(13, 'bumi', 'bumi123@gmail.com', 'default.jpg', '1d7f11903a02889ff014e154d34e36a25e53106d', 2, 1, '2021-07-11'),
(14, 'dian resky', 'dianresky0197@gmail.com', 'default.jpg', '$2y$10$VRtNSXyP6SeUMcPqiolzbOLn2GMrP.cDMWywaMAh7j.bXdjo1Vk9y', 2, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(125) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
