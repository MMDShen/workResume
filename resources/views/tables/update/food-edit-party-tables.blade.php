
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
                                    <form action="{{ url('food-party-table/'.$id) }}" method="POST">
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
                                                <div class="form-group">
                                                    <label for="user-name"
                                                           class="form-control-label">{{ __('Food Label') }}</label>
                                                    <div
                                                        class="@error('label')border border-danger rounded-3 @enderror">
                                                        <input class="form-control" value="{{ \App\Models\FoodParty::find($id)->label }}"
                                                               type="text"
                                                               placeholder="Label" id="label" name="label">
                                                        @error('label')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="form-group">
                                                    <label for="user-name"
                                                           class="form-control-label">{{ __('Food Factor') }}</label>
                                                    <div
                                                        class="@error('factor')border border-danger rounded-3 @enderror">
                                                        <input class="form-control" value="{{ \App\Models\FoodParty::find($id)->factor }}"
                                                               type="text"
                                                               placeholder="Factor" id="factor" name="factor">
                                                        @error('factor')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="form-group">
                                                    <label for="user-name"
                                                           class="form-control-label">{{ __('Food Max') }}</label>
                                                    <div
                                                        class="@error('max')border border-danger rounded-3 @enderror">
                                                        <input class="form-control" value="{{ \App\Models\FoodParty::find($id)->max }}"
                                                               type="text"
                                                               placeholder="Max" id="max" name="max">
                                                        @error('max')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-danger">Edit</button></div>
                                        <a class="justify-content-center m-auto d-flex" href="/restaurant-type-table">last page</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

