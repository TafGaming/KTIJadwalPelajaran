<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Edit Mata Pelajaran</div>
                <div class="col-4">
                    <a href="?m=xiu2edit&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>
            <?php
            include_once('config.php');
            $id  = $_GET['id'];
            $sql = "SELECT * FROM mapelxiu2 WHERE id='$id'";
            $result = mysqli_query($con, $sql);
            $r = mysqli_fetch_assoc($result);
            ?>

            <div class="card-body">
                <form action="?m=xiu2edit&s=update" method="post">
                <div class="mb-3">
                        <label for="hari">Hari:</label>
                        <select name="hari" id="hari" class="form-control" required>
                            <option value="Senin" <?= $r['hari'] == "Senin" ? 'selected' : '' ?>>Senin</option>
                            <option value="Selasa" <?= $r['hari'] == "Selasa" ? 'selected' : '' ?>>Selasa</option>
                            <option value="Rabu" <?= $r['hari'] == "Rabu" ? 'selected' : '' ?>>Rabu</option>
                            <option value="Kamis" <?= $r['hari'] == "Kamis" ? 'selected' : '' ?>>Kamis</option>
                            <option value="Jumat" <?= $r['hari'] == "Jumat" ? 'selected' : '' ?>>Jumat</option>
                            <option value="Sabtu" <?= $r['hari'] == "Sabtu" ? 'selected' : '' ?>>Sabtu</option>
                        </select>
                        </div>
                    <div class="mb-3">
                        <label for="mapel">Nama Mata Pelajaran:</label>
                        <select name="mapel" id="mapel" class="form-control" required>
                            <option value="Agama" <?= $r['mapel'] == "Agama" ? 'selected' : '' ?>>Agama</option>
                            <option value="Bahasa Inggris" <?= $r['mapel'] == "Bahasa Inggris" ? 'selected' : '' ?>>Bahasa Inggris</option>
                            <option value="Bahasa Indonesia" <?= $r['mapel'] == "Bahasa Indonesia" ? 'selected' : '' ?>>Bahasa Indonesia</option>
                            <option value="Bahasa Jepang" <?= $r['mapel'] == "Bahasa Jepang" ? 'selected' : '' ?>>Bahasa Jepang</option>
                            <option value="Bahasa Sunda" <?= $r['mapel'] == "Bahasa Sunda" ? 'selected' : '' ?>>Bahasa Sunda</option>
                            <option value="Biologi" <?= $r['mapel'] == "Biologi" ? 'selected' : '' ?>>Biologi</option>
                            <option value="Ekonomi" <?= $r['mapel'] == "Ekonomi" ? 'selected' : '' ?>>Ekonomi</option>
                            <option value="Fisika" <?= $r['mapel'] == "Fisika" ? 'selected' : '' ?>>Fisika</option>
                            <option value="Geografi" <?= $r['mapel'] == "Geografi" ? 'selected' : '' ?>>Geografi</option>
                            <option value="Informatika" <?= $r['mapel'] == "Informatika" ? 'selected' : '' ?>>Informatika</option>
                            <option value="Kimia" <?= $r['mapel'] == "Kimia" ? 'selected' : '' ?>>Kimia</option>
                            <option value="Matematika" <?= $r['mapel'] == "Matematika" ? 'selected' : '' ?>>Matematika</option>
                            <option value="PKN" <?= $r['mapel'] == "PKN" ? 'selected' : '' ?>>PKN</option>
                            <option value="Sejarah" <?= $r['mapel'] == "Sejarah" ? 'selected' : '' ?>>Sejarah</option>
                            <option value="Sosiologi" <?= $r['mapel'] == "Sosiologi" ? 'selected' : '' ?>>Sosiologi</option>
                            <option value="Student Day" <?= $r['mapel'] == "Student Day" ? 'selected' : '' ?>>Student Day</option>
                            <option value="PJOK" <?= $r['mapel'] == "PJOK" ? 'selected' : '' ?>>PJOK</option>
                            <option value="P5" <?= $r['mapel'] == "P5" ? 'selected' : '' ?>>P5</option>
                            <option value="BBQ" <?= $r['mapel'] == "BBQ" ? 'selected' : '' ?>>BBQ</option>
                            <option value="EC" <?= $r['mapel'] == "EC" ? 'selected' : '' ?>>EC</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jam">Jam Mata Pelajaran:</label>
                        <select name="jam" id="jam" class="form-control" required>
                            <option value="07.15 - 08.10" <?= $r['jam'] == "07.15 - 08.10" ? 'selected' : '' ?>>Jam 1: 07.15 - 08.10</option>
                            <option value="08.10 - 08.50" <?= $r['jam'] == "08.10 - 08.50" ? 'selected' : '' ?>>Jam 2: 08.10 - 08.50</option>
                            <option value="08.50 - 09.30" <?= $r['jam'] == "08.50 - 09.30" ? 'selected' : '' ?>>Jam 3: 08.50 - 09.30</option>
                            <option value="09.30 - 10.10" <?= $r['jam'] == "09.30 - 10.10" ? 'selected' : '' ?>>Jam 4: 09.30 - 10.10</option>
                            <option value="10.40 - 11.20" <?= $r['jam'] == "10.40 - 11.20" ? 'selected' : '' ?>>Jam 5: 10.40 - 11.20</option>
                            <option value="11.20 - 12.00" <?= $r['jam'] == "11.20 - 12.00" ? 'selected' : '' ?>>Jam 6: 11.20 - 12.00</option>
                            <option value="13.00 - 13.40" <?= $r['jam'] == "13.00 - 13.40" ? 'selected' : '' ?>>Jam 7: 13.00 - 13.40</option>
                            <option value="13.40 - 14.20" <?= $r['jam'] == "13.40 - 14.20" ? 'selected' : '' ?>>Jam 8: 13.40 - 14.20</option>
                            <option value="14.20 - 15.00" <?= $r['jam'] == "14.20 - 15.00" ? 'selected' : '' ?>>Jam 9: 14.20 - 15.00</option>
                            <option value="15.30 - 16.30" <?= $r['jam'] == "15.30 - 16.30" ? 'selected' : '' ?>>Tambahan: 15.30 - 16.30</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="gurumapel" value="<?= $r['gurumapel']; ?>" class="form-control" placeholder="Guru Mata Pelajaran" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?= $r['id']; ?>">
                        <input type="reset" class="btn btn-secondary">&nbsp;
                        <input type="submit" value="Update" name="update" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>