@extends('layouts.app')
@section('title')
Fauzi Agustian
@endsection


@section('head')
<style>
    [v-cloak]>* {
        display: none;
    }

    [v-cloak]::before {
        content: "loading...";
    }

    table tr td {
        padding-top: 10px;
        padding-bottom: 10px;
    }
</style>


@endsection

@section('content')

<!--==================================
              Hero Start Here
    ===================================-->

<div class="hero-main">
    <div class="container-fluid">
        <div class="row row-custom">
            <div class="col-lg-6 col-content-otr">
                <div class="col-content-inr">
                    <h1 class="heading-h1 heading">
                        Fauzi
                        <span class="text-color"> Agustian </span>
                    </h1>
                    <p class="desc heading-L">Cuma website Biasa</p>
                    <div class="action">
                        <a href="/blog" class="btn-primary-1 left-btn heading-SB">Blog</a>
                        <a href="/project" class="btn-primary-2 heading-SB">Project</a>
                    </div>
                    <div class="staticstics">

                        <div class="staticstics-box text-center">
                            <a href="/code">
                                <img class="hero-img img-fluid" src="assets/img/code.png" alt="hero-img" width="100px" />
                                <p class="heading-MB static-desc">
                                    Source Code 🤫
                                </p>
                            </a>
                        </div>

                        <div class="staticstics-box text-center">
                            <a href="">
                                <img class="hero-img img-fluid" src="assets/img/kopi.png" alt="hero-img" width="100px" />
                                <p class="heading-MB static-desc">
                                    Traktir Kopi 😆
                                </p>

                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-img-otr">
                <div class="col-img-inr">
                    <div class="img-otr">
                        <a href="">
                            <img class="hero-img img-fluid" src="assets/img/bunga.png" alt="hero-img">
                        </a>



                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!--==================================
              Hero End Here
    ===================================-->

<!--==================================
        Feature Artwork Start Here
    ===================================-->

<div class="feature-main">
    <div class="container-fluid">
        <div class="wrapper">
            <h2 class="heading heading-h2">Project</h2>
            <a href="/project" class="view-all">
                <p class="view heading-SB">View All Project</p>
                <i class="ri-arrow-right-line arrow-right"></i>
            </a>
        </div>
        <div class="row row-custom">
            <div class="col-lg-3 col-otr">
                <div class="col-inr box-1">
                    <div class="cover-img-otr">
                        <a href="">
                            <img class="cover-img" src="./assets/img/cover-img14.png" alt="Artwork" />
                        </a>
                        <div class="time-otr">
                            <span class="heading-SB timer" style="color:black;">GABUT</span>
                        </div>
                        <span class="heart-icon-otr2 heart1">
                            <i class="ri-heart-line heart-icon2 heart-1"></i>
                        </span>
                    </div>
                    <a href="" class="art-name heading-MB-Mon">Nama Project</a>
                    <div class="bid-main">
                        <p class="bid heading-S">Laravel, VueJs</p>
                        <p class="Price heading-SB">FREE</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="responsive">
            <a href="/project" class="view-all">
                <p class="view heading-SB">View All Artwork</p>
                <i class="ri-arrow-right-line arrow-right"></i>
            </a>
        </div>
    </div>
</div>

<!--==================================
        Feature Artwork End Here
    ===================================-->

<!--==================================
                Blog Start Here
    ===================================-->

<div class="blog-main">
    <div class="container-fluid">
        <div class="wrapper">
            <h2 class="heading heading-h2">Blog</h2>
            <a href="/blog" class="view-all">
                <p class="view heading-SB">View All Blog</p>
                <i class="ri-arrow-right-line arrow-right"></i>
            </a>
        </div>
        <div class="row row-custom">
            <div class="col-lg-4 col-md-6 col-otr">
                <div class="col-inr box-1">
                    <a href="./Pages/Blog-Detail.html" class="img-otr">
                        <img class="blog-img" src="./assets/img/blog-img4.png" alt="blog" />
                    </a>
                    <div class="content-otr">
                        <p class="date-otr heading-S">• by Zifau <span class="date-inr"> - 14th June, 2021</span></p>
                        <a href="./Pages/Blog-Detail.html" class="heading heading-h5">Top 10 NFT Projects That Shocked The
                            Internet</a>
                        <p class="desc heading-S">
                            Mollis pellentesque pellentesque feugiat
                            risus ut amet nunc. Volutpat nam convallis
                            urna sollicitudin nunc.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="responsive">
            <a href="/blog" class="view-all">
                <p class="view heading-SB">View All Blog</p>
                <i class="ri-arrow-right-line arrow-right"></i>
            </a>
        </div>
    </div>
</div>

<!--==================================
                Blog End Here
    ===================================-->


@endsection

@section('pagescript')
@endsection