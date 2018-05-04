-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Gegenereerd op: 29 apr 2015 om 15:42
-- Serverversie: 5.5.38
-- PHP-versie: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Databank: `rentastudent`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) COLLATE utf8_bin NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_bin NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden geëxporteerd voor tabel `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('073fb19bc95af4560ebcaa7f9f6a1fba2b9c0881', '::1', 1429794155, 0x5f5f63695f6c6173745f726567656e65726174657c693a313432393739343135353b66625f313631303838353839393134353130315f636f64657c733a3334343a22415144766b33352d734465316b38366d726b7a775f4a50347770784d377a433762777858304b473075626e717652664978484d6a4f4538587344745955475a4457344c7042685a7571783456305f425f6138705f4134475248627079734730514c5763517136554d6b536d7852344e4c467a5f324658484536414e587662366b736e524c65445467456559736f61306c63627a77585071305a70354e75726361506e774476754c5a597739385145316368724e795367776945644d566b664d7254666536675451736f63426d3230706d6e68475435774858476c443434796f453549593742784f786d3356347154326138624d706d4e6447323169373461344234785a7a52656f454f3932306a61736e4c57593241664b7236686830436c636a4c366c6c386854446c624a4972327143534d556a55614442724d6c316e7a77363641416e35337a2d6a455573535f614e322d4d4e6a436a55223b66625f313631303838353839393134353130315f6163636573735f746f6b656e7c733a3232333a22434141573546356e4b7a34304241467537645a4136714a5751697131714363707557656f4b3566434d4d4670396462494465515651524a474a4d6d6257314541655a415a416a70325a42594353684156374d70434a6a4158463364513734704a4972694f76625135685a42665a4245764b46726e33373046335a42617651525a4157306a556767384b4a794d6651576b624e4f307646454478324451437a71313577744b6b56377672484b6d7a725a43305a41587534354541645657364a5a426c4c485a4350785739574444566e5a416a674a684476454e4f393378475a41223b66625f313631303838353839393134353130315f757365725f69647c733a31353a22393739343334383335343037353330223b),
('1772674c4945e0350a78a252f1f7cc3237145820', '::1', 1429796165, 0x5f5f63695f6c6173745f726567656e65726174657c693a313432393739363136353b66625f313631303838353839393134353130315f73746174657c733a33323a223364366239363062626530616231373033376361636537363139666161626534223b69647c733a323a223130223b6765627275696b6572736e61616d7c733a363a226d6172696a6e223b69735f676964735f6c6f67696e7c623a313b),
('19e0fb9b782982e8a4b61bf49cd85e506f0e8be2', '::1', 1430149140, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433303134393133383b69647c733a313a2235223b757365726e616d657c733a363a226d6172696a6e223b69735f61646d696e5f6c6f67696e7c623a313b),
('25af9aa1d31945484676b2e94c3e244c66b2cf26', '::1', 1429795827, 0x5f5f63695f6c6173745f726567656e65726174657c693a313432393739353736353b66625f313631303838353839393134353130315f73746174657c733a33323a223364366239363062626530616231373033376361636537363139666161626534223b69647c733a323a223130223b6765627275696b6572736e61616d7c733a363a226d6172696a6e223b69735f676964735f6c6f67696e7c623a313b),
('494084c19ef21cb1cd4cb78e8efac5bec386bd7f', '::1', 1429792335, 0x5f5f63695f6c6173745f726567656e65726174657c693a313432393739323333353b),
('4f8077f037756bb903a315e2c8d732590a010597', '::1', 1429865875, 0x5f5f63695f6c6173745f726567656e65726174657c693a313432393836353836373b66625f313631303838353839393134353130315f73746174657c733a33323a223764363463303130366563313032643263643833303935323234383561666165223b69647c733a313a2235223b757365726e616d657c733a363a226d6172696a6e223b69735f61646d696e5f6c6f67696e7c623a313b),
('5c4c32fa1b62b81c3dfb9d99cd6ef67cb7ba5ea9', '::1', 1430301634, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433303330313633333b66625f313631303838353839393134353130315f73746174657c733a33323a223335613662623863383461613264313565313538313738616437376333633635223b),
('68927f34907a2cb789294acfb9da98559da5d92c', '::1', 1430126493, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433303132363439333b66625f313631303838353839393134353130315f73746174657c733a33323a226236323061666132393261393335356633643161346130333665646165666438223b),
('69bf662e0634460079ec4658d8976075a5ad966c', '::1', 1429865043, 0x5f5f63695f6c6173745f726567656e65726174657c693a313432393836353034333b66625f313631303838353839393134353130315f73746174657c733a33323a223764363463303130366563313032643263643833303935323234383561666165223b),
('6a61ca0e9096971f2ff00e47ed67de208678df99', '::1', 1429801046, 0x5f5f63695f6c6173745f726567656e65726174657c693a313432393830303736313b66625f313631303838353839393134353130315f636f64657c733a3334343a224151414d795458744e3436556177716e4e697a536c457a3667566d564c5264573036454772354564414e7653706a4d316d756b5a6a766b6a554d5857644e6f77556230335655706733644d51782d4a67675255724c596238706e54666f3432636d33734c6f334c67546b4b4f6b4b6d792d396277475936705068674d6d784e5939444c3541735a53734242707872664672396848656235656b50447863466f6d6e6c4f4f5955484255355646756c754a35657533515a486a7635423956414e386737746e47596c6433537a5164576c74335a486c7746655a6673757363786438337273765441347475776369536f456a45475877455453387539763466386b6c726a6e68455a38364b56523839677579377061726669543035303550505363326762565f494d4d6a736d617a38697372735a3944537436473554747037766a6559314c496b594737794634626b376d6737776e356777327a223b66625f313631303838353839393134353130315f6163636573735f746f6b656e7c733a3231383a22434141573546356e4b7a34304241414c4e36453055566e714c4b445361544a6f5a437363714a765372526379384f5a4367497a52744970676f4e6a645343775a41694b7036343354784e4a34717145777950764a503756374559434d7a59614a7831635a41485077506e437544704c53735468725a43787a494239644e4e4f503247346b375469716b46307655653537637a5a41626635354d596b3279754936545a435a4241716d6a466e676c54484a5933464e6a32726745654d3048314b63324e6a766d79737035326b55346b4f6a427357306f4e6d5a4378223b66625f313631303838353839393134353130315f757365725f69647c733a31353a22393739343334383335343037353330223b69647c733a313a2233223b757365726e616d657c733a353a224a6f726973223b69735f61646d696e5f6c6f67696e7c623a313b),
('6c051852e57ddc12913c820c888acf44b126cbf8', '::1', 1429793928, 0x5f5f63695f6c6173745f726567656e65726174657c693a313432393739333834303b66625f313631303838353839393134353130315f636f64657c733a3334343a22415144766b33352d734465316b38366d726b7a775f4a50347770784d377a433762777858304b473075626e717652664978484d6a4f4538587344745955475a4457344c7042685a7571783456305f425f6138705f4134475248627079734730514c5763517136554d6b536d7852344e4c467a5f324658484536414e587662366b736e524c65445467456559736f61306c63627a77585071305a70354e75726361506e774476754c5a597739385145316368724e795367776945644d566b664d7254666536675451736f63426d3230706d6e68475435774858476c443434796f453549593742784f786d3356347154326138624d706d4e6447323169373461344234785a7a52656f454f3932306a61736e4c57593241664b7236686830436c636a4c366c6c386854446c624a4972327143534d556a55614442724d6c316e7a77363641416e35337a2d6a455573535f614e322d4d4e6a436a55223b66625f313631303838353839393134353130315f6163636573735f746f6b656e7c733a3232333a22434141573546356e4b7a34304241467537645a4136714a5751697131714363707557656f4b3566434d4d4670396462494465515651524a474a4d6d6257314541655a415a416a70325a42594353684156374d70434a6a4158463364513734704a4972694f76625135685a42665a4245764b46726e33373046335a42617651525a4157306a556767384b4a794d6651576b624e4f307646454478324451437a71313577744b6b56377672484b6d7a725a43305a41587534354541645657364a5a426c4c485a4350785739574444566e5a416a674a684476454e4f393378475a41223b66625f313631303838353839393134353130315f757365725f69647c733a31353a22393739343334383335343037353330223b),
('75d5b95f85d28a19d99ea0370032d8937319ac99', '::1', 1429798387, 0x5f5f63695f6c6173745f726567656e65726174657c693a313432393739383338373b66625f313631303838353839393134353130315f73746174657c733a33323a223161623064666136613632313736316231363939643765633636373631323464223b),
('82ef4aa073df639c765ba3883f5be7c2293e1baa', '::1', 1429801913, 0x5f5f63695f6c6173745f726567656e65726174657c693a313432393830313837343b66625f313631303838353839393134353130315f73746174657c733a33323a226663653932626165306461316333643335313335633935653132393663633032223b69647c733a323a223130223b6765627275696b6572736e61616d7c733a363a226d6172696a6e223b69735f676964735f6c6f67696e7c623a313b),
('af7a698eb63fcef37acda3be807d5c63c3f239a3', '::1', 1429874071, 0x5f5f63695f6c6173745f726567656e65726174657c693a313432393837343037313b66625f313631303838353839393134353130315f73746174657c733a33323a223764363463303130366563313032643263643833303935323234383561666165223b69647c733a313a2235223b757365726e616d657c733a363a226d6172696a6e223b69735f61646d696e5f6c6f67696e7c623a313b),
('b2d85a618f1955a15d4713d5897829c8ad0e4827', '::1', 1429862944, 0x5f5f63695f6c6173745f726567656e65726174657c693a313432393836323934343b66625f313631303838353839393134353130315f73746174657c733a33323a226262313037393462646538626231303632663634366232313938383437326132223b),
('b56adf95ee774f6ce506ec4393cfba1a91ef234e', '::1', 1430126253, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433303132363234373b66625f313631303838353839393134353130315f636f64657c733a3334343a22415141316d4632675a30756b76694e307264724e477544594c64772d322d3245332d577148546247384d59555871425a424e377a773861477a5550644f4b364479714b4c304553683156374646464c62317746384f7673324c50686a746931734b43654339706c6d39506c4830706c7972506f37466e37434a567467666b75315353684a3930346d586e387541764135654169385739395775646f4d774a466f54364a314255656739786b415373534f5357764442384a5a675069634361516236442d3170586d7842686147566a5f654c4171616e38746f317a6e4c58346839617956784859534c4447466e544e445162666e347354375f49534c53466e4a54656c4e6d4b685f796f48786e514d485164617853456b616c474c785841574d69494343667552564a355971644d687a476534544151534e45744170593451527637684b7072734f572d49754f4b6237777058632d2d426253223b66625f313631303838353839393134353130315f6163636573735f746f6b656e7c733a3231373a22434141573546356e4b7a3430424142574e59746168646b3433475a415737734539797751324233527156506d724e6d4e505647313530543978704269417845436e597065655935483547634b3535366e3274764a31336a585659357347514a443253754d30615a43524750625a43765a4138427a554b69575059777553634b423575366831387978533539334d6f6d6f3435484a4a4b68386e754d48465669485a4236366a4e4458334d5a42447170586e5377654c6131395a43645857466b4e6f387277344c4964634f5a4230524f62787779434a67457938223b66625f313631303838353839393134353130315f757365725f69647c733a31353a22393739343334383335343037353330223b),
('bf990823c44cbaadfbb2af69e52e5dfcc73f3a0d', '::1', 1430227959, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433303232373935313b66625f313631303838353839393134353130315f636f64657c733a3334343a2241514372614a784e346c64506f4e642d766e38645441563076317532455557576730344f5667387a65577977766558796a4a33364f6970772d5574377a495a52416c6248535450564b47726137376c414b494252436b4d474e70746b324d69526e78474a526b66535f56514a6148615057397179672d525956436b364764683235727762685146366a397172357742635a366c72536d4b734e6639356c5563765055626643796a5637546d31554c52305164764756515551786b4e4b5831436a74365248483779364d36483566654f6548774a61337a6f3275525f676a3433476c30626b425f547a3674636f3230564841774350796b526a4b3076506d74614f7464356941376f49564b7355744a4952726e77484e7636644a322d655245305349356e415365763850336778334d746351517873717a486c50726b306d2d6f48643138626c4a7754514273645f44616139456f684165587a223b66625f313631303838353839393134353130315f6163636573735f746f6b656e7c733a3231353a22434141573546356e4b7a343042414b6c445661517374696c414e34476b795037786b3762585a4363785a41697876646763674f6d456134534176354575393842547a5a415431304a71387866743050475a4358506946336a593765323443734c566746765943354f48744b787557746e6b47445138417830594a6e4f7174654a57554b744f7650414c41715a4369435872496e6d5a433161316a713246336e7430396c5538763935694d7443356468657a5579694839494135676a6d634f464e6e6466636e734942564470526d547841536b65794a356d223b66625f313631303838353839393134353130315f757365725f69647c733a31353a22393739343334383335343037353330223b),
('c111298ada5fa74b089d46de0dec11ee828a91da', '::1', 1430293044, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433303239333034343b66625f313631303838353839393134353130315f73746174657c733a33323a223736656563313733373761333562393533623665613361336233643730323536223b),
('c1198adfff0af6555ffec30c6e28be04e53986c2', '::1', 1429801242, 0x5f5f63695f6c6173745f726567656e65726174657c693a313432393830313234323b66625f313631303838353839393134353130315f636f64657c733a3334343a224151414d795458744e3436556177716e4e697a536c457a3667566d564c5264573036454772354564414e7653706a4d316d756b5a6a766b6a554d5857644e6f77556230335655706733644d51782d4a67675255724c596238706e54666f3432636d33734c6f334c67546b4b4f6b4b6d792d396277475936705068674d6d784e5939444c3541735a53734242707872664672396848656235656b50447863466f6d6e6c4f4f5955484255355646756c754a35657533515a486a7635423956414e386737746e47596c6433537a5164576c74335a486c7746655a6673757363786438337273765441347475776369536f456a45475877455453387539763466386b6c726a6e68455a38364b56523839677579377061726669543035303550505363326762565f494d4d6a736d617a38697372735a3944537436473554747037766a6559314c496b594737794634626b376d6737776e356777327a223b66625f313631303838353839393134353130315f6163636573735f746f6b656e7c733a3231383a22434141573546356e4b7a34304241414c4e36453055566e714c4b445361544a6f5a437363714a765372526379384f5a4367497a52744970676f4e6a645343775a41694b7036343354784e4a34717145777950764a503756374559434d7a59614a7831635a41485077506e437544704c53735468725a43787a494239644e4e4f503247346b375469716b46307655653537637a5a41626635354d596b3279754936545a435a4241716d6a466e676c54484a5933464e6a32726745654d3048314b63324e6a766d79737035326b55346b4f6a427357306f4e6d5a4378223b66625f313631303838353839393134353130315f757365725f69647c733a31353a22393739343334383335343037353330223b69647c733a313a2233223b757365726e616d657c733a353a224a6f726973223b69735f61646d696e5f6c6f67696e7c623a313b),
('c27615da0fd28a06ff5964107ba33e75f02bbe61', '::1', 1429867793, 0x5f5f63695f6c6173745f726567656e65726174657c693a313432393836373739333b66625f313631303838353839393134353130315f73746174657c733a33323a223764363463303130366563313032643263643833303935323234383561666165223b69647c733a313a2235223b757365726e616d657c733a363a226d6172696a6e223b69735f61646d696e5f6c6f67696e7c623a313b),
('c61b9c22209ab48878273fe6322183ea85d732b3', '::1', 1430152256, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433303135323235363b69647c733a313a2235223b757365726e616d657c733a363a226d6172696a6e223b69735f61646d696e5f6c6f67696e7c623a313b66625f313631303838353839393134353130315f73746174657c733a33323a223931646261303431613666643330346534346135613565383535663861333466223b),
('c762a95a95bc7ec9393d8fc49ffe041239d03000', '::1', 1429793427, 0x5f5f63695f6c6173745f726567656e65726174657c693a313432393739333335393b66625f313631303838353839393134353130315f73746174657c733a33323a223666343231643237646337616662383066383062306666623531343834663132223b69647c733a313a2239223b6765627275696b6572736e61616d7c733a373a224d6172696e7573223b69735f676964735f6c6f67696e7c623a313b),
('cbe5bbf2a7dbbe680e184a4a656926e4825f3670', '::1', 1429862909, 0x5f5f63695f6c6173745f726567656e65726174657c693a313432393836323930393b66625f313631303838353839393134353130315f73746174657c733a33323a226564663766333665393231653333386332663737653430643430306334316234223b),
('d393c13697e0277f9ec55fae86636b7f35e04624', '::1', 1429795235, 0x5f5f63695f6c6173745f726567656e65726174657c693a313432393739353233353b66625f313631303838353839393134353130315f73746174657c733a33323a226437313938373632353235646130353130333763366366613661393434613639223b69647c733a313a2239223b6765627275696b6572736e61616d7c733a373a224d6172696e7573223b69735f676964735f6c6f67696e7c623a313b),
('d426e8743ed862f3afd31a7ab8a01978ec1f1e53', '::1', 1429794930, 0x5f5f63695f6c6173745f726567656e65726174657c693a313432393739343931353b66625f313631303838353839393134353130315f73746174657c733a33323a226437313938373632353235646130353130333763366366613661393434613639223b69647c733a313a2239223b6765627275696b6572736e61616d7c733a373a224d6172696e7573223b69735f676964735f6c6f67696e7c623a313b),
('d485dd37b5ef6c6c210b725c9e937e252b9bd52b', '::1', 1429864011, 0x5f5f63695f6c6173745f726567656e65726174657c693a313432393836343031313b66625f313631303838353839393134353130315f73746174657c733a33323a223764363463303130366563313032643263643833303935323234383561666165223b),
('de96fb3c139cb302beda8a249087481f02b07722', '::1', 1429792006, 0x5f5f63695f6c6173745f726567656e65726174657c693a313432393739323030363b),
('def0a1db98f4a6921d3ff99968c7c6cb82e2b243', '::1', 1429792873, 0x5f5f63695f6c6173745f726567656e65726174657c693a313432393739323837333b),
('e23ab6d6d398a46c736b6a4212d1317e21fb688d', '::1', 1429802420, 0x5f5f63695f6c6173745f726567656e65726174657c693a313432393830323335313b66625f313631303838353839393134353130315f73746174657c733a33323a223937666538313562623134633738396231303136303064613537343565363165223b69647c733a323a223131223b6765627275696b6572736e61616d7c733a363a226d6172696a6e223b69735f676964735f6c6f67696e7c623a313b),
('e2dcf2d496f5a03696d93362b037cbcc2c322afa', '::1', 1429793358, 0x5f5f63695f6c6173745f726567656e65726174657c693a313432393739333335383b66625f313631303838353839393134353130315f73746174657c733a33323a223939663835393361306334343164663636633965613635333634383863343033223b),
('ef183f5b5e4c9e506e4bcd36e0681aa56a0d7ff1', '::1', 1430314930, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433303331343933303b66625f313631303838353839393134353130315f73746174657c733a33323a223730633165613839373264323661643435653465643463643764633530383234223b);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
`admin_id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL DEFAULT '',
  `wachtwoord` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `naam`, `wachtwoord`) VALUES
