@extends('layouts.app')


@section('content')

<div class="hero">

    <div class="hero_top">

        <div class="jumbotron">

        </div>
        <!-- /.jumbotron -->

    </div>
    <!-- /.hero_top -->

    <div class="hero_bottom">

        <div class="container_sm">

            <div class="thumb">
                <img class="card-img-top" src="{{$comic['thumb']}}" alt="{{$comic['series']}}">   
            </div>
            <!-- /.thumb -->
            
        </div>
        <!-- /.container.sm -->


    </div>
    <!-- /hero_bottom -->

</div>
<!-- /.hero -->

<div class="comic_info">

    <div class="container_sm">
        <div class="row">
            <div class="col-8">

                <h1 class="comic_title text-left text-uppercase">
                    {{$comic['title']}}
                </h1>

                <div class="sale_box d-flex align-items-center justify-content-between">

                    <div class="sale_info d-flex justify-content-between align-items-center w-75">

                        <div class="price">
                            U.S. Price: {{$comic['price']}}
                        </div>
                        <!-- /.price -->

                        <div class="availability text-uppercase">
                            available
                        </div>
                        <!-- /.availability -->

                    </div>
                    <!-- /.sale_info -->

                    <div class="check d-flex justify-content-center align-items-center  w-25"> 
                        <a href="#"> Check Availability <i class="fa-solid fa-caret-down text-primary"></i> </a>
                    </div>
                    <!-- /.check -->


                </div>
                <!-- /.sale_box -->

                <p class="description"> 
                    {{$comic['description']}}
                </p>
                
            </div>
            <!-- /.col -->

            <div class="col-4">

                <div class="text-uppercase">advertisement</div>

                <div class="img_adv">
                    <img src="{{asset('img/adv.jpg')}}" alt="adv">
                </div>
                <!-- /.img_adv -->
                
            </div>
            <!-- /.col -->


        </div>
        <!-- /.row -->

    </div>
    <!-- /.container_sm -->

</div>
<!-- /comic_info -->

<div class="comic_details">

    <div class="container_sm">

        <div class="row row-cols-2">

            <div class="col">

                <div class="talent">
                    <h3>Talent</h3>

                    <div class="artist row">

                        <div class="col-4">

                            <div class="h5">Art by:</div>

                        </div>

                        <div class="col-8">
                            @forelse ($comic['artists'] as $artist)
                            <span class="artist_list">{{$artist}}</span>
                            @empty
                            <p>Non ci sono artisti</p>
                            @endforelse

                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.artist -->

                    <div class="writer row">
                        <div class="col-4">

                            <div class="h5">Written by:</div>

                        </div>
                        <!-- /.col -->

                        <div class="col-8">
                            @forelse ($comic['writers'] as $writer)
                            <span class="writer_list">{{$writer}}</span>
                            @empty
                            <p>Non risultano scrittori</p>
                            @endforelse

                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.writer -->

                </div>
                <!-- /.talent -->

            </div>
            <!-- /.col -->

            <div class="col">

                <div class="specs">
                    <h3>Specs</h3>

                </div>
                <!-- /.specs -->

            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container_sm -->

</div>
<!-- /.comic_details -->



@endsection
