{{-- Right side bar  --}}
  <aside class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-6 col-12">
    <div class="box shadow-sm border rounded bg-white mb-3">
        <div class="box-title border-bottom p-3">
            <h6 class="m-0">People you might know</h6>
        </div>
        <div class="box-body p-3">
            @foreach ($user as $data)
                <div class="d-flex align-items-center osahan-post-header mb-3 people-list">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="{{asset('public/frontend/img/user/'.$data->img)}}" alt="" />
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div class="font-weight-bold mr-2">
                        <div class="text-truncate">
                            <a class="text-white" href="{{ url($data->name.'_'.$data->id)}}">{{$data->name}}</a>
                            {{-- <a class="text-white" href="">{{$data->name}}</a> --}}
                        </div>
                        <div class="small text-gray-500">{{$data->occupation}}</div>
                    </div>
                    <span class="ml-auto">
                        <button type="button" class="btn btn-light btn-sm">
                            <i class="feather-user-plus"></i>
                        </button>
                    </span>
                </div>
            @endforeach
            <div class="float-right">{{ $user->links() }}</div>
        </div>
    </div>
    <div class="box shadow-sm border rounded bg-white mb-3">
        <div class="box-title border-bottom p-3 d-flex align-items-center">
            <h6 class="m-0">Photos</h6>
            <a class="ml-auto" href="#">See All <i class="feather-chevron-right"></i></a>
        </div>
        <div class="box-body p-3">
            <div class="gallery-box-main">
                <div class="gallery-box">
                    <img class="img-fluid" src="{{asset('public/frontend/img/p4.pn')}}g" alt="" />
                    <img class="img-fluid" src="{{asset('public/frontend/img/p5.pn')}}g" alt="" />
                    <img class="img-fluid" src="{{asset('public/frontend/img/p6.pn')}}g" alt="" />
                </div>
                <div class="gallery-box">
                    <img class="img-fluid" src="{{asset('public/frontend/img/p7.pn')}}g" alt="" />
                    <img class="img-fluid" src="{{asset('public/frontend/img/p8.pn')}}g" alt="" />
                    <img class="img-fluid" src="{{asset('public/frontend/img/p9.pn')}}g" alt="" />
                </div>
                <div class="gallery-box">
                    <img class="img-fluid" src="{{asset('public/frontend/img/p10.pn')}}g" alt="" />
                    <img class="img-fluid" src="{{asset('public/frontend/img/p11.pn')}}g" alt="" />
                    <img class="img-fluid" src="{{asset('public/frontend/img/p12.pn')}}g" alt="" />
                </div>
            </div>
        </div>
    </div>
    <div class="box shadow-sm mb-3 rounded bg-white ads-box text-center overflow-hidden">
        <img src="{{asset('public/frontend/img/ads1.png')}}" class="img-fluid" alt="Responsive image" />
        <div class="p-3 border-bottom">
            <h6 class="font-weight-bold text-gold">Osahanin Premium</h6>
            <p class="mb-0 text-muted">Grow & nurture your network</p>
        </div>
        <div class="p-3">
            <button type="button" class="btn btn-outline-gold pl-4 pr-4">ACTIVATE</button>
        </div>
    </div>
    <div class="box shadow-sm border rounded bg-white mb-3">
        <div class="box-title border-bottom p-3">
            <h6 class="m-0">Jobs</h6>
        </div>
        <div class="box-body p-3">
            <a href="#">
                <div class="shadow-sm border rounded bg-white job-item mb-3">
                    <div class="d-flex align-items-center p-3 job-item-header">
                        <div class="overflow-hidden mr-2">
                            <h6 class="font-weight-bold text-dark mb-0 text-truncate">
                                Product Director
                            </h6>
                            <div class="text-truncate text-primary">Spotify Inc.</div>
                            <div class="small text-gray-500"><i class="feather-map-pin"></i> India, Punjab</div>
                        </div>
                        <img class="img-fluid ml-auto" src="{{asset('public/frontend/img/l3.png')}}" alt="" />
                    </div>
                    <div class="d-flex align-items-center p-3 border-top border-bottom job-item-body">
                        <div class="overlap-rounded-circle">
                            <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="{{asset('public/frontend/img/p9.png')}}" alt="" data-original-title="Sophia Lee" />
                            <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="{{asset('public/frontend/img/p10.png')}}" alt="" data-original-title="John Doe" />
                            <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="{{asset('public/frontend/img/p11.png')}}" alt="" data-original-title="Julia Cox" />
                            <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="{{asset('public/frontend/img/p12.png')}}" alt="" data-original-title="Robert Cook" />
                        </div>
                        <span class="font-weight-bold text-muted">18 connections</span>
                    </div>
                    <div class="p-3 job-item-footer">
                        <small class="text-gray-500"><i class="feather-clock"></i> Posted 3 Days ago</small>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="shadow-sm border rounded bg-white job-item">
                    <div class="d-flex align-items-center p-3 job-item-header">
                        <div class="overflow-hidden mr-2">
                            <h6 class="font-weight-bold text-dark mb-0 text-truncate">
                                .NET Developer
                            </h6>
                            <div class="text-truncate text-primary">Invision</div>
                            <div class="small text-gray-500"><i class="feather-map-pin"></i> London, UK</div>
                        </div>
                        <img class="img-fluid ml-auto" src="{{asset('public/frontend/img/l4.png')}}" alt="" />
                    </div>
                    <div class="d-flex align-items-center p-3 border-top border-bottom job-item-body">
                        <div class="overlap-rounded-circle">
                            <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="{{asset('public/frontend/img/p13.png')}}" alt="" data-original-title="Sophia Lee" />
                            <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="{{asset('public/frontend/img/p1.png')}}" alt="" data-original-title="John Doe" />
                            <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="{{asset('public/frontend/img/p3.png')}}" alt="" data-original-title="Robert Cook" />
                        </div>
                        <span class="font-weight-bold text-muted">18 connections</span>
                    </div>
                    <div class="p-3 job-item-footer">
                        <small class="text-gray-500"><i class="feather-clock"></i> Posted 3 Days ago</small>
                    </div>
                </div>
            </a>
        </div>
    </div>
  </aside>