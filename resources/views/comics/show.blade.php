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
                    <h3 class="comic_details_title">
                        Talent
                    </h3>
                    <!-- /.comic_details_title -->

                    <div class="artist row">

                        <div class="col-4">

                            <h5 class="title_talent">
                                Art by:
                            </h5>
                            <!-- /.title_talent -->

                        </div>

                        <div class="col-8">

                            @forelse ($comic['artists'] as $artist)

                            <span class="artist_list">
                                {{$artist}}
                            </span>
                            <!-- /.artist_list -->
                            
                            @empty
                            <p>Non ci sono artisti</p>

                            @endforelse

                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.artist -->

                    <div class="writer row">
                        <div class="col-4">

                            <h5 class="title_talent">
                                Written by:
                            </h5>
                            <!-- /.title_talent -->

                        </div>
                        <!-- /.col -->

                        <div class="col-8">

                            @forelse ($comic['writers'] as $writer)

                            <span class="writer_list">
                                {{$writer}}
                            </span>
                            <!-- /.writer_list -->

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
                    <h3 class="comic_details_title">Specs</h3>

                    <div class="series row">
                        <div class="col-4">

                            <h5 class="title_specs">
                                Series:
                            </h5>

                        </div>
                        <!-- /.col -->

                        <div class="col-8">

                           
                            <span class="content_specs">
                                {{$comic['series']}}
                            </span>
                            


                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.series -->

                    <div class="us_price row">
                        <div class="col-4">
                            <h5 class="title_specs">
                                U.S. Price:
                            </h5>

                        </div>
                        <!-- /.col -->
                        <div class="col-8">
                            <span class="content_specs">
                                {{$comic['price']}}
                            </span>
                            
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.us_price -->

                    <div class="on_sale_date row">

                        <div class="col-4">
                            <h5 class="title_specs">
                                On Sale Date:
                            </h5>
                            
                        </div>
                        <!-- /.col -->

                        <div class="col-8">

                            <span class="content_specs">
                                {{$comic['sale_date']}}
                            </span>
                            
                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.on_sale_date -->

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
