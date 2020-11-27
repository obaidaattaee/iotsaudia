-- MySQL dump 10.17  Distrib 10.3.25-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: portfolio
-- ------------------------------------------------------
-- Server version	10.3.25-MariaDB-0+deb10u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `about` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about`
--

LOCK TABLES `about` WRITE;
/*!40000 ALTER TABLE `about` DISABLE KEYS */;
INSERT INTO `about` VALUES (1,'نبذة تعريفية','<p style=\"box-sizing: inherit; font-family: droid-arabickufi; margin-bottom: 24px; direction: rtl; unicode-bidi: embed; text-align: right; color: rgb(94, 94, 94); font-size: 16px;\">عرّف الاتحاد الدولي للاتصالات (ITU) (International Telecommunication Union) إنترنت الأشياء بأنه بنية تحتية عالمية لمجتمع المعلومات تُمكّن من تقديم الخدمات المتطورة عن طريق الربط (المادي والافتراضي) بين الأشياء، استناداً إلى تكنولوجيا المعلومات والاتصالات الحالية والمتطورة القابلة للتشغيل البيني.[1]</p><p style=\"box-sizing: inherit; font-family: droid-arabickufi; margin-bottom: 24px; direction: rtl; unicode-bidi: embed; text-align: right; color: rgb(94, 94, 94); font-size: 16px;\">ويرجح أن أول ظهور لهذا المصطلح كان في بدايات القرن الواحد والعشرين بالتحديد في سنة 1999م، على يد الرائد والمبتكر التكنولوجي البريطاني (كيفن أشتون) الذي كانت فكرته أن يتم تطوير منظومة تحليل البيانات لدي الحاسب باستخدام تكنولوجيا أجهزة الاستشعار وربطها ببعض من خلال الإنترنت.[2]</p><p style=\"box-sizing: inherit; font-family: droid-arabickufi; margin-bottom: 24px; direction: rtl; unicode-bidi: embed; text-align: right; color: rgb(94, 94, 94); font-size: 16px;\">هو كل شيء يمكن أن تتعرف عليه شبكة الإنترنت من خلال بروتوكولات الإنترنت المعروفة.[3] والإنسان في هذه الحالة هو المستفيد من كل هذه التفاهمات والاتصالات الشيئية. وبشيء من الخيال العلمي، يصبح الإنسان نفسه (شيئاً) إذا ما أُلصق به أو بمحيطه عنوان إنترنت معين، كأن يُلصق به نظارة أو ساعة أو سوار أو ملابس إلكترونية أو أجهزة أو معدّات طبية على أو داخل جسمه.</p><h2 style=\"box-sizing: inherit; font-family: droid-arabickufi; margin-top: 0px; margin-bottom: 24px; line-height: 1.308; font-size: 24px; color: rgb(17, 17, 17); font-weight: 700; direction: rtl; unicode-bidi: embed; text-align: right;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">كيفية عمل&nbsp;إنترنت الأشياء</span></h2><p style=\"box-sizing: inherit; font-family: droid-arabickufi; margin-bottom: 24px; direction: rtl; unicode-bidi: embed; text-align: right; color: rgb(94, 94, 94); font-size: 16px;\">طريقة الاتصال تم بناؤها عن طريق منصات برمجية معدّة حيث أن هذه المنصات تستقبل طلبات الأجهزة عن طريق الإنترنت أو شبكة ربط داخلية بين هذه الأجهزة و بعضها البعض وتتعامل معها، ويتم الاعتماد أيضًا على البيانات التي يتم جمعها لتسهيل عمليات اتخاذ القرار.[3]</p><h2 style=\"box-sizing: inherit; font-family: droid-arabickufi; margin-top: 0px; margin-bottom: 24px; line-height: 1.308; font-size: 24px; color: rgb(17, 17, 17); font-weight: 700; direction: rtl; unicode-bidi: embed; text-align: right;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">استخدامات&nbsp;إنترنت الأشياء</span></h2><ul style=\"box-sizing: inherit; margin-bottom: 1rem; direction: rtl; unicode-bidi: embed; text-align: right; color: rgb(94, 94, 94); font-family: droid-arabickufi; font-size: 16px;\"><li style=\"box-sizing: inherit; direction: rtl; unicode-bidi: embed; text-align: right;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">الصحة:&nbsp;</span>لقد قدمت (إنتل – Intel) منصة برمجية متكاملة، (Health Application Platform) (HAP)، لتسهيل عملية جمع البيانات الطبية لإراسلها إلي الأطباء المتابعين للحالة أو المستشفيات المعنية لتحليلها و تقديم تشخيص أو خدمة المتابعة الطبية دون الحاجة من المريض لترك المنزل.[4] أما عن الأشخاص الذين يعانون من أمراض القلب يمكن استخدام خدمة (AliveCor) للكشف عن عدم إنتظام ضربات القلب.[5]</li><li style=\"box-sizing: inherit; direction: rtl; unicode-bidi: embed; text-align: right;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">البيت الذكي Smart Home:&nbsp;</span>هو تطوير منازل قادرة على القيام بالعديد من المهام الذكية بالإعتماد على أجهزة الاستشعار،[3] فمثلًا تجد بعض التطبيقات الموجودة حاليًا عن البيوت التي تضيء فيها الغرفة فقط إن دخلتها أو نطقت بكلمة معينة، وهناك أيضًا منازل تتواصل فيها الأجهزة بناءً على أوامر يتم ضبطها من الشركة المصنّعة.</li><li style=\"box-sizing: inherit; direction: rtl; unicode-bidi: embed; text-align: right;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">الأجهزة المرتداة:</span>&nbsp;مثل ساعات أبل وساعات سامسونج الذكية، ولكن وضع هذه الأجهزة في هذه القائمة يعني أن هناك من يعمل على جعل هذه الساعات قادرة على تنفيذ بعض المهام بشكل آلي دون تدخل الإنسان.</li><li style=\"box-sizing: inherit; direction: rtl; unicode-bidi: embed; text-align: right;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">شبكات المدن الذكية:</span>&nbsp;ستتيح تكنولوجيا إنترنت الأشياء من تطوير الشبكات الكهربائية والمائية وكذلك شبكات تنظيم المرور في المدن الذكية بحيث تكون قادرة على التبليغ عن الأضرار تلقئيًا و تشغيلها تحت أعلي كفاءة.[6]</li><li style=\"box-sizing: inherit; direction: rtl; unicode-bidi: embed; text-align: right;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">السيارات الذكية:</span>&nbsp;تساعد للتبليغ عن وجود أي ضرر، أو للتبليغ عن أي حادث فور وقوعه.[3]</li></ul><p style=\"box-sizing: inherit; font-family: droid-arabickufi; margin-bottom: 24px; direction: rtl; unicode-bidi: embed; text-align: right; color: rgb(94, 94, 94); font-size: 16px;\">ومن المتوقع أن يصل إلى أكثر من 20 مليار جهاز بحلول العام 2020 وذلك وفقًا لتقارير من شركة</p>','2020-10-26 09:57:55','2020-10-26 10:39:00');
/*!40000 ALTER TABLE `about` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `advantages`
--

DROP TABLE IF EXISTS `advantages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `advantages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `advantages`
--

LOCK TABLES `advantages` WRITE;
/*!40000 ALTER TABLE `advantages` DISABLE KEYS */;
INSERT INTO `advantages` VALUES (1,'تسهيل الحياة اليومية','لتسهيل الحياة اليومية للناس في كافة المجالات. بتنصيب و تهيئة أي مكان بتقنيات إنترنت الأشياء (IoT) سيمكنك تعويض تسهيل أصعب المهمات بل و حتى الإستغناء عن أشخاص آخرين كانو يقومون بعمل محدد و بمجهود كبير.','<p>كل تقنية او أداة تكنولوجية قد وُجدت بالأساس لحل مشكلة او معضلة ما، إنترنت الأشياء لا يختلف عن بقية التقنيات أيضا، فالهدف من توفيره و تعميمه هو لتسهيل الحياة اليومية للناس في كافة المجالات. بتنصيب و تهيئة أي مكان بتقنيات إنترنت الأشياء (IoT) سيمكنك تعويض تسهيل أصعب المهمات بل و حتى الإستغناء عن أشخاص آخرين كانو يقومون بعمل محدد و بمجهود كبير. مثال : في مكتبك الخاص، لديك سكرتيرة تقوم بتنظيم المواعيد و جدولتها و تذكيرك بها، بتنصيب الأجهزة اللازمة و الحصول على مكتبك الذكي، سيمكنك فعل ذلك من خلال الأوامر الصوتية بجهاز محدد، سيستطيع أيضا الجهاز الذي تستخدمه بأن يذكرك بالمواعيد و أن يقوم بإجراء الإتصالات من أجلك</p>','QxqMXEHWgMKClFo4HojczbHuOT3HsUIFOKSkPj29.jpeg',1,'2020-10-25 14:20:04','2020-11-27 10:25:43'),(2,'حرية الوصول للمعلومة بسرعة أكبر','يوفر لنا هذا الأخير إمكانية الوصول للمعلومات حول العالم بشكل أسهل و أبسط. في منزلك الذكي مثلا، يمكنك في أي وقت أن تصرخ طالباً البحث عن معلومة، أخبار، دراسات او مستجدات في مجال معين، و التوصل بالإجابة في غضون ثوانِِ بسيطة.','لا يتعلق إنترنت الأشياء دائما بالتحكم بالأشياء عن بعد و إحكام السيطرة عليها، أحيانا يوفر لنا هذا الأخير إمكانية الوصول للمعلومات حول العالم بشكل أسهل و أبسط. في منزلك الذكي مثلا، يمكنك في أي وقت أن تصرخ طالباً البحث عن معلومة، أخبار، دراسات او مستجدات في مجال معين، و التوصل بالإجابة في غضون ثوانِِ بسيطة.\r\n\r\nمثال : إن كنت من بين الأشخاص المهتمين بالأخبار بشكل هوسي، يمكنك في أي وقت أن تأمر مساعدك الشخصي قائلا : ” أليكسا، ما آخر الأخبار حول العالم “، ثم تسرد لك كل المعلومات و الأخبار المتوفرة بينما تنتقل في أجراء المنزل او تحتسي قهوتك في الشرفة، لست مضطراً بعد الآن لحمل جريدة او حتى إستخدام هاتفك الذكي و عشرات التطبيقات من أجل البقاء على إطلاع بأخبار العالم.','Ti3digfSJ8WN9RYXIjBVI3c8COlp93X0iiPsvnTY.jpeg',1,'2020-10-25 14:20:04','2020-10-26 03:45:04'),(3,'أرخص و أسرع و أدق','يمكنك في أي وقت ان تقارن بين أي خدمة عادية و خدمة مطورة عبر تقنيات إنترنت الأشياء، و ستجد أنك أنفقت أقل، أنجزت أسرع، و حصلت على نتائج أدق من باقي الخدمات العادية،','يمكنك في أي وقت ان تقارن بين أي خدمة عادية و خدمة مطورة عبر تقنيات إنترنت الأشياء، و ستجد أنك أنفقت أقل، أنجزت أسرع، و حصلت على نتائج أدق من باقي الخدمات العادية، لأن ضمان الدقة و السرعة عاملين أساسين من مفهوم ” تسهيل الحياة ” الذي تعمل إنترنت الأشياء على توفيره في خدماتها، الى جانب رخاء خدمات دمج التقنيات العادية و تحويلها لإنترنت الأشياء.\r\n\r\nمثال : بالعودة لمثال السكرتيرة في الفقرة الأولى، تخيل أن جهازاً بسيطا يمكنه أن يجدول مواعيدك و يقوم بالإجابة على إتصالاتك و يتحكم في منزلك و يسهر لأمانك، قد يكون هذا الجهاز مثلا جهاز Alexa مع بعض شرائح Arduino قد لا يتجاوز سعرها كاملة 200 دولار، و تستطيع هذه الأدوات بتناغم أن توفر لك أفضل الخدمات. بينما سكرتيرتك الآدمية، تحصل على أجرة 500 دولار في الشهر، تنسى غالبية مواعيدك، بالكاد تتذكر أن تجهز لك قهوة في الصباح في عملك، حتى أنها نسيت باب المكتب مفتوحا في إحدى المرات !','6Xr57aXnkWclKyV9eoJkQATIdjug4l0CIo6s0UYg.jpeg',1,'2020-10-25 14:20:04','2020-10-26 03:48:01'),(4,'السيطرة على مناصب عمل أكبر','بالنسبة لك كشخص يستخدم إنترنت الأشياء في حياته اليومية، فهي إيجابية لك، لكن بالنسبة لشخص لا يستخدمها فهي تشكل تهديدا مباشرة لمناصب الأعمال و فرص الشغل،','بالنسبة لك كشخص يستخدم إنترنت الأشياء في حياته اليومية، فهي إيجابية لك، لكن بالنسبة لشخص لا يستخدمها فهي تشكل تهديدا مباشرة لمناصب الأعمال و فرص الشغل، بالعودة مجددا لمثال السكرتيرة، فأنت قمت بالتضحية بسكرتيرتك الخاصة و تعويضها بجهاز ذكي قادر على آداء نفس المهمة و هو أمر إيجابي بالنسبة لك، لكن ماذا عن السكرتيرة المسكينة ؟ من أين ستحصل الآن على قوت يومها ؟ أو أليس سلبيا أن يأتي جهاز بسيط رقمي و يأخذ منصبها بدون هوادة؟\r\n\r\nالتقنية بشكل عام ستقتنص فرص عمل كبيرة للعديد من الأشخاص، و هي واحدة من أكبر سلبياتها على الإطلاق.\r\n\r\nيتم تعريف مفهوم إنترنت الأشياء أنه سيف ذو حدين، له إيجابياته و سلبياته، إقترحنا عليك في هذا المقال كل منهما من أجل إطلاعك بشكل أكثر عن خواص هذا الأخير، و توسيع معارفك حوله.','ZFW8Plht0Hi1Iy9v6UPGxZW22KSPnhorrdKXKzJs.jpeg',1,'2020-10-25 14:20:04','2020-10-26 03:51:44'),(5,'Exercitationem officiis soluta excepturi qui in.','qui-quis-maiores-quasi-vel-ad','Corporis non adipisci natus sed. Eligendi in laborum illo voluptas eum. Esse ipsa dolorem eum.','qui',0,'2020-10-25 14:20:04','2020-10-25 14:20:04');
/*!40000 ALTER TABLE `advantages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chances`
--

DROP TABLE IF EXISTS `chances`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chances` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chances`
--

LOCK TABLES `chances` WRITE;
/*!40000 ALTER TABLE `chances` DISABLE KEYS */;
INSERT INTO `chances` VALUES (1,'فرصة جديدةasasas','اختصار وصف فرصة جديدة','وصف فرصة جديدة','OMbSxVE1PQHJ7XufzsPCQB2KU7444VCaI0KlRpdc.png',0,'2020-10-25 14:20:04','2020-10-25 14:59:53'),(2,'Voluptatum eveniet totam est.','aut-aut-incidunt-est-sed-doloribus-et-dolores','Soluta aut repellendus voluptatum nulla. Assumenda voluptas pariatur voluptas commodi quo laboriosam libero. Ad et ea dolores accusantium. Vero dolore officia quis quas architecto sequi.','voluptatem',0,'2020-10-25 14:20:04','2020-10-25 14:20:04'),(3,'Ipsam eligendi vitae veritatis asperiores.','commodi-velit-nulla-doloremque-quibusdam','Corporis ut nulla atque repudiandae. Aperiam voluptatem est ipsum vitae. Labore ipsa et neque consequatur sit culpa ut.','aspernatur',0,'2020-10-25 14:20:04','2020-10-25 14:20:04'),(4,'Totam suscipit qui cumque quam.','libero-rerum-nihil-eaque-velit-sequi-et','Laborum accusantium qui ducimus. Sit in repellendus et ut tenetur. Quo inventore voluptatum rerum minima fugit.','expedita',0,'2020-10-25 14:20:04','2020-10-25 14:20:04'),(5,'Cupiditate culpa occaecati magni.','possimus-distinctio-non-labore-eius-blanditiis-sit','Quibusdam cumque dignissimos sunt doloribus sunt eos. Quibusdam voluptatem quas ad ea qui totam ipsa. Praesentium ut deserunt omnis ab corrupti et.','voluptatem',0,'2020-10-25 14:20:04','2020-10-25 14:20:04'),(6,'فرصة جديدةشسشسشسشسasasas','اختصار وصف فرصة جديدة شسشسشسشس','وصف الفرصة الجديدة شسشسشسشس','LfMSk4DVUIcRLjpjAt9JrEp3KIoQrwiVEo2OjVP2.png',0,'2020-10-25 15:02:11','2020-10-25 15:02:27');
/*!40000 ALTER TABLE `chances` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'asdasd','adsasd','a@a.com','asdadads','2020-10-26 07:25:56','2020-10-26 07:25:56'),(2,'يشسي','شيس','a@a.com','adsasdasdشيسش','2020-10-26 07:28:20','2020-10-26 07:28:20');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goverment_roles`
--

