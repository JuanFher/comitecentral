@extends('layouts.app')

@section('bradcrumbs')
    <div class="page-header">
        <h4 class="page-title">Dashboard</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row row-cards">
        <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">
            <div class="card card-counter bg-gradient-primary shadow-primary">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <div class="mt-4 mb-0 text-white">
                                <h3 class="mb-0">{{ $doctors }}</h3>
                                <p class="text-white mt-1">Total Doctores </p>
                            </div>
                        </div>
                        <div class="col-4">
                            <i class="fa fa-bar-chart mt-3 mb-0"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">
            <div class="card card-counter bg-gradient-secondary shadow-secondary">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <div class="mt-4 mb-0 text-white">
                                <h3 class="mb-0">{{ $patients }}</h3>
                                <p class="text-white mt-1">Total Pacientes </p>
                            </div>
                        </div>
                        <div class="col-4">
                            <i class="fa fa-send-o mt-3 mb-0"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">
            <div class="card card-counter bg-gradient-warning shadow-warning">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <div class="mt-4 mb-0 text-white">
                                <h3 class="mb-0">32,784</h3>
                                <p class="text-white mt-1">Requests Answered</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <i class="fa fa-mail-reply mt-3 mb-0"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">
            <div class="card card-counter bg-gradient-success shadow-success">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <div class="mt-4 mb-0 text-white">
                                <h3 class="mb-0">14,563</h3>
                                <p class="text-white mt-1">Support Cost </p>
                            </div>
                        </div>
                        <div class="col-4">
                            <i class="fa fa-money mt-3 mb-0"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-cards">
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
            <div class="card Revenue">
                <div class="card-header">
                    <h3 class="card-title">Revenue Vs Support Cost</h3>
                </div>
                <div class="card-body">
                    <div id="morrisBar2" class="chartsh chart-dropshadow"></div>
                    <div class="text-center col-sm-12">
                        <span class="dot-label bg-primary"></span><span class="mr-3 Revenue">Total Revenue</span>
                        <span class="dot-label bg-secondary"></span><span class="Revenue">% Support Cost</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="card overflow-hidden">
                        <div class="card-body ">
                            <div class=" mb-0 ">
                                <p class="mb-1">Active Agent</p>
                                <h3 class="mb-1">12,765 <i class="fe fe-trending-up text-success"></i></h3>
                                <small class="displayblock"><i class="mdi mdi-arrow-up-drop-circle mr-1 text-success" aria-hidden="true"></i>21% Higher Than Average </small>
                            </div>
                        </div>
                        <span class="peity-line" data-width="100%" data-height="50%" data-peity='{ "fill": ["#ff685c"], "stroke": ["#ff685c"] }' >6,2,8,4,3,8,1,3,6,5,9,2,8</span>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="card overflow-hidden">
                        <div class="card-body ">
                            <div class=" mb-0 ">
                                <p class="mb-1">Tickets Per Agent</p>
                                <h3 class="mb-1">5,237 <i class="fe fe-trending-down text-danger"></i></h3>
                                <small class="displayblock"><i class="mdi mdi-arrow-down-drop-circle mr-1 text-danger" aria-hidden="true"></i>21% Higher Than Average </small>
                            </div>
                        </div>
                        <span class="peity-line" data-width="100%" data-height="80%" data-peity='{ "fill": ["#32cafe"], "stroke": ["#32cafe "] }' >6,4,8,5,3,6,3,7,4,7,2,9,4</span>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="h6">Total Customers</div>
                            <div class="h1 font-weight-semibold mb-1 text-primary">5,435</div>
                            <small class="displayblock"><i class="fe fe-arrow-up-circle  mr-1 text-success" aria-hidden="true"></i>21% Higher Than Average </small>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <h6>Total Conversation</h6>
                            <div class="h1 font-weight-semibold mb-1 text-secondary">15,425</div>
                            <small class="displayblock"><i class="fe fe-arrow-up-circle  mr-1 text-success" aria-hidden="true"></i>21% Higher Than Average </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    
@endsection

@push('styles')
    {{-- expr --}}
@endpush

@push('scripts')
    {{-- expr --}}
@endpush