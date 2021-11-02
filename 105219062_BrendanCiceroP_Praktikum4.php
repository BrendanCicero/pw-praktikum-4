<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 4</title>
</head>
<body>
    <?php

    //Class Parent dan Abstract
    abstract class Karyawan{
        public $nama;
        public $ttl;
        public $gender;
        public $level;
        public $status;
        public $gaji;

        public function __construct($nama, $ttl, $gender, $level){
            $this->nama = $nama;
            $this->ttl = $ttl;
            $this->gender = $gender;
            $this->level = $level;
        }

        abstract function gajiKaryawan();
        
    }

    //Class Child Full-time
    class Fulltime extends Karyawan{
        public $status = 'Fulltime';

        public function gajiKaryawan(){
            if($this->level=='Junior'){
                $this->gaji = 2000000;
                return $this->gaji;
            }
            elseif ($this->level=='Amateur') {
                $this->gaji = 3500000;
                return $this->gaji;
            }
            elseif($this->level=='Senior'){
                $this->gaji = 5000000;
                return $this->gaji;
            }
        }
    }

    //Class Child Part-time
    class Parttime extends Karyawan{
        public $status = 'Parttime';
        
        public function gajiKaryawan(){
            if($this->level=='Junior'){
                $this->gaji = 2000000/2;
                return $this->gaji;
            }
            elseif ($this->level=='Amateur') {
                $this->gaji = 3500000/2;
                return $this->gaji;
            }
            elseif($this->level=='Senior'){
                $this->gaji = 5000000/2;
                return $this->gaji;
            }
        }
    }

    $karyawan[0] = new Fulltime('Sulistyo', 'Bogor, 12 Desember 2000', 'Laki-laki', 'Amateur');
    $karyawan[1] = new Parttime('Badu', 'Aceh, 5 April 2001', 'Laki-laki', 'Senior');
    $karyawan[2] = new Fulltime('Suminten', 'Riau, 28 Oktober 2000', 'Perempuan', 'Junior');
    $karyawan[3] = new Parttime('Cukri', 'Manado, 3 Juni 2001', 'Laki-laki', 'Amateur');
    $karyawan[4] = new Fulltime('Zaenab', 'Bali, 30 Mei 2000', 'Perempuan', 'Senior');
    $karyawan[5] = new Parttime('Jubaedah', 'Malang, 25 Agustus 2000', 'Perempuan', 'Junior');

    ?>
    
    <h1 align='center' class="judul">Tabel Data List Karyawan</h1>
    <h2 align='center' class='judul'>All</h2>
    <table border=2 align="center">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tempat Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Level Karyawan</th>
            <th>Status</th>
            <th>Gaji Karyawan</th>
        </tr>

        <?php for($i = 0; $i < 6; $i++){ ?>
            <tr>
                <td><?php echo $i+1 ?></td>
                <td><?php echo $karyawan[$i]->nama ?></td>
                <td><?php echo $karyawan[$i]->ttl ?></td>
                <td><?php echo $karyawan[$i]->gender ?></td>
                <td><?php echo $karyawan[$i]->level ?></td>
                <td><?php echo $karyawan[$i]->status ?></td>
                <td><?php echo $karyawan[$i]->gajiKaryawan() ?></td>
            </tr>
        <?php } ?>
    </table>
    <br><br>
    <h2 align='center' class='judul'>Fulltime</h2>
    <table border=2 align='center'>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tempat Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Level Karyawan</th>
            <th>Status</th>
            <th>Gaji Karyawan</th>
        </tr>

        <?php $j = 1;
        for($i = 0; $i < 6; $i++){ ?>
            <?php if($karyawan[$i]->status == 'Fulltime'){ ?>
                <tr>
                    <td><?php echo $j;
                    $j++; ?></td>
                    <td><?php echo $karyawan[$i]->nama ?></td>
                    <td><?php echo $karyawan[$i]->ttl ?></td>
                    <td><?php echo $karyawan[$i]->gender ?></td>
                    <td><?php echo $karyawan[$i]->level ?></td>
                    <td><?php echo $karyawan[$i]->status ?></td>
                    <td><?php echo $karyawan[$i]->gajiKaryawan() ?></td>
                </tr>
            <?php } ?>
        <?php } ?>
    </table>
    <br><br>
    <h2 align='center' class='judul'>Parttime</h2>
    <table border=2 align='center'>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tempat Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Level Karyawan</th>
            <th>Status</th>
            <th>Gaji Karyawan</th>
        </tr>

        <?php $j = 1;
        for($i = 0; $i < 6; $i++){ ?>
            <?php if($karyawan[$i]->status == 'Parttime'){ ?>
                <tr>
                    <td><?php echo $j;
                    $j++; ?></td>
                    <td><?php echo $karyawan[$i]->nama ?></td>
                    <td><?php echo $karyawan[$i]->ttl ?></td>
                    <td><?php echo $karyawan[$i]->gender ?></td>
                    <td><?php echo $karyawan[$i]->level ?></td>
                    <td><?php echo $karyawan[$i]->status ?></td>
                    <td><?php echo $karyawan[$i]->gajiKaryawan() ?></td>
                </tr>
            <?php } ?>
        <?php } ?>
    </table>
</body>
</html>