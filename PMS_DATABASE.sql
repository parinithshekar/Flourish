-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2018 at 04:46 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admins`
--

CREATE TABLE `Admins` (
  `Author_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Admins`
--

INSERT INTO `Admins` (`Author_ID`) VALUES
('30'),
('40');

-- --------------------------------------------------------

--
-- Table structure for table `Author`
--

CREATE TABLE `Author` (
  `Author_ID` varchar(20) NOT NULL,
  `FName` varchar(20) NOT NULL,
  `MName` varchar(20) DEFAULT NULL,
  `LName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Author`
--

INSERT INTO `Author` (`Author_ID`, `FName`, `MName`, `LName`) VALUES
('10', 'Sukriti', 'R', 'Yadav'),
('100', 'Sowmyarani', 'C', 'N'),
('1000', 'Jay', 'Monster', 'Dong'),
('101', 'G', 'N', 'Srinivasan'),
('110', 'Yanjun', '.', 'Li'),
('111', 'Hengton', '.', 'Kang'),
('112', 'Ketian', '.', 'Ye'),
('120', 'Yujian', '.', 'Li'),
('130', 'Yedi', '.', 'Zhang'),
('131', 'Fu', '.', 'Song'),
('132', 'Taolue', '.', 'Chen'),
('140', 'Thomas', 'G', 'Dietterich'),
('150', 'Laimei', '.', 'Nie'),
('151', 'Masahiro', '.', 'Nozaki'),
('152', 'Shinsei', '.', 'Ryu'),
('153', 'Mao', 'Tian', 'Tan'),
('160', 'Yingfei', '.', 'Gu'),
('161', 'Alexei', '.', 'Kitaev'),
('170', 'Nicolas', '.', 'Angelinos'),
('180', 'Anirban', '.', 'Basu'),
('190', 'Ashley', '.', 'Milsted'),
('191', 'Guifre', '.', 'Vidal'),
('20', 'Shrutheesh', 'Raman', 'Iyer'),
('200', 'Tat', 'Lung', 'Chan'),
('201', 'Nicholas', '.', 'Hale'),
('210', 'Jian', 'Huang', 'She'),
('211', 'Dan', '.', 'Grecu'),
('220', 'Fabio', '.', 'Antonelli'),
('221', 'Alessandro', '.', 'Ramponi'),
('222', 'Sergio', '.', 'Scarlatti'),
('230', 'Mark', '.', 'Whitmeyer'),
('240', 'Ivan', '.', 'Korolev'),
('250', 'Tilman', '.', 'Borgers'),
('251', 'Jiangtao', '.', 'Li'),
('30', 'Parinith', 'R', 'Iyer'),
('40', 'Raghav', 'Endran', 'Ramesh'),
('50', 'Sanjay', 'Sharingan', 'Siddarth'),
('500', 'Benjamin', 'A', 'Burnett'),
('501', 'Andrew', 'Peter', 'Pan'),
('502', 'Sergei ', '.', 'Lanzat'),
('503', 'Michael ', '.', 'Polyak'),
('510', 'Tobias', '.', 'Schedlmeier'),
('520', 'Augusto', 'Nobita', ' Nobile'),
('530', 'Aishwarya ', 'S', 'Kamath'),
('531', 'Rajarshi', '.', 'Das'),
('540', 'Ahmed', '.', 'Abdelatty'),
('541', 'Pracheta ', '.', 'Sahoo'),
('550', 'Yanning', '.', 'Shen'),
('551', 'Geert ', '.', 'Leus'),
('552', 'Georgios', ' B', 'Giannakis'),
('560', 'Adel', ' M.', 'Alimi'),
('561', 'Onsa', '.', ' Lazzez'),
('570', 'Xiao-Yang ', '.', 'Liu'),
('571', 'Sem', '.', ' Borst'),
('580', 'Shahin', '.', ' Khobahi'),
('581', 'Naveed', '.', ' Naimipour'),
('582', 'Mojtaba ', '.', 'Soltanalian'),
('583', ' Yonina', ' C', 'Eldar'),
('590', 'Aliaksandr ', '.', 'Siarohin'),
('591', 'Gloria', '.', 'Zen'),
('592', 'Elisa', '.', 'Ricci'),
('60', 'Jake', 'Undercover', 'Peralta'),
('600', 'Ozsel ', '.', 'Kilinc'),
('601', 'Giovanni', 'Hannah', 'Montana'),
('610', 'Andrew', '.', 'Stirn'),
('611', 'Tony', '.', 'Jebara'),
('620', 'Yingcong', '.', 'Tan'),
('621', 'Andrew', '.', 'Delong'),
('622', 'Daria', '.', 'Terekhov'),
('70', 'Rakesh', 'H', 'R'),
('80', 'Florian', '.', 'Schroff'),
('81', 'Dmitry', '.', 'Kalenichenko'),
('82', 'James', '.', 'Philbin'),
('90', 'Wenting', '.', 'Jia');

-- --------------------------------------------------------

--
-- Table structure for table `Conference`
--

CREATE TABLE `Conference` (
  `ISBN` varchar(20) NOT NULL,
  `Location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Conference`
--

INSERT INTO `Conference` (`ISBN`, `Location`) VALUES
('423-7-1532-8726-1', 'Sevilla, Spain'),
('562-8-6823-8612-5', 'Reykjavic, Iceland'),
('912-4-5692-2312-3', 'Kyoto, Japan'),
('931-8-5982-2399-6', 'Brussels, France'),
('932-8-6825-2312-1', 'Oslo, Norway'),
('978-0-7695-5144-9', 'Miami, FL, USA'),
('978-1-4244-2095-7', 'Kunming, China'),
('978-1-4244-3702-3', 'Hebei, China'),
('978-1-4577-2134-2', 'Honolulu, HI, USA'),
('978-1-4673-6964-0', 'Boston, MA, USA'),
('978-1-5386-1418-1', 'Cancun, Mexico'),
('978-1-9435-8027-9', 'San Jose, CA, USA');

-- --------------------------------------------------------

--
-- Table structure for table `es_idlist`
--

CREATE TABLE `es_idlist` (
  `EID` varchar(20) NOT NULL,
  `ES_ID` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `es_idlist`
--

INSERT INTO `es_idlist` (`EID`, `ES_ID`) VALUES
('10.1109/ANCS.2017.33', '7HEDeWcB3366-Tm8umws'),
('2873251', 'BnGJfGcB3366-Tm8DG3j'),
('ko', 'BXGHeWcB3366-Tm8PG0g');

-- --------------------------------------------------------

--
-- Table structure for table `Keywords`
--

CREATE TABLE `Keywords` (
  `EID` varchar(50) NOT NULL,
  `Word` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Keywords`
