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
            Activity Start Here
    ===================================-->

<div class="activity-main">
    <div class="container-fluid">
        <div class="wrapper">
            <h2 class="heading heading-h2">Source Code 🤨</h2>
        </div>
        <div class="row row-custom">
            <div class="col-lg-12 col-activity-otr">
                <div class="col-activity-inr">
                    <div class="activity box-1">
                        <a href="/" class="img-otr">
                            <img class="img-art img-fluid" src="../assets/img/cover-img1.png" alt="cover-img">
                        </a>
                        <div class="text-otr">
                            <a class="name heading-MB-Mon">Nama Source Code</a><br>
                            <div class="btn-otr">
                                <a href="" class="btn-primary-2 btn-more heading-SB">Demo</a>
                                <a href="" class="icon-a">
                                    <img class="icon" src="/assets/img/download.png" width="80px">
                                </a>
                            </div>
                            <br>
                            <p class="time heading-S">⌚️ 19th June, 2021</p>
                        </div>


                    </div>


                    <div class="btn-otr">
                        <a href="" class="btn-primary-2 btn-more heading-SB">Load More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--==================================
            Activity End Here
    ===================================-->

<!--==================================
            Footer Start Here
    ===================================-->

@endsection

@section('pagescript')
@endsection