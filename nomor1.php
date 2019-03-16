<?php

	function biodata()
	{
		return [
			'name' 		=> 'Haidi Nurhadinata',
			'address'	=> 'jl. Ahmad Yani no.03 Rt.09 samarinda, Kalimantan Timur',
			'hobbies'	=> ['surfing google', 'learn speak english', 'cleaning home'],
			'is_married'=> false,
			'skills'	=> [
				'html', 'css', 'sass', 'javascript', 'vue.js', 'php', 'laravel', 'config heroku', 'git', 'basic firebase'
			],
		];
	}

echo json_encode(biodata());