--

INSERT INTO `Keywords` (`EID`, `Word`) VALUES
('1.4802/ECS.2018.8123658', 'Bayesian'),
('1.4802/ECS.2018.8123658', 'BIC'),
('1.4802/ECS.2018.8123658', 'DT'),
('1.4802/ECS.2018.8123658', 'LM'),
('1.4802/ECS.2018.8123658', 'SemiParametric'),
('10.1107/IJAI.2015.7298982', 'Artificial'),
('10.1107/IJAI.2015.7298982', 'Intelligence'),
('10.1107/IJAI.2015.7298982', 'Paradigm'),
('10.1109/ANCS.2017.33', 'crystal'),
('10.1109/ANCS.2017.33', 'Hilbert'),
('10.1109/ANCS.2017.33', 'Maths'),
('10.1109/ANCS.2017.33', 'Riemann'),
('10.1109/CCRC.2015.7298670', 'AI'),
('10.1109/CCRC.2015.7298670', 'Organizations'),
('10.1109/CCRC.2015.7298670', 'Reliable'),
('10.1109/CCRC.2015.7298670', 'Robust'),
('10.1109/CloudCom.2016.0107', 'Parsing'),
('10.1109/CloudCom.2016.0107', 'science'),
('10.1109/CloudCom.2016.0107', 'Semantic'),
('10.1109/CSAI.2015.7298069', 'Maths'),
('10.1109/CSAI.2015.72986198', 'Folding'),
('10.1109/CSAI.2015.72986198', 'Protein'),
('10.1109/CSAI.2015.72986198', 'Scratch'),
('10.1109/CVPR.2015.7298682', '128D'),
('10.1109/CVPR.2015.7298682', 'Embeddings'),
('10.1109/CVPR.2015.7298682', 'FaceNet'),
('10.1109/CVPR.2015.7298682', 'Image'),
('10.1109/CVPR.2015.7298682', 'Recognition'),
('10.1109/CVPR.2015.7298682', 'tripletLoss'),
('10.1109/CVSR.2015.7298884', 'Electronoptics'),
('10.1109/CVSR.2015.7298884', 'Laser'),
('10.1109/CVSR.2015.7298884', 'Mathematicalmodel'),
('10.1109/CVSR.2015.7298884', 'Opticalmixing'),
('10.1109/CVSR.2015.7298884', 'Opticalsaturation'),
('10.1109/CVSR.2015.7298884', 'Opticalscattering'),
('10.1109/CVSR.2015.7298884', 'Quantum'),
('10.1109/CVSR.2015.7298884', 'Quantumcascadelasers'),
('10.1109/ECAA.2015.7298699', 'Agents'),
('10.1109/ECAA.2015.7298699', 'ATL'),
('10.1109/ECAA.2015.7298699', 'CGS'),
('10.1109/ECAA.2015.7298699', 'Explicit'),
('10.1109/ICL.2011.6059578', 'Nash'),
('10.1109/ICL.2011.6059578', 'Positive'),
('10.1109/ICL.2011.6059578', 'Surface'),
('10.1109/ICMLA.2011.51', 'Graph'),
('10.1109/ICMLA.2011.51', 'Privacy'),
('10.1109/ICMLA.2011.51', 'Scalability'),
('10.1109/ICMLA.2013.66', 'Learning'),
('10.1109/ICMLA.2013.66', 'Machine'),
('10.1109/ICMLA.2013.66', 'Markov'),
('10.1109/ICMLA.2013.66', 'Network'),
('10.1109/ICMLA.2013.66', 'Pruning'),
('10.1109/ICMLA.2017.00016', 'Machinelearning'),
('10.1109/ICMLA.2017.00016', 'quantization'),
('10.1109/ICMLC.2016.4620548', 'Intelligent'),
('10.1109/ICMLC.2016.4620548', 'System'),
('10.1109/ICMLC.2016.4620548', 'Transport'),
('10.1109/IDBC.2017.5212227', 'CNN'),
('10.1109/IDBC.2017.5212227', 'DeepVisInterests'),
('10.1109/IDBC.2017.5212227', 'Image'),
('10.1109/IDBC.2017.5212227', 'Social'),
('10.1109/IJCA.2015.7295822', 'k-anonymity'),
('10.1109/IJCA.2015.7295822', 'l-diversity'),
('10.1109/IJCA.2015.7295822', 'p-sensitive'),
('10.1109/IJCA.2015.7295822', 'privacy'),
('10.1109/IJMLA.2018.00016', 'bayes'),
('10.1109/IJMLA.2018.00016', 'bayesian'),
('10.1109/IJMLA.2018.00016', 'learning'),
('10.1109/IJMLA.2018.00016', 'machine'),
('10.1109/IJMLA.2018.00016', 'Reinfocement'),
('10.1109/IJQP.2015.7298682', 'Conformal'),
('10.1109/IJQP.2015.7298682', 'Field-Theory'),
('10.1109/IJQP.2015.7298682', 'quantum'),
('10.1109/IJQP.2015.7298682', 'Signature'),
('10.1109/LCPR.2015.7298265', 'Branching-Time'),
('10.1109/LCPR.2015.7298265', 'Exponent'),
('10.1109/LCPR.2015.7298265', 'OTOC'),
('10.1109/LCPR.2015.7298265', 'SYK'),
('10.1109/MBST.2015.7298243', 'counting'),
('10.1109/MBST.2015.7298243', 'detection'),
('10.1109/MBST.2015.7298243', 'signal'),
('10.1109/MBST.2015.7298243', 'Traffic'),
('10.1109/MBST.2015.7298243', 'vehicle'),
('11.11019/IJMLA.2016.00016', 'bayes'),
('11.11019/IJMLA.2016.00016', 'bayesian'),
('11.11019/IJMLA.2016.00016', 'learning'),
('11.11019/IJMLA.2016.00016', 'machine'),
('11.11019/IJMLA.2016.00016', 'Thomson'),
('11.1109/IJMLA.2018.00016', 'learning'),
('11.1109/IJMLA.2018.00016', 'machine'),
('11.1109/IJMLA.2018.00016', 'noisy'),
('11.1109/IJMLA.2018.00016', 'Reinfocement'),
('12.1169/IJMLA.2018.00016', 'deep'),
('12.1169/IJMLA.2018.00016', 'optimization'),
('2.8372/GFJ.2017.2357213', 'First-Order'),
('2.8372/GFJ.2017.2357213', 'Higher-Order'),
('2.8372/GFJ.2017.2357213', 'Simplicity'),
('2.8372/GFJ.2017.2357213', 'Strategic'),
('2.8932/NEJ.2018.7882891', 'Draw'),
('2.8932/NEJ.2018.7882891', 'Mean'),
('2.8932/NEJ.2018.7882891', 'Period'),
('2.8932/NEJ.2018.7882891', 'Realization'),
('2873251', 'keys'),
('2873251', 'new'),
('2873251', 'paper'),
('3.0374/ICCF.2018.9276499', 'CVA'),
('3.0374/ICCF.2018.9276499', 'Finance'),
('3.0374/ICCF.2018.9276499', 'Network'),
('3.0374/ICCF.2018.9276499', 'Neural'),
('3.0374/ICCF.2018.9276499', 'Quantitative'),
('6.2301/ECPP.2017.9877654', 'Geometric'),
('6.2301/ECPP.2017.9877654', 'Hyperbolic'),
('6.2301/ECPP.2017.9877654', 'MERA'),
('6.7816/ICCF.2017.7277682', 'Asset'),
('6.7816/ICCF.2017.7277682', 'CVA'),
('6.7816/ICCF.2017.7277682', 'Vulnerable'),
('6.7816/ICCF.2017.7277682', 'WWR'),
('68.5292/CFJ.2018.9628682', 'Europe'),
('68.5292/CFJ.2018.9628682', 'Finance'),
('68.5292/CFJ.2018.9628682', 'Hedging'),
('9.1109/HEPJ.2015.7277682', 'Dilaton'),
('9.1109/HEPJ.2015.7277682', 'Einstein'),
('9.1109/HEPJ.2015.7277682', 'Maxwell'),
('9.1109/HEPJ.2015.7277682', 'T-violation'),
('9.1209/HEPJ.2018.7277689', 'Beltrami'),
('9.1209/HEPJ.2018.7277689', 'Differential'),
('9.1209/HEPJ.2018.7277689', 'Eigen'),
('ko', 'ml');

