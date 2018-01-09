
fooddata table desicription
	name 					:	person that types in the data
	foodname 				:	name of the food
	fertalizer-quantity 	: 	quantity of feralizer used
	fertalizer-type 		: 	type of feralizer
	pesticide-quantity		: 	quantity of pecticide used
	pesticide-type 			:	type of pecticide used
	pesticide-interval 		:	pesticide 
	water-amount			:	how often is the crop watered
	irrigation-type 		:	type of water used for irrigation
	water-interval 			: 	how often is is the crop watered
	gmo 					:	genetically modified organism
	delivery-method 		: 	how is the crop delivered to the distributor
	delivery-distance 		: 	how far is it delivered
	delivery-waste-perent	: 	what percentage is wasted during delivery
	comments text NOT NULL	: 	comments


CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL
  `foodname` varchar(64) NOT NULL,
  `fertalizer-used` varchar(64) NOT NULL,
  `fertalizer-type` varchar(64) NOT NULL,
  `pesticide-used` varchar(64) NOT NULL,
  `pesticide-interval` varchar(64) NOT NULL,
  `pesticide-type` varchar(64) NOT NULL,
  `irrigation-type` varchar(64) NOT NULL,
  `water-interval` varchar(64) NOT NULL,
  `water-amount` varchar(64) NOT NULL,
  `delivery-method` varchar(64) NOT NULL,
  `delivery-distance` varchar(64) NOT NULL,
  `delivery-waste-perent` varchar(64) NOT NULL,
  `gmo` varchar(64) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;







Watch this:
https://www.youtube.com/watch?v=Av6dx9yNiCA
