<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>from input nilai mahasiswa</title>
</head>

<body>
    <h1>from input nilai mahasiswa</h1>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <form method="$_POST" action="submit.php">
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
            </div>
        </div>
        <div class="form-group row">
            <label for="matkul" class="col-sm-2 col-form-label">Mata Kuliah</label>
            <div class="col-sm-10">
                <select class="form-control" name="matkul" id="matkul">
                    <option value="Dasar-dasar Pemrograman">Dasar-dasar Pemrograman</option>
                    <option value="Pemrograman Web">Pemrograman Web</option>
                    <option value="Sistem Operasi">Sistem Operasi</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nilai UTS</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="uts" placeholder="Nilai UTS" name="uts">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nilai UAS</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="uas" placeholder="Nilai UAS" name="uas">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label" name="nilai_tugas">Nilai Tugas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="tugas" placeholder="Nilai Tugas" name="tugas">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>