(2, 'Thais', '123'),
(3, 'Joris', '564c0a3a97863acb738f0f6646e87021'),
(5, 'marijn', 'badb8098ad4b4a2a0ca520c6ec198996');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_admin_users`
--

CREATE TABLE `tbl_admin_users` (
`id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_admin_users`
--

INSERT INTO `tbl_admin_users` (`id`, `username`, `email`, `password`) VALUES
(1, 'demo', 'mooretom@outlook.com', '7e466fc01a0c7932e96a4a925b11b06a');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_beschikbare_data`
--

CREATE TABLE `tbl_beschikbare_data` (
`bd_id` int(11) NOT NULL,
  `datum_tijd` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=141 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_beschikbare_data`
--

INSERT INTO `tbl_beschikbare_data` (`bd_id`, `datum_tijd`) VALUES
(130, '04/23/2015'),
(133, '04/09/2015'),
(135, '04/17/2015'),
(137, '09/04/2015'),
(139, '16/04/2015'),
(140, '24/04/2015');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_bezoeker`
--

CREATE TABLE `tbl_bezoeker` (
`bezoeker_id` int(11) NOT NULL,
  `voornaam` varchar(255) NOT NULL DEFAULT '',
  `naam` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `wachtwoord` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_bezoeker`
--

INSERT INTO `tbl_bezoeker` (`bezoeker_id`, `voornaam`, `naam`, `email`, `wachtwoord`) VALUES
(1, 'Tom', 'Thys', 'iets@student.be', '123'),
(2, 'Marijn', 'Rutten', 'ruttenmarijn1991@gmail.com', '123');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_boekingen`
--

CREATE TABLE `tbl_boekingen` (
`boeking_id` int(11) NOT NULL,
  `student_bd_id` varchar(255) NOT NULL DEFAULT '',
  `bezoeker_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_boekingen`
--

INSERT INTO `tbl_boekingen` (`boeking_id`, `student_bd_id`, `bezoeker_id`) VALUES
(1, '1', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
`feedback_id` int(11) NOT NULL,
  `feedback` varchar(255) NOT NULL DEFAULT '',
  `rating` int(11) NOT NULL DEFAULT '0',
  `bezoeker_id_fk` int(11) NOT NULL DEFAULT '0',
  `student_id_fk` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `feedback`, `rating`, `bezoeker_id_fk`, `student_id_fk`) VALUES
(1, 'feedback', 3, 1, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_student`
--

CREATE TABLE `tbl_student` (
`student_id` int(11) NOT NULL,
  `voornaam` varchar(255) NOT NULL DEFAULT '',
  `naam` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `wachtwoord` varchar(100) NOT NULL DEFAULT '0',
  `opleiding` varchar(255) NOT NULL DEFAULT '',
  `school` varchar(255) NOT NULL DEFAULT '',
  `over` varchar(500) NOT NULL DEFAULT '',
  `gebruikersnaam` varchar(200) NOT NULL,
  `image` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'profile_picture'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_student`
--

INSERT INTO `tbl_student` (`student_id`, `voornaam`, `naam`, `email`, `wachtwoord`, `opleiding`, `school`, `over`, `gebruikersnaam`, `image`) VALUES
(1, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'LUL', 'bla.png'),
(2, 'imd', 'imd', 'imd', 'imd', 'imd', 'imd', 'imd', 'imd', 'profile_picture.jpg'),
(9, 'Marijn', 'Rutten', 'rut@g.com', '3c974349dab7cec7d70142df9258eeed', 'M', 'M', '', 'Marinus', 'profile_picture'),
(11, 'marijn', 'marijn', 'marijn', 'badb8098ad4b4a2a0ca520c6ec198996', 'marijn', 'marijn', '', 'marijn', 'profile_picture');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_student_beschikbare_data`
--

CREATE TABLE `tbl_student_beschikbare_data` (
  `student_id` int(11) NOT NULL DEFAULT '0',
  `bd_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_student_beschikbare_data`
--

INSERT INTO `tbl_student_beschikbare_data` (`student_id`, `bd_id`) VALUES
(9, 135),
(9, 137),
(11, 139),
(11, 140);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tweets`
--

CREATE TABLE `tweets` (
`id` int(11) NOT NULL,
  `text` varchar(200) DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tweets`
--

INSERT INTO `tweets` (`id`, `text`) VALUES
(12, '04/01/2015'),
(19, '04/09/2015'),
(20, '04/11/2015'),
(24, '04/02/2015');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
`id` tinyint(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'test', '098f6bcd4621d373cade4e832627b4f6');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`id`), ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexen voor tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexen voor tabel `tbl_admin_users`
--
ALTER TABLE `tbl_admin_users`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `tbl_beschikbare_data`
--
ALTER TABLE `tbl_beschikbare_data`
 ADD PRIMARY KEY (`bd_id`);

--
-- Indexen voor tabel `tbl_bezoeker`
--
ALTER TABLE `tbl_bezoeker`
 ADD PRIMARY KEY (`bezoeker_id`);

--
-- Indexen voor tabel `tbl_boekingen`
--
ALTER TABLE `tbl_boekingen`
 ADD PRIMARY KEY (`boeking_id`), ADD KEY `bezoeker_id` (`bezoeker_id`), ADD KEY `student_bd_id` (`student_bd_id`);

--
-- Indexen voor tabel `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
 ADD PRIMARY KEY (`feedback_id`), ADD KEY `bezoeker_id` (`bezoeker_id_fk`), ADD KEY `student_id_fk` (`student_id_fk`);

--
-- Indexen voor tabel `tbl_student`
--
ALTER TABLE `tbl_student`
 ADD PRIMARY KEY (`student_id`);

--
-- Indexen voor tabel `tbl_student_beschikbare_data`
--
ALTER TABLE `tbl_student_beschikbare_data`
 ADD KEY `student_id` (`student_id`), ADD KEY `bd_id` (`bd_id`), ADD KEY `bd_id_2` (`bd_id`), ADD KEY `student_id_2` (`student_id`);

--
-- Indexen voor tabel `tweets`
--
ALTER TABLE `tweets`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT voor een tabel `tbl_admin_users`
--
ALTER TABLE `tbl_admin_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `tbl_beschikbare_data`
--
ALTER TABLE `tbl_beschikbare_data`
MODIFY `bd_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=141;
--
-- AUTO_INCREMENT voor een tabel `tbl_bezoeker`
--
ALTER TABLE `tbl_bezoeker`
MODIFY `bezoeker_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `tbl_boekingen`
--
ALTER TABLE `tbl_boekingen`
MODIFY `boeking_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `tbl_student`
--
ALTER TABLE `tbl_student`
MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT voor een tabel `tweets`
--
ALTER TABLE `tweets`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
MODIFY `id` tinyint(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `tbl_boekingen`
--
ALTER TABLE `tbl_boekingen`
ADD CONSTRAINT `tbl_boekingen_ibfk_1` FOREIGN KEY (`bezoeker_id`) REFERENCES `tbl_bezoeker` (`bezoeker_id`);

--
-- Beperkingen voor tabel `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
ADD CONSTRAINT `tbl_feedback_ibfk_1` FOREIGN KEY (`student_id_fk`) REFERENCES `tbl_student` (`student_id`),
ADD CONSTRAINT `tbl_feedback_ibfk_2` FOREIGN KEY (`bezoeker_id_fk`) REFERENCES `tbl_bezoeker` (`bezoeker_id`);

--
-- Beperkingen voor tabel `tbl_student_beschikbare_data`
--
ALTER TABLE `tbl_student_beschikbare_data`
ADD CONSTRAINT `student_id_fk` FOREIGN KEY (`student_id`) REFERENCES `tbl_student` (`student_id`),
ADD CONSTRAINT `tbl_student_beschikbare_data_ibfk_1` FOREIGN KEY (`bd_id`) REFERENCES `tbl_beschikbare_data` (`bd_id`);