-- --------------------------------------------------------

--
-- Table structure for table `Login`
--

CREATE TABLE `Login` (
  `Author_ID` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Login`
--

INSERT INTO `Login` (`Author_ID`, `Password`) VALUES
('10', 'mbst'),
('100', 'mbst'),
('1000', 'mbst'),
('101', 'mbst'),
('110', 'mbst'),
('111', 'mbst'),
('112', 'mbst'),
('120', 'mbst'),
('130', 'mbst'),
('131', 'mbst'),
('132', 'mbst'),
('140', 'mbst'),
('150', 'mbst'),
('151', 'mbst'),
('152', 'mbst'),
('153', 'mbst'),
('160', 'mbst'),
('161', 'mbst'),
('170', 'mbst'),
('180', 'mbst'),
('190', 'mbst'),
('191', 'mbst'),
('20', 'mbst'),
('200', 'mbst'),
('201', 'mbst'),
('210', 'mbst'),
('211', 'mbst'),
('220', 'mbst'),
('221', 'mbst'),
('222', 'mbst'),
('230', 'mbst'),
('240', 'mbst'),
('250', 'mbst'),
('251', 'mbst'),
('30', 'mbst'),
('40', 'mbst'),
('50', 'mbst'),
('500', 'mbst'),
('501', 'mbst'),
('502', 'mbst'),
('503', 'mbst'),
('510', 'mbst'),
('520', 'mbst'),
('530', 'mbst'),
('531', 'mbst'),
('540', 'mbst'),
('541', 'mbst'),
('550', 'mbst'),
('551', 'mbst'),
('552', 'mbst'),
('560', 'mbst'),
('561', 'mbst'),
('570', 'mbst'),
('571', 'mbst'),
('580', 'mbst'),
('581', 'mbst'),
('582', 'mbst'),
('583', 'mbst'),
('590', 'mbst'),
('591', 'mbst'),
('592', 'mbst'),
('60', 'mbst'),
('600', 'mbst'),
('601', 'mbst'),
('610', 'mbst'),
('611', 'mbst'),
('620', 'mbst'),
('621', 'mbst'),
('622', 'mbst'),
('70', 'mbst'),
('80', 'mbst'),
('81', 'mbst'),
('82', 'mbst'),
('90', 'mbst');

-- --------------------------------------------------------

--
-- Table structure for table `Paper`
--

CREATE TABLE `Paper` (
  `EID` varchar(50) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Abstract` varchar(1000) NOT NULL,
  `DOI_Number` varchar(50) DEFAULT NULL,
  `ISBN` varchar(50) NOT NULL,
  `Object_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Stores Paper Metadata';

--
-- Dumping data for table `Paper`
--

INSERT INTO `Paper` (`EID`, `Title`, `Abstract`, `DOI_Number`, `ISBN`, `Object_ID`) VALUES
('1.4802/ECS.2018.8123658', 'LM-BIC Model Selection in Semiparametric Models', 'This paper studies model selection in semiparametric econometric models. It develops a consistent series-based model selection procedure based on a Bayesian Information Criterion (BIC) type criterion to select between several classes of models. The procedure selects a model by minimizing the semiparametric Lagrange Multiplier (LM) type test statistic from Korolev (2018) but additionally rewards simpler models. The paper also develops consistent upward testing (UT) and downward testing (DT) procedures based on the semiparametric LM type specification test', '1.4802/ECS.2018.8123658', '423-7-1532-8726-1', '5c06833f47398731a2116d62'),
('10.1107/IJAI.2015.7298982', 'Theory of Cognitive Relativity: A Promising Paradigm for True AI', 'The rise of deep learning has brought artificial intelligence (AI) to the forefront. The ultimate goal of AI is to realize a machine with human mind and consciousness, but existing achievements mainly simulate intelligent behavior on computer platforms. These achievements all belong to weak AI rather than strong AI. How to achieve strong AI is not known yet in the field of intelligence science', '10.1107/IJAI.2015.7298982', '932-8-5982-2312-6', '5c0665604739872c1d6284a2'),
('10.1109/ANCS.2017.33', 'A Riemann-Hilbert correspondence for Cartier crystals', 'For a variety X separated over a perfect field of characteristic p&gt;0 which admits an embedding into a smooth variety, we establish an anti-equivalence between the bounded derived categories of Cartier crystals on X and constructible Z/pZ-sheaves on the étale site Xét.', '10.1109/ANCS.2017.33', '978-1-5090-6386-4', '5c06675a47398725ff748899'),
('10.1109/CCRC.2015.7298670', 'Robust Artificial Intelligence and Robust Human Organizations', 'Every AI system is deployed by a human organization. In high risk applications, the combined human plus AI system must function as a high-reliability organization in order to avoid catastrophic errors. This short note reviews the properties of high-reliability organizations and draws implications for the development of AI technology and the safe application of that technology', '10.1109/CCRC.2015.7298670', '912-4-5692-2312-3', '5c066b7e4739872cab0bd7a4'),
('10.1109/CSAI.2015.7298069', 'Pseudotropical curves', 'We propose a generalization of tropical curves by dropping the rationality and integrality requirements while preserving the balancing condition. An interpretation of such curves as critical points of a certain quadratic functional allows us to settle the existence and uniqueness problem. The machinery of dual polygons and the intersection theory also generalize as expected.', '10.1109/CSAI.2015.7298069', '978-2-87487-006-4', '5c06647047398726c85cd4b2'),
('10.1109/CSAI.2015.72986198', 'FoldingZero: Protein Folding from Scratch in Hydrophobic-Polar Model', 'De novo protein structure prediction from amino acid sequence is one of the most challenging problems in computational biology. As one of the extensively explored mathematical models for protein folding, Hydrophobic-Polar (HP) model enables thorough investigation of protein structure formation and evolution. Although HP model discretizes the conformational space and simplifies the folding energy function, it has been proven to be an NP-complete problem', '10.1109/CSAI.2015.72986198', '932-8-5142-2378-7', '5c06636f47398725fe3e1d32'),
('10.1109/CVPR.2015.7298682', 'FaceNet: A Unified Embedding for Face Recognition and Clustering', 'Despite significant recent advances in the field of face recognition, implementing face verification and recognition efficiently at scale presents serious challenges to current approaches. In this paper we present a system, called FaceNet, that directly learns a mapping from face images to a compact Euclidean space where distances directly correspond to a measure of face similarity. Once this space has been produced, tasks such as face recognition, verification and clustering can be easily implemented using standard techniques with FaceNet embeddings as feature vectors.', '10.1109/CVPR.2015.7298682', '978-1-4673-6964-0', '5c0657ac47398725ff748882'),
('10.1109/CVSR.2015.7298884', 'Robust density matrix modeling of quantum cascade laser kinetics', 'We present an electron transport model for quantum-cascade lasers which naturally captures scattering-induced localization without a phenomenologically localized basis. Its numerical lightness enables the study of nonperturbative optical excitation and optical nonlinearity.', '10.1109/CVSR.2015.7298884', '978-1-9435-8027-9', '5c06612a47398726c900f382'),
('10.1109/ICL.2011.6059578', 'On the Nash problem for surfaces in positive characteristic', 'This paper seeks to prove the bijectivity of the &quot;Nash mapping&quot; from the set of irreducible components of the scheme parametrizing analytic arcs on an algebraic surface X whose origin is a singular point, into the set of irreducible components of the exceptional locus of a minimal desingularization X′ of X when the base field has positive characteristic.', '10.1109/ICL.2011.6059578', '978-1-4577-1747-5', '5c06691647398726c70da4a8'),
('10.1109/ICMLA.2011.51', 'Online Graph-Adaptive Learning with Scalability and Privacy', 'Graphs are widely adopted for modeling complex systems, including financial, biological, and social networks. Nodes in networks usually entail attributes, such as the age or gender of users in a social network', '10.1109/ICMLA.2011.51', '978-1-4577-2134-2', '5c066f154739872c1d6284a6'),
('10.1109/ICMLA.2013.66', 'Structure Learning Using Forced Pruning', 'Markov  networks  are  widely  used  in  many  Machine Learning  applications  including  natural  language  processing,  computer  vision,  and  bioinformatics  .  Learning  Markov  networks  have  many  complications  ranging from intractable computations involved to the possibility of', '10.1109/ICMLA.2013.66', '978-0-7695-5144-9', '5c066cea47398726c85cd4b6'),
('10.1109/ICMLA.2017.00016', 'Deep Signal Recovery with One-Bit Quantization', 'Machine learning, and more specifically deep learning, have shown remarkable performance in sensing, communications, and inference. In this paper, we consider the application of the deep unfolding technique in the problem of signal reconstruction from its one-bit noisy measurements. Namely, we propose a model-based machine learning method and unfold the iterations of an inference optimization algorithm into the layers of a deep neural network for one-bit signal recovery.', '10.1109/ICMLA.2017.00016', '978-1-5386-1418-1', '5c067e29473987305e272922'),
('10.1109/ICMLC.2016.4620548', 'Deep Reinforcement Learning for Intelligent Transportation Systems', 'ntelligent Transportation Systems (ITSs) are envisioned to play a critical role in improving traffic flow and reducing congestion, which is a pervasive issue impacting urban areas around the globe. Rapidly advancing vehicular communication and edge cloud computation technologies provide key enablers for smart traffic management.', '10.1109/ICMLC.2016.4620548', '978-1-4244-2095-7', '5c067b0b4739872d573d77b9'),
('10.1109/IDBC.2017.5212227', 'CNN-Ontology Prediction of Users Interests from Social Images', 'In this paper, we present a novel system named DeepVisInterests that performs the users interests prediction task from social visual data based on a deep neural approach for the ontology construction. A comprehensive statistical study have been made to validate our DeepVisInterests system. The proposed system is based on the construction of users interests ontology using a set of deep visual features in order to learn the semantic representation for the popular topics of interests defined by Facebook.', '10.1109/IDBC.2017.5212227', '978-1-4244-3702-3', '5c06718b4739872c1c0b8402'),
('10.1109/IJCA.2015.7295822', 'Survey on Recent Developments in Privacy Preserving Models', 'Privacy preserving in data mining is one of the major and increasingly interested area of research under data security. Privacy will be provided for data at different levels such as, while publishing the data, at the time of retrieving result by preserving sensitive data without disclosing it', '10.1109/IJCA.2015.7295822', '932-8-5142-2312-1', '5c065b9447398725ff748896'),
('10.1109/IJMLA.2018.00016', 'Enhancing Perceptual Attributes with Bayesian Style Generation', 'Deep learning has brought an unprecedented progress in computer vision and significant advances have been made in predicting subjective properties inherent to visual data (e.g., memorability, aesthetic quality, evoked emotions, etc.).', '10.1109/IJMLA.2018.00016', '988-1-5386-1420-1', '5c067fec4739872d5965670b'),
('10.1109/IJQP.2015.7298682', 'Signature of quantum chaos in operator entanglement in 2d CFTs', 'We study operator entanglement measures of the unitary evolution operators of (1+1)-dimensional conformal field theories (CFTs), aiming to uncover their scrambling and chaotic behaviors. In particular, we compute the bi-partite and tri-partite mutual information for various configurations of input and output subsystems, and as a function of time. We contrast three different CFTs: the free fermion theory, compactified free boson theory at various radii, and CFTs with holographic dual', '10.1109/IJQP.2015.7298682', '932-9-5143-2394-8', '5c066d704739872e4f2ac3e2'),
('10.1109/LCPR.2015.7298265', 'On the relation between the magnitude and exponent of OTOCs', 'We derive an identity relating the growth exponent of early-time OTOCs, the pre-exponential factor, and a third number called &quot;branching time&quot;. The latter is defined within the dynamical mean-field framework, namely, in terms of the retarded kernel. This identity can be used to calculate stringy effects in the SYK and similar models, we also explicitly define &quot;strings&quot; in this context', '10.1109/LCPR.2015.7298265', '932-8-6825-2312-1', '5c066ef047398725fd46ed02'),
('10.1109/MBST.2015.7298243', 'Real-time Vehicle Detection and Dynamic Traffic Light Prediction', 'The ever-increasing sale of vehicles and the steady increase in population density in metropolitan cities have raised many growing concerns, most importantly com- mute time, air and noise pollution levels. A sizeable portion of the traffic and road congestion can be solved by opting for more adaptive, dynamic traffic light systems, rather than fixed-time traffic signals', '10.1109/MBST.2015.7298243', '932-8-5142-2312-2', '5c065f8847398726c70da4a2'),
('12.1169/IJMLA.2018.00016', 'Deep Inverse Optimization', 'Given a set of observations generated by an optimization process, the goal of inverse optimization is to determine likely parameters of that process. We cast inverse optimization as a form of deep learning. Our method, called deep inverse optimization, is to unroll an iterative optimization process and then use backpropagation to learn parameters that generate the observations.', '12.1169/IJMLA.2018.00016', '943-1-5386-1418-6', '5c0686fd4739872d5965671e'),
('2.8932/NEJ.2018.7882891', 'A Game of Martingales', 'We consider a two player dynamic game played over T≤inf periods. In each period each player chooses any probability distribution with support on [0,1] with a given mean, where the mean is the realized value of the draw from the previous period. The player with the highest realization in the period achieves a payoff of 1, and the other player, 0; and each player seeks to maximize the discounted sum of his per-period payoffs', '2.8932/NEJ.2018.7882891', '235-8-5982-2348-7', '5c068154473987314a378692'),
('2873251', 'title of paper', 'abstract is here', '987654321', '932-8-5142-2374-2', '5c074e1747398732412cfed2'),
('3.0374/ICCF.2018.9276499', 'Neural Network for CVA: Learning Future Values', 'A new challenge to quantitative finance after the recent financial crisis is the study of credit valuation adjustment (CVA), which requires modeling of the future values of a portfolio. In this paper, following recent work in [Weinan E(2017), Han(2017)], we apply deep learning to attack this problem', '3.0374/ICCF.2018.9276499', '245-8-9834-7922-2', '5c067f074739872d59656702'),
('6.2301/ECPP.2017.9877654', 'Geometric interpretation of the multi-scale entanglement renormalization ansatz', 'The multi-scale entanglement renormalization ansatz (MERA) is a tensor network representation for ground states of critical quantum spin chains, with a network that extends in an additional dimension corresponding to scale. Over the years several authors have conjectured, both in the context of holography and cosmology, that MERA realizes a discrete version of some geometry. However, while one proposal argued that the tensor network should be interpreted as representing the hyperbolic plane, another proposal instead equated MERA to de Sitter spacetime', '6.2301/ECPP.2017.9877654', '562-8-6823-8612-5', '5c067ac447398726c900f384'),
('9.1209/HEPJ.2018.7277689', 'Eigenvalue equation for genus two modular graphs', 'We obtain a second order differential equation on moduli space satisfied by certain modular graph functions at genus two, each of which has two links. This eigenvalue equation is obtained by analyzing the variations of these graphs under the variation of the Beltrami differentials', '9.1209/HEPJ.2018.7277689', '652-8-7812-2378-7', '5c0671084739872d573d77b5'),
('ko', 'jij', 'koko', 'ko', '90-090--099', '5c06890547398732b86163c2');

-- --------------------------------------------------------

--
-- Table structure for table `Source`
--

CREATE TABLE `Source` (
  `ISBN` varchar(50) NOT NULL,
  `ISSN` varchar(50) DEFAULT NULL,
  `Volume` varchar(50) NOT NULL,
  `Issue_Number` varchar(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Impact_Factor` varchar(50) NOT NULL,
  `Cite_Score` varchar(50) NOT NULL,
  `Date_Publ` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Source`
--

INSERT INTO `Source` (`ISBN`, `ISSN`, `Volume`, `Issue_Number`, `Name`, `Impact_Factor`, `Cite_Score`, `Date_Publ`) VALUES
('235-8-5982-2348-7', '8611-7613', '24', '4', 'National Economic Journal', '6.9', '117', '2018-06-06'),
('237-0-4683-5271-1', '2345-1863', '65', '12', 'Golden Finance Journal', '19.5', '89', '2017-06-24'),
('245-8-9834-7922-2', '7828-8684', '73', '42', 'International Conference for Computational Finance', '8.3', '121', '2018-10-12'),
('423-7-1532-8726-1', '6561-7214', '23', '22', 'Economics Conference Spain', '7.7', '97', '2018-04-16'),
('562-8-6823-8612-5', '3451-9917', '62', '23', 'Elite Conference of Physics Pioneers', '10.1', '129', '2017-11-08'),
('652-8-7812-2378-7', '7927-9892', '55', '2', 'High Energy Physics Journal', '14.5', '78', '2018-11-20'),
('732-8-5142-6969-8', '7892-4714', '96', '25', 'High Energy Physics Journal', '14.3', '74', '2018-11-17'),
('813-4-9824-9921-3', '7731-1811', '56', '1', 'International Conference of Computational Finance', '18.4', '103', '2017-07-19'),
('823-0-5982-7629-1', '7927-9193', '73', '41', 'Computational Finance Journal', '14.0', '57', '2018-11-29'),
('90-090--099', '90i', '1', '1', 'kok', '0.1', '80', '2018-11-29'),
('912-4-5692-2312-3', '2189-784X', '22', '17', 'Central Conference of Robust Computing', '19.7', '88', '2018-11-28'),
('931-8-5982-2399-6', '7824-7567', '54', '2', 'Emerald Conference of Agents Analysis', '9.2', '52', '2018-11-28'),
('932-8-5142-2312-1', '2189-123X', '38', '9', 'International Journal of Computer Applications', '12', '75', '2012-01-09'),
('932-8-5142-2312-2', '1063-6902', '12', '34', 'May Be Some Thing', '15', '78', '2018-12-13'),
('932-8-5142-2374-2', '7872-9239', '2', '2', 'Journal of Databases', '30', '45', '2018-04-26'),
('932-8-5142-2378-7', '189-1872', '23', '7', 'Computer Science Journal of Artificial Intelligence', '8', '92', '2018-12-03'),
('932-8-5982-2312-6', '2139-129X', '79', '3', 'International Journal of Artificial Intelligence', '8.9', '68', '2018-12-01'),
('932-8-6825-2312-1', '6842-8794', '57', '43', 'Local Conference of Physics Research', '5.9', '87', '2018-06-08'),
('932-9-5143-2394-8', '9892-5732', '39', '2', 'International Journal of Quantum Physics', '13.7', '62', '2018-11-30'),
('943-1-5386-1418-6', '5386-9431', '1', '1', 'International Journal of Machine Learning Applications', '45', '34', '2018-12-06'),
('978-0-7695-5144-9', '9780-7695', '1', '2', '2013 12th International Conference on Machine Learning and Applications', '31.2', '34', '2013-12-04'),
('978-1-4244-2095-7', '2160-133X', '2', '2', '2016 International Conference on Machine Learning and Cybernetics', '50', '53', '2016-10-05'),
('978-1-4244-3702-3', '2160-133X', '2', '2', '20017 Conference on Databases Research', '33.9', '2', '2017-11-26'),
('978-1-4577-1747-5', '9781-4577', '20', '2', 'Francis and Taylor', '39', '54', '2018-12-01'),
('978-1-4577-2134-2', '7814-5772', '2', '2', '2018 17th International Conference on Machine Learning and Applications and Workshops', '56', '33', '2018-06-05'),
('978-1-4673-6964-0', '1063-6919', '32', '12', '2015 IEEE Conference on Computer Vision and Pattern Recognition (CVPR)', '11.8', '90', '2015-10-15'),
('978-1-5090-1445-3', '2330-2186', '45', '41', '2016 IEEE International Conference on Cloud Computing Technology and Science (CloudCom)', '28.3', '17', '2016-02-10'),
('978-1-5090-6386-4', '9781-5090', '2', '2', 'International Journal of Algebraic Geometry', '45', '31', '2018-11-25'),
('978-1-5386-1418-1', '3861-4181', '2', '2', '2017 16th IEEE International Conference on Machine Learning and Applications (ICMLA)', '45', '45', '2017-12-18'),
('978-1-5386-1419-5', '5986-1455', '1', '2', 'International Journal of Machine Learning Applications', '34', '42', '2016-09-07'),
('978-1-9435-8027-9', '0420-6969', '4', '5', '2017 Conference on Lasers and Electro-Optics (CLEO)', '11.2', '45', '2017-10-26'),
('978-2-87487-006-4', '3479-1973', '2', '3', 'Algebraic Geometry  Journal', '30', '30', '2018-12-02'),
('988-1-5386-1420-1', '9881-538X', '1', '2', 'International Journal of Machine Learning Applications', '22.8', '45', '2018-11-25'),
('989-1-5386-1428-1', '5386-X428', '2', '2', 'International Journal of Machine Learning Applications', '26', '34', '2018-11-27');

-- --------------------------------------------------------

--
-- Table structure for table `Written_By`
--

CREATE TABLE `Written_By` (
  `Nth_Author` int(1) NOT NULL,
  `Author_ID` varchar(20) NOT NULL,
  `EID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Written_By`
--

INSERT INTO `Written_By` (`Nth_Author`, `Author_ID`, `EID`) VALUES
(1, '100', '10.1109/IJCA.2015.7295822'),
(2, '101', '10.1109/IJCA.2015.7295822'),
(1, '110', '10.1109/CSAI.2015.72986198'),
(2, '111', '10.1109/CSAI.2015.72986198'),
(3, '112', '10.1109/CSAI.2015.72986198'),
(1, '120', '10.1107/IJAI.2015.7298982'),
(1, '130', '10.1109/ECAA.2015.7298699'),
(2, '131', '10.1109/ECAA.2015.7298699'),
(3, '132', '10.1109/ECAA.2015.7298699'),
(1, '140', '10.1109/CCRC.2015.7298670'),
(1, '150', '10.1109/IJQP.2015.7298682'),
(2, '151', '10.1109/IJQP.2015.7298682'),
(3, '152', '10.1109/IJQP.2015.7298682'),
(4, '153', '10.1109/IJQP.2015.7298682'),
(1, '160', '10.1109/LCPR.2015.7298265'),
(2, '161', '10.1109/LCPR.2015.7298265'),
(1, '170', '9.1109/HEPJ.2015.7277682'),
(1, '180', '9.1209/HEPJ.2018.7277689'),
(1, '190', '6.2301/ECPP.2017.9877654'),
(2, '20', '10.1109/MBST.2015.7298243'),
(1, '200', '68.5292/CFJ.2018.9628682'),
(2, '201', '68.5292/CFJ.2018.9628682'),
(1, '210', '3.0374/ICCF.2018.9276499'),
(2, '211', '3.0374/ICCF.2018.9276499'),
(1, '220', '6.7816/ICCF.2017.7277682'),
(2, '221', '6.7816/ICCF.2017.7277682'),
(3, '222', '6.7816/ICCF.2017.7277682'),
(1, '230', '2.8932/NEJ.2018.7882891'),
(1, '240', '1.4802/ECS.2018.8123658'),
(1, '250', '2.8372/GFJ.2017.2357213'),
(2, '251', '2.8372/GFJ.2017.2357213'),
(1, '30', '10.1109/MBST.2015.7298243'),
(3, '30', '2873251'),
(2, '30', 'ko'),
(3, '40', '10.1109/MBST.2015.7298243'),
(2, '40', '2873251'),
(1, '40', 'ko'),
(1, '500', '10.1109/CVSR.2015.7298884'),
(2, '501', '10.1109/CVSR.2015.7298884'),
(1, '502', '10.1109/CSAI.2015.7298069'),
(2, '503', '10.1109/CSAI.2015.7298069'),
(1, '510', '10.1109/ANCS.2017.33'),
(1, '530', '10.1109/CloudCom.2016.0107'),
(2, '531', '10.1109/CloudCom.2016.0107'),
(1, '540', '10.1109/ICMLA.2013.66'),
(2, '541', '10.1109/ICMLA.2013.66'),
(1, '550', '10.1109/ICMLA.2011.51'),
(2, '551', '10.1109/ICMLA.2011.51'),
(3, '552', '10.1109/ICMLA.2011.51'),
(1, '560', '10.1109/IDBC.2017.5212227'),
(1, '570', '10.1109/ICMLC.2016.4620548'),
(3, '582', '10.1109/ICMLA.2017.00016'),
(1, '590', '10.1109/IJMLA.2018.00016'),
(2, '591', '10.1109/IJMLA.2018.00016'),
(3, '592', '10.1109/IJMLA.2018.00016'),
(1, '600', '11.1109/IJMLA.2018.00016'),
(2, '601', '11.1109/IJMLA.2018.00016'),
(1, '610', '11.11019/IJMLA.2016.00016'),
(2, '611', '11.11019/IJMLA.2016.00016'),
(1, '620', '12.1169/IJMLA.2018.00016'),
(2, '621', '12.1169/IJMLA.2018.00016'),
(3, '622', '12.1169/IJMLA.2018.00016'),
(1, '70', '2873251'),
(1, '80', '10.1109/CVPR.2015.7298682'),
(2, '81', '10.1109/CVPR.2015.7298682'),
(3, '82', '10.1109/CVPR.2015.7298682');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admins`
--
ALTER TABLE `Admins`
  ADD PRIMARY KEY (`Author_ID`);

--
-- Indexes for table `Author`
--
ALTER TABLE `Author`
  ADD PRIMARY KEY (`Author_ID`);

--
-- Indexes for table `Conference`
--
ALTER TABLE `Conference`
  ADD PRIMARY KEY (`ISBN`);

--
-- Indexes for table `es_idlist`
--
ALTER TABLE `es_idlist`
  ADD PRIMARY KEY (`EID`,`ES_ID`);

--
-- Indexes for table `Keywords`
--
ALTER TABLE `Keywords`
  ADD PRIMARY KEY (`EID`,`Word`);

--
-- Indexes for table `Login`
--
ALTER TABLE `Login`
  ADD PRIMARY KEY (`Author_ID`);

--
-- Indexes for table `Paper`
--
ALTER TABLE `Paper`
  ADD PRIMARY KEY (`EID`);

--
-- Indexes for table `Source`
--
ALTER TABLE `Source`
  ADD PRIMARY KEY (`ISBN`);

--
-- Indexes for table `Written_By`
--
ALTER TABLE `Written_By`
  ADD PRIMARY KEY (`Author_ID`,`EID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
