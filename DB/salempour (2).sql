-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2018 at 03:26 PM
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
-- Database: `salempour`
--

-- --------------------------------------------------------

--
-- Table structure for table `activation_codes`
--

CREATE TABLE `activation_codes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `expire` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activation_codes`
--

INSERT INTO `activation_codes` (`id`, `user_id`, `code`, `used`, `expire`, `created_at`, `updated_at`) VALUES
(1, 1, 'mPrzcEtwGgGQKXFnDy9FQhDaTFxJQ5izgr2Xm8CijGGtatpi91GT4zJSc61x', 0, '2018-06-03 07:57:47', '2018-06-03 04:12:47', '2018-06-03 04:12:47'),
(2, 2, 'dEoTWEGYIBIBSHzI49R33VuvBFmqN9o2K5pkul7ChMJsoQpc9hyVTXQ2YflT', 0, '2018-06-03 08:00:33', '2018-06-03 04:15:33', '2018-06-03 04:15:33'),
(15, 15, 'uw3uZ9Q8PLKVOzUt3Oa7BEsXXPGwfBE5ZuctGgxR96e2uIvWG19mIe5B3v0n', 0, '2018-06-03 08:46:14', '2018-06-03 05:01:14', '2018-06-03 05:01:14'),
(16, 16, 'ODnKXSROVoEQbOvH3sDdKM8wmSzzwvp23mu2tWTuGRjSwVNNP9uvutHS4mJK', 0, '2018-06-03 08:46:50', '2018-06-03 05:01:50', '2018-06-03 05:01:50'),
(19, 19, 'UqsokYO1m3AxYrypa8LfZzOrT8RL7JmFQGuHGzKbY7fcygeARrbpEQDAPCUf', 0, '2018-06-03 08:53:49', '2018-06-03 05:08:49', '2018-06-03 05:08:49'),
(20, 20, '7SKjFNNpLtllv6EbigN8O96yNiCC1tdoSYZXyZVP6HzanLV9wjEJc5oNeHAK', 1, '2018-06-03 08:57:10', '2018-06-03 05:12:10', '2018-06-03 05:25:11'),
(21, 21, 'xMl9QrTVZREsbfilCW6LBje71lqe9sXlIXT3jT2Toi2TZhhjKTGLztlwvTgH', 1, '2018-06-03 09:11:44', '2018-06-03 05:26:44', '2018-06-03 05:27:13'),
(22, 22, '7IwzWypGzQnbUxcG1ZC8UrYMeeJGjZJXBGcuMwTXXxP35S1pWILW2Kxt5BE4', 1, '2018-06-03 09:18:36', '2018-06-03 05:33:36', '2018-06-03 05:33:44'),
(23, 23, '2f5GDzV01be5U8lF7vx7Z6gYl4wO7qHHED6QYsjVHOYAkBikoaszCR5uzt9k', 0, '2018-06-10 12:01:16', '2018-06-10 08:16:16', '2018-06-10 08:16:16'),
(24, 24, 'jhkyRp4cD5XkxNZc34Nh4pZIpVxUYHpgsWPeCqRAXAzUJfl54yftwMRVtOs3', 1, '2018-06-10 12:05:32', '2018-06-10 08:20:32', '2018-06-10 08:21:22'),
(25, 25, 'TO29HPIliZcJXDOFzfZcH1d01asRXABH0l7zGBRwJzGYfGImcKQSAYSsBmTj', 1, '2018-06-10 14:39:54', '2018-06-10 10:54:54', '2018-06-10 10:55:16');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `writer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewCount` int(11) NOT NULL DEFAULT '0',
  `commentCount` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `user_id`, `writer`, `title`, `body`, `slug`, `tags`, `images`, `viewCount`, `commentCount`, `created_at`, `updated_at`) VALUES
