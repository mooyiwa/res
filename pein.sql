-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `asset` varchar(200) DEFAULT NULL,
  `credit` decimal(15,2) DEFAULT NULL,
  `rate` decimal(15,2) DEFAULT NULL,
  `credit_out` decimal(15,2) DEFAULT 0.00,
  `period` int(5) DEFAULT NULL,
  `start` date NOT NULL,
  `finish` date NOT NULL,
  `who` varchar(25) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `accounts` (`id`, `username`, `fname`, `asset`, `credit`, `rate`, `credit_out`, `period`, `start`, `finish`, `who`, `status`, `created_at`, `updated_at`) VALUES
(27,	'terry',	'Terry Max.',	'Test Estates',	1000000.00,	25.00,	1250000.00,	12,	'2019-10-22',	'2020-08-21',	'user',	'Y',	'2019-08-22 10:28:52',	'2019-08-22 10:28:52'),
(28,	'terry',	'Terry Max.',	'Test Estates',	500000.00,	20.00,	600000.00,	12,	'2019-08-22',	'2020-08-21',	'user',	'Y',	'2019-08-22 10:30:18',	'2019-08-22 10:30:18'),
(29,	'terry',	'Terry Max.',	'Test Estates',	250000.00,	15.00,	287500.00,	12,	'2019-08-22',	'2020-08-21',	'user',	'Y',	'2019-08-22 10:33:35',	'2019-08-22 10:33:35');

DROP TABLE IF EXISTS `assets`;
CREATE TABLE `assets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `asset` varchar(255) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `period` int(5) DEFAULT NULL,
  `asset_id` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `amount_1` decimal(15,2) DEFAULT NULL,
  `rate_1` int(5) DEFAULT NULL,
  `amount_2` decimal(15,2) DEFAULT NULL,
  `rate_2` int(5) DEFAULT NULL,
  `amount_3` decimal(15,2) DEFAULT NULL,
  `rate_3` int(5) DEFAULT NULL,
  `amount_4` decimal(15,2) DEFAULT NULL,
  `rate_4` int(5) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `assets` (`id`, `asset`, `location`, `period`, `asset_id`, `status`, `created_at`, `updated_at`, `amount_1`, `rate_1`, `amount_2`, `rate_2`, `amount_3`, `rate_3`, `amount_4`, `rate_4`) VALUES
(3,	'Badewa Estates',	'Agbara',	12,	'1563912703.jpg',	NULL,	NULL,	'2019-08-21 10:04:57',	250000.00,	15,	500000.00,	20,	1000000.00,	25,	5000000.00,	30),
(5,	'Minnenial Blocks',	'Ikeja',	12,	'1563912545.jpg',	NULL,	NULL,	'2019-08-15 08:46:30',	550000.00,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(6,	'Bank House',	'Oregun',	12,	'1563912703.jpg',	'featured',	NULL,	'2019-07-23 19:11:43',	750000.00,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(7,	'Banana Estates',	'Ikeja',	12,	'1563917308.jpg',	'featured',	NULL,	'2019-07-23 20:28:28',	1000000.00,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(8,	'Palm Beach',	'Marina, Lagos',	12,	'1563917308.jpg',	'featured',	NULL,	NULL,	750000.00,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(17,	'Barack Estates',	'Ikoyi',	12,	'1565875193.jpg',	NULL,	NULL,	'2019-08-15 12:32:40',	750000.00,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(19,	'Test Estates',	'Ikeja',	12,	'1566381645.jpg',	NULL,	NULL,	'2019-08-21 09:56:35',	250000.00,	15,	500000.00,	20,	1000000.00,	25,	NULL,	NULL),
(20,	'Seale Estates',	'Omole 2',	12,	'1566386121.jpg',	NULL,	NULL,	'2019-08-21 10:15:21',	250000.00,	15,	500000.00,	20,	NULL,	NULL,	NULL,	NULL),
(21,	'De Estates',	'Ikeja',	12,	'1566386791.png',	NULL,	NULL,	'2019-08-21 10:26:31',	250000.00,	15,	500000.00,	20,	NULL,	NULL,	NULL,	NULL);

DROP TABLE IF EXISTS `cates`;
CREATE TABLE `cates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `cates` (`id`, `cate`, `created_at`, `updated_at`) VALUES
(3,	'Health and Living',	'2018-10-31 21:09:26',	'2018-10-31 20:09:26'),
(4,	'Tuts',	'2018-10-31 21:09:46',	'2018-11-16 13:38:48'),
(6,	'Art, Culture and Style',	'2018-10-31 21:12:57',	'2018-11-16 13:37:47'),
(7,	'Startups',	'2018-10-31 21:13:53',	'2018-11-16 13:36:50');

