<!doctype html>
<html lang="en">
<!-- HEAD -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Pemweb 2 MSayib - Form Nilai</title>
  </head>

<!-- BODY -->
  <body>
    <div class="card">
      <div class="card-header">
        Sistem Penilaian
      </div>
      <div class="card-body">
        <h2>Form Nilai Siswa</h2>
        <hr>
        <div class="container">
          <form method="POST" action="nilai_siswa.php">
            <div class="form-group row">
              <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
              <div class="col-8">
                <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-4 col-form-label" for="matkul">Mata Kuliah</label>
              <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select" required>
                  <option value="">-- Pilih --</option>
                  <option value="DDP">Dasar Dasar Pemrograman</option>
                  <option value="BDI">Basis Data I</option>
                  <option value="WEB1">Pemrograman Web</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
              <div class="col-2">
                <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
              <div class="col-2">
                <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas / Praktikum</label>
              <div class="col-2">
                <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-4 col-8">
                <input type="submit" type="submit" class="btn btn-primary" name="proses" value="Simpan">
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="card-footer text-center text-muted">
        Made with ❤️ by MSayib @ 2022
      </div>
    </div>

    <!-- SCRIPT -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>

</html>