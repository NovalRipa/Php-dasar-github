
<?php
$mahasiswaJSON = '{
  "1":{
    "NIM": 11124561,
    "Nama": "Ripa Noval Kh",
    "Umur": "16 Tahun",
    "Email": "Ripa Noval Kh@gmail.com"
  },
  "2":{
    "NIM": 12124562,
    "Nama": "Ripa",
    "Umur": "17 Tahun",
    "Email": "Ripa@gmail.com"
  },
  "3":{
    "NIM": 13124563,
    "Nama": "Rip",
    "Umur": "17 Tahun",
    "Email": "Rip@gmail.com"
  },
  "4":{
    "NIM": 14124564,
    "Nama": "Noval",
    "Umur": "18 Tahun",
    "Email": "Noval@gmail.com"
  },
  "5":{
    "NIM": 15124565,
    "Nama": "KH",
    "Umur": "16 Tahun",
    "Email": "KH@gmail.com"
  }
}';

$listmahasiswa = json_decode($mahasiswaJSON);
echo "<b>1. DANNY INDRA GUNAWAN</b> <p>";
foreach ($listmahasiswa as $key => $san) {
  echo "NIM: {$san->NIM} <br>";
  echo "Nama Mahasiswa: {$san->Nama} <br>";
  echo "Umur: {$san->Umur} <br>";
  echo "Email: {$san->Email} <p>";
}

$mahasiswaJSON2 = '{
    "1":{
      "NIM": 21124561,
      "Nama": "Rio",
      "Umur": "16 Tahun",
      "Email": "Rio@gmail.com"
    },
    "2":{
      "NIM": 22124562,
      "Nama": "Amel",
      "Umur": "17 Tahun",
      "Email": "amel@gmail.com"
    },
    "3":{
      "NIM": 23124563,
      "Nama": "Akabar",
      "Umur": "18 Tahun",
      "Email": "Akabar@gmail.com"
    },
    "4":{
      "NIM": 24124564,
      "Nama": "Kidam",
      "Umur": "16 Tahun",
      "Email": "Kidam@gmail.com"
    },
    "5":{
      "NIM": 25124565,
      "Nama": "Priyadi",
      "Umur": "17 Tahun",
      "Email": "Priyadi@gmail.com"
    }
  }';

  $listmahasiswa = json_decode($mahasiswaJSON2);
echo "<b>2. MUHAMMAD SABAR</b> <p>";
foreach ($listmahasiswa as $key => $san) {
  echo "NIM: {$san->NIM} <br>";
  echo "Nama Mahasiswa: {$san->Nama} <br>";
  echo "Umur: {$san->Umur} <br>";
  echo "Email: {$san->Email} <p>";
}

$mahasiswaJSON3 = '{
    "1":{
      "NIM": 31124561,
      "Nama": "Silvi",
      "Umur": "17 Tahun",
      "Email": "Silvi@gmail.com"
    },
    "2":{
      "NIM": 32124562,
      "Nama": "Dina",
      "Umur": "17 Tahun",
      "Email": "Dina@gmail.com"
    },
    "3":{
      "NIM": 33124563,
      "Nama": "Kekey",
      "Umur": "18 Tahun",
      "Email": "Kekey@gmail.com"
    },
    "4":{
      "NIM": 34124564,
      "Nama": "Aldi",
      "Umur": "17 Tahun",
      "Email": "Aldi@gmail.com"
    },
    "5":{
      "NIM": 35124565,
      "Nama": "Altaf",
      "Umur": "18 Tahun",
      "Email": "Altaf@gmail.com"
    }
  }';

  $listmahasiswa = json_decode($mahasiswaJSON3);
echo "<b>3. TARSINAH SUMARNI</b> <p>";
foreach ($listmahasiswa as $key => $san) {
  echo "NIM: {$san->NIM} <br>";
  echo "Nama Mahasiswa: {$san->Nama} <br>";
  echo "Umur: {$san->Umur} <br>";
  echo "Email: {$san->Email} <p>";
}

$mahasiswaJSON4 = '{
    "1":{
      "NIM": 41124561,
      "Nama": "Nikita",
      "Umur": "16 Tahun",
      "Email": "Nikits23@gmail.com"
    },
    "2":{
      "NIM": 42124562,
      "Nama": "Rifa",
      "Umur": "19 Tahun",
      "Email": "Rifa@gmail.com"
    },
    "3":{
      "NIM": 43124563,
      "Nama": "Hasan",
      "Umur": "18 Tahun",
      "Email": "Hasan@gmail.com"
    },
    "4":{
      "NIM": 44124564,
      "Nama": "Genta",
      "Umur": "17 Tahun",
      "Email": "Akbar@gmail.com"
    },
    "5":{
      "NIM": 45124565,
      "Nama": "Firman",
      "Umur": "17 Tahun",
      "Email": "Firman@gmail.com"
    }
  }';

  $listmahasiswa = json_decode($mahasiswaJSON4);
echo "<b>4. SAEPUDIN</b> <p>";
foreach ($listmahasiswa as $key => $san) {
  echo "NIM: {$san->NIM} <br>";
  echo "Nama Mahasiswa: {$san->Nama} <br>";
  echo "Umur: {$san->Umur} <br>";
  echo "Email: {$san->Email} <p>";
}