@extends('layout')

@section('content')
	<section>
        <div class="container">
            <div class="row">            
				 <div class="col-sm-offset-1 col-sm-12">
					<br/><br/><br/><br/>
						<h2 class="text-left">CONTACT US</h2>
				</div>
			</div>	
			<div class="row"> 
				<div class="col-sm-offset-1 col-sm-3">
				<br/>
             	<br/>
				<address>
					<span>No.6-2-338, Noori Tower,<br/>
						  Hill Colony, AC Guards,<br/>
						  Khairatabad, Hyderabad,<br/>
						  Telangana 500004<br/>
						  040 2332 3232
					</span>
				</address>
				</div>	

				<div class="col-sm-offset-0 col-sm-7 payment-form">
				 <form name="contactform" method="post" action="contactus.php.html">
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
						</form>
						</div>
				</div>
				<br/>
				<br/>
				<br/>
			</div>
        </div>
    </section>

    <section class="contact-map">

		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3807.101561772347!2d78.458664!3d17.406913!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2e76e0c7e23faa5d!2sNoori+Travels!5e0!3m2!1sen!2sin!4v1432646692432" width="100%" height="330" frameborder="0" style="border:0"></iframe>

	</section>

    <section class="bg-minar"><div class="container"></div></section> 

	<section class="footer-bg">
        <div class="container">
            <div class="row">
			<div class="col-sm-4 line-right">
			 <div class="row">
			 <h5>Quick Links</h5>
                <div class="col-xs-6">
				<ul class="list-unstyled">
					<li><a href="aboutus.html">About us</a></li>
					<li><a href="contactus.php.html#">FAQs</a></li>
					<li><a href="contactus.php.html#">Testimonials</a></li>

					<a href="contactus.php.html#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Careers</a>

					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="exampleModalLabel">Careers</h4>
						  </div>
						  <div class="modal-body">
							<form>
							  <div class="form-group">
								<p>If you are interested in working with the Noori Group, please email your CV to <a href="mailto:info@nooritravels.com">info@nooritravels.com</a></p>
							  </div>
							</form>
						  </div>
						</div>
					  </div>
					</div>
					<li><a href="contactus.php.html#">Terms and Conditions</a></li>
				</ul>
				</div>
				<div class="col-xs-6">
				<ul class="list-unstyled">
					<li><a href="contactus.php.html#">Privacy Policy</a></li>
                    <li><a href="quality_policy.html">Quality Policy</a></li>
					<li><a href="contactus.php.html#">Offers</a></li>
					<li><a href="contactus.php.html#">Fares</a></li>
					<li><a href="contactus.php.html">Contact Us</a></li>
				</ul>
				</div>
				</div>
			</div>
			<div class="col-sm-4 line-right">
			<div class="row">
			<br/>
                <div class="col-xs-4">
					<img src="images/foot1.png" class="img-responsive" alt="">
				</div>
				<div class="col-xs-4">
					<img src="images/foot2.png" class="img-responsive" alt="">
				</div>
				<div class="col-xs-4">
					<img src="images/foot3.png" class="img-responsive" alt="">
				</div>
			</div>
			</div>
			<div class="col-sm-4">
				<div class="row">
				<br/>
					<div class="col-xs-4 line2-right">
						<a href="http://www.4wheeltravels.com/self.php" target="_blank"><img src="images/selfdrive.png" class="img-responsive" alt=""></a>
					</div>
					<div class="col-xs-4 line2-right">
						<a href="http://onecar.co.in/services.php" target="_blank"><img src="images/oncar.png" class="img-responsive" alt=""></a>
					</div>
					<div class="col-xs-4">
						<a href="http://skycabs.in/" target="_blank"><img src="images/skycabs.png" class="img-responsive" alt=""></a>
					</div>
				</div>
			</div>
			</div>
		</div>	
	</section>
@endsection