<!doctype html>
<html lang="en">

<!-- HEAD -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>

<!-- BODY -->
  <body>
    <?php
    $ns1 = ['id' => 1, 'nim' => '01101', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
    $ns2 = ['id' => 2, 'nim' => '01121', 'uts' => 70, 'uas' => 50, 'tugas' => 68];
    $ns3 = ['id' => 3, 'nim' => '01130', 'uts' => 60, 'uas' => 86, 'tugas' => 70];
    $ns4 = ['id' => 4, 'nim' => '01134', 'uts' => 90, 'uas' => 91, 'tugas' => 82];

    $ar_nilai = [$ns1, $ns2, $ns3, $ns4]
    ?>

    <div class="container">
      <br>
      <h2>Daftar Nilai Siswa</h2>
      <br>

      <table class="table table-striped table-hover">
        <thead class="table-success">
          <tr>
            <th scope="col">No</th>
            <th scope="col">NIM</th>
            <th scope="col">UTS</th>
            <th scope="col">UAS</th>
            <th scope="col">Tugas</th>
            <th scope="col">Nilai Akhir</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $nomor = 1;
          foreach ($ar_nilai as $ns) {
            $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;

            echo '<tr>';
            echo '<th scope="row">' . $nomor . '</th>';
            echo '<td>' . $ns['nim'] . '</td>';
            echo '<td>' . $ns['uts'] . '</td>';
            echo '<td>' . $ns['uas'] . '</td>';
            echo '<td>' . $ns['tugas'] . '</td>';
            echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
            echo '</tr>';
            $nomor++;
          }
          ?>
        </tbody>
      </table>
    </div>

    <!-- SCRIPT -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>

</html>