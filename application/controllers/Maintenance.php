<?php

/**
 * REST server for menu operations.
 *
 * ------------------------------------------------------------------------
 */
require APPPATH . '/third_party/restful/libraries/Rest_controller.php';

class Maintenance extends Rest_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Menu');
	}

	// Handle an incoming GET - cRud
    function index_get()
    {
        $this->response('ok', 200);
    }

    // Handle an incoming PUT - crUd
    function index_put()
    {
        $this->response('ok', 200);
    }

    // Handle an incoming POST - Crud
    function index_post()
    {
        $this->response('ok', 200);
    }

    // Handle an incoming DELETE - cruD
    function index_delete()
    {
        $this->response('ok', 200);
    }

}