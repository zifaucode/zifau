@extends('layouts.app')
@section('title')
Fauzi Agustian | Project
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
            <h2 class="heading heading-h2">Explore Project</h2>
            <div class="linkk-otr">
                <a href="/" class="home-link linkk-page heading-S">Home</a>
                <p class="link-slash heading-S">/</p>
                <a href="/project" class="inner-page-link linkk-page heading-S">Explore Project</a>
            </div>
        </div>
    </div>
</div>

<!--==================================
            inner-header End Here
    ===================================-->

<!--==================================
        Explore Artwork Start Here
    ===================================-->

<div class="explore-main">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="teb-main">
                <div class="tab-otr">
                    <h2 class="heading heading-h2">Project</h2>

                </div>

            </div>
        </div>
        <div class="row-custom-main">
            <div id="tab-21" class="tab-content active">
                <div class="row row-custom-inr">
                    <div class="col-lg-3 col-otr">
                        <div class="col-inr box-1">
                            <div class="avatar-main">
                                <div class="profile-inr">
                                    <a href="./Single-Creator.html" class="img-otr img-1">
                                        <span class="img-inr">
                                            <img class="avatar-img" src="../assets/img/avtar-1.png" alt="avatar">
                                        </span>
                                        <div class="hover">
                                            <p class="text heading-S">Collection : Rehman Ahmed</p>
                                        </div>
                                    </a>
                                    <a href="./Single-Creator.html" class="img-otr img-2">
                                        <span class="img-inr">
                                            <img class="avatar-img" src="../assets/img/avtar-2.png" alt="avatar">
                                        </span>
                                        <div class="hover">
                                            <p class="text heading-S">Owner : Rehman Ahmed</p>
                                        </div>
                                    </a>
                                    <a href="./Single-Creator.html" class="img-otr img-3">
                                        <span class="img-inr">
                                            <img class="avatar-img" src="../assets/img/avtar-3.png" alt="avatar">
                                        </span>
                                        <span class="check-icon-otr">
                                            <i class="ri-check-line check-icon"></i>
                                        </span>
                                        <div class="hover">
                                            <p class="text heading-S">Creator : Rehman Ahmed</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-icon-otr">
                                    <img class="icon" src="../assets/img/list-icon.svg" alt="icon">
                                </div>
                            </div>
                            <div class="cover-img-otr">
                                <a href="./Single-Artwork.html">
                                    <img class="cover-img" src="../assets/img/cover-img14.png" alt="Artwork">
                                </a>
                                <span class="heart-icon-otr2 heart1">
                                    <i class="ri-heart-line heart-icon2 heart-1"></i>
                                </span>
                            </div>
                            <a href="./Single-Artwork.html" class="art-name heading-MB-Mon">Ethereum in Diamond</a>
                            <div class="bid-main">
                                <p class="bid heading-S">Current Bid</p>
                                <p class="Price heading-SB">2.43 ETH</p>
                            </div>
                        </div>
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
        Explore Artwork End Here
    ===================================-->

@endsection

@section('pagescript')
@endsection