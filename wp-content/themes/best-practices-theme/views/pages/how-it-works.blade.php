@extends('views.layouts.main')
@section('content')
@while (have_posts()) @php the_post() @endphp
    <section class="visual-area style01">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="description">
                        <h1><span class="d-block">{!!get_field('visual_head')!!}</h1>
                        <p>{!!get_field('visual_subhead')!!}</p>
                        <div class="graph-line">
                            <img src="{{public_path('images/how-bg-line1.svg')}}" width="694" height="575" alt="image-description">
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
                        {!!get_field('visual_video')!!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-section style01">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <h2 class="h1">{!!get_field('how_it_works_section_1_title')!!}</h2>
                    <p>{!!get_field('how_it_works_section_1_content')!!}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="features-area2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="description">
                        <div class="graph-line">
                            <img src="{{public_path('images/how-bg-line2.svg')}}" width="688" height="357" alt="image-description">
                            <div class="pulsating-circle">
                                <div class="circle" style="animation-delay: -3s"></div>
                                <div class="circle" style="animation-delay: -2s"></div>
                                <div class="circle" style="animation-delay: -1s"></div>
                                <div class="circle" style="animation-delay: 0s"></div>
                            </div>
                        </div>
                        <div class="graph-line add">
                            <img src="{{public_path('images/how-bg-line3.svg')}}" width="703" height="692" alt="image-description">
                            <div class="pulsating-circle add">
                                <div class="circle" style="animation-delay: -3s"></div>
                                <div class="circle" style="animation-delay: -2s"></div>
                                <div class="circle" style="animation-delay: -1s"></div>
                                <div class="circle" style="animation-delay: 0s"></div>
                            </div>
                        </div>
                        <h2 class="h1">{!!get_field('how_it_works_section_2_title')!!}</h2>
                        <p>{!!get_field('how_it_works_section_2_content')!!}</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="image">
                        <img src="{{get_field('how_it_works_section_2_image')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="info-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="ico-holder">
                        <img src="{{get_field('how_it_works_section_3_image')}}" alt="image-description" width="150" height="150">
                    </div>
                    <h2 class="h1">{!!get_field('how_it_works_section_3_title')!!}</h2>
                    <p>{!!get_field('how_it_works_section_3_content')!!}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="info-section2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="image">
                        <img src="{{get_field('how_it_works_section_4_image')}}" alt="image-description">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="description">
                        <div class="graph-line">
                            <img src="{{public_path('images/how-bg-line4.svg')}}" width="375" height="322" alt="image-description">
                            <div class="pulsating-circle">
                                <div class="circle" style="animation-delay: -3s"></div>
                                <div class="circle" style="animation-delay: -2s"></div>
                                <div class="circle" style="animation-delay: -1s"></div>
                                <div class="circle" style="animation-delay: 0s"></div>
                            </div>
                        </div>
                        <h2 class="h1">{!!get_field('how_it_works_section_4_title')!!}</h2>
                        <p>{!!get_field('how_it_works_section_4_content')!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="image-text-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="description">
                        <div class="graph-line">
                            <img src="{{public_path('images/how-bg-line5.svg')}}" width="968" height="353" alt="image-description">
                            <div class="pulsating-circle bg-white">
                                <div class="circle" style="animation-delay: -3s"></div>
                                <div class="circle" style="animation-delay: -2s"></div>
                                <div class="circle" style="animation-delay: -1s"></div>
                                <div class="circle" style="animation-delay: 0s"></div>
                            </div>
                        </div>
                        <h2 class="h1">{!!get_field('how_it_works_section_5_title')!!}</h2>
                        {!!get_field('how_it_works_section_5_content')!!}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image">
                        <img src="{{get_field('how_it_works_section_5_image')}}" alt="image-description">
                    </div>
                </div>
            </div>
        </div>
    </section>                                           
</main>
@endwhile
@endsection
