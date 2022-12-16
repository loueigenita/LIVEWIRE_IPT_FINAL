{{-- @extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="container mt-3">
        <h1 class="text-center" style="font-weight: 400; color:rgb(242, 226, 226); font-size: 30px;">Dashboard</h1>
        <div class="content " style="position: relative; margin-left: 300px;">
            <div class="row mt-5 text-center">
                <div class="col-md-3 mb-2">
                    <div class="card shadow">
                        <a href="/recent-post" id="dash-link">
                            <div class="card-body rounded " style="background-color:#113c32;">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa fa-history text-white mt-2" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-white float-right" id="text">Recent Talk</span><br>
                                        <span class="text-white" id="text2">{{ $allPosts }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow">
                        <a href="/my-post" id="dash-link">
                            <div class="card-body rounded" style="background-color:#113c32;">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa fa-commenting-o text-white mt-2" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-white float-right" id="text">Your Talk</span><br>
                                        <span class="text-white" id="text2">{{ $posts }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @role('admin')
                <div class="col-md-3 mb-2">
                    <div class="card shadow">
                        <a href="/log" id="dash-link">
                            <div class="card-body rounded" style="background-color:#113c32;">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa fa-book text-white mt-2" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-white float-right" id="text">Total Logs</span><br>
                                        <span class="text-white" id="text2">{{ $logs }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endrole
            </div>
        </div>

    </div>
@endsection

<style>
    .card {
        width: 240px;
    }
    .card:hover {
        transform: scale(1.02);
        transition: transform 0.4s ease;
    }

    #dash-icon {
        font-size: 30px;
        opacity: 0.5;
    }
    #dash-link {
        text-decoration: none;
    }


    .time {
        opacity: 0.8;
    }
    .recent-only {
        border: 1px solid rgba(0, 0, 0, 0.23);
        border-radius: 10px;
        box-shadow: 3px 3px 1px 0px rgba(0, 0, 0, 0.2);
    }
</style> --}}
@extends('layouts.admin')
@section('content')
<section class="content">
    <div class="row filts mt-3">
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $allPosts }}</h3>
            <p>Recent Posts</p>
          </div>
          <div class="icon">
            <i class="fas fa-history"></i>
          </div>
          <a href="/home" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      {{-- <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{ $visitors }}</h3>

              <p>Visitors</p>
            </div>
            <div class="icon">
            <i class="fas fa-people-group"></i>
          </div>
          <a href="/contact" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div> --}}
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{ $logs }}</h3>

            <p>Logs</p>
          </div>
          <div class="icon">
            <i class="fas fa-book"></i>
          </div>
          <a href="/log" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3>{{ $posts }}</h3>

              <p>My Posts</p>
            </div>
            <div class="icon">
              <i class="fas fa-scroll"></i>
            </div>
            <a href="/my-post" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>1</h3>
  
                <p>Permissions</p>
              </div>
              <div class="icon">
                <i class="fas fa-scroll"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

      <!-- ./col -->
    </div>
@endsection
