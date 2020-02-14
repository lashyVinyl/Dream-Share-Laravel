@extends('layout.layout')

{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}

{{--    <body>--}}
{{--        <div class="flex-center position-ref full-height">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="top-right links">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}

            @section('content')

                <img id="" src="{{ asset('img/headerBackground.jpg') }}">
                <nav class="container navbar navbar-expand-lg fixed-top py-3 navbar-default navbar-fixed-top" id="mainNavbar">
                    <a class="navbar-brand js-scroll-trigger" href="#page-top"><img style="color: white; font-size: 100px" src="{{ asset('img/logos/logo.svg') }}"></a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto my-2 my-lg-0">
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger text-white" href="/activities">Activities</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger text-white" href="/partners">Partners</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger text-white" href="/blog">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger text-white" href="/contact">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger text-white" href="/login">Login</a>
                            </li>
                            <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/signup" id="signUp">Sign Up</a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div>
                    <header class="centered heading" style="margin-top: -250px">
                        <div class="row h-100 align-items-center justify-content-center text-center">
                            <div class="col-lg-10 align-self-end">
                                <h1 class="text-uppercase text-white font-weight-bold">Share your dream holiday</h1>
                            </div>
                            <div class="col-lg-8 align-self-baseline">
                                <p class="text-white">and find the perfect partner to fulfil it</p>
                                <a class="btn btn-danger btn-xl js-scroll-trigger" href="/more">Find your holiday partner</a>
                            </div>
                        </div>
                    </header>
                </div>

            <div class="container">
                <h2 class="text-center" style="margin-top: 150px">Meet a partner for your best holiday</h2>
                <div class="row text-center">
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="{{ asset('img/partner1.jpg')  }}" alt="partner1" class="rounded-circle">
                            <div class="iconCircle iconCircleMusic">
                                <span class="typeIcon music">
                                    <img src="{{ asset('img/logos/music.svg') }}">
                                </span>
                            </div>
                        </div>
                        <h3 class="">Bradley Hunter</h3>
                        <p class="text">Based in Chicago. I love playing tennis and loud music.</p>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="{{asset('img/partner2.jpg')}}" alt="partner2" class="rounded-circle">
                            <div class="iconCircle iconCircleBrush">
                                <span class="typeIcon brush">
                                    <img src="{{ asset('img/logos/brush.svg') }}">
                                </span>
                            </div>
                        </div>
                        <h3 class="">Marie Bennett</h3>
                        <p class="text">Currently living in Colorado. Lover of art, languages and travelling.</p>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="{{ asset('img/partner3.jpg') }}" alt="partner3" class="rounded-circle">
                            <div class="iconCircle iconCircleCamera">
                                <span class="typeIcon camera">
                                    <img src="{{ asset('img/logos/camera.svg') }}">
                                </span>
                            </div>
                        </div>
                        <h3 class="">Diana Wells</h3>
                        <p class="text">Living in Athens, Greece. I love black and white classic, chillout music and green tea.</p>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="{{ asset('img/partner4.jpg') }}" alt="partner4" class="rounded-circle">
                            <div class="iconCircle iconCircleAirplane">
                                <span class="typeIcon airplane">
                                    <img src="{{ asset('img/logos/airplane.svg') }}">
                                </span>
                            </div>
                        </div>
                        <h3 class="">Christopher Pierce</h3>
                        <p class="text">Star Wars fanatic. I have a persistent enthusiasm to create new things.</p>
                    </div>
                </div>
                <div class="text-center">
                    <a href="/" class="btn btn-outline-danger">See other partners</a>
                </div>

                <div class="container" style="border-radius: 3px">
                    <h2 class="text-center mb-4">Discover holiday activity ideas</h2>
                    <div class="row">
                        <div class="col">
                            <div class="block" style="position: absolute"><h2>Sport and Activity</h2></div>
                            <img class="activities" src="{{ asset('img/block1Sports.jpg') }}" style="width: 100%; height: 100%;">
                        </div>
                        <div class="col">
                            <div class="block" style="position: absolute"><h2>Wellnes and Health</h2></div>
                            <img class="activities" src="{{ asset('img/block2Wellness.jpg') }}" style="width: 100%; height: 100%">
                        </div>
                        <div class="col">
                            <div class="block" style="position: absolute"><h2>Expeditions</h2></div>
                            <img class="activities" src="{{ asset('img/block3Expeditions.jpg') }}" style="width: 100%; height: 100%">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <div class="block" style="position: absolute"><h2>Games</h2></div>
                            <img class="activities" src="{{ asset('img/block4Games.jpg') }}" style="width: 100%; height: 100%">
                        </div>
                        <div class="col-8">
                            <div class="block" style="position: absolute"><h2 class="">Culture and Education</h2></div>
                            <img class="activities" src="{{ asset('img/block5Culture.jpg') }}" style="width: 100%; height: 100%">
                        </div>
                    </div>
                    <div class="row mt-4 justify-content-center align-items-center">
                        <div class="col-8">
                            <div class="block" style="position: absolute"><h2>Beauty and Relaxation</h2></div>
                            <img class="activities" src="{{ asset('img/block6Beauty.jpg') }}" style="width: 100%; height: 100%">
                        </div>
                        <div class="col">
                            <div class="block" style="position: absolute"><h2>Travelling</h2></div>
                            <img class="activities" src="{{ asset('img/block7Travelling.jpg') }}" style="width: 100%; height: 100%">
                        </div>
                    </div>
                </div>
            </div>
@endsection
