@extends('views.layouts.main')

@section('content')
@while (have_posts()) @php the_post() @endphp
    

    <main class="main">
			<div class="content-area">
				<div class="container">
					<h1>{!!get_the_title(null, null, false)!!}</h1>
					<div class="featurs-image">
						<img src="{{get_the_post_thumbnail_url(get_the_ID(), 'full')}}" alt="image-description">
					</div>
					<div class="holder">
						{!!the_content()!!}
					</div>
					<!-- <div class="image-row">
						<div class="image">
							<img src="images/image-placeholder2.jpg" alt="image-description">
						</div>
						<div class="image">
							<img src="images/image-placeholder2.jpg" alt="image-description">
						</div>
						<div class="image">
							<img src="images/image-placeholder2.jpg" alt="image-description">
						</div>
					</div> -->
				</div>
			</div>                                      
		</main>
@endwhile
@endsection
