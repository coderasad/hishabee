 {{-- main content  --}}
 <main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
    <div class="box shadow-sm border rounded bg-white mb-3 osahan-share-post">
        <ul class="nav nav-justified border-bottom osahan-line-tab" id="myTab" role="tablist">
            <li class="nav-item text-left">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="feather-edit"></i> Share an update</a>
            </li>
        </ul>
        
        <form id="addPost" method="POST" action="{{url('postget') }}">
            @csrf
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="p-3 d-flex align-items-center w-100" href="#">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="{{asset('public/frontend/img/user/'.Auth::user()->img)}}" alt="" />
                            <div class="status-indicator bg-success"></div>
                        </div>
                        <!-- ===========[Share Post]=============  -->
                        <div class="w-100">
                            <textarea type="text" name="post" placeholder="Write your thoughts..." class="form-control border-0 p-0 shadow-none post" autocomplete="off"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-top p-3 d-flex align-items-center">
                <div class="mr-auto">
                </div>
                <div class="flex-shrink-1">
                    <button type="submit" class="btn btn-primary btn-sm postSubmit">
                        Post Status
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="ar-addPost">
        @foreach ($post as $data)
        <div class="box shadow-sm border rounded bg-white mb-3 osahan-post">
            <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="{{asset('public/frontend/img/user/'.$data->users->img)}}" alt="" />
                    <div class="status-indicator bg-success"></div>
                </div>
                <div class="font-weight-bold">
                    <div class="text-truncate">{{$data->users->name}}</div>
                    <div class="small text-gray-500">
                        {{$data->users->occupation}}
                    </div>
                </div>
                <span class="ml-auto small">
                    {{ $data->created_at->diffForHumans()}}
                </span>
            </div>
            <div class="p-3 border-bottom osahan-post-body">
                <p class="mb-0">
                    {{$data->post}}
                </p>
            </div>
            <div class="p-3 border-bottom osahan-post-footer overflow-hidden">
                <a href="#" class="text-secondary ar_like ar_like_{{$data->id}}">
                    <i class="feather-thumbs-up mr-2"></i>Like
                </a>
                <a href="#" class="mr-3 pl-3 text-secondary emojiArea">
                    <span class="emj_like" id="{{$data->id}}">👍🏻</span>
                    <span class="emj_heard" id="{{$data->id}}">💖</span>
                    <span class="emj_love" id="{{$data->id}}">😍</span>
                    <span class="emj_cry" id="{{$data->id}}">😭</span>
                </a>
                <a href="#" class="mr-3 text-secondary ar_like_count">
                    <i class="mr-2 like_count">0</i>Like
                </a>                
            </div>
        </div>
        @endforeach
        <div class="float-right">{{ $post->links() }}</div>
    </div>
</main>