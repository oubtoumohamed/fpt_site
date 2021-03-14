
	<!-- TOPBAR -->
	<div id="top-bar" class="hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!--div class="top-login">
						<a href="./shop-login.html">Login</a>
					</div-->
					<style type="text/css">
						.social-icons li,.info-icons li{
							display: inline-block;
						}
					</style>
					<div class="nav-info-icons">
						<ul class="nav navbar-nav info-icons">
							<li class="fax">
								<a dir="ltr" href="tel:00212535211978"><i class="fa fa-fax"></i>&nbsp;&nbsp;+212 5 35 21 19 78 </a>
							</li>
							<li class="tel">
								<a dir="ltr" href="tel:00212535211976"><i class="fa fa-fax"></i>&nbsp;&nbsp;+212 5 35 21 19 76 </a>
							</li>
							<li class="mail">
								<a dir="ltr" href="mailto:support.fpt@usmba.ac.ma"><i class="fa fa-envelope"></i>&nbsp;&nbsp;support.fpt@usmba.ac.ma</a>
							</li>
						</ul>
					</div>
					<div class="nav-social-icons">
						<ul class="social-icons">
							<li class="facebook">
								<a href="https://www.facebook.com/fpt.usmba" target="_blank">
								<i class="fa fa-facebook"></i><i class="fa fa-facebook"></i>
								</a>
							</li>
							<li class="youtube">
								<a href="https://www.youtube.com/channel/UCVBi1oWWPRjVW3ji8HK7-fg" target="_blank">
								<i class="fa fa-youtube"></i>
								<i class="fa fa-youtube"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- HEADER -->
	<header id="header-main" style="border-bottom: solid 1px #eee;">
		<div class="container">
			<div class="navbar yamm navbar-default">
				<div class="navbar-header">
					<a style="display: inline-block; float: right;" href="{{ route('front_home') }}"><img src="{{ asset('img/logo.png') }}" style="height: 85px; margin-bottom: 0px;" alt=""></a>
					<button style="margin-left: 0px;margin-right: 0px !important;" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div id="navbar-collapse-1" class="navbar-collapse collapse navbar-left">
					<ul class="nav navbar-nav">
						
						<li class="dropdown">
							<a href="{{ route('front_home') }}" data-toggle="dropdown" class="dropdown-toggle">
								{{ __('front.home') }} 
							</a>
						</li>
						
						<li class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">
								{{ __('front.e-facultt') }} 
								<div class="arrow-up"><i class="fa fa-angle-down"></i></div>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="about.html">{{ __('front.actualites') }}</a></li>
								<li><a href="services.html">{{ __('front.espace_etudiant') }}</a></li>
								<li><a href="team.html">{{ __('front.e-learning') }}</a></li>
								<li><a href="pricing.html">{{ __('front.bibliotheque') }}</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">
								{{ __('front.recherche') }} 
								<div class="arrow-up"><i class="fa fa-angle-down"></i></div>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="about.html">{{ __('front.centre_recherche') }}</a></li>
												<li><a href="services.html">{{ __('front.revues_electroniques') }}</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#">
								{{ __('front.cooperation') }} 
								<div class="arrow-up"></div>
							</a>
						</li>
						<li class="dropdown">
							<a href="#">
								{{ __('front.contact') }} 
								<div class="arrow-up"></div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>