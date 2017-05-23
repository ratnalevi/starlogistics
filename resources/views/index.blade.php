@extends('layout')

@section('content')

<div id="content">
    <img src="{{ asset('assets/images/sliderimg1.jpg' ) }}">
    <img src="{{ asset('assets/images/sliderimg3.jpg' ) }}">
    <img src="{{ asset('assets/images/sliderimg2.jpg' ) }}">
</div>

 	  <header>
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

@endsection

