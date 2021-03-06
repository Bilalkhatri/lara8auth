@extends('panel.master')


@section('tital', 'Create Permission')

@section('content')

    <div class="">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>


    <div class="">
        <a class="btn btn-success" href="{{ route('permission.index') }}">Permissions list</a>
    </div>
    </div>

    </div>
    <div class="card-body">

        {{-- Permission Create --}}
        <form method="POST" action="{{ route('permission.store') }}">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Permission Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Roles :') }}</label>
                <div class="col-md-6">
                    @foreach ($roles as $role)
                        <div class="form-check">
                            <label class="form-check-label" for="{{ $role->name }}">
                                <input type="checkbox" class="form-check-input" name="roles[]" id="{{ $role->name }}"
                                    value="{{ $role->id }}" @isset($user) @if (in_Array($role->id, $user->roles->pluck('id')->toArray())) checked @endif @endisset>
                                {{ $role->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Submit') }}
                    </button>
                </div>
            </div>
        </form>


    </div>



@endsection
