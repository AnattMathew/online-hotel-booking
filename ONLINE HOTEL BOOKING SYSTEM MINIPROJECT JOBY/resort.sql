

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




CREATE TABLE `carreservation` (
  `id` int(10) NOT NULL,
  `rid` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `in_date` varchar(50) NOT NULL,
  `out_date` varchar(50) NOT NULL,
  `rstatus` varchar(25) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `carreservation` (`id`, `rid`, `username`, `in_date`, `out_date`, `rstatus`, `status`) VALUES
(2, 2, 'qw@gmail.com', '2017-02-09', '2017-10-09', 'Confirmed', 1);



CREATE TABLE `gallery` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `content` varchar(500) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `gallery` (`id`, `name`, `image`, `content`, `status`) VALUES
(1, 'Costume Party', 'IMG-20161226-WA0004.jpg', 'Costume Party', 1);


CREATE TABLE `login` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `usertype` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



INSERT INTO `login` (`username`, `password`, `usertype`, `mobile`, `status`) VALUES
('admin@d.co', 'admin', 'Admin', '', 1),
('qw@gmail.com', '123456abC', 'User', '9495203215', 1);



CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(150) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `country` varchar(25) NOT NULL,
  `pin` int(6) NOT NULL,
  `address` varchar(500) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



INSERT INTO `register` (`id`, `fname`, `lname`, `username`, `mobile`, `country`, `pin`, `address`, `gender`, `status`) VALUES
(1, 'Akhil', 'Alex', 'qw@gmail.com', '9495203215', '', 111111, 'palai', 'male', 1),
(4, 'Akhil', 'Alex', 'qw@gmail.com', '9495203215', '', 111111, 'palai', 'male', 1);



CREATE TABLE `reservation` (
  `id` int(30) NOT NULL,
  `rid` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `in_date` varchar(100) NOT NULL,
  `out_date` varchar(100) NOT NULL,
  `rstatus` varchar(20) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=0;


INSERT INTO `reservation` (`id`, `rid`, `username`, `in_date`, `out_date`, `rstatus`, `status`) VALUES
(20, 5, 'qw@gmail.com', '2017-02-08', '2017-02-09', 'Waiting', 0),
(21, 5, 'qw@gmail.com', '2017-02-08', '2017-02-09', 'Waiting', 0),
(22, 4, 'admin@d.co', '2017-02-09', '2017-02-10', 'Confirmed', 1),
(23, 6, 'admin@d.co', '2017-02-10', '2017-02-11', 'Confirmed', 1),
(24, 1, 'admin@d.co', '2017-02-09', '2017-02-10', 'Waiting', 1);


CREATE TABLE `rooms` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `rate` int(10) NOT NULL,
  `avalstatus` varchar(20) NOT NULL,
  `features` varchar(1000) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



INSERT INTO `rooms` (`id`, `name`, `category`, `photo`, `rate`, `avalstatus`, `features`, `status`) VALUES
(5, 'Conference Hall', 'Conference Hall', '26.jpg', 30000, 'Avaliable', 'A/C ,35 seats, 4k Projector for presentation', 1),
(4, 'Marriage Hall', 'Auditorium', '22.jpg', 100000, 'Avaliable', '300 seats', 1),
(6, 'Deluxe 1', 'Deluxe', '17.jpg', 15000, 'Avaliable', 'Deluxe suite', 1);


CREATE TABLE `staff` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(250) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `staff` (`id`, `name`, `image`, `gender`, `mobile`, `address`, `status`) VALUES
(1, 'Shumin', '12.jpg', 'Female', '8475954512', 'China', 1);


CREATE TABLE `taxi` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `rate` int(10) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `taxi` (`id`, `name`, `category`, `image`, `rate`, `status`) VALUES
(1, 'Bullet Classic 350', '2 wheeler', '45241411_1_1000x700_royal-enfield-classic-350-balek-3-manth-old-bengaluru.jpg', 650, 1),
(2, 'Bullet Classic 350', '2 wheeler', 'classic350_left-side_white_600x463_motorcycle.png', 650, 1);


ALTER TABLE `carreservation`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `reservation`
  ADD KEY `r_id` (`id`);


ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `taxi`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `carreservation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `reservation`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

ALTER TABLE `rooms`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `staff`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `taxi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
