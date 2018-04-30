-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2017 at 07:53 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `india`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `sub_category` varchar(200) NOT NULL,
  `brand` varchar(200) NOT NULL,
  `category_size` varchar(200) NOT NULL,
  `category_color` varchar(200) NOT NULL,
  `category_description` varchar(255) NOT NULL,
  `store_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `sub_category`, `brand`, `category_size`, `category_color`, `category_description`, `store_id`) VALUES
(3, 'Man', 'Pant', 'Loffer', 'SM', 'Red', 'qwerty1234567890', 1),
(4, 'Man', 'Pant', 'Loffer', '2-8', 'Green', '', 1),
(5, 'Kid', 'Paint', 'Parlay', 'EXL', 'White', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `sid`, `city`) VALUES
(1, 1, 'Anantapur'),
(2, 1, 'Chittoor'),
(3, 1, 'East Godavari'),
(4, 1, 'Guntur'),
(5, 1, 'Kadapa'),
(6, 1, 'Krishna'),
(7, 1, 'Kurnool'),
(8, 1, 'Nellore'),
(9, 1, 'Prakasam'),
(10, 1, 'Srikakulam'),
(11, 1, 'Visakhapatnam'),
(12, 1, 'Vizianagaram'),
(13, 1, 'West Godavari'),
(14, 2, 'Anjaw'),
(15, 2, 'Central Siang'),
(16, 2, 'Changlang'),
(17, 2, 'Dibang Valley'),
(18, 2, 'East Kameng'),
(19, 2, 'East Siang'),
(20, 2, 'Kra Daadi'),
(21, 2, 'Kurung Kumey'),
(22, 2, 'Lohit'),
(23, 2, 'Longding'),
(24, 2, 'Lower Dibang Valley'),
(25, 2, 'Lower Subansiri'),
(26, 2, 'Namsai'),
(27, 2, 'Papum Pare'),
(28, 2, 'Tawang'),
(29, 2, 'Tirap'),
(30, 2, 'Upper Siang'),
(31, 2, 'Upper Subansiri'),
(32, 2, 'West Kameng'),
(33, 2, 'West Siang'),
(34, 3, 'Baksa'),
(35, 3, 'Barpeta'),
(36, 3, 'Biswanath'),
(37, 3, 'Bongaigaon'),
(38, 3, 'Cachar'),
(39, 3, 'Charaideo'),
(40, 3, 'Chirang'),
(41, 3, 'Darrang'),
(42, 3, 'Dhemaji'),
(43, 3, 'Dhubri'),
(44, 3, 'Dibrugarh'),
(45, 3, 'Dima Hasao'),
(46, 3, 'Goalpara'),
(47, 3, 'Golaghat'),
(48, 3, 'Hailakandi'),
(49, 3, 'Hojai'),
(50, 3, 'Jorhat'),
(51, 3, 'Kamrup'),
(52, 3, 'Kamrup Metropolitan'),
(53, 3, 'Karbi Anglong'),
(54, 3, 'Karimganj'),
(55, 3, 'Kokrajhar'),
(56, 3, 'Lakhimpur'),
(57, 3, 'Majuli'),
(58, 3, 'Morigaon'),
(59, 3, 'Nagaon'),
(60, 3, 'Nalbari'),
(61, 3, 'Sivasagar'),
(62, 3, 'Sonitpur'),
(63, 3, 'South Salmara-Mankachar'),
(64, 3, 'Tinsukia'),
(65, 3, 'Udalguri'),
(66, 3, 'West Karbi Anglong'),
(67, 4, 'Araria'),
(68, 4, 'Arwal'),
(69, 4, 'Aurangabad'),
(70, 4, 'Banka'),
(71, 4, 'Begusarai'),
(72, 4, 'Bhagalpur'),
(73, 4, 'Bhojpur'),
(74, 4, 'Buxar'),
(75, 4, 'Darbhanga'),
(76, 4, 'East Champaran'),
(77, 4, 'Gaya'),
(78, 4, 'Gopalganj'),
(79, 4, 'Jamui'),
(80, 4, 'Jehanabad'),
(81, 4, 'Kaimur'),
(82, 4, 'Katihar'),
(83, 4, 'Khagaria'),
(84, 4, 'Kishanganj'),
(85, 4, 'Lakhisarai'),
(86, 4, 'Madhepura'),
(87, 4, 'Madhubani'),
(88, 4, 'Munger'),
(89, 4, 'Muzaffarpur'),
(90, 4, 'Nalanda'),
(91, 4, 'Nawada'),
(92, 4, 'Patna'),
(93, 4, 'Purnia'),
(94, 4, 'Rohtas'),
(95, 4, 'Saharsa'),
(96, 4, 'Samastipur'),
(97, 4, 'Saran'),
(98, 4, 'Sheikhpura'),
(99, 4, 'Sheohar'),
(100, 4, 'Sitamarhi'),
(101, 4, 'Siwan'),
(102, 4, 'Supaul'),
(103, 4, 'Vaishali'),
(104, 4, 'West Champaran'),
(105, 5, 'Chandigarh'),
(106, 5, 'Balod'),
(107, 5, 'Baloda Bazar'),
(108, 5, 'Balrampur'),
(109, 5, 'Bastar'),
(110, 5, 'Bemetara'),
(111, 5, 'Bijapur'),
(112, 5, 'Bilaspur'),
(113, 5, 'Dantewada'),
(114, 5, 'Dhamtari'),
(115, 5, 'Durg'),
(116, 5, 'Gariaband'),
(117, 5, 'Janjgir Champa'),
(118, 5, 'Jashpur'),
(119, 5, 'Kabirdham'),
(120, 5, 'Kanker'),
(121, 5, 'Kondagaon'),
(122, 5, 'Korba'),
(123, 5, 'Koriya'),
(124, 5, 'Mahasamund'),
(125, 5, 'Mungeli'),
(126, 5, 'Narayanpur'),
(127, 5, 'Raigarh'),
(128, 5, 'Raipur'),
(129, 5, 'Rajnandgaon'),
(130, 5, 'Sukma'),
(131, 5, 'Surajpur'),
(132, 5, 'Surguja'),
(133, 30, 'Delhi'),
(134, 6, 'North Goa'),
(135, 6, 'South Goa'),
(136, 7, 'Ahmedabad'),
(137, 7, 'Amreli'),
(138, 7, 'Anand'),
(139, 7, 'Aravalli'),
(140, 7, 'Banaskantha'),
(141, 7, 'Bharuch'),
(142, 7, 'Bhavnagar'),
(143, 7, 'Botad'),
(144, 7, 'Chhota Udaipur'),
(145, 7, 'Dahod'),
(146, 7, 'Dang'),
(147, 7, 'Devbhoomi Dwarka'),
(148, 7, 'Gandhinagar'),
(149, 7, 'Gir Somnath'),
(150, 7, 'Jamnagar'),
(151, 7, 'Junagadh'),
(152, 7, 'Kheda'),
(153, 7, 'Kutch'),
(154, 7, 'Mahisagar'),
(155, 7, 'Mehsana'),
(156, 7, 'Morbi'),
(157, 7, 'Narmada'),
(158, 7, 'Navsari'),
(159, 7, 'Panchmahal'),
(160, 7, 'Patan'),
(161, 7, 'Porbandar'),
(162, 7, 'Rajkot'),
(163, 7, 'Sabarkantha'),
(164, 7, 'Surat'),
(165, 7, 'Surendranagar'),
(166, 7, 'Tapi'),
(167, 7, 'Vadodara'),
(168, 7, 'Valsad'),
(169, 8, 'Ambala'),
(170, 8, 'Bhiwani'),
(171, 8, 'Charkhi Dadri'),
(172, 8, 'Faridabad'),
(173, 8, 'Fatehabad'),
(174, 8, 'Gurugram'),
(175, 8, 'Hisar'),
(176, 8, 'Jhajjar'),
(177, 8, 'Jind'),
(178, 8, 'Kaithal'),
(179, 8, 'Karnal'),
(180, 8, 'Kurukshetra'),
(181, 8, 'Mahendragarh'),
(182, 8, 'Mewat'),
(183, 8, 'Palwal'),
(184, 8, 'Panchkula'),
(185, 8, 'Panipat'),
(186, 8, 'Rewari'),
(187, 8, 'Rohtak'),
(188, 8, 'Sirsa'),
(189, 8, 'Sonipat'),
(190, 8, 'Yamunanagar'),
(191, 9, 'Bilaspur'),
(192, 9, 'Chamba'),
(193, 9, 'Hamirpur'),
(194, 9, 'Kangra'),
(195, 9, 'Kinnaur'),
(196, 9, 'Kullu'),
(197, 9, 'Lahaul Spiti'),
(198, 9, 'Mandi'),
(199, 9, 'Shimla'),
(200, 9, 'Sirmaur'),
(201, 9, 'Solan'),
(202, 9, 'Una'),
(203, 10, 'Anantnag'),
(204, 10, 'Bandipora'),
(205, 10, 'Baramulla'),
(206, 10, 'Budgam'),
(207, 10, 'Doda'),
(208, 10, 'Ganderbal'),
(209, 10, 'Jammu'),
(210, 10, 'Kargil'),
(211, 10, 'Kathua'),
(212, 10, 'Kishtwar'),
(213, 10, 'Kulgam'),
(214, 10, 'Kupwara'),
(215, 10, 'Leh'),
(216, 10, 'Poonch'),
(217, 10, 'Pulwama'),
(218, 10, 'Rajouri'),
(219, 10, 'Ramban'),
(220, 10, 'Reasi'),
(221, 10, 'Samba'),
(222, 10, 'Shopian'),
(223, 10, 'Srinagar'),
(224, 10, 'Udhampur'),
(225, 11, 'Bokaro'),
(226, 11, 'Chatra'),
(227, 11, 'Deoghar'),
(228, 11, 'Dhanbad'),
(229, 11, 'Dumka'),
(230, 11, 'East Singhbhum'),
(231, 11, 'Garhwa'),
(232, 11, 'Giridih'),
(233, 11, 'Godda'),
(234, 11, 'Gumla'),
(235, 11, 'Hazaribagh'),
(236, 11, 'Jamtara'),
(237, 11, 'Khunti'),
(238, 11, 'Koderma'),
(239, 11, 'Latehar'),
(240, 11, 'Lohardaga'),
(241, 11, 'Pakur'),
(242, 11, 'Palamu'),
(243, 11, 'Ramgarh'),
(244, 11, 'Ranchi'),
(245, 11, 'Sahebganj'),
(246, 11, 'Seraikela Kharsawan'),
(247, 11, 'Simdega'),
(248, 11, 'West Singhbhum'),
(249, 12, 'Bagalkot'),
(250, 12, 'Bangalore Rural'),
(251, 12, 'Bangalore Urban'),
(252, 12, 'Belgaum'),
(253, 12, 'Bellary'),
(254, 12, 'Bidar'),
(255, 12, 'Bijapur'),
(256, 12, 'Chamarajanagar'),
(257, 12, 'Chikkaballapur'),
(258, 12, 'Chikkamagaluru'),
(259, 12, 'Chitradurga'),
(260, 12, 'Dakshina Kannada'),
(261, 12, 'Davanagere'),
(262, 12, 'Dharwad'),
(263, 12, 'Gadag'),
(264, 12, 'Gulbarga'),
(265, 12, 'Hassan'),
(266, 12, 'Haveri'),
(267, 12, 'Kodagu'),
(268, 12, 'Kolar'),
(269, 12, 'Koppal'),
(270, 12, 'Mandya'),
(271, 12, 'Mysore'),
(272, 12, 'Raichur'),
(273, 12, 'Ramanagara'),
(274, 12, 'Shimoga'),
(275, 12, 'Tumkur'),
(276, 12, 'Udupi'),
(277, 12, 'Uttara Kannada'),
(278, 12, 'Yadgir'),
(279, 13, 'Alappuzha'),
(280, 13, 'Ernakulam'),
(281, 13, 'Idukki'),
(282, 13, 'Kannur'),
(283, 13, 'Kasaragod'),
(284, 13, 'Kollam'),
(285, 13, 'Kottayam'),
(286, 13, 'Kozhikode'),
(287, 13, 'Malappuram'),
(288, 13, 'Palakkad'),
(289, 13, 'Pathanamthitta'),
(290, 13, 'Thiruvananthapuram'),
(291, 13, 'Thrissur'),
(292, 13, 'Wayanad'),
(293, 14, 'Agar Malwa'),
(294, 14, 'Alirajpur'),
(295, 14, 'Anuppur'),
(296, 14, 'Ashoknagar'),
(297, 14, 'Balaghat'),
(298, 14, 'Barwani'),
(299, 14, 'Betul'),
(300, 14, 'Bhind'),
(301, 14, 'Bhopal'),
(302, 14, 'Burhanpur'),
(303, 14, 'Chhatarpur'),
(304, 14, 'Chhindwara'),
(305, 14, 'Damoh'),
(306, 14, 'Datia'),
(307, 14, 'Dewas'),
(308, 14, 'Dhar'),
(309, 14, 'Dindori'),
(310, 14, 'Guna'),
(311, 14, 'Gwalior'),
(312, 14, 'Harda'),
(313, 14, 'Hoshangabad'),
(314, 14, 'Indore'),
(315, 14, 'Jabalpur'),
(316, 14, 'Jhabua'),
(317, 14, 'Katni'),
(318, 14, 'Khandwa'),
(319, 14, 'Khargone'),
(320, 14, 'Mandla'),
(321, 14, 'Mandsaur'),
(322, 14, 'Morena'),
(323, 14, 'Narsinghpur'),
(324, 14, 'Neemuch'),
(325, 14, 'Panna'),
(326, 14, 'Raisen'),
(327, 14, 'Rajgarh'),
(328, 14, 'Ratlam'),
(329, 14, 'Rewa'),
(330, 14, 'Sagar'),
(331, 14, 'Satna'),
(332, 14, 'Sehore'),
(333, 14, 'Seoni'),
(334, 14, 'Shahdol'),
(335, 14, 'Shajapur'),
(336, 14, 'Sheopur'),
(337, 14, 'Shivpuri'),
(338, 14, 'Sidhi'),
(339, 14, 'Singrauli'),
(340, 14, 'Tikamgarh'),
(341, 14, 'Ujjain'),
(342, 14, 'Umaria'),
(343, 14, 'Vidisha'),
(344, 15, 'Ahmednagar'),
(345, 15, 'Akola'),
(346, 15, 'Amravati'),
(347, 15, 'Aurangabad'),
(348, 15, 'Beed'),
(349, 15, 'Bhandara'),
(350, 15, 'Buldhana'),
(351, 15, 'Chandrapur'),
(352, 15, 'Dhule'),
(353, 15, 'Gadchiroli'),
(354, 15, 'Gondia'),
(355, 15, 'Hingoli'),
(356, 15, 'Jalgaon'),
(357, 15, 'Jalna'),
(358, 15, 'Kolhapur'),
(359, 15, 'Latur'),
(360, 15, 'Mumbai City'),
(361, 15, 'Mumbai Suburban'),
(362, 15, 'Nagpur'),
(363, 15, 'Nanded'),
(364, 15, 'Nandurbar'),
(365, 15, 'Nashik'),
(366, 15, 'Osmanabad'),
(367, 15, 'Palghar'),
(368, 15, 'Parbhani'),
(369, 15, 'Pune'),
(370, 15, 'Raigad'),
(371, 15, 'Ratnagiri'),
(372, 15, 'Sangli'),
(373, 15, 'Satara'),
(374, 15, 'Sindhudurg'),
(375, 15, 'Solapur'),
(376, 15, 'Thane'),
(377, 15, 'Wardha'),
(378, 15, 'Washim'),
(379, 15, 'Yavatmal'),
(380, 16, 'Bishnupur'),
(381, 16, 'Chandel'),
(382, 16, 'Churachandpur'),
(383, 16, 'Imphal East'),
(384, 16, 'Imphal West'),
(385, 16, 'Senapati'),
(386, 16, 'Tamenglong'),
(387, 16, 'Thoubal'),
(388, 16, 'Ukhrul'),
(389, 17, 'East Garo Hills'),
(390, 17, 'East Jaintia Hills'),
(391, 17, 'East Khasi Hills'),
(392, 17, 'North Garo Hills'),
(393, 17, 'Ri Bhoi'),
(394, 17, 'South Garo Hills'),
(395, 17, 'South West Garo Hills'),
(396, 17, 'South West Khasi Hills'),
(397, 17, 'West Garo Hills'),
(398, 17, 'West Jaintia Hills'),
(399, 17, 'West Khasi Hills'),
(400, 18, 'Aizawl'),
(401, 18, 'Champhai'),
(402, 18, 'Kolasib'),
(403, 18, 'Lawngtlai'),
(404, 18, 'Lunglei'),
(405, 18, 'Mamit'),
(406, 18, 'Saiha'),
(407, 18, 'Serchhip'),
(408, 19, 'Dimapur'),
(409, 19, 'Kiphire'),
(410, 19, 'Kohima'),
(411, 19, 'Longleng'),
(412, 19, 'Mokokchung'),
(413, 19, 'Mon'),
(414, 19, 'Peren'),
(415, 19, 'Phek'),
(416, 19, 'Tuensang'),
(417, 19, 'Wokha'),
(418, 19, 'Zunheboto'),
(419, 20, 'Angul'),
(420, 20, 'Balangir'),
(421, 20, 'Balasore'),
(422, 20, 'Bargarh'),
(423, 20, 'Bhadrak'),
(424, 20, 'Boudh'),
(425, 20, 'Cuttack'),
(426, 20, 'Debagarh'),
(427, 20, 'Dhenkanal'),
(428, 20, 'Gajapati'),
(429, 20, 'Ganjam'),
(430, 20, 'Jagatsinghpur'),
(431, 20, 'Jajpur'),
(432, 20, 'Jharsuguda'),
(433, 20, 'Kalahandi'),
(434, 20, 'Kandhamal'),
(435, 20, 'Kendrapara'),
(436, 20, 'Kendujhar'),
(437, 20, 'Khordha'),
(438, 20, 'Koraput'),
(439, 20, 'Malkangiri'),
(440, 20, 'Mayurbhanj'),
(441, 20, 'Nabarangpur'),
(442, 20, 'Nayagarh'),
(443, 20, 'Nuapada'),
(444, 20, 'Puri'),
(445, 20, 'Rayagada'),
(446, 20, 'Sambalpur'),
(447, 20, 'Subarnapur'),
(448, 20, 'Sundergarh'),
(449, 21, 'Amritsar'),
(450, 21, 'Barnala'),
(451, 21, 'Bathinda'),
(452, 21, 'Faridkot'),
(453, 21, 'Fatehgarh Sahib'),
(454, 21, 'Fazilka'),
(455, 21, 'Firozpur'),
(456, 21, 'Gurdaspur'),
(457, 21, 'Hoshiarpur'),
(458, 21, 'Jalandhar'),
(459, 21, 'Kapurthala'),
(460, 21, 'Ludhiana'),
(461, 21, 'Mansa'),
(462, 21, 'Moga'),
(463, 21, 'Mohali'),
(464, 21, 'Muktsar'),
(465, 21, 'Pathankot'),
(466, 21, 'Patiala'),
(467, 21, 'Rupnagar'),
(468, 21, 'Sangrur'),
(469, 21, 'Shaheed Bhagat Singh Nagar'),
(470, 21, 'Tarn Taran'),
(471, 22, 'Ajmer'),
(472, 22, 'Alwar'),
(473, 22, 'Banswara'),
(474, 22, 'Baran'),
(475, 22, 'Barmer'),
(476, 22, 'Bharatpur'),
(477, 22, 'Bhilwara'),
(478, 22, 'Bikaner'),
(479, 22, 'Bundi'),
(480, 22, 'Chittorgarh'),
(481, 22, 'Churu'),
(482, 22, 'Dausa'),
(483, 22, 'Dholpur'),
(484, 22, 'Dungarpur'),
(485, 22, 'Ganganagar'),
(486, 22, 'Hanumangarh'),
(487, 22, 'Jaipur'),
(488, 22, 'Jaisalmer'),
(489, 22, 'Jalore'),
(490, 22, 'Jhalawar'),
(491, 22, 'Jhunjhunu'),
(492, 22, 'Jodhpur'),
(493, 22, 'Karauli'),
(494, 22, 'Kota'),
(495, 22, 'Nagaur'),
(496, 22, 'Pali'),
(497, 22, 'Pratapgarh'),
(498, 22, 'Rajsamand'),
(499, 22, 'Sawai Madhopur'),
(500, 22, 'Sikar'),
(501, 22, 'Sirohi'),
(502, 22, 'Tonk'),
(503, 22, 'Udaipur'),
(504, 23, 'East Sikkim'),
(505, 23, 'North Sikkim'),
(506, 23, 'South Sikkim'),
(507, 23, 'West Sikkim'),
(508, 24, 'Ariyalur'),
(509, 24, 'Chennai'),
(510, 24, 'Coimbatore'),
(511, 24, 'Cuddalore'),
(512, 24, 'Dharmapuri'),
(513, 24, 'Dindigul'),
(514, 24, 'Erode'),
(515, 24, 'Kanchipuram'),
(516, 24, 'Kanyakumari'),
(517, 24, 'Karur'),
(518, 24, 'Krishnagiri'),
(519, 24, 'Madurai'),
(520, 24, 'Nagapattinam'),
(521, 24, 'Namakkal'),
(522, 24, 'Nilgiris'),
(523, 24, 'Perambalur'),
(524, 24, 'Pudukkottai'),
(525, 24, 'Ramanathapuram'),
(526, 24, 'Salem'),
(527, 24, 'Sivaganga'),
(528, 24, 'Thanjavur'),
(529, 24, 'Theni'),
(530, 24, 'Thoothukudi'),
(531, 24, 'Tiruchirappalli'),
(532, 24, 'Tirunelveli'),
(533, 24, 'Tiruppur'),
(534, 24, 'Tiruvallur'),
(535, 24, 'Tiruvannamalai'),
(536, 24, 'Tiruvarur'),
(537, 24, 'Vellore'),
(538, 24, 'Viluppuram'),
(539, 24, 'Virudhunagar'),
(540, 25, 'Adilabad'),
(541, 25, 'Bhadradri Kothagudem'),
(542, 25, 'Hyderabad'),
(543, 25, 'Jagtial'),
(544, 25, 'Jangaon'),
(545, 25, 'Jayashankar'),
(546, 25, 'Jogulamba'),
(547, 25, 'Kamareddy'),
(548, 25, 'Karimnagar'),
(549, 25, 'Khammam'),
(550, 25, 'Komaram Bheem'),
(551, 25, 'Mahabubabad'),
(552, 25, 'Mahbubnagar'),
(553, 25, 'Mancherial'),
(554, 25, 'Medak'),
(555, 25, 'Medchal'),
(556, 25, 'Nagarkurnool'),
(557, 25, 'Nalgonda'),
(558, 25, 'Nirmal'),
(559, 25, 'Nizamabad'),
(560, 25, 'Peddapalli'),
(561, 25, 'Rajanna Sircilla'),
(562, 25, 'Ranga Reddy'),
(563, 25, 'Sangareddy'),
(564, 25, 'Siddipet'),
(565, 25, 'Suryapet'),
(566, 25, 'Vikarabad'),
(567, 25, 'Wanaparthy'),
(568, 25, 'Warangal Rural'),
(569, 25, 'Warangal Urban'),
(570, 25, 'Yadadri Bhuvanagiri'),
(571, 26, 'Dhalai'),
(572, 26, 'Gomati'),
(573, 26, 'Khowai'),
(574, 26, 'North Tripura'),
(575, 26, 'Sepahijala'),
(576, 26, 'South Tripura'),
(577, 26, 'Unakoti'),
(578, 26, 'West Tripura'),
(579, 27, 'Agra'),
(580, 27, 'Aligarh'),
(581, 27, 'Allahabad'),
(582, 27, 'Ambedkar Nagar'),
(583, 27, 'Amethi'),
(584, 27, 'Amroha'),
(585, 27, 'Auraiya'),
(586, 27, 'Azamgarh'),
(587, 27, 'Baghpat'),
(588, 27, 'Bahraich'),
(589, 27, 'Ballia'),
(590, 27, 'Balrampur'),
(591, 27, 'Banda'),
(592, 27, 'Barabanki'),
(593, 27, 'Bareilly'),
(594, 27, 'Basti'),
(595, 27, 'Bijnor'),
(596, 27, 'Budaun'),
(597, 27, 'Bulandshahr'),
(598, 27, 'Chandauli'),
(599, 27, 'Chitrakoot'),
(600, 27, 'Deoria'),
(601, 27, 'Etah'),
(602, 27, 'Etawah'),
(603, 27, 'Faizabad'),
(604, 27, 'Farrukhabad'),
(605, 27, 'Fatehpur'),
(606, 27, 'Firozabad'),
(607, 27, 'Gautam Buddha Nagar'),
(608, 27, 'Ghaziabad'),
(609, 27, 'Ghazipur'),
(610, 27, 'Gonda'),
(611, 27, 'Gorakhpur'),
(612, 27, 'Hamirpur'),
(613, 27, 'Hapur'),
(614, 27, 'Hardoi'),
(615, 27, 'Hathras'),
(616, 27, 'Jalaun'),
(617, 27, 'Jaunpur'),
(618, 27, 'Jhansi'),
(619, 27, 'Kannauj'),
(620, 27, 'Kanpur Dehat'),
(621, 27, 'Kanpur Nagar'),
(622, 27, 'Kanshiram Nagar'),
(623, 27, 'Kaushambi'),
(624, 27, 'Kheri'),
(625, 27, 'Kushinagar'),
(626, 27, 'Lalitpur'),
(627, 27, 'Lucknow'),
(628, 27, 'Maharajganj'),
(629, 27, 'Mahoba'),
(630, 27, 'Mainpuri'),
(631, 27, 'Mathura'),
(632, 27, 'Mau'),
(633, 27, 'Meerut'),
(634, 27, 'Mirzapur'),
(635, 27, 'Moradabad'),
(636, 27, 'Muzaffarnagar'),
(637, 27, 'Pilibhit'),
(638, 27, 'Pratapgarh'),
(639, 27, 'Raebareli'),
(640, 27, 'Rampur'),
(641, 27, 'Saharanpur'),
(642, 27, 'Sambhal'),
(643, 27, 'Sant Kabir Nagar'),
(644, 27, 'Sant Ravidas Nagar'),
(645, 27, 'Shahjahanpur'),
(646, 27, 'Shamli'),
(647, 27, 'Shravasti'),
(648, 27, 'Siddharthnagar'),
(649, 27, 'Sitapur'),
(650, 27, 'Sonbhadra'),
(651, 27, 'Sultanpur'),
(652, 27, 'Unnao'),
(653, 27, 'Varanasi'),
(654, 28, 'Almora'),
(655, 28, 'Bageshwar'),
(656, 28, 'Chamoli'),
(657, 28, 'Champawat'),
(658, 28, 'Dehradun'),
(659, 28, 'Haridwar'),
(660, 28, 'Nainital'),
(661, 28, 'Pauri Garhwal'),
(662, 28, 'Pithoragarh'),
(663, 28, 'Rudraprayag'),
(664, 28, 'Tehri Garhwal'),
(665, 28, 'Udham Singh Nagar'),
(666, 28, 'Uttarkashi'),
(667, 29, 'Alipurduar'),
(668, 29, 'Bankura'),
(669, 29, 'Birbhum'),
(670, 29, 'Cooch Behar'),
(671, 29, 'Dakshin Dinajpur'),
(672, 29, 'Darjeeling'),
(673, 29, 'Hooghly'),
(674, 29, 'Howrah'),
(675, 29, 'Jalpaiguri'),
(676, 29, 'Jhargram'),
(677, 29, 'Kalimpong'),
(678, 29, 'Kolkata'),
(679, 29, 'Malda'),
(680, 29, 'Murshidabad'),
(681, 29, 'Nadia'),
(682, 29, 'North 24 Parganas'),
(683, 29, 'Paschim Bardhaman'),
(684, 29, 'Paschim Medinipur'),
(685, 29, 'Purba Bardhaman'),
(686, 29, 'Purba Medinipur'),
(687, 29, 'Purulia'),
(688, 29, 'South 24 Parganas'),
(689, 29, 'Uttar Dinajpur'),
(690, 31, 'South Andaman'),
(691, 31, 'North And Middle Andaman'),
(692, 31, 'Nicobars'),
(693, 32, 'Kavaratti'),
(694, 33, 'Dadra'),
(695, 33, 'Masat'),
(696, 33, 'Naroli'),
(697, 33, 'Rakholi'),
(698, 33, 'Samarvarni'),
(699, 33, 'Silvassa'),
(700, 34, 'Daman'),
(701, 34, 'Diu'),
(702, 35, 'Karaikal'),
(703, 35, 'Mah?'),
(704, 35, 'Pondicherry'),
(705, 35, 'Yanam');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `manufacturer_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`manufacturer_id`, `name`, `email`, `phone`) VALUES
(1, 'aaa', 'ad@gmail.com', 1263654789);

