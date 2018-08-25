<?php

return array(
    'bedrooms' => array(
            "1" =>"+5",
			"2" =>"+8",
			"3" =>"+12",
			"4" =>"+15"
    ),
    "bathrooms" => array (
    "1" => "+5",
    "1.5" => "+8",
    "2" => "+12",
    "2.5" => "+15",
    "3" => "+18"
	),
	"homeSquare" => array(     //kof
	    '1' => '100',        // Key(100) на что делить "homeSquare" из БД. Val(10) на что умножать
	    '2' => '10'        // Key(100) на что делить "homeSquare" из БД. Val(10) на что умножать
	),
	"frequency" =>array (
	    "once" => "-0",
	    "weekly" => "-36",
	    "biweekly" => "-20",
	    "monthly" => "-10",
	),
	    "pet" =>array (
	    "none" => "0",
	    "dog" => "+10",
	    "cat" => "+10",
	    "both" => "+20"
	),
	    "adult" =>array (
	    "none" => "+15",
	    "1-2" => "+19",
	    "3-4" => "+23",
	    "5_and_more" => "+28"
	),
	    "children" => array(
	    "none" => "0",
	    "1" => "+5",
	    "2" => "+9",
	    "3" => "+12"
	),
	"dirty" => array(      // kof
	    "1" => "1",
        "2" => "10"

	),
	"chek" => array(
	    "0" => "+7",
	    "1" => "+5"
	),
	"steel" =>array (
	    "0" => "+7",
	    "1" => "+5"
	),
	"stove" =>array(
	    "0" => "+7",
	    "1" => "+5"
	),
	"door" => array(
	    "0" => "+7",
	    "1" => "+5"
	),
	"mildew" =>array (
	    "0" => "+7",
	    "1" => "+5"
	),
	"extras" => array(
         "inside_fridge" => '+15',
         "inside_oven" => '+15',
         "garage_swept" => '+15',
         "inside_cabinets" => '+15',
         "laundry_wash_s_dry" => '+15',
         "bed_sheet_change" => '+15',
         "blinds_cleaning" => '+15'
	)

);