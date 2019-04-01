@extends('layouts.app-all')

@section('css')
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/lightbox2/css/lightbox.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/noui/nouislider.min.css')}}">
<!--===============================================================================================-->


@stop

@section('content')

<!-- Counten -->
<section class="bgwhite p-t-60">
    <div class="container">
        <div class="row">
            <!-- left bar -->
            <div class="col-md-9 col-lg-9 p-b-75">
                <div class="p-r-50 p-r-0-lg">
                <div class="container">
            <div class="row">
                <div class="raw">
                        <div class="p-t-50">
                            <h2 class="m-text20 text-center">
                                THE FOUNDER
                            </h2>
                            <div class="mx-auto p-t-10">
                                <img src="{{asset('assets/images/profile-founder.jpg')}}" class="rounded mx-auto d-block" alt="theManager1">
                            </div>
                            <a href="#">
                            <h5 class="text-uppercase text-center">Ucok Orlando Parulian Tamba, S.H., M.H</h5>
                            </a>
                        </div>

                        <h2 class="m-text20 text-center p-t-50">
                                LAW OFFICE MANAGER
                                </h2>
                        <div class="row p-l-18 p-r-17 p-t-10">
                            <div class="col-md-7 col-lg-6">
                                <div class="single-feedback">
                                    <img align="center" src="{{asset('assets/images/profile-manager.jpg')}}" class="rounded float-left" alt="theManager1">
                                    <div class="col text-center">
                                    <h5 class="text-uppercase text-center">Dr. Musa Darwin Pane, S.H., M.H</h5></div>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-6">
                                <div class="single-feedback p-r-10">
                                    <img align="center" src="{{asset('assets/images/profile-manager2.jpg')}}" class="rounded float-right" alt="theManager2">
                                    <div class="col text-center">
                                    <h5 class="text-uppercase text-center">Dr. Sahat Maruli Tua Situmeang, S.H., M.H</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-4">
                    <div class="single-feedback">
                        <img align="center" src="{{asset('assets/images/profile-chrisman-damanik.jpg')}}" class="rounded float-right" alt="theManager2">
                        <a href="#">
                            <h5 class="text-uppercase text-center">Chrisman Damanik, Amd., S.H</h5>
                        </a>
                        <p>CEO at Google</p>
                        <hr>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">See Profile</button>
                        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feedback">
                        <img align="center" src="{{asset('assets/images/profile-chrisman-damanik.jpg')}}" class="rounded float-right" alt="theManager2">
                        
                        <a href="#">
                            <h5 class="text-uppercase">Dahman Sinaga, S.H</h5>
                        </a>
                        <p>CEO at Google</p>
                        <hr>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">See Profile</button>
                        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feedback">
                        <img align="center" src="{{asset('assets/images/profile-chrisman-damanik.jpg')}}" class="rounded float-right" alt="theManager2">
                        <a href="#">
                            <h5 class="text-uppercase">Anton Saeful Hidayat, S.H</h5>
                        </a>
                        <p>CEO at Google</p>
                        <hr>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">See Profile</button>
                        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feedback">
                        <img align="center" src="{{asset('assets/images/profile-chrisman-damanik.jpg')}}" class="rounded float-right" alt="theManager2">
                        <a href="#">
                            <h5 class="text-uppercase text-center">Marco Van Bastem Malau, S.H</h5>
                        </a>
                        <p>CEO at Google</p>
                        <hr>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">See Profile</button>
                        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feedback">
                        <img align="center" src="{{asset('assets/images/profile-chrisman-damanik.jpg')}}" class="rounded float-right" alt="theManager2">
                        <a href="#">
                            <h5 class="text-uppercase">Andreas D.L.A Situmeang, S.H</h5>
                        </a>
                        <p>CEO at Google</p>
                        <hr>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">See Profile</button>
                        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feedback">
                        <img align="center" src="{{asset('assets/images/profile-chrisman-damanik.jpg')}}" class="rounded float-right" alt="theManager2">
                        <a href="#">
                            <h5 class="text-uppercase">Art Tra Gusti, S.H., CLA</h5>
                        </a>
                        <p>CEO at Google</p>
                        <hr>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">See Profile</button>
                        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feedback">
                        <img align="center" src="{{asset('assets/images/profile-chrisman-damanik.jpg')}}" class="rounded float-right" alt="theManager2">
                        <a href="#">
                            <h5 class="text-uppercase">Neysa Myanda, S.H., M.H</h5>
                        </a>
                        <p>CEO at Google</p>
                        <hr>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">See Profile</button>
                        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feedback">
                        <img src="https://colorlib.com/preview/theme/repair/img/t1.png" alt="">
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor,
                            printer, scanner, speaker, projector, hardware and more. laptop accessory.
                        </p>
                        <a href="#">
                            <h5 class="text-uppercase">Mark Alviro Wiens</h5>
                        </a>
                        <p>CEO at Google</p>
                        <hr>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">See Profile</button>
                        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feedback">
                        <img src="https://colorlib.com/preview/theme/repair/img/t1.png" alt="">
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor,
                            printer, scanner, speaker, projector, hardware and more. laptop accessory.
                        </p>
                        <a href="#">
                            <h5 class="text-uppercase">Mark Alviro Wiens</h5>
                        </a>
                        <p>CEO at Google</p>
                        <hr>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">See Profile</button>
                        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    
                </div>
            </div>

            <!-- Right Barr-->            
            @include('layouts.right-bar')
            
        </div>
    </div>
</section>

<!-- Footer -->
@include('layouts.footer')






<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>
@endsection

@section('script')
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('assets/vendor/select2/select2.min.js')}}"></script>
<script type="text/javascript">
    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });

</script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('assets/vendor/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('assets/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('assets/vendor/lightbox2/js/lightbox.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('assets/vendor/sweetalert/sweetalert.min.js')}}"></script>
@stop
