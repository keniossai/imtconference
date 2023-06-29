@@ -0,0 +1,88 @@
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2023 at 10:03 PM
-- Server version: 5.7.34
-- PHP Version: 8.1.16

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nbaconfe_2023`
--

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `code`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Civic Centre, Victoria Island', '1000001', 'Lagos', NULL, NULL);

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Delegates', NULL, NULL, NULL),
(2, 'Visitors', NULL, NULL, NULL),
(3, 'Exhibitors', NULL, NULL, NULL);

--
-- Dumping data for table `enrols`
--

INSERT INTO `enrols` (`id`, `name`, `year_of_call`, `scn`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'DELEGATES', '2023', 'DEL000023', '', '', '', NULL, NULL),
(2, 'VISITORS', '2010', 'VIS00010', '', '', '', NULL, NULL),
(3, 'EXHIBITORS', '2021', 'EXH000021', '', '', '', NULL, NULL);

INSERT INTO `payments` (`id`, `transaction_id`, `user_id`, `fee_id`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 478, 32, '2023-05-15 12:45:11', '2023-05-15 12:45:11', 478, NULL),
(2, 2, 8711, 33, '2023-05-15 12:46:52', '2023-05-15 12:46:52', 8711, NULL),
(3, 3, 510, 33, '2023-05-15 12:47:21', '2023-05-15 12:47:21', 510, NULL);

INSERT INTO `periods` (`id`, `name`, `virtual`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'Early Bird', 0, '2023-06-04 22:59:59', NULL, NULL),
(2, 'Regular', 0, '2023-07-23 22:59:59', NULL, NULL),
(3, 'Late Registration', 0, '2023-08-14 22:59:59', NULL, NULL),
(4, 'Virtual', 1, '2023-08-18 22:59:59', NULL, NULL);

INSERT INTO `speakers` (`id`, `name`, `slug`, `email`, `phone`, `bio`, `designation`, `gender`, `photo`, `is_key`, `position`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Chimamanda Ngozi Adichie', 'chimamanda-ngozi-adichie', NULL, NULL, '<p class=\"text-justify\">                             Chimamanda Ngozi Adichie was born in Enugu, Nigeria in 1977. She grew up on the campus of the University of Nigeria, Nsukka, where her father was a Professor and her mother was the first female Registrar. </p>                             <p class=\"text-justify\">She studied medicine for a year at Nsukka and then left for the US at the age of 19 to continue her education on a different path. She graduated summa cum laude from Eastern Connecticut State University with a degree in Communication and Political Science.</p>                             <p class=\"text-justify\"> She has a Master’s Degree in African Studies from Yale University, and a Master’s Degree in Creative Writing from Johns Hopkins University. She was awarded a Hodder fellowship at Princeton University for the 2005-2006 academic year, and a fellowship at the Radcliffe Institute of Harvard University for the 2011-2012 academic year. In 2008, she received a MacArthur Fellowship, popularly known as the “genius grant.” </p>                             <p class=\"text-justify\"> She has received honorary doctorate degrees from Eastern Connecticut State University, Johns Hopkins University, Haverford College, Williams College, the University of Edinburgh, Duke University, Amherst College, Bowdoin College, SOAS University of London, American University, Georgetown University, Yale University, Rhode Island School of Design, Northwestern University, and University of Pennsylvania.                         </p>                         <p class=\"text-justify\">Ms. Adichie’s work has been translated into over thirty languages.                                 Her first novel, Purple Hibiscus (2003), won the Commonwealth Writers’ Prize, and her second novel, Half of a Yellow Sun (2006), won the Orange Prize. Her 2013 novel Americanah won the US National Book Critics Circle Award, and was named one of The New York Times Top Ten Best Books of 2013. A story from her collection, The Thing Around Your Neck, was awarded the O Henry Prize.</p>                                <p class=\"text-justify\"> She has delivered two landmark TED talks: her 2009 TED Talk The Danger of A Single Story and her 2012 TEDx Euston talk We Should All Be Feminists, which started a worldwide conversation about feminism, and was published as a book in 2014. Dear Ijeawele, or a Feminist Manifesto in Fifteen Suggestions, was published in March 2017. </p>                                  <p class=\"text-justify\">Her most recent work, Notes On Grief, an essay about losing her father, was published in 2021.                                 She was named one of TIME Magazine’s 100 Most Influential People in the World in 2015. In 2017, Fortune Magazine named her one of the World’s 50 Greatest Leaders. She is a member of both the American Academy of Arts and Letters and the American Academy of Arts and Sciences.                                 Ms. Adichie divides her time between the United States and Nigeria, where she leads an annual creative writing workshop.                             </p>                         ', 'Keynote Speaker', 'F', 'nbaconference/speaker/keynote_speaker', 1, 1, NULL, NULL, NULL, NULL),
(2, 'Kaelo Ajuluchukwu ', 'kaelo-ajuluchukwu', NULL, NULL, '<p class=\"text-justify\"> Kaelo is a leader, an Associate General Counsel and regulatory policy expert with 13 years of corporate legal experience and expert working knowledge of legal, regulatory, public policy planning, and management in areas, including telecommunications, technology, and FinTech. Kaelo is an experienced lawyer who leads and manages a small team handling a wide range of legal matters for Africa and the Middle East. He is a legal generalist, with experience working across a host of countries, and a deep understanding of corporate law, data disclosure/infrastructure regulations and technology laws.</p>\r\n\r\n<p class=\"text-justify\"> As Associate General Counsel at Facebook, Kaelo oversees the Legal/Law Enforcement, infrastructure, Elections (Legal) and safety work in Africa and parts of the Middle East. Kaelo is also an athlete and 10 time marathoner.</p>\r\n', 'Associate General Counsel at META\r\n', 'M', 'nbaconference/speaker/Kaelo_Ajuluchukwu', 0, 2, NULL, NULL, NULL, NULL),
(3, 'A. B. Mahmoud, OON, SAN, FCIArb, (UK), SFNLI', 'ab-mahmoud', NULL, NULL, '<p class=\"text-justify\">A. B. Mahmoud (AB) is a Senior Advocate of Nigeria (SAN) and a founding Partner in the law firm of Dikko & Mahmoud. ABM was the 33rd President of the Nigerian Bar Association from 2016 to 2018 where he reinvigorated the Nigerian Bar Association as a tool for promoting rule of law, good governance, and democracy in Nigeria. He was one time the Attorney General and Commissioner for Justice Kano State, Chairman of NBA Kano Branch in 1993 and the Chairman NBA Conference Planning Committee in 2006.</p\r\n\r\n<p class=\"text-justify\">AB, as he is popularly known has considerable experience and specialized training in various fields of law and has broad experience in various aspects of lawyering skills. He has at various times acted as advocate, a solicitor and as Arbitrator. He has considerable experience locally and internationally in dispute resolution and complex transactions. AB has advised various public and private sector clients.,</p>\r\n<p class=\"text-justify\">AB has trained at various times at the International Development Law Institute in Rome, where he obtained a certificate in Law and Development in 1987, and in Legal Aspects of Privatization in 1990. He also holds a Diploma in Sociology of Law from Onati Institute for the Sociology of Law in Spain (1990) and another certificate in Techniques of Privatization from the Institute of international Development at Harvard University (2000). He was at North- Western University Chicago where he obtained a Certificate in Corporate Law and Business (2002). He also obtained a Diploma in International Commercial Arbitration of the Chartered Institute Arbitrators UK from Keble College University of Oxford and was admitted as a Fellow of the Chartered Institute of Arbitrators (FCIArb) in 2008. He was a participant at the Yale University jointly run leadership programme with Nigeria Leadership Initiative. He also obtained an Executive Education Certificate from the Harvard Business School in 2019.</p>\r\n\r\n<p class=\"text-justify\">AB served at various bodies both at Federal and State levels. He was member of the National Committee on Crime Victims’ Rights. He served as a member of the Presidential Committee on Incentives, Waivers and Concessions (for Investments and Businesses) in Nigeria. He served as member of the Board of the Institute of Advanced Legal Studies, Centre for Democratic Research and Training Mambayya House (Bayero University Kano). He has also served as a member of the National Advisory Council of Nigeria Stability and Reconciliation Programme NSRP (a DFID supported programme aimed at reducing violent conflicts in Nigeria). AB also Chaired the National Committee on the review of the Nigeria’s Code of Corporate Governance for public Companies. He was a member of the Vision 2020, Business</p>\r\n', 'Partner, Dikko & Mahmoud', 'M', 'nbaconference/speaker/A._B._Mahmoud_OON', 0, 3, NULL, NULL, NULL, NULL),
(4, 'Abimbola Akeredolu, SAN', 'abimbola-akeredolu', NULL, NULL, '<p class=\"text-justify\"></p>\r\n', 'Partner, Banwo & Ighodalo', 'F', 'nbaconference/speaker/Abimbola_Akeredolu', 0, 4, NULL, NULL, NULL, NULL),
(5, 'Adedolapo Adesina', 'adedolapo-adesina', NULL, NULL, '<p class=\"text-justify\"></p>\r\n', 'Head of Legal, Kuda', 'F', 'nbaconference/speaker/Adedolapo_Adesina', 0, 5, NULL, NULL, NULL, NULL),
(6, 'Adesua Dozie', 'adesua-dozie', NULL, NULL, '<p class=\"text-justify\"></p>\r\n', 'Executive Director & General Counsel at Mobil Producing Nigeria', 'F', 'nbaconference/speaker/Adesua_Dozie', 0, 6, NULL, NULL, NULL, NULL),
(7, 'Alex Okoh', 'alex-okoh', NULL, NULL, '<p class=\"text-justify\"></p>\r\n', 'Director General, BPE', 'F', 'nbaconference/speaker/Alex_Okoh', 0, 7, NULL, NULL, NULL, NULL),
(8, 'Anita Omonuwa Ogbalu', 'Anita-Omonuwa', NULL, NULL, '<p class=\"text-justify\"></p>\r\n', 'Corporate Counsel MTN', 'F', 'nbaconference/speaker/Anita_Omonuwa', 0, 8, NULL, NULL, NULL, NULL),
(9, 'Anthony Idigbe, SAN ', 'Anthony-Idigbe', NULL, NULL, '<p class=\"text-justify\"></p>\r\n', 'Senior Partner, Punuka', 'M', 'nbaconference/speaker/Anthony_Idigbe', 0, 9, NULL, NULL, NULL, NULL),
(10, 'Anthony Nwaochei', 'Anthony-Nwaochei', NULL, NULL, '<p class=\"text-justify\">Anthony Nwaochei is the Managing Partner and heads the Business Advisory Practice Team of The Law Crest LLP, a full-service law firm with offices in Lagos and Abuja. Prior to assuming his role as founding Managing Partner of the Firm, Tony, between 1994 and 1999 was the Company Secretary & General Counsel of Societe Bancaire Merchant Bankers, a Swiss/French owned banking institution, licensed by the Central Bank of Nigeria and over-saw the human resources and corporate services departments of the Bank as well.</p>\r\n\r\n<p class=\"text-justify\">Tony Is a vastly experienced solicitor who regularly provides advice on business recovery & insolvency; investments & finance; regulatory compliance; mergers, acquisitions & corporate restructuring; corporate governance and construction and real estate and in the course of his work over the years, has advised some of the biggest players in the Nigerian economy on some of the most significant and complex commercial transactions.</p>\r\n<p class=\"text-justify\">Tony was the pioneer Chairman of the Employment & Industrial Relations Committee of the Section on Business Law of the NBA and is also Chairman of the Remuneration Committee of the Nigerian Bar Association which recently submitted its report including recommendations for the improvement of the earning capacity and remuneration of legal practitioners In Nigeria. He was also a member of the Committee that issued a White Paper on the report of the Remuneration Committee.</p>\r\n\r\n<p class=\"text-justify\">He is a member of the Nigerian Bar Association, International Bar Association and is a Fellow of the Business Recovery and Insolvency Practitioners Association of Nigeria (BRIPAN) on whose council he sits.</p>\r\n', 'Managing Partner, The Law Crest LLP', 'M', 'nbaconference/speaker/Anthony_Nwaochei', 0, 10, NULL, NULL, NULL, NULL),
(11, 'Ayo Obe', 'Ayo-Obe', NULL, NULL, '<p class=\"text-justify\">Ayo Obe (née Ogunsola) is a legal practitioner and a partner, with Olasupo Shonibare, in the Lagos-based law firm, Ogunsola Shonibare LP.</p>\r\n\r\n<p class=\"text-justify\">She is a Trustee of Senegal’s Gorée Institute and of the Brussels-based International Crisis Group. She is also on the advisory council of the Madrid-based Common Action Forum. In Nigeria, she is on the board of the Z.O. Dibiaezue Memorial Libraries and is an active member of the #BringBackOurGirls campaign.</p>\r\n\r\n<p class=\"text-justify\">A former President of the Civil Liberties Organisation, Mrs. Obe was also chair of the Transition Monitoring Group, the Steering Committee of the World Movement for Democracy and Nigerian Civil Society’s panel on Police Reform in Nigeria. She represented Nigerian Human Rights NGOs on the Police Service Commission from 2001-2006 and was a Trustee of the CLEEN Foundation from 2001-2015. For three years from April 2006 she headed the Elections Program of the National Democratic Institute’s Nigeria office in Abuja and also served on the Steering Committee of the State Peer Review Mechanism of the Nigerian Governors’ Forum.</p>\r\n\r\n<p class=\"text-justify\">Mrs. Obe has written weekly columns on current affairs for Sunday Punch, Next and The Guardian newspapers and delivered lectures and papers on a range of human rights and democracy-related subjects including the 2nd Annual lecture of the Commonwealth Broadcasting Association, papers on Shari’a Law in Nigeria at Harvard University’s John F. Kennedy School of Government and at Yale University, and at the Independent National Electoral Commission’s Electoral Institute. She has been a panellist at the Women’s Forum in Deauville, France, the Oslo Forum, the Beijing Forum and the Chinua Achebe Colloquium in Providence R.I. among others.</p>\r\n\r\n</p>She presented “You and the Constitution” and “On Point” for the Nigerian Television Authority and currently hosts IDEAs, a radio programme on integrity, ethics and accountability in democracy on Nigeria Info 97.3FM.</p>\r\n', 'Partner, Ogunsola Shonibare LP', 'F', 'nbaconference/speaker/Ayo_Obe', 0, 11, NULL, NULL, NULL, NULL),
(12, 'Ayodele Ashiata Kadiri', 'Ayodele-Ashiata', NULL, NULL, '<p class=\"text-justify\">Ayodele Ashiata Kadiri is a Senior Associate, at G. Elias, an internationally ranked top-tier law firm in Nigeria. She is a key member of the corporate, finance (including capital markets) and new economy practice groups. She has been ranked as a \"Rising Star\" by International Financial Law Review (IFLR) in the Mergers and Acquisitions and Banking practice areas. She is also a disputes resolution enthusiast. She is currently serving as the Chairman of the Young Lawyers Forum of the Lagos Branch of the Nigerian Bar Association. She likes consuming and creating fiction, meeting people and trying out new things.\r\n</p>\r\n', 'Senior Associate, G.Elias', 'F', 'nbaconference/speaker/Ayodele_Ashiata', 0, 12, NULL, NULL, NULL, NULL);


INSERT INTO `fees` (`id`, `category_id`, `period_id`, `amount`, `min_age`, `max_age`, `created_at`, `updated_at`) VALUES
(1, NULL, 2, 20000, 1, 5, NULL, NULL),
(2, NULL, 2, 60000, 6, 10, NULL, NULL),
(3, NULL, 2, 70000, 11, 15, NULL, NULL);

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
();
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;