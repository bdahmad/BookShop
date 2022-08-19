-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2021 at 09:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `superadmin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `superadmin`) VALUES
(1, 'admin@gmail.com', '$2y$10$x8GjzxNk/JK/qAveg6ELuOZ0mnPcP/hiPwHkJzpE8EHoOzUYL2HqC', 1);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `author` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(5) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `publisher`, `price`, `description`, `category`, `image`) VALUES
(1, 'Making Comics', 'Lynda Barry', 'Drawn and Quarterly', '2482 BDT', 'Hello students, meet Professor Skeletor. Be on time, don t miss class, and turn off your phones. No time for introductions, we start drawing right away. The goal is more rock, less talk, and we communicate only through images. For more than five years the', '1', '1.JPG'),
(2, 'Trickster: Native American Tales: A Graphic Collection', 'Matt Dembicki', '	Fulcrum Group', '2558 BDT', 'This extraordinary graphic novel depicts traditional Native American trickster tales with inspired artists and native writers.', '1', '2.JPG'),
(3, 'Marvel Studios Visual Dictionary', 'Adam Bray', '	DK ', '2948 BDT', 'Join Captain America, Thor, Iron Man, Black Widow, and the Guardians of the Galaxy on a stunning journey through the Marvel Cinematic Universe! DK is bringing its expertise in creating beautiful illustrated non-fiction to this modern pop culture phenomeno', '1', '3.JPG'),
(4, 'The Comic Book Story of Professional Wrestling: A Hardcore, High-Flying, No-Holds-Barred History of the One True Sport', 'Aubrey, Moreno, Chris Sitterson', 'Ten Speed Press', '1450 BDT', 'From the host of the critically acclaimed pro wrestling podcast Straight Shoot , this graphic novel history of wrestling features the key grapplers, matches, and promotions that shaped this beloved sport and form of entertainment. As a pop culture phenome', '1', '4.JPG'),
(5, 'Cult Fiction: Art & Comics', 'Laylah Ali, Marcel Dzama, Julie Doucet', '	Hayward Gallery ', '2167 BDT', 'The comic book, the cartoon strip and the single-panel gag are recurring motifs in twentieth-century art, providing a platform for narrative, political critique, graphic clarity, and, of course, fun. \"Cult Fiction: Art & Comics\" examines the work of artis', '1', '5.JPG'),
(6, 'My Neighbor Totoro Film Comic, Vol. 1', 'Hayao Miyazaki', ' Viz Media, Subs. of Shogakukan Inc', '1500 BDT', 'Eleven-year-old Satsuki and her sassy little sister Mei are overjoyed about moving into a historic country house with their dad - but the girls don\'t realise what a delightful adventure awaits them there. While exploring their sprawling home and the beaut', '1', '6.JPG'),
(7, 'SpongeBob Comics: Book 1: Silly Sea Stories', 'Stephen Hillenburg , Contributions by  Chris Duffy', 'Abrams', '1202 BDT', 'Who lives in a pineapple under the sea? SpongeBob SquarePants! SpongeBob Comics: Silly Sea Stories is a collection of previously published material specially curated by SpongeBob creator Stephen Hillenburg and some of the biggest names in comics. Silly Se', '1', '7.JPG'),
(8, 'Batman Detective Comics Vol. 1', 'Tony S. Daniel', 'DC Comics', '1702 BDT', 'A New York Times Bestseller! As a part of the acclaimed DC Comics\n- The New 52 event of September 2011, Detective Comics is\nrelaunched for the first time ever with an all-new number #1! With the first\nseven, hard-hitting issues from acclaimed writer/artis', '1', '8.JPG'),
(9, 'My Neighbor Totoro Film Comic, Vol. 2', 'Hayao Miyazaki', 'Viz Media, Subs. of Shogakukan Inc', '1402 BDT', 'Eleven-year-old Satsuki and her sassy little sister Mei are overjoyed about moving into a historic country house with their dad - but the girls don\'t realise what a delightful adventure awaits them there. While exploring their sprawling home and the beaut', '1', '9.JPG'),
(10, 'Perspective! For Comic Book Artists', 'David Chelsea', 'Watson-Guptill Publications', '2202 BDT', 'This clever book teaches artists the unique skill of drawing perspective for spectacular landscapes, fantastic interiors, and other wildly animated backgrounds to fit comic-strip panels.', '1', '10.JPG'),
(11, 'The Best American Comics 2017 (The Best American Series )', '', 'Watson-Guptill Publications', '2202 BDT', 'This clever book teaches artists the unique skill of drawing perspective for spectacular landscapes, fantastic interiors, and other wildly animated backgrounds to fit comic-strip panels.', '1', '11.JPG'),
(12, 'Fuzzy Thinking: The New Science of Fuzzy Logic', 'Bart Kosko', 'Hyperion Books (Unknown)', '1176 BDT', 'A washing machine that gauges each load to determine how much soap to use? An air conditioner that constantly adjusts cooling strength based on room temperature? These \"smart\" products are possible with the advent of \"fuzzy logic\", the principle that\'s re', '2', '12.JPG'),
(13, 'A Complete Introduction to the Field: Fuzzy Systems Theory and Its Applications', 'Kiyoji Asai, Michio Sugeno, Toshiro Terano', 'Academic Press (Unknown)', '1515 BDT', 'Fuzzy systems is a mathematical framework for dealing with uncertain, ambiguous, and approximate information. An alternative to traditional binary logic, fuzzy logic has proved to be better suited to solving complex, real world programming problems.**This', '2', '13.JPG'),
(14, 'Foundations of Neuro-Fuzzy Systems', 'Detlef Nauck, F. Klawonn, Frank Klawonn', 'John Wiley & Sons (Unknown)', '1111 BDT', 'This volume seeks to reflect the trend in intelligent systems research towards the integration of neural networks and fuzzy technology. Systems exploiting these two techniques have the advantage of becoming both smarter and more applicable. The book expla', '2', '14.JPG'),
(15, 'Competitive Programming ', 'Steven Halim', 'Lulu Press', '7176 BDT', 'Competitive programming is a mind sport usually held over the Internet or a local network, involving participants trying to program according to provided ...', '2', '15.JPG'),
(16, 'Digital Design ', 'M. Morris Mano', 'Pearson', '1258 BDT', 'Digital design is a general term that is more relevant now than ever before. Put simply, any kind of design that appears in a digital format (on an app or website), rather than in print (on a physical page), is considered digital design.', '2', '16.JPG'),
(17, 'Applications of Fuzzy Logic', 'Mohammad Jamshidi, Lofti A. Zadeh, Andre Titli', 'Prentice Hall (Unknown)', '1700 BDT', 'Every year, Captain Kangaroo sets the contestants on their way in the great balloon race. All the animals are there the platypus, the wombats, the koalas and the emus are all there. But when the contestants bump into a dust cloud, Captain Kangaroo has to ', '2', '17.JPG'),
(18, 'New Perspectives on Microsoft Office 2007, Brief', 'Ann Shaffer, Patrick Carey, Kathy T. Finnegan', 'Course Technology (Jun. 30th, 2007)', '1951 BDT', 'Following the critical thinking, problem-solving approach of the New Perspectives Series learners will gain a comprehensive understanding of Microsoft Office 2007, including the new features of the software. The case-based tutorials challenge learners to ', '2', '18.JPG'),
(19, 'New Perspectives on Microsoft Office Excel 2003, Comprehensive - 2nd Edition', 'June Jamnich Parsons, Dan Oja, Patrick Carey', 'Course Technology (Feb. 28th, 2005)', '2286 BDT', 'Part of the New Perspectives series, this text offers a case-based, problem-solving approach and innovative technology for meaningful learning of Microsoft Excel 2003. This Second Edition has been updated to include basic to more advanced features of Exce', '2', '19.JPG'),
(20, 'Mastering AutoCAD 14 [With Contains Utilities for Use with AutoCAD...]', 'George Omura', 'Sybex (Unknown)', '3392 BDT', 'A bestselling and most comprehensive AutoCAD just got better. In this premium edition, readers get the solid foundation of \"Mastering AutoCad 14\", plus additional coverage on the most important advanced topics, including VBA programming. The CD-ROM offers', '2', '20.JPG'),
(21, 'Microsoft Exchange Server 2010 Administrator\'s Pocket Consultant', 'William R. Stanek', 'Microsoft Press (Nov. 1st, 2009)', '1387 BDT', 'Portable and precise, this pocket-sized guide delivers immediate answers for the day-to-day administration of Exchange Server 2010. Zero in on core support and maintenance tasks using quick-reference tables, instructions, and lists. You\'ll get the focused', '2', '21.JPG'),
(22, 'Greenlights : Raucous stories and outlaw wisdom from the Academy Award-winning actor', 'Matthew McConaughey', 'Headline Publishing Group', '2924 BDT', 'From the Academy Award (R)-winning actor, an unconventional memoir filled with raucous stories, outlaw wisdom, and lessons learned the hard way about living with greater satisfaction.\n\nI\'ve been in this life for fifty years, been trying to work out its ri', '3', '22.JPG'),
(23, 'The Boy Who Made Everyone Laugh', 'Helen Rutter', 'Scholastic', '1500 BDT', 'Very funny, very touching, very truthful - a total delight\nto read.\' Jacqueline Wilson\nAmazing\' Noel Fielding\nA laugh-out-loud, against-all-odds triumph of a story:\nthe funniest debut of 2021\n\n\nBilly Plimpton is an eleven-year-old boy with a big\ndream.', '3', '23.JPG'),
(24, 'Monolithic Undertow : In Search of Sonic Oblivion', ' Harry Sword', 'Orion Publishing Co', '2880 BDT', 'An inspired and intuitive navigation of the drone continuum . . . with a compass firmly set to new and enlightening psychedelic truths\' BECK\n\nMonolithic Undertow alights a crooked path across musical, religious and subcultural frontiers. It traces the lin', '3', '24.JPG'),
(25, 'The Artist\'s Way : A Spiritual Path to Higher Creativity', 'Julia Cameron', 'Profile Books Ltd', '2664 BDT', 'I love it. A practical, spiritual, nurturing book.\' - Russell Brand\n\nTHE MULTI-MILLION-COPY WORLDWIDE BESTSELLER\n\nSince its first publication, The Artist\'s Way has inspired the genius of Elizabeth Gilbert, Tim Ferriss, Reese Witherspoon, Kerry Washington ', '3', '25.JPG'),
(26, 'Heroes\' Feast (Dungeons and Dragons) : The Official D and D Cookbook', 'Kyle Newman , Jon Peterson', 'Random House USA Inc', '4358 BDT', 'NEW YORK TIMES BESTSELLER - 80 recipes inspired by the magical world of Dungeons & Dragons \"Ready a tall tankard of mead and brace yourself for a culinary journey to match any quest!\"--Tom Morello, Rage Against the Machine From the D&D experts behind Dung', '3', '26.JPG'),
(27, 'Blue-Eyed Son : The story of an adoption', ' Nicky Campbell', 'Pan MacMillan', '2889 BDT', 'From the presenter of ITV1\'s Long Lost Family and the bestselling author of One of the Family, comes a moving and honest book about Nicky Campbell\'s own search for his birth parents.\n\n\'Blue-Eyed Son is a personal history, but its themes - family, self-ide', '3', '27.JPG'),
(28, 'Unfuck Your Brain : Using Science To Get Over Anxiety, Depression, Anger, Freak-Outs, and Triggers', ' Faith G. Harper', 'Microcosm Publishing', '1342 BDT', 'A no-nonsense and helpful guide on how to cope with a slew of mental-health issues that are hellbent on ruining the lives of millions of people worldwide. Our brains do their best to help us out, but every so often they can be real assholes--having melt d', '3', '28.JPG'),
(29, 'Avatar: The Last Airbender# The Promise Library Edition', 'Gene Luen Yang', 'Milwaukee, United States', '5851 BDT', 'The Avatar\'s adventures continue right where the TV series left off, in this beautiful oversized hardcover of The Promise, from Airbender creators Michael Dante DiMartino and Bryan Konietzko and Eisner and Harvey Award winner Gene Luen Yang! Aang and frie', '3', '29.JPG'),
(30, 'Apropos of Nothing', 'Woody Allen', 'Skyhorse Publishing', '3561 BDT', 'The long-awaited, enormously entertaining memoir by one of the great artists of our time.\n\nIn this candid and often hilarious memoir, the celebrated director, comedian, writer, and actor offers a comprehensive, personal look at his tumultuous life. Beginn', '3', '30.JPG'),
(31, 'In the Blink of An Eye : New Edition', 'Walter Murch', 'Silman-James Press,U.S.', '1500 BDT', 'In the Blink of an Eye is celebrated film editor Walter Murch\'s vivid, multifaceted, thought -- provoking essay on film editing. Starting with what might be the most basic editing question -- Why do cuts work? -- Murch treats the reader to a wonderful rid', '3', '31.JPG'),
(32, 'The Balanced Body', 'Donald W. Scheumann', 'Lippincott Williams & Wilkins', '1553 BDT', 'The Balanced Body, Third Edition provides a systematic training program for deep tissue and neuromuscular therapy and other massage modalities. Lessons cover sequential, progressive massage therapy for the entire body to help practitioners create an integ', '4', '32.jpg'),
(33, 'Massage for the Hospital Patient and Medically Frail Client', 'Gayle MacDonald', 'Lippincott Williams & Wilkins', '1464 BDT', 'This is an essential resource for learning massage in the acute care setting. As the need for massage in hospitals has grown, many massage therapists and massage students are developing their skills in this environment to broaden their practice and meet m', '4', '33.jpg'),
(34, 'Fitness Through Aerobics - 8th Edition', 'Jan Galen Bishop', 'Benjamin-Cummings Publishing Company', '1182 BDT', 'Reflecting current popular topics in aerobic fitness, Fitness Through Aerobics, 8/e covers a broad array of issues that speak to a wide range of aerobics instructors, and will engage readers of every background and discipline. Bishop teaches steps and met', '4', '34.jpg'),
(35, 'Pilates Para Todos', 'Denise Austin', 'Alfaguara (Mar. 31st, 2004)', '1722 BDT', 'Stand a full inch taller, lose inches off your waist and thighs, and feel more energetic than ever. Pilates sculpts and stretches every muscle in your body through a unique series of fluid, yoga like exercises, without stress or strain. It has emerged as ', '4', '35.jpg'),
(36, 'The Interval Training Workout: Build Muscle and Burn Fat with Anaerobic Exercise', 'Joseph T. Nitti, Kimberlie Nitti, Carl Lewis', 'Hunter House Publishers (May. 18th, 2001)', '1089 BDT', 'A doctor and a certified trainer present a simple, proven fitness program used by athletes that can benefit anyone. The book also offers customizable programs and tips for assessing performance and tracking progress. 40 photos.', '4', '36.jpg'),
(37, 'Don\'t Kill the Birthday Girl: Tales from an Allergic Life', 'Sandra Beasley', 'Broadway Books (Apr. 3rd, 2012)', '834 BDT', 'A beautifully written and darkly funny journey through the world of the allergic. Like twelve million other Americans, Sandra Beasley suffers from food allergies. Her allergies--severe and lifelong--include dairy, egg, soy, beef, shrimp, pine nuts, cucumb', '4', '37.jpg'),
(38, 'Candida Albicans Yeast-Free Cookbook: How Good Nutrition Can Help Fight the Epidemic of Yeast-Related Diseases', 'Pat Connolly, Price-Pottenger Nutrition Foundation, Beatrice Trum Hunter', 'McGraw-Hill Companies (Unknown)', '1013 BDT', 'This is the complete, authoritative guide that shows how nutrition can fight the epidemic of yeast- and fungus-related diseases and disorders including asthma, bronchitis, depression, fatigue, and memory loss. Fully updated, this second edition includes d', '4', '38.jpg'),
(39, 'Vibrational Medicine: The #1 Handbook for Subtle-Energy Therapies', 'Richard Gerber, William A. Tiller, Gabriel Cousens', 'Bear & Company (Mar. 1st, 2001)', '1945 BDT', 'In this revised and updated third edition, Dr. Gerber provides an encyclopedic treatment of energetic healing, covering subtle-energy fields, acupuncture, Bach flower remedies, homeopathy, radionics, crystal healing, electrotherapy, radiology, chakras, me', '4', '39.jpg'),
(40, 'Floral Acupuncture: Applying the Flower Essences of Dr. Bach to Acupuncture Sites', 'Deborah Craydon, Warren Bellows', 'Crossing Press (Jul. 1st, 2005)', '1642 BDT', 'Certified flower essence practitioner Deborah Craydon and licensed acupuncturist Warren Bellows combine their expertise to present an innovative and highly effective holistic method to treat body, mind, and spirit. By applying flower essences (in place of', '4', '40.jpg'),
(41, 'Smart Medicine for Healthier Living: A Practical A-To-Z Reference to Natural and Conventional Treatments', 'Janet Zand, Allan N. Spreen, James B. LaValle', 'Avery Publishing Group (May. 1st, 1999)', '1691 BDT', 'This valuable home reference brings together reliable information from both natural and healing traditions in an easy-to-use A-to-Z guide. Illustrations & charts.', '4', '41.jpg'),
(42, 'The White Nile', 'Alan Moorehead', 'Harper Perennial (Oct. 17th, 2000)', '1112 BDT', 'Relive all the thrills and adventure of Alan Moorehead\'s classic bestseller The White Nile -- the daring exploration of the Nile River in the second half of the 19th century, which was at that time the most mysterious and impenetrable region on Earth. Cap', '5', '42.jpg'),
(43, 'Kaffir Boy: The True Story of a Black Youth\'s Coming of Age in Apartheid South Africa', 'Mark Mathabane', 'Free Press (Oct. 7th, 1998)', '1036 BDT', 'Written with courage and conviction, Mark Mathbane\'s reveals the extraordinary memoir of growing up in a world under apartheid. B&W photo insert.', '5', '43.jpg'),
(44, 'Scribbling the Cat: Travels with an African Soldier', 'Alexandra Fuller', 'Penguin Books (Apr. 26th, 2005)', '859 BDT', 'Now in paperback, the author of \"Don\'t Let\'s Go to the Dogs Tonight\" travels into a modern-day \"Heart of Darkness.\"', '5', '44.jpg'),
(45, 'The History of South Africa', 'Roger B. Beck, Peter Pierson', 'Greenwood (Jun. 1st, 2000)', '1385 BDT', 'To quote the title of Nelson Mandela\'s 1994 autobiography, it has been a long walk to freedom. The history of South Africa, one of the oldest inhabited places on earth, is also the story of one of the newest nations, made and remade over the last century.', '5', '45.jpg'),
(46, 'Scenic South Africa', 'Sean Fraser', 'Jonathan Ball Publishers (Sep. 1st, 2009)', '1633 BDT', 'A collection of the most scenic areas of South Africa', '5', '46.jpg'),
(47, 'The Storied City: The Quest for Timbuktu and the Fantastic Mission to Save Its Past', 'Charlie English', 'Riverhead Books (May. 2nd, 2017)', '1328 BDT', 'Two tales of a city: The historical race to discover one of the world s most mythologized places, and the story of how a contemporary band of archivists and librarians, fighting to save its ancient manuscripts from destruction at the hands of al Qaeda, ad', '5', '47.jpg'),
(48, 'DK Eyewitness Travel Guide New England', 'DK Travel', 'DK Eyewitness Travel (Aug. 20th, 2019)', '1847 BDT', 'This guide leads readers straight to the best attractions the breathtaking region of New England has to offer. Packed with stunning photography, illustrations, and detailed maps, this fully updated guide helps readers discover the Northeast state by state', '5', '48.jpg'),
(49, 'Insight Guides Brazil (Travel Guide with Free eBook)', 'Insight Guides', 'Insight Guides (Aug. 1st, 2019)', '2986 BDT', 'Including a free app and ebook, each of these guides contain in-depth insider information on all the must-see, top attractions and hidden cultural gems found in each destination. Packed with full-color photos, maps, and useful planning tips.', '5', '49.jpg'),
(50, 'L.A. Confidential', 'Manohla Dargis', 'British Film Institute (Aug. 4th, 2003)', '1948 BDT ', 'Book on neo-noir thriller shimmering with melancholy glamour of Los Angeles.', '5', '50.jpg'),
(51, 'My First Travels in North America', 'Isabella Lucy Bird, Clarence C. Strowbridge', 'Dover Publications (May. 20th, 2010)', '1665 BDT', 'One of the 19th century\'s most adventurous travel writers offers vivid accounts of her adventurous journeys through Canada and the United States, from scenic vistas to dark encounters with cholera and slavery.', '5', '51.jpg'),
(52, 'Hot Blood: Tales of Provocative Horror (Hot Blood )', 'Jeff Gelb, Lonn Friend', 'Pocket Books (Unknown)', '876 BDT', 'No description is available.', '6', '52.jpg'),
(53, 'Nightscape', 'David Morrell', 'Subterranean Press (Unknown)', '2909 BDT', 'The second short story collection by David Morrell, creator of Rambo and author of The Protector, Long Lost, Testament, and many other thriller classics.This is a signed hardcover edition.', '6', '53.jpg'),
(54, 'Twelve Irish Ghost Stories', 'Patricia Craig', 'Oxford University Press, USA (Unknown)', '1167 BDT', 'Theres nothing like a good ghost story, and the Irish have traditionally excelled at them. The specters which haunt these Irish ghost stories include massacred Spanish sailors, a silver-robed woman who plies her guests with poison, a mutilated peddler, a ', '6', '54.jpg'),
(55, 'Dark Destiny: The World of Darkness', 'Ed Kramer, Edward E. Kramer', 'White Wolf Games Studio (Unknown)', '1026 BDT', 'Humanity has been manipulated by shadowy, inhuman beings throughout history. Secret wars have been waged to settle vampires\' disputes. Cultures have been created to advance mages\' visions of Ascension. Enemies of the Earth have been defeated by werewolves', '6', '55.jpg'),
(56, 'Dixie Ghosts', 'Martin W. Greenberg, Charles Waugh, Frank D., Jr. McSherry', 'Thomas Nelson Publishers ', '101 BDT', 'These terrifying anthologies contain some of the best in American ghost stories. Each of the books was edited by master anthologists Frank D. McSherry Jr., Charles G. Waugh, and Martin H. Greenberg and includes stories from such great horror fiction write', '6', '56.jpg'),
(57, 'Storm of the Century', 'Stephen King', 'Pocket Books (Feb. 1st, 1999)', '1145 BDT', 'The bestselling author of all time presents the screenplay version of his chilling tale, written expressly for the television screen. The ABC miniseries, starring Tim Daly and Debrah Farentino, is scheduled to air the week of February 14, 1999. 8 pages of', '6', '57.jpg'),
(58, 'Resident Evil: Zero Hour', 'S. D. Perry', 'Titan Books (UK) (Jan. 22nd, 2013)', '1181 BDT', 'Sent to investigate a series of grisly murders in Racoon City, S.T.A.R.S Bravo Team scrambles into action.', '6', '58.jpg'),
(59, 'Blackwood Farm', 'Anne Rice', 'Ballantine Books (Sep. 30th, 2003)', '1033 BDT', 'In her new novel, perennial bestseller Anne Rice fuses her two uniquely seductive strains of narrative -- her Vampire legend and her lore of the Mayfair witches -- to give us a world of classic deep-south luxury and ancestral secrets.', '6', '59.jpg'),
(60, 'End of Watch', 'S. King', 'Scribner (Jan. 1st, 2001)', '2400 BDT', 'No description is available.', '6', '60.jpg'),
(61, 'Night Visions 12', 'Simon Clark, Mark Morris, P. D. Cacek', 'Subterranean Press', '3218 BDT', 'For nearly two decades, the Night Visions anthologies have provided a forum for some of the finest dark fantasists of the modern era, including Stephen King, Ramsey Campbell, Dan Simmons, Clive Barker, and many more. Subterranean Press proudly continues t', '6', '61.jpg'),
(62, 'Golden Buddha', 'Clive Cussler, Craig Dirgo', 'Berkley Trade Pub (Jul. 1st, 2007)', '958 BDT', 'The #1 bestselling creator of the Dirk Pitt adventures introduces an intriguing new action hero: the enigmatic captain of the \"Oregon,\" Juan Cabrillo. In his first feature-length adventure, it\'s up to Cabrillo to put Tibet back in the hands of the Dalai L', '7', '62.JPG'),
(63, 'Skeleton Coast', 'Clive Cussler, Jack B. Du Brul', '', '1028 BDT', 'The latest entry in the \"New York Times\"-bestselling Oregon Files series. A priceless treasure under the sea, a merciless threat on the surface--Juan Cabrillo can handle both. Now available in a tall Premium Edition.', '7', '63.JPG'),
(64, 'Fire Ice', ' Clive Cussler, Paul Kemprecos', '	Berkley (May. 27th, 2003)', '1024 BDT', 'In Cussler\'s newest novel from the NUMA( Files, a danger beyond imagining lies beneath the Eastern seaboard of America--a disaster that\'s just waiting to happen. \"Cussler is in top form--\"Fire Ice\" will leave his fans breathless.\"--\"Publishers Weekly.\"', '7', '64.JPG'),
(65, 'The Tiger\'s Prey: A Novel of Adventure (Courtney Family Novels)', 'Wilbur, Harper, Tom Smith', 'William Morrow (Jul. 31st, 2018)', '1318 BDT', 'The New York Times bestselling author of Desert God and Pharaoh adds another chapter to his popular historical saga featuring the seafaring Tom Courtney, the hero of Monsoon and Blue Horizon, with this magnificent swashbuckling saga set in the eighteenth ', '7', '65.JPG'),
(66, 'Dark Watch', 'Clive Cussler, Jack B. Du Brul', '	Berkley (Jul. 26th, 2011)', '924 BDT', 'Juan Cabrillo and his crew aboard the spy ship \"Oregon\" are hired by a consortium of Japanese shipping magnates whose fortunes are being threatened by brutal pirates trolling the waters of Southeast Asia. Now available as a tall Premium Edition. (Men\'s Ad', '7', '66.JPG'),
(67, 'The Big Switch', ' Harry Turtledove', 'Del Rey Books (Jul. 19th, 2011)', '1461 BDT', 'In this extraordinary World War II alternate history, master storyteller Turtledove begins with a big switch: what if Neville Chamberlain, instead of appeasing Hitler, had stood up to him in 1938?', '7', '67.JPG'),
(68, 'The Trial', 'Franz Kafka, Mike Mitchell, Ritchie Robertson', '	Oxford University Press, USA (Aug. 1st, 2009)', '1331 BDT', 'One of the great works of the twentieth century, Kafka\'s The Trial has been read as a study of political power, a pessimistic religious parable, or a crime novel where the accused man is himself the problem. In it, a man wakes up one morning to find himse', '7', '68.JPG'),
(69, 'Capital City', 'Omar Tyree', '	Urban Books (Feb. 23rd, 2016)', '942 BDT', 'Life is supposed to be easy and carefree when you are young, but if you live in Washington D.C., that s not always the case. Flashing back to the 1990s, readers enter the lives of four black men looking to gain money, power, and respect. These four brotha', '7', '69.JPG'),
(70, 'Hitler\'s Peace: A Novel of the Second World War', 'Philip Kerr', '	Penguin Books (Aug. 1st, 2006)', '1059 BDT', 'From the author of the Berlin Noir trilogy comes a stunning World War II \"what if\" thriller in which the fate of Europe--and of its remaining three million Jews--hangs in the balance.', '7', '70.JPG'),
(71, 'McSweeney\'s Mammoth Treasury of Thrilling Tales', ' Michael Chabon', '	Vintage Books USA (Mar. 25th, 2003)', '1159 BDT', 'A Vintage Contemporaries Original\nIncludes:\nJim Shepard\'s \"Tedford and the Megalodon\"\nGlen David Gold\'s \"The Tears of Squonk, and What Happened Thereafter\"\nDan Chaon\'s \"The Bees\"\nKelly Link\'s \"Catskin\"\nElmore Leonard\'s \"How Carlos Webster Changed His Name', '7', '71.JPG'),
(72, 'The Allingham Case-Book', 'Margery Allingham', 'Carroll & Graf Publishers ', '914 BDT', 'No description is available.', '8', '72.jpg'),
(73, 'The Christmas Mystery', 'Jostein Gaarder, Elizabeth Rakkan, Elizabeth Rokkan', 'Hill & Wang', '1761 BDT', 'No description is available.', '8', '73.jpg'),
(74, 'Greatest Hits: Original Stories of Assassins, Hitmen, and Hired Guns', 'Robert J. Randisi', 'Carroll & Graf Publishers (Unknown)', '1336 BDT', 'Featuring standout writers of mystery and suspense like Lawrence Block, Jeffery Deaver, James W. Hall, Jeff Abbott, Max Allan Collins, and Lee Child -- all of them best-selling authors, most of them winners of Edgar or Shamus awards (or both) -- this anth', '8', '74.jpg'),
(75, 'Mamm Bk Historical Detectives', 'Mike Ashley', 'Carroll & Graf Publishers', '1158 BDT', 'This companion edition to the highly successful Mammoth Book of Historical Whodunits contains a wealth of fictional detectives, including Brother Cadfael, cowboy sleuth Ben Snow, and newcomers to the profession such as William Shakespeare and Hans Christi', '8', '75.jpg'),
(76, 'Almost Perfect Murders: Mini-Mysteries for You to Solve', 'Hy Conrad, Lucy Corvino', 'Sterling Publishing', '975 BDT', 'Pit your wits against a shrewd detective who\'s trying to solve diabolical murders all over the world. Follow the elegantly enigmatic plot twists, keep track of the carefully laid out clues, and see who\'s first to nab the culprit, you or the pro. At the en', '8', '76.jpg'),
(77, 'The Cat Who Robbed a Bank', 'Lilian Jackson Braun', 'Putnam Publishing Group', '124 BDT', 'When a visiting estate jeweler is found dead in his Pickax hotel room, Jim Qwilleran and his Siamese cats must do their best to find the purr-petrator.', '8', '77.jpg'),
(78, 'The Cat Who Sang for the Birds', 'Lilian Jackson Braun', 'Putnam Publishing Group', '1386 BDT', 'Scandal, robbery, death, and an anticomputer uprising rock the peace of Moose County.', '8', '78.jpg'),
(79, 'Gone Girl: A Novel', 'Gillian Flynn', 'Broadway Books', '985 BDT', 'Marriage can be a real killer. One of the most critically acclaimed suspense writers of our time, New York Times bestseller Gillian Flynn takes that statement to its darkest place in this unputdownable masterpiece about a marriage gone terribly, terribly ', '8', '79.jpg'),
(80, 'The Cuckoo\'s Calling (Cormoran Strike)', 'Robert Galbraith', 'Mulholland Books', '1134 BDT', 'A brilliant debut mystery in a classic vein: Detective Cormoran Strike investigates a supermodel\'s suicide. After losing his leg to a land mine in Afghanistan, Cormoran Strike is barely scraping by as a private investigator. Strike is down to one client, ', '8', '80.jpg'),
(81, 'Tell No One', 'Harlan Coben', 'Dell Publishing Company', '886 BDT', 'From the award-winning author of the captivating Myron Bolitar books comes Coben\'s first non-Bolitar stand-alone thriller, now newly repackaged in a tall Premium Edition. Reissue.', '8', '81.jpg'),
(82, 'Gunning for God: Why the New Atheists Are Missing the Target', 'John Lennox', 'Lion Publishing Plc (Oct. 1st, 2011)', '1649 BDT', 'Since the twin towers crashed to the ground on 9/11 there has been no end to claims that religion \'is dangerous\', \'kills\', or \'poisons everything\'. And if religion is the problem with the world, say the New Atheists, the answer is simple: get rid of it. T', '9', '82.jpg'),
(83, 'Why I Am Not a Christian: And Other Essays on Religion and Related Subjects', 'Bertrand Russell', 'Touchstone Books (Oct. 30th, 1967)', '981 BDT', 'Dedicated as few men have been to the life of reason, Bertrand Russell has always been concerned with the basic questions to which religion also addresses itself -- questions about man\'s place in the universe and the nature of the good life, questions tha', '9', '83.jpg'),
(84, 'Agnosticism: A Very Short Introduction', 'Robin Le Poidevin', 'Oxford University Press, USA (Nov. 19th, 2010)', '1388 BDT', 'What is agnosticism? Is it a belief, or merely the absence of belief? Is it the result of too little thought about an issue--or too much? Who were the first to call themselves \"agnostics\"? Does agnosticism deserve serious consideration today? Can an agnos', '9', '84.jpg'),
(85, 'The Emperor Constantine', 'Dorothy L. Sayers, Ann Loades', 'Wipf & Stock Publishers (Sep. 9th, 2011)', '2586 BDT', 'A brief \'Prologue\' by the \'Church\' introduces the career of Constantine (from AD 305-337) with scenes from the empires of both west and east, concentrating on Constantine\'s progress to imperial power and inevitably in religious belief. He discovers Christ', '9', '85.jpg'),
(86, 'Christianity and Hellenism in the Fifth-Century Greek East: Theodoret\'s Apologetics Against the Greeks in Context', 'Yannis Papadogiannakis', 'Harvard University Center for Hellenic Studie (Jun. 30th, 2012)', '2424 BDT', 'This book--the first full-length study of the \"last and most beautiful\" apology against paganism, Theodoret\'s \"Therapeutic for Hellenic Maladies\"--combines close readings of the text with detailed analysis of Theodoret\'s arguments against Greek religion, ', '9', '86.jpg'),
(87, 'Jour o la lumire reviendra (Le): LA FIN DU MONDE EST-ELLE NOS PORTES?', 'Paperback Book', 'Quebecor (Unknown)', '1252 BDT', 'No description is available.', '9', '87.jpg'),
(88, 'Jour o la lumire reviendra (Le): LA FIN DU MONDE EST-ELLE NOS PORTES?', 'Paperback Book', 'Quebecor (Unknown)', '1252 BDT', 'No description is available.', '9', '88.jpg'),
(89, 'Greek Religion: Archaic and Classical', 'Walter Burkert, John Raffan', 'Wiley-Blackwell (Sep. 1st, 2002)', '4035 BDT', 'This is the first major synthesis of Greek religion to appear for a generation. A clearly structured and readable survey for classical scholars and students, it will also be generally welcomed as the best modern account of any polytheistic religious syste', '9', '89.jpg'),
(90, 'The Dictionary of Classical Mythology', 'John Zimmerman', 'Bantam (Jun. 1st, 1983)', '81 BDT', '\"A knowledge of classical mythology is indispensable in understanding and appreciating much of the great literature, sculpture, and painting of both the ancients and the moderns. Unless we know the marvelous stories of the deities and heroes of the ancien', '9', '90.jpg'),
(91, 'The God Delusion', 'Richard Dawkins', 'Mariner Books (Jan. 1st, 2008)', '116 BDT', 'Discovery\" magazine has recently called Richard Dawkins \"Darwins Rottweiler\" for his fierce and effective defense of evolution. In his \"New York Times\" bestseller, Dawkins turns his considerable intellect on religion, denouncing its faulty logic and the s', '9', '91.jpg'),
(92, 'Healing at the Speed of Sound: How What We Hear Transforms Our Brains and Our Lives', 'Don Campbell, Alex Doman', 'Plume Books (Oct. 30th, 2012)', '1409 BDT', 'Use the music you love to become more efficient, relaxed, healthy, and happy.', '10', '92.jpg'),
(93, 'Music, Physics and Engineering', 'Strutt Rayleigh, John William Strutt Rayleigh', 'Dover Publications (Jun. 1st, 1945)', '1333 BDT', 'Written clearly and concisely, this book thoroughly examines all aspects of the production, reception, and reproduction of sound. Dr. Harry Olson discusses sound waves, characteristics of musical instruments, how the ear hears, and how sound is reproduced', '10', '93.jpg'),
(94, 'The Theory of Sound, Volume 1', 'Strutt Rayleigh, John William Strutt Rayleigh', 'Dover Publications (Jun. 1st, 1945)', '1517 BDT', '\"An outstanding treatise.\" Review of Scientific Instruments \"Astonishing how this treatise ... still retains a place of preeminence in modern acoustical literature.\" Electronics Industry The major work by a Nobel Laureate who was among the greatest of 19t', '10', '94.jpg'),
(95, 'This Is Your Brain on Music: The Science of a Human Obsession', 'Daniel J. Levitin', 'Plume Books (Sep. 1st, 2007)', '1014 BDT', 'Neuroscientist and professional musician Levitin presents a fascinating exploration of the relationship between music and the mind--and the role of melodies in shaping our lives. Photos throughout.', '10', '95.jpg'),
(96, 'Applied Physical Pharmacy', 'Mansoor M. Amiji, Beverly J. Sandmann', 'McGraw-Hill/Appleton & Lange (Unknown)', '764 BDT', 'Designed as the core textbook for the required physical pharmacy or pharmaceutics course within the pharmacy school curriculum. With a focus on examples from pharmacy practice, this book presents the chemical and physical chemical principles fundamental t', '10', '96.jpg'),
(97, 'A Brief History of Time', 'Stephen Hawking', 'Bantam Books (Sep. 1st, 1998)', '978 BDT', '\"A Brief History of Time, published in 1988, was a landmark volume in science writing and in world-wide acclaim and popularity, with more than 9 million copies in print globally. The original edition was on the cutting edge of what was then known about th', '10', '97.jpg'),
(98, 'Brief History of Time: From the Big Bang to Black Holes', 'Stephen Hawking', 'Bantam (Aug. 1st, 2011)', '1808 BDT', 'No description is available.', '10', '98.jpg'),
(99, 'Patrick Moore on the Moon', 'Patrick Moore', 'Cassell (Unknown)', '1324 BDT', 'A revolution has occurred in what\'s known about the moon since the last landings over 30 years ago. Catch up with the fascinating research regarding the birth and growth of the moon, and its unpredictable relations to the Earth and the solar system. The w', '10', '99.jpg'),
(100, 'Physics and Chemistry of the Solar System - 2nd Edition', 'John Lewis, John S. Lewis', 'Academic Press (Feb. 28th, 2004)', '9978 BDT', 'Physics and Chemistry of the Solar System, 2nd Edition, is a comprehensive survey of the planetary physics and physical chemistry of our own solar system. It covers current research in these areas and the planetary sciences that have benefited from both e', '10', '100.jpg'),
(101, 'Particle Astrophysics, Second Edition - 2nd Edition', 'D. H. Perkins, Donald H. Perkins', 'Oxford University Press, USA (Feb. 4th, 2009)', '4759 BDT', 'The last years have seen a symbiosis of the fields of elementary particle physics and the astrophysics of the early universe. This text presents the background of the subjects and the latest developments at a level suitable for final year undergraduates a', '10', '101.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(244) NOT NULL,
  `category` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `bid`, `uid`, `name`, `category`, `price`) VALUES
(1, 2, 1, 'Trickster: Native American Tales: A Graphic Collection', 1, 2558),
(2, 3, 2, 'Marvel Studios Visual Dictionary', 1, 2948),
(3, 6, 2, 'My Neighbor Totoro Film Comic, Vol. 1', 1, 1500),
(4, 2, 1, 'Trickster: Native American Tales: A Graphic Collection', 1, 2558);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`) VALUES
(1, 'Comics'),
(2, 'Computers & Tech'),
(3, 'Entertainment'),
(4, 'Health & Fitness'),
(5, 'History'),
(6, 'Horror'),
(7, 'Literature & Fiction'),
(8, 'Mysteries'),
(9, 'Religion'),
(10, 'Science & Match');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `oid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `bname` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`oid`, `bid`, `uid`, `date`, `bname`, `qty`, `category`, `image`, `price`, `name`, `email`, `phone`, `address`, `status`) VALUES
(34, 2, 2, '2021-03-06', 'Trickster: Native American Tales: A Graphic Collection', 1, 1, '2.jpg', '2558 BDT', 'Farah Tasnim', 'farah@gmail.com', '111111', 'mirpur', 'Approved'),
(35, 9, 2, '2021-03-06', 'My Neighbor Totoro Film Comic, Vol. 2', 1, 1, '9.jpg', '1402 BDT', 'Farah Tasnim', 'farah@gmail.com', '111111', 'mirpur', 'Approved'),
(36, 44, 2, '2021-03-06', 'Scribbling the Cat: Travels with an African Soldier', 1, 5, '44.jpg', '859 BDT', 'Farah Tasnim', 'farah@gmail.com', '123123', 'mirpur', 'Approved'),
(39, 43, 2, '2021-03-06', 'Kaffir Boy: The True Story of a Black Youth\'s Coming of Age in Apartheid South Africa', 1, 5, '43.jpg', '1036 BDT', 'Farah Tasnim', 'farah@gmail.com', '123', 'mirpur', 'Pending'),
(40, 3, 2, '2021-03-06', 'Marvel Studios Visual Dictionary', 1, 1, '3.jpg', '2948 BDT', 'Farah Tasnim', 'farah@gmail.com', '123', 'mirpur', 'Pending'),
(41, 2, 2, '2021-03-06', 'Trickster: Native American Tales: A Graphic Collection', 1, 1, '2.jpg', '2558 BDT', 'Farah Tasnim', 'farah@gmail.com', '123', 'mirpur', 'Pending'),
(42, 2, 2, '2021-03-06', 'Trickster: Native American Tales: A Graphic Collection', 1, 1, '2.jpg', '2558 BDT', 'Farah Tasnim', 'farah@gmail.com', '123', 'mirpur', 'Pending'),
(43, 2, 2, '2021-03-06', 'Trickster: Native American Tales: A Graphic Collection', 1, 1, '2.jpg', '2558 BDT', 'Farah Tasnim', 'farah@gmail.com', '123', 'mirpur', 'Pending'),
(44, 3, 2, '2021-03-06', 'Marvel Studios Visual Dictionary', 1, 1, '3.jpg', '2948 BDT', 'Farah Tasnim', 'farah@gmail.com', '123', 'mirpur', 'Pending'),
(45, 23, 2, '2021-03-08', 'The Boy Who Made Everyone Laugh', 1, 3, '23.jpg', '1500', 'Farah Tasnim', 'farah@gmail.com', '1212', 'mirpur', 'Pending'),
(46, 3, 2, '2021-03-08', 'Marvel Studios Visual Dictionary', 1, 1, '3.jpg', '2948 BDT', 'Farah Tasnim', 'farah@gmail.com', '324234', 'mirpur', 'Pending'),
(47, 2, 2, '2021-03-08', 'Trickster: Native American Tales: A Graphic Collection', 1, 1, '2.jpg', '2558 BDT', 'Farah Tasnim', 'farah@gmail.com', '324234', 'mirpur', 'Pending'),
(48, 5, 2, '2021-03-08', 'Cult Fiction: Art & Comics', 1, 1, '5.jpg', '2167 BDT', 'Farah Tasnim', 'farah@gmail.com', '324234', 'mirpur', 'Pending'),
(49, 9, 2, '2021-03-08', 'My Neighbor Totoro Film Comic, Vol. 2', 1, 1, '9.jpg', '1402 BDT', 'Farah Tasnim', 'farah@gmail.com', '324234', 'mirpur', 'Pending'),
(50, 23, 2, '2021-03-08', 'The Boy Who Made Everyone Laugh', 1, 3, '23.jpg', '1500 BDT', 'Farah Tasnim', 'farah@gmail.com', '324234', 'mirpur', 'Pending'),
(51, 2, 2, '2021-03-08', 'Trickster: Native American Tales: A Graphic Collection', 2, 1, '2.jpg', '5116', 'Farah Tasnim', 'farah@gmail.com', '123213', 'mirpur', 'Pending'),
(52, 5, 2, '2021-03-11', 'Cult Fiction: Art & Comics', 8, 1, '5.jpg', '17336', 'Farah Tasnim', 'farah@gmail.com', '123', 'mirpur', 'Pending'),
(53, 5, 2, '2021-03-11', 'Cult Fiction: Art & Comics', 1, 1, '5.JPG', '2167', 'Farah Tasnim', 'farah@gmail.com', '123123', 'mirpur', 'Pending'),
(54, 6, 2, '2021-03-11', 'My Neighbor Totoro Film Comic, Vol. 1', 1, 1, '6.JPG', '1500 BDT', 'Farah Tasnim', 'farah@gmail.com', '1232132', 'mirpur', 'Pending'),
(55, 5, 2, '2021-03-11', 'Cult Fiction: Art & Comics', 1, 1, '5.JPG', '2167 BDT', 'Farah Tasnim', 'farah@gmail.com', '1232132', 'mirpur', 'Pending'),
(56, 2, 2, '2021-03-11', 'Trickster: Native American Tales: A Graphic Collection', 1, 1, '2.JPG', '2558 BDT', 'Farah Tasnim', 'farah@gmail.com', '1232132', 'mirpur', 'Pending'),
(57, 10, 2, '2021-03-11', 'Perspective! For Comic Book Artists', 1, 1, '10.JPG', '2202 BDT', 'Farah Tasnim', 'farah@gmail.com', '1232132', 'mirpur', 'Pending'),
(58, 4, 2, '2021-03-11', 'The Comic Book Story of Professional Wrestling: A Hardcore, High-Flying, No-Holds-Barred History of the One True Sport', 1, 1, '4.JPG', '1450 BDT', 'Farah Tasnim', 'farah@gmail.com', '1232132', 'mirpur', 'Pending'),
(59, 2, 2, '2021-03-22', 'Trickster: Native American Tales: A Graphic Collection', 1, 1, '2.JPG', '2558', 'Farah Tasnim', 'farah@gmail.com', '1231232', 'mirpur', 'Pending'),
(60, 2, 2, '2021-03-22', 'Trickster: Native American Tales: A Graphic Collection', 1, 1, '2.JPG', '2558', 'Farah Tasnim', 'farah@gmail.com', '123123', 'mirpur', 'Pending'),
(61, 2, 2, '2021-03-22', 'Trickster: Native American Tales: A Graphic Collection', 1, 1, '2.JPG', '2558', 'Farah Tasnim', 'farah@gmail.com', '12312312', 'mirpur', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bid` bigint(20) NOT NULL,
  `uid` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` decimal(8,2) NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sentiment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `bid`, `uid`, `name`, `score`, `comment`, `sentiment`, `created_at`, `updated_at`) VALUES
(1, 82, 5, 'Rosemarie Walker II', '1.10', 'Quia voluptas vitae doloremque ipsum.', 'negative', '2021-11-04 12:17:50', '2021-11-04 12:17:50'),
(2, 37, 3, 'Rose McCullough V', '2.40', 'Eligendi vel itaque natus veniam.', 'negative', '2021-11-04 12:17:50', '2021-11-04 12:17:50'),
(3, 91, 4, 'Lawrence Klocko', '1.70', 'Hic maiores cumque fugiat magni cum asperiores omnis.', 'negative', '2021-11-04 12:17:50', '2021-11-04 12:17:50'),
(4, 23, 4, 'Mr. Cyril Dach V', '3.80', 'Temporibus et quisquam eius pariatur in.', 'negative', '2021-11-04 12:17:50', '2021-11-04 12:17:50'),
(5, 91, 3, 'Prof. Rhett Schulist', '1.50', 'A possimus debitis illo corrupti dolor.', 'negative', '2021-11-04 12:17:50', '2021-11-04 12:17:50'),
(6, 101, 1, 'Darryl Reichert', '4.80', 'Eos et tenetur inventore.', 'positive', '2021-11-04 12:17:50', '2021-11-04 12:17:50'),
(7, 41, 2, 'Prof. Leanna Williamson Sr.', '1.40', 'Earum eum accusamus laboriosam porro odit quis.', 'positive', '2021-11-04 12:17:50', '2021-11-04 12:17:50'),
(8, 91, 4, 'Coleman Batz III', '4.30', 'Laboriosam nesciunt est repellat tenetur culpa qui vel.', 'positive', '2021-11-04 12:17:50', '2021-11-04 12:17:50'),
(9, 100, 2, 'Shyann Miller', '4.00', 'Delectus alias repudiandae velit quia.', 'positive', '2021-11-04 12:17:50', '2021-11-04 12:17:50'),
(10, 96, 5, 'Dr. Rico Bode MD', '0.30', 'Eos accusantium sapiente sit voluptatem quo aut enim.', 'positive', '2021-11-04 12:17:50', '2021-11-04 12:17:50'),
(11, 62, 3, 'Angel Spencer', '2.80', 'Mollitia explicabo in porro quaerat aut.', 'negative', '2021-11-04 12:17:50', '2021-11-04 12:17:50'),
(12, 22, 2, 'Ms. Adelia Monahan PhD', '3.20', 'Quia rerum eum numquam et.', 'negative', '2021-11-04 12:17:50', '2021-11-04 12:17:50'),
(13, 30, 4, 'Elva Rolfson MD', '2.80', 'Porro illo itaque autem neque voluptatem officia aspernatur.', 'positive', '2021-11-04 12:17:50', '2021-11-04 12:17:50'),
(14, 37, 5, 'Dr. Aron Predovic', '0.50', 'Dolorem aut quia et eveniet explicabo sunt rerum sit.', 'negative', '2021-11-04 12:17:50', '2021-11-04 12:17:50'),
(15, 8, 1, 'Prof. Jaime Crooks', '1.30', 'Quod ut odit ut laudantium.', 'positive', '2021-11-04 12:17:50', '2021-11-04 12:17:50'),
(16, 66, 2, 'Mrs. Bria Brakus I', '3.30', 'Nemo adipisci autem nulla illum nihil enim similique.', 'negative', '2021-11-04 12:17:50', '2021-11-04 12:17:50'),
(17, 72, 2, 'Prof. Paris Ebert III', '3.40', 'Vel sed est dolorem esse dolores iusto.', 'negative', '2021-11-04 12:17:50', '2021-11-04 12:17:50'),
(18, 19, 2, 'Claudie Jaskolski I', '0.10', 'Modi consequatur beatae magni.', 'negative', '2021-11-04 12:17:50', '2021-11-04 12:17:50'),
(19, 52, 1, 'Leilani Gutkowski', '4.10', 'Odit eaque adipisci sunt eos.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(20, 14, 2, 'Arvilla Kassulke IV', '2.20', 'Voluptas dolores ut quibusdam earum ut labore quaerat.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(21, 9, 4, 'Dr. Johnathon Schaefer I', '1.50', 'Adipisci eum fugit impedit atque neque impedit tempora.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(22, 96, 5, 'Candelario Hane', '2.70', 'Perspiciatis quisquam ut molestiae possimus ad beatae.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(23, 41, 3, 'Minerva Terry', '2.40', 'Labore reprehenderit aut sed amet accusamus incidunt aut aut.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(24, 90, 5, 'Icie Nienow DVM', '3.80', 'At distinctio qui molestias sed et.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(25, 13, 2, 'Gia DuBuque', '3.30', 'Nulla id minus impedit incidunt velit.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(26, 51, 4, 'Amelie Carter', '4.70', 'Quis fugiat quod voluptatibus ex sequi quia animi.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(27, 9, 1, 'Jordyn Huel III', '1.30', 'Aliquid et dolorem et quia consequuntur praesentium qui.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(28, 12, 1, 'Katheryn Hessel', '4.10', 'Cum soluta qui est itaque.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(29, 22, 3, 'Dr. Jody Orn', '1.50', 'Et eveniet recusandae quia perferendis.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(30, 19, 5, 'Liam Purdy', '2.60', 'Atque modi aliquam illum enim culpa aut ea.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(31, 15, 2, 'Connie Quigley', '0.10', 'Recusandae debitis ea ea cum perspiciatis.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(32, 88, 2, 'Thalia Hyatt DVM', '2.00', 'Molestiae qui eaque porro nihil perferendis nisi nesciunt dolor.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(33, 63, 3, 'Lyda DuBuque', '1.40', 'Aperiam aut porro debitis voluptates.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(34, 42, 2, 'Ms. Beatrice Hettinger', '3.00', 'Consequuntur laborum et sed recusandae nihil.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(35, 11, 5, 'Stephan Armstrong', '1.50', 'Est ratione eum laudantium.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(36, 4, 5, 'Mrs. Vernie Blanda', '2.60', 'Est mollitia ut hic quibusdam quia.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(37, 34, 1, 'Dorian Kemmer Jr.', '3.00', 'Modi deleniti accusamus neque.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(38, 65, 4, 'Elfrieda Padberg II', '0.00', 'Quas et molestiae nihil nemo consequatur animi quisquam.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(39, 6, 5, 'Barrett Farrell', '1.40', 'Voluptatum molestiae aut sit eos numquam.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(40, 70, 5, 'Vallie Wolf', '4.70', 'Ipsum natus qui qui facilis laborum laborum.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(41, 62, 5, 'Malvina Roberts', '1.80', 'Minima sunt nam voluptatum voluptate ut delectus quia.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(42, 54, 2, 'Clay Mitchell', '4.50', 'Eaque similique consequatur odio qui voluptatum tenetur et.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(43, 21, 1, 'Jaylin Skiles', '4.00', 'Ut et velit magnam autem.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(44, 18, 2, 'Prof. Amani Sipes II', '3.30', 'Molestiae accusamus expedita dolores dolorem quibusdam.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(45, 39, 5, 'Brenden Mayer', '4.50', 'Officia rerum accusantium at qui quia ut sapiente.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(46, 45, 1, 'Kyler Pacocha', '3.90', 'Nisi ratione cumque officia eligendi.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(47, 65, 4, 'Miss Adrienne Von', '3.00', 'Numquam qui ullam a commodi accusamus qui nemo beatae.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(48, 48, 2, 'Israel Jerde', '3.30', 'Aliquam est amet nihil suscipit quia molestiae ipsa et.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(49, 37, 1, 'Mrs. Betsy Emard III', '1.70', 'Nesciunt aut culpa consectetur quidem sunt rerum possimus.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(50, 6, 2, 'Johnathan Green', '3.10', 'Ratione aut minima et distinctio est tempore similique.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(51, 24, 4, 'Dr. Davin Hoeger DVM', '4.00', 'Aut quis amet doloremque repudiandae et officiis.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(52, 34, 2, 'Prof. Susana Rogahn', '5.00', 'Cum aspernatur eum excepturi hic.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(53, 33, 5, 'Halie Altenwerth II', '0.20', 'Ad illo consequuntur omnis aperiam eligendi vitae.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(54, 101, 1, 'Elva Metz', '2.40', 'Laboriosam ut sequi voluptatem rerum impedit et.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(55, 66, 4, 'Reyes Reinger DDS', '3.90', 'Voluptas voluptatem sit sint.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(56, 78, 4, 'Anna Parisian', '0.90', 'Fugiat eaque molestias laboriosam earum eius quis et.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(57, 40, 5, 'Prof. Dayton Feeney PhD', '3.50', 'Et omnis dolores autem unde ut iste rem.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(58, 91, 5, 'Karelle Abshire V', '4.50', 'Quae nobis quod ullam suscipit temporibus.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(59, 58, 5, 'Victor Mertz', '0.50', 'Quia quia animi culpa dolores quaerat aliquam.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(60, 68, 4, 'Ashlee Reynolds', '0.90', 'Qui laudantium possimus et vitae voluptatum quod.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(61, 16, 3, 'Dr. Alejandrin Reichert IV', '3.30', 'Error repellat sunt blanditiis tenetur et.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(62, 89, 4, 'Jaquelin Trantow', '1.10', 'Facere ut ad ad natus.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(63, 99, 4, 'Hudson Boehm', '4.90', 'A et odit saepe harum quia.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(64, 95, 5, 'Arden Sipes', '1.40', 'Magni placeat perspiciatis libero id voluptatem aliquid in.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(65, 85, 5, 'Michele Kuphal', '0.80', 'Ut quidem quod perspiciatis vel quia necessitatibus repellendus.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(66, 101, 5, 'Zack Maggio', '4.00', 'Dolorem voluptate a est commodi.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(67, 67, 5, 'Makenzie Hodkiewicz', '1.40', 'Molestiae illum voluptatem eum rem qui ullam qui.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(68, 92, 5, 'Dr. Steve Huels', '4.50', 'Dolore sint quos ut labore saepe non.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(69, 62, 3, 'Mr. Linwood Howell', '2.80', 'Ipsam qui libero quaerat reiciendis officiis reiciendis molestias.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(70, 48, 5, 'Tracey Botsford', '2.10', 'Vel saepe necessitatibus deleniti modi.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(71, 45, 1, 'Miss Lauryn Leffler V', '3.40', 'Et eveniet nisi autem neque.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(72, 67, 2, 'Prof. Laron Schmeler Jr.', '0.50', 'Quo necessitatibus magnam explicabo est in laborum.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(73, 35, 4, 'Trey Homenick', '4.40', 'Labore omnis nostrum qui.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(74, 28, 4, 'Terrell Bruen', '0.20', 'Voluptatem ipsam accusamus et.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(75, 45, 1, 'Herbert Sipes', '2.50', 'Tempora in quis laudantium sunt omnis consequatur vero.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(76, 66, 5, 'Mr. Warren Bogisich IV', '1.90', 'Aut dolor quos tempora et.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(77, 46, 1, 'Miss Aubree McDermott', '0.10', 'Hic quibusdam ad sunt.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(78, 17, 3, 'Florencio Collins', '1.40', 'Consequatur praesentium natus nam assumenda consequuntur nisi.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(79, 89, 4, 'Prof. Marlee Boehm Jr.', '4.40', 'Numquam voluptatem amet ipsum consequuntur et veniam dolorem.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(80, 69, 5, 'Ethelyn Dicki', '3.30', 'Commodi aliquid tempore necessitatibus quia illo ipsa dolor.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(81, 26, 5, 'Dr. Jaquelin Keebler DDS', '3.80', 'Est magnam id facere incidunt rerum necessitatibus.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(82, 76, 1, 'Bobbie Orn', '2.10', 'Nesciunt numquam eos cumque consequatur eum doloribus.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(83, 80, 4, 'Royal Feeney', '4.00', 'Sit porro labore qui est.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(84, 39, 2, 'Dr. Kade Medhurst PhD', '2.60', 'Qui debitis et dolore accusamus rerum rerum veniam.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(85, 88, 5, 'Adrain Blanda', '4.20', 'Quae ullam neque ea perspiciatis mollitia.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(86, 13, 3, 'Nia Langosh', '3.80', 'Et quia corporis ut eveniet commodi porro et.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(87, 42, 4, 'Dr. Antwan Marquardt II', '1.60', 'Ea quae ea cumque possimus.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(88, 2, 5, 'Prof. Buster Pouros', '3.80', 'Dignissimos molestiae voluptate reiciendis quos aliquid perspiciatis perferendis.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(89, 70, 1, 'Lydia Mosciski', '1.40', 'Consequatur quo quisquam voluptas modi quam accusantium.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(90, 27, 1, 'Prof. Nannie McKenzie DDS', '3.90', 'Eos error recusandae nisi recusandae qui pariatur ex.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(91, 40, 5, 'Lonzo Bode', '3.10', 'Minus delectus quis et tempora.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(92, 39, 1, 'Mrs. Kathleen Hermiston IV', '0.30', 'Repellendus quod similique voluptatem eius et corrupti sit.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(93, 10, 1, 'Marty Fritsch DVM', '0.90', 'Corporis eos distinctio et sed.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(94, 95, 3, 'Alberto Satterfield', '2.90', 'Enim quia consequatur fuga qui et.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(95, 35, 5, 'Delia Lynch DDS', '0.20', 'Illo est dolores dolores repellat.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(96, 84, 5, 'Miss Verla Walker Sr.', '1.50', 'Veniam illo quae soluta nemo qui nobis cupiditate.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(97, 27, 4, 'Johnathan Jast', '2.10', 'Laboriosam omnis fugit eveniet dignissimos iste sunt.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(98, 85, 5, 'Mabel King', '0.10', 'Inventore repudiandae vitae ipsum dignissimos ratione.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(99, 57, 4, 'Dulce Paucek', '1.90', 'Dolorum impedit ratione rerum consequatur et.', 'negative', '2021-11-04 12:17:51', '2021-11-04 12:17:51'),
(100, 84, 3, 'Emiliano Krajcik', '1.10', 'Commodi omnis consequatur facere illo et quod ea.', 'positive', '2021-11-04 12:17:51', '2021-11-04 12:17:51');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone`, `address`) VALUES
(1, 'AD', 'ad@gmail.com', '$2y$10$x8GjzxNk/JK/qAveg6ELuOZ0mnPcP/hiPwHkJzpE8EHoOzUYL2HqC', '12121111111', 'Mirpur'),
(2, 'Farah', 'farah@gmail.com', '$2y$10$x8GjzxNk/JK/qAveg6ELuOZ0mnPcP/hiPwHkJzpE8EHoOzUYL2HqC', '123111111', 'Mirpur'),
(3, 'Rakib', 'rakib@gmail.com', '$2y$10$x8GjzxNk/JK/qAveg6ELuOZ0mnPcP/hiPwHkJzpE8EHoOzUYL2HqC', '12121111111', 'Mirpur'),
(4, 'Mithila', 'mithila@gmail.com', '$2y$10$x8GjzxNk/JK/qAveg6ELuOZ0mnPcP/hiPwHkJzpE8EHoOzUYL2HqC', '123111111', 'Mirpur'),
(5, 'Test', 'test@gmail.com', '$2y$10$x8GjzxNk/JK/qAveg6ELuOZ0mnPcP/hiPwHkJzpE8EHoOzUYL2HqC', '123111111', 'Mirpur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
