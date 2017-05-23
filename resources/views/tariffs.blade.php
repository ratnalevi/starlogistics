@extends('layout')

@section('content')
 
	<section>
        <div class="container fleet-text">
            <div class="row">
				<div class="col-lg-12">
			    <br/>
				<br/>
				<br/>
				<br/>
			</div>
			</div>
			<div class="row">
				<div class="box-body">
				<table class="table table-bordered">
					<tr> 
						<th rowspan="2" >SEGMENT</th>
						<th rowspan="2">VEHICLE DESCRIPTION</th>
						<th colspan="5" class="text-center">INSTATION</th>
						<th colspan="3" class="text-center">OUSTATION</th>
					</tr>
					<tr class="text-center"> 
						<th>8 Hrs. or 80 Kms</th>
						<th>4 Hrs. or 40 Kms</th>
						<th>Extra Kms. beyond 80</th>
						<th>Extra Hrs beyond 8</th>
						<th>Driver Bhatta</th>
						<th>Basic Rate Per Km.</th>
						<th>Driver Bhatta per day</th>
						<th>Min. Run/Calender Day</th>
					</tr>
					<tr>
						<td rowspan="2"><h4>MID SIZE</h4></td>
						<td><img src="images/tariff/1.png" class="img-responsive"/></td>
						<td>2300.00</td>
						<td>1400.00</td>
						<td>20.00</td>
						<td>100.00</td>
						<td>100.00</td>
						<td>20.00</td>
						<td>300.00</td>
						<td>300 Kms.</td>
					</tr>
					<tr>
						<td><img src="images/tariff/verito.png" class="img-responsive"/></td>
						<td>2300.00</td>
						<td>1400.00</td>
						<td>20.00</td>
						<td>100.00</td>
						<td>100.00</td>
						<td>20.00</td>
						<td>300.00</td>
						<td>300 Kms.</td>
					</tr>
					<tr>
						<td rowspan="2"><h4>COMPACT</h4></td>
						<td><img src="images/tariff/etios.png" class="img-responsive"/></td>
						<td>2500.00</td>
						<td>1500.00</td>
						<td>22.00</td>
						<td>125.00</td>
						<td>100.00</td>
						<td>22.00</td>
						<td>300.00</td>
						<td>300 Kms.</td>
					</tr>
					<tr>
						<td><img src="images/tariff/fordfiesta.png" class="img-responsive"/></td>
						<td>2500.00</td>
						<td>1500.00</td>
						<td>22.00</td>
						<td>125.00</td>
						<td>100.00</td>
						<td>22.00</td>
						<td>300.00</td>
						<td>300 Kms.</td>
					</tr>
					<tr>
						<td rowspan="5"><h4>MUV</h4></td>
						<td><img src="images/tariff/5.png" class="img-responsive"/></td>
						<td>2700.00</td>
						<td>1600.00</td>
						<td>25.00</td>
						<td>150.00</td>
						<td>100.00</td>
						<td>25.00</td>
						<td>300.00</td>
						<td>300 Kms.</td>
					</tr>
					<tr>
						<td><img src="images/tariff/6.png" class="img-responsive"/></td>
						<td>3000.00</td>
						<td>1900.00</td>
						<td>27.00</td>
						<td>175.00</td>
						<td>100.00</td>
						<td>27.00</td>
						<td>300.00</td>
						<td>300 Kms.</td>
					</tr>
					<tr>
						<td><img src="images/tariff/7.png" class="img-responsive"/></td>
						<td>6000.00</td>
						<td>4000.00</td>
						<td>60.00</td>
						<td>300.00</td>
						<td>100.00</td>
						<td>60.00</td>
						<td>300.00</td>
						<td>300 Kms.</td>
					</tr>
					<tr>
						<td><img src="images/tariff/xc60.png" class="img-responsive"/></td>
						<td>6000.00</td>
						<td>4000.00</td>
						<td>60.00</td>
						<td>300.00</td>
						<td>100.00</td>
						<td>60.00</td>
						<td>300.00</td>
						<td>300 Kms.</td>
					</tr>
					<tr>
						<td><img src="images/tariff/isuzumu7.png" class="img-responsive"/></td>
						<td>6000.00</td>
						<td>4000.00</td>
						<td>60.00</td>
						<td>300.00</td>
						<td>100.00</td>
						<td>60.00</td>
						<td>300.00</td>
						<td>300 Kms.</td>
					</tr>
					<tr>
						<td rowspan="1"><h4>SUV</h4></td>
						<td><img src="images/tariff/aq5.png" class="img-responsive"/></td>
						<td>11000.00</td>
						<td>7000.00</td>
						<td>100.00</td>
						<td>500.00</td>
						<td>125.00</td>
						<td>100.00</td>
						<td>300.00</td>
						<td>300 Kms.</td>
					</tr>
					<tr>
						<td rowspan="2"><h4>PREMIUM</h4></td>
						<td><img src="images/tariff/9.png" class="img-responsive"/></td>
						<td>4000.00</td>
						<td>2500.00</td>
						<td>37.00</td>
						<td>200.00</td>
						<td>100.00</td>
						<td>37.00</td>
						<td>300.00</td>
						<td>300 Kms.</td>
					</tr>
					<tr>
						<td><img src="images/tariff/10.png" class="img-responsive"/></td>
						<td>4000.00</td>
						<td>2500.00</td>
						<td>37.00</td>
						<td>200.00</td>
						<td>100.00</td>
						<td>37.00</td>
						<td>300.00</td>
						<td>300 Kms.</td>
					</tr>
					<tr>
						<td nowrap rowspan="2"><h4>PREMIUM PLUS</h4></td>
						<td><img src="images/tariff/11.png" class="img-responsive"/></td>
						<td>6000.00</td>
						<td>4000.00</td>
						<td>60.00</td>
						<td>300.00</td>
						<td>125.00</td>
						<td>60.00</td>
						<td>300.00</td>
						<td>300 Kms.</td>
					</tr>
					<tr>
					<td><img src="images/tariff/s60.png" class="img-responsive"/></td>
						<td>6000.00</td>
						<td>4000.00</td>
						<td>60.00</td>
						<td>300.00</td>
						<td>125.00</td>
						<td>60.00</td>
						<td>300.00</td>
						<td>300 Kms.</td>
					</tr>
					<tr>
						<td rowspan="6"><h4>LUXURY</h4></td>
						<td><img src="images/tariff/12.png" class="img-responsive"/></td>
						<td>15000.00</td>
						<td>10000.00</td>
						<td>150.00</td>
						<td>750.00</td>
						<td>150.00</td>
						<td>150.00</td>
						<td>400.00</td>
						<td>300 Kms.</td>
					</tr>
					<tr>
						<td><img src="images/tariff/sbenz.png" class="img-responsive"/></td>
						<td>12500.00</td>
						<td>8500.00</td>
						<td>125.00</td>
						<td>600.00</td>
						<td>150.00</td>
						<td>125.00</td>
						<td>350.00</td>
						<td>300 Kms.</td>
					</tr>
					<tr>
						<td><img src="images/tariff/14.png" class="img-responsive"/></td>
						<td>12500.00</td>
						<td>8500.00</td>
						<td>125.00</td>
						<td>600.00</td>
						<td>150.00</td>
						<td>125.00</td>
						<td>350.00</td>
						<td>300 Kms.</td>
					</tr>
					<tr>
						<td><img src="images/tariff/15.png" class="img-responsive"/></td>
						<td>11000.00</td>
						<td>7000.00</td>
						<td>100.00</td>
						<td>500.00</td>
						<td>150.00</td>
						<td>100.00</td>
						<td>350.00</td>
						<td>300 Kms.</td>
					</tr>
					<tr>
						<td><img src="images/tariff/16.png" class="img-responsive"/></td>
						<td>9000.00</td>
						<td>6000.00</td>
						<td>90.00</td>
						<td>400.00</td>
						<td>150.00</td>
						<td>90.00</td>
						<td>350.00</td>
						<td>300 Kms.</td>
					</tr>
					<tr>
						<td><img src="images/tariff/17.png" class="img-responsive"/></td>
						<td>9000.00</td>
						<td>6000.00</td>
						<td>90.00</td>
						<td>400.00</td>
						<td>150.00</td>
						<td>90.00</td>
						<td>350.00</td>
						<td>300 Kms.</td>
					</tr>
			
					<tr>
						<td rowspan="4"><h4>COACHES</h4></td>
						<td><img src="images/tariff/18.png" class="img-responsive"/></td>
						<td>8000.00</td>
						<td>6500.00</td>
						<td>90.00</td>
						<td>400.00</td>
						<td>150.00</td>
						<td>90.00</td>
						<td>350.00</td>
						<td>300 Kms.</td>
					</tr>
					<tr>
						<td><img src="images/tariff/19.png" class="img-responsive"/></td>
						<td>12000.00</td>
						<td>12000.00</td>
						<td>60.00</td>
						<td>600.00</td>
						<td>500.00</td>
						<td>60.00</td>
						<td>600.00</td>
						<td>300 Kms.</td>
					</tr>
					<tr>
						<td><img src="images/tariff/20.png" class="img-responsive"/></td>
						<td>13500.00</td>
						<td>13500.00</td>
						<td>65.00</td>
						<td>600.00</td>
						<td>500.00</td>
						<td>65.00</td>
						<td>600.00</td>
						<td>300 Kms.</td>
					</tr>
					<tr>
						<td><img src="images/tariff/21.png" class="img-responsive"/></td>
						<td>20000.00</td>
						<td>20000.00</td>
						<td>100.00</td>
						<td>1000.00</td>
						<td>500.00</td>
						<td>65.00</td>
						<td>1000.00</td>
						<td>300 Kms.</td>
					</tr>
				</table>
                </div><!-- /.box-body -->
			</div>

			 <div class="row">
				<div class="col-lg-12">
						<p>* Booking for more than 4 Hrs. or 40 Kms. will be considered for next slab</p>
						<p><strong>Note:</strong>
						<ol>
							<li>Service Tax, VAT & any other Govt Tax as per Govt guidelines will be charged on the total bill.</li>
							<li>All time and Km readings will begin and end at our garage.</li>
							<li>Toll taxes, Permit charges, Parking charges and Border taxes are extra at actuals.</li>
							<li>A booking shall be considered terminated at 2400 Hrs and thereafter, shall be treated as a fresh booking.</li>
							<li>In Case of intercity travel, no. of days shall be calendar days.</li>
							<li>Driver Bhatta is applicable on or before 0700 hours and on/after 2100 Hrs.</li>
							<li>Midnight driver charges will be Rs. 50/- extra.</li>
							<li>Rates are subject to change without notice.</li>
							<li>All disputes are subject to Hyderabad/Secunderabad jurisdiction only.</li>
							<li>If the booking is cancelled after the vehicle has left garage then cancellation charges shall be applicable.</li>
							<li>Other Categories rates available on request.</li>
							<li>Payment should be made within 7 days from the date of submission of the bill.</li>
							<li>In case of any increase in the prices in the fuel, the following formula will be applicable:</li>
						</ol>
						<p class="text-center"><strong>R1 – R0 / 10</strong></p>
						<p class="text-center">Where R1 denotes for New fuel Price<br/>
						Where R0 denotes for Old fuel Price (Rs.54.59)<br/>
						Where 10 denotes for the average per ltr.</p>
				</div>
			</div>
			
			<br/>
			<br/>			
				
    </section>

@endsection

