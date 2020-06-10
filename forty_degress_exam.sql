-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 10:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forty_degress_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `company`, `phone`, `email`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Sunny Doyle', 'Fisher PLC', '961-640-0513', 'ptowne@hotmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(2, 'Prof. Nicholas Murazik I', 'Lakin-Armstrong', '818-695-3856 x281', 'uboyer@gmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(3, 'Mrs. Chloe Hudson II', 'Sipes, Koss and Mosciski', '909.219.8742 x39325', 'earlene.schiller@gmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(4, 'Mauricio Labadie', 'Cruickshank-Donnelly', '(725) 413-2304 x197', 'stark.barry@white.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(5, 'Ms. Priscilla Rosenbaum PhD', 'Homenick, Hettinger and Heaney', '568.700.8134 x612', 'madaline48@kling.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(6, 'Betty White III', 'Langosh-Schneider', '(969) 214-0208 x107', 'oconner.althea@medhurst.org', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(7, 'Jewel King', 'Abshire PLC', '239.570.9023 x94103', 'charity98@gmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(8, 'Mr. Monserrate Fahey', 'Gutkowski Ltd', '+1 (590) 925-6122', 'pedro42@hotmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(9, 'Angeline Renner', 'O\'Keefe-Armstrong', '1-235-846-9805 x50831', 'bdibbert@schaden.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(10, 'Sven Padberg', 'Mante-Murray', '694-331-1790', 'pkiehn@yahoo.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(11, 'Miss Kathryne Kirlin III', 'Wisoky Ltd', '+17147990727', 'xwalker@yahoo.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(12, 'Wallace Corkery', 'Murray, Kuphal and Rodriguez', '961.710.8039', 'holly.glover@sawayn.info', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(13, 'Samanta Shanahan', 'Paucek and Sons', '443-773-7197 x2253', 'gleichner.leilani@hotmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(14, 'Mrs. Destinee Bashirian', 'Tremblay Inc', '1-354-673-9807', 'lkreiger@hotmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(15, 'Mr. Jaron Vandervort MD', 'Kulas Ltd', '643-948-0603 x7181', 'mwindler@gmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(16, 'Petra Weimann', 'Hansen PLC', '842.717.7760 x2413', 'rebecca40@lang.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(17, 'Earnestine Schmidt', 'Wiza Ltd', '1-454-321-1215', 'eleazar.bayer@yahoo.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(18, 'Arvilla Kuvalis', 'VonRueden Ltd', '(374) 921-7606', 'aryanna84@ziemann.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(19, 'Payton Kunde', 'Fisher LLC', '(858) 913-5035 x1903', 'elias.hyatt@sawayn.net', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(20, 'Prof. Addie Schuster', 'Abbott and Sons', '729-669-2525 x47315', 'schmitt.delbert@satterfield.biz', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(21, 'Dario Rosenbaum', 'Trantow, Reinger and Bartell', '1-303-493-2737 x1676', 'cmetz@hotmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(22, 'Julie Larkin DVM', 'Beahan-Kohler', '(893) 974-2011 x29848', 'ettie61@yahoo.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(23, 'Justyn Waters', 'Stracke-Hessel', '(413) 450-7646 x532', 'gianni66@mayer.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(24, 'Gerhard Carter', 'Barton PLC', '321.652.2248 x51163', 'emard.carmen@hotmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(25, 'Landen Marks', 'Orn PLC', '1-587-577-7146 x975', 'oswald11@romaguera.info', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(26, 'Ignatius Corwin', 'Lockman-Breitenberg', '(648) 624-1778 x70363', 'tvandervort@schimmel.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(27, 'Darien Parisian', 'Weissnat-Green', '+1 (673) 396-3706', 'beier.cali@yahoo.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(28, 'Mr. Virgil Koelpin PhD', 'Gislason-Armstrong', '+1-702-944-4782', 'ondricka.logan@yahoo.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(29, 'Nathanael Fritsch DVM', 'Langworth-Cruickshank', '1-969-436-5059', 'geovanny.klein@hotmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(30, 'Dr. Hilario Watsica DDS', 'Stokes-Zemlak', '+1.683.630.3301', 'sammy77@gmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(31, 'Marcelle Gleichner', 'Hahn LLC', '+1 (231) 960-2304', 'shill@yahoo.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(32, 'Meghan Johnson', 'Jacobson, Gaylord and Armstrong', '590-635-4372 x6103', 'adelbert69@yahoo.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(33, 'Meta Upton', 'Gleichner-Buckridge', '+1 (798) 472-1023', 'hattie66@green.net', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(34, 'Maye Mills', 'Langosh PLC', '1-672-922-9817 x2362', 'avis40@bruen.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(35, 'Miss Patsy Klein DVM', 'Quitzon LLC', '775.977.4538 x966', 'csmith@hotmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(36, 'Russell Thompson', 'Ebert Inc', '835-360-5590 x2616', 'jonatan.orn@ruecker.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(37, 'Damaris Medhurst II', 'Conroy-Bartell', '763-388-0280', 'doyle74@kuhic.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(38, 'Ashlee Kris', 'Ernser, Lemke and White', '+1.213.715.7473', 'idietrich@hotmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(39, 'Kimberly Kihn Sr.', 'Purdy, Beier and Hackett', '504.847.0188 x380', 'wilmer.ruecker@prohaska.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(40, 'Quincy Mayert', 'Zemlak Ltd', '1-852-538-3397', 'rbecker@turcotte.biz', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(41, 'Emilio Borer', 'Schowalter, Goodwin and Bernier', '337.686.3474 x15610', 'kub.marie@yahoo.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(42, 'Damion Green', 'Stanton-Hoppe', '1-210-921-9345 x8933', 'dahlia20@schuppe.net', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(43, 'Mr. Brycen Bosco Jr.', 'Nicolas-Baumbach', '1-402-228-5270 x175', 'toby83@mertz.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(44, 'Luna Wiza Sr.', 'Wilkinson, Buckridge and Boyer', '297.933.1479 x2341', 'theron47@reichert.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(45, 'Willa Harris', 'Herzog, Ward and Prohaska', '201-333-6815 x29379', 'darius86@streich.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(46, 'Dr. Patience Brown I', 'Leuschke Ltd', '(629) 596-7953 x29428', 'davis.diego@monahan.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(47, 'Korbin Hackett', 'Batz-Kuhn', '(676) 464-2043', 'xlockman@gmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(48, 'Dr. Jonatan Schinner MD', 'Durgan-Stiedemann', '+1 (272) 656-9172', 'bednar.rubye@yahoo.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(49, 'Giovanna Gleichner', 'Huels LLC', '749.788.3850', 'brakus.chaim@gmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(50, 'Elouise Gottlieb Jr.', 'Mohr-Mertz', '+1-986-388-8256', 'tiffany77@gmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(51, 'Una Johns III', 'Keebler-Block', '406-615-4711 x219', 'ricardo.wisoky@donnelly.org', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(52, 'Yvonne Cassin', 'Considine and Sons', '534-931-5285', 'oschuster@hotmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(53, 'Florence O\'Conner', 'Smith-Cole', '492-367-9556 x2150', 'martin.jerde@hotmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(54, 'Kavon Hoppe PhD', 'Jerde-Lakin', '1-627-709-3106 x0134', 'josefa.ferry@gmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(55, 'Dr. Vidal Wyman DVM', 'Homenick-Maggio', '(769) 728-2224 x1213', 'tiara.moen@skiles.biz', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(56, 'Mr. Orin Kub I', 'Glover-Medhurst', '986.643.4897 x28337', 'fcartwright@corwin.net', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(57, 'Jovan Quigley', 'Stiedemann and Sons', '248.593.1312 x179', 'istrosin@gmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(58, 'Raegan Koelpin', 'Koepp, Conn and Sipes', '1-268-827-3997 x144', 'bergnaum.caleigh@gmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(59, 'Erick Kerluke', 'Lowe-Harris', '791-863-7480 x1452', 'dare.sophia@hotmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(60, 'Reyna Waelchi V', 'Ondricka Inc', '1-383-402-5676 x81987', 'jean40@hotmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(61, 'Nya Powlowski DVM', 'Skiles-Bednar', '1-419-774-5176 x706', 'fadel.lane@ledner.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(62, 'Tina Huel', 'Kuhic, Kulas and Beer', '364.524.7356 x7119', 'nkemmer@bernier.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(63, 'Dr. Jimmie Kirlin Sr.', 'Dicki-Carter', '983.529.0003', 'mayert.constantin@zboncak.net', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(64, 'Karina Hickle', 'Kshlerin Group', '364-708-5711 x82928', 'marietta.raynor@hotmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(65, 'Nat Schroeder', 'Jenkins, Lemke and Shields', '567.227.2117 x79159', 'stracke.reina@gmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(66, 'Anya Gutmann', 'Rowe and Sons', '(925) 559-1897', 'lubowitz.jewell@gmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(67, 'Sister Welch', 'Volkman-Runte', '1-565-210-0815 x9500', 'berniece.klocko@hammes.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(68, 'Dr. Roy Durgan', 'Powlowski LLC', '360.536.1200', 'emanuel.erdman@koelpin.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(69, 'Dr. Scottie Green', 'Gleichner, Lemke and Littel', '(370) 217-6044', 'ycollins@frami.info', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(70, 'Jovani Hill', 'Bradtke-Hickle', '1-691-457-9065 x132', 'rshanahan@hotmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(71, 'Dr. Josh Kertzmann', 'Turner, Bednar and Rempel', '1-973-781-6147', 'caroline19@flatley.biz', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(72, 'Noemie Kertzmann', 'Weissnat-Welch', '1-607-424-8264', 'rowe.loren@yahoo.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(73, 'Clemens Reynolds', 'Morar-Walter', '286-788-0387', 'karli.bauch@gmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(74, 'Efren Crooks', 'Roberts LLC', '438-794-7409', 'bernardo58@gmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(75, 'Mrs. Reina Heaney', 'Willms-Glover', '980-896-5517', 'nvandervort@stoltenberg.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(76, 'Maxie Kub', 'Grady, Heathcote and Wilderman', '(839) 281-4622', 'dayton40@hotmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(77, 'Dr. Javonte Lindgren MD', 'Schiller, Boyle and Gislason', '446-598-6534 x51958', 'cwhite@hotmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(78, 'Vivian Goodwin', 'Kunze-Will', '1-507-788-2463 x578', 'geovanny65@wolff.net', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(79, 'Kristy Carroll MD', 'Gerlach, Collier and Wilderman', '+1 (452) 501-1181', 'jdibbert@hotmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(80, 'Micaela Sauer', 'Harber-Welch', '442-771-5455 x1245', 'kailey.rosenbaum@heidenreich.net', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(81, 'Reed Gerlach', 'Hintz Ltd', '274.941.6167 x47503', 'mheathcote@yahoo.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(82, 'Lizzie Carter', 'Kub, Larkin and Luettgen', '+1.402.652.1560', 'lemke.morris@parker.org', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(83, 'Mr. Nelson Johns II', 'Konopelski, Brakus and Schulist', '606.467.8449 x80140', 'kbergnaum@mitchell.info', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(84, 'Dr. Valentine Blick', 'Olson Ltd', '(974) 944-9568 x81812', 'rutherford.luella@hotmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(85, 'Dr. Hilton Rath', 'Feest and Sons', '1-559-576-9892', 'alexander12@roberts.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(86, 'Ms. Lilly Balistreri I', 'Konopelski Ltd', '960-490-5152 x3033', 'kautzer.rozella@gmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(87, 'Simone Wisoky', 'Armstrong Inc', '1-431-407-2714 x38428', 'loy04@gmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(88, 'Clovis Tremblay', 'Wiza, Welch and Weissnat', '+1-437-424-5006', 'barton.vidal@yahoo.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(89, 'Mr. Keagan Collins Jr.', 'Romaguera, Bogan and Moen', '+16937881750', 'ziemann.matt@fritsch.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(90, 'Vance Kuhic', 'Ritchie, Crooks and Mraz', '+1-608-713-7493', 'rstanton@waelchi.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(91, 'Mr. Marcus Kihn Jr.', 'Yost-Wehner', '1-649-608-8825', 'abelardo18@okuneva.info', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(92, 'Dr. Garrett Hackett DDS', 'Anderson and Sons', '694-681-9592', 'jeanie.wiegand@gmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(93, 'Marcelina Kunze', 'Dickinson, Streich and Predovic', '+1.603.261.7831', 'kgraham@rogahn.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(94, 'Miss Maurine Zemlak', 'Abernathy Group', '334.789.7786 x252', 'leonardo.cremin@legros.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(95, 'Hollis Pagac Sr.', 'Raynor, Morissette and Grady', '(213) 260-6993 x37379', 'smith.randy@wilderman.info', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(96, 'Larry Paucek', 'Kassulke-Kris', '338-264-7824 x000', 'gterry@yahoo.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(97, 'Davonte Skiles', 'Champlin-Corkery', '(278) 556-6756 x322', 'moriah82@gmail.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(98, 'Kurt Pfannerstill', 'Murphy-Dickens', '+14175147290', 'tanderson@yahoo.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(99, 'Francisca Yundt', 'Deckow-Funk', '1-887-948-5409 x6401', 'elijah.koch@dach.org', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(100, 'Dr. Tre Streich', 'Stamm, Parisian and Becker', '1-536-659-4331 x841', 'mckayla.torp@heathcote.com', 1, '2020-06-10 00:12:24', '2020-06-10 00:12:24'),
(101, 'Ms. Mylene Gerhold', 'Upton, Turcotte and Buckridge', '395.348.5016 x8112', 'qwrwqrwq', 1, '2020-06-10 00:12:40', '2020-06-10 00:12:40'),
(102, 'sample', 'company', '98765432', 'rudy.cana@upteamco.com', 1, '2020-06-10 00:13:37', '2020-06-10 00:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(20, '2014_10_12_000000_create_users_table', 1),
(21, '2014_10_12_100000_create_password_resets_table', 1),
(22, '2019_08_19_000000_create_failed_jobs_table', 1),
(23, '2020_06_10_054832_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rudy Cana', 'c.rowdee@yahoo.com', NULL, '$2y$10$daErSMuSf.G6l73bVeMaE.GcEZ0CDAuH1xOaeJODIkuNB9/w0nx8e', NULL, '2020-06-10 00:07:48', '2020-06-10 00:07:48'),
(2, 'sample', 'sample@gmail.com', NULL, '$2y$10$no2AWW98wOZz6mg0KXANkehzxPv4IjbgO.ERj5379KCSHCc45riKW', NULL, '2020-06-10 00:29:37', '2020-06-10 00:29:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
