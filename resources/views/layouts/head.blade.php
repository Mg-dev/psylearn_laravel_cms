

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
