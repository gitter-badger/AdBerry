--
-- Table structure for table `Ads`
--

CREATE TABLE IF NOT EXISTS `Ads` (
`Ad_ID` int(100) NOT NULL,
  `Ad_Name` varchar(255) COLLATE latin1_german1_ci NOT NULL,
  `Ad_Type` varchar(255) COLLATE latin1_german1_ci NOT NULL,
  `Ad_Owner_ID` int(100) NOT NULL,
  `Ad_Creation_Date` datetime NOT NULL,
  `Campain_ID` int(11) NOT NULL,
  `Ad_Status` int(4) NOT NULL,
  `Allow_Mobile` int(11) NOT NULL,
  `Allow_Tablet` int(11) NOT NULL,
  `Allow_Desktop` int(11) NOT NULL,
  `Ad_Code_Mobile` varchar(512) COLLATE latin1_german1_ci DEFAULT NULL,
  `Ad_Code_Tablet` varchar(512) COLLATE latin1_german1_ci DEFAULT NULL,
  `Ad_Code_Desktop` varchar(512) COLLATE latin1_german1_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Table structure for table `AdSpaces`
--

CREATE TABLE IF NOT EXISTS `AdSpaces` (
`AdSpace_ID` int(11) NOT NULL,
  `AdSpace_Name` varchar(125) COLLATE latin1_german1_ci NOT NULL,
  `AdSpace_Desciption` varchar(255) COLLATE latin1_german1_ci NOT NULL,
  `AdSpace_Max_Banenr` int(11) NOT NULL,
  `AdSpace_Rotation_Time` int(125) NOT NULL,
  `AdSpace_Effect` int(11) NOT NULL,
  `AdSpace_Ajax` tinyint(1) NOT NULL,
  `AdSpace_Center` tinyint(1) NOT NULL,
  `AdSpace_Hide` int(11) NOT NULL,
  `AdSpace_Default` int(11) NOT NULL,
  `AdSpace_Mobile_En` tinyint(1) NOT NULL,
  `AdSpace_Mobile_High` smallint(6) NOT NULL,
  `AdSpace_Mobile_Width` smallint(6) NOT NULL,
  `AdSpace_Mobile_Fixed` tinyint(1) NOT NULL,
  `AdSpace_Tablet_En` tinyint(1) NOT NULL,
  `AdSpace_Tablet_High` smallint(6) NOT NULL,
  `AdSpace_Tablet_Width` smallint(6) NOT NULL,
  `AdSpace_Tablet_Fixed` tinyint(1) NOT NULL,
  `AdSpace_Desktop_En` tinyint(1) NOT NULL,
  `AdSpace_Desktop_High` smallint(6) NOT NULL,
  `AdSpace_Desktop_Width` smallint(6) NOT NULL,
  `AdSpace_Desktop_Fixed` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Campains`
--

CREATE TABLE IF NOT EXISTS `Campains` (
`Campain_ID` int(11) NOT NULL,
  `Campain_Name` varchar(150) COLLATE latin1_german1_ci NOT NULL,
  `Campain_Description` varchar(255) COLLATE latin1_german1_ci DEFAULT NULL,
  `Campain_User_ID` int(11) NOT NULL,
  `Campain_Start_Date` datetime NOT NULL,
  `Campain_End_Date` datetime DEFAULT NULL,
  `Campain_Max_Views` int(150) DEFAULT NULL,
  `Campain_Max_Clicks` int(150) DEFAULT NULL,
  `Campain_Status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Clicks`
--

CREATE TABLE IF NOT EXISTS `Clicks` (
`Click_ID` int(11) NOT NULL,
  `Click_Day` date NOT NULL,
  `Click_Time` time NOT NULL,
  `Click_Platform` int(2) NOT NULL,
  `Click_Browser` int(2) NOT NULL,
  `Click_Device` int(2) NOT NULL,
  `Clicked_Banner_ID` int(150) NOT NULL,
  `Clicked_AdSpace_ID` int(11) NOT NULL,
  `Click_IP` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
`User_ID` int(11) NOT NULL,
  `First_Name` varchar(60) COLLATE latin1_german1_ci NOT NULL,
  `Last_Name` varchar(80) COLLATE latin1_german1_ci NOT NULL,
  `Place_Name` varchar(150) COLLATE latin1_german1_ci NOT NULL,
  `Street_Name` varchar(150) COLLATE latin1_german1_ci NOT NULL,
  `House_Nr` varchar(10) COLLATE latin1_german1_ci NOT NULL,
  `Postcode` varchar(12) COLLATE latin1_german1_ci NOT NULL,
  `Telephone` varchar(12) COLLATE latin1_german1_ci NOT NULL,
  `Mobile-Telephone` varchar(12) COLLATE latin1_german1_ci NOT NULL,
  `User_Type` int(11) NOT NULL,
  `Username` varchar(35) COLLATE latin1_german1_ci NOT NULL,
  `Email` varchar(200) COLLATE latin1_german1_ci NOT NULL,
  `Password` varchar(250) COLLATE latin1_german1_ci NOT NULL,
  `Lost_Pass_Token` varchar(200) COLLATE latin1_german1_ci DEFAULT NULL,
  `Lost_Pass_Expiry` datetime DEFAULT NULL,
  `Last_Login` datetime DEFAULT NULL,
  `Last_login_IP` varchar(30) COLLATE latin1_german1_ci DEFAULT NULL,
  `Registerd_IP` varchar(30) COLLATE latin1_german1_ci DEFAULT NULL,
  `User_Status` int(11) NOT NULL,
  `Registerd-Date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Views`
--

CREATE TABLE IF NOT EXISTS `Views` (
`View_ID` int(11) NOT NULL,
  `View_Day` date NOT NULL,
  `View_Time` time NOT NULL,
  `View_Platform` int(11) NOT NULL,
  `View_Browser` int(11) NOT NULL,
  `View_Device` int(11) NOT NULL,
  `View_Ad_ID` int(11) NOT NULL,
  `View_AdSpace_ID` int(11) NOT NULL,
  `View_IP` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Ads`
--
ALTER TABLE `Ads`
 ADD PRIMARY KEY (`Ad_ID`);

--
-- Indexes for table `AdSpaces`
--
ALTER TABLE `AdSpaces`
 ADD PRIMARY KEY (`AdSpace_ID`);

--
-- Indexes for table `Campains`
--
ALTER TABLE `Campains`
 ADD PRIMARY KEY (`Campain_ID`);

--
-- Indexes for table `Clicks`
--
ALTER TABLE `Clicks`
 ADD PRIMARY KEY (`Click_ID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
 ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `Views`
--
ALTER TABLE `Views`
 ADD PRIMARY KEY (`View_ID`);

--
-- AUTO_INCREMENT for table `Ads`
--
ALTER TABLE `Ads`
MODIFY `Ad_ID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `AdSpaces`
--
ALTER TABLE `AdSpaces`
MODIFY `AdSpace_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Campains`
--
ALTER TABLE `Campains`
MODIFY `Campain_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Clicks`
--
ALTER TABLE `Clicks`
MODIFY `Click_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Views`
--
ALTER TABLE `Views`
MODIFY `View_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;