DROP TABLE IF EXISTS `faqs`;
CREATE TABLE `faqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `story` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `faqs` (`id`, `story`, `updated_at`, `created_at`) VALUES
(1,	'lorem ipsum lorem ipsum lorem',	'2019-08-06 08:52:56',	'0000-00-00 00:00:00');

DROP TABLE IF EXISTS `joins`;
CREATE TABLE `joins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `story` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `joins` (`id`, `story`, `created_at`, `updated_at`) VALUES
(1,	'lorem ipsum lorem ipsum join us edituing ...',	'2019-08-14 14:49:26',	'2019-08-14 13:49:26');

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` varchar(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `cate` varchar(200) NOT NULL,
  `post` blob NOT NULL,
  `auth` varchar(100) NOT NULL,
  `upped` varchar(5) DEFAULT NULL,
  `fname` varchar(200) NOT NULL,
  `start` date NOT NULL,
  `finish` date NOT NULL,
  `score` varchar(25) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `accepted` varchar(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`title`,`cate`,`auth`,`start`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `posts` (`id`, `post_id`, `title`, `cate`, `post`, `auth`, `upped`, `fname`, `start`, `finish`, `score`, `timestamp`, `accepted`, `created_at`, `updated_at`) VALUES
(70,	'12326',	'10 Benefis of Black seed oil',	'Health and Living',	'<p>The post the post the benefits</p><p>one</p><p>two</p><p>three<br></p>',	'terry',	NULL,	'Terry Max.',	'2018-11-16',	'2018-12-16',	NULL,	'2019-08-14 10:13:31',	'Y',	'2018-11-16 14:27:26',	'2019-08-14 09:13:31'),
(48,	'32420',	'Beautiful',	'Food and Travel',	'Beautiful post',	'terry',	NULL,	'Terry Max.',	'2018-10-30',	'2018-11-29',	'1',	'2019-08-14 10:13:31',	'Y',	'2018-11-04 20:14:44',	'2019-08-14 09:13:31'),
(44,	'21453',	'Build amazing apps with Laravel',	'Tuts',	'<div>Laravel affords you the ability to build industry strength applications, riding on a well documented docs site and a non-repentant community of developers.</div><div><span style=\"background-color: rgb(153, 102, 0);\"><br></span></div><div><!--?php<br--></div><div><!--?php<br--><font color=\"#669900\"><span style=\"background-color: rgb(153, 102, 0);\"><br><font color=\"#330033\"><b><span style=\"background-color: rgb(255, 255, 255);\">namespace App\\Http\\Controllers;<br><br>use Illuminate\\Http\\Request;<br><br>//use DB;<br>use App\\Post;<br>use App\\Cate;<br>use App\\User;<br>use App\\Mail\\SignedUp;<br>use App\\Mail\\Recovered;<br><br>class pagesController extends Controller<br>{<br><br>&nbsp;&nbsp;&nbsp; public function __Construct(Post $post, Cate $cate, User $user) {<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $this-&gt;user = $user;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $this-&gt;post = $post;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $this-&gt;cate = $cate;<br><br>&nbsp;&nbsp;&nbsp; }</span></b></font></span></font><br></div><div><br></div><div><br></div><div>Laravel.. the framework for PHP artisans.<br></div>',	'terry',	NULL,	'Terry Max.',	'2018-02-26',	'2018-03-28',	'40',	'2019-08-14 10:13:31',	'Y',	'2018-11-04 20:14:44',	'2019-08-14 09:13:31'),
(41,	'19215',	'Creative Copywriter',	'Art, Culture and Style',	'You are an awesome creative writer and love to work in an amazing design lab.<br><br>Our office in Sydney, Australia needs a competent copywriter with an impressive body of writing and story boarding work. <br><br>You\'ll love the sights and the team you\'ll be working with. Come in.',	'terry',	NULL,	'Terry Max.',	'2018-02-10',	'2018-03-12',	NULL,	'2019-08-14 10:13:31',	'Y',	'2018-11-04 20:14:44',	'2019-08-14 09:13:31'),
(71,	'31136',	'Eating Avocado',	'Health and Living',	'Eating avocado... <br>',	'terry',	NULL,	'Terry Max.',	'2018-11-16',	'2018-12-16',	NULL,	'2019-08-14 10:13:31',	'Y',	'2018-11-16 14:48:35',	'2019-08-14 09:13:31'),
(49,	'33628',	'Eating right',	'Food and Travel',	'<div>Some dummy post. <br></div><div><br></div><div>\r\n<font color=\"#660066\">On a test paragraph</font></div><div><br></div><div><span style=\"background-color: rgb(204, 255, 0);\"><font size=\"6\"><b>\"a test quote\"</b></font></span><br></div><br><div><br></div>',	'terry',	NULL,	'Terry Max.',	'2018-10-31',	'2018-11-30',	'3',	'2019-08-14 10:13:31',	'Y',	'2018-11-04 20:14:44',	'2019-08-14 09:13:31'),
(56,	'44742',	'Finding magic in selling',	'Food and Travel',	'<blockquote> I remember pushing away all the marketing and selling job offers I got after graduation and a lot of folks just zap when they hear it\'s a selling job. So many questions and thoughts probably joggling in the head.. Who do i sell to?, I\'m not born for it, i don\'t have the charm or charisma,<br> What if I don\'t sell?<br><br><strong>The Product</strong><br><br>First off, having a good product and believing in the product is a very important ingredient in the larger process of selling. Believing in the product you\'re selling puts you 80 percent up since you\'re confident it\'s a product you\'d buy yourself.<br><br>If there\'s a totally new idea around the product, it still needs to be what people will want and be willing to pay for.<br><br><strong>The Pricing</strong><br><br>Your product has to be priced right. A general rule of thumb is that it has to be very affordable or fairly affordable, except your product is set out at the beginning to sell to high networth individuals or entities.<br><br>If your price point in some demographics is not right or doesn\'t work because the sales are coming in as expected, then it\'s time to pivot up or down on the pricing. You might find out you don\'t dictate the price.<br><br>In selling it\'s also important to know who you\'re selling to and where.<br><br><p data-height=\"265\" data-theme-id=\"0\" data-slug-hash=\"QJNvMa\" data-default-tab=\"css,result\" data-user=\"marcusconnor\" data-pen-title=\"Checkbox Rocker Toggle Switch\" class=\"codepen\">See the Pen <a href=\"https://codepen.io/marcusconnor/pen/QJNvMa/\">Checkbox Rocker Toggle Switch</a> by Marcus Connor (<a href=\"https://codepen.io/marcusconnor\">@marcusconnor</a>) on <a href=\"https://codepen.io\">CodePen</a>.</p>\r\n<script async=\"\" src=\"https://static.codepen.io/assets/embed/ei.js\"></script><br><br><strong>Go Digital</strong><br><br>Promoting your product or service is another huge part of the equation. Going on TV, on air and the print media is just one part of that equation. In this digital age, you will need to go digital in your marketing and selling efforts. <br><br>Get a website and optimize it for keywords people will be typing into search engines. Research on Search Engine Optimization or just let the pros handle your website for you.<br><br>Social media marketing is another angle. Your social accounts need to be revved up for business. Facebook helps you with business pages, with Instagram you can set up a business account and run ads from there. You can do same with your Facebook pages and on Twitter you can run a sponsored post as well. <br><br><br><br></blockquote>',	'terry',	NULL,	'Terry Max.',	'2018-11-10',	'2018-12-10',	NULL,	'2019-08-14 10:13:31',	'Y',	'2018-11-10 11:10:25',	'2019-08-14 09:13:31'),
(8,	'17426',	'Finding magic in your career',	'Food and Travel',	'<font size=\"4\">Loving to go to work, bonding with work mates, sinking into the work culture and ultimately getting the job done and keeping your sanity is the balance we all must find in our work and work places..</font><br>',	'terry',	NULL,	'Terry Max.',	'2018-02-06',	'2018-03-08',	NULL,	'2019-08-14 10:13:31',	'Y',	'2018-11-04 20:14:44',	'2019-08-14 09:13:31'),
(69,	'21138',	'Group of teens power their local community',	'Startups',	'post',	'terry',	'Y',	'Terry Max.',	'2018-11-15',	'2018-12-15',	NULL,	'2019-08-14 10:13:31',	'Y',	'2018-11-15 07:24:36',	'2019-08-14 09:13:31'),
(67,	'10504',	'Integrating the Paystack Webpay',	'Tuts',	'<p><span style=\"font-size: 18px;\">Paystack is a secure payment gateway that helps you collect payments directly into your bank account from your website. It is also pretty easy to integrate. Let’s jump right in..<br>I’ll demonstrate a sample implementation in PHP.<br>Create a project folder in your favorite text editor and name it payfees (You can give it any name you want).<br>Within your payfees folder, create index.php, pay.php and callback.php<br>Open index.php and dump in the code below;</span></p>\r\n<p></p>\r\n<p data-height=\"265\" data-theme-id=\"0\" data-slug-hash=\"oQZQmR\" data-default-tab=\"html\" data-user=\"bamidelesi\" data-pen-title=\"Paystack Integration\" class=\"codepen\">See the Pen <a href=\"https://codepen.io/bamidelesi/pen/oQZQmR/\">Paystack Integration</a> by Silas (<a href=\"https://codepen.io/bamidelesi\">@bamidelesi</a>) on <a href=\"https://codepen.io\">CodePen</a>.</p>\r\n<p><span style=\"font-size: 18px;\">Next, open pay.php and dump in the code below;</span></p>\r\n<p></p>\r\n<p data-height=\"265\" data-theme-id=\"0\" data-slug-hash=\"gQmZOM\" data-default-tab=\"html\" data-user=\"bamidelesi\" data-pen-title=\"gQmZOM\" class=\"codepen\">See the Pen <a href=\"https://codepen.io/bamidelesi/pen/gQmZOM/\">gQmZOM</a> by Silas (<a href=\"https://codepen.io/bamidelesi\">@bamidelesi</a>) on <a href=\"https://codepen.io\">CodePen</a>.</p><p><span style=\"font-size: 18px;\">Note* that the post variables are collected in the index.php script and sent to the pay.php script where the actual web pay is done.<br><br>Still within yor pay.php file, make sure the body tag has an onload attribute like so;<br>Also just before the end body tag, dump the following code snippets</span></p><p><span style=\"font-size: 18px;\"></span></p><p data-height=\"265\" data-theme-id=\"0\" data-slug-hash=\"MzpZMM\" data-default-tab=\"html\" data-user=\"bamidelesi\" data-pen-title=\"MzpZMM\" class=\"codepen\">See the Pen <a href=\"https://codepen.io/bamidelesi/pen/MzpZMM/\">MzpZMM</a> by Silas (<a href=\"https://codepen.io/bamidelesi\">@bamidelesi</a>) on <a href=\"https://codepen.io\">CodePen</a>.</p><p><span style=\"font-size: 18px;\">Now head up to your paystack.com project account and replace the var public_key to the one in your project dashboard.<br>Make sure to use the public key here.<br><br>var public_key = ‘pk_test_7xxxx’;<br><br>From your project dashboard, look under the API Keys and Webhooks tab and copy the public key from there.<br>Finally, in your callback.php file, dump the following;</span></p><p></p><p data-height=\"265\" data-theme-id=\"0\" data-slug-hash=\"yQMZLW\" data-default-tab=\"html\" data-user=\"bamidelesi\" data-pen-title=\"yQMZLW\" class=\"codepen\">See the Pen <a href=\"https://codepen.io/bamidelesi/pen/yQMZLW/\">yQMZLW</a> by Silas (<a href=\"https://codepen.io/bamidelesi\">@bamidelesi</a>) on <a href=\"https://codepen.io\">CodePen</a>.</p>\r\n<script async=\"\" src=\"https://static.codepen.io/assets/embed/ei.js\"></script><span style=\"font-size: 18px;\">Also, make sure you replace the Bearer key with your secret key from your dashboard on the line<br>‘Authorization: Bearer sk_test_xxxx’<br><br>You should now be the new sparky in town!</span><p></p>\r\n<script async=\"\" src=\"https://static.codepen.io/assets/embed/ei.js\"></script><br><p></p>\r\n<script async=\"\" src=\"https://static.codepen.io/assets/embed/ei.js\"></script>\r\n<p></p>\r\n<script async=\"\" src=\"https://static.codepen.io/assets/embed/ei.js\"></script>\r\n<p></p><br>\r\n<p></p>\r\n<p></p>\r\n<p></p>\r\n<p></p>',	'terry',	NULL,	'Terry Max.',	'2018-11-14',	'2018-12-14',	'1',	'2019-08-14 10:13:31',	'Y',	'2018-11-14 16:15:25',	'2019-08-14 09:13:31'),
(72,	'30540',	'Kegel Exercises',	'Health and Living',	'The post the post the post',	'terry',	NULL,	'Terry Max.',	'2018-11-16',	'2018-12-16',	NULL,	'2019-08-14 10:13:31',	'Y',	'2018-11-16 14:49:21',	'2019-08-14 09:13:31'),
(64,	'24658',	'testy',	'Food and Travel',	'<h1>new post</h1>\r\n\r\nlist<p></p><ol><li>\r\n\r\n1. one </li><li><br></li><li>\r\n2. two</li></ol><p></p>\r\n\r\nA bold one',	'terry',	NULL,	'Terry Max.',	'2018-11-12',	'2018-12-12',	NULL,	'2019-08-14 10:13:31',	'Y',	'2018-11-12 06:08:23',	'2019-08-14 09:13:31'),
(62,	'31344',	'Traveling and Eating Ghana',	'Food and Travel',	'<h1><strong>Traveling to Ghana</strong></h1>\r\n<p>It was a totally awesome experience seeing Ghana this last holiday</p>\r\n<blockquote>\r\n<p>Hashtag holiday!</p>\r\n</blockquote>\r\n<p>Visiting a Ghana Prince</p>\r\n<p>Remembering our roots</p>\r\n<p>Finding food</p>',	'terry',	'Y',	'Terry Max.',	'2018-11-12',	'2018-12-12',	NULL,	'2019-08-14 10:13:31',	'Y',	'2018-11-12 03:19:50',	'2019-08-14 09:13:31'),
(65,	'20003',	'Yes Thank you',	'Startups',	'<p>ghhhhhh</p><p><br></p><p>mjkk</p><p><br></p><p><br></p><p>jjkkk</p><p><br></p><p>jkkkk</p><p><br></p><p>jjkk</p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p>jjjjnmm</p><p><br></p><p><br></p><p><br></p><p><br></p><p>hjjjj</p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p>hhjkk</p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p>hjjjj</p><p><br></p><p>jjjkk\\\\mjkk</p><p><br></p><p><br></p><p>kk<br></p>',	'terry',	NULL,	'Terry Max.',	'2018-11-12',	'2018-12-12',	NULL,	'2019-08-14 10:13:31',	'Y',	'2018-11-12 18:57:36',	'2019-08-14 09:13:31');

DROP TABLE IF EXISTS `pros`;
CREATE TABLE `pros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `author` text DEFAULT NULL,
  `reader` text DEFAULT NULL,
  `who` varchar(25) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `pros` (`id`, `title`, `author`, `reader`, `who`, `updated_at`) VALUES
