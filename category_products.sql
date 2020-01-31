
CREATE TABLE `category_products` (
  `id` int(11) NOT NULL,
  `p_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `p_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `category_products` (`id`, `p_name`, `p_image`, `price`, `status`) VALUES
(1, 'Jeans', 'jeans1.png', 2000.00, 1),
(1, 'Shirts', 'shirts.png', 1500.00, 1),
(2, 'Samsung Max', 'samsung.png', 14000.00, 1),
(2, 'Motorola', 'moto.png', 1200.00, 1);
