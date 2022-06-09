@extends('layouts.app')


@section('content')

    <div class="jumbotron">

    </div>
    <!-- /.jumbotron -->

    <div class="content_top text-white d-flex align-items-center">

        <div class="container">

            <div class="text text-uppercase bg-primary">
                current series
            </div>

            <div class="row">
                @foreach ($comics as $comic)

                <div class="col-2">
                    <div class="card py-3">
                        <img class="card-img-top" src="{{$comic['thumb']}}" alt="{{$comic['series']}}">

                        <div class="card-body">
                            <h6 class="card-title text-left">{{$comic['series']}}</h6>

                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->

                </div>
                <!-- ./col -->
                @endforeach

            </div>
            <!-- /.row -->

            <div class="load_more text-center">
                <a href="#" class="btn btn-primary rounded-0 border-3 text-uppercase text-white px-5">
                load more
                </a>
            </div>
            <!-- /.load_more -->

        </div>
        <!-- ./container -->
    </div>
    <!-- /.content_top -->

    <div class="content_bottom">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col">

                    <div class="actions d-flex align-items-center">
                        <div class="action_image d-flex align-items-center">
                            <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                        </div>
                        <!-- /.action_image -->
                        <div class="action_text d-flex align-items-center text-uppercase">
                            Digital Comics
                        </div>
                        <!-- /.action_text -->

                    </div>
                    <!-- /actions -->

                </div>
                <!-- /.col -->

                <div class="col">

                    <div class="actions d-flex align-items-center">
                        <div class="action_image d-flex align-items-center">
                            <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                        </div>
                        <!-- /.action_image -->
                        <div class="action_text d-flex align-items-center text-uppercase">
                            Dc merchandise
                        </div>
                        <!-- /.action_text -->
                    </div>
                    <!-- /actions -->

                </div>
                <!-- /.col -->

                <div class="col">

                    <div class="actions d-flex align-items-center">
                        <div class="action_image d-flex align-items-center">
                            <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                        </div>
                        <!-- /.action_image -->
                        <div class="action_text d-flex align-items-center text-uppercase">
                            Subscription
                        </div>
                        <!-- /.action_text -->
                    </div>
                    <!-- /actions -->

                </div>
                <!-- /.col -->

                <div class="col">

                    <div class="actions d-flex align-items-center">
                        <div class="action_image d-flex align-items-center">
                            <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
                        </div>
                        <!-- /.action_image -->
                        <div class="action_text d-flex align-items-center text-uppercase">
                            Comic shop locator
                        </div>
                        <!-- /.action_text -->
                    </div>
                    <!-- /actions -->

                </div>
                <!-- /.col -->

                <div class="col">

                    <div class="actions d-flex align-items-center">
                        <div class="action_image d-flex align-items-center">
                            <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
                        </div>
                        <!-- /.action_image -->
                        <div class="action_text d-flex align-items-center text-uppercase">
                            Dc power visa
                        </div>
                        <!-- /.action_text -->
                    </div>
                    <!-- /actions -->

                </div>
                <!-- /.col -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content_bottom -->
    

@endsection