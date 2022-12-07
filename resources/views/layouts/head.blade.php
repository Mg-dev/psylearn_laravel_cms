<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Helios by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
		<noscript><link rel="stylesheet" href="{{asset('assets/css/noscript.css')}}" /></noscript>
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.html" id="logo">Helios</a></h1>
								<hr />
								<p>Another fine freebie by HTML5 UP</p>
							</header>
							<footer>
								<a href="#banner" class="button circled scrolly">Start</a>
							</footer>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<?php
								$url = url()->current();
								$urlName = Str::after($url, 'http://localhost:8000');
								?>
                                <li class="@if ($urlName == null )
                                    active
                                @endif"><a href="{{url('/')}}" >Home</a></li>

								<li class="@if ($urlName =='/about')
                                    active
                                @endif"><a href="{{url('/about')}}">About</a></li>
								<li class="@if ($urlName =='/news')
                                    active
                                @endif"><a href="{{url('/news')}}">News</a></li>
								<li class="@if ($urlName =='/contact')
                                    active
                                @endif"><a href="{{url('/contact')}}">Contact</a></li>
							</ul>
						</nav>

				</div>
