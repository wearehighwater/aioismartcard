@extends('views.layouts.main')
@section('content')
@while (have_posts()) @php the_post() @endphp
    <section class="visual-area style01">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="description">
                        <h1><span class="d-block">The Process of Replacing Paper is Simple</h1>
                        <p>Smart Card enables users to easily read, write, and overwrite various types of displayed information.</p>
                        <div class="graph-line">
                            <img src="{{public_path('images/how-bg-line1.svg')}}" width="694" height="575" alt="image-description">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image">
                        <a href="#">
                            <img src="{{public_path('images/image7.jpg')}}" alt="image-description">
                            <span class="btn-play"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-section style01">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <h2 class="h1">Semi-permanent Use</h2>
                    <p>Smart Cards are constructed from a robust plastic only 3.2mm thick. The devices are wirelessly charged – requiring no batteries – and they can be rewritten with new data over a million times.</p>
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
                        </div>
                        <div class="graph-line">
                            <img src="{{public_path('images/how-bg-line3.svg')}}" width="703" height="692" alt="image-description">
                        </div>
                        <h2 class="h1">Dustproof and Waterproof</h2>
                        <p>Smart Card has earned an Ingress Protection rating of IP56, which means the device allows the entry of little dust and almost no water, contributing to its longevity.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="image">
                        <img src="{{public_path('images/image8.png')}}" alt="image-description">
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
                        <img src="{{public_path('images/icon10.svg')}}" alt="image-description" width="150" height="150">
                    </div>
                    <h2 class="h1">Time-saving Data Transfer</h2>
                    <p>Smart Cards can transfer data at very high speeds, readable at 120m per minute with no slowdown. Thanks to near-field communication, users may overwrite information directly from their smartphones and other compatible devices from up to three meters away. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="info-section2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="image">
                        <img src="{{public_path('images/image3.png')}}" alt="image-description">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="description">
                        <div class="graph-line">
                            <img src="{{public_path('images/how-bg-line4.svg')}}" width="375" height="322" alt="image-description">
                        </div>
                        <h2 class="h1">Almost No Electricity Required</h2>
                        <p>Electricity is only necessary for overwriting information. When Smart Cards are simply displaying data – as they are for a majority of their use – no electricity is required.</p>
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
                        </div>
                        <h2 class="h1">Immediate Integration</h2>
                        <p>The barcodes reproduced on a Smart Card display are legible to nearly all terminals, allowing them to be instantly incorporated into existing systems.</p>
                        <p> The capacity for Smart Cards to endure and be rewritten numerous times has turned the prospect of a paperless future from a possibility into an inevitability.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image">
                        <img src="{{public_path('images/image9.jpg')}}" alt="image-description">
                    </div>
                </div>
            </div>
        </div>
    </section>                                           
</main>
@endwhile
@endsection
