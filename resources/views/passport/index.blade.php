@extends('layouts.bootstrap') 

@section('title')
    <title>Developers | Case Root</title>
@stop 

@section('content')
<main role="main">
    <div class="jumbotron">
        <div class="col-sm-8 mx-auto">
            <h1>
                Developers
            </h1>

            <p>
                The Case Root API is organized around REST. It can be used to build non-automated, high-quality apps and services that interact
                with Case Root platform.
            </p>

            <p>
                This page is for generating access tokens required for accessing the public API. You may read the API documentation for
                more details:
            </p>

            <p>
                <a class="btn btn-primary" href="https://api.caseroot.com" role="button">View API documentation »</a>
                <a class="btn" href="/" role="button">Back to caseroot.com »</a>
            </p>
        </div>
    </div>
</main>

<passport-clients></passport-clients> <br>
<passport-authorized-clients></passport-authorized-clients> <br>
<passport-personal-access-tokens></passport-personal-access-tokens>
@stop