(1,	'Become a Pro Author',	'Becoming a Pro Author means signing up for the Premium Scribble Author account.<br>',	NULL,	'author',	'2018-11-02 12:22:54'),
(2,	'Become a Pro Reader',	NULL,	'<p align=\"left\"><font size=\"4\"><strong>Becoming a</strong> Pro Reader means signing up for the monthly Premium Reader Subscription.</font></p>\r\n<p align=\"left\">\r\n<font size=\"4\" style=\"background-color: rgb(255, 255, 255);\" color=\"#330000\">Your Scribble Reader Subscription signs you up automatically on our affiliate program where you sign up another paying member and you earn when your friend signs up as a Pro member.</font></p><p align=\"left\"><br></p><p align=\"left\"><font color=\"#FFFFCC\"><span style=\"background-color: rgb(153, 0, 51);\"><font size=\"4\"><span style=\"background-color: rgb(0, 255, 153);\"></span><br></font></span></font></p>',	'reader',	'2018-11-02 12:02:25');

DROP TABLE IF EXISTS `txn`;
CREATE TABLE `txn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `wallet_id` varchar(25) NOT NULL,
  `item` varchar(255) NOT NULL,
  `cost` decimal(15,2) NOT NULL,
  `qty` varchar(25) NOT NULL,
  `cafe` varchar(255) NOT NULL,
  `txn_id` varchar(25) NOT NULL,
  `debit` decimal(15,2) NOT NULL,
  `credit` decimal(15,2) NOT NULL,
  `total` decimal(15,2) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(25) NOT NULL,
  `paidstamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `paid_day` date NOT NULL,
  `auth` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `txn` (`id`, `username`, `wallet_id`, `item`, `cost`, `qty`, `cafe`, `txn_id`, `debit`, `credit`, `total`, `timestamp`, `status`, `paidstamp`, `paid_day`, `auth`) VALUES
