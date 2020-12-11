{{-- left side bar  --}}
  <aside class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12">
    <div class="box mb-3 shadow-sm border rounded bg-white profile-box text-center">
        <div class="py-4 px-3 border-bottom">
            <img src="{{asset('public/frontend/img/user/'.Auth::user()->img)}}" class="img-fluid mt-2 rounded-circle" alt="Responsive image" />
            <h5 class="font-weight-bold text-dark mb-1 mt-4">
                {{Auth::user()->name}}
            </h5>
            <p class="mb-0 text-muted">{{Auth::user()->occupation}}</p>
        </div>
        <div class="d-flex">
            <div class="col-6 border-right p-3">
                <h6 class="font-weight-bold text-dark mb-1">358</h6>
                <p class="mb-0 text-black-50 small">Connections</p>
            </div>
            <div class="col-6 p-3">
                <h6 class="font-weight-bold text-dark mb-1">85</h6>
                <p class="mb-0 text-black-50 small">Views</p>
            </div>
        </div>
        <div class="overflow-hidden border-top">
            <a class="font-weight-bold p-3 d-block" href="{{url('edit-profile')}}">
                Edit my profile
            </a>
        </div>
    </div>
    <div class="box mb-3 shadow-sm rounded bg-white view-box overflow-hidden">
        <div class="box-title border-bottom p-3">
            <h6 class="m-0">Profile Views</h6>
        </div>
        <div class="d-flex text-center">
            <div class="col-6 border-right py-4 px-2">
                <h5 class="font-weight-bold text-info mb-1">08 <i class="feather-bar-chart-2"></i></h5>
                <p class="mb-0 text-black-50 small">last 5 days</p>
            </div>
            <div class="col-6 py-4 px-2">
                <h5 class="font-weight-bold text-success mb-1">+ 43% <i class="feather-bar-chart"></i></h5>
                <p class="mb-0 text-black-50 small">Since last week</p>
            </div>
        </div>
        <div class="overflow-hidden border-top text-center">
            <img src="{{asset('public/frontend/img/chart.png')}}" class="img-fluid" alt="Responsive image" />
        </div>
    </div>
    <div class="box shadow-sm mb-3 rounded bg-white ads-box text-center">
        <img src="{{asset('public/frontend/img/job1.png')}}" class="img-fluid" alt="Responsive image" />
        <div class="p-3 border-bottom">
            <h6 class="font-weight-bold text-dark">Osahan Solutions</h6>
            <p class="mb-0 text-muted">Looking for talent?</p>
        </div>
        <div class="p-3">
            <button type="button" class="btn btn-outline-primary pl-4 pr-4">POST A JOB</button>
        </div>
    </div>
  </aside>
