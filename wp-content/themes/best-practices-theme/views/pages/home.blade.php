@extends('views.layouts.main')

@section('content')
@while (have_posts()) @php the_post() @endphp
<main class="main">
	<section class="visual-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="description">
						<h1><span class="d-block">Smart Card:</span> The ePaper Label<br> that Saves You Money</h1>
						<div class="graph-line">
							<img src="images/bg-line1.png" alt="image-description">
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="image">
						<img src="images/image1.png" alt="image-description">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="text-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-8">
					<h2 class="h1">The Future is Paperless</h2>
					<p>Smart Card is the solution to waste, idle time, financial loss, and other challenges common throughout various economic spheres. These business card-sized RFID tags utilize the latest technology to display all kinds of information without the need for excessive amounts of paper, from barcodes and product names to labels and much more.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="features-area">
		<div class="container">
			<div class="holder">
				<div class="graph-line">
					<img src="images/bg-line2.png" alt="image-description">
				</div>
				<h2 class="h1">Technology that is Easy<br> to Use and Hard to Resist</h2>
				<div class="graph-line style01">
					<img src="images/bg-line3.png" alt="image-description">
				</div>
				<div class="col-holder">
					<div class="col-area">
						<div class="ico-holder"><img src="images/icon7.svg" alt="image-description" width="57" height="56px"></div>
						<h2>Innovative Design</h2>
						<p>Each card is only 3.2mm thick and requires no batteries despite its electronic capabilities.</p>
					</div>
					<div class="col-area">
						<div class="ico-holder"><img src="images/icon8.svg" alt="image-description" width="56" height="56"></div>
						<h2>Fast Data Transfer</h2>
						<p>Smart Card is readable at the high speed of 120m per minute with no slowdown.</p>
					</div>
					<div class="col-area">
						<div class="ico-holder"><img src="images/icon9.svg" alt="image-description" width="55" height="55"></div>
						<h2>Smart Device Compatibility</h2>
						<p>Near Field Communication (NFC) technology enables you to seamlessly overwrite the display with the desired information from your mobile device.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="video-section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="video-box">
						<a href="#">
							<img src="images/image2.jpg" alt="image-description">
							<span class="btn-play"></span>
						</a>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="description">
						<h2 class="h1">Eliminate Paper Expenses Once and For All</h2>
						<p>U.S. businesses spend a total of $8 billion annually on purchasing, managing, and ultimately wasting paper. When widely applied to your business, Smart Card can greatly diminish or even eliminate the need for conventional paper labels, helping to alleviate such a costly burden.</p>
					</div> 
				</div>
			</div>
		</div>
	</section>
	<section class="topics-area">
		<div class="container">
			<div class="holder">
				<div class="head">
					<div class="graph-line">
						<img src="images/bg-line4.png" alt="image-description">
					</div>
					<h2 class="h1">Designed for Many Economic and Industrial Environments</h2>
					<p>The ability of Smart Card to display different types of information <br>enables the device to operate in multiple commercial settings.</p>
				</div>
				<div class="topics-blocks">
					<div class="topic-block">
						<div class="ico-holder">
							<img src="images/icon1.svg" alt="image-description" width="58" height="58">
						</div>
						<h2>Manufacturing</h2>
						<p>Factories can distribute paperless, real-time production orders to their workers, eliminating handwriting errors, reducing waste, and improving operational efficiency.</p>
					</div>
					<div class="topic-block">
						<div class="ico-holder">
							<img src="images/icon2.svg" alt="image-description" width="55" height="56">
						</div>
						<h2>Distribution</h2>
						<p>Compatible with our Pick-to-Light systems, Smart Card makes it easier for warehouse staff to navigate the transfer of inventory from one point to another.</p>
					</div>
					<div class="topic-block">
						<div class="ico-holder">
							<img src="images/icon3.svg" alt="image-description" width="54" height="54">
						</div>
						<h2>Food Service</h2>
						<p>Restaurants use our RFID tags to quickly process billing information and receive payment from their customers at greater speeds.</p>
					</div>
					<div class="topic-block">
						<div class="ico-holder">
							<img src="images/icon4.svg" alt="image-description" width="56" height="56">
						</div>
						<h2>Health Care</h2>
						<p>Smart Card allows medical personnel to safely handle patient information and equipment to decrease the risks of leaking personal information.</p>
					</div>
					<div class="topic-block">
						<div class="ico-holder">
							<img src="images/icon5.svg" alt="image-description" width="56" height="56">
						</div>
						<h2>Maintenance</h2>
						<p>Facilities install Smart Cards on their walls to log the work history of cleaning staff with an accuracy nearly impossible to duplicate with paper.</p>
					</div>
					<div class="topic-block">
						<div class="ico-holder">
							<img src="images/icon6.svg" alt="image-description" width="55" height="55">
						</div>
						<h2>Businesses/Organizations</h2>
						<p>Smart Card excels as a reception system that records the personal information of visitors, grants them access to the building, and erases their information afterwards</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="specifications-area">
		<div class="container">
			<div class="specifications-table">
				<div class="column-holder">
					<div class="column column-head">
						<div class="column-wrap">
							<div class="graph-line">
								<img src="images/bg-line5.png" alt="image-description">
							</div>
							<div class="head">
								<h2 class="h1">Visible RFID Smart Card Specifications</h2>
							</div>
							<div class="data-holder">
								<span class="data-title span1">Model</span>
								<span class="data-title span2">Display</span>
								<span class="data-title span3">Display Area</span>
								<span class="data-title span4">Resolution</span>
								<span class="data-title span5">Electric Power</span>
								<span class="data-title span6">User Memory</span>
								<span class="data-title span7">Communication (NFC)</span>
								<span class="data-title span8">Communication (UHF)</span>
								<span class="data-title span9">UHF Communication Distance</span>
								<span class="data-title span10">Writable times</span>
								<span class="data-title span11">Operating Temperature/Humidity</span>
								<span class="data-title span12">Dustproof/Waterproof level</span>
								<span class="data-title span13">External Dimensions</span>
								<span class="data-title span14">Net Weight</span>
							</div>
						</div>
					</div>
					<div class="column">
						<div class="column-wrap">
							<div class="head">
								<div class="image">
									<img src="images/image3.png" alt="image-description">
								</div>
							</div>
							<div class="data-holder">
								<span class="data-description span1">SC1029L</span>
								<span class="data-description span2">ePaper (2.9 inch diagonal)</span>
								<span class="data-description span3">61.5mm x 41.0mm</span>
								<span class="data-description span4">300 x 200 pixels</span>
								<span class="data-description span5">Wireless Charging (Battery not required)</span>
								<span class="data-description span6">16KB </span>
								<span class="data-description span7">ISO/IEC 18092, JISX6319-4 compliant </span>
								<span class="data-description span8">—</span>
								<span class="data-description span9">—</span>
								<span class="data-description span10">More than 1 million times</span>
								<span class="data-description span11">0°C to 50°C / 0% to 80% (Non condensing)</span>
								<span class="data-description span12">IP56</span>
								<span class="data-description span13">85.6mm x 54.0mm x 3.65mm</span>
								<span class="data-description span14">20g</span>
							</div>
						</div>
					</div>
					<div class="column add">
						<div class="column-wrap">
							<div class="head">
								<div class="image">
									<img src="images/image4.png" alt="image-description">
								</div>
							</div>
							<div class="data-holder">
								<span class="data-description span1">SC1029U</span>
								<span class="data-description span2">ePaper (2.9 inch diagonal)</span>
								<span class="data-description span3">61.5mm x 41.0mm</span>
								<span class="data-description span4">300 x 200 pixels</span>
								<span class="data-description span5">Wireless Charging (Battery not required)</span>
								<span class="data-description span6">16KB </span>
								<span class="data-description span7">ISO/IEC 18092, JISX6319-4 compliant </span>
								<span class="data-description span8">ISO/IEC 18000-63, (EPC Global Class 1) </span>
								<span class="data-description span9">Maximum Reading Distance: About 3m </span>
								<span class="data-description span10">More than 1 million times</span>
								<span class="data-description span11">0°C to 50°C / 0% to 80% (Non condensing)</span>
								<span class="data-description span12">IP56</span>
								<span class="data-description span13">95.2mm x 60.9mm x 3.95mm</span>
								<span class="data-description span14">30g</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="video-section2">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="description">
						<div class="graph-line">
							<img src="images/bg-line6.png" alt="image-description">
						</div>
						<div class="graph-line add">
							<img src="images/bg-line7.png" alt="image-description">
						</div>
						<h2 class="h1">Featured Case Studies</h2>
						<p>OMRON ASO, a product manufacturer in Japan, sought a paperless way to optimize parts traceability and product management on all levels. Watch how Smart Card seamlessly replaced instructions, paper Kanban, and tags to transform the manufacturing process at OMRON for the better.</p>
						<a href="#" class="btn btn-primary">View All</a>
					</div> 
				</div>
				<div class="col-lg-5">
					<div class="video-box">
						<a href="#">
							<img src="images/image5.jpg" alt="image-description">
							<span class="btn-play"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="text-section2">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-10">
					<h2 class="h1">Claim the Benefits of ePaper Technology Today</h2>
					<p>The longer you wait to transition to paperless labels, the more time and money you’ll lose. Put an end<br> to waste production and needless expenses today with AIOI Systems’ Visible RFID Smart Card.</p>
					<a href="#" class="btn btn-secondary">Buy Now</a>
					<span class="text">*If you purchase more than 10 units, please contact info@aioisystemsusa.com as shipping charges may change. There is also a discount for purchases of 500 or more cards.</span>
				</div>
			</div>
		</div>
	</section>
	<section class="about-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="description">
						<div class="graph-line">
							<img src="images/bg-line8.png" alt="image-description">
						</div>
						<div class="graph-line add">
							<img src="images/bg-line9.png" alt="image-description">
						</div>
						<h2 class="h1">Try Smart Card from Your Mobile Device</h2>
						<p>Don’t feel pressured into purchasing our product before testing it out. Download our free demo apps and witness first-hand what Smart Card has to offer.</p>
						<div class="app-btn-holder">
							<a href="#"><img src="images/app-btn.png" alt="image-description"></a>
							<a href="#"><img src="images/google-btn.png" alt="image-description"></a>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="mob-image">
						<div class="image">
							<img src="images/image6.png" alt="image-description">
						</div>
						<div class="card-image">
							<img src="images/image4.png" alt="image-description">
						</div>
					</div>
				</div>
			</div>
			<div class="faq-area">
				<div class="text-area">
					<h2 class="h1">You Have Questions. <br>We Have Answers.</h2>
					<p>Please fill out the following contact form. A member of our team will review your request and reach out to you shortly.</p>
				</div>
				<div class="form-area">
					<img src="images/form-placeholder.jpg">
				</div>
			</div>
		</div>
	</section>
</main>
@endwhile
@endsection
