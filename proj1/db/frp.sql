-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 05:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frp`
--

-- --------------------------------------------------------

--
-- Table structure for table `page1`
--

CREATE TABLE `page1` (
  `adv_num` varchar(100) NOT NULL,
  `doa` varchar(100) NOT NULL,
  `ref_num` int(255) NOT NULL,
  `post` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mstatus` varchar(100) NOT NULL,
  `cast` varchar(100) NOT NULL,
  `id_proof` varchar(100) NOT NULL,
  `father_name` text NOT NULL,
  `cadd` text NOT NULL,
  `cadd1` text NOT NULL,
  `cadd2` text NOT NULL,
  `cadd3` text NOT NULL,
  `cadd4` text NOT NULL,
  `padd` text NOT NULL,
  `padd1` text NOT NULL,
  `padd2` text NOT NULL,
  `padd3` text NOT NULL,
  `padd4` text NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_2` varchar(20) NOT NULL,
  `email_2` varchar(100) NOT NULL,
  `landline` varchar(20) NOT NULL,
  `userfile1` varchar(100) NOT NULL,
  `userfile2` varchar(100) NOT NULL,
  `userfile` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page1`
--

INSERT INTO `page1` (`adv_num`, `doa`, `ref_num`, `post`, `dept`, `fname`, `mname`, `lname`, `nationality`, `dob`, `gender`, `mstatus`, `cast`, `id_proof`, `father_name`, `cadd`, `cadd1`, `cadd2`, `cadd3`, `cadd4`, `padd`, `padd1`, `padd2`, `padd3`, `padd4`, `mobile`, `email`, `mobile_2`, `email_2`, `landline`, `userfile1`, `userfile2`, `userfile`) VALUES
('IITP/FACREC-CHE/2023/JULY/02', '14/5/2024', 1712610242, 'Associate Professor', 'Chemical Engineering', 'Eliseo', 'Barrett Bern', 'Smitham', ' Indian', 'Vitae necessitatibus repellat voluptatum atque praesentium.', 'Male', 'Other', 'OBC', 'PAN-CARD', 'Brycen76', '17926 Miguel Meadow', 'Los Angeles', 'Florida', 'Thailand', '45375-', '579 Beer Rapid', 'Thousand Oaks', 'New Hampshire', 'Malaysia', '98881-', 'Human Research Produ', 'swathi.m6879@gmail.com', 'District Functionali', 'your.email+fakedata29371@gmail.com', '564', '1800.webp', '1800.webp', 0x576861747341707020496d61676520323032332d31302d30352061742031382e31392e31345f38333261346334332e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `page2`
--

CREATE TABLE `page2` (
  `college_phd` text NOT NULL,
  `stream` text NOT NULL,
  `supervisor` text NOT NULL,
  `yoj_phd` varchar(4) NOT NULL,
  `dod_phd` varchar(20) NOT NULL,
  `doa_phd` varchar(20) NOT NULL,
  `phd_title` text NOT NULL,
  `pg_degree` text NOT NULL,
  `pg_college` text NOT NULL,
  `pg_subjects` text NOT NULL,
  `pg_yoj` varchar(4) NOT NULL,
  `pg_yog` varchar(4) NOT NULL,
  `pg_duration` varchar(4) NOT NULL,
  `pg_perce` varchar(5) NOT NULL,
  `pg_rank` text NOT NULL,
  `ug_degree` text NOT NULL,
  `ug_college` text NOT NULL,
  `ug_subjects` text NOT NULL,
  `ug_yoj` varchar(4) NOT NULL,
  `ug_yog` varchar(4) NOT NULL,
  `ug_duration` varchar(4) NOT NULL,
  `ug_perce` varchar(5) NOT NULL,
  `ug_rank` text NOT NULL,
  `email_3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page2`
--

INSERT INTO `page2` (`college_phd`, `stream`, `supervisor`, `yoj_phd`, `dod_phd`, `doa_phd`, `phd_title`, `pg_degree`, `pg_college`, `pg_subjects`, `pg_yoj`, `pg_yog`, `pg_duration`, `pg_perce`, `pg_rank`, `ug_degree`, `ug_college`, `ug_subjects`, `ug_yoj`, `ug_yog`, `ug_duration`, `ug_perce`, `ug_rank`, `email_3`) VALUES
('777-038-9731', '1292 Stephen Villages', 'Nam quidem eligendi ut natus odio sapiente.', '247-', 'Minima enim in unde ', '338-606-6268', 'Investor Metrics Orchestrator', '2023-11-14 00:03:17', 'Aperiam repudiandae at voluptates amet sint ex.', 'Quam culpa facilis.', 'Illo', 'Sit ', '2024', '91559', 'Autem expedita quia dolore laborum. Odio tenetur minima debitis. Fugiat a consequatur eveniet quia nulla architecto magnam a pariatur.', '2024-11-23 10:46:06', 'Reiciendis cupiditate magnam maiores eaque explicabo dolorem quae eaque necessitatibus.', 'Beatae doloremque nihil.', 'Beat', 'Blan', '2024', '93541', 'Nam dicta eius id quisquam pariatur alias natus repellendus.', 'swathi.m6879@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `page2_edu`
--

CREATE TABLE `page2_edu` (
  `add_degree` text NOT NULL,
  `add_college` text NOT NULL,
  `add_subjects` text NOT NULL,
  `add_yoj` varchar(4) NOT NULL,
  `add_yog` varchar(4) NOT NULL,
  `add_duration` varchar(5) NOT NULL,
  `add_perce` varchar(5) NOT NULL,
  `add_rank` text NOT NULL,
  `email_2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page2_edu`
--

INSERT INTO `page2_edu` (`add_degree`, `add_college`, `add_subjects`, `add_yoj`, `add_yog`, `add_duration`, `add_perce`, `add_rank`, `email_2`) VALUES
('235 Green Crossroad', '56138 Jordane Manor', '777 Witting Ways', '2695', '467 ', '26782', '1311 ', '44040 Baumbach Spring', 'swathi.m6879@gmail.com'),
('74557 Douglas Underpass', '570 Monahan Unions', '98029 Weissnat Expressway', '607 ', '648 ', '45006', '734 C', '871 Davis Corner', 'swathi.m6879@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `page2_school`
--

CREATE TABLE `page2_school` (
  `hsc_ssc` text NOT NULL,
  `school` text NOT NULL,
  `passing_year` varchar(4) NOT NULL,
  `s_perce` varchar(5) NOT NULL,
  `s_rank` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page2_school`
--

INSERT INTO `page2_school` (`hsc_ssc`, `school`, `passing_year`, `s_perce`, `s_rank`, `email`) VALUES
('12th/HSC/Diploma', 'Error nulla id quam voluptatum temporibus placeat minima.', 'nZWq', '8127 ', 'Labor', 'swathi.m6879@gmail.com'),
('10th', 'Corrupti ex neque accusamus doloremque.', 'hj8I', '17278', 'Repre', 'swathi.m6879@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `page3`
--

CREATE TABLE `page3` (
  `pres_emp_position` text NOT NULL,
  `pres_emp_employer` text NOT NULL,
  `pres_status` text NOT NULL,
  `pres_emp_doj` varchar(50) NOT NULL,
  `pres_emp_dol` varchar(50) NOT NULL,
  `pres_emp_duration` varchar(50) NOT NULL,
  `area_spl` text NOT NULL,
  `area_rese` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page3`
--

INSERT INTO `page3` (`pres_emp_position`, `pres_emp_employer`, `pres_status`, `pres_emp_doj`, `pres_emp_dol`, `pres_emp_duration`, `area_spl`, `area_rese`, `email`) VALUES
('79757 Dickens Ways', '59586 Walsh Estates', 'Central Govt.', '26131 Rolfson Avenue', '3344 Lockman Point', '839 Kozey Prairie', 'Saepe asperiores eaque vero praesentium temporibus ad dicta ad.', '723 Gulgowski Expressway', 'swathi.m6879@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `page3_exp`
--

CREATE TABLE `page3_exp` (
  `position` text NOT NULL,
  `employer` text NOT NULL,
  `doj` varchar(50) NOT NULL,
  `dol` varchar(50) NOT NULL,
  `exp_duration` varchar(50) NOT NULL,
  `email_1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page3_exp`
--

INSERT INTO `page3_exp` (`position`, `employer`, `doj`, `dol`, `exp_duration`, `email_1`) VALUES
('Odit facilis consequatur asperiores.', 'Sapiente quibusdam cupiditate sint pariatur illo accusamus.', 'Rerum beatae earum.', 'Non porro doloribus non molestias.', '2023-12-24 08:23:46', 'swathi.m6879@gmail.com'),
('Quod iste atque pariatur aliquid architecto esse velit ipsam accusamus.', 'Possimus quidem qui esse nobis veniam.', 'Eligendi sapiente eligendi nisi quod.', 'Voluptas corporis fuga voluptas dolor inventore ra', '2023-12-23 20:36:10', 'swathi.m6879@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `page3_ind_exp`
--

CREATE TABLE `page3_ind_exp` (
  `org` text NOT NULL,
  `work` text NOT NULL,
  `ind_doj` varchar(50) NOT NULL,
  `ind_dol` varchar(50) NOT NULL,
  `period` varchar(50) NOT NULL,
  `email_4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page3_ind_exp`
--

INSERT INTO `page3_ind_exp` (`org`, `work`, `ind_doj`, `ind_dol`, `period`, `email_4`) VALUES
('Fugiat hic impedit perferendis repellat expedita voluptates eius repellendus.', 'delectus nemo dicta', 'Dolorem consequuntur commodi beatae quidem perfere', 'Dolorum excepturi pariatur ullam non sapiente.', '2024-09-24 15:43:58', 'swathi.m6879@gmail.com'),
('Perspiciatis molestias perferendis perferendis id consectetur natus ipsum eaque eum.', 'expedita alias sit', 'Voluptatibus eum est.', 'Magnam nemo velit eum laboriosam ipsa corrupti acc', '2025-04-20 18:29:43', 'swathi.m6879@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `page3_r_exp`
--

CREATE TABLE `page3_r_exp` (
  `r_exp_position` text NOT NULL,
  `r_exp_institute` text NOT NULL,
  `r_exp_supervisor` text NOT NULL,
  `r_exp_doj` varchar(50) NOT NULL,
  `r_exp_dol` varchar(50) NOT NULL,
  `r_exp_duration` varchar(50) NOT NULL,
  `email_3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page3_r_exp`
--

INSERT INTO `page3_r_exp` (`r_exp_position`, `r_exp_institute`, `r_exp_supervisor`, `r_exp_doj`, `r_exp_dol`, `r_exp_duration`, `email_3`) VALUES
('Odio dolorum ea corporis neque sapiente.', 'New Jersey', 'Aliquid suscipit numquam molestias nisi voluptatem.', 'Laudantium quisquam inventore.', 'Impedit repellendus harum dolorum natus consequunt', '2024-06-12 15:56:51', 'swathi.m6879@gmail.com'),
('Alias dignissimos nam maiores veritatis repellendus vel dolorem.', 'Alabama', 'Iusto quis a.', 'Est nam suscipit.', 'Voluptas itaque ipsa ipsum minima voluptatem magna', '2024-02-09 06:24:09', 'swathi.m6879@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `page3_t_exp`
--

CREATE TABLE `page3_t_exp` (
  `te_position` text NOT NULL,
  `te_employer` text NOT NULL,
  `te_course` text NOT NULL,
  `te_ug_pg` varchar(50) NOT NULL,
  `te_no_stu` varchar(50) NOT NULL,
  `te_doj` varchar(50) NOT NULL,
  `te_dol` varchar(50) NOT NULL,
  `te_duration` varchar(200) NOT NULL,
  `email_2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page3_t_exp`
--

INSERT INTO `page3_t_exp` (`te_position`, `te_employer`, `te_course`, `te_ug_pg`, `te_no_stu`, `te_doj`, `te_dol`, `te_duration`, `email_2`) VALUES
('Cupiditate cupiditate vitae. Dolores natus sunt atque quae culpa ea iusto ad. Voluptatum iusto nesciunt dolor amet blanditiis quae.Ducimus eaque suscipit quae accusamus necessitatibus. Quam error cupiditate nemo suscipit. Pariatur voluptatum suscipit ab autem non.Odit deleniti ipsa enim eveniet in officia corporis. Ipsum esse maxime. Saepe officia vero ducimus praesentium esse.', 'Labore fuga doloribus laborum voluptatum pariatur harum. Eveniet beatae aliquam. Facere quam quis commodi sed mollitia quis.Doloribus optio quas eligendi harum ratione eligendi. Tempora suscipit tenetur. Doloremque eum inventore.Ipsam eos aliquid dolores quaerat. Libero officiis officiis velit quod ullam. Ratione esse velit eius.', 'Italy', 'Vitae voluptatibus facilis sed enim numquam praese', '255', 'Officiis expedita velit ad ratione aliquam. Accusa', 'Error dolorem dolore consectetur perspiciatis. A r', 'Sit velit maxime maxime nemo mollitia. Sunt nihil modi cumque. Tempora laudantium nostrum corporis amet sed.Est dolor atque. Mollitia veritatis ex reiciendis saepe autem expedita voluptas nemo ea. Quo', 'swathi.m6879@gmail.com'),
('Cumque architecto magnam eveniet laboriosam. Maiores enim possimus minus eveniet harum provident reiciendis asperiores facilis. Molestiae magnam veniam debitis iusto voluptatibus beatae.Corporis recusandae magnam labore soluta sit impedit suscipit. Eveniet rem dicta accusamus. Fuga ea repellendus hic iusto tempore voluptate repellat dolorem mollitia.Sapiente magni deleniti iste consequatur libero voluptate eos. Totam architecto expedita a laboriosam voluptas. Odio dolore asperiores adipisci.', 'Debitis quibusdam tempore libero est aliquam voluptate dolore. Id beatae harum alias nemo. Labore dolorem error eveniet rerum in aut.Earum cupiditate sed ut praesentium. Pariatur distinctio temporibus eveniet. Nemo aliquam illum sint eligendi exercitationem molestiae officiis aliquid veritatis.Voluptatem voluptatum provident saepe commodi. Ab ipsa adipisci ratione magni aliquam voluptates voluptate. Saepe eligendi facere aspernatur suscipit sed excepturi eum placeat earum.', 'Equatorial Guinea', 'Iusto recusandae quaerat velit. Beatae perferendis', '595', 'Eius atque ad ipsa quae expedita iure at. Sequi sa', 'In fugit similique quaerat deserunt sapiente ipsum', 'Veritatis unde praesentium reprehenderit quidem atque. Iusto distinctio incidunt molestiae magni voluptatum nam molestiae. Quaerat vel maiores optio.Harum ab magnam id. Voluptas ipsam voluptatibus eaq', 'swathi.m6879@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `page4`
--

CREATE TABLE `page4` (
  `summary_journal_inter` int(5) NOT NULL,
  `summary_journal` int(5) NOT NULL,
  `summary_conf_inter` int(5) NOT NULL,
  `summary_conf_national` int(5) NOT NULL,
  `patent_publish` int(5) NOT NULL,
  `summary_book` int(5) NOT NULL,
  `summary_book_chapter` int(5) NOT NULL,
  `google_link` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page4`
--

INSERT INTO `page4` (`summary_journal_inter`, `summary_journal`, `summary_conf_inter`, `summary_conf_national`, `patent_publish`, `summary_book`, `summary_book_chapter`, `google_link`, `email`) VALUES
(0, 0, 0, 0, 0, 0, 0, 'Ea occaecati impedit commodi porro dolores occaecati.', 'swathi.m6879@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `page4_book`
--

CREATE TABLE `page4_book` (
  `bauthor` text NOT NULL,
  `btitle` text NOT NULL,
  `byear` varchar(50) NOT NULL,
  `bisbn` text NOT NULL,
  `email_3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page4_book`
--

INSERT INTO `page4_book` (`bauthor`, `btitle`, `byear`, `bisbn`, `email_3`) VALUES
('Rem non mollitia accusamus odio veniam ut quis.', 'Dynamic Marketing Manager', 'Quaerat alias libero quidem magni vitae reiciendis', 'Magni officia maxime magni accusamus minima saepe eius.', 'swathi.m6879@gmail.com'),
('Velit velit voluptas rem unde ex aut.', 'Product Paradigm Manager', 'Aperiam nesciunt veniam quis unde officia est.', 'Reiciendis voluptate officia laboriosam deleniti.', 'swathi.m6879@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `page4_book_chapter`
--

CREATE TABLE `page4_book_chapter` (
  `bc_author` text NOT NULL,
  `bc_title` text NOT NULL,
  `bc_year` varchar(50) NOT NULL,
  `bc_isbn` text NOT NULL,
  `email_4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page4_book_chapter`
--

INSERT INTO `page4_book_chapter` (`bc_author`, `bc_title`, `bc_year`, `bc_isbn`, `email_4`) VALUES
('Dicta tempore atque voluptatum recusandae doloribus sint ab laboriosam quis.', 'Dynamic Division Consultant', 'Architecto officia aspernatur soluta ex quam eos.', 'Non sequi libero eligendi non enim totam.', 'swathi.m6879@gmail.com'),
('Ullam id explicabo unde.', 'Lead Functionality Agent', 'Qui labore expedita perspiciatis illo explicabo sa', 'Minus laborum laborum laudantium magni quis adipisci eaque maiores animi.', 'swathi.m6879@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `page4_jour`
--

CREATE TABLE `page4_jour` (
  `author` text NOT NULL,
  `title` text NOT NULL,
  `journal` text NOT NULL,
  `year` varchar(50) NOT NULL,
  `impact` text NOT NULL,
  `doi` varchar(50) NOT NULL,
  `status` text NOT NULL,
  `email_1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page4_jour`
--

INSERT INTO `page4_jour` (`author`, `title`, `journal`, `year`, `impact`, `doi`, `status`, `email_1`) VALUES
('Modi quam debitis suscipit quod consequatur nihil molestiae quia.', 'Regional Communications Assistant', 'Totam laborum doloribus nam expedita labore labore.', 'Sequi voluptas maiores velit quia eaque.', 'Veniam iure atque nemo eos consequuntur dignissimos ad laboriosam.', 'Saepe sequi aut commodi laudantium officia aut mol', 'published', 'swathi.m6879@gmail.com'),
('Veniam modi voluptates sed ex fuga rem.', 'Future Division Designer', 'Est nulla possimus.', 'Hic hic rem repudiandae illum qui quibusdam.', 'Eligendi quasi culpa quo et doloremque ipsa beatae tempora.', 'Tenetur provident error necessitatibus esse nesciu', 'published', 'swathi.m6879@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `page4_patent`
--

CREATE TABLE `page4_patent` (
  `pauthor` text NOT NULL,
  `ptitle` text NOT NULL,
  `p_country` text NOT NULL,
  `p_number` varchar(50) NOT NULL,
  `pyear_filed` varchar(50) NOT NULL,
  `pyear_published` varchar(50) NOT NULL,
  `pyear_issued` text NOT NULL,
  `email_2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page4_patent`
--

INSERT INTO `page4_patent` (`pauthor`, `ptitle`, `p_country`, `p_number`, `pyear_filed`, `pyear_published`, `pyear_issued`, `email_2`) VALUES
('vl8pq7vSd3UWz7z', 'Customer Accounts Administrator', 'Aruba', '411', 'Sequi debitis laboriosam debitis ullam veritatis.', 'Amet ipsam dolorum sed et debitis.', 'Nostrum iste amet impedit consequuntur.', 'swathi.m6879@gmail.com'),
('iP7M8phg9Ob7eEd', 'Chief Communications Strategist', 'Sudan', '623', 'Commodi in reiciendis beatae ratione quam eius sed', 'At eum aperiam cumque.', 'Facilis eius minima occaecati saepe error cumque velit dicta.', 'swathi.m6879@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `page5_award`
--

CREATE TABLE `page5_award` (
  `award_nature` text NOT NULL,
  `award_org` text NOT NULL,
  `award_year` varchar(50) NOT NULL,
  `email_3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page5_award`
--

INSERT INTO `page5_award` (`award_nature`, `award_org`, `award_year`, `email_3`) VALUES
('Ipsum error ut corporis hic earum illo.', 'Veniam nisi eos aut earum.', 'Incidunt consequatur magnam ut recusandae suscipit', 'swathi.m6879@gmail.com'),
('Porro amet ducimus non incidunt rem est ratione porro sunt.', 'Alias dignissimos illum natus aut ad accusamus.', 'In quod beatae magni.', 'swathi.m6879@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `page5_consultancy`
--

CREATE TABLE `page5_consultancy` (
  `c_org` text NOT NULL,
  `ctitle` text NOT NULL,
  `camount` varchar(50) NOT NULL,
  `cperiod` varchar(50) NOT NULL,
  `c_role` text NOT NULL,
  `c_status` text NOT NULL,
  `email_5` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page5_consultancy`
--

INSERT INTO `page5_consultancy` (`c_org`, `ctitle`, `camount`, `cperiod`, `c_role`, `c_status`, `email_5`) VALUES
('Quod libero dolor.', 'Forward Factors Designer', 'Bosnia and Herzegovina', 'Enim quod beatae maiores repellat facere error nat', 'Principal Investigator', 'West Virginia', 'swathi.m6879@gmail.com'),
('Quibusdam odit dolores ullam delectus similique tempore.', 'Internal Quality Assistant', 'Austria', 'Dolores assumenda recusandae esse.', 'Co-investigator', 'New Jersey', 'swathi.m6879@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `page5_membership`
--

CREATE TABLE `page5_membership` (
  `mname` text NOT NULL,
  `mstatus` text NOT NULL,
  `email_1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page5_membership`
--

INSERT INTO `page5_membership` (`mname`, `mstatus`, `email_1`) VALUES
('Jeanne Nienow', 'Vermont', 'swathi.m6879@gmail.com'),
('Mohamed Kuhlman', 'Rhode Island', 'swathi.m6879@gmail.com'),
('Krystel Dare', 'Wyoming', 'swathi.m6879@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `page5_prof_trg`
--

CREATE TABLE `page5_prof_trg` (
  `trg` text NOT NULL,
  `porg` text NOT NULL,
  `pyear` varchar(50) NOT NULL,
  `pduration` varchar(50) NOT NULL,
  `email_2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page5_prof_trg`
--

INSERT INTO `page5_prof_trg` (`trg`, `porg`, `pyear`, `pduration`, `email_2`) VALUES
('Repellendus aperiam quaerat quo tempora culpa tenetur minus animi.', 'Recusandae unde repudiandae.', 'Maxime non quae ullam aliquam natus enim cumque ea', '', 'swathi.m6879@gmail.com'),
('Odit recusandae recusandae.', 'Quas saepe excepturi incidunt.', 'Et asperiores maxime ipsam ratione vitae.', '', 'swathi.m6879@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `page5_s_proj`
--

CREATE TABLE `page5_s_proj` (
  `agency` text NOT NULL,
  `stitle` text NOT NULL,
  `samount` varchar(50) NOT NULL,
  `speriod` varchar(50) NOT NULL,
  `s_role` text NOT NULL,
  `s_status` varchar(50) NOT NULL,
  `email_4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page5_s_proj`
--

INSERT INTO `page5_s_proj` (`agency`, `stitle`, `samount`, `speriod`, `s_role`, `s_status`, `email_4`) VALUES
('Inventore fuga atque nulla beatae iure nemo perspiciatis voluptas accusamus.', 'Future Response Executive', 'Spain', 'Totam repellendus ut sit quas.', 'Principal Investigator', 'Indiana', 'swathi.m6879@gmail.com'),
('Corrupti dignissimos officia.', 'Principal Metrics Administrator', 'Saint Barthelemy', 'Ipsam eum dolore quae asperiores facilis.', 'Co-investigator', 'Minnesota', 'swathi.m6879@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `page6_pg_thesis_sup`
--

CREATE TABLE `page6_pg_thesis_sup` (
  `pg_scholar` text NOT NULL,
  `pg_thesis` text NOT NULL,
  `pg_role` text NOT NULL,
  `pg_status` varchar(200) NOT NULL,
  `pg_ths_year` varchar(50) NOT NULL,
  `email_2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page6_pg_thesis_sup`
--

INSERT INTO `page6_pg_thesis_sup` (`pg_scholar`, `pg_thesis`, `pg_role`, `pg_status`, `pg_ths_year`, `email_2`) VALUES
('Tempore natus mollitia ratione impedit sapiente praesentium fuga aperiam.', 'Human Directives Liaison', 'Co-Supervisor', 'Michigan', 'Velit aliquam dicta voluptatibus quis hic.', 'swathi.m6879@gmail.com'),
('Modi quis dolorum at sapiente tenetur sit fugit rem.', 'Lead Implementation Technician', 'Co-Supervisor', 'Missouri', 'Tempora officiis voluptas similique at assumenda i', 'swathi.m6879@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `page6_thesis_sup`
--

CREATE TABLE `page6_thesis_sup` (
  `phd_scholar` text NOT NULL,
  `phd_thesis` text NOT NULL,
  `phd_role` text NOT NULL,
  `phd_ths_status` varchar(50) NOT NULL,
  `phd_ths_year` varchar(50) NOT NULL,
  `email_1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page6_thesis_sup`
--

INSERT INTO `page6_thesis_sup` (`phd_scholar`, `phd_thesis`, `phd_role`, `phd_ths_status`, `phd_ths_year`, `email_1`) VALUES
('640-137-2367', '915-890-2339', 'Supervisor with no Co-supervisor', 'Utah', '663-315-2857', 'swathi.m6879@gmail.com'),
('046-570-7031', '178-420-8675', 'Supervisor with Co-supervisor', 'Delaware', '614-780-7602', 'swathi.m6879@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `page6_ug_thesis_sup`
--

CREATE TABLE `page6_ug_thesis_sup` (
  `ug_scholar` text NOT NULL,
  `ug_thesis` text NOT NULL,
  `ug_role` text NOT NULL,
  `ug_status` varchar(50) NOT NULL,
  `ug_ths_year` varchar(50) NOT NULL,
  `email_3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page6_ug_thesis_sup`
--

INSERT INTO `page6_ug_thesis_sup` (`ug_scholar`, `ug_thesis`, `ug_role`, `ug_status`, `ug_ths_year`, `email_3`) VALUES
('Fugit similique optio asperiores magni repellendus.', 'Investor Marketing Designer', 'Supervisor with Co-supervisor', 'Arizona', 'Dignissimos illum quia saepe quis debitis dolores.', 'swathi.m6879@gmail.com'),
('Minima magni a rerum fugiat quibusdam eveniet illo a ducimus.', 'District Brand Designer', 'Supervisor with no Co-supervisor', 'Utah', 'Autem ipsam eius ullam laborum nihil aliquid magna', 'swathi.m6879@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `page7`
--

CREATE TABLE `page7` (
  `research_statement` text NOT NULL,
  `teaching_statement` text NOT NULL,
  `rel_in` text NOT NULL,
  `prof_serv` text NOT NULL,
  `jour_details` text NOT NULL,
  `conf_details` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page7`
--

INSERT INTO `page7` (`research_statement`, `teaching_statement`, `rel_in`, `prof_serv`, `jour_details`, `conf_details`, `email`) VALUES
('<p>qwertyuiopasdfghjklzxcvbnmzxcvbnmasdfghjkk</p>\r\n\r\n<p>zxcvbnmasdfghjklwertyuiop</p>\r\n\r\n<p>zxcvbnm,asdfghjklwertyuiopasdfklzxcvbnm,dfghjk</p>\r\n', '<p>qwertyuiopasdfghjklzxcvbnmzxcvbnmasdfghjkk</p>\r\n\r\n<p>zxcvbnmasdfghjklwertyuiop</p>\r\n\r\n<p>zxcvbnm,asdfghjklwertyuiopasdfklzxcvbnm,dfghjk</p>\r\n', '<p>qwertyuiopasdfghjklzxcvbnmzxcvbnmasdfghjkk</p>\r\n\r\n<p>zxcvbnmasdfghjklwertyuiop</p>\r\n\r\n<p>zxcvbnm,asdfghjklwertyuiopasdfklzxcvbnm,dfghjk</p>\r\n', '<p>qwertyuiopasdfghjklzxcvbnmzxcvbnmasdfghjkk</p>\r\n\r\n<p>zxcvbnmasdfghjklwertyuiop</p>\r\n\r\n<p>zxcvbnm,asdfghjklwertyuiopasdfklzxcvbnm,dfghjk</p>\r\n', '<p>qwertyuiopasdfghjklzxcvbnmzxcvbnmasdfghjkk</p>\r\n\r\n<p>zxcvbnmasdfghjklwertyuiop</p>\r\n\r\n<p>zxcvbnm,asdfghjklwertyuiopasdfklzxcvbnm,dfghjk</p>\r\n', '<p>qwertyuiopasdfghjklzxcvbnmzxcvbnmasdfghjkk</p>\r\n\r\n<p>zxcvbnmasdfghjklwertyuiop</p>\r\n\r\n<p>zxcvbnm,asdfghjklwertyuiopasdfklzxcvbnm,dfghjk</p>\r\n', 'swathi.m6879@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `page8`
--

CREATE TABLE `page8` (
  `email` varchar(100) NOT NULL,
  `userfile7` varchar(100) NOT NULL,
  `userfile` varchar(100) NOT NULL,
  `userfile1` varchar(100) NOT NULL,
  `userfile2` varchar(100) NOT NULL,
  `userfile3` varchar(100) NOT NULL,
  `userfile4` varchar(100) NOT NULL,
  `userfile9` varchar(100) NOT NULL,
  `userfile10` varchar(100) NOT NULL,
  `userfile8` varchar(100) NOT NULL,
  `userfile6` varchar(100) NOT NULL,
  `userfile5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page8`
--

INSERT INTO `page8` (`email`, `userfile7`, `userfile`, `userfile1`, `userfile2`, `userfile3`, `userfile4`, `userfile9`, `userfile10`, `userfile8`, `userfile6`, `userfile5`) VALUES
('swathi.m6879@gmail.com', '4750meet02-intro-to-DB.pdf', '4750meet03-data-model.pdf', '4750meet04-ER-intro.pdf', '4750meet06-07-ER.pdf', '4750meet04-ER-intro.pdf', '4750meet02-intro-to-DB.pdf', '4750meet03-data-model.pdf', '4750meet04-ER-intro.pdf', '4750meet05-ER.pdf', '4750meet06-07-ER.pdf', '1800.webp');

-- --------------------------------------------------------

--
-- Table structure for table `page8_ref`
--

CREATE TABLE `page8_ref` (
  `ref_name` text NOT NULL,
  `position` text NOT NULL,
  `association_referee` text NOT NULL,
  `org` text NOT NULL,
  `email_2` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page8_ref`
--

INSERT INTO `page8_ref` (`ref_name`, `position`, `association_referee`, `org`, `email_2`, `phone`) VALUES
('Claudie Shields', 'Ex ipsum dolore eveniet modi commodi iste fugit voluptates.', 'Research Collaborator', 'Deserunt quod pariatur distinctio debitis officia facere odit aspernatur repudiandae.', 'your.email+fakedata1', '116-442-7546'),
('Javier Rodriguez', 'Nobis dignissimos nesciunt.', 'Postdoc Supervisor', 'Ea sint alias est labore natus molestias quasi pariatur molestias.', 'your.email+fakedata5', '036-660-4780'),
('Evangeline Upton-Raynor', 'Ratione eligendi impedit id occaecati placeat dolores.', 'Research Collaborator', 'Autem blanditiis aut voluptatibus ipsam quisquam.', 'your.email+fakedata5', '676-016-6128');

-- --------------------------------------------------------

--
-- Table structure for table `page9`
--

CREATE TABLE `page9` (
  `decl_status` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page9`
--

INSERT INTO `page9` (`decl_status`, `email`) VALUES
('1', 'swathi.m6879@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cast` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `re_password` varchar(100) NOT NULL,
  `verify_token` varchar(100) NOT NULL,
  `verify_status` int(2) NOT NULL DEFAULT 0 COMMENT '0=No,1=Yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`firstname`, `lastname`, `email`, `cast`, `password`, `re_password`, `verify_token`, `verify_status`) VALUES
('swathi', 'keerthana', 'swathi.m6879@gmail.com', 'OBC', 'abc', 'abc', 'ab5d477a33b51c1783167ab705c3ceaciitp', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
