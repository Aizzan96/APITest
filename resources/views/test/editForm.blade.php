@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">

                        <form action="{{ route('update') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="hidden" class="form-control" name="id" value="{{ $record['id'] }}">
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $record['name'] }}">
                            </div>

                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" class="form-control" id="age" name="age"
                                    value="{{ $record['age'] }}">
                            </div>

                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <input type="text" class="form-control" id="gender" name="gender"
                                    value="{{ $record['gender'] }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
