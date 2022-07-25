@extends('views.layouts.main')

@section('content')
@while (have_posts()) @php the_post() @endphp
<main class="main">
	<section class="visual-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="description">
						<h1 class="animated-circle-blue"><span class="d-block">{!!get_field('visual_head')!!}</span> {!!get_field('visual_subhead')!!}</h1>
						<div class="graph-line">
							<img src="{{public_path('images/home-bg-line1.svg')}}" alt="image-description" width="694" height="643">
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="image">
						<img src="{{get_field('visual_image')}}" alt="Viual">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="text-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-8">
					<h2 class="h1 animated-circle-white">{{get_field('home_section_1_head')}}</h2>
					<p>{!!get_field('home_section_1_content')!!}</p>
				</div>
			</div>
		</div>
	</section>
	<section class="features-area">
		<div class="container">
			<div class="holder">
				<div class="graph-line">
					<img src="{{public_path('images/home-bg-line2.svg')}}" alt="image-description" width="688" height="357">
				</div>
				<h2 class="h1 animated-circle-blue">{!!get_field('home_section_2_head')!!}</h2>
				<div class="graph-line style01">
					<img src="{{public_path('images/home-bg-line3.svg')}}" alt="image-description" width="996" height="814">
				</div>
				<div class="col-holder">
					@foreach(get_field('home_section_2_content') as $section2)
					<div class="col-area">
						<div class="ico-holder"><img src="{{$section2['home_section_2_content_icon']['url']}}" alt="Icon-{{$loop->iteration}}"
							@if($loop->iteration == 1) 
							width="57" height="56"
							@elseif($loop->iteration == 2)
							width="56" height="56"
							@else
							width="55" height="55"
							@endif
						></div>
						<h2>{{$section2['home_section_2_content_title']}}</h2>
						<p>{!!$section2['home_section_2_content_description']!!}</p>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<section class="video-section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="video-box">
						{!!get_field('section_3_video')!!}
					</div>
				</div>
				<div class="col-lg-5">
					<div class="description">
						<h2 class="h1 animated-circle-blue">{!!get_field('section_3_head')!!}</h2>
						<p>{!!get_field('section_3_content')!!}</p>
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
						<img src="{{public_path('images/home-bg-line4.svg')}}" width="305" height="322" alt="image-description">
					</div>
					<h2 class="h1 animated-circle-blue">{!!get_field('home_section_4_head')!!}</h2>
					<p>{!!get_field('home_section_4_subhead')!!}</p>
				</div>
				<div class="topics-blocks">
					@foreach(get_field('home_section_4_product') as $section4)
					<div class="topic-block">
						<div class="ico-holder">
							<img src="{{$section4['home_section_4_product_icon']}}" alt="Icon-{{$loop->iteration}}" 
							@if($loop->iteration == 1) 
							width="58" height="58"
							@elseif($loop->iteration == 2)
							width="55" height="56"
							@elseif($loop->iteration == 3)
							width="54" height="54"
							@elseif($loop->iteration == 4)
							width="56" height="56"
							@elseif($loop->iteration == 5)
							width="56" height="56"
							@else
							width="55" height="55"
							@endif>
						</div>
						<h2>{{$section4['home_section_4_product_title']}}</h2>
						<p>{{$section4['home_section_4_product_description']}}</p>
					</div>
					@endforeach
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
								<img src="{{public_path('images/home-bg-line5.svg')}}" width="514" height="353" alt="image-description">
							</div>
							<div class="head">
								<h2 class="h1 animated-circle-white">Visible RFID Smart Card Specifications</h2>
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
									<img src="{{public_path('images/image3.png')}}" alt="image-description">
								</div>
							</div>
							<div class="data-holder">
								<span class="data-description span1" data-title="Model">SC1029L</span>
								<span class="data-description span2" data-title="Display">ePaper (2.9 inch diagonal)</span>
								<span class="data-description span3" data-title="Display Area">61.5mm x 41.0mm</span>
								<span class="data-description span4" data-title="Resolution">300 x 200 pixels</span>
								<span class="data-description span5" data-title="Electric Power">Wireless Charging (Battery not required)</span>
								<span class="data-description span6" data-title="User Memory">16KB </span>
								<span class="data-description span7" data-title="Communication (NFC)">ISO/IEC 18092, JISX6319-4 compliant </span>
								<span class="data-description span8" data-title="Communication (UHF)">—</span>
								<span class="data-description span9" data-title="UHF Communication Distance" >—</span>
								<span class="data-description span10" data-title="Writable times">More than 1 million times</span>
								<span class="data-description span11" data-title="Operating Temperature/Humidity">0°C to 50°C / 0% to 80% (Non condensing)</span>
								<span class="data-description span12" data-title="Dustproof/Waterproof level">IP56</span>
								<span class="data-description span13" data-title="External Dimensions">85.6mm x 54.0mm x 3.65mm</span>
								<span class="data-description span14" data-title="Net Weight">20g</span>
							</div>
						</div>
					</div>
					<div class="column add">
						<div class="column-wrap">
							<div class="head">
								<div class="image">
									<img src="{{public_path('images/image4.png')}}" alt="image-description">
								</div>
							</div>
							<div class="data-holder">
								<span class="data-description span1" data-title="Model">SC1029U</span>
								<span class="data-description span2" data-title="Display">ePaper (2.9 inch diagonal)</span>
								<span class="data-description span3" data-title="Display Area">61.5mm x 41.0mm</span>
								<span class="data-description span4" data-title="Resolution">300 x 200 pixels</span>
								<span class="data-description span5" data-title="Electric Power">Wireless Charging (Battery not required)</span>
								<span class="data-description span6" data-title="User Memory">16KB </span>
								<span class="data-description span7" data-title="Communication (NFC)">ISO/IEC 18092, JISX6319-4 compliant </span>
								<span class="data-description span8" data-title="Communication (UHF)">ISO/IEC 18000-63, (EPC Global Class 1) </span>
								<span class="data-description span9" data-title="UHF Communication Distance">Maximum Reading Distance: About 3m </span>
								<span class="data-description span10" data-title="Writable times">More than 1 million times</span>
								<span class="data-description span11" data-title="Operating Temperature/Humidity">0°C to 50°C / 0% to 80% (Non condensing)</span>
								<span class="data-description span12" data-title="Dustproof/Waterproof level">IP56</span>
								<span class="data-description span13" data-title="External Dimensions">95.2mm x 60.9mm x 3.95mm</span>
								<span class="data-description span14" data-title="Net Weight">30g</span>
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
							<img src="{{public_path('images/home-bg-line6.svg')}}" width="691" height="434" alt="image-description">
						</div>
						<div class="graph-line add">
							<img src="{{public_path('images/home-bg-line7.svg')}}" width="685" height="660" alt="image-description">
						</div>
						<h2 class="h1 animated-circle-blue">Featured Case Studies</h2>
						<p>OMRON ASO, a product manufacturer in Japan, sought a paperless way to optimize parts traceability and product management on all levels. Watch how Smart Card seamlessly replaced instructions, paper Kanban, and tags to transform the manufacturing process at OMRON for the better.</p>
						<a href="#" class="btn btn-primary">View All</a>
					</div> 
				</div>
				<div class="col-lg-5">
					<div class="video-box">
						<a href="#">
							<img src="{{public_path('images/image5.jpg')}}" alt="image-description">
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
					<h2 class="h1 animated-circle-white">Claim the Benefits of ePaper Technology Today</h2>
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
							<img src="{{public_path('images/home-bg-line8.svg')}}" width="689" height="404" alt="image-description">
						</div>
						<div class="graph-line add">
							<img src="{{public_path('images/home-bg-line9.svg')}}" width="86" height="715" alt="image-description">
						</div>
						<h2 class="h1 animated-circle-blue">Try Smart Card from Your Mobile Device</h2>
						<p>Don’t feel pressured into purchasing our product before testing it out. Download our free demo apps and witness first-hand what Smart Card has to offer.</p>
						<div class="app-btn-holder">
							<a href="#"><img src="{{public_path('images/app-btn.png')}}" alt="image-description"></a>
							<a href="#"><img src="{{public_path('images/google-btn.png')}}" alt="image-description"></a>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="mob-image">
						<div class="image">
							<img src="{{public_path('images/image6.png')}}" alt="image-description">
						</div>
						<div class="card-image">
							<img src="{{public_path('images/image4.png')}}" alt="image-description">
						</div>
					</div>
				</div>
			</div>
			<div class="faq-area">
				<div class="text-area">
					<h2 class="h1 animated-circle-white">You Have Questions. <br>We Have Answers.</h2>
					<p>Please fill out the following contact form. A member of our team will review your request and reach out to you shortly.</p>
				</div>
				<div class="form-area">
					<img src="{{public_path('images/form-placeholder.jpg')}}">
				</div>
			</div>
		</div>
	</section>
</main>
@endwhile
@endsection
