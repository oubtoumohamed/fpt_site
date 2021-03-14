        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
          <div class="container">
            <div class="row align-items-center">
              
              <div class="col-lg-9 order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                  <li class="nav-item mn home">
                    <a href="{{ route('home') }}" class="nav-link">
                      <i class="fa fa-tachometer"></i> 
                      {{ __('global.dashboard') }}
                    </a>
                  </li>
                  @if( isGranted('ADMIN') )
                  <li class="nav-item mn groupe">
                    <a href="{{ route('groupe') }}" class="nav-link">
                      <i class="fa fa-th-large"></i> 
                      {{ __('groupe.module_name') }}
                    </a>
                  </li>
                  @endif

                  @if( isGranted('ADMIN') )
                  <li class="nav-item mn user">
                    <a href="{{ route('user') }}" class="nav-link">
                      <i class="fa fa-users"></i> 
                      {{ __('user.module_name') }}
                    </a>
                  </li>
                  @endif

                  @if( isGranted('ADMIN') )
                  <li class="nav-item mn categorie">
                    <a href="{{ route('categorie') }}" class="nav-link">
                      <i class="fa fa-bars"></i> 
                      {{ __('categorie.module_name') }}
                    </a>
                  </li>
                  @endif
                                
                  @if( isGranted('ADMIN') )
                  <li class="nav-item mn article">
                    <a href="{{ route('article') }}" class="nav-link">
                      <i class="fa fa-newspaper-o"></i> 
                      {{ __('article.module_name') }}
                    </a>
                  </li>
                  @endif  

                  @if( isGranted('ADMIN') )
                  <li class="nav-item mn page">
                    <a href="{{ route('page') }}" class="nav-link">
                      <i class="fa fa-file"></i> 
                      {{ __('page.module_name') }}
                    </a>
                  </li>
                  @endif 


                  @if( isGranted('ADMIN') )
                  <li class="nav-item mn slider">
                    <a href="{{ route('slider') }}" class="nav-link">
                      <i class="fa fa-sliders"></i> 
                      {{ __('slider.module_name') }}
                    </a>
                  </li>
                  @endif 


                  <script type="text/javascript">
                    $(document).ready(function(){
                      $('.mn.{{ explode('_',\Request::route()->getName())[0] }}').addClass('active');
                    })
                  </script>
                </ul>
              </div>
              <div class="col-lg-3 ln-text-right">
                <ul class="nav navbar-nav">
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #000;text-decoration: none;">
                      <img src="{{ asset('frontend/img/'.@App::getLocale().'.png') }}"> {{ config('languages.'.@App::getLocale()) }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" style="padding: 0;">
                      <li id="language">
                        <a href="{{ route('setlange','ar') }}">
                          <img src="{{ asset('frontend/img/ar.png') }}"> 
                        </a>
                        <a href="{{ route('setlange','fr') }}">
                          <img src="{{ asset('frontend/img/fr.png') }}"> 
                        </a>
                        <a href="{{ route('setlange','en') }}">
                          <img src="{{ asset('frontend/img/en.png') }}"> 
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>