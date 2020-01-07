-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2020 at 01:46 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mca_staff`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `class_name` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class_name`) VALUES
(1, 'AMCA'),
(2, 'NMCA'),
(3, 'DMCA');

-- --------------------------------------------------------

--
-- Table structure for table `class_teacher`
--

CREATE TABLE `class_teacher` (
  `id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_teacher`
--

INSERT INTO `class_teacher` (`id`, `class_id`, `staff_id`) VALUES
(1, 3, 8),
(2, 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `college_events`
--

CREATE TABLE `college_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date_uploaded` timestamp NOT NULL DEFAULT current_timestamp(),
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_events`
--

INSERT INTO `college_events` (`id`, `title`, `date_uploaded`, `description`) VALUES
(1, 'Christian Health Association of India', '2017-07-15 04:45:43', 'The   AMCA students went to CHAI(Christian Health Association of India), which is well known for its selfless service for the people who are affected by the unleashed disease AIDS  for  PLANET PROGRAM on 17th July â€™15.\r\nPurpose: The purpose of this event was to bring out the students of MCA First Year to help out the people who are affected by the unleashed disease AIDS . \r\nReport: This report is made on an organization named as CHAI(Christian Health Association in India).  Here the patients who are suffering from aids are admitted. Basically this organization runs on donation. There is no other source of income for them. The well experienced and trained doctors who visit here to diagnose the patient serve for free. CHAI is undertaken by Brother MADHU  &amp;   DR. Mrs. RAVI KIRAN \r\nThe first year students of MCA(Master in Computer Science) of Loyola Academy went along with Mr. Stephen, The In charge of  Planet Program Activity under the guidance of Vice Principal and MCA staff. Mr. Stephen selected CHAI, only to make the youth aware of these illness and to teach the value of Humanity and Hospitality. This is disease spreading rapidly In youth because of no proper education and understanding. MCA Staff has extended their helping hand in this Beautiful work.\r\nReview: All the students came together to serve the people. The people who all admitted in CHAI  are like all other human being. But they are been mentally  exhausted and socially eliminated. This planet program is a step towards  Integrity thinking. Things can change if we want them to change. Serve the people first then God will serve you. By this the AMCA students are educated to the study of AIDS and trained in goodwill, hospitality and kindness.'),
(2, 'Grow Plants,Grow With Plants', '2017-08-22 04:50:14', 'The department of Master of Computer Applications has conducted Mass Plantation Programme &quot;Grow Plants,Grow With Plants&quot; on 22nd August 2017 at the premises of the college.\r\nPurpose: The purpose of this programme is  a new initiative towards creating a sense of social responsibility among the students to make the surroundings green and a safe place for Future generation,\r\nReport: Loyola Academy Degree &amp;PG College, Telangana organized a mass plantation programme &quot;Grow plants, Grow  With Plants&quot; on 22nd August 2017 at the premises of the college\r\nRev. Fr. J.Thainese, our correspodent, and Rev. Fr K. Anil Kumar, Vice Principal P.G highlighted an outline of the programme.Further, Mrs.Naga Lakshmi Head of the Department  , MCA addressed the gathering about the importance of plants in our life and ignited the mass about studentâ€™s role in creating a green campus and initiated the plantation of the sapling followed by the students of MCA and other faculty members present\r\nReview: The major highlight of the programme is that Hundred saplings of Neem Trees which are best known for giving purified air and medicinal benefits were planted during the programme  and all the students have shown their active participation and responsibility in planting those saplings carefully. Having self-discipline and self-determination to take responsibility for themselves and others is once again proven by MCA students.'),
(3, 'cherlapally and chenchalguda jail', '2018-03-17 04:54:27', 'The Department of Master of Computer Applications  went for PLANET   Programmee to cherlapally and chenchalguda jail on 17th March 2018.\r\nâ€¢	Purpose: As the part of their curriculum, the Loyola Academy Degree &amp; PG College, Telangana organized a visit to the cherlapally and chenchalguda jail for the students on 17th March 2018.\r\n \r\nâ€¢	Report: Rev.Fr. Dr. Pothireddy Anthony SJ, our correspondent , and Rev.Fr K. Anil Kumar, Vice principal P.G Highlighted an outline of the programme. Further , Mrs. Naga Lakshmi Head of the MCA department and along with the Stephen sir of department of addressed the importance of the people who are in jail and need to motivate them. \r\nThe major highlight of the program is that we need to know the peoples problem because of what they have come into the jail. Many of the people came to jail because of robbing, begging, and kidnapping the small children. We need to motivate the people that they should not do those work when the get released for the jail and they should also know the importance of the family. \r\nWe had listen to each and every problem of them and we had told the people that they should not do those works again and again and also we had done the nail cutting to the old people, we cleaned their premises, we have served the food and the tea to the people. We have also released 10 of the people keeping our id cards as a proof. The people are very happy seeing us and they went with their family to their respective houses.\r\nâ€¢	Review: Having self-discipline and self-determination to take responsibility for themselves and others is once again proved by MCA students');

-- --------------------------------------------------------

--
-- Table structure for table `college_events_pics`
--

CREATE TABLE `college_events_pics` (
  `id` int(11) NOT NULL,
  `img_link` varchar(255) NOT NULL,
  `college_events_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_events_pics`
--

INSERT INTO `college_events_pics` (`id`, `img_link`, `college_events_id`) VALUES
(1, '../images/15687820942903356865d81b70ecf8441.jpg', 1),
(2, '../images/15687821001071487675d81b714bb7212.jpg', 1),
(3, '../images/156878210711291881965d81b71b3e5d13.jpg', 1),
(4, '../images/156878211310972859345d81b7216b00a4.jpg', 1),
(5, '../images/15687823318940272435d81b7fb4dce72-1.jpg', 2),
(6, '../images/1568782337872194205d81b8012ebb02-2.jpg', 2),
(7, '../images/156878254019242820705d81b8cc3f4393-1.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `department_books`
--

CREATE TABLE `department_books` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `library_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guest_lecturer`
--

CREATE TABLE `guest_lecturer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `start_ch` varchar(50) DEFAULT NULL,
  `end_ch` varchar(50) DEFAULT NULL,
  `reports` text NOT NULL,
  `img_link` varchar(255) NOT NULL,
  `class` varchar(15) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest_lecturer`
--

INSERT INTO `guest_lecturer` (`id`, `first_name`, `subject`, `start_ch`, `end_ch`, `reports`, `img_link`, `class`, `date`) VALUES
(3, 'Mr.Anil . H. Menon', 'Enterprise Java Beans', '', '', 'A guest lecture by Mr.Anil . H. Menon , G.M. Technical at Adroit Infocom India pvt Ltd. was held on 29th Oct. 2013 and on 16th Nov. 2013 by the Department of M.C.A.\r\nThe topic of the lecture was â€œEnterprise Java Beans â€œ.The lecture started off with first understanding the EJB specification. The studentâ€™s knowledge was enhanced by throwing the light on how to program enterprise bean, and how to deploy them in an Enterprise Beans Container such as j2ee application server and Web Logic Server 6.0. The vast experience &amp; knowledge of our guest lecturer explode the knowledge of our students', '../images/default_pics/guest_lecturer.jpg', 'MCA', '2013-10-29'),
(4, 'Dr.SALMAN ABDUL MOIZ', 'UML CASE_STUDY', '', '', 'A guest lecture by Dr.SALMAN ABDUL MOIZ,  MCA, M.Tech(CSE), M.Phil(CS).  Ph.D(CSE) Associate Professor, School of Computer &amp; Information sciences(SCIS),University of Hyderabad was held on 2nd Dec. 2013  by the Department of  M.C.A.\r\nThe topic of the lecture was UML CASE_STUDY with all diagrams and forward and reverse engineering', '../images/default_pics/guest_lecturer.jpg', 'MCA', '2013-12-02'),
(5, 'Mr. Anil Atyam', 'Start ups and Entrepreneurship', '', '', 'The Department of M.C.A. has organized a guest lecture on â€œStart ups and Entrepreneurshipâ€ on July 10th, 2015. The guest speaker was Mr. Anil Atyam from Cloud Integrator Inc. Washington DC.\r\nâ€¢	Purpose: The Department of M.C.A. has organized a guest lecture for  M.C.A. students on July 10th, 2015. The guest speaker was Mr. Anil Atyam from Cloud Integrator Inc. Washington DC. The  purpose of this event was to bring students aware regarding  the passionate about start ups and entrepreneurship.\r\nâ€¢	Report: The session was about two hours to bring up the awareness about doing their  projects, about startups and bring up entrepreneurship qualities.\r\nâ€¢	Review : The students were able to bring knowledge about doing their  projects, about startups and bring up entrepreneurship qualities.', '../images/15687625594576981965d816abf9a0951.jpg', 'MCA', '2015-07-10'),
(6, 'Mr.K.S.P.S. Srinivas', 'Goal Setting and Interview Skills', '', '', 'The Department of M.C.A has organized a guest lecture on â€œGoal Setting and Interview Skillsâ€ by Mr.K.S.P.S. Srinivas and Mr. Srinath On 2nd November 2015.\r\n\r\nâ€¢	Purpose: The Purpose of this guest lecture was to bring awareness on Interview skills and Goal Setting.\r\n\r\nâ€¢	Report: It was a one hour session by Mr.K.S.P.S. Srinivas and Mr. Srinath On 2nd November 2015.It enriched the students in a better way.\r\n\r\nâ€¢	Review: The Review of this session was to bring awareness on Interview skills and Goal Setting', '../images/default_pics/guest_lecturer.jpg', 'MCA', '2015-11-02'),
(7, 'Mr. Srinath', 'Goal Setting and Interview Skills', '', '', 'The Department of M.C.A has organized a guest lecture on â€œGoal Setting and Interview Skillsâ€ by Mr.K.S.P.S. Srinivas and Mr. Srinath On 2nd November 2015.\r\n\r\nâ€¢	Purpose: The Purpose of this guest lecture was to bring awareness on Interview skills and Goal Setting.\r\n\r\nâ€¢	Report: It was a one hour session by Mr.K.S.P.S. Srinivas and Mr. Srinath On 2nd November 2015.It enriched the students in a better way.\r\n\r\nâ€¢	Review: The Review of this session was to bring awareness on Interview skills and Goal Setting', '../images/default_pics/guest_lecturer.jpg', 'MCA', '2015-11-02'),
(8, 'Mrs. B.Vaishnavi', 'Object oriented Testing and Millennium Testing', '', '', 'The Department of M.C.A. has organized a guest lecture for final year M.C.A. students on November 25th and 29th 2015 on the â€œObject oriented Testing and Millennium Testing by Mrs. B.Vaishnavi.\r\nâ€¢	Purpose:\r\nThe Purpose of conducting this guest lecture is to give good idea about â€œObject oriented testing and Millinnium Testing.â€\r\nâ€¢	Report: The Department of M.C.A. has organized a guest lecture for final year M.C.A. students on November 25th and 29th 2015 on the â€œObject oriented Testing and Millennium Testingâ€. The guest speaker was Mrs. B.Vaishnavi, Associate Professor, Swamy Vivekananda Institute of Technology, Secunderabad.\r\nIn the first session the speaker covered Object oriented testing and its uses.\r\nIn the second session she covered Millennium Testing and the other latest testing methods.\r\nâ€¢	Review: Students benefited with this workshop very much. They got good idea of Software Testing. They also got insights of latest testing technologies used in the organizations.', '../images/15687631759933603885d816d2733e6b2.png', 'MCA', '2015-11-25'),
(9, 'Rev. Fr. J. Thainese SJ', 'Fundamentals of Object Oriented Systems', '', '', 'The Department has organized a Guest Lecture on â€œFundamentals of Object Oriented Systemsâ€ on 14 Dec 2015 by Rev. Fr. J. Thainese SJ, Correspondent, Loyola Academy.\r\n\r\nâ€¢	Purpose: The purpose of conducting this guest lecture is  to help students in designing major projects.\r\nâ€¢	Report: a case study was explained with the help of UML DIAGRAMS.\r\nâ€¢	Review: Students benefited with this workshop very much. They got good idea of using UML diagrams and applying them to design MAJOR projects', '../images/default_pics/guest_lecturer.jpg', 'MCA', '2015-12-14'),
(10, 'N. Pavan Kumar', 'ORACLE 11G FORMS AND REPORTS', '', '', 'The Department of M.C.A. has organized a guest lecture for second year M.C.A. students on Nov 9, 2016 on the topic â€œORACLE 11G FORMS AND REPORTS â€œ. \r\nThe guest speaker was N. Pavan Kumar, DBA, Oracle Corporation.\r\nâ€¢	Purpose: The purpose of conducting this guest lecture is  to help students in designing Forms and Reports.\r\nâ€¢	 Report: An application was explained and designed using Oracle 11G Forms and Reports.\r\nReview: Students benefited with this guest lecture very much. They got hands on experience and good idea of  using ORACLE 11G FORMS AND REPORTS  and applying them to design applications', '../images/15687633852372929205d816df98314c3.jpg', 'MCA', '2016-11-09'),
(11, 'K.Harishwar  Reddy', 'PC Hardware and Maintenance', '', '', 'The Department of MCA has organized a guest lecture on â€œPC Hardware and Maintenanceâ€ on  Dec 15 , 2016 and  Dec 19, 2016 for first year MCA students.\r\nK.Harishwar  Reddy, Security  Consultant, EIQ  Networks  was the resource person', '../images/156876349011280696665d816e627831c4.jpg', 'MCA', '2016-12-19'),
(12, 'Mrs. B.Vaishnavi', 'UNIFIED MODELING LANGUAGE', '', '', 'The Department of M.C.A. has organized a guest lecture for Final year M.C.A. students on Sep 17,2016 on the topic â€UNIFIED MODELING LANGUAGEâ€. The guest speaker was Mrs. B.Vaishnavi, Assistant Professor, St. Francis Degree and PG college.', '../images/default_pics/guest_lecturer.jpg', 'MCA', '2016-09-17'),
(14, 'Mr. Gangaprasad Narla', 'LATEST TRENDS IN NETWORKING &amp; SECURITY   TECHNOLOGIES', '', '', 'The Department of M.C.A. has organized a guest lecture for second year M.C.A. students on Jan 7, 2017. The topic was   â€œLATEST TRENDS IN NETWORKING &amp; SECURITY   TECHNOLOGIESâ€ at PG seminar hall.  \r\nThe guest speaker was Mr. Gangaprasad Narla, Co-founder, Managing Director and CEO, GOLARS NETWORKS Pvt Ltd.\r\nâ€¢	Purpose: To impart knowledge to the students on the latest trends in networking and security technologies.\r\nâ€¢	Report: It included various topics  like professional foundation programmes, routing ,switching and security.\r\nâ€¢	Review: The lecture was received well. The participation and involvement of the students was commendable. He told about the job opportunities  in networking and in the field of security', '../images/15687643856864488965d8171e1337be5.jpg', 'MCA', '2017-01-07'),
(15, 'Mr. M. Ram Mohan', 'Interview Skills Development', '', '', 'A guest lecture on Interview Skills Development was organized at Seminar Hall of   Loyola Academy Degree and Pg College on 30th AUG 2017 by departments of MCA and MBA.\r\nâ€¢	Purpose:  Personality Development Programme (PDP) is aimed at increasing Employability of the Students. \r\n\r\nâ€¢	Report Lecture was delivered by Mr. M. Ram Mohan from Institute of Personality Development, Hyderabad.The session began with a brief overview of the Interview skills for the students in which he initially introduced the students to the real life time situations that they will face and how they need to prepare themselves for the Interviews.\r\nFurther he provided a detailed insight into resume writing techniques. He also emphasized the significance of personal grooming, body language and postures, mannerism to be adopted before appearing for an interview.\r\nSpeaker explained how interviews are conducted, what are expected questions, how to face interviews etc.,\r\n He also spoke about certain commonly asked questions  in an interview like, Tell me about yourself ,What can you do for us, Why this organisation, Why this job and so on. \r\n He stressed on understanding the description and requirements of the job    before attempting for an interview.\r\nâ€¢	Review: The session ended with an interactive question answer session .The   programme was very interactive and informative. According to the speaker, the success mantras for an interview are to be confident, positive and loyola.', '../images/15687645952481748785d8172b39691b6.jpg', 'MCA and MBA', '2017-08-30'),
(16, 'Mrs. B. Swarna Sree', 'Design and Analysis of Algorithms', '', '', 'The Department of M.C.A. has organized a guest lecture for  second year M.C.A. students as part Guest Lecture Program on â€œDesign and Analysis of Algorithms, V- Unitâ€, â€œNP Hard and NP Completeâ€ on December 7th 2017.\r\nâ€¢	Purpose: In computational complexity theory, an NP-complete decision problem is one belonging to both the NP and the NP-hard complexity , and it is one of the important and practical approach needed topic.\r\nâ€¢	Report:The speaker was Mrs. B. Swarna Sree Consultant. Next Education Pvt. Ltd. She focused on differences between NP Hard and NP Complete and Cookâ€™s Theorem with many examples.\r\nâ€¢	Review:It was very helpful to the students as she high lightened all the problems  and their efficiency.', '../images/15687648598921904475d8173bb749937.jpg', 'MCA', '2017-12-07'),
(17, 'Abdul Bari', 'Data Analysis of Algorithm', '', '', 'A guest lecture was organized for the II year students of the Department of MCA on â€˜DAA (Data Analysis of Algorithm) on 6 November, 2018 by Abdul Bari, Asst. Professor &amp; HOD IT Dept., SVIT\r\nâ€¢	Purpose: To impart knowledge to the students in the field of Data Analysis of Algorithm, widening their scope for learning.\r\nâ€¢	Report: It included various topics  like NP hard and NP Complete Problems, Cookâ€™s Theorem, NP Graph Problem, scheduling and code generations problem. He acknowledged the students about the subject. He gave many examples to explain the topics to its best.\r\n\r\nâ€¢	Review: The lecture was received with the increase appreciation.  The participation and involvement of the students was commendable.  It made the students grasp an idea of career opportunities in the field of education', '../images/156876504912644367075d817479204cd8.jpg', 'MCA', '2018-11-06'),
(18, 'Mr. Ravi Munukutla', 'R language', '', '', 'A guest lecture was organized for the III year students of the Department of MCA on â€˜R language by Mr. Ravi Munukutla in the year 2018.\r\nPurpose: One day workshop conducted in R language. The Purpose of conducting this guest lecture is to give good idea about supervised learning using Regression models in R.\r\n\r\nReport: We are proud to have our guest Mr. Ravi Munukutla. The session was carried out by five hours. It was very informative and attractive. He detailed much of the current generation technology. The topics which he taught were Regression analysis, Interesting predictions, Multi co linearity.\r\n\r\nReview: Students benefited with this workshop very much. They got good idea of supervised learning using regression models in R. They also got insights of visualization.  Also he touched upon the job opportunities in the field of data science, AI and Machine learning.', '../images/1568765302170223585d81757640ab59.png', 'MCA', '2018-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `industrial_visit`
--

CREATE TABLE `industrial_visit` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `uploaded_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `description` text DEFAULT NULL,
  `cover_pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `industrial_visit`
--

INSERT INTO `industrial_visit` (`id`, `title`, `uploaded_date`, `description`, `cover_pic`) VALUES
(12, 'National Small Industries Corporation Limited 2014 -15', '2014-12-16 18:29:05', 'The Department of MCA has organized a one day industrial visit for the first year MCA students on 16th December 2014  â€œPC Hardware and Maintenance â€œ at â€œNational Small Industries Corporation Limited â€œ, Hyderabad.\r\n\r\nâ€¢	Purpose: To have an exposure to the MCA staff and AMCA students in PC  Hardware and Maintenance learning program.\r\n\r\nâ€¢	Report: This report is made on an Institute named as NSIC(Christian Health Association in India).  Here the Students are trained for Programming Languages, hardware components, technical things which are useful. Students made eligible and taught firmly.  The well experienced and trained Tutors are hired here.\r\n NSIC is a Government Institute.\r\nThe first year students of MCA(Master in Computer Science) of Loyola Academy went along with Mrs. Bharathi  and Mrs. Hemlata, The lecturers of Loyola under the guidance of Vice Principal and MCA staff. The respective chose NSIC, only to make the youth aware of the importance of computer in human life. The people might know to use computer. But they wonâ€™t know to repair it. By keeping this idea in their mind they took the students to NSIC. The Students were curious to learn the peripherals of a computer. The job of a programmer is to make application. This was the totally different they were going to learn.\r\n	The session was about the computer maintenance. Mr. Madhusudan explained  how to maintain the computer. He explained  about the threats, virus, worms. What measures should we take to protects our computer. The beautiful day of learning ended with a vote of thanks by one of our student. The program ended with a tea as the token of love from the institute.\r\n\r\nâ€¢	Review: All the students came together to learn something. This made them to forward their step towards the Globalized world. A minute can change the fate. And hard work can change the time. This program is a step towards intellect thinking.  By this the AMCA students are educated to the study the computer and trained in customized manner.', '../images/156874494516790617255d8125f185f1a1.jpg'),
(13, 'National Small Industries Corporation Limited 2015-16', '2015-11-01 18:32:55', 'The students of MCA first year have attended one day training program on â€œPC Hardware and Maintenance â€œ at â€œNational Small Industries Corporation Limited â€œ, Hyderabad on 2nd November 2015.\r\n\r\nPurpose: The MCA staff and AMCA students had taken effort in Hardware learning program.\r\n\r\nReport: This report is made on an Institute named as NSIC(Christian Health Association in India).  Here the Students are trained for Programming Languages, hardware components, technical things which are useful. Students made eligible and taught firmly.   Basically this Institution is having a reasonable fees. Anyone who is willing to learn the programming language can learn and trained here.  The well experienced and trained Tutors are hired here.\r\n NSIC is an  government institute.\r\nThe first year students of MCA(Master in Computer Science) of Loyola Academy went along with Mrs.Sirisha and Mrs. Hemlata, The lecturers of Loyola under the guidance of Vice Principal and MCA staff. The respective chose NSIC, only to make the youth aware of the importance of computer in human life. The people might know to use computer. But they wonâ€™t know to repair it. By keeping this idea in their mind they took the students to NSIC. The Students were curious to learn the peripherals of a computer. The job of a programmer is to make application. This was the totally different they were going to learn.\r\nThurs, 16th  morning, the Hardware Program was planned for AMCA students. The Students were eagerly waiting for to visit NSIC as it was new to them. Each and everyone came well dressed in their attire. The enthusiastic behaviour of the youth is key point of learning. MCA faculty who were in charge of taking the students to NSIC was confident enough that they could manage to do things off in better way. The students reached NSIC which is situated in ECIL, Secunderabad by 10:30 am.\r\n	After  the awesome end of the first part. Last session was about the computer maintenance. Mr. Madhusudan explained us how to maintain the computer. He explained us about the threats, virus, worms. What majors should we take to protects are computer. The beautiful day of learning ended with a vote of thanks by Emmanuel. The program ended with a tea as the token of love from the institute.\r\n\r\nReview: All the students came together to learn something. This made them to forward their step towards the Globalized world. A minute can change the fate. And hard work can change the time. This program is a step towards intellect thinking.  By this the AMCA students are educated to the study the computer and trained in customized manner.', '../images/15687451753497698705d8126d78f1ab2.jpg'),
(14, 'BSNL Regional Telecom Training Centre 2017-18', '2018-02-27 19:46:12', 'The department of MCA organized an industrial visit for one-day to BSNL Regional Telecom Training Centre, Gachibowli, Hyderabad. This visit was organised on 28thFebruary 2018 for the class of MCA 1st (AMCA) and 2ndyear (NMCA). \r\n\r\nâ€¢	Purpose: This Industrial Visit was organized to benefit students with the technical terms and the knowledge of how network is playing key role in industry sector\r\nâ€¢	Report: The One-day visit was organized with prior permission from BSNL Regional Telecom Training Centre, Gachibowli, Hyderabad. The sessions conducted were very educational and gave the students the exposure as to how the industry and the outside market works. The students were benefited with the technical terms and the knowledge of how network is playing key role in industry sector, how a call setup is made using landline and mobile phones and functionality of optical fiber. The company outreach plus opportunities were discussed which motivated the students to progress in their stream.\r\nThe details of the trip are:\r\n\r\n1.	The buses departure from the campus for Gachibowli was at 09:30hrs.\r\n2.	The students reached the BSNL office. By 10:30hrs.\r\n3.	The senior manager gave a warm welcome.\r\n4.	At 10:45 hrs, the staff split the total number of students in four groups.\r\n5.	Moreover, there are 4 class sessions that are located at different blocks that are attended      \r\nby four groups simultaneously. \r\n6.	Session 1 Time 11:00 â€“ 11:45 Visit to Broad band Lab\r\n7.	Session 2 Time 11:45 â€“ 12:30 Visit to GSM/CDMA Lab\r\n8.	Session 3 Time 12:30- 13:15 Visit to OFC/OFS\r\n9.	Session 4 Time 13:15- 14:00 Visit to Switching Labs\r\n10.	By 14:00 hrsAll the sessions of all four groups where completed.\r\n11.	Then the students then proceeded towards BSNL Canteen for lunch.\r\n12.	By 15:30hrs, the bus left for campus and reached the campus by 17:00hrs\r\nâ€¢	Review: The students learned namely Broad band ,GSM/CDMA, OFC/OFS Switching, Internet, Broadband, Carrier service, MPLS-VPN, VSAT, VoIP etc.', '../images/156874957213496367955d813804976ef3.jpg'),
(16, 'Software Technology Parks of India', '2018-10-15 00:33:41', 'The department of MCA has taken the final year students and second year students, to Bangalore, Mysore and Ooty as part of industrial visit from10October 2018 to 15 October 2018. \r\nâ€¢	Purpose: To enhance the learning through the process of productive industrial visits.  The unit operations and unit process would be witnessed practically, which made the students understand the concepts better.\r\n\r\nâ€¢	Report: A count of 240 students were part of this trip along 8 faculty members. The trip started from Hyderabad station on 10th night and we reached Bangalore by 11 a.m.  The first visit for MCA Department was scheduled at 3:00 p.m. to Software Technology Parks of India (SPTI), Bangalore. Software Technology Parks of India (STPI), an autonomous society under Ministry of Electronics and Information Technology (MeitY), Govt. of India has been set up with distinct focus to boost up Software export from the country. STPI is constantly working with an objective to implement STP/EHTP scheme formulated by Govt. of India, set up and manage infrastructural facilities. It was great experience in the company. Next day we moved towards Mysore .The Journey started at 6:00 in the morning. The Journey included visits to sriranganathaswamy temple, St.philomena church, Mysore Palace, Chamundi Hill, Brindhavan Garden. And Third day trip moved towards Ooty where students visited Ooty lake.\r\n\r\nâ€¢	Review: The students enjoyed the process. Captured all their beautiful moments in a bundle memories to carry throughout their life. Overall, it was a good exposure and opportunity for all the students', '../images/15687668215718583035d817b6594bc3Information-Stewardship-Applications-Software-780x400.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `industrial_visit_pics`
--

CREATE TABLE `industrial_visit_pics` (
  `id` int(11) NOT NULL,
  `pics` varchar(255) NOT NULL,
  `industrial_visit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `industrial_visit_pics`
--

INSERT INTO `industrial_visit_pics` (`id`, `pics`, `industrial_visit_id`) VALUES
(18, '../images/156874496820948545095d812608eb1cf1.jpg', 12),
(19, '../images/156874518818266193805d8126e4c23032.jpg', 13),
(20, '../images/156874959617110598255d81381c8fe743.jpg', 14),
(21, '../images/156874976410929558635d8138c41f7344.jpg', 14),
(22, '../images/15687668852197501425d817ba5755465.jpg', 16);

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `author_name` varchar(50) NOT NULL,
  `img_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin007', '$2y$10$iuWGfjjYymlbaeBeUkuhFO/Koi0ORkEw7nBWX0p21kbuc7u5xNto.');

-- --------------------------------------------------------

--
-- Table structure for table `mentoring`
--

CREATE TABLE `mentoring` (
  `id` int(11) NOT NULL,
  `student_id` bigint(20) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentoring`
--

INSERT INTO `mentoring` (`id`, `student_id`, `staff_id`) VALUES
(47, 111703917101, 4),
(48, 111703917102, 4),
(49, 111703917103, 7);

-- --------------------------------------------------------

--
-- Table structure for table `placement`
--

CREATE TABLE `placement` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `salary` varchar(255) DEFAULT NULL,
  `student_id` bigint(20) DEFAULT NULL,
  `position` varchar(255) NOT NULL,
  `campus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placement`
--

INSERT INTO `placement` (`id`, `company_name`, `salary`, `student_id`, `position`, `campus`) VALUES
(10, 'xyz', '1.2', 111703916101, '', 'In Campus'),
(11, 'xxxx', '1.2', 111703917101, '', 'In Campus');

-- --------------------------------------------------------

--
-- Table structure for table `question_paper`
--

CREATE TABLE `question_paper` (
  `id` int(11) NOT NULL,
  `sem_id` int(11) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `paper_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_paper`
--

INSERT INTO `question_paper` (`id`, `sem_id`, `year`, `paper_link`) VALUES
(9, 1, 2018, '../question_papers/156874370013824038035d81211473d342018-1.pdf'),
(10, 2, 2018, '../question_papers/156874371916220132605d812127497382018-2.pdf'),
(11, 3, 2018, '../question_papers/15687437304226923525d812132e50ce2018-3.pdf'),
(12, 4, 2018, '../question_papers/156874374521353864145d81214185e652018-4.pdf'),
(13, 5, 2018, '../question_papers/156874375717417351315d81214dc2a4f2018-5.pdf'),
(14, 1, 2017, '../question_papers/15687438007048390345d812178a32162017-1.pdf'),
(15, 2, 2017, '../question_papers/15687439107191322715d8121e6547b22017-2.pdf'),
(16, 3, 2017, '../question_papers/1568743919177147345d8121ef5ba572017-3.pdf'),
(17, 4, 2017, '../question_papers/15687439287413489475d8121f8c33872017-4.pdf'),
(18, 5, 2017, '../question_papers/15687439392118127135d81220336feb2017-5.pdf'),
(19, 1, 2016, '../question_papers/15687439584683259095d8122164f07f2016-1.pdf'),
(20, 2, 2016, '../question_papers/156874396920855148055d812221734e02016-2.pdf'),
(21, 3, 2016, '../question_papers/156874398119382476325d81222df3de82016-3.pdf'),
(22, 4, 2016, '../question_papers/15687439918637745515d81223779d0d2016-4.pdf'),
(23, 5, 2016, '../question_papers/15687440061278966455d8122468e89a2016-5.pdf'),
(24, 1, 2015, '../question_papers/156874403115292399795d81225f170b42015-1.pdf'),
(25, 2, 2015, '../question_papers/1568744039943348695d812267dbfed2015-2.pdf'),
(26, 3, 2015, '../question_papers/156874404814253105005d8122704289b2015-3.pdf'),
(27, 4, 2015, '../question_papers/156874405918464173265d81227b6df742015-4.pdf'),
(28, 1, 2014, '../question_papers/156874407914929516305d81228f63df82014-1.pdf'),
(29, 2, 2014, '../question_papers/156874408814619881485d8122983a0172014-2.pdf'),
(30, 3, 2014, '../question_papers/15687440977876747445d8122a1013ef2014-3.pdf'),
(31, 4, 2014, '../question_papers/156874432111128852955d8123816845a2014-4.pdf'),
(32, 5, 2014, '../question_papers/15687443348234325715d81238e3d5892014-5.pdf'),
(33, 1, 2013, '../question_papers/156874436210400172915d8123aa5bb372013-1_2.pdf'),
(34, 3, 2013, '../question_papers/15687443737184435205d8123b5ec5e02013-3.pdf'),
(35, 4, 2013, '../question_papers/156874438612892934445d8123c25294f2013-4.pdf'),
(36, 5, 2013, '../question_papers/15687443981995684545d8123ce2f3b82013-5.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `semister`
--

CREATE TABLE `semister` (
  `id` int(11) NOT NULL,
  `sem` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semister`
--

INSERT INTO `semister` (`id`, `sem`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `staff_profile`
--

CREATE TABLE `staff_profile` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `img_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_profile`
--

INSERT INTO `staff_profile` (`id`, `name`, `work`, `description`, `address`, `mobile_no`, `skills`, `img_link`) VALUES
(4, 'Mrs. P.V.Nagalakshmi', 'Lecturer in Computer Science &amp; HOD', 'The Future of the world is in my class room today as a teacher itâ€™s my responsibility to lead them in right path.', 'nagmtechloyola@gmail.com', '9533443459', 'â€¢	DataBase Management Systems, Computer Networks, JAVA core and Advanced, Big Data, Operating Systems,Unix. â€¢	Network Security, Mobile Computing, Rich Internet Applications, Information Technology', '../images/156877319016345701395d819446362071.png'),
(5, 'Mrs.G. Sirisha', 'Lecturer in Computer Science &amp; Dean of Cultural Activities', 'The Ability to think creates innovators', 'siribdj.24@gmail.com', '9866134680', 'Networking, AI, Discrete Mathematics', '../images/156877621718375128225d81a01944edd2.png'),
(6, 'Mrs.G. Anitha Mary', 'Lecturer in Computer Science', 'Expertise is as much understanding as knowledge. We take care of both', 'anitha.reddi.gade@gmail.com', '7702490642', 'â€¢	Bioinformatics â€¢	Operations Research â€¢	Web Technologies â€¢	Object oriented system &amp; Implementation â€¢	Probability &amp; Statistics â€¢	Design and Analysis of Algorithms', '../images/15687764069523990985d81a0d6c7cae3.png'),
(7, 'Mrs. P.S.R. Malathi', 'Lecturer in Computer Science', 'The best part of teaching is regenerating oneself constantly as the inspirer as well as the inspired. Loyola provides ample scope for such renewal', 'malathipsr@gmail.com', '9849781037', 'â—	Research Areas: Internet of Things,  Cloud computing. â—	Teaching Areas: C++, Advanced Java, Operating Systems, Computer Networks, Network Security, Ecommerce, Management Information Systems.', '../images/15687766797400174565d81a1e73b3794.png'),
(8, 'Mrs. K. Bharathi', 'Associate Professor', 'knowledge is power', 'bharathi@gmail.com', '1234567890', 'C, C++, data mining and warehouse, python', '../images/156892602311984873515d83e947c22d25.png');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `roll_no` bigint(20) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `gender` char(1) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `password_set` int(11) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `course_year` varchar(10) NOT NULL,
  `img_link` varchar(255) NOT NULL,
  `local_other_state` varchar(255) NOT NULL,
  `caste` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`roll_no`, `full_name`, `gender`, `mobile_number`, `email`, `active`, `password_set`, `password`, `course_year`, `img_link`, `local_other_state`, `caste`, `religion`, `remarks`) VALUES
(111703916101, 'goku', 'm', 'nil', 'goku@mail.com', 0, 0, '$2y$10$b.xEFHwLrZBYsGdThysaP.qI0dOXhvsr8Gk64bC32NQUOt7/o5fza', 'finished', '../images/default_pics/male.png', 'local', 'nil', 'nil', ''),
(111703917101, 'naruto', 'm', 'nil', 'nil', 1, 0, '$2y$10$tskF2bNtYxkmdTQL8CTeKu2GSn9hOALNeKq9MoUMm6DKVBMz21zZy', '3', '../images/default_pics/male.png', 'local', 'nil', 'nil', ''),
(111703917102, 'sasuke', 'm', 'nil', 'sasuke@mail.com', 1, 0, '$2y$10$Zd/qtaFZdSgyU5kHuJNqs.X/.27nH7UQ61s4j6wXa7G3QrrVp5zaW', '3', '../images/default_pics/male.png', 'local', 'nil', 'nil', ''),
(111703917103, 'gohan', 'm', 'nil', 'gohan@mail.com', 1, 0, '$2y$10$xzyMwSpKuuUtopyFOyFCV.BD3TPV6B4U/FPZoCZ94Q3A7gjbjx5bq', '3', '../images/default_pics/male.png', 'local', 'nil', 'nil', ''),
(111703918101, 'midoriya', 'm', 'nil', 'midoriya@mail.com', 1, 0, '$2y$10$NPPIN/RQSEYv.wvNDJYK0ePGc3opEI0ePdUYMxP32pnle/PNT/tnO', '2', '../images/default_pics/male.png', 'local', 'nil', 'nil', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_in_class`
--

CREATE TABLE `student_in_class` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `student_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_in_class`
--

INSERT INTO `student_in_class` (`id`, `class_id`, `student_id`) VALUES
(75, 3, 111703917101),
(76, 3, 111703917102),
(77, 2, 111703918101),
(78, 3, 111703917103);

-- --------------------------------------------------------

--
-- Table structure for table `vid_lect`
--

CREATE TABLE `vid_lect` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `embed_txt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vid_lect`
--

INSERT INTO `vid_lect` (`id`, `title`, `embed_txt`) VALUES
(5, 'DBMS ENTITY Vandana', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/TfWqd1mIQvA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(6, 'boundary value analysis by Vandana', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/vLpL-192xTY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(7, 'Thread program by nagalakshmi', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/Od684TBnX5Q\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(8, 'multi threading by Nagalakshmi', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/8sAdgOC8Jog\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(9, 'Operations on linear list by K.Bharathi', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/qeqZmGaZEIw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(10, 'Operations on linear list program by K.Bharathi', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/hNNWyofSLis\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(11, 'Linear list program by K.Bharathi', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/P8aBYZRscrc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(12, 'Linear list remove by K.Bharathi', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/KwP2AyWsqKo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(13, 'Linear list insert by K.Bharathi', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/DJDZDXG17wg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(14, 'merge sort explanation by Anitha ma\'am', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/iLO_-wHv1Gs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(15, 'merge sort algorithm by Anitha Mary', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/1z2vJ5ygWxA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_teacher`
--
ALTER TABLE `class_teacher`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `class_id` (`class_id`),
  ADD UNIQUE KEY `staff_id` (`staff_id`);

--
-- Indexes for table `college_events`
--
ALTER TABLE `college_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_events_pics`
--
ALTER TABLE `college_events_pics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `college_events_id` (`college_events_id`);

--
-- Indexes for table `department_books`
--
ALTER TABLE `department_books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `class_id` (`class_id`),
  ADD UNIQUE KEY `library_id` (`library_id`);

--
-- Indexes for table `guest_lecturer`
--
ALTER TABLE `guest_lecturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industrial_visit`
--
ALTER TABLE `industrial_visit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industrial_visit_pics`
--
ALTER TABLE `industrial_visit_pics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `industrial_visit_id` (`industrial_visit_id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `mentoring`
--
ALTER TABLE `mentoring`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `placement`
--
ALTER TABLE `placement`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `question_paper`
--
ALTER TABLE `question_paper`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sem_id` (`sem_id`);

--
-- Indexes for table `semister`
--
ALTER TABLE `semister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_profile`
--
ALTER TABLE `staff_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `student_in_class`
--
ALTER TABLE `student_in_class`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `vid_lect`
--
ALTER TABLE `vid_lect`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `class_teacher`
--
ALTER TABLE `class_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `college_events`
--
ALTER TABLE `college_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `college_events_pics`
--
ALTER TABLE `college_events_pics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `department_books`
--
ALTER TABLE `department_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guest_lecturer`
--
ALTER TABLE `guest_lecturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `industrial_visit`
--
ALTER TABLE `industrial_visit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `industrial_visit_pics`
--
ALTER TABLE `industrial_visit_pics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mentoring`
--
ALTER TABLE `mentoring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `placement`
--
ALTER TABLE `placement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `question_paper`
--
ALTER TABLE `question_paper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `semister`
--
ALTER TABLE `semister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff_profile`
--
ALTER TABLE `staff_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student_in_class`
--
ALTER TABLE `student_in_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `vid_lect`
--
ALTER TABLE `vid_lect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_teacher`
--
ALTER TABLE `class_teacher`
  ADD CONSTRAINT `class_teacher_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `class_teacher_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff_profile` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `college_events_pics`
--
ALTER TABLE `college_events_pics`
  ADD CONSTRAINT `college_events_pics_ibfk_1` FOREIGN KEY (`college_events_id`) REFERENCES `college_events` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `department_books`
--
ALTER TABLE `department_books`
  ADD CONSTRAINT `department_books_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `department_books_ibfk_2` FOREIGN KEY (`library_id`) REFERENCES `library` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `industrial_visit_pics`
--
ALTER TABLE `industrial_visit_pics`
  ADD CONSTRAINT `industrial_visit_pics_ibfk_1` FOREIGN KEY (`industrial_visit_id`) REFERENCES `industrial_visit` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mentoring`
--
ALTER TABLE `mentoring`
  ADD CONSTRAINT `mentoring_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`roll_no`) ON DELETE CASCADE,
  ADD CONSTRAINT `mentoring_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff_profile` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `placement`
--
ALTER TABLE `placement`
  ADD CONSTRAINT `placement_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`roll_no`) ON DELETE CASCADE;

--
-- Constraints for table `question_paper`
--
ALTER TABLE `question_paper`
  ADD CONSTRAINT `question_paper_ibfk_1` FOREIGN KEY (`sem_id`) REFERENCES `semister` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_in_class`
--
ALTER TABLE `student_in_class`
  ADD CONSTRAINT `student_in_class_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_in_class_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`roll_no`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
