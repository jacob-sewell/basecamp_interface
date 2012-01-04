<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *	App_controller
 * This should be the parent of all the controllers in this application. Put things here that you will need to load on every page.
 * 
 * @author Philsquare LLC (philsquare.com)
 */

class App_controller extends MY_Controller
{
	public function __construct()
	{
		// Call the Parent constructor
		parent::__construct();
	}
	
}
