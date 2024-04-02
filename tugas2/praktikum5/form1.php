<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Nilai Ujian</title>
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#submit_btn').click(function(e){
        e.preventDefault();
        var nim = $('#nim').val();
        var mk = $('#mk').val();
        var nilai = $('#nilai').val();
        
        $.ajax({
            type: 'POST',
            url: 'proses_nilai.php',
            data: {
                nim: nim,
                mk: mk,
                nilai: nilai
            },
            success: function(response){
                $('#hasil').html(response);
            }
        });
    });
});
</script>
</head>
<body>
<div class="container">
    <h2>Form Nilai Ujian</h2>
    <form id="nilai_form" method="post">
        <div class="form-group">
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim">
        </div>

        <div class="form-group">
            <label for="mk">Pilih Mata Kuliah:</label>
            <select id="mk" name="mk">
                <option value=""></option>
                <option value="PPKN">Pendidikan Kewarganegaraan</option>
                <option value="Komunikasi">Komunikasi Efektif</option>
                <option value="Statistik">Statistika Probabilitas</option>
                <option value="UI/UX">User Interface Dan User Xperience</option>
                <option value="Pemweb">Pemrograman Web</option>
                <option value="Basdat">Basis Data</option>
                <option value="Jarkom">Jaringan Komputer</option>
                <option value="English">Bahasa Inggris</option>
            </select>
        </div>

        <div class="form-group">
            <label for="nilai">Nilai:</label>
            <input type="number" id="nilai" name="nilai" min="0" max="100">
        </div>

        <div class="form-group">
            <button type="submit" id="submit_btn">Submit</button>
        </div>
    </form>

    <div id="hasil"></div>
</div>
</body>
</html>