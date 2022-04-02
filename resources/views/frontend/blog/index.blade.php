@extends('layouts.app')
@section('title')
Blog - Zifau
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
            inner-header Start Here
    ===================================-->

<div class="inner-header-main">
    <div class="container-fluid">
        <div class="wrapper">
            <h2 class="heading heading-h2">Blog</h2>
            <div class="linkk-otr">
                <a href="/" class="home-link linkk-page heading-S">Home</a>
                <p class="link-slash heading-S">/</p>
                <a href="/blog" class="inner-page-link linkk-page heading-S">Blog</a>
            </div>
        </div>
    </div>
</div>

<!--==================================
            inner-header End Here
    ===================================-->



<!--==================================
                Blog Start Here
    ===================================-->

<div class="blog-main-inr">
    <div class="container-fluid">
        <div class="row row-custom">
            <div class="col-lg-4 col-md-6 col-otr">
                <div class="col-inr box-1">
                    <a href="./Blog-Detail.html" class="img-otr">
                        <img class="blog-img" src="../assets/img/blog-img1.png" alt="blog">
                    </a>
                    <div class="content-otr">
                        <p class="date-otr heading-S">• by Zifau <span class="date-inr"> - 14th June, 2021</span></p>
                        <a href="./Blog-Detail.html" class="heading heading-h4">Top 10 NFT Projects That Shocked You</a>
                        <p class="desc heading-S">Mollis pellentesque pellentesque feugiat risus ut amet nunc. Volutpat nam convallis urna sollicitudin nunc.</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 col-btn-otr">
                <div class="col-btn-inr">
                    <a href="" class="btn-primary-2 btn-more heading-SB">Load More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==================================
                Blog End Here
    ===================================-->

@endsection

@section('pagescript')
@endsection