<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
	}

	public function index()
	{
		$data = array();
		$data['title']="Home";
		$data['meta_title']='Home';
		$data['stylesheets']= array(
			'vendors/fullcalendar/css/fullcalendar',
			'css/pages/calendar_custom',
			'vendors/bower-jvectormap/css/jquery-jvectormap-1.2.2',
			'vendors/animate/animate.min',
			'vendors/datetimepicker/css/bootstrap-datetimepicker.min',
			'css/pages/only_dashboard'
		);
		$data['javascripts']= array(
			'vendors/jquery.easy-pie-chart/js/easypiechart.min', 				//EASY PIE CHART JS
			'vendors/jquery.easy-pie-chart/js/jquery.easypiechart.min', 		//EASY PIE CHART JS
			'js/jquery.easingpie', 												//EASY PIE CHART JS
			'vendors/moment/js/moment.min', 									// calendar
			'vendors/fullcalendar/js/fullcalendar.min', 						// calendar
			'vendors/flotchart/js/jquery.flot', 								// Realtime Server Load
			'vendors/sparklinecharts/jquery.sparkline', 						// Sparkline Chart
			'vendors/countUp.js/js/countUp', 									// Back to Top
			'vendors/bower-jvectormap/js/jquery-jvectormap-1.2.2.min', 			// maps
			'vendors/bower-jvectormap/js/jquery-jvectormap-world-mill-en',		// maps
			'vendors/chartjs/Chart', 											// maps
			'vendors/datetimepicker/js/bootstrap-datetimepicker.min', 			// maps
			'js/pages/todolist', 												// todolist
			'js/pages/dashboard',												// todolist
		);

		$this->load->view('home_view', $data);

	}


}
