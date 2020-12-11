<main class="col-md-8">
    <form action="{{route('author.edit-profile')}}" method="POST">
        @csrf
        <div class="border rounded bg-white mb-3">
            <div class="box-title border-bottom p-3">
                <h6 class="m-0">Edit Basic Info</h6>
            </div>
            <div class="box-body p-3">
                <div class="row">
                    <div class="col-sm-6 mb-2">
                        <div class="js-form-message">
                            <label id="nameLabel" class="form-label">
                                Full Name
                                <span class="text-danger">*</span>
                            </label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}" placeholder="Enter your name" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <div class="js-form-message">
                            <label id="usernameLabel" class="form-label">
                                Occupation
                                <span class="text-danger">*</span>
                            </label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="occupation" value="{{Auth::user()->occupation}}" placeholder="Enter your Occupation" autocomplete="off" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 mb-2">
                        <div class="js-form-message">
                            <label id="emailLabel" class="form-label">
                                Email address
                                <span class="text-danger">*</span>
                            </label>
                            <div class="form-group mb-1">
                                <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}" readonly >
                                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                        </div>
                    </div>                    
                    <div class="col-sm-6 mb-2">
                        <div class="js-form-message">
                            <label id="phoneNumberLabel" class="form-label">
                                Phone number
                                <span class="text-danger">*</span>
                            </label>
                            <div class="form-group">
                                <input class="form-control" type="tel" name="phone" value="{{Auth::user()->phone}}" placeholder="Enter your phone number" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3 text-right">
            <a class="font-weight-bold btn btn-link rounded p-3" href="#"> &nbsp;&nbsp;&nbsp;&nbsp; Cancel &nbsp;&nbsp;&nbsp;&nbsp; </a>
            <button type="submit" class="font-weight-bold btn btn-primary rounded p-3">Save Changes</button>
        </div>
    </form>
</main>