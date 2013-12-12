<?php 


	require 'vendor/autoload.php';


/*
	$app = new \Slim\Slim();

	$app->get('/hello/:name', function () {
    	include('main.php');
	});

	$app->get('/', function () {
    	echo "This is the index file, now learn!";
	});

	$app->get('/food/:name', function ($food) {
    	echo "I want to eat $food";
	});

	$app->run();

	*/

	$app = new \Slim\Slim();
	$app->get('/foo', 'foo');
	function foo() {
    	$app = Slim::getInstance();
    	$app->render('foo.php');
	}