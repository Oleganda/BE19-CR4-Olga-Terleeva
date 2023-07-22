-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 22, 2023 at 10:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BE19_CR4_OlgaTerleeva_BigLibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `BOOKS`
--

CREATE TABLE `BOOKS` (
  `ID` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `image` varchar(3000) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `short_description` text NOT NULL,
  `author_first_name` varchar(300) NOT NULL,
  `author_last_name` varchar(300) NOT NULL,
  `publisher_address` varchar(100) DEFAULT NULL,
  `publisher_name` varchar(100) NOT NULL,
  `publish_date` varchar(30) DEFAULT NULL,
  `availability` int(5) DEFAULT NULL,
  `publisher_id` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `BOOKS`
--

INSERT INTO `BOOKS` (`ID`, `title`, `image`, `type`, `short_description`, `author_first_name`, `author_last_name`, `publisher_address`, `publisher_name`, `publish_date`, `availability`, `publisher_id`) VALUES
(8, 'The Truth about the Harry Quebert Affair', 'book4.jpg', 'Book and Audio Book', 'The twenty-eight-year-old writer, whose debut novel has sold two million copies. But when it comes time to produce a new book, he is sidelined by a crippling case of writer\'s block. He travels to Somerset, New Hamprshire, to see his mentor, Harry Quebert, one of the country\'s most respected writers, hoping to jar his creative juices as his publisher\'s deadline looms. But Marcus\'s plans are upended when Harry is sensationally implicated in a cold-case murder: Fifteen-year-old Nola Kellergan went missing in 1975, and Harry admits to having had an affair with her.', 'Joël ', 'Dicker', 'New York', 'Penguin Books', 'May 2014', 1, '123'),
(9, 'Southern Aurora', 'book5.jpg', 'Book and Audio Book', 'Jimmy is a kid growing up fast on the poorest street in town. He tries to do everything right and look out for his mum and his younger brother. His older brother is in jail, so it\'s up to Jimmy to hold things together. But small-town life is unforgiving if you\'re from the other side of the tracks.If only his mum didn\'t drink so much.If only he could win the school billycart race.If only his best friend understood.If only he could stop his mum\'s boyfriend from getting angry.If only he was there.If only he could stop his mum\'s boyfriend from getting angry.If only he was there.', 'Mark', 'Brandi', 'Australia', 'Hachette Australia', 'May-2019', 0, '345'),
(10, 'The Daughters of Madurai', 'book6.jpg', 'Book', 'Madurai, 1992. A young mother in a poor family, Janani is told she is useless if she can\'t produce a son - or worse, bears daughters. They let her keep her first baby girl, but the rest are taken away as soon as they are born. But Janani can\'t forget the daughters she was never allowed to love. Sydney, 2019. Nila has a secret. Before she can say anything, her grandfather in India falls ill and she agrees to join her parents on a trip to Madurai. Nila knows little about where she or her family came from, or who they left behind. What she\'s about to learn will change her forever...', 'Rajasree ', 'Variyar', 'Australia', 'Hachette Australia', 'May-2021', 4, '345'),
(11, 'Broken Light', 'book7.jpg', 'Book', 'Bernie Moon has given her life to other people: her husband, her son, her friends. At nineteen she was full of dreams and ambitions; now almost fifty, and going through the menopause, she\'s fading, fast. She often feels like she\'s losing her mind.But when a young woman is murdered in a local park, it sparks a series of childhood memories in Bernie and with them, a talent that has lain dormant most of her adult life.She promised herself she\'d never think of it again. But now she\'s older, could it be the power she\'s been missing?', 'Joanne ', 'Harris', 'Australia', 'Hachette Australia', 'June-2020', 10, '345'),
(12, 'The Enigma of Room 622', 'book8.jpg', 'Book', 'A writer named Joël, flees to the Hôtel. Disheartened over a recent breakup and his longtime publisher’s death, Joël hopes to rest. But his plans quickly go away. It all starts with a seemingly innocuous detail: at the Verbier, no room 622. Before long, Joël and fellow guest Scarlett uncover a long-unsolved murder that transpired in the hotel\'s room 622. The attendant circumstances: the succession of Switzerland’s largest private bank, a mysterious counterintelligence operation called P-30, and a most disreputable sabotage of hotel hospitality.', 'Joël ', 'Dicker ', 'New York', 'Penguin Books', 'September-2022', 0, '123'),
(13, 'Us Against You', 'book1.jpg', 'Book', 'A small community tucked deep in the forest, Beartown is home to tough people who don’t expect life to be easy or fair. No matter how difficult times get, they’ve always been able to take pride in their local ice hockey team. So it’s a cruel blow when they hear that Beartown ice hockey might soon be disbanded. What makes it worse is the obvious satisfaction that all the former Beartown players, who now play for a rival team in the neighboring town of Hed, take in that fact. As the tension mounts between the two adversaries, a newcomer arrives who gives Beartown hockey a surprising new coach.', 'Fredrik ', 'Backman', 'USA', 'Washington Press', 'May 2019', 0, '678'),
(14, 'Anxious People', 'book9.jpg', 'Book', 'It\'s New Year\'s Eve and House Tricks estate agents are hosting an open viewing in an up-market apartment when an incompetent bank robber rushes in and politely takes everyone hostage.\r\nFor Anna-Lena and Roger, busy buying-up apartments to fill the hole in their marriage, it\'s something else to talk/\r\nWhile 87-year-old grandmother Estelle seems rather pleased by the company\r\nAs the police gather outside, the anxious strangers huddled within try to make the best of a very sticky situation - but could it be that they have a whole lot more in common than meets the eye?', 'Fredrik', 'Backman', 'USA', 'Washington Press', 'August-2021', 1, '678'),
(15, 'City of Girls', 'photo10.jpg', 'Book', 'In 1940, nineteen-year-old Vivian Morris has just been kicked out of Vassar College, owing to her lackluster freshman-year performance. Her affluent parents send her to Manhattan to live with her Aunt Peg, who owns a flamboyant, crumbling midtown theater called the Lily Playhouse. There Vivian is introduced to an entire cosmos of unconventional and charismatic characters, from the fun-chasing showgirls to a sexy male actor, a grand-dame actress, a lady-killer writer, and no-nonsense stage manager. But when Vivian makes a personal mistake that results in professional scandal.', 'Elizabeth ', 'Gilbert ', 'USA', 'Riverhead Books', 'June-2020', 1, '321'),
(16, 'The Signature of All Things', 'book10.jpg', 'Book and Audio Book', 'In The Signature of All Things, Elizabeth Gilbert returns to fiction, inserting her inimitable voice into an enthralling story of love, adventure and discovery. Spanning much of the eighteenth and nineteenth centuries, the novel follows the fortunes of the extraordinary Whittaker family as led by the enterprising Henry Whittaker—a poor-born Englishman who makes a great fortune in the South American quinine trade, eventually becoming the richest man in Philadelphia. Born in 1800, Henry’s brilliant daughter, Alma (who inherits both her father’s money and his mind), ultimately becomes a botanist.', ' Elizabeth ', 'Gilbert ', 'USA', 'Riverhead Books', 'June-2015', 0, '321'),
(17, 'Big Magic', 'book11.jpg', 'Book', 'Readers of all ages and walks of life have drawn inspiration and empowerment from Elizabeth Gilbert’s books for years. Now this beloved author digs deep into her own generative process to share her wisdom and unique perspective about creativity. With profound empathy and radiant generosity, she offers potent insights into the mysterious nature of inspiration. She asks us to embrace our curiosity and let go of needless suffering. She shows us how to tackle what we most love, and how to face down what we most fear. She discusses the attitudes, approaches, and habits we need in order to live our most creative lives. ', ' Elizabeth ', 'Gilbert', 'New York', 'Penguin Books', 'September-2016', 0, '123'),
(20, 'The Knitting Circle', 'book12.jpg', 'Book ', 'After the loss of her only child, Mary Baxter finds herself unable to read or write, the activities that used to be her primary source of comfort. She reluctantly joins a knitting circle as a way to fill her lonely days-not knowing it will change her life. As they teach Mary new knitting techniques, the women in the circle also reveal their own secrets of loss, love, and hope. With time, Mary is finally able to tell her own story of grief, and in so doing finds the spark of life again.', 'Ann', 'Hood', 'Austria', 'Zervus Publish', 'May-2023', 1, '543');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BOOKS`
--
ALTER TABLE `BOOKS`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `BOOKS`
--
ALTER TABLE `BOOKS`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
