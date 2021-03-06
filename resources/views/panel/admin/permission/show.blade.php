@extends('panel.master')


@section('tital', 'Permissions Info')

@section('content')

    <div class="">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>
    <div class="">
        <a class="btn btn-success" href="{{ route('permission.index') }}"> View Permissions</a>
    </div>
    </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Permission Name:</strong>
                    {{ $permission->name }}
                </div>
                <div class="form-group">
                    <strong>Roles Name:</strong>
                        @foreach ($roles as $role)
                        {{ $role->name }}
                        @endforeach
                    </div>

            </div>
        </div>
    </div>


    </div>

@endsection