(50,	'eatio',	'41922',	'Dodo - One portion',	80.00,	'2',	'Mixed Grills Tanke',	'1151',	0.00,	0.00,	0.00,	'2017-12-31 07:12:52',	'Pending',	'0000-00-00 00:00:00',	'0000-00-00',	''),
(54,	'eatio',	'41922',	'Goat meat',	200.00,	'4',	'Mixed Grills Tanke',	'2651',	-800.00,	0.00,	-800.00,	'2017-12-31 07:12:55',	'Paid',	'2018-01-02 01:01:18',	'2018-01-02',	'zteller'),
(56,	'eatio',	'41922',	'Bottled Water',	100.00,	'2',	'Mixed Grills Tanke',	'2651',	-200.00,	0.00,	-200.00,	'2017-12-31 07:12:03',	'Paid',	'2018-01-02 01:01:18',	'2018-01-02',	'zteller'),
(59,	'eatio',	'41922',	'Jolof Rice - One portion',	100.00,	'1',	'Mixed Grills Tanke',	'4535',	-100.00,	0.00,	-100.00,	'2017-12-31 08:12:35',	'Pending',	'0000-00-00 00:00:00',	'0000-00-00',	''),
(61,	'eatio',	'41922',	'Goat meat',	200.00,	'1',	'Mixed Grills Tanke',	'4535',	-200.00,	0.00,	-200.00,	'2017-12-31 08:12:46',	'Pending',	'0000-00-00 00:00:00',	'0000-00-00',	''),
(63,	'eatio',	'41922',	'Bottled Water',	100.00,	'1',	'Mixed Grills Tanke',	'4535',	-100.00,	0.00,	-100.00,	'2017-12-31 08:12:58',	'Pending',	'0000-00-00 00:00:00',	'0000-00-00',	''),
(64,	'eatio',	'41922',	'Wallet Credit',	0.00,	'',	'',	'1318',	0.00,	5000.00,	5000.00,	'2018-01-02 02:01:13',	'Paid',	'0000-00-00 00:00:00',	'0000-00-00',	'');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `upline` varchar(255) DEFAULT NULL,
  `who` char(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `passcode` varchar(10) DEFAULT NULL,
  `user_id` varchar(50) NOT NULL,
  `secret` varchar(25) NOT NULL,
  `hash_secret` varchar(255) NOT NULL,
  `first` varchar(255) DEFAULT NULL,
  `last` varchar(255) DEFAULT NULL,
  `sex` char(2) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` char(100) DEFAULT NULL,
  `kin` varchar(255) DEFAULT NULL,
  `kin_address` text DEFAULT NULL,
  `kin_phone` varchar(100) DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `account_name` varchar(255) DEFAULT NULL,
  `account_no` varchar(255) DEFAULT NULL,
  `photo_id` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`username`,`user_id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `username`, `upline`, `who`, `password`, `passcode`, `user_id`, `secret`, `hash_secret`, `first`, `last`, `sex`, `email`, `phone`, `kin`, `kin_address`, `kin_phone`, `bank`, `account_name`, `account_no`, `photo_id`, `updated_at`) VALUES
