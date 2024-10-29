<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Data Mata Pelajaran</div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Hari</th>
                            <th>Mata Pelajaran</th>
                            <th>Jam Mata Pelajaran</th>
                            <th>Nama Guru</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once('config.php');
                        $sql = "SELECT * FROM  `mapelxiu2` ORDER BY mapel ASC";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            $no = 1;
                            while ($r = mysqli_fetch_assoc($result)) {
                                echo '<tr>
                                    <td>' . $no . '</td>
                                    <td>' . $r['hari'] . '</td>
                                    <td>' . $r['mapel'] . '</td>
                                    <td>' . $r['jam'] . '</td>
                                    <td>' . $r['gurumapel'] . '</td>
                                </tr>';
                                $no++;
                            }
                        } else {
                            echo "<tr>
                                <td colspan='9' align='center'>Data Kosong</td>
                                </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>