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

        </div>
        <!-- ./container -->
    </div>
    <!-- /.content_top -->
    

@endsection