(2,	'admin1',	'',	'admin',	'535a622e247e0fc53c7e26e1ed7e37bf',	'',	'',	'',	'',	'IT',	NULL,	'M',	'admin@aol.com',	'7068895548',	'',	'',	'',	NULL,	NULL,	NULL,	'',	'2019-08-14 08:04:34'),
(4624,	'coco',	NULL,	'user',	'e29af43754ebb2caecd0154f7768cc68',	NULL,	'99490',	'186599',	'61d15cb8ae765ca80ee529777e853b49',	NULL,	NULL,	NULL,	'sdelesil@gmail.com',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(4621,	'mooyiwa',	'karry',	'user',	'e29af43754ebb2caecd0154f7768cc68',	NULL,	'41165',	'309221',	'9e98d0facb88e022a2602290c47393f4',	'Silas',	'Bamidele',	NULL,	'sdelel@gmail.com',	'09990',	NULL,	NULL,	NULL,	'GTBank',	'Silas Bee',	'01556657',	NULL,	'2018-11-09 11:45:15'),
(4623,	'silasb',	NULL,	'user',	'e29af43754ebb2caecd0154f7768cc68',	NULL,	'25335',	'137487',	'416510d2bd6fcd19b4e328d62b6b10db',	NULL,	NULL,	NULL,	'sdelesil@gmail.com',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(4568,	'terry',	'',	'user',	'5f4dcc3b5aa765d61d8327deb882cf99',	'88125',	'25560',	'406827',	'3b13c858da155ca191aff01aec5ef5a7',	'Terry',	'Max.',	NULL,	'terry@aol.com',	'0800',	'Mr Femi Black',	'66, Yaba ave',	'0909900990',	'GTBank',	'Terry Blue',	'0123456789',	'1565774109.jpg',	'2019-08-14 09:13:31');

DROP TABLE IF EXISTS `works`;
CREATE TABLE `works` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `how` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `works` (`id`, `title`, `how`, `updated_at`) VALUES
(1,	'How It Works',	'<p>RessBank has your investments in real estate covered.</p><p>Your account is secure, easy to operate and will see high returns on your lending.</p><p>What more? It\'s a breeze getting started.<br></p>',	'2019-08-14 13:49:17');

-- 2019-08-22 11:18:35
