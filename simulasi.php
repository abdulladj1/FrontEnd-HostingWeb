<!DOCTYPE html>
<html>
<head>
    <title>SKYT Pinjaman</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Simulasi Pinjaman Kredit Rumah</h2>
        <form method="post">
            <div class="form-group">
                <label for="harga">Harga Rumah (Rp)</label>
                <input type="number" class="form-control" id="harga" name="harga" min="10000000" required>
            </div>
            <div class="form-group">
                <label for="bunga">Bunga Pinjaman (% per Tahun)</label>
                <input type="number" class="form-control" id="bunga" name="bunga" min="5" max="10" required>
            </div>
            <div class="form-group">
                <label for="uang_muka">Uang Muka (%)</label>
                <input type="number" class="form-control" id="uang_muka" name="uang_muka" min="30" max="100" required>
            </div>
            <div class="form-group">
                <label for="tenor">Tenor (Tahun)</label>
                <input type="number" class="form-control" id="tenor" name="tenor" min="1" max="5" required>
            </div>
            <div class="form-group">
                <label for="PerhitunganMargin">Perhitungan Margin</label>
					<select class="form-control" id="PerhitunganMargin" name="PerhitunganMargin" required>
						<option value="Flat">Flat</option>
					</select>
            </div><br>
            <button type="submit" class="btn btn-primary">Simulasi</button>
        </form><br>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $harga = $_POST['harga'];
            $bunga = $_POST['bunga'];
            $uang_muka = $_POST['uang_muka'];
            $tenor = $_POST['tenor'];
            $PerhitunganMargin = $_POST['PerhitunganMargin'];
            
        // Konversi % uang muka ke dalam nominal
            $dp = $harga * ($uang_muka / 100);

        // Hitung jumlah pinjaman
            $pinjaman = $harga - $dp;

        // Hitung bunga per tahun
            $bunga_per_tahun = $pinjaman * ($bunga / 100);

        // Hitung bunga per bulan
            $bunga_per_bulan = $bunga_per_tahun / 12;

        // Konversi tenor dari tahun ke bulan
            $tenorbulan = $tenor * 12;

        // Hitung angsuran per bulan
            $angsuran_per_bulan = ($pinjaman / $tenorbulan) + $bunga_per_bulan;

        // Hitung total bunga
            $total_bunga = $bunga_per_tahun * $tenor;

        // Hitung total pinjaman
            $total_pinjaman = $pinjaman + $total_bunga;

        //  Deklarasi angsuran
            $angsuranPokok = $pinjaman / $tenorbulan;
            $angsuranBunga = $pinjaman * ($bunga*$tenor/100) / $tenorbulan;
            $angsuranTotal = $angsuranBunga + $angsuranPokok;
            $jmlbunga = $angsuranBunga*$tenorbulan;
            $totalAngsuran = $pinjaman + $jmlbunga;

        // Tampilkan Data
            echo '<h4 class="mt-5">Data Anda</h4>';
            echo '<table class="table">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Harga Rumah</th>';
            echo '<th>Margin Bank</th>';
            echo '<th>Uang Muka (DP)</th>';
            echo '<th>Jangka Waktu (Tenor)</th>';
            echo '<th>Perhitungan Margin</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            echo '<tr>';
            echo "<td>Rp" . number_format($harga, 0, ',', '.') . "</td>";
            echo "<td>$bunga% / tahun</td>";
            echo "<td>Rp" . number_format($dp, 0, ',', '.') . "</td>";
            echo "<td>$tenor tahun</td>";
            echo "<td>$PerhitunganMargin</td>";
            echo '</tr>';
            echo '</tbody>';
            echo '</table>';

        // Tampilkan KPR
            echo '<h4 class="mt-5">KPR Anda</h4>';
            echo '<table class="table">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Angsuran per Bulan</th>';
            echo '<th>Plafon Pinjaman</th>';
            echo '<th>Total Bunga</th>';
            echo '<th>Total Angsuran</th>';
            echo '<th>Total Periode</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            $angsuran = number_format($angsuran_per_bulan, 0, ',', '.');
            $plafonpinjaman = number_format($pinjaman, 0, ',', '.');
            $totalbunga = number_format($jmlbunga, 0, ',', '.');
            $totalAngsur = number_format($totalAngsuran, 0, ',', '.');

            echo '<tr>';
            echo "<td>Rp $angsuran/bulan</td>";
            echo "<td>Rp $plafonpinjaman</td>";
            echo "<td>Rp $totalbunga</td>";
            echo "<td>Rp $totalAngsur</td>";
            echo "<td>$tenorbulan bulan</td>";
            echo '</tr>';

            echo '</tbody>';
            echo '</table>';

        // Tampilkan tabel angsuran
            echo '<h4 class="mt-5">Tabel Angsuran</h4>';
            echo '<table class="table">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Bulan</th>';
            echo '<th>Angsuran Pokok</th>';
            echo '<th>Angsuran Bunga</th>';
            echo '<th>Total Angsuran per bulan</th>';
            echo '<th>Sisa Angsuran</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
                
        for ($i = 1; $i <= $tenorbulan; $i++) {
            $sisa_pinjaman = ($pinjaman + $angsuranBunga*$tenorbulan) - $angsuranTotal*$i;

            echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>Rp" . number_format($angsuranPokok, 0, ',', '.') . "</td>";
            echo "<td>Rp" . number_format($angsuranBunga, 0, ',', '.') . "</td>";
            echo "<td>Rp" . number_format($angsuranTotal, 0, ',', '.') . "</td>";
            echo "<td>Rp" . number_format($sisa_pinjaman, 0, ',', '.') . "</td>";
            echo "</tr>";
        }

        echo '</tbody>';
        echo '</table>';
        }
        ?>
    </div>

</body>
</html>