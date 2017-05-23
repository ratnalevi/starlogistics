@extends('layout')

@section('content')

<div id="content">
    <img src="{{ asset('assets/images/sliderimg1.jpg' ) }}">
    <img src="{{ asset('assets/images/sliderimg2.jpg' ) }}">
    <img src="{{ asset('assets/images/sliderimg3.jpg' ) }}">
</div>

<script type="text/javascript">
	var $jq = jQuery.noConflict();

	$jq(function(){
		var p=$jq('#content').responsiveSlides({
			height:1003,						// slides conteiner height
			background:'#fff',				// background color and color of overlayer to fadeout on init
			autoStart:true,					// boolean autostart
			startDelay:0,					// start whit delay
			effectInterval:5000,			// time to swap photo
			effectTransition:1000,			// time effect
			pagination:[
				{
					active:true,			// activate pagination
					inner:true,				// pagination inside or aouside slides conteiner
					position:'B_L', 		/* 											*/
					margin:10, 				// pagination margin
					dotStyle:'', 			// dot pagination class style
					dotStyleHover:'', 		// dot pagination class hover style
					dotStyleDisable:''		// dot pagination class disable style
				}
			]
		});
	});
</script>

 	 <!--  <header>
        <div class="container">
            <div class="row ">
               <div class="col-sm-offset-1 col-sm-5 form-bg text-left">
			   <form name="contactform" method="post">
					<div class="col-sm-8 col-md-offset-2">
					</div>

					<div class="col-sm-8 col-md-offset-2">
							<div class="form-group">
								<span>Name</span>
								<input class="form-control form-input-bg" type="text" id="name" placeholder="Enter your name" value='' name="name"/>
							</div>
						</div>

						<div class="col-sm-8 col-md-offset-2">
							<div class="form-group">
								<span>Phone Number</span>
								<input class="form-control form-input-bg" type="text" id="mobile" value='' name="mobile" placeholder="Enter your Phone number"/>
							</div>
						</div>

						<div class="col-sm-8 col-md-offset-2">
							<div class="form-group">
								<span>Email</span>
								<input class="form-control form-input-bg" type="email" id="email" value='' name="email" placeholder="Enter your Email"/>
							</div>
						</div>	
						
						<div class="col-sm-8 col-md-offset-2">
							<div class="form-group">
								<span>Comments</span>
								<input class="form-control form-input-bg" type="text" id="cmessage" value='' name="cmessage" placeholder="Enter your Message"/>
							</div>
						</div>	

						<div class="col-sm-8 col-md-offset-2">
						<br/>
							<div class="form-group">
								<input class="btn btn-primary btn-block" type="submit" name="submit" onclick="return validateform();" value="Request a call back"/>
							</div>
						</div>	
					</form>
				</div>
            </div>
        </div>
    </header>
 -->
@endsection

