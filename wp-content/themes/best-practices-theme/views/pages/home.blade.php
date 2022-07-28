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
							<div class="pulsating-circle">
								<div class="circle" style="animation-delay: -3s"></div>
								<div class="circle" style="animation-delay: -2s"></div>
								<div class="circle" style="animation-delay: -1s"></div>
								<div class="circle" style="animation-delay: 0s"></div>
							</div>
							<div class="pulsating-circle bg-white add">
								<div class="circle" style="animation-delay: -3s"></div>
								<div class="circle" style="animation-delay: -2s"></div>
								<div class="circle" style="animation-delay: -1s"></div>
								<div class="circle" style="animation-delay: 0s"></div>
							</div>
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
					<div class="pulsating-circle">
						<div class="circle" style="animation-delay: -3s"></div>
						<div class="circle" style="animation-delay: -2s"></div>
						<div class="circle" style="animation-delay: -1s"></div>
						<div class="circle" style="animation-delay: 0s"></div>
					</div>
				</div>
				<h2 class="h1 animated-circle-blue">{!!get_field('home_section_2_head')!!}</h2>
				<div class="graph-line style01">
					<img src="{{public_path('images/home-bg-line3.svg')}}" alt="image-description" width="996" height="814">
					<div class="pulsating-circle add">
						<div class="circle" style="animation-delay: -3s"></div>
						<div class="circle" style="animation-delay: -2s"></div>
						<div class="circle" style="animation-delay: -1s"></div>
						<div class="circle" style="animation-delay: 0s"></div>
					</div>
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
					<div class="pulsating-circle big-circle">
						<div class="circle" style="animation-delay: -3s"></div>
						<div class="circle" style="animation-delay: -2s"></div>
						<div class="circle" style="animation-delay: -1s"></div>
						<div class="circle" style="animation-delay: 0s"></div>
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
						<div class="pulsating-circle">
							<div class="circle" style="animation-delay: -3s"></div>
							<div class="circle" style="animation-delay: -2s"></div>
							<div class="circle" style="animation-delay: -1s"></div>
							<div class="circle" style="animation-delay: 0s"></div>
						</div>
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
				<div class="pulsating-circle big-circle">
					<div class="circle" style="animation-delay: -3s"></div>
					<div class="circle" style="animation-delay: -2s"></div>
					<div class="circle" style="animation-delay: -1s"></div>
					<div class="circle" style="animation-delay: 0s"></div>
				</div>
				<div class="column-holder">
					<div class="column column-head">
						<div class="column-wrap">
							<div class="graph-line">
								<img src="{{public_path('images/home-bg-line5.svg')}}" width="514" height="353" alt="image-description">
								<div class="pulsating-circle bg-white">
									<div class="circle" style="animation-delay: -3s"></div>
									<div class="circle" style="animation-delay: -2s"></div>
									<div class="circle" style="animation-delay: -1s"></div>
									<div class="circle" style="animation-delay: 0s"></div>
								</div>
							</div>
							<div class="head">
								<h2 class="h1">{{get_field('product_table_head','options')}}</h2>
							</div>
							<div class="data-holder">
								@foreach(get_field('product_detail','options') as $product_head)
								<span class="data-title span{{$loop->iteration}}">{{$product_head['product_desc_head']}}</span>
								@endforeach
							</div>
						</div>
					</div>
					<div class="column">
						<div class="column-wrap">
							<div class="head">
								<div class="image">
									<img src="{{get_field('product_table_image_1','options')}}" alt="Product 1">
								</div>
							</div>
							<div class="data-holder">
								@foreach(get_field('product_detail','options') as $product_desc)
								<span class="data-description span{{$loop->iteration}}" data-title="{{$product_desc['product_desc_head']}}">{{$product_desc['product_desc_content']}}</span>
								@endforeach
							</div>
						</div>
					</div>
					<div class="column add">
						<div class="column-wrap">
							<div class="head">
								<div class="image">
									<img src="{{get_field('product_table_image_2','options')}}" alt="Product 2">
								</div>
							</div>
							<div class="data-holder">
								@foreach(get_field('product_detail','options') as $product_desc2)
								<span class="data-description span{{$loop->iteration}}" data-title="{{$product_desc2['product_desc_head']}}">{{$product_desc2['product_desc_content_2']}}</span>
								@endforeach
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
							<div class="pulsating-circle ">
								<div class="circle" style="animation-delay: -3s"></div>
								<div class="circle" style="animation-delay: -2s"></div>
								<div class="circle" style="animation-delay: -1s"></div>
								<div class="circle" style="animation-delay: 0s"></div>
							</div>
						</div>
						<div class="graph-line add">
							<img src="{{public_path('images/home-bg-line7.svg')}}" width="685" height="660" alt="image-description">
							<div class="pulsating-circle bg-white add">
								<div class="circle" style="animation-delay: -3s"></div>
								<div class="circle" style="animation-delay: -2s"></div>
								<div class="circle" style="animation-delay: -1s"></div>
								<div class="circle" style="animation-delay: 0s"></div>
							</div>
						</div>
						<h2 class="h1 animated-circle-blue">{!!get_field('home_section_6_head')!!}</h2>
						<p>{!!get_field('home_section_6_content')!!}</p>
						<a href="{{get_field('home_section_6_button')['url']}}" class="btn btn-primary">{{get_field('home_section_6_button')['title']}}</a>
					</div> 
				</div>
				<div class="col-lg-5">
					<div class="video-box">
						{!!get_field('home_section_6_video')!!}
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="text-section2">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-10">
					{!!get_field('home_section7')!!}
				</div>
			</div>
		</div>
	</section>
	<section class="about-area">
		<div class="container">
			<div class="row align-items-center" id="downloadApp">
				<div class="col-lg-6">
					<div class="description">
						<div class="graph-line">
							<img src="{{public_path('images/home-bg-line8.svg')}}" width="689" height="404" alt="image-description">
							<div class="pulsating-circle ">
								<div class="circle" style="animation-delay: -3s"></div>
								<div class="circle" style="animation-delay: -2s"></div>
								<div class="circle" style="animation-delay: -1s"></div>
								<div class="circle" style="animation-delay: 0s"></div>
							</div>
						</div>
						<div class="graph-line add">
							<img src="{{public_path('images/home-bg-line9.svg')}}" width="86" height="715" alt="image-description">
							<div class="pulsating-circle bg-white add">
								<div class="circle" style="animation-delay: -3s"></div>
								<div class="circle" style="animation-delay: -2s"></div>
								<div class="circle" style="animation-delay: -1s"></div>
								<div class="circle" style="animation-delay: 0s"></div>
							</div>
						</div>
						<h2 class="h1 animated-circle-blue">{!!get_field('home_section_8_head')!!}</h2>
						<p>{!!get_field('home_section_8_content')!!}</p>
						<div class="app-btn-holder">
							@foreach(get_field('apps','options') as $apps)
								<a href="{{$apps['app_link']}}"><img src="{{$apps['app_image']}}" alt="Mobile App"></a>
							@endforeach
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="mob-image">
						<div class="image">
							<img src="{{get_field('home_section_8_image')}}" alt="image-description">
						</div>
						<div class="card-image">
							<img src="{{get_field('home_section_8_image2')}}" alt="image-description">
						</div>
					</div>
				</div>
			</div>
			<div class="faq-area">
				<div class="text-area">
					<h2 class="h1 animated-circle-white">{!!get_field('form_section_head')!!}</h2>
					<p>{!!get_field('form_section_content')!!}</p>
				</div>
				<div class="form-area" id="formArea">
					{!!get_field('form_section_gravity_form')!!}
				</div>
			</div>
		</div>
	</section>
</main>
@endwhile
@endsection
