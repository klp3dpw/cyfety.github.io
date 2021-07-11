-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 08:54 AM
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
(2, 'Apa itu Cyberbullying?', 'Apa-itu-Cyberbullying', '1.jpg', '<p>Cyberbullying (perundungan dunia maya) ialah bullying/perundungan dengan menggunakan teknologi digital. Hal ini dapat terjadi di media sosial, platform chatting, platform bermain game, dan ponsel. Adapun menurut Think Before Text, cyberbullying adalah perilaku agresif dan bertujuan yang dilakukan suatu kelompok atau individu, menggunakan media elektronik, secara berulang-ulang dari waktu ke waktu, terhadap seseorang yang dianggap tidak mudah melakukan perlawanan atas tindakan tersebut. Jadi, terdapat perbedaan kekuatan antara pelaku dan korban. Perbedaan kekuatan dalam hal ini merujuk pada sebuah persepsi kapasitas fisik dan mental.</p>\r\n\r\n<p>Cyberbullying merupakan perilaku berulang yang ditujukan untuk menakuti, membuat marah, atau mempermalukan mereka yang menjadi sasaran. Contohnya termasuk: Menyebarkan kebohongan tentang seseorang atau memposting foto memalukan tentang seseorang di media sosial, mengirim pesan atau ancaman yang menyakitkan melalui platform chatting, menuliskan kata-kata menyakitkan pada kolom komentar media sosial, atau memposting sesuatu yang memalukan/menyakitkan dan masih banyak lagi.</p>\r\n\r\n<p>Bullying secara langsung atau tatap muka dan cyberbullying seringkali dapat terjadi secara bersamaan. Namun cyberbullying meninggalkan jejak digital &ndash; sebuah rekaman atau catatan yang dapat berguna dan memberikan bukti ketika membantu menghentikan perilaku salah ini.</p>\r\n', '2021-07-03', 1),
(3, 'Lorem Ipsum', 'Lorem-Ipsum', '8.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut velit sagittis ipsum efficitur venenatis ut ac erat. Nunc feugiat laoreet dolor finibus faucibus. Nunc in neque interdum, sagittis velit nec, ultrices neque. Donec eget lacus feugiat, iaculis ligula quis, sollicitudin felis. Cras ut augue eget lacus varius commodo non facilisis diam. Nullam vel quam sed leo pharetra cursus. Phasellus in leo varius, tincidunt purus sed, porta justo. Quisque lectus sapien, consectetur bibendum justo quis, semper faucibus dolor. Nunc at hendrerit quam, at dictum orci. Integer tristique id est quis porta.</p>\r\n\r\n<p>Mauris tincidunt, ipsum sed elementum congue, odio augue sollicitudin erat, id dapibus massa purus et metus. Vestibulum ipsum libero, congue a mollis vel, eleifend quis quam. Aliquam nisi nulla, pharetra in mattis non, placerat ut nunc. Fusce enim quam, tempus quis malesuada id, mattis vitae lacus. Quisque malesuada velit nec purus vulputate finibus. Cras mauris ante, aliquet sed dictum ac, vehicula a tellus. Fusce ac vehicula odio, a vehicula lectus.</p>\r\n\r\n<p>Phasellus ornare ligula et massa efficitur tempus. Vestibulum felis tortor, ultricies ac blandit et, eleifend mattis mi. Vestibulum facilisis mi et venenatis venenatis. Nunc mi ex, semper ut tellus ultrices, tristique placerat mi. Donec vitae turpis mattis, congue metus non, auctor turpis. Vivamus vulputate sit amet turpis non ornare. Nulla gravida tristique leo. Nam id eleifend tortor, nec tincidunt nibh. Phasellus mauris diam, pulvinar hendrerit odio non, feugiat dignissim diam. Etiam porta, dolor ac interdum eleifend, libero risus dignissim diam, vel volutpat odio lorem quis risus. Duis non ultrices massa. In semper sed nibh non consectetur. Nullam at purus ipsum. Fusce dignissim lacinia dui, eu mollis libero iaculis non. Ut auctor sit amet tortor ut efficitur.</p>\r\n\r\n<p>Morbi auctor elit ac orci rutrum aliquet. Sed suscipit odio sed felis vulputate, a imperdiet sem porttitor. Aliquam rhoncus, risus sit amet consectetur fermentum, quam risus auctor enim, a aliquet lectus arcu a magna. Sed vestibulum nisi nisl, a sagittis eros fringilla ac. Maecenas venenatis ut lorem quis eleifend. Morbi dignissim, urna in consequat congue, leo velit vulputate tellus, non sodales mauris ante ac enim. Donec placerat nunc arcu. Proin purus turpis, tristique non convallis a, molestie in enim. Ut commodo, magna ut tincidunt luctus, odio justo laoreet eros, nec sodales tellus magna in est. Donec semper diam non sapien aliquet congue. Duis sed ipsum urna. Suspendisse a dolor scelerisque, congue magna non, imperdiet arcu.</p>\r\n\r\n<p>Nullam iaculis sollicitudin eleifend. Nam sed pellentesque nulla. Aliquam cursus tellus quis fermentum ultrices. In erat elit, interdum in egestas a, feugiat et risus. Integer viverra neque nibh, eget lobortis tellus vehicula quis. Nulla vitae luctus tortor, id condimentum urna. Pellentesque et hendrerit dui. Ut neque felis, suscipit in porttitor nec, tempus id eros. Aenean et vulputate nulla. Maecenas commodo est nibh. Duis congue sed elit vel elementum. Integer in ex eros.</p>\r\n\r\n<p>Maecenas ut gravida ipsum, nec tincidunt odio. In hac habitasse platea dictumst. Donec malesuada dolor vel quam vehicula cursus. Donec viverra ex sit amet tortor scelerisque, at consequat velit ullamcorper. Nulla lobortis in ante sit amet aliquam. Sed vitae urna id quam cursus molestie. Praesent non neque varius, fringilla urna ac, semper purus. Sed sed cursus massa. Quisque dictum tempor metus eu ultrices. Nulla et mauris augue. Vivamus mauris tortor, vestibulum vel malesuada tempor, efficitur ut metus. Donec et feugiat felis.</p>\r\n', '2021-07-03', 1),
(4, 'Bagaimana kita membedakan antara lelucon/candaan dengan bullying?', 'Bagaimana-kita-membedakan-antara-lelucon/candaan-dengan-bullying?', '2.jpg', '<p>Semua teman suka bercanda dengan satu sama lain, tetapi kadang-kadang sulit untuk mengatakan apakah seseorang hanya sedang bersenang-senang atau mencoba menyakitimu, terutama saat di internet. Kadang-kadang mereka akan menertawakannya dengan mengatakan &ldquo;cuma bercanda kok,&rdquo; atau &ldquo;jangan dianggap serius dong.&rdquo;</p>\r\n\r\n<p>Tetapi kalau kamu merasa terluka atau berpikir sepertinya mereka &lsquo;menertawakanmu&rsquo; bukan &lsquo;tertawa bersamamu&rsquo;, maka lelucon atau candaannya mungkin sudah terlalu jauh. Kalau itu terus berlanjut bahkan setelah kamu meminta orang itu untuk berhenti dan kamu masih saja merasa kesal tentang hal itu, maka ini bisa jadi adalah <em>bullying</em>.</p>\r\n\r\n<p>Dan ketika <em>bullying</em> terjadi secara <em>online</em>, ini dapat menarik perhatian yang tidak diinginkan dari berbagai orang termasuk orang asing yang tidak kamu kenal. Di mana pun itu terjadi, jika kamu tidak nyaman dengan hal itu, kamu perlu melakukan pembelaan.</p>\r\n\r\n<p>Katakan apa yang kamu inginkan &ndash; jika kamu merasa tidak senang dan tetap saja tidak berhenti, maka ada baiknya kamu mencari bantuan. Menghentikan <em>cyberbullying</em> bukan hanya tentang mengungkapkan siapa saja para pelaku <em>bully</em>, namun juga tentang menekankan bahwa semua orang berhak untuk dihormati &ndash; baik di dunia maya maupun di dunia nyata.</p>\r\n', '2021-07-03', 0),
(5, 'Apa dampak dari cyberbullying?', 'Apa-dampak-dari-cyberbullying', '31.jpg', '<p><em>Bullying</em> terjadi secara <em>online,</em> kamu bisa merasa seperti diserang dari mana-mana, bahkan di dalam rumahmu sendiri. Sepertinya tidak ada jalan untuk keluar. Dampaknya dapat bertahan lama dan memengaruhi seseorang dalam banyak cara:</p>\r\n\r\n<p><strong>Secara Mental</strong> &mdash; merasa kesal, malu, bodoh, bahkan marah</p>\r\n\r\n<p><strong>Secara Emosional</strong> &mdash; merasa malu atau kehilangan minat pada hal-hal yang kamu sukai</p>\r\n\r\n<p><strong>Secara Fisik</strong> &mdash; lelah (kurang tidur), atau mengalami gejala seperti sakit perut dan sakit kepala</p>\r\n\r\n<p>Perasaan ditertawakan atau dilecehkan oleh orang lain dapat membuat seseorang tidak ingin membicarakan atau mengatasi masalah tersebut. Dalam kasus ekstrim, <em>cyberbullying</em> bahkan dapat menyebabkan seseorang mengakhiri nyawanya sendiri.</p>\r\n\r\n<p><em>Cyberbullying</em> dapat mempengaruhi kita dengan berbagai cara, tetapi tentunya masalah ini dapat diatasi dan orang-orang yang terdampak juga dapat memperoleh kembali kepercayaan diri dan kesehatan mental mereka.</p>\r\n\r\n<p>Semua anak yang terpapar oleh cyberbullying dapat menderita: baik itu korban, pelaku dan orang menyaksikan cyberbullying.</p>\r\n\r\n<p>Anak-anak yang mengalami cyberbullying, umumnya:</p>\r\n\r\n<ul>\r\n	<li>Menunjukkan ciri-ciri depresi&nbsp;</li>\r\n	<li>Memiliki masalah kepercayaan dengan orang lain</li>\r\n	<li>Tidak diterima oleh rekan-rekan mereka</li>\r\n	<li>Selalu waspada dan curiga terhadap orang lain (kekhawatiran berlebih)</li>\r\n	<li>Memiliki masalah menyesuaikan diri dengan sekolah</li>\r\n	<li>Kurang motivasi sehingga sulit fokus dalam mengikuti pembelajaran</li>\r\n</ul>\r\n\r\n<p><strong>Think Before Text</strong></p>\r\n\r\n<p>Dampak bagi korban:</p>\r\n\r\n<ol>\r\n	<li>Dampak psikologis: mudah depresi, marah, timbul perasaan gelisah, cemas, menyakiti diri sendiri, dan perfobaan bunuh diri</li>\r\n	<li>Dampak sosial: menarik diri, kehilangan kepercayaan diri, lebih agresif kepada teman dan keluarga&nbsp;</li>\r\n	<li>Dampak pada kehidupan sekolah: penurunan prestasi akademik, rendahnya tingkat kehadiran, perilaku bermasalah di sekolah.&nbsp;</li>\r\n</ol>\r\n\r\n<p>Dampak bagi Pelaku:<br />\r\nCenderung bersifat agresif, berwatak keras, mudah marah, impulsif, lebih ingin mendominasi orang lain, kurang berempati, dan dapat dijauhi oleh orang lain.</p>\r\n\r\n<p>Dampak bagi yang menyaksikan (<em>bystander</em>):<br />\r\nJika cyberbullying dibiarkan tanpa tindak lanjut, maka orang yan menyaksikan dapat berasumsi bahwa cyberbullying adalah perilaku yang diterima secara sosial. Dalam kondisi ini, beberapa orang mungkin akan bergabung dengan penindas karena takut menjadi sasaran berikutnya dan beberapa lainnya mungkin hanya akan diam saja tanpa melakukan apapun dan yang paling parah mereka merasa tidak perlu menghentikannya.</p>\r\n', '2021-07-03', 2),
(6, 'Kepada siapa saya harus berbicara? Mengapa melapor itu penting?', 'Kepada-siapa-saya-harus-berbicara?-Mengapa-melapor-itu-penting?', '5.jpg', '<p>Jika kamu merasa sedang di-<em>bully</em>, langkah pertama yang perlu dilakukan adalah mencari bantuan dari seseorang yang kamu percaya seperti orang tua, anggota keluarga terdekat atau orang dewasa terpercaya lainnya.</p>\r\n\r\n<p>Di sekolah, kamu bisa menghubungi guru yang kamu percaya seperti guru BK, guru olahraga, atau guru mata pelajaran.</p>\r\n\r\n<p>Dan jika kamu merasa tidak nyaman berbicara dengan seseorang yang kamu kenal, <a href=\"https://www.facebook.com/TePSAKEMENSOS/\">hubungi Telepon Pelayanan Sosial Anak (TePSA)</a> di nomor telepon 1500 771, atau nomor handphone / Whatsapp 081238888002 dan kamu bisa ngobrol dengan konselor profesional yang ramah!</p>\r\n\r\n<p>Jika <em>bullying</em> terjadi di media sosial, kamu bisa memblokir akun pelaku dan melaporkan perilaku mereka di media sosial itu sendiri. Media sosial berkewajiban menjaga keamanan penggunanya, loh.</p>\r\n\r\n<p>Mengumpulkan dan menyimpan bukti-bukti bisa membantumu nanti untuk menunjukkan apa yang telah terjadi &ndash; misalnya seperti pesan dalam <em>chatting </em>dan <em>screenshot</em> postingan di media sosial.</p>\r\n\r\n<p>Agar <em>bullying</em> berhenti, kuncinya ialah perlu diidentifikasi dan dilaporkan lebih lanjut. Hal ini juga dapat menunjukkan kepada pelaku <em>bully </em>bahwa tindakan mereka tidak dapat diterima.</p>\r\n\r\n<p>Jika kamu berada dalam keadaan bahaya saat itu juga, maka kamu harus menghubungi polisi atau layanan darurat, seperti berikut:</p>\r\n\r\n<ul>\r\n	<li>Ambulan: 118 atau 119</li>\r\n	<li>Polisi: 110</li>\r\n	<li>Pemadam Kebakaran: 113 atau 1131</li>\r\n	<li>Badan Search and Rescue Nasional (BASARNAS): 115</li>\r\n</ul>\r\n\r\n<p><strong>Facebook/Instagram: </strong>Jika kamu di-<em>bully </em>secara <em>online</em>, kami mendorongmu untuk membicarakannya dengan orang tua, guru, atau seseorang yang kamu percaya &ndash; kamu punya hak untuk merasa aman. Melaporkan tindakan <em>bullying </em>secara langsung sangat dimudahkan di Facebook maupun Instagram.</p>\r\n\r\n<p>Kamu selalu dapat mengirim laporan (secara anonim) mengenai postingan, komentar, atau <em>story </em>yang tidak menyenangkan di Facebook maupun Instagram.</p>\r\n\r\n<p>Facebook maupun Instagram memiliki tim yang selalu melihat laporan-laporan ini selama 24 jam di seluruh dunia dalam lebih dari 50 bahasa, dan postingan apa pun yang bersikap kasar, mengganggu, atau membully akan segera dihapus. Laporan-laporan ini selalu anonim (atau tidak diperlihatkan siapa yang melapor).</p>\r\n\r\n<p>Kami punya <a href=\"https://www.facebook.com/safety/bullying/teens\">panduan</a> di Facebook yang dapat mengarahkanmu untuk melalui proses penanganan <em>bullying</em> &ndash; atau apa yang harus dilakukan jika kamu melihat seseorang dibully. Di Instagram, kita juga punya <a href=\"https://parentalk.id/file/2019/09/Panduan-Instagram-untuk-Orang-Tua.pdf\">Panduan untuk Orang Tua</a> yang memberikan rekomendasi untuk orang tua, wali, dan orang dewasa terpercaya tentang cara menyikapi <em>cyberbullying</em>, dan sebuah <em><a href=\"http://safety.instagram.com/\">central hub</a></em> &nbsp;dimana kamu bisa mempelajari tentang perangkat keamanan Instagram.</p>\r\n\r\n<p><strong>Twitter:</strong> Jika kamu pikir bahwa kamu sedang dibully, hal terpenting adalah memastikan dirimu aman. Sangat penting untuk memiliki seseorang untuk diajak bicara tentang apa yang sedang kamu alami. Bisa saja seorang guru, orang dewasa terpercaya lainnya, atau orang tua. Bicaralah dengan orang tua dan temanmu tentang apa yang harus dilakukan jika kamu (atau seorang teman) sedang mengalami <em>cyberbullying</em>.</p>\r\n\r\n<p>Kami mendorong setiap orang untuk melaporkan akun yang melanggar aturan. Kamu bisa melakukan ini melalui halaman <a href=\"https://help.twitter.com/id\">Pusat Bantuan</a> atau mengklik pilihan &ldquo;Laporkan Tweet&rdquo; pada Tweet seseorang.</p>\r\n', '2021-07-03', 0),
(7, 'There is no one who loves pain itself', 'There-is-no-one-who-loves-pain-itself', '51.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed tortor et tortor ultrices posuere. Integer semper rutrum commodo. Curabitur faucibus massa risus, in placerat nisi aliquet eu. Cras eget pellentesque diam. Cras eu rutrum dui. Donec mollis laoreet tincidunt. Etiam ac fringilla nisi. Etiam libero purus, semper at arcu pharetra, vehicula placerat augue. Duis facilisis semper blandit. Nunc ac posuere turpis. Morbi imperdiet ullamcorper porta. Donec in facilisis lorem. Nullam eu quam at orci eleifend lobortis at sagittis nulla. Cras mollis urna dui, nec fringilla ipsum placerat id. Donec eu arcu nec quam ullamcorper malesuada. Mauris laoreet porta leo, eget eleifend odio ornare eget.</p>\r\n\r\n<p>Praesent pharetra lobortis egestas. Donec et ornare tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam scelerisque at sem nec tempus. Fusce ut faucibus nisi. Mauris in arcu ultricies nulla consequat malesuada. Sed mattis ut odio eget suscipit. Pellentesque quam libero, ultricies quis bibendum quis, pulvinar convallis mauris. Praesent non imperdiet nunc, eget vestibulum odio. Suspendisse nec tellus ut sem aliquet blandit. Sed sed ultricies enim. Vestibulum ornare, erat vitae dictum vulputate, odio augue posuere magna, non pulvinar sem ligula nec nisi. Sed at velit tristique, suscipit nisl a, efficitur augue. Etiam bibendum rutrum felis quis tristique. Aenean nec condimentum urna, nec ornare enim. Praesent maximus libero nec diam laoreet, vel mollis nisi scelerisque.</p>\r\n\r\n<p>Aenean ut velit quis quam lobortis eleifend non ultrices augue. Maecenas posuere faucibus vulputate. Curabitur a enim finibus, consectetur dui id, maximus risus. Mauris bibendum, lectus eu consequat tempor, ex augue vestibulum ligula, et molestie mauris dolor vitae enim. Duis at leo dictum, sodales turpis sed, pulvinar diam. In hac habitasse platea dictumst. Maecenas lacinia mauris nec diam laoreet, et pharetra eros pellentesque. Ut eget porta dui, ut elementum odio. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>\r\n\r\n<p>Aenean lobortis varius neque, a suscipit massa tempus eu. Sed in lobortis dolor. Donec interdum leo eu nisi condimentum commodo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut vel convallis nisi. Cras dapibus, ante ut aliquet condimentum, eros tortor vulputate dui, a maximus leo libero bibendum risus. Fusce consequat ut felis et tincidunt. Maecenas varius, est nec pretium commodo, lorem purus mollis nisi, eu efficitur metus nisl vitae nisl. Aliquam in posuere tellus. Curabitur convallis tristique odio ut ullamcorper. Etiam convallis sapien non arcu scelerisque commodo. Nulla dignissim at turpis vel bibendum.</p>\r\n\r\n<p>Morbi venenatis aliquet neque, rhoncus vehicula diam vestibulum non. Sed sem massa, posuere vitae metus et, condimentum blandit arcu. Nullam dapibus ornare erat. Aliquam diam ex, convallis sed velit vel, aliquam scelerisque justo. Donec interdum eget nunc vel porta. Aenean imperdiet lacus dolor, egestas euismod arcu dapibus eget. Ut condimentum rutrum tempus. Integer augue lacus, molestie varius faucibus quis, lobortis vel tortor. Suspendisse feugiat diam vel tellus porta, eget lacinia nisi pharetra.</p>\r\n\r\n<p>Nunc ornare feugiat aliquet. Vivamus eget laoreet odio. Vivamus ultrices malesuada nisl, a hendrerit dui molestie non. Etiam odio risus, tincidunt eget nunc ac, fermentum tincidunt nibh. Morbi lacinia, lacus ac dapibus venenatis, diam arcu mollis nulla, sit amet viverra nulla lorem sit amet velit. Integer feugiat augue sed leo gravida fringilla. Maecenas a faucibus enim. Suspendisse varius consequat velit, convallis aliquet purus tempor et. Nullam eu nisl neque. Fusce dui nulla, gravida vel odio facilisis, egestas sollicitudin felis. Sed nec erat congue, placerat lacus vel, dictum nibh. Aenean gravida rhoncus mi, nec cursus lorem egestas vitae. Aenean lobortis ullamcorper nibh sed sagittis. Aliquam dui ipsum, tempor eget accumsan et, egestas nec libero.</p>\r\n\r\n<p>Praesent ex quam, efficitur in tellus eu, eleifend interdum eros. Etiam quis tortor condimentum, vehicula enim nec, faucibus leo. Nulla facilisi. Duis fringilla, purus ut laoreet elementum, risus quam tincidunt purus, eget condimentum justo quam at ante. Proin nunc tortor, vulputate vitae nisi nec, dignissim dictum nunc. Suspendisse viverra magna non placerat porta. In convallis lorem quis dolor consequat hendrerit. Mauris vel ipsum auctor, ullamcorper lorem in, lobortis ipsum. Curabitur quis aliquam mauris, a pharetra arcu. Donec ac congue purus, eu cursus turpis. Ut vitae ornare metus. Fusce eget leo nisi. Morbi sed diam sagittis, cursus nisi non, lacinia lorem. Quisque facilisis ipsum elit, vitae volutpat turpis aliquam quis. Duis vel nibh id elit ultricies ultricies vitae eu ante. Integer lobortis, nisl id viverra suscipit, ante tortor vulputate augue, id volutpat ligula est mattis elit.</p>\r\n\r\n<p>Donec malesuada quis lorem eu ullamcorper. Nunc finibus posuere finibus. Donec ac dolor non leo molestie tempor. Aliquam eu ante ac nulla lacinia ornare sed id neque. Nam auctor massa sed pharetra scelerisque. Phasellus molestie lorem leo, id faucibus velit semper sed. Vivamus ut mollis mi. Nullam turpis erat, fringilla cursus faucibus ac, cursus nec odio. Etiam in neque diam. Sed posuere ut est id tempus. Phasellus posuere lorem ac consectetur faucibus. Phasellus nec egestas tellus, et accumsan quam.</p>\r\n', '2021-07-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(10) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `umur` date DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `alamat`, `jenis_kelamin`, `umur`, `no_hp`, `email`) VALUES
(23, 'Dian Resky Dirman', 'Toa Daeng 3', 'Perempuan', '2000-11-20', '085211839491', 'dianresky0197@gmail');

-- --------------------------------------------------------

--
-- Table structure for table `kronologi`
--

CREATE TABLE `kronologi` (
  `id` int(10) NOT NULL,
  `kronologi` text DEFAULT NULL,
  `tindakan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kronologi`
--

INSERT INTO `kronologi` (`id`, `kronologi`, `tindakan`) VALUES
(23, 'Telah terjadi cyberbullying', 'hapus status atau komentar yang berkaitan,');

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
-- Table structure for table `platform_kejadian`
--

CREATE TABLE `platform_kejadian` (
  `id` int(11) NOT NULL,
  `platform` varchar(255) DEFAULT NULL,
  `postingan_ada` varchar(200) DEFAULT NULL,
  `username_user` varchar(200) DEFAULT NULL,
  `username_pelaku` varchar(200) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- Error reading data for table cyfety.platform_kejadian: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `cyfety`.`platform_kejadian`' at line 1

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
  `date_created` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'mubarak', 'dedemubarak54@gmail.com', 'default.jpg', '$2y$10$gpNtuHTSpDW2NWl4wlb1X.nG6XIxL6XA2ROo/K.FOOYOrokDWfWWu', 2, 1, 1624802013),
(2, 'rayn', 'saharuddin.putraalluu@gmail.com', 'default.jpg', '$2y$10$SoVGSy4WAaAjRPfFSZyQdO7jg1vztNIS9QoqXx.yg9kaBk02CHaQq', 2, 1, 1624841922),
(3, 'dian', 'dianresky9701@gmail.com', 'default.jpg', '$2y$10$osSCR8.Y/6JEJDUfUqzl4O35q7ssLlve95PDroQPq7j7o2v7Ey1Ga', 2, 1, 1625300730),
(4, 'admin', 'admin@gmail.com', 'default.jpg', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 1, 0);

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
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kronologi`
--
ALTER TABLE `kronologi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `platform_kejadian`
--
ALTER TABLE `platform_kejadian`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `kronologi`
--
ALTER TABLE `kronologi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `platform_kejadian`
--
ALTER TABLE `platform_kejadian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
