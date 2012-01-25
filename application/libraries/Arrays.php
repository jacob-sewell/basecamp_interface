<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Arrays
{

	function months()
	{
		$months = array(
			'1' => '1',
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
			'6' => '6',
			'7' => '7',
			'8' => '8',
			'9' => '9',
			'10' => '10',
			'11' => '11',
			'12' => '12');
		
		return $months;
	}

	function days()
	{
		$days = array(
			'1' => '1',
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
			'6' => '6',
			'7' => '7',
			'8' => '8',
			'9' => '9',
			'10' => '10',
			'11' => '11',
			'12' => '12',
			'13' => '13',
			'14' => '14',
			'15' => '15',
			'16' => '16',
			'17' => '17',
			'18' => '18',
			'19' => '19',
			'20' => '20',
			'21' => '21',
			'22' => '22',
			'23' => '23',
			'24' => '24',
			'25' => '25',
			'26' => '26',
			'27' => '27',
			'28' => '28',
			'29' => '29',
			'30' => '30',
			'31' => '31');
			
		return $days;
	}
				
	function years()
	{
		$years = array(
			'2011' => '2011',
			'2012' => '2012',
			'2013' => '2013',
			'2014' => '2014',
			'2015' => '2015',
			'2016' => '2016'
			);
			
		return $years;
	}
	
	function states()
	{
		$states = array(
			'AL' => "Alabama",  
			'AK' => "Alaska",  
			'AZ' => "Arizona",  
			'AR' => "Arkansas",  
			'CA' => "California",  
			'CO' => "Colorado",  
			'CT' => "Connecticut",  
			'DE' => "Delaware",  
			'DC' => "District Of Columbia",  
			'FL' => "Florida",  
			'GA' => "Georgia",  
			'HI' => "Hawaii",  
			'ID' => "Idaho",  
			'IL' => "Illinois",  
			'IN' => "Indiana",  
			'IA' => "Iowa",  
			'KS' => "Kansas",  
			'KY' => "Kentucky",  
			'LA' => "Louisiana",  
			'ME' => "Maine",  
			'MD' => "Maryland",  
			'MA' => "Massachusetts",  
			'MI' => "Michigan",  
			'MN' => "Minnesota",  
			'MS' => "Mississippi",  
			'MO' => "Missouri",  
			'MT' => "Montana",
			'NE' => "Nebraska",
			'NV' => "Nevada",
			'NH' => "New Hampshire",
			'NJ' => "New Jersey",
			'NM' => "New Mexico",
			'NY' => "New York",
			'NC' => "North Carolina",
			'ND' => "North Dakota",
			'OH' => "Ohio",  
			'OK' => "Oklahoma",  
			'OR' => "Oregon",  
			'PA' => "Pennsylvania",  
			'RI' => "Rhode Island",  
			'SC' => "South Carolina",  
			'SD' => "South Dakota",
			'TN' => "Tennessee",  
			'TX' => "Texas",  
			'UT' => "Utah",  
			'VT' => "Vermont",  
			'VA' => "Virginia",  
			'WA' => "Washington",  
			'WV' => "West Virginia",  
			'WI' => "Wisconsin",  
			'WY' => "Wyoming"
			);
		
		return $states;
	}
	
	function per_page()
	{
		
		$array = array(
			'10' => '10 per page',
			'25' => '25 per page',
			'50' => '50 per page'
		);
		
		if(ENVIRONMENT != 'production')
			$array['1'] = '1 per page';
			
		return $array;
		
	}
				
}