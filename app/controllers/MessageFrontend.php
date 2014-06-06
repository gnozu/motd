<?php

class MessageFrontend {

	// New frontend controller
	public function __construct()
	{
	}

	public function homepage($type='screen', $location='default')
	{
		$motd = Motd::all();

		if ($type == 'screen') {
			return Flight::screen('homepage', array(
				'messages' => $motd->posts, 'location' => $location
			));
		}
		elseif ($type == 'web') {
			return Flight::web('homepage-web', array(
				'messages' => $motd->posts, 'location' => $location
			));
		}	
	}

	public function system($system)
	{
		$motd = Motd::all();

		return Flight::web('system', array(
				'messages' => $motd->posts, 'system' => $system
			));
	}

}
