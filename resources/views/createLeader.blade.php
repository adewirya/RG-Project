<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Leader</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
        <h1 class="text-center">Insert Data</h1>
        <div class="d-flex align-items-center justify-content-center" style="min-height: 100vh">
            <form class="col-lg-5" action="{{route('leader.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">LeadN</label>
                    <input class="form-control" name="leadN" type="text" placeholder="LeadN">
                    @error('leadN') <span>{{$message}}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">LeadStat</label>
                    <input class="form-control" name="leadStat" type="text" placeholder="LeadStat">
                    @error('leadStat') <span>{{$message}}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">LeadE</label>
                    <input class="form-control" name="leadE" type="text" placeholder="LeadE">
                    @error('leadE') <span>{{$message}}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">LeadID</label>
                    <input class="form-control" name="leadID" type="text" placeholder="LeadID">
                    @error('leadID') <span>{{$message}}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">LeadNumber</label>
                    <input class="form-control" name="leadNumber" type="number" placeholder="LeadNumber">
                    @error('leaderNumber') <span>{{$message}}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">LeadGit</label>
                    <input class="form-control" name="leadGit" type="text" placeholder="LeadGit">
                    @error('leadGIT') <span>{{$message}}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">LeadDOB</label>
                    <input class="form-control" name="leadDOB" type="date" placeholder="LeadDOB">
                    @error('leaderDOB') <span>{{$message}}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">LeadBirth</label>
                    <input class="form-control" name="leadBirth" type="text" placeholder="LeadBirth">
                    @error('leaderBirth') <span>{{$message}}</span> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>