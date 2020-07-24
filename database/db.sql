 CREATE Database sachin1 ;
  
CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
); 



INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Small'),
(2, 'Medium'),
(3, 'Large');


  CREATE TABLE store (
  R_name varchar(100) NOT NULL,
  category varchar(50) NOT NULL,
  Range_from varchar(50) NOT NULL,
  Range_to varchar(50) NOT NULL
); 
