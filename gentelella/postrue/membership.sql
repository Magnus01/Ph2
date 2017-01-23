--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `user_firstname` varchar(70) NOT NULL,
  `user_lastname` varchar(120) NOT NULL,
  `user_email` varchar(140) NOT NULL,
  `user_password` varchar(80) NOT NULL,
  `date_signed_up` varchar(36) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

