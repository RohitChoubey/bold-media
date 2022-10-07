-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 04:04 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newswash`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(151) NOT NULL,
  `state` varchar(55) NOT NULL,
  `content` varchar(1800) NOT NULL,
  `file` varchar(151) NOT NULL,
  `user` varchar(55) NOT NULL,
  `is_delete` enum('N') DEFAULT 'N',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `title`, `category`, `state`, `content`, `file`, `user`, `is_delete`, `created_at`) VALUES
(9, '30 Million People Under Heat Alerts As Western US Swelters', 'World News', '', 'Los Angeles: Hot weather alerts are in place for more than 30 million people across the western United States after the region\'s second heat wave in weeks brought another round of record-equalling high temperatures.\nSweltering conditions have hit much of the Pacific seaboard and as far inland as the western edge of the Rocky Mountains over the weekend, with forecasters warning of more to come on Sunday.\n\nLas Vegas matched its all-time record of 117 degrees Fahrenheit (47.2 Celsius), according to', 'image/world news.jpg', 'rohit', 'N', '2021-07-11 12:33:00'),
(10, 'Turkey Bus Crash Leaves 12 Dead: Reports', 'World News', '', '<p><strong>Los Angeles:&nbsp;</strong>&nbsp;Hot weather alerts are in place for more than 30 million people across the western United States after the region&#39;s second heat wave in weeks brought another round of record-equalling high temperatures.</p>\n\n<p>Sweltering conditions have hit much of the Pacific seaboard and as far inland as the western edge of the Rocky Mountains over the weekend, with forecasters warning of more to come on Sunday.</p>\n\n<p>Las Vegas matched its all-time record of 117 degrees Fahrenheit (47.2 Celsius), according to the National Weather Service (NWS) -- a temperature recorded in the desert entertainment city once in 1942 and three other times since 2005.</p>\n\n<p>Forecasters issued an excessive heat warning for the city along with several other urban cente', 'image/world news.jpg', 'rohit', 'N', '2021-07-11 12:35:53'),
(11, 'Economy Will Record Double-Digit Growth In 2021-22, Says Niti Aayog Vice Chairman', 'Bussiness', '', '<p><strong>Ankara:&nbsp;</strong>Twelve people died and 26 others were injured when a bus carrying migrants crashed in eastern Turkey on Saturday night, local media reported, quoting authorities in the prefecture of Van.</p>\r\n\r\n<p>Among the dead were 11 migrants and a person who helped organise their illegal transport, the authorities were quoted as saying on Sunday.</p>\r\n\r\n<p>The injured were taken to hospital and the owner of the bus was detained, they added.</p>\r\n\r\n<p>Situated near Turkey&#39;s eastern border with Iran, the city of Van is used as a crossing point for migrants on their long journey to reach Europe, with many coming from Afghanistan.</p>\r\n', 'image/eco.jpg', 'rohit', 'N', '2021-07-11 12:39:31'),
(12, 'Petrol, Diesel Prices Remain Unchanged On July 11, 2021', 'Bussiness', '', '<p>The economy will register a double-digit growth in the current fiscal and the disinvestment climate also looks better, Niti Aayog Vice Chairman Rajiv Kumar has said, even as the country&#39;s economy shrunk in 2020-21.</p>\r\n\r\n<p>He also asserted that the country is better prepared in case there is a Covid&nbsp;wave as states have also their own lessons from the previous two waves.</p>\r\n\r\n<p>&quot;We are now hopefully getting past our (Covid-19) pandemic&nbsp;and the economic activities will be strengthened as we get into the second half of this (financial) year given what I have seen for example various indicators, including the mobility indicators,&quot; Mr Kumar told PTI in an interview.</p>\r\n\r\n<p>The Indian economy has been adversely impacted by the Coronavirus pandemic and the recovery has been relatively sluggish in the wake of the second wave.</p>\r\n\r\n<p>Against this backdrop, the Niti Aayog Vice Chairman exuded confidence that the economic recovery will be &quot;very strong&quot; and those agencies or organisations which have revised their GDP estimates downwards for this fiscal may have to revise them upwards again.</p>\r\n', 'image/PERTROL.jpg', 'rohit', 'N', '2021-07-11 13:55:55'),
(13, 'Delhi Reports 53 New Covid Cases, Lowest Since April 15 Last Year', 'Cities', 'Delhi', '<p><strong>Petrol, Diesel Price Today:&nbsp;</strong>Petrol and diesel prices remained unchanged on Sunday July 11, a day after they were hiked for the 38th time on July 10.</p>\r\n\r\n<p>In the national capital, petrol rates were hiked by 35 paise from&nbsp;₹&nbsp;100.56 per litre to&nbsp;₹&nbsp;100.91 per litre, according to Indian Oil Corporation on July 10. Diesel rates were also increased by 26 paise from&nbsp;₹&nbsp;89.62 to&nbsp;₹&nbsp;89.88 per litre in Delhi. In Mumbai, petrol prices are almost near the&nbsp;₹&nbsp;107-mark at&nbsp;₹&nbsp;106.93 from&nbsp;₹&nbsp;106.59 per litre, while diesel is being sold at&nbsp;₹&nbsp;97.46 per litre.</p>\r\n', 'image/PERTROL.jpg', 'rohit', 'N', '2021-07-11 14:24:28'),
(16, 'Oppo Reno 6 Pro Review: New Wine in an Old Bottle', 'Gadgets', 'Null', '<p>Oppo&#39;s premium Reno line of smartphones has been updated with the newly launched&nbsp;<a href=\"https://gadgets.ndtv.com/oppo-reno-6-pro-price-in-india-102424\" target=\"_self\">Oppo Reno 6 Pro</a>&nbsp;and the&nbsp;<a href=\"https://gadgets.ndtv.com/oppo-reno-6-price-in-india-100969\" target=\"_self\">Oppo Reno 6</a>, both 5G smartphones that succeed the previous Reno 5 series. Once again, the focus for these phones continues to be slimness and lightness, but they also have more powerful SoCs and new camera features to boast of. Oppo hasn&#39;t deviated too far from the tried and tested formula that we&#39;ve seen in the past, which is both a good and not-so-good thing. We&#39;ll get more into this further in the review.</p>\n\n<p>Today, we&#39;ll be focusing on the Oppo Reno 6 Pro which is the hero model of the series.&nbsp;<a href=\"https://gadgets.ndtv.com/mobiles/oppo-phones\" target=\"_self\">Oppo</a>&nbsp;is heavily promoting its new &ldquo;bokeh video&rdquo; feature which is said to simulate the kind of soft background blur you can get when using a narrow aperture lens on a DSLR or mirrorless camera. Along with this, the Reno 6 Pro retains a lot of the features that made the&nbsp;<a href=\"https://gadgets.ndtv.com/oppo-reno-5-pro-5g-price-in-india-98786\" target=\"_self\">Reno 5 Pro 5G</a>&nbsp;great. However, we now have some very stiff competition in the sub-Rs. 40,000 segment, so can the Reno 6 Pro keep up?</p>\n', 'image/gadget1.png', 'rohit', 'N', '2021-07-15 23:11:54'),
(17, 'Redmi 10 Spotted in Multiple Certification Listings, Tipped to Come With 50-Megapixel Camera, 6GB RAM', 'Gadgets', 'Null', '<p>Redmi 10, a rumoured budget series from Xiaomi, has been spotted on Federal Communications Commission (FCC) in the US and IMEI certification sites. These listings suggest that the phone is a work in progress and may be close to launch. The sites also leak key specifications of the phone and suggest its official marketing name. The FCC listing tips that the Redmi 10 will have up to 6GB of RAM and 128GB of storage. The IMEI listing, on the other hand, suggests its official marketing name.</p>\n\n<p>The rumoured&nbsp;<a href=\"https://gadgets.ndtv.com/xiaomi-redmi-10-price-in-india-103259\" target=\"_self\">Redmi 10</a>&nbsp;device has reportedly appeared on&nbsp;<a href=\"https://fccid.io/2AFZZ1119AG\" target=\"_blank\">FCC</a>&nbsp;and IMEI certification sites with the same model number 21061119AG. As mentioned, the IMEI listing does not reveal much about the phone but confirms that the model number belongs to the Redmi 10. Both the certification listings were first&nbsp;<a href=\"https://pricee.com/api/redirect/t.php?from=gadgets360&amp;redirect=https%3A%2F%2Fwww.91mobiles.com%2Fhub%2Fredmi-10-specifications-variants-leaked-fcc-imei-listing%2F\" target=\"_blank\">spotted</a>&nbsp;by 91Mobiles.</p>\n\n<p>FCC leaks that the Redmi 10 may run on MIUI 12.5 based Android 11. It is likely to support 4G and have dual-band Wi-Fi. The listing suggests that the Redmi 10 may come in three RAM + storage options &mdash; 4GB RAM + 64GB storage, 4GB RAM + 128GB storage, and 6GB RAM + 128GB storage.</p>\n', 'image/GADGET2.PNG', 'rohit', 'N', '2021-07-15 23:13:39'),
(19, 'भारत बनाम श्रीलंका लाइव स्कोर: मनीष पांडे ने मिनोद भानुका का कैच छोड़ा', 'Sports', 'Null', '<p><strong>कोलंबो</strong><br />\r\nभारत बनाम श्रीलंका लाइव स्कोर: श्रीलंका ने टॉस, पहले बल्लेबाजी का फैसला। श्रीलंका और से अविष्का धनुका और मिनोद भानुका क्रीज पर उतरे। वहीं भारत की ओर से भुवनेश्वर कुमार फेंक रहे हैं पहला ओवर।</p>\r\n\r\n<ul>\r\n	<li><a href=\"https://play.navbharattimes.indiatimes.com/?utm_source=qureka&amp;utm_medium=referral&amp;utm_campaign=qureka\">Highway फिल्म में लीड ऐक्टर कौन है? जवाब दीजिए इनाम मिलेगा</a></li>\r\n</ul>\r\n\r\n<p><br />\r\nशिखर धवन ने भारतीय टीम के गेंदबाजों की तारीफ की। उन्होंने कहा कि पिछले मैच में हमारे गेंदबाजों ने श्रीलंका को बड़ा स्कोर नहीं बनाने दिया। स्पिनर्स ने मिलकर लय में गेंदबाजी की।</p>\r\n\r\n<p><strong>दूसरा ओवर</strong><br />\r\nचाहर की गेंद मिनोद भानुका, कोई रन नहीं। गेंद की स्पीड 123.9 kmph, भानुका ने बाहर जाती गेंद पर बल्ला अड़ाया। गेंद ने बल्ले का किनारा लिया और दूसरी स्लिप में खड़े मनीष पांडे ने कैच छोड़ दिया।<br />\r\n<br />\r\nबीते मैच में शिखर धवन ने शुरुआत में संभलकर बल्लेबाजी की। दूसरे छोर पर पहले पृथ्वी साव और फिर ईशान किशन ने आक्रामक रवैया अपनाया। धवन ने कहा कि उनकी बल्लेबाजी पूरी तरह से परिस्थिति के हिसाब से है। भारतीय कप्तान ने कहा, &#39;जब दूसरे छोर पर युवा बल्लेबाज आक्रामक होकर खेल रहे थे तो मैंने छोर बदलने का फैसला किया।&#39;<br />\r\n<br />\r\nभारत ने वनडे सीरीज के पहले मुकाबले में जीत हासिल कर श्रीलंका पर मनोवैज्ञानिक बढ़त बना ली थी। सीरीज के दूसरे मैच में भारत की कोशिश सीरीज पर कब्जा करने की होगी वहीं श्रीलंका के लिए सीरीज में बने रहने के लिए इस मैच में हर हाल में जीत हासिल करना जरूरी होगा।<br />\r\n<br />\r\nभारतीय टीम ने जिस आसानी से मैच जीता था उसके बाद मेजबान टीम के लिए वापसी करना चुनौतीपूर्ण होगा। खास तौर पर भारतीय बल्लेबाजों पर लगाम लगाना मुश्किल का है।</p>\r\n', 'image/navbharat-times.jpg', 'rohit', 'N', '2021-07-20 22:25:31'),
(20, 'We are Together: Siddaramaiah Denies Claims of Rift with DK Shivakumar, to Meet Top Brass in Delhi Today', 'Politics', 'Null', '<p>Senior Congress leader in Karnataka and former chief minister Siddaramaiah on Tuesday defied all claims of conflict between him and state&rsquo;s Congress President DK Shivakumar.</p>\n\n<p>&ldquo;We are together. We&rsquo;re building the party together. There&rsquo;s no rift in Karnataka Congress and the party will come back to power. Why should there be a rift? We are fighting against the corruption of BJP,&rdquo; Siddaramaiah said.</p>\n\n<p>Former CM will be in Delhi on Tuesday following a call from the party high command. The leaders are expected to meet party president Sonia Gandhi amid a power tussle. Sources have said that the meeting is regarding the appointment of office-bearers and strategies for the upcoming Assembly elections in 2023.</p>\n\n<p>&ldquo;I am in Delhi because Rahul Gandhi wanted to meet me by 4&rsquo;o clock today, this is what KC Venugopal told me. I don&rsquo;t know what subject matter he is going to discuss,&rdquo; Congress leader Siddaramaiah said. &ldquo;There is no rift&hellip;I have no problem with any leader. We want to prepare to help people to throw this Govt out of power&hellip;this meeting had nothing to do with constituency or power,&quot; he added.</p>\n', 'image/1624528901_siddaramaiah.png', 'rohit', 'N', '2021-07-20 22:28:51'),
(21, 'केईए यूजीसीईटी 2021: आवेदन का आखिरी मौका आज, शाम से खुलेगी करेक्शन विंडो', 'Education', 'Null', '<p>कर्नाटक परीक्षा प्राधिकरण <strong>(केईए</strong>) ने कर्नाटक<strong> यूजीसीईटी 2021</strong> के लिए आवेदन की समय सीमा बढ़ा दी है। इच्छुक उम्मीदवार अब<strong> 20 जुलाई </strong>की शाम तक आवेदन कर सकते हैं। आवेदन विंडो मंगलवार शाम, छह बजे बंद हो जाएगी। इसके साथ आवेदन फॉर्म में रहीं गलतियों और त्रुटियों को सुधारने के लिए करेक्शन विंडो भी <strong>20 जुलाई की</strong> शाम को शुरू कर दी जाएगी।&nbsp;&nbsp;<br />\nहालांकि, कर्नाटक परीक्षा प्राधिकरण (केईए) की ओर से परीक्षा तिथियों में कोई बदलाव नहीं किया गया है।<strong> परीक्षा 28 से 30 अगस्त, 2021 </strong>के बीच आयोजित की जाएगी। केसीईटी के बारे में अधिक जानकारी चाहने वाले छात्र इस पूरी खबर को पढ़ लें साथ ही वे दिए गए लिंक के जरिये केईए की आधिकारिक वेबसाइट kea.kar.nic.in पर भी जा सकते हैं। कर्नाटक यूजीसीईटी आवेदन के लिए लिंक और आवेदन करने के चरण भी यहां बताए गए हैं।&nbsp;</p>\n\n<p>&nbsp;</p>\n', 'image/du_1562485501.png', 'rohit', 'N', '2021-07-20 22:53:06'),
(22, 'Arbaaz Khan says Bollywood stars trolled as per planned campaign: ‘Lot of people were ruined’', 'entertainment', 'Null', '<p>In a year that saw theatres shutting shop, Bollywood, ironically and unintentionally, remained one of the biggest newsmakers. In the aftermath of actor&nbsp;<strong><a href=\"https://indianexpress.com/article/cities/mumbai/sushant-singh-rajputs-flatmate-siddharth-pithani-files-for-bail-before-special-court-7411584/\">Sushant Singh Rajput&rsquo;s</a></strong>&nbsp;death, what seemed like a conversation starter on pressures of stardom and the industry&rsquo;s nepotistic ways soon snowballed into an unprecedented, vicious online trolling of Hindi film artistes.</p>\n\n<p>Actor-filmmaker&nbsp;<strong><a href=\"https://indianexpress.com/about/arbaaz-khan/\">Arbaaz Khan</a></strong>, whose name was also dragged into the case, opened up about the impact of online abuse that Bollywood was subjected to. The actor said that several artistes suffered not only professional but also psychological damage due to the relentless trolling.</p>\n\n<p>&ldquo;It&rsquo;s a difficult place to be in mentally&hellip; This is the herd mentality like something just happens in a flow, like a trend. It&rsquo;s like a wave and there&rsquo;s no explanation. So, when you start getting backlash for something, you have no clue and the devastation it causes along the way, you are left asking, &lsquo;For what?&rsquo; You are like what is this bandwagon that people have jumped onto? What happened in the last one and one-and-a half years was ridiculous.&rdquo;</p>\n\n<p>He said that the trolling ruined a lot of people. &ldquo;What were they trying to achieve and who were they trying to run down? They did ruin a lot of people. The ones who could keep their necks above the water survived but if they (trolls) could help it, they would pushed their head down and drowned them. A lot of people have suffered psychologica', 'image/arbaazkhan.jpg', 'rohit', 'N', '2021-07-20 22:56:35'),
(23, 'Nasa latest Mars craft nears landing for unprecedented seismic mission', 'science', 'Null', '<p><strong>Nasa&#39;s</strong> first spacecraft built to explore the deep interior of another world streaked toward a landing scheduled for Monday on a vast, barren plain on Mars, carrying instruments to detect planetary heat and seismic rumblings never measured anywhere but Earth.</p>\n\n<p>After sailing 301 million miles (548 million km) on a six-month voyage through deep space, the robotic lander InSight was due to touch down on the dusty, rock-strewn surface of the Red Planet at about 8 pm GMT.</p>\n\n<p>If all goes according to plan, InSight will hurtle through the top of the thin Martian atmosphere at 12,000 miles per hour (19,310 kilometers per hour). Slowed by friction, deployment of a giant parachute and retro rockets, InSight will descend 77 miles through pink Martian skies to the surface in 6 1/2 minutes, traveling a mere 5 mph (8 kph) by the time it lands.</p>\n\n<p>The stationary probe, launched in May from California, will then pause for 16 minutes for the dust to settle, literally, around its landing site, before disc-shaped solar panels are unfurled like wings to provide power to the spacecraft.</p>\n\n<p>The mission control team at Nasa&#39;s Jet Propulsion Laboratory (JPL) near Los Angeles hopes to receive real-time confirmation of the craft&#39;s arrival from data relayed by a pair of miniature satellites that were launched along with InSight and will be flying past Mars.</p>\n', 'image/insight.png', 'rohit', 'N', '2021-07-20 23:12:53'),
(24, 'Salman Khan की खातिर Shah Rukh Khan ने बीच में छोड़ी Pathan की शूटिंग!! सामने आई चौंकाने वाली खबर', 'Bollywood', 'Null', '<p><strong>Shah Rukh Khan Will Shoot His Cameo in Salman Khan&#39;s Tiger 3:</strong>&nbsp;बॉलीवुड अभिनेता सलमान खान (Salman Khan) ने कुछ पहले ही अपनी अपकमिंग फिल्म &#39;टाइगर 3&#39; (Tiger 3) की शूटिंग शुरू कर दी है। रिपोर्ट्स में बताया गया था कि सलमान खान स्टारर &#39;टाइगर 3&#39; में शाहरुख खान (Shah Rukh Khan) का एक धांसू कैमियो होगा। मिड-डे की रिपोर्ट्स के अनुसार सलमान खान और शाहरुख खान दोनों ही अपने-अपने प्रोजेक्ट्स पर काम कर रहे हैं।&nbsp;</p>\n\n<p>मुंबई के अंधेरी में यशराज फिल्म्स दोनों स्टार्स अपने-अपने प्रोजेक्ट्स में बिजी हैं। जहां शाहरुख खान ने पठान (Pathan) की शूटिंग जारी रखी, वहीं सलमान खान और कटरीना कैफ (Katrina Kaif) आने वाले वीकेंड तक टाइगर 3 (Tiger 3) पर काम शुरू कर देंगे। शूटिंग एक-दूसरे के ठीक बगल में हो रही है। रिपोर्ट्स में यह भी दावा किया गया है कि शाहरुख खान अगले हफ्ते &#39;टाइगर 3&#39; में अपने कैमियो को शूट करेंगे।</p>\n\n<p>पोर्टल से जुड़े सूत्र के मुताबिक, मनीष शर्मा की इस थ्रिलर के लिए एक स्पेशल सेट बनाया जा रहा है। इस वीकेंड से सलमान खान और कटरीना कैफ अपनी फिल्म की शूटिंग शुरू करेंगे। रिपोर्ट्स के मुताबिक, इमरान हाशमी भी जल्द ही &#39;टाइगर 3&#39; की स्टारकास्ट को ज्वाइन करेंगे। शाहरुख अपने रॉ एजेंट के किरदार में जान फूंकते नजर आएंगे।</p>\n\n<p>सलमान खान &#39;पठान&#39; में अपने कैमियो के लिए पहले ही शूटिंग कर चुके हैं। शाहरुख आने वाले दिनों में स्पाई थ्रिलर &#39;टाइगर 3&#39; में अपने काम को अंजाम देंगे। फैंस सलमान खान और शाहरुख खान की फिल्मों को देखने के लिए बेताब हैं। दिलचस्प बात यह है कि दोनों स्टार्स एक-दूसरे की फिल्मों में कैमियो करते दिखाई देंगे।</p>\n', 'image/Salman-and-Shahrukh.png', 'rohit', 'N', '2021-07-20 23:17:40');

-- --------------------------------------------------------

--
-- Table structure for table `enum_test`
--

CREATE TABLE `enum_test` (
  `enum_fld` enum('Yes','No') DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
