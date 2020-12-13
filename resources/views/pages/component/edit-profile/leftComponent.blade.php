<aside class="col-md-4">
    <div class="mb-3 border rounded bg-white profile-box text-center w-10">
        <div class="p-4 d-flex align-items-center">
            <div class="w-50">
                <img for="imgInp" id="img_show" src="{{asset('public/frontend/img/user/'.Auth::user()->img)}}" class="img-fluid rounded-circle" alt="Responsive image">
            </div>
            <div class="p-4">
                <form method="post" action="{{url('edit-profile-img')}}" enctype="multipart/form-data">
                    @csrf
                    <label data-toggle="tooltip" data-placement="top" data-original-title="Upload New Picture" class="btn btn-info m-0" for="imgInp">
                        <i class="feather-image"></i>
                        <input id="imgInp" name="img" type="file" class="d-none">
                        <input type="hidden" name="old_img" value="public/frontend/img/user/{{Auth::user()->img}}">
                    </label>
                    <button data-toggle="tooltip" data-placement="top" data-original-title="Save" type="submit" class="btn btn-success"><i class="feather-save"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="border rounded bg-white mb-3">
        <div class="box-title border-bottom p-3">
            <h6 class="m-0">About</h6>
            <p class="mb-0 mt-0 small">Tell about yourself in two sentences.
            </p>
        </div>
    </div>
</aside>