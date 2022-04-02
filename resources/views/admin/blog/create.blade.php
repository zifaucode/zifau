@extends('layouts-admin.app')
@section('title')
Blog Create
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
<div class="col-lg-12">
    <div class="card text-white">
        <div class="card-body text-white">
            <h4 class="card-title">Create Blog</h4>
            <br>

            <textarea name="editor1"></textarea>
            <br>
            <button class="btn btn-lg btn-inverse-success">Save</button>
        </div>
    </div>
</div>

@endsection

@section('pagescript')
@endsection