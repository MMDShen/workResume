
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

</head>

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Edit Row</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="card-body px-0 pt-0 pb-2">
                                <form action="{{ url('restaurant/'.$id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    @if($errors->any())
                                        <div class="mt-3  alert alert-primary alert-dismissible fade show"
                                             role="alert">
                            <span class="alert-text text-white">
                            {{$errors->first()}}</span>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close">
                                                <i class="fa fa-close" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    @endif
                                    @if(session('success'))
                                        <div class="m-3  alert alert-success alert-dismissible fade show"
                                             id="alert-success"
                                             role="alert">
                            <span class="alert-text text-white">
                            {{ session('success') }}</span>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close">
                                                <i class="fa fa-close" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="">
                                            <div class="d-flex m-auto justify-content-center mt-4 form-group">
                                                <label for="user-name"
                                                       class="form-control-label">{{ __('Status') }}</label>
                                                <div
                                                    class="@error('is_open')border border-danger rounded-3 @enderror">
                                                    <select name="is_open">
                                                        <option value="1">Open</option>
                                                        <option value="0">Close</option>
                                                    </select>
                                                    @error('is_open')
                                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="user-name"
                                                       class="form-control-label">{{ __('Title') }}</label>
                                                <div
                                                    class="@error('title')border border-danger rounded-3 @enderror">
                                                    <input class="form-control" value="{{ \App\Models\Restaurant::find($id)->title }}"
                                                           type="text"
                                                           placeholder="Title" id="title" name="title">
                                                    @error('title')
                                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="user-name"
                                                       class="form-control-label">{{ __('Address') }}</label>
                                                <div
                                                    class="@error('address')border border-danger rounded-3 @enderror">
                                                    <input class="form-control" value="{{ \App\Models\Restaurant::find($id)->address }}"
                                                           type="text"
                                                           placeholder="Address" id="address" name="address">
                                                    @error('address')
                                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="user-name"
                                                       class="form-control-label">{{ __('Restaurant Type') }}</label>
                                                <div
                                                    class="@error('restaurant_type')border border-danger rounded-3 @enderror">
                                                    <input class="form-control" value="{{ \App\Models\Restaurant::find($id)->restaurant_type }}"
                                                           type="text"
                                                           placeholder="Restaurant Type" id="restaurant_type" name="restaurant_type">
                                                    @error('restaurant_type')
                                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="user-name"
                                                       class="form-control-label">{{ __('Longitude') }}</label>
                                                <div
                                                    class="@error('longitude')border border-danger rounded-3 @enderror">
                                                    <input class="form-control" value="{{ \App\Models\Restaurant::find($id)->longitude }}"
                                                           type="number"
                                                           placeholder="Longitude" id="longitude" name="longitude">
                                                    @error('longitude')
                                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="user-name"
                                                       class="form-control-label">{{ __('Latitude') }}</label>
                                                <div
                                                    class="@error('latitude')border border-danger rounded-3 @enderror">
                                                    <input class="form-control" value="{{ \App\Models\Restaurant::find($id)->latitude }}"
                                                           type="number"
                                                           placeholder="Latitude" id="latitude" name="latitude">
                                                    @error('latitude')
                                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-danger">Edit</button></div>
                                    <a class="justify-content-center m-auto d-flex" href="/restaurant">last page</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

