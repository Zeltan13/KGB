<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Pegawai</title>
  <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-4">
        <div class="sidebar">
          <img src="{{ asset('image/logo BKPSDM.png') }}" class="img-fluid mb-4" alt="Deskripsi Gambar">
          <ul class="list-group">
            <li id="home-box" class="list-group-item text-center" onclick="window.location.href='{{ url('/home') }}';">Home</li>
            <li id="profile-box" class="list-group-item text-center" onclick="window.location.href='{{ url('/home/profile') }}';">Profile</li>
          </ul>
        </div>
      </div>
      <div class="content col-md-9 col-sm-8">
            <h3>Menu Profil</h3>
            <form action="{{ route('update-password') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="current_password" class="form-label">Password Saat Ini</label>
                <input type="password" class="form-control" id="current_password" name="current_password">
                @error('current_password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-3">
                <label for="new_password" class="form-label">Password Baru</label>
                <input type="password" class="form-control" id="new_password" name="new_password">
                @error('new_password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin ingin mengubah password?')">Simpan</button>
              @if(session('success'))
              <div class="alert alert-success mt-3">
                {{ session('success') }}
              </div>
              @endif
            </form>
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button class="btn btn-danger mt-3">Logout</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
