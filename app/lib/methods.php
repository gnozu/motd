<?php
// layout
Flight::map("screen", function($view, $params = array()){
	Flight::render($view, $params, 'content');
	Flight::pantheon_render('layout');
});
Flight::map("web", function($view, $params = array()){
	Flight::render($view, $params, 'content');
	Flight::pantheon_render_web('web');
});

/**
 * Render using pantheon
 */
Flight::map('pantheon_render', function($outer_view){

	// define $template as a closure for getting the pantheon wrapper
	$template = function()
	{
		if (defined("TEMPLATING_ENGINE"))
		{
			// call pantheon
			require TEMPLATING_ENGINE . '/template.loader.php';
	
			// workaround for pantheon setting get and post to null if they're empty
			if ($_GET === null) $_GET = array();
			if ($_POST === null) $_POST = array();
			
			// run pantheon and store its output in a buffer
			ob_start();

			Flight::render('layout');

			require TEMPLATING_ENGINE . '/run.php';
			$content = ob_get_contents();
			ob_end_clean();
			

			echo $content;
		}else{
			Flight::render('layout');
		}
	};
	
	// go go gadget pantheon
	return $template();
	
});






Flight::map('pantheon_render_web', function($outer_view){

	// define $template as a closure for getting the pantheon wrapper
	$template = function()
	{
		if (defined("TEMPLATING_ENGINE"))
		{
			// call pantheon
			require TEMPLATING_ENGINE . '/template.loader.php';
	
			// workaround for pantheon setting get and post to null if they're empty
			if ($_GET === null) $_GET = array();
			if ($_POST === null) $_POST = array();
			
			// run pantheon and store its output in a buffer
			ob_start();

			Flight::render('web');

			require TEMPLATING_ENGINE . '/run.php';
			$content = ob_get_contents();
			ob_end_clean();
			

			echo $content;
		}else{
			Flight::render('web');
		}
	};
	
	// go go gadget pantheon
	return $template();
	
});





// url
Flight::map("url", function($url){
	if(Flight::request()->base == '/'){
		return '/'.$url;
	}else{
		return Flight::request()->base.'/'.$url;	
	}
});
// ispost
Flight::map("isPost", function(){ return ($_SERVER['REQUEST_METHOD'] === 'POST'); });
