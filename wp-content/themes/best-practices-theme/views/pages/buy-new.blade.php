@extends('views.layouts.main')
@section('content')
@while (have_posts()) @php the_post() @endphp
    <main class="main">
            <section class="visual-area2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="description">
                                <h1><span class="d-block">Transform Your Business with Smart Card</h1>
                                <p>Start saving time and money today by completing this purchase form.</p>
                                <div class="graph-line">
                                    <img src="{{public_path('images/buy-bg-line1.svg')}}" width="693" height="643px" alt="image-description">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="image">
                                <img src="{{public_path('images/image16.png')}}" alt="image-description">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="specifications-area style02">
                <div class="container">
            <div class="specifications-table">
                <div class="column-holder">
                    <div class="column column-head">
                        <div class="column-wrap">
                            <div class="graph-line">
                                <img src="{{public_path('images/home-bg-line5.svg')}}" width="514" height="353" alt="image-description">
                            </div>
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
                <div class="container">
                    <div class="graph-line">
                        <img src="{{public_path('images/buy-bg-line2.svg')}}" height="209" width="9" alt="image-description">
                    </div>
                    <div class="holder">
                        <div class="prod-info">
                            <h2>Smart Cards</h2>
                            <div class="prod-card">
                                <div class="image">
                                    <img src="{{public_path('images/image13.png')}}" alt="image-description">
                                </div>
                                <div class="description">
                                    <strong class="name">SC1029L</strong>
                                    <div class="prod-card-info">
                                        <div class="qty"><input type="text" placeholder="Qty."></div>
                                        <span class="text">x</span>
                                        <span class="price">$54.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="prod-card">
                                <div class="image">
                                    <img src="{{public_path('images/image14.png')}}" alt="image-description">
                                </div>
                                <div class="description">
                                    <strong class="name">SC1029U</strong>
                                    <div class="prod-card-info">
                                        <div class="qty"><input type="text" placeholder="Qty."></div>
                                        <span class="text">x</span>
                                        <span class="price">$78.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="smart-card">
                                <h2>Smart Card Holder</h2>
                                <div class="prod-card">
                                    <div class="image">
                                        <img src="{{public_path('images/image15.png')}}" alt="image-description">
                                    </div>
                                    <div class="description">
                                        <div class="prod-card-info">
                                            <div class="qty"><input type="text" placeholder="Qty."></div>
                                            <span class="text">x</span>
                                            <span class="price">$2.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-unstyled prod-summary">
                                <li>
                                    <span class="data-title">Subtotal</span>
                                    <span class="price">$XX.XX</span>
                                </li>
                                <li>
                                    <span class="data-title">Tax</span>
                                    <span class="price">$XX.XX</span>
                                </li>
                                <li>
                                    <span class="data-title">Shipping</span>
                                    <span class="price">$XX.XX</span>
                                </li>
                                <li class="total-row">
                                    <span class="data-title">Total</span>
                                    <span class="price">$XXX.XX</span>
                                </li>
                            </ul>
                        </div>
                        <div class="form-section">
                            <p>*If you purchase more than 10 units, please contact info@aioisystemsusa.com as shipping  charges may change.<br> There is also a discount for purchases of 500 or more cards.</p>
                            <div class="form-holder">
                                <img src="{{public_path('images/form-placeholder2.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>                                       
        </main>                                         
</main>
@endwhile
@endsection
