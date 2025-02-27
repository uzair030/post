@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5>Create Pets</h5>
                    <a href="{{route('home')}}" class="btn btn-primary">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{route('tag.store')}}" method="post">
                        @csrf
                        <div class="col-md-8 form-group">
                            <label for="name">Tag Name</label>
                            <input type="text" class="form-control @error('tag') is-invalid @enderror" id="name" name="tag">
                            <small class="form-text text-muted">
                                Your content  must be 5-30 characters long.
                              </small>
                            @error('tag')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                     
                        
                       
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection