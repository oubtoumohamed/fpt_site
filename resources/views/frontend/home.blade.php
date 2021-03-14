@extends('frontend.main')
@section('content') 


	<div class="">
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">

	    <!-- Wrapper for slides -->
	    <div class="carousel-inner">
		    @php
		    	$active = "active";
		    @endphp
			@foreach( $sliders as $slider )
				<div class="item {{ $active }}">
		      		<a href="{{ route('slider_front', $slider->link) }}" alt="{{ $slider->titre }}">
		      			<img src="{{ $slider->getImageLink() }}" alt="{{ $slider->titre }}">
		      		</a>
		      	</div>
			    @php
			    	$active = "";
			    @endphp
			@endforeach
	    </div>

	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left fa fa-chevron-left"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right fa fa-chevron-right"></span>
	      <span class="sr-only">Next</span>
	    </a>
	  </div>
	</div>

	<style type="text/css"> .ulmots li{background: #f1f1f1; } .ulmots li.active{background: #fff; } </style>
	
	<div class="inner-content no-padding" style="margin-top: 25px;">
		<div class="container">
		<div class="text-center space40">
			<h2 class="title uppercase">{{ config('app.name') }}</h2>
		</div>
			<div class="row padding10">
				<div class="col-md-4">
					<img src="{{ asset('img/doyen.png') }}" class="img-responsive" alt=""/>
				</div>
				<div class="col-md-8">
					<!--Nav Tabs-->
					<ul class="nav-tabs right ulmots" role="tablist">
						<li class="active"><a href="#doyen" role="tab" data-toggle="tab" aria-expanded="false">كلمة العميد</a></li>
						<li class=""><a href="#about" role="tab" data-toggle="tab" aria-expanded="false">نبدة عن الكلية</a></li>
						<li class=""><a href="#plan" role="tab" data-toggle="tab" aria-expanded="false">أهداف التأسيس</a></li>
						<li class=""><a href="#archituctre" role="tab" data-toggle="tab" aria-expanded="true">الهيكلة الادارية</a></li>
					</ul>
					<!--Tabs Content-->
					<div class="tab-content">
						<!--Tab00-->
						<div class="tab-pane fade active in" id="doyen">
							<div id="accordion00">
								<p>
									كلمة العميد
									<br />
									هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.

								</p>
								<div class="more_" style="text-align: left; padding: 10px;">
									<a href="#"><span dir="rtl">إقرأ المزيد ...</span></a>	
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="about">
							<div id="accordion01">
								<p>
									بدة عن الكلية
									<br />
									هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.

								</p>
								<div class="more_" style="text-align: left; padding: 10px;">
									<a href="#"><span dir="rtl">إقرأ المزيد ...</span></a>	
								</div>
							</div>
						</div>
						<!--Tab02-->
						<div class="tab-pane fade" id="plan">
							<div id="accordion02">
								<p>
									إن الكلية المتعددة التخصصات قد شهدت في فترة وجيزة منذ تأسيسها مشاريع هادفة من خلال مسلك الدراسات الشرعية والواقع المعاصر والذي ثبّت بنيان مداخل العلوم الشرعية النقلية…
								</p>
								<div class="more_" style="text-align: left; padding: 10px;">
									<a href="#"><span dir="rtl">إقرأ المزيد ...</span></a>	
								</div>
							</div>
						</div>
						<!--Tab03-->
						<div class="tab-pane fade" id="archituctre">
							<div id="accordion03">
								<p>
									هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
								</p>
								<div class="more_" style="text-align: left; padding: 10px;">
									<a href="#"><span dir="rtl">إقرأ المزيد ...</span></a>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<style type="text/css">.articles .article{padding-bottom: 15px } .articles .article .article_details{height: 140px; overflow: hidden; } .articles .article .showmore{padding: 20px 0; text-align: left; } .articles .article .showmore a{padding: 5px 15px !important;}</style>

	<div class="container home-blog articles padding70" id="5">
		<div class="text-center space40">
			<h2 class="title uppercase">الاعلانات و الاخبار</h2>
			<p>جديد الاعلانات و الاخبار. التي  تهم الطلبة  و الرأي العام</p>
			<br/>
			<p>
				@foreach( $categories as $categorie )
				<a href="{{ route('front_cat_articles',$categorie->label) }}" style="display: inline-block; padding: 3px 6px 2px 6px !important" class="color2 btn-border button btn-xs">{{ $categorie }}</a>&nbsp;
				@endforeach
			</p>
		</div>
		<div class="row">
			@foreach( $articles as $article )
			<div class="col-md-4">
				<div class="article hb-info text-center">
					<div class="hb-thumb">
						<img src="{{ $article->getImageLink() }}" style="width: 370px; height: 202px;" class="img-responsive" title="{{ $article->titre }}" alt="{{ $article->titre }}"/>
						<div class="date-meta">
							{!! $article->getDate() !!}
						</div>
						<div class="date-meta" style="left: 10px; top: 10px; background: #1b2c3c;">
							{{ $article->categorie() }}
						</div>
					</div>
					<div class="article_details">
						<h4 class="titre"><a href="{{ route('front_article', $article->lien) }}">{{ $article->titre }}</a></h4>
						<p class="excerpt">{{ $article->getexcerpt() }}</p>
					</div>
					<div class="showmore">
						<a href="{{ route('front_article', $article->lien) }}" style="display: inline-block;" class="button color2 btn-xs">المزيد </a>
					</div>
				</div>
			</div>
			@endforeach

			<div style="clear: both;"></div>

			<div style="text-align: center; clear: both;padding-top: 30px;">
				<a href="{{ route('front_articles') }}"  style="display: inline-block;" class="color2 btn-border button btn-reveal btn-lg">
					<i class="fa fa-plus"></i>
					<span>المزيد من الأخبار ...</span>
				</a>
			</div>
		</div>
	</div>

	<div class="clearfix"></div>
	<style type="text/css">.services-row a{color: #fff; display: block; text-align: center; } .services-row a img{display: inline-block; border-radius: 100%; border: solid 8px #000; }</style>
	<div class="parallax-bg2 services-row row group">

		<div class="container videos padding70">

			<div class="col-md-3 col-sm-6 col-xs-12 ">
				<div class="circle-services">
                    <a href="http://exam.fpt.usmba.ac.ma/" target="_blank">
                        <img src="https://fpt.usmba.ac.ma/fpt/images/Examens.jpg" alt="project">
                    </a>
	            </div>
	            <h4>
	            	<a href="http://exam.fpt.usmba.ac.ma/" target="_blank">
	                Examens SPR 2019/2020<span class="title-highlight"></span>
	                </a>
	            </h4>
	        </div>                                    
	        
	    	<div class="col-md-3 col-sm-6 col-xs-12 service_first" style="margin-left: 0;">
	            <div class="circle-services">
                	<a href="http://etudiant.fpt.usmba.ac.ma/studentspace/public/login">
                        <img src="https://fpt.usmba.ac.ma/fpt/images/Espace3_etudiant.jpg" alt="project">
                    </a>
	            </div>

	            <h4>
	                <a href="http://etudiant.fpt.usmba.ac.ma/studentspace/public/login">
	                Espace étudiant<span class="title-highlight"></span>
	                </a>
	            </h4>                                        
	        </div>
	        <div class="col-md-3 col-sm-6 col-xs-12 ">
	            <div class="circle-services">
                    <a href="https://fpt.usmba.ac.ma/fpt/E-Learning.php">
                        <img src="https://fpt.usmba.ac.ma/fpt/images/E-Learning.jpg" alt="project">
                    </a>
	            </div>

	            <h4>
	                <a href="E-Learning.php">
	                    E-Learning<span class="title-highlight"></span>
	                </a>
	            </h4>
	            
	        </div>
	        <div class="col-md-3 col-sm-6 col-xs-12 ">
	            <div class="circle-services">
	            	<a href="http://biblio.fpt.usmba.ac.ma">
	                    <img src="https://fpt.usmba.ac.ma/fpt/images/BiblioEnLigne.jpg" alt="project">
	                </a>
	            </div>

	            <h4>
	                <a href="http://biblio.fpt.usmba.ac.ma">
	                Bibliothèque En Ligne<span class="title-highlight"></span>
	                </a>
	            </h4>            
	        </div>
        </div>
    </div>

	<div class="clearfix"></div>

	<!-- audio video -->

	<div class="parallax-bg">
		<div class="container videos padding70">
			<div class="text-center space40">
				<h2 class="title uppercase">الكلية بالصوت و الصورة</h2>
				<br />
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="hb-info text-center">
						<div class="hb-thumb">
							<iframe height="205" src="https://www.youtube.com/embed/RWYLRMvf128?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="hb-info text-center">
						<div class="hb-thumb">
							<iframe height="205" src="https://www.youtube.com/embed/EiDePfrRQlI?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="hb-info text-center">
						<div class="hb-thumb">
							<iframe height="205" src="https://www.youtube.com/embed/UGuqjE2EI4Y?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- / audio video -->

	<!-- TWEET / SUBSCRIBE -->
	<!-- TWEET / SUBSCRIBE 
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-md-7 f-tweet">
					<small>Follow<em>Twitter</em></small>
					<div class="tweet-info">
						<div id="tweetcool"></div>
					</div>
				</div>
				<div class="col-md-5 f-subscribe">
					<small>Sign up<em>Newsletter</em></small>
					<form>
						<input placeholder="Search here ..." type="text">
						<button type="submit">Subscribe</button>
					</form>
				</div>
			</div>
		</div>
	</div>
-->

@endsection