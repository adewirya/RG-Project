<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="logo">
        <a href="{{ route('index')}}"><img class="gambar" src="/logo.png" alt="logo"></a>
    </div>
    <div class="formnya">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="heading">
                Let's Start Your Adventure!
            </div>

            <div class="group-info">
                <div class="head">
                    <img class="gambarnya-group" src="/icon/group.png" alt="group-icon">
                    <span class="head-title">
                        Group Information
                    </span>
                </div>

                <div class="input-data">
                <input id="groupName" type="text" placeholder="Group Name" class="form-control @error('groupName') is-invalid @enderror" name="groupName" value="{{ old('groupName') }}" required autocomplete="groupName" autofocus>
                    <div class="underline"></div>
                    <label for="groupName" class="what-is">{{ __('Group Name') }}</label>
                    @error('groupName')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-data">
                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    <div class="underline"></div>
                    <label for="password" class="what-is">{{ __('Password') }}</label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="info">
                    Min. 8 digits with uppercase, lowercase, number, and symbols (e.g. Angela_3)
                </div>
                <div class="input-data">
                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    <div class="underline"></div>
                    <label for="password-confirm" class="what-is">{{ __('Confirm Password') }}</label>
                </div>
                <div class="container">
                    <label class="switch">
                        <input type="checkbox" id="myCheck" onclick="myFunction()">
                        <span class="slider"></span>
                    </label>
                    <span class="what-is binusian">BINUSIAN</span>
                </div>
            </div>

            <div class="leader-info">
                <div class="head">
                    <img class="gambarnya-solo" src="/icon/leader.png" alt="leader-icon">
                    <span class="head-title">
                        Leader Information
                    </span>
                </div>

                <div class="input-data">
                    <input type="text" required>
                    <div class="underline"></div>
                    <label class="what-is">Leader Name</label>
                    @error('leadN')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-data">
                    <input type="email" required>
                    <div class="underline"></div>
                    <label class="what-is">Email</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-data">
                    <input type="phone" required>
                    <div class="underline"></div>
                    <label class="what-is">WA Number</label>
                    @error('leadNumber')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="input-data">
                    <input type="text" required>
                    <div class="underline"></div>
                    <label class="what-is">LINE ID</label>
                    @error('leadID')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-data">
                    <input type="text" required>
                    <div class="underline"></div>
                    <label class="what-is">Github ID</label>
                    @error('leadGit')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="birth">
                    <div class="input-data pob">
                        <input type="text" required>
                        <div class="underline"></div>
                        <label class="what-is">Birthplace</label>
                        @error('leadBirth')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <span class="seperate"></span>
                    <div class="input-data dob">
                        <input type="date" required>
                        <div class="underline"></div>
                        <label class="what-is">Birthday</label>
                        @error('leadDOB')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>
                </div>
                <div id="cv">
                    <div class="input-data">
                        <input type="file" id="file" onchange="return ValidasiCV()" required>
                        <div class="underline"></div>
                        <label class="what-is">Upload CV</label>
                    </div>
                    <div class="info">
                        File must be in .pdf / .jpg / .jpeg / .png
                    </div>
                </div>
                <div id="text">
                    <div class="input-data">
                        <input type="file" id="fc" onchange="return ValidasiFC()" required>
                        <div class="underline"></div>
                        <label class="what-is">Upload Flazzcard</label>
                    </div>
                    <div class="info">
                        File must be in .pdf / .jpg / .jpeg / .png
                    </div>                 
                </div>
                <div id="data">
                    <div class="input-data">
                        <input type="file" id="idc" onchange="return ValidasiIDC()" required>
                        <div class="underline"></div>
                        <label class="what-is">Upload ID Card</label>
                    </div>
                    <div class="info">
                        File must be in .pdf / .jpg / .jpeg / .png
                    </div>
                </div>
            </div>

            <div class="submit">
                <button type="submit" class="btn">SUBMIT</button>
            </div>
        </form>
        <script src="../js/ifbinus.js"></script>
        <script src="../js/filetype.js"></script>
    </div>
</body>
</html>