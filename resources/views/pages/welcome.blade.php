@extends('layout')

@section('content')
    <div class="container-fluid">

        <div class="row justify-content-center" style="margin-top: 20vh">
            <div class="col-sm-12 mb-5">
                <div class="d-lg-none">
                    <h1 class="text-center text-white">Wychgel Schilderwerken</h1>
                </div>
                <div class="d-none d-lg-block">
                    <h1 class="display-3 text-center text-white">Wychgel Schilderwerken</h1>
                </div>
            </div>
        </div>

        <div class="row justify-content-start fixed-bottom">
            <div class="d-none d-lg-block">
                <div class="col">
                    <div class="ml-5 jumbotron bg-white shadow-lg" style="width:340px">
                        <h1 class="display-4">Welkom!</h1>
                        <p class="lead">Op deze website kunt u onder andere het werk zien dat door Wychgel schilderwerken word verricht en de projecten die zijn afgerond</p>
                        <hr class="my-4">
                        <a class="btn btn-primary btn-lg" href="/portfolio" role="button">Meer informatie</a>
                    </div>
                </div>
            </div>
            <div class="d-none d-sm-none d-md-none">
                <div class="col">
                    <div class="mx-5 jumbotron bg-white shadow-lg">
                        <h1 class="display-4">Welkom!</h1>
                        <p class="lead">Op deze website kunt u onder andere het werk zien dat door Wychgel schilderwerken word verricht en de projecten die zijn afgerond</p>
                        <hr class="my-4">
                        <a class="btn btn-primary btn-lg" href="/portfolio" role="button">Meer informatie</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
