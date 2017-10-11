<?php

return [

	/*
	 | Users should enter their public key provided when they create an application
	*/
	"public_key" => "arian",

	/*
	 | Users should enter their secret key provided when they create an application
	*/
	"secret_key" => "ajdari",

	/*
	 | Password is used to authenticate the user
	*/
	"password" => "tahaturk",

	/*
	 | Since CVApi is built with the help from CUrl Library, users can redirect the request at another route.
	 | In order to use CVApi, users should not change this setting.
	*/
	 "route" => "http://0172cc85.ngrok.io/api/request",

	/*
	 | isPost sets the method type to POST when using CUrl. If users change the route and start using GET
	 | requests, the can set isPost to false. Otherwise, it should be left as true
	*/
	"isPost" => true,

	/*
	 | Path is used to set the place where the user wants to save the the images.
	*/
	"path" => realpath('') . '/'
];