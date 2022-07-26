@extends('views.layouts.main')
@section('content')
@while (have_posts()) @php the_post() @endphp
    <main class="main">
            <section class="visual-area2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="description">
                                <h1><span class="d-block">{!!get_field('buy_now_visual_head')!!}</h1>
                                <p>{!!get_field('buy_now_visual_content')!!}</p>
                                <div class="graph-line">
                                    <img src="{{public_path('images/buy-bg-line1.svg')}}" width="693" height="643px" alt="image-description">
                                    <div class="pulsating-circle">
                                        <div class="circle" style="animation-delay: -3s"></div>
                                        <div class="circle" style="animation-delay: -2s"></div>
                                        <div class="circle" style="animation-delay: -1s"></div>
                                        <div class="circle" style="animation-delay: 0s"></div>
                                    </div>
                                    <div class="pulsating-circle add">
                                        <div class="circle" style="animation-delay: -3s"></div>
                                        <div class="circle" style="animation-delay: -2s"></div>
                                        <div class="circle" style="animation-delay: -1s"></div>
                                        <div class="circle" style="animation-delay: 0s"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="image">
                                <img src="{{get_field('buy_now_visual_image')}}" alt="image-description">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="specifications-area style02">
                <div class="container">
                    <div class="pulsating-circle big-circle add">
                        <div class="circle" style="animation-delay: -3s"></div>
                        <div class="circle" style="animation-delay: -2s"></div>
                        <div class="circle" style="animation-delay: -1s"></div>
                        <div class="circle" style="animation-delay: 0s"></div>
                    </div>
            <div class="specifications-table">
                <div class="column-holder">
                    <div class="column column-head">
                        <div class="column-wrap">
                            <div class="head">
                                <h2 class="h1 animated-circle-white">{{get_field('product_table_head','options')}}</h2>
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
            <section class="products-area">
                <div class="pulsating-circle bg-white big-circle">
                    <div class="circle" style="animation-delay: -3s"></div>
                    <div class="circle" style="animation-delay: -2s"></div>
                    <div class="circle" style="animation-delay: -1s"></div>
                    <div class="circle" style="animation-delay: 0s"></div>
                </div>
                <div class="container">
                    <div class="graph-line">
                        <img src="{{public_path('images/buy-bg-line2.svg')}}" height="209" width="9" alt="image-description">
                        <div class="pulsating-circle">
                            <div class="circle" style="animation-delay: -3s"></div>
                            <div class="circle" style="animation-delay: -2s"></div>
                            <div class="circle" style="animation-delay: -1s"></div>
                            <div class="circle" style="animation-delay: 0s"></div>
                        </div>
                    </div>
                    <div class="holder">
                        {!!get_field('buy_now_form')!!}
                    </div>
                </div>
            </section>                                       
        </main>                                         
</main>
@endwhile
@endsection
