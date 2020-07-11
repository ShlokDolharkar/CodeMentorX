-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 05:38 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codementor`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `blog_title` text,
  `blog_text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `teacher_id`, `blog_title`, `blog_text`) VALUES
(16, NULL, '1234', '<p>12344</p>'),
(17, NULL, 'ww', '<p>wwe</p>'),
(18, NULL, '1111', '<p>2222</p>'),
(19, NULL, '111111', '<p>111</p>'),
(20, NULL, 'qqq', '<p>qqqqqqqqq</p>'),
(21, NULL, 'qqqq', '<p>dddd</p>'),
(22, NULL, 'a', '<p>aaa</p>'),
(23, NULL, 'a', '<p>aaa</p>'),
(26, NULL, 'qqqq', '<p>ss</p>'),
(27, NULL, 'ddd', '<p>dd</p>'),
(29, NULL, 'Stevie', '<p>From Wikipedia, the free encyclopedia</p>\r\n\r\n<p><a href=\"https://en.wikipedia.org/wiki/Steve_Jobs#mw-head\">Jump to navigation</a><a href=\"https://en.wikipedia.org/wiki/Steve_Jobs#searchInput\">Jump to search</a></p>\r\n\r\n<p>This article is about the person. For other uses, see&nbsp;<a href=\"https://en.wikipedia.org/wiki/Steve_Jobs_(disambiguation)\">Steve Jobs (disambiguation)</a>.</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th colspan=\"2\">\r\n			<p>Steve Jobs</p>\r\n			</th>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\"><a href=\"https://en.wikipedia.org/wiki/File:Steve_Jobs_Headshot_2010-CROP_(cropped_2).jpg\"><img alt=\"Steve Jobs Headshot 2010-CROP (cropped 2).jpg\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Steve_Jobs_Headshot_2010-CROP_%28cropped_2%29.jpg/220px-Steve_Jobs_Headshot_2010-CROP_%28cropped_2%29.jpg\" style=\"height:213px; width:220px\" /></a>\r\n			<p>Jobs in 2010</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Born</th>\r\n			<td>\r\n			<p>Steven Paul Jobs</p>\r\n			<br />\r\n			February 24, 1955\r\n			<p><a href=\"https://en.wikipedia.org/wiki/San_Francisco\">San Francisco</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/California\">California</a>, U.S.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Died</th>\r\n			<td>October 5, 2011&nbsp;(aged&nbsp;56)\r\n			<p><a href=\"https://en.wikipedia.org/wiki/Palo_Alto,_California\">Palo Alto, California</a>, U.S.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Cause&nbsp;of death</th>\r\n			<td><a href=\"https://en.wikipedia.org/wiki/Neuroendocrine_cancer\">Neuroendocrine cancer</a></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Resting place</th>\r\n			<td><a href=\"https://en.wikipedia.org/wiki/Alta_Mesa_Memorial_Park\">Alta Mesa Memorial Park</a></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Occupation</th>\r\n			<td>\r\n			<ul>\r\n				<li>Entrepreneur</li>\r\n				<li>Industrial designer</li>\r\n				<li>Investor</li>\r\n				<li>Media proprietor</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Known&nbsp;for</th>\r\n			<td>\r\n			<ul>\r\n				<li>Pioneer of the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Microcomputer_revolution\">personal computer revolution</a>&nbsp;with&nbsp;<a href=\"https://en.wikipedia.org/wiki/Steve_Wozniak\">Steve Wozniak</a></li>\r\n				<li>Co-creator of the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Macintosh\">Macintosh</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/IPod\">iPod</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/IPhone\">iPhone</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/IPad\">iPad</a>, and first&nbsp;<a href=\"https://en.wikipedia.org/wiki/Apple_Stores\">Apple Stores</a></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Net&nbsp;worth</th>\r\n			<td><a href=\"https://en.wikipedia.org/wiki/United_States_dollar\">US$</a>7 billion&nbsp;(September 2011)<a href=\"https://en.wikipedia.org/wiki/Steve_Jobs#cite_note-forbes_networth-1\">[1]</a></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Title</th>\r\n			<td>\r\n			<ul>\r\n				<li>Co-founder, Chairman, and CEO of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Apple_Inc.\">Apple Inc.</a></li>\r\n				<li>Primary investor and Chairman of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Pixar\">Pixar</a></li>\r\n				<li>Founder, Chairman, and CEO of&nbsp;<a href=\"https://en.wikipedia.org/wiki/NeXT\">NeXT</a></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Board member&nbsp;of</th>\r\n			<td>\r\n			<ul>\r\n				<li><a href=\"https://en.wikipedia.org/wiki/The_Walt_Disney_Company\">The Walt Disney Company</a><a href=\"https://en.wikipedia.org/wiki/Steve_Jobs#cite_note-2\">[2]</a></li>\r\n				<li><a href=\"https://en.wikipedia.org/wiki/Apple_Inc.\">Apple Inc.</a></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Spouse(s)</th>\r\n			<td>\r\n			<p><a href=\"https://en.wikipedia.org/wiki/Laurene_Powell_Jobs\">Laurene Powell</a>&nbsp;(m.&nbsp;1991)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Partner(s)</th>\r\n			<td><a href=\"https://en.wikipedia.org/wiki/Chrisann_Brennan\">Chrisann Brennan</a>&nbsp;(1972&ndash;1977)</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Children</th>\r\n			<td>4, including&nbsp;<a href=\"https://en.wikipedia.org/wiki/Lisa_Brennan-Jobs\">Lisa Brennan-Jobs</a></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Relatives</th>\r\n			<td><a href=\"https://en.wikipedia.org/wiki/Mona_Simpson\">Mona Simpson</a>&nbsp;(sister)</td>\r\n		</tr>\r\n		<tr>\r\n			<th colspan=\"2\">Signature</th>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\"><a href=\"https://en.wikipedia.org/wiki/File:Steve_Jobs_signature.svg\"><img alt=\"Steve Jobs signature.svg\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Steve_Jobs_signature.svg/150px-Steve_Jobs_signature.svg.png\" style=\"height:42px; width:150px\" /></a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>Steven Paul Jobs</strong>&nbsp;(<a href=\"https://en.wikipedia.org/wiki/Help:IPA/English\">/dÊ’É’bz/</a>; February 24, 1955 &ndash; October 5, 2011) was an American&nbsp;<a href=\"https://en.wikipedia.org/wiki/Business_magnate\">business magnate</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Industrial_design\">industrial designer</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Investor\">investor</a>, and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Media_proprietor\">media proprietor</a>. He was the chairman, chief executive officer (CEO), and co-founder of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Apple_Inc.\">Apple Inc.</a>, the chairman and majority shareholder of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Pixar\">Pixar</a>, a member of&nbsp;<a href=\"https://en.wikipedia.org/wiki/The_Walt_Disney_Company\">The Walt Disney Company</a>&#39;s board of directors following its acquisition of Pixar, and the founder, chairman, and CEO of&nbsp;<a href=\"https://en.wikipedia.org/wiki/NeXT\">NeXT</a>. Jobs is widely recognized as a pioneer of the&nbsp;<a href=\"https://en.wikipedia.org/wiki/History_of_personal_computers\">personal computer revolution</a>&nbsp;of the 1970s and 1980s, along with Apple co-founder&nbsp;<a href=\"https://en.wikipedia.org/wiki/Steve_Wozniak\">Steve Wozniak</a>.</p>\r\n\r\n<p>Jobs was born in&nbsp;<a href=\"https://en.wikipedia.org/wiki/San_Francisco\">San Francisco</a>, California, and put up for adoption. He was raised in the&nbsp;<a href=\"https://en.wikipedia.org/wiki/San_Francisco_Bay_Area\">San Francisco Bay Area</a>. He attended&nbsp;<a href=\"https://en.wikipedia.org/wiki/Reed_College\">Reed College</a>&nbsp;in 1972 before dropping out that same year, and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Hippie_trail\">traveled through India</a>&nbsp;in 1974 seeking enlightenment and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Buddhism_in_the_West#Emerging_mainstream_western_Buddhism\">studying Zen Buddhism</a>. His declassified FBI report states that he used&nbsp;<a href=\"https://en.wikipedia.org/wiki/Cannabis_(drug)\">marijuana</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Lysergic_acid_diethylamide\">LSD</a>&nbsp;while he was in college, and once told a reporter that taking LSD was &quot;one of the two or three most important things&quot; he had done in his life.</p>\r\n\r\n<p>Jobs and Wozniak co-founded Apple in 1976 to sell Wozniak&#39;s&nbsp;<a href=\"https://en.wikipedia.org/wiki/Apple_I\">Apple I</a>&nbsp;personal computer. Together the duo gained fame and wealth a year later with the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Apple_II\">Apple II</a>, one of the first highly successful mass-produced&nbsp;<a href=\"https://en.wikipedia.org/wiki/Microcomputers\">microcomputers</a>. Jobs saw the commercial potential of the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Xerox_Alto\">Xerox Alto</a>&nbsp;in 1979, which was&nbsp;<a href=\"https://en.wikipedia.org/wiki/Computer_mouse\">mouse</a>-driven and had a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Graphical_user_interface\">graphical user interface</a>&nbsp;(GUI). This led to the development of the unsuccessful&nbsp;<a href=\"https://en.wikipedia.org/wiki/Apple_Lisa\">Apple Lisa</a>&nbsp;in 1983, followed by the breakthrough&nbsp;<a href=\"https://en.wikipedia.org/wiki/Macintosh_128K\">Macintosh</a>&nbsp;in 1984, the first mass-produced computer with a GUI. The Macintosh introduced the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Desktop_publishing\">desktop publishing</a>&nbsp;industry in 1985 with the addition of the Apple&nbsp;<a href=\"https://en.wikipedia.org/wiki/LaserWriter\">LaserWriter</a>, the first&nbsp;<a href=\"https://en.wikipedia.org/wiki/Laser_printing\">laser printer</a>&nbsp;to feature&nbsp;<a href=\"https://en.wikipedia.org/wiki/Vector_graphics\">vector graphics</a>. Jobs was forced out of Apple in 1985 after a long power struggle with the company&#39;s board and its then-CEO&nbsp;<a href=\"https://en.wikipedia.org/wiki/John_Sculley\">John Sculley</a>. That same year, Jobs took a few of Apple&#39;s members with him to found&nbsp;<a href=\"https://en.wikipedia.org/wiki/NeXT\">NeXT</a>, a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Computer_platform\">computer platform</a>&nbsp;development company that specialized in computers for higher-education and business markets. In addition, he helped to develop the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Visual_effects\">visual effects</a>&nbsp;industry when he funded the computer graphics division of&nbsp;<a href=\"https://en.wikipedia.org/wiki/George_Lucas\">George Lucas</a>&#39;s&nbsp;<a href=\"https://en.wikipedia.org/wiki/Lucasfilm\">Lucasfilm</a>&nbsp;in 1986. The new company was&nbsp;<a href=\"https://en.wikipedia.org/wiki/Pixar\">Pixar</a>, which produced the first 3D computer animated feature film&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/Toy_Story\">Toy Story</a></em>&nbsp;(1995).</p>\r\n\r\n<p>Apple acquired NeXT in 1997, and Jobs became CEO of his former company within a few months. He was largely responsible for helping revive Apple, which had been at the verge of bankruptcy. He worked closely with designer&nbsp;<a href=\"https://en.wikipedia.org/wiki/Jony_Ive\">Jony Ive</a>&nbsp;to develop a line of products that had larger cultural ramifications, beginning in 1997 with the &quot;<a href=\"https://en.wikipedia.org/wiki/Think_different\">Think different</a>&quot; advertising campaign and leading to the&nbsp;<a href=\"https://en.wikipedia.org/wiki/IMac\">iMac</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/ITunes\">iTunes</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/ITunes_Store\">iTunes Store</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Apple_Store\">Apple Store</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/IPod\">iPod</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/IPhone\">iPhone</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/App_Store_(iOS)\">App Store</a>, and the&nbsp;<a href=\"https://en.wikipedia.org/wiki/IPad\">iPad</a>. In 2001, the original&nbsp;<a href=\"https://en.wikipedia.org/wiki/Classic_Mac_OS\">Mac OS</a>&nbsp;was replaced with a completely new&nbsp;<a href=\"https://en.wikipedia.org/wiki/MacOS\">Mac OS X</a>, based on NeXT&#39;s&nbsp;<a href=\"https://en.wikipedia.org/wiki/NeXTSTEP\">NeXTSTEP</a>&nbsp;platform, giving the OS a modern&nbsp;<a href=\"https://en.wikipedia.org/wiki/Unix\">Unix</a>-based foundation for the first time. Jobs was diagnosed with a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Pancreatic_neuroendocrine_tumor\">pancreatic neuroendocrine tumor</a>&nbsp;in 2003. He died of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Respiratory_arrest\">respiratory arrest</a>&nbsp;related to the tumor at age 56 on October 5, 2011.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `student_user`
--

CREATE TABLE `student_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_profile_photo` varchar(255) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `forgotten_answer` varchar(100) NOT NULL,
  `user_status` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_user`
--

INSERT INTO `student_user` (`user_id`, `user_name`, `user_email`, `user_profile_photo`, `user_pass`, `forgotten_answer`, `user_status`) VALUES
(3, 'KK', 'KK@gmail.com', 'images/profilePhoto.jpg', 'KK1234567', '', 'ONLINE');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_user`
--

CREATE TABLE `teacher_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_profile_photo` varchar(255) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `forgotten_answer` varchar(100) NOT NULL,
  `user_status` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_user`
--

INSERT INTO `teacher_user` (`user_id`, `user_name`, `user_email`, `user_profile_photo`, `user_pass`, `forgotten_answer`, `user_status`) VALUES
(1, 'Shlok', 'Shlok@gmail.com', 'images/profilePhoto.jpg', 'Shlok12345', '', 'ONLINE'),
(2, 'Pranav', 'Pranav@gmail.com', 'images/profilePhoto.jpg', 'Pranav1234', '', 'ONLINE'),
(3, 'Zzz', 'zzz@gmail.com', 'images/profilePhoto.jpg', 'Zzz12345', '', 'ONLINE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_user`
--
ALTER TABLE `student_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `teacher_user`
--
ALTER TABLE `teacher_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `student_user`
--
ALTER TABLE `student_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `teacher_user`
--
ALTER TABLE `teacher_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
