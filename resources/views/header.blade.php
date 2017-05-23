@php

$baseUrl = url('/');

@endphp
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
        <div class="row ">
           <div class="col-sm-4">    
			<!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              <a itemprop="url" href="{{ $baseUrl }}">
					<img class="logo-noor text-left img-responsive" src="{{ asset('images/logo.png' ) }}">
				</a>
            </div>
			</div>

			<div class="col-sm-8 address">    
			<span class="pull-right"><a href="{{ $baseUrl }}"><i class="fa fa-phone"></i> +91 93 92 21 66 42</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ $baseUrl }}""><i class="fa fa-map-marker"></i> HYDERABAD</a></span>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="{{ $baseUrl }}"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="{{ $baseUrl }}/about">About us</a>
                    </li>
                    <li class="page-scroll">
                        <a href="{{ $baseUrl }}/services">Services</a>
                    </li>
                     <li class="dropdown page-scroll">
						<a href="{{ $baseUrl }}/tariffs" class="dropdown-toggle js-activated" >Tariffs<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="{{ $baseUrl }}/tarrifs">Corporate tarrifs</a>
							</li>
						</ul>
					</li> 
					<li class="page-scroll">
                        <a href="{{ $baseUrl }}/contact">Contact us</a>
                    </li>
                </ul>
            </div>
			</div>
		</div>
		</div>   
    </nav>