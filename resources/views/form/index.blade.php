<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--LINK BOTSTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/index">BELAJAR LARAVEL</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/index">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/form">Input</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li> --}}
            </ul>
          </div>
        </div>
      </nav>

    <br>
    <button class="btn btn-" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Enable both scrolling & backdrop</button>
      <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <p>Try scrolling the rest of the page to see this option in action.</p>
        </div>
      </div>
    <br><br>  
    <a href="/form"class="btn btn-success">+Tambah Film</a>
    <br>
      <!--TABLE-->
    <br>
    <table class="table table-dark">
        <thead>
            <tr>
              <th class="col-md-1">NO</th>
              <th class="col-md-2">ID TUJUAN</th>
              <th class="col-md-3">NAMA PERUSAHAAN</th>
              <th class="col-md-3">ALAMAT</th>
              <th class="col-md-2">EMAIL</th>
              <th class="col-md-1">NO TELEPON</th>
              <th class="col-md-1">PIC</th>
              <th class="col-md-1">AKSI</th>

            </tr>
        </thead>
        <tbody>
            <?php $no=1 ?>
            @foreach($result as $item)
                <tr>
                    <td>{{$no}}</td>
                    <td>{{$item['id_tujuan']}}</td>
                    <td>{{$item['nama_perusahaan']}}</td>
                    <td>{{$item['alamat']}}</td>
                    <td>{{$item['email']}}</td>
                    <td>{{$item['no_telepon']}}</td>
                    <td>{{$item['pic']}}</td>
                    <td>
                        <a href="{{ url('tampil/'.$item['id']) }}" class="btn btn-warning btn-sm">EDIT</a>
                        <a href="{{ url('hapus/'.$item['id']) }}" class="btn btn-danger btn-sm">HAPUS</a>

                    </td>
                </tr>
                <?php $no++?>
            @endforeach

    <tbody>
    </table>
    <!--LINK BOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>