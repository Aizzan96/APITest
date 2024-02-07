@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">{{ __('Records') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>

                                    {{-- <th>ID</th> --}}
                                    <th>Name</th>
                                    <th>Age</th>
                                    {{-- <th>Gender</th> --}}
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @if ($records)
                                    @foreach ($records as $record)
                                        <tr>
                                            {{-- <td>{{ $record['id'] }}</td> --}}
                                            <td>{{ $record['name'] }}</td>
                                            <td>{{ $record['age'] }}</td>
                                            {{-- <td>{{ $record['gender'] }}</td> --}}
                                            <td>
                                                <form action="{{ route('show') }}" method="get" style="display:inline;">
                                                    @csrf
                                                    <input type="hidden" name="record_id" value="{{ $record['id'] }}">
                                                    <button type="submit" class="btn btn-primary">Edit</button>
                                                </form>
                                                <form action="{{ route('delete') }}" method="post" style="display:inline;">
                                                    @csrf
                                                    <input type="hidden" name="record_id" value="{{ $record['id'] }}">
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4">No records available</td>
                                    </tr>
                                @endif

                            </tbody>

                        </table>{{-- Table end --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
