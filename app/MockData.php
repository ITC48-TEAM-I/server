<?php

namespace App;

class MockData {
	public $travelList;
	function __construct(){
		$this->travelList  = [
			[
				"travel_code" => "abcdefg",
				"travel_date" => "2016-12-12",
				"latitude" => 35.665721,
				"longitude" => 139.731006,
				"area_name" => "六本木",
				"country_name" => "日本",
				"routes" => [
					[
						"transit_time" => "10:13:00",
						"latitude" => 35.665021590968486,
						"longitude" => 139.73028116798397
					],
					[
						"transit_time" => "10:13:15",
						"latitude" => 35.66442019710309,
						"longitude" => 139.73110252421
					],
					[
						"transit_time" => "10:13:30",
						"latitude" => 35.664919626970736,
						"longitude" => 139.7317355594639
					],
					[
						"transit_time" => "10:13:45",
						"latitude" => 35.66535426709936, 
						"longitude" => 139.73244000538708
					],
					[
						"transit_time" => "10:14:00",
						"latitude" => 35.6669114989883,
						"longitude" => 139.73354293665648
					],
					[
						"transit_time" => "10:15:15",
						"latitude" => 35.66746056736638,
						"longitude" => 139.7329722145452
					],
					[
						"transit_time" => "10:16:15",
						"latitude" => 35.667784384057526, 
						"longitude" => 139.73316392712337
					],
					[
						"transit_time" => "10:17:15",
						"latitude" => 35.668859752941586, 
						"longitude" => 139.73236638250415
					],
					
				],
				"spots" => [
					[
						"visit_time" => "10:13:15",
						"latitude" => 35.668859752941586, 
						"longitude" => 139.73236638250415,
						"spot_name" => "ミッドタウン",
						"site_url" => "http://hoge.com",
						"stay_minute" => 40
					],
					[
						"visit_time" => "10:13:15",
						"latitude" => 35.66810801257965, 
						"longitude" => 139.7329717329569,
						"spot_name" => "ローソン港赤坂九丁目店",
						"site_url" => "http://hoge.com",
						"stay_minute" => 40
					]
				],
			],
			[
				"travel_code" => "abcdefg",
				"travel_date" => "2016-12-13",
				"latitude" => 35.665721,
				"longitude" => 139.731006,
				"area_name" => "六本木",
				"country_name" => "日本",
				"routes" => [
					[
						"transit_time" => "10:13:00",
						"latitude" => 35.665021590968486,
						"longitude" => 139.73028116798397
					],
					[
						"transit_time" => "10:13:15",
						"latitude" => 35.66442019710309,
						"longitude" => 139.73110252421
					],
					[
						"transit_time" => "10:13:30",
						"latitude" => 35.664919626970736,
						"longitude" => 139.7317355594639
					],
					[
						"transit_time" => "10:13:45",
						"latitude" => 35.66535426709936, 
						"longitude" => 139.73244000538708
					],
					[
						"transit_time" => "10:14:00",
						"latitude" => 35.6669114989883,
						"longitude" => 139.73354293665648
					],
					[
						"transit_time" => "10:15:15",
						"latitude" => 35.66746056736638,
						"longitude" => 139.7329722145452
					],
					[
						"transit_time" => "10:16:15",
						"latitude" => 35.667784384057526, 
						"longitude" => 139.73316392712337
					],
					[
						"transit_time" => "10:17:15",
						"latitude" => 35.668859752941586, 
						"longitude" => 139.73236638250415
					],
					
				],
				"spots" => [
					[
						"visit_time" => "10:13:15",
						"latitude" => 35.668859752941586, 
						"longitude" => 139.73236638250415,
						"spot_name" => "ミッドタウン",
						"site_url" => "http://hoge.com",
						"stay_minute" => 40
					],
					[
						"visit_time" => "10:13:15",
						"latitude" => 35.66810801257965, 
						"longitude" => 139.7329717329569,
						"spot_name" => "ローソン港赤坂九丁目店",
						"site_url" => "http://hoge.com",
						"stay_minute" => 40
					]
				],
			]
		];
	}
	
}