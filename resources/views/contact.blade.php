@extends('layout')

@section('content')
	<section>
        <div class="container">
            <div class="row">            
				 <div class="col-sm-offset-1 col-sm-12">
					<br/><br/><br/><br/>
						<h2 class="text-left">Contact Us</h2>
				</div>
			</div>	
			<div class="row"> 
				<div class="col-sm-offset-1 col-sm-3">
				<br/>
             	<br/>
				<address>
					<span><b>A Aseervadam</b></br>
						  Plot No : LIG-191 <br/>
						  7th Phase, KPHB Colony<br/>
						  Kukatpally, Hyderabad<br/>
						  Telangana 500072<br/>
						  +91-9392216642
					</span>
				</address>
				</div>	

				<div class="col-sm-offset-0 col-sm-7 payment-form">
				 <form name="contactform" method="post" action="">
					<div class="box-body">
						<br/>
						<div class="form-group">
							<div class="row">
								<div class="col-lg-3">
									<label for="exampleInputEmail1">First Name *</label>
								</div>
								<div class="col-lg-9">	
									<input type="name" name="fname" id="fname" class="form-control" value="" id="exampleInputEmail1" placeholder="Enter First Name">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-lg-3">
									<label for="exampleInputEmail1">Last Name *</label>
								</div>
								<div class="col-lg-9">	
									<input type="name" name="lname" id="lname" class="form-control" value="" id="exampleInputEmail1" placeholder="Enter Last Name">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-lg-3">
									<label for="exampleInputEmail1">Email Address *</label>
								</div>

								<div class="col-lg-9">	
									<input type="email" name="email" id="email" class="form-control" value="" id="exampleInputEmail1" placeholder="Enter Email">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-lg-3">
									<label for="exampleInputEmail1">Phone No  *</label>
								</div>
								<div class="col-lg-9">	
									<input type="name" name="mobile" id="mobile" class="form-control" value="" id="exampleInputEmail1" placeholder="Enter Phone no.">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-lg-3">
									<label for="exampleInputEmail1">Comments  *</label>
								</div>
								<div class="col-lg-9">	
									<textarea name="comments" id="comments" class="form-control" value="" id="exampleInputEmail1" placeholder="Enter Your Message"></textarea>
								</div>
							</div>
						</div>
								<div class="col-lg-9">	
									<input class="btn btn-default btn-flat" type="submit" name="submit" onclick="return validateform();" value="SUBMIT"/>
								</div>
						</div>

							<input type="hidden" name="_token" value="{{ csrf_token() }}">
						</form>
						</div>
				</div>
				<br/>
				<br/>
				<br/>
			</div>
        </div>
    </section>

@endsection