-- --------------------------------------------------------

--
-- Table structure for table `po_order`
--

CREATE TABLE `po_order` (
  `order_id` int(11) NOT NULL,
  `po_no` bigint(20) NOT NULL,
  `store_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `expairy_date` date NOT NULL,
  `csv_file` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `upc_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `tax_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `purchage_margin` int(11) NOT NULL,
  `sale_margin` int(11) NOT NULL,
  `mrp` int(11) NOT NULL,
  `self_life_day` int(11) NOT NULL,
  `inner_case_size` int(11) NOT NULL,
  `outer_case_size` int(11) NOT NULL,
  `hsn_code` int(11) NOT NULL,
  `gst_flag` int(11) NOT NULL,
  `storage_type` varchar(100) NOT NULL,
  `alert_units` int(11) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `store_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_taxes`
--

CREATE TABLE `product_taxes` (
  `tax_id` bigint(20) NOT NULL,
  `master_tax` varchar(200) NOT NULL,
  `tax_name` varchar(100) NOT NULL,
  `tax_percent` float NOT NULL,
  `cgst` float NOT NULL,
  `sgst` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_taxes`
--

INSERT INTO `product_taxes` (`tax_id`, `master_tax`, `tax_name`, `tax_percent`, `cgst`, `sgst`) VALUES
(1, 'GST', 'GST 0', 0, 0, 0),
(2, 'GST', 'GST 12', 12, 6, 6),
(4, 'GST', 'GST 18', 18, 9, 9),
(5, 'GST', 'GST 28', 28, 14, 14),
(7, 'GST', 'GST 20', 20, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `states` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `states`) VALUES
(1, 'Andhra Pradesh'),
(2, 'Arunachal Pradesh'),
(3, 'Assam'),
(4, 'Bihar'),
(5, 'Chhattisgarh'),
(6, 'Goa'),
(7, 'Gujarat'),
(8, 'Haryana'),
(9, 'Himachal Pradesh'),
(10, 'Jammu and Kashmir'),
(11, 'Jharkhand'),
(12, 'Karnataka'),
(13, 'Kerala'),
(14, 'Madhya Pradesh'),
(15, 'Maharashtra'),
(16, 'Manipur'),
(17, 'Meghalaya'),
(18, 'Mizoram'),
(19, 'Nagaland'),
(20, 'Odisha'),
(21, 'Punjab'),
(22, 'Rajasthan'),
(23, 'Sikkim'),
(24, 'Tamil Nadu'),
(25, 'Telangana'),
(26, 'Tripura'),
(27, 'Uttar Pradesh'),
(28, 'Uttarakhand'),
(29, 'West Bengal'),
(30, 'Delhi'),
(31, 'Andaman and Nicobar'),
(32, 'Lakshadweep'),
(33, 'Dadra and Nagar Haveli'),
(34, 'Daman and Diu'),
(35, 'Puducherry');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `store_id` int(11) NOT NULL,
  `store_name` varchar(255) NOT NULL,
  `store_email` varchar(255) NOT NULL,
  `store_phone` bigint(20) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `gst_no` varchar(100) NOT NULL,
  `pan_no` varchar(100) NOT NULL,
  `store_website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`store_id`, `store_name`, `store_email`, `store_phone`, `state_id`, `city_id`, `gst_no`, `pan_no`, `store_website`) VALUES
(1, 'store1', 'store1@gmail.com', 1236547899, 1, 1, '1', '1', 'store1.co.in');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_mobile` bigint(20) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `store_id` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_mobile`, `user_password`, `store_id`) VALUES
(1, 'admin', 'admin', 9818310038, '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vendor_id` int(11) NOT NULL,
  `vendor_name` varchar(100) NOT NULL,
  `vendor_email` varchar(100) NOT NULL,
  `vendor_phone` bigint(20) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `vendor_address` varchar(255) NOT NULL,
  `load_size` int(11) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `po_day` varchar(50) NOT NULL,
  `aligned` varchar(50) NOT NULL,
  `rtv_eligible` varchar(50) NOT NULL,
  `account_holder` varchar(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `account_no` bigint(20) NOT NULL,
  `ifsc_code` varchar(50) NOT NULL,
  `branch_address` varchar(255) NOT NULL,
  `store_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendor_id`, `vendor_name`, `vendor_email`, `vendor_phone`, `state_id`, `city_id`, `vendor_address`, `load_size`, `manufacturer_id`, `po_day`, `aligned`, `rtv_eligible`, `account_holder`, `bank_name`, `account_no`, `ifsc_code`, `branch_address`, `store_id`) VALUES
(1, 'abc', 'abc@gmail.com', 1236547890, 1, 1, 'no address', 123, 1, '1', '1', '1', 'abc', 'bcd', 1548211100000011, '124512', '12125125', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `po_order`
--
ALTER TABLE `po_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_taxes`
--
ALTER TABLE `product_taxes`
  ADD PRIMARY KEY (`tax_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=706;
--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `po_order`
--
ALTER TABLE `po_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_taxes`
--
ALTER TABLE `product_taxes`
  MODIFY `tax_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
