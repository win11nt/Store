SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Canon EOS', 360),
(2, 'Nikon DSLR', 400),
(3, 'Sony DSLR', 450),
(4, 'Olympus DSLR', 500),
(5, 'Titan Model #301', 1300),
(6, 'Titan Model #201', 500),
(7, 'HMT Milan', 800),
(8, 'Faber Luba #111', 1800),
(9, 'Marshall Major IV', 120),
(10, 'Sony WH-XB910N', 250),
(11, 'Jabra Evolve 80', 259),
(12, 'Beats Studio3', 349);


CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Minh', 'Abc123@gmail.com', 'Asdasd123', '0123456789', 'HoChiMinh', 'ABC'),

CREATE TABLE `user_item` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed','','') NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `user_item` (`id`, `user_id`, `item_id`, `status`, `date_time`) VALUES
(1, 1, 2, 'Confirmed', '2020-06-07 21:08:35'),
(2, 1, 10, 'Confirmed', '2020-06-07 21:08:38'),
(3, 3, 7, 'Confirmed', '2020-06-07 21:09:06'),
(4, 3, 12, 'Confirmed', '2020-06-07 21:09:10'),
(5, 5, 5, 'Confirmed', '2020-06-07 21:22:01'),
(6, 5, 1, 'Confirmed', '2020-06-07 21:22:03');

ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user_item`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `user_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;
