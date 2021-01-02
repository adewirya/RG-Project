@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="groupName" class="col-md-4 col-form-label text-md-right">{{ __('Group Name') }}</label>

                            <div class="col-md-6">
                                <input id="groupName" type="text" placeholder="Group Name" class="form-control @error('groupName') is-invalid @enderror" name="groupName" value="{{ old('groupName') }}" required autocomplete="groupName" autofocus>

                                @error('groupName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="groupStat" class="col-md-4 col-form-label text-md-right">{{ __('Binusian/Not') }}</label>

                            <div class="col-md-6">
                                <input id="groupStat" type="text" placeholder="Binusian/Not" class="form-control @error('groupStat') is-invalid @enderror" name="groupStat" value="{{ old('groupStat') }}" required autocomplete="groupStat">

                                @error('groupStat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="leadN" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input id="leadN" type="text" placeholder="Full Name" class="form-control @error('leadN') is-invalid @enderror" name="leadN" value="{{ old('leadN') }}" required autocomplete="leadN">

                                @error('leadN')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="leadE" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="leadE" type="email" placeholder="Email" class="form-control @error('leadE') is-invalid @enderror" name="leadE" value="{{ old('leadE') }}" required autocomplete="leadE">

                                @error('leadE')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="leadNumber" class="col-md-4 col-form-label text-md-right">{{ __('WhatsApp Number') }}</label>

                            <div class="col-md-6">
                                <input id="leadNumber" type="text" placeholder="WhatsApp Number" class="form-control @error('leadNumber') is-invalid @enderror" name="leadNumber" value="{{ old('leadNumber') }}" required autocomplete="leadNumber">

                                @error('leadNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="leadID" class="col-md-4 col-form-label text-md-right">{{ __('LINE ID') }}</label>

                            <div class="col-md-6">
                                <input id="leadID" type="text" placeholder="LINE ID" class="form-control @error('leadID') is-invalid @enderror" name="leadID" value="{{ old('leadID') }}" required autocomplete="leadID">

                                @error('leadID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="leadGit" class="col-md-4 col-form-label text-md-right">{{ __('GitHub/GitLab ID') }}</label>

                            <div class="col-md-6">
                                <input id="leadGit" type="text" placeholder="GitHub/GitLab ID" class="form-control @error('leadGit') is-invalid @enderror" name="leadGit" value="{{ old('leadGit') }}" required autocomplete="leadGit">

                                @error('leadGit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="leadBirth" class="col-md-4 col-form-label text-md-right">{{ __('Birth Place') }}</label>

                            <div class="col-md-6">
                                <input id="leadBirth" type="text" placeholder="Birth Place" class="form-control @error('leadBirth') is-invalid @enderror" name="leadBirth" value="{{ old('leadBirth') }}" required autocomplete="leadBirth">

                                @error('leadBirth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="leadDOB" class="col-md-4 col-form-label text-md-right">{{ __('Birth Date') }}</label>

                            <div class="col-md-6">
                                <input id="leadDOB" type="date" class="form-control @error('leadDOB') is-invalid @enderror" name="leadDOB" value="{{ old('leadDOB') }}" required autocomplete="leadDOB">

                                @error('leadDOB')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
