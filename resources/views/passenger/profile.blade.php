@extends('layouts.master')

@section('content')
    <main class="profile">
        <div class="container">
            <br>
            <div class="card">
                <div class="card-header bg-accent text-white">
                    <h4>Your Profile</h4>
                </div>
    <div class="row">
        @if(Session::get('info') != null)
        <p class="alert alert-info">{{ Session::get('info') }}</p>
@endif
        <div class="col-md-12">
            <form action="{{ route('passenger.profile.update') }}" method="post">
                <div class="form-group">
                    <label for="title">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $user->firstname }}">
                </div>
                <div class="form-group">
                    <label for="content">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $user->lastname }}">
                </div>

                <div class="form-group">
                    <label for="content">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="content">Phone Number</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
                </div>


                <div class="form-group">
                    <label for="content">Gender</label>
                    <div class="radio">
                        <label><input type="radio" name="gender" value="Female" {{ $user->gender == 'Female' ? 'checked' : ''}}>Female</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gender" value="Male" {{ $user->gender == 'Male' ? 'checked' : ''}}>Male</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gender" value="Other" {{ $user->gender == 'Other' ? 'checked' : ''}}>Other</label>
                    </div>

                </div>

                <div class="form-group">
                    <label for="content">Birthday</label>
                    <input type="date" class="form-control" id="birthdate" name="birthdate"
                           value="{{ $user->birthdate }}">
                </div>
                {{ csrf_field() }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <input type="hidden" name="id" value="{{ $user->id }}">
                <button type="submit" class="btn btn-accent">Save</button>
            </form>
        </div>
    </div>
            </div>
        </div>
    </main>
@endsection