DROP TABLE IF EXISTS `goverment_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goverment_roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goverment_roles`
--

LOCK TABLES `goverment_roles` WRITE;
/*!40000 ALTER TABLE `goverment_roles` DISABLE KEYS */;
INSERT INTO `goverment_roles` VALUES (1,'Voluptatibus voluptatem natus dolore vel sunt.','veritatis',0,'Voluptates voluptatem reprehenderit non distinctio qui aut dolore. Pariatur optio molestias et fugit dolorum repellat.','2020-10-25 14:20:04','2020-10-25 14:20:04'),(2,'Officiis consequuntur et accusamus nesciunt dolore.','omnis',0,'Dolor culpa culpa consequuntur id iusto quaerat fugit. Soluta et enim est beatae ipsum. Possimus aspernatur non et sunt provident.','2020-10-25 14:20:04','2020-10-25 14:20:04'),(3,'Magnam qui qui rerum eum.','nihil',0,'Dolorem iusto eos cum inventore. Quo et est ratione ea praesentium autem ut. Nulla velit rerum dicta tempore quibusdam.','2020-10-25 14:20:04','2020-10-25 14:20:04'),(4,'Culpa ducimus corrupti necessitatibus ratione.','aliquid',0,'Consequatur et beatae molestiae modi ut molestias. Maxime laborum consequuntur ullam tenetur. Sint sed itaque eaque qui.','2020-10-25 14:20:04','2020-10-25 14:20:04'),(5,'Non eligendi nihil velit consequuntur.','est',0,'Quidem sunt itaque hic. Doloribus porro consequatur voluptas dolore quidem adipisci necessitatibus esse. Quo id vitae alias magnam itaque omnis. Commodi debitis dolorem similique.','2020-10-25 14:20:04','2020-10-25 14:20:04');
/*!40000 ALTER TABLE `goverment_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `iot_images`
--

DROP TABLE IF EXISTS `iot_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `iot_images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `iot_images`
--

LOCK TABLES `iot_images` WRITE;
/*!40000 ALTER TABLE `iot_images` DISABLE KEYS */;
INSERT INTO `iot_images` VALUES (8,'H26skQrqVpD13Pvc2RbNYy5CcnSry0BMcs94gzqu.png',1,'2020-10-26 05:05:46','2020-10-26 05:05:46'),(10,'CcpQ3NEZLdar2wXu9J4O6OZPDKnHHyU1rtiAYUnF.jpeg',1,'2020-10-26 10:47:43','2020-10-26 10:47:43'),(11,'m1LJjs7wtjJfRPTz9mD4JOCEY6SFa2YRbyPS0WO7.jpeg',1,'2020-10-26 10:47:55','2020-10-26 10:47:55'),(12,'uNzXWFXxPBvUmouwIMCFySeENJQ7w4iILaxXywMI.jpeg',1,'2020-11-27 10:24:12','2020-11-27 10:24:12');
/*!40000 ALTER TABLE `iot_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `iot_usages`
--

DROP TABLE IF EXISTS `iot_usages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `iot_usages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descritpion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `iot_usages`
--

LOCK TABLES `iot_usages` WRITE;
/*!40000 ALTER TABLE `iot_usages` DISABLE KEYS */;
INSERT INTO `iot_usages` VALUES (6,'النفط والغاز','حيث يمكن مراقبة مواقع الحفر المعزولة بشكل أفضل باستخدام مستشعرات إنترنت الأشياء بدلاً من التدخل البشري.','IqIew4eYN6kk8y0ylgNV3NGUQMvar31nEyFTtMxh.png',1,'2020-10-26 06:21:37','2020-10-26 06:39:32'),(8,'الزراعة','يمكن استخدام البيانات الدقيقة حول المحاصيل لزيادة المحصول.','zbaUllDx0W8w3TTAZDLjxRDEQjWq2hlfLIKp6Gbq.jpeg',1,'2020-10-26 06:28:40','2020-10-26 06:40:33'),(9,'التدفئة والتهوية والتكييف','يمكن مراقبة أنظمة التحكم في الطقس في جميع أنحاء البلاد','hrwh7ogmBNwTszYkZS6fIqMTLOkkgasjF9KLYZ4A.jpeg',1,'2020-10-26 06:41:48','2020-10-26 06:41:48');
/*!40000 ALTER TABLE `iot_usages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (101,'2014_10_12_000000_create_users_table',1),(102,'2014_10_12_100000_create_password_resets_table',1),(103,'2019_08_19_000000_create_failed_jobs_table',1),(104,'2020_10_25_020942_create_settings_table',1),(105,'2020_10_25_020943_create_advantages_table',1),(106,'2020_10_25_020944_create_statistacs_table',1),(107,'2020_10_25_020945_create_chances_table',1),(108,'2020_10_25_020946_create_goverment_roles_table',1),(109,'2020_10_25_020947_create_iot_images_table',1),(110,'2020_10_25_020948_create_iot_usages_table',1),(111,'2020_10_26_101600_create_contact_table',2),(112,'2020_10_26_124118_create_about_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `logo_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_background_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `advantage_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'ClATn8KsKQJi5IsWXKni59MOTav2FP1GvZm6P9vu.jpeg','إنترنت الأشياء Internet Of Things هو مفهوم متطور لشبكة الإنترنت بحيث تمتلك كل الأشياء في حياتنا قابلية الإتصال بالإنترنت أو ببعضها البعض لإرسال و إستقبال البيانات لأداء وظائف محددة من خلال الشبكة','https://www.youtube.com/watch?v=mAXYT7zYoSI','BzlFRufJJRXsoJiWnwMpDkg3o36ppOlyD4KQAw6t.jpeg','مميزات انترنت الاشياء','johnson.lucienne@gmail.com','1-590-248-1255 x0334','969 Bradtke Meadows Apt. 369Handfurt, NJ 90330','https://facebook.com','18FQJaWdD0OZGRKrkfRfM3vYkkYKkbuGqXOJHAwL.png','Bmqhx1HMM8pBxgiWQob63jLihxJss742TRKzcYLk.jpeg','mo66y3iWrCi7gxs37vhFuSM98xiWyXLVQOVXt57O.jpeg','2020-10-25 14:20:04','2020-11-27 14:14:02');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `statistacs`
--

DROP TABLE IF EXISTS `statistacs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `statistacs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` int(11) NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `statistacs`
--

LOCK TABLES `statistacs` WRITE;
/*!40000 ALTER TABLE `statistacs` DISABLE KEYS */;
INSERT INTO `statistacs` VALUES (1,'جهاز متصل في الانترنت',35,'مليار',1,'2020-10-25 14:20:05','2020-10-26 04:34:56'),(2,'حجم الاستثمار',600,'مليار دولار',1,'2020-10-25 14:20:05','2020-10-26 04:37:27'),(3,'حجم البيانات',40,'ألف إكسا بايت',1,'2020-10-25 14:20:05','2020-10-26 04:36:50'),(4,'Perferendis dolorem aut sapiente.',-2924,'recusandae',0,'2020-10-25 14:20:05','2020-10-25 14:20:05'),(5,'Officiis repellendus et qui ut.',3609,'aspernatur',0,'2020-10-25 14:20:05','2020-10-25 14:20:05'),(6,'qwqw',1212,'red',0,'2020-10-26 04:14:01','2020-10-26 04:14:01');
/*!40000 ALTER TABLE `statistacs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@admin.com',NULL,'$2y$10$IKUz0c7jkybPsqgsEhAXNOH6CXPSbxnQPUD2yVjKHlec9qWK7wsGq',NULL,'2020-10-25 14:20:04','2020-10-25 14:20:04');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-27 18:37:28
