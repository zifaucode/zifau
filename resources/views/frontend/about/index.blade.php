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
            inner-header Start Here
    ===================================-->

<div class="inner-header-main">
    <div class="container-fluid">
        <div class="wrapper">
            <h2 class="heading heading-h2">About</h2>
            <div class="linkk-otr">
                <a href="/" class="home-link linkk-page heading-S">Home</a>
                <p class="link-slash heading-S">/</p>
                <a href="/about" class="inner-page-link linkk-page heading-S">About</a>
            </div>
        </div>
    </div>
</div>

<!--==================================
            inner-header End Here
    ===================================-->

<!--==================================
            About Start Here
    ===================================-->

<div class="about-main">
    <div class="container-fluid">
        <div class="call-to-action">
            <div class="wrapper">
                <h2 class="heading-h2 heading">
                    About me
                </h2>
                <p class="desc heading-M">
                    📨 fauziagustian68@gmail.com <br>👨🏻‍💻 WEB DEVELOPER <br>

                </p>
                <p class="desc heading-S">
                    Traveling🚌-Coding💻-Game 🎮
                </p>
                <br>


                <div class="social-icon">
                    <ul class="icon-ul">
                        <li class="icon-li">
                            <a href="https://github.com/zifaucode" class="icon-a">
                                <img class="icon" src="../assets/img/github.png" width="150px" alt="icon">
                                <p class="desc heading-M">
                                    Kunjungi Github
                                </p>
                            </a>
                        </li>

                    </ul>
                </div>

            </div>



            <div class="img-otr">
                <div class="img-inr">
                    <div class="col-img-inr">
                        <img class="about-img img-fluid" src="../assets/img/kupu.png" alt="img">
                    </div>
                    <div class="col-img-inr">
                        <img class="about-img img-fluid" src="../assets/img/kupu.png" alt="img">
                    </div>
                    <div class="col-img-inr">
                        <img class="about-img img-fluid" src="../assets/img/kupu.png" alt="img">
                    </div>
                </div>
                <div class="img-inr">
                    <div class="col-img-inr">
                        <img class="about-img img-fluid" src="../assets/img/kupu.png" alt="img">
                    </div>
                    <div class="col-img-inr">
                        <img class="about-img img-fluid" src="../assets/img/kupu.png" alt="img">
                    </div>
                    <div class="col-img-inr">
                        <img class="about-img img-fluid" src="../assets/img/kupu.png" alt="img">
                    </div>
                </div>
                <div class="img-inr">
                    <div class="col-img-inr">
                        <img class="about-img img-fluid" src="../assets/img/kupu.png" alt="img">
                    </div>
                    <div class="col-img-inr">
                        <img class="about-img img-fluid" src="../assets/img/kupu.png" alt="img">
                    </div>
                    <div class="col-img-inr">
                        <img class="about-img img-fluid" src="../assets/img/kupu.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==================================
            About End Here
    ===================================-->

@endsection

@section('pagescript')
@endsection