(1, 22, 'علی حمرانی', 'مقالات', 'حجم: 46.8 کیلوبایت\r\n \r\n\r\nدانلود فونت 2 نازنین – 2Nazanin\r\nقدیمی‌ترین نسخه فونت نازنین همین فونت دو نازنین است که در سال 1998 در یک وزن Regular توسط MRTSoft منتشر شد.\r\n\r\nدانلود فونت دو نازنین – 2 Nazanin\r\nحجم: 59.8 کیلوبایت\r\n \r\n\r\nدانلود فونت بهیج نازنین – Bahij Nazanin\r\nفونت بهیج نازنین را دکتر عبدالحمید بهیج (استاد دانشگاه کابل افغانستان) بازطراحی و در سال 2012 منتشر کردند. در این نسخه فونت نازنین مورد بازسازی و تعمیرات اساسی قرار گرفته. تمام حروف و کارکترهای فونت نازنین به روی کارکتر مپ فونت ادوب عربیک پیاده شده و حروف سایر زبان های هم خانواده فارسی چون کردی، اردو، عربی و… در آن قرار گرفته است. این فونت به صورت توامان از حروف انگلیسی مشابه و هم سطح پشتیبانی میکند. این فونت همچنین از تمام ویژگی های یک فونت حرفه ای چون کرنینگ (فشردگی بین حروف)، لگچرهای چند حرفی و… پشتیبانی میکند. به صراحت می توان گفت این نسخه از فونت نازنین حرفه ای ترین نسخه فونت نازنین است.\r\nنکته:\r\nدر استفاده از این فونت دقت کنید چرا که از عددهای انگلیسی هم پشتیبانی میکند. اگر دیدید که در برنامه شما عددها انگلیسی است باید تنظیمات برنامه را تغییر دهید.\r\n\r\nدریافت دانلود فونت بهیج نازنین – Bahij Nazanin\r\nحجم: 194 کیلوبایت\r\n \r\n\r\nدانلود فونت آی آر نازنین – IR Nazanin\r\nفونت نازنین در سال 2013 به سفارش شورای عالی اطلاع رسانی و توسط آقای حسین زاهدی مورد بازسازی و بازنگری قرار گرفت و با عنوان IR Nazanin منتشر گردید. این فونت از حروف و اعداد انگلیسی پشتیبانی میکند و قابلیت تایپ عربی و کردی نیز دارد.\r\n\r\nنکته: در استفاده از این فونت دقت کنید چرا که از عددهای انگلیسی هم پشتیبانی میکند. اگر دیدید که در برنامه شما عددها انگلیسی است باید تنظیمات برنامه را تغییر دهید.\r\n\r\nدانلود فونت آی آر نازنین – IR Nazanin\r\nحجم: 221 کیلوبایت\r\n \r\n\r\nدانلود فونت ال ام ان نازنین – LMN Nazanin\r\nاین فونت در سال 2012 ضمن فارسی نگار لیومون منتشر شد. هیچ تغییر عمده و قابل توجه ای در این نسخه از فونت صورت نگرفته است. نه حروف عربی دارد و نه انگلیسی.\r\n\r\nدانلود فونت LMN Nazanin\r\nحجم: 96.6 کیلوبایت\r\n \r\n\r\nدانلود فونت ایکس بی کیهان – XB Keyhan\r\nخانواده پنج تایی فونت کیهان براساس همان حروف و گلیف های نازنین را بهنام در سایت تخصصی ایرماگ در سال 2009 منتشر نمود. این فونت که در ابتدا برای سیستم عامل Mac OS X طراحی شده بود بعدا به طور کامل بازسازی شده و گسترش یافته و برای ویندوز ها هم مناسب شد. فونت کیهان (حروف همان نازنین خودمان است فقط اسمش را تغییر داده اند) به طور کامل از حروف عربی، دری، کردی، پشتو، فارسی، اویغور، اردو، ازبکی، ترکی قدیم (عثمانی) و ترکی جدید فن آوری (روم) با استفاده از اپل پیشرفته تایپوگرافی (AAT) و تکنولوژی مایکروسافت نوع (OT) با فرمت TrueType طراحی و پیاده سازی شده است.\r\nنکته: در استفاده از این فونت دقت کنید چرا که از عددهای انگلیسی هم پشتیبانی میکند. اگر دیدید که در برنامه شما عددها انگلیسی است باید تنظیمات برنامه را تغییر دهید.\r\n\r\nدانلود فونت ایکس بی کیهان – XB Keyhan\r\nحجم: 1.1 مگابایت\r\nدانلود فونت پی نازنین – p nazanin', 'مقالات', 'asdsdfsf', '{\"images\":{\"898\":\"upload\\/images\\/8_f06w8I8giYco2FbEYAXmsa6vC6vmAxlO18ZxXmuk.jpeg\",\"321\":\"upload\\/images\\/3_f06w8I8giYco2FbEYAXmsa6vC6vmAxlO18ZxXmuk.jpeg\"}}', 6, 0, '2018-06-07 07:03:52', '2018-06-13 04:28:39'),
(2, 22, 'رضا سالم پور', 'ساخت انواع قایق', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان ج', 'ساخت-انواع-قایق', 'شیبسش یشسیب شسیب شسب شسبش ب بشسیب', '{\"images\":{\"898\":\"upload\\/images\\/8_ellKwUBiCg829VCswmsTdWreVZ8YbQ7zgoV4HB2W.jpeg\",\"321\":\"upload\\/images\\/3_ellKwUBiCg829VCswmsTdWreVZ8YbQ7zgoV4HB2W.jpeg\"}}', 91, 0, '2018-06-09 11:21:20', '2018-06-11 06:06:27'),
(3, 22, 'رضا سالم پور', 'ساخت انواع قایق', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان ج', 'ساخت-انواع-قایق-1', 'شیبسش یشسیب شسیب شسب شسبش ب بشسیب', '{\"images\":{\"898\":\"upload\\/images\\/8_zvI5ML6XrfipymEF2ib2PBBWxf66G4MNebHAi5Jw.jpeg\",\"321\":\"upload\\/images\\/3_zvI5ML6XrfipymEF2ib2PBBWxf66G4MNebHAi5Jw.jpeg\"}}', 55, 0, '2018-06-09 11:23:17', '2018-06-11 07:44:36'),
(4, 22, 'رضا سالم پور', 'ساخت انواع قایق', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان ج', 'ساخت-انواع-قایق-2', 'شیبسش یشسیب شسیب شسب شسبش ب بشسیب', '{\"images\":{\"898\":\"upload\\/images\\/8_3GgV3rWWGr2hgQMn7Oke7xjDbXiaUM88KSuQhHMi.jpeg\",\"321\":\"upload\\/images\\/3_3GgV3rWWGr2hgQMn7Oke7xjDbXiaUM88KSuQhHMi.jpeg\"}}', 65, 0, '2018-06-09 11:24:19', '2018-06-13 04:40:15'),
(5, 22, 'رضا سالم پور', 'طراحی قالب اتاقک پراید', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان ج', 'طراحی-قالب-اتاقک-پراید', 'شیبسش یشسیب شسیب شسب شسبش ب بشسیب', '{\"images\":{\"898\":\"upload\\/images\\/8_cYcktHVmSSHNv7tk8SQcg6TziOhn3oMfJdV91T26.jpeg\",\"321\":\"upload\\/images\\/3_cYcktHVmSSHNv7tk8SQcg6TziOhn3oMfJdV91T26.jpeg\"}}', 78, 0, '2018-06-09 11:24:44', '2018-06-11 07:42:01');

-- --------------------------------------------------------

--
-- Table structure for table `article_category`
--

CREATE TABLE `article_category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_category`
--

INSERT INTO `article_category` (`category_id`, `article_id`) VALUES
(1, 1),
(1, 2),
(1, 5),
(2, 2),
(2, 4),
(2, 5),
(3, 2),
(4, 3),
(6, 4),
(6, 5);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'کارگاهی', '2018-06-03 07:52:52', '2018-06-03 07:52:52'),
(2, 'قایق', '2018-06-03 07:52:58', '2018-06-03 07:52:58'),
(3, 'ماشین سنگین', '2018-06-07 07:33:12', '2018-06-07 07:33:12'),
(4, 'کامپوزیت', '2018-06-07 07:33:21', '2018-06-07 07:33:21'),
(5, 'اتاقک پراید', '2018-06-07 07:33:33', '2018-06-07 07:33:33'),
(6, 'کشتی', '2018-06-07 07:33:43', '2018-06-07 07:33:43');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`category_id`, `product_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(3, 3),
(4, 3),
(5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_05_29_130647_create_articles_table', 1),
(4, '2018_05_29_131546_create_products_table', 1),
(5, '2018_05_30_110737_create_categories_table', 1),
(6, '2018_06_03_070330_create_activation_codes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `images`, `title`, `slug`, `tags`, `body`, `created_at`, `updated_at`) VALUES
(1, 22, '{\"images\":{\"898\":\"upload\\/images\\/8_1lg9x3sCFcWlykXMqnv4wkPdZMyaSng3bmVwGAvw.jpeg\",\"321\":\"upload\\/images\\/3_1lg9x3sCFcWlykXMqnv4wkPdZMyaSng3bmVwGAvw.jpeg\"}}', 'فروش ماشین', 'فروش-ماشین', 'یسبلعسذیبتن', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '2018-06-07 05:39:45', '2018-06-07 05:39:45'),
(2, 22, '{\"images\":{\"898\":\"upload\\/images\\/8_mu6VKyHS58vmqFihcJMl5wqx3u4uqQjciVg8EjW0.jpeg\",\"321\":\"upload\\/images\\/3_mu6VKyHS58vmqFihcJMl5wqx3u4uqQjciVg8EjW0.jpeg\"}}', 'فروش بنز', 'فروش-بنز', 'sdfsdfشیسشس یش', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '2018-06-07 05:40:06', '2018-06-07 05:40:06'),
(3, 22, '{\"images\":{\"898\":\"upload\\/images\\/8_8q0nmEZ4hFRZgn0Cy8hWxYSUTY0eyQGfxIIcJ4O7.jpeg\",\"321\":\"upload\\/images\\/3_8q0nmEZ4hFRZgn0Cy8hWxYSUTY0eyQGfxIIcJ4O7.jpeg\"}}', 'قالب طراحی شده پراید', 'قالب-طراحی-شده-پراید', 'asdasdasd بل یبل سیللسی', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان ج', '2018-06-09 11:55:39', '2018-06-09 11:55:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ali', 'ali@gmail.com', '$2y$10$imwJ2Hi5obSacilSpf8lFePTXWDGk4mHGraJuWbJfuyFkkYNm85T.', 'user', 1, 'ONvOIwycEXOwglWDD9dXA4BTSQATiXVVqyslTd9qHcAkWzbumIH80vCz8RPa', '2018-06-03 03:44:26', '2018-06-03 05:41:13'),
(2, 'hamid', 'hamrani@gmail.com', '$2y$10$giMYW97KVysGooVIMi1GZ.Ddl5yro6lXclHRNd5jwgCO.zJ1B6Mjm', 'user', 0, 'fzvSuxkYAKO3j06bNWlOAzg0UZru9sUE6oeZsoBuOGFtTdOOoqwsppwiFUiw', '2018-06-03 04:15:32', '2018-06-03 04:15:32'),
(15, 'mamad', 'mamad@gmail.com', '$2y$10$r/qqP2jMyKAEYUN1XlRnl.nvZUcMB79LxTk1fwrOUWrMg9ZhplLm.', 'user', 1, NULL, '2018-06-03 05:01:14', '2018-06-03 05:38:33'),
(16, 'alihamrani', 'ali.hamrani80@gmail.com', '$2y$10$aBndUHPnU6H6UUfthLNq4OXiwVKPgzCbe3.HDmWWBHMMz6cUn09B.', 'user', 0, NULL, '2018-06-03 05:01:50', '2018-06-03 05:01:50'),
(19, '007', '007@gmail.com', '$2y$10$WoXQcHiz.TR4fQZGGBFgyOPoy2ffVAfPclva0XpL63pDT9HdkG/FC', 'user', 1, NULL, '2018-06-03 05:08:49', '2018-06-03 05:38:29'),
(20, 'ali', 'alii@gmail.com', '$2y$10$qAcMvviNNBZCVHlN7g5gweri3VXCbDguRsLg/A0uyOJeO7iTfvr/W', 'user', 1, NULL, '2018-06-03 05:12:10', '2018-06-03 05:37:58'),
(21, 'رضا سالم پور', 'reza@gmail.com', '$2y$10$lbCDEJWWpIZCIIcFzkcypeu3mvbjFU3.VqNdj4tMJkwHIYlkC/OWC', 'user', 0, 'NeO1c03hDu4QIhvn9RZK27Du5DMbPoSW6RauedbYoQXeAlYEnByvoCDkpVDz', '2018-06-03 05:26:43', '2018-06-03 05:38:07'),
(22, 'حمیدرضا', 'hamidreza@gmail.com', '$2y$10$Pj.xjoZLMfU/YUAOt4Ii6uckBzvEclBBNhAMDuUKf.WWqWwPWzig.', 'admin', 1, 'N8Ibl4qQQlAyS4rDs7FufgJ5mHb94oHFiM4FTJ8BQldaL0lolyZT6YzqB3Ga', '2018-06-03 05:33:36', '2018-06-03 05:38:36'),
(23, 'ali', 'alii@gmail.comi', '$2y$10$AjqXHwAydDzG6sPdLPWkneN0eB5/hEdhAOWMcqpkCKa08DJh2ru/q', 'user', 0, NULL, '2018-06-10 08:16:16', '2018-06-10 08:16:16'),
(24, 'mamad', 'mamadi@gmail.com', '$2y$10$0jwuBze.LxkrfyxC8adtZuPOMbHU94LlQUduDvJYvPLz8DA0o.u7G', 'user', 1, NULL, '2018-06-10 08:20:32', '2018-06-10 08:21:22'),
(25, 'reza', 'salempour@gmail.com', '$2y$10$3pGXy3SjD74NOgxwy1F6f.OigsuRfxUWQvv4qAVvLnkXCrN43cqpO', 'user', 1, NULL, '2018-06-10 10:54:54', '2018-06-10 10:55:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activation_codes`
--
ALTER TABLE `activation_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activation_codes_user_id_foreign` (`user_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

--
-- Indexes for table `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`category_id`,`article_id`),
  ADD KEY `article_category_article_id_foreign` (`article_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`category_id`,`product_id`),
  ADD KEY `category_product_product_id_foreign` (`product_id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `activation_codes`
--
ALTER TABLE `activation_codes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `activation_codes`
--
ALTER TABLE `activation_codes`
  ADD CONSTRAINT `activation_codes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `article_category`
--
ALTER TABLE `article_category`
  ADD CONSTRAINT `article_category_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
