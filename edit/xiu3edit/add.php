<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Mata Pelajaran</div>
                <div class="col-4">
                    <a href="?m=xiu3edit&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>

            <div class="card-body">
                <form action="?m=xiu3edit&s=save" method="post">
                <div class="card-body">
                    <form action="?m=xiu1edit&s=save" method="post">
                        <div class="mb-3">
                            <label for="hari">Hari:</label>
                            <select name="hari" id="hari" class="form-control" required>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                                <option value="Sabtu">Sabtu</option>
                            </select>
                    </div>
                    <div class="mb-3">
                        <label for="mapel">Nama Mata Pelajaran:</label>
                        <select name="mapel" id="mapel" class="form-control" required>
                            <option value="Agama">Agama</option>
                            <option value="Bahasa Inggris">Bahasa Inggris</option>
                            <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                            <option value="Bahasa Jepang">Bahasa Jepang</option>
                            <option value="Bahasa Sunda">Bahasa Sunda</option>
                            <option value="Biologi">Biologi</option>
                            <option value="Ekonomi">Ekonomi</option>
                            <option value="Fisika">Fisika</option>
                            <option value="Geografi">Geografi</option>
                            <option value="Informatika">Informatika</option>
                            <option value="Kimia">Kimia</option>
                            <option value="Matematika">Matematika</option>
                            <option value="PKN">PKN</option>
                            <option value="Sejarah">Sejarah</option>
                            <option value="Sosiologi">Sosiologi</option>
                            <option value="Student Day">Student Day</option>
                            <option value="PJOK">PJOK</option>
                            <option value="P5">P5</option>
                            <option value="BBQ">BBQ</option>
                            <option value="EC">EC</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jam">Jam Mata Pelajaran:</label>
                        <select name="jam" id="jam" class="form-control" required>
                            <option value="07.15 - 08.10">Jam 1: 07.15 - 08.10</option>
                            <option value="08.10 - 08.50">Jam 2: 08.10 - 08.50</option>
                            <option value="08.50 - 09.30">Jam 3: 08.50 - 09.30</option>
                            <option value="09.30 - 10.10">Jam 4: 09.30 - 10.10</option>
                            <option value="10.40 - 11.20">Jam 5: 10.40 - 11.20</option>
                            <option value="11.20 - 12.00">Jam 6: 11.20 - 12.00</option>
                            <option value="13.00 - 13.40">Jam 7: 13.00 - 13.40</option>
                            <option value="13.40 - 14.20">Jam 8: 13.40 - 14.20</option>
                            <option value="14.20 - 15.00">Jam 9: 14.20 - 15.00</option>
                            <option value="15.30 - 16.30">Tambahan: 15.30 - 16.30</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="gurumapel" class="form-control" placeholder="Guru Mata Pelajaran" required>
                    </div>
                    <div class="mb-3">
                        <input type="reset" class="btn btn-secondary">
                        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>