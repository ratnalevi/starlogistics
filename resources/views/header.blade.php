@php

$baseUrl = url('/');

@endphp
    <nav class="navbar navbar-default navbar-fixed-top" style="max-height:90px">
        <div class="container">
        <div class="row ">
           <div class="col-sm-3">    
			<!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              <a itemprop="url" href="{{ $baseUrl }}">
					<img class="logo-noor text-left img-responsive" src="{{ asset('assets/images/logo.png' ) }}" style="margin-top: 10px; -webkit-filter: grayscale(100%); filter: grayscale(100%);">
				</a>
            </div>
			</div>

			<div class="col-sm-5 address">    
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-top: 40px;">
                    <ul class="nav navbar-nav">
                        <li class="hidden">
                            <a href="{{ $baseUrl }}"></a>
                        </li>
                        <li class="page-scroll">
                            <a href="{{ $baseUrl }}/about">About us</a>
                        </li>
                        <li class="page-scroll">
                            <a href="{{ $baseUrl }}/services">Services</a>
                        </li>
                         <li class="page-scroll">
    						<a href="{{ $baseUrl }}/tariffs" class="dropdown-toggle js-activated" >Tariffs</a>
    					</li> 
    					<li class="page-scroll">
                            <a href="{{ $baseUrl }}/contact">Contact us</a>
                        </li>
                    </ul>
                </div>
			</div>

            <div class="col-sm-4">
                <div class="collapse navbar-collapse" style="margin-top: 15px;">
                        <ul class="nav navbar-nav">
                            <li class="page-scroll">
                                <a href="javascript:void(0)"><i class="fa fa-phone"></i> +91 93 92 21 66 42</a>
                            </li>
                            <li class="page-scroll">
                                <a href="javascript:void(0)""><i class="fa fa-map-marker"></i> HYDERABAD</a>
                            </li>
                        </ul>
                    </div>
            </div>
		</div>
		</div>   
    </nav>