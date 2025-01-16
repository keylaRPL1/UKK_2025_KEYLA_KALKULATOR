<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana </title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
 <div class="container mt-5">
 <div class="row justify-content-center">
 <div class="col-md-6">
 <div class="card shadow-lg">
 <div class="card-header bg-primary text-white text-center">
    <h4>Kalkulator</h4>
 </div>
    <div class="card-body bg-white">
    <form method="POST" action="">
 <div class="mb-3">
  <label for="angka1" class="form-label">Angka Pertama</label>
 <input type="number" name="angka1" class="form-control" placeholder="Masukkan angka pertama" required>
 </div>
   <div class="mb-3">
     <label for="angka2" class="form-label">Angka Kedua</label>
         <input type="number" name="angka2" class="form-control" placeholder="Masukkan angka kedua" required>
    </div>
     <div class="mb-3">
    <label for="operasi" class="form-label">Pilih Operasi</label>
        <select name="operasi" class="form-select" required>
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">*</option>
        <option value="bagi">/</option>
    </select>
    </div>
        <button type="submit" class="btn btn-success w-100">Hitung</button>
    </form>
    </div>
    <div class="card-footer bg-info text-white text-center mt-3">
    <h5>Hasil:</h5>
    <p class="fw-bold">
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operasi = $_POST['operasi'];                       
         switch ($operasi) {
         case 'tambah':
        echo $angka1 + $angka2;
        break;
          case 'kurang':
        echo $angka1 - $angka2;
        break;
          case 'kali':
        echo $angka1 * $angka2;
        break;
          case 'bagi':
        echo $angka2 != 0 ? $angka1 / $angka2 : 'Tidak dapat membagi dengan nol';
        break;
        default:
        echo 'Operasi tidak valid';
         break;
     }
       }
    ?>
           </p>
        </div>
      </div>
    </div>
  </div>
    </div>
      <!-- Link Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>