<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/font/material-design-icons/Material-Design-Icons.woff">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<style>
		header,
		main,
		footer {
			padding-left: 240px;
		}

		body {
			backgroud: white;
		}

		@media only screen and (max-width: 992px) {

			header,
			main,
			footer {
				padding-left: 0;
			}
		}

		#credits li,
		#credits li a {
			color: white;
		}

		#credits li a {
			font-weight: bold;
		}

		.footer-copyright .container,
		.footer-copyright .container a {
			color: #BCC2E2;
		}

		.fab-tip {
			position: fixed;
			right: 85px;
			padding: 0px 0.5rem;
			text-align: right;
			background-color: #323232;
			border-radius: 2px;
			color: #FFF;
			width: auto;
		}

		.preloader-background {
			display: flex;
			align-items: center;
			justify-content: center;
			background-color: #eee;
			position: fixed;
			z-index: 1000;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
		}

		#user_dropdown{
			position: fixed;
			top: 9vh !important;
		}

	</style>
</head>

<body>
