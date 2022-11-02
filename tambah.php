<html>
    <head>
</head>
<body>
    <h1>TARIK TARIF PARKIR</h1>
    <form action="proses-tambah.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for ="jenis_kendaraan">jenis_kendaraan:</label>
                    <select name="jenis_kendaraan">
                        <option value="motor">Motor</option>
                        <option value="mobil">Mobil</option>
                    </select>
                <p>
                    <label for ="jumlah_jam_parkir">jumlah_jam_parkir:</label>
                    <input type="number" name="jumlah_jam_parkir"/>
                </p>
                <p>
                    <label for ="total_biaya_parkir">total_biaya_parkir:</label>
                    <input type="number" name="total_biaya_parkir"/>
                </p>
                Nilai Pertama <input type="text" name="">
<p>
<input type="submit" value="tambah" name="tambah"/>
</p>
</fieldset>
</form>
</body>
</html>

