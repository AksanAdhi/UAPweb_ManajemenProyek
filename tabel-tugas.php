<?php
// Include file koneksi
include 'koneksi.php';

// Query untuk mendapatkan data dari tabel daftar_tugas dan daftar_anggota menggunakan JOIN
$sql = "SELECT dt.idTugas, da.namaAnggota, dt.namaTugas, dt.tanggalMulai, dt.tanggalSelesai
        FROM daftar_tugas dt
        JOIN daftar_anggota da ON dt.idAnggota = da.idAnggota";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>tabel-tugas</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="tabel-tugas.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.11.6, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="tabel-tugas">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en">
    <section class="u-clearfix u-gradient u-section-1" id="sec-0d67">
      <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-size-14 u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1">
                <a href="#" class="u-border-none u-btn u-btn-round u-button-style u-custom-font u-heading-font u-radius u-text-body-color u-text-hover-black u-white u-btn-1"><span class="u-file-icon u-icon u-icon-1"><img src="images/6315417.png" alt=""></span>&nbsp;SISMANPRO&nbsp; 
                </a>
                <a href="Dashboard.html" class="u-border-0 u-btn u-button-style u-hover-grey-5 u-none u-text-grey-60 u-text-hover-black u-btn-2"><span class="u-file-icon u-icon u-text-palette-1-dark-1 u-icon-2"><img src="images/31.png" alt=""></span>&nbsp;&nbsp;Dashboard 
                </a>
                <a href="#" class="u-border-0 u-btn u-btn-round u-button-style u-custom-font u-heading-font u-hover-grey-5 u-none u-radius u-text-grey-60 u-text-hover-black u-btn-3"><span class="u-file-icon u-icon u-text-palette-1-dark-1 u-icon-3"><img src="images/32.png" alt=""></span>&nbsp;&nbsp;Keluar
                </a>
                <div class="u-absolute-hcenter u-border-1 u-border-grey-15 u-line u-line-horizontal u-line-1"></div>
                <a href="tabel-proyek.php" class="u-border-none u-btn u-button-style u-hover-grey-5 u-none u-text-grey-60 u-text-hover-black u-btn-4"><span class="u-file-icon u-icon u-text-palette-1-dark-1 u-icon-4"><img src="images/33.png" alt=""></span>&nbsp;&nbsp;Proyek
                </a>
                <a href="tabel-tim.php" class="u-border-none u-btn u-button-style u-hover-grey-5 u-none u-text-grey-60 u-text-hover-black u-btn-5"><span class="u-file-icon u-icon u-text-palette-1-dark-1 u-icon-5"><img src="images/34.png" alt=""></span>&nbsp;&nbsp;Tim
                </a>
                <a href="tabel-anggota.php" class="u-border-0 u-btn u-button-style u-hover-grey-5 u-none u-text-grey-60 u-text-hover-black u-btn-6"><span class="u-file-icon u-icon u-text-palette-1-dark-1 u-icon-6"><img src="images/35.png" alt=""></span>&nbsp;&nbsp;Anggota
                </a>
                <a href="tabel-tugas.php" class="u-border-0 u-btn u-button-style u-grey-5 u-hover-grey-5 u-text-black u-text-hover-black u-btn-7"><span class="u-file-icon u-icon u-text-palette-1-dark-1"><img src="images/36.png" alt=""></span> &nbsp;&nbsp;Tugas
                </a>
                <a href="tabel-jadwal.php" class="u-border-0 u-btn u-button-style u-hover-grey-5 u-none u-text-grey-60 u-text-hover-black u-btn-8"><span class="u-file-icon u-icon u-text-palette-1-dark-1 u-icon-8"><img src="images/37.png" alt=""></span> &nbsp;&nbsp;Jadwal
                </a>
                <a href="#" class="u-border-0 u-btn u-button-style u-hover-grey-5 u-none u-text-grey-60 u-text-hover-black u-btn-9"><span class="u-file-icon u-icon u-text-palette-1-dark-1 u-icon-9"><img src="images/64494-193cbee9.png" alt=""></span> &nbsp;&nbsp;Tentang Kami
                </a>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-size-46 u-layout-cell-2">
              <div class="u-container-layout u-valign-middle u-container-layout-2">
                <div class="custom-expanded u-container-style u-custom-color-2 u-group u-radius u-shape-round u-group-1">
                  <div class="u-container-layout u-container-layout-3">
                    <div class="u-absolute-hcenter u-border-1 u-border-grey-15 u-expanded-width u-line u-line-horizontal u-line-2"></div>
                    <div class="u-container-style u-group u-shape-rectangle u-group-2">
                      <div class="u-container-layout">
                        <h4 class="u-custom-font u-text u-text-font u-text-1">admin7</h4><span class="u-file-icon u-icon u-text-grey-90 u-icon-10"><img src="images/64572-b17d9615.png" alt=""></span>
                        <h4 class="u-custom-font u-text u-text-font u-text-2">admin</h4>
                      </div>
                    </div>
                    <h4 class="u-custom-font u-text u-text-font u-text-3">Selamat datang,</h4>
                    <h4 class="u-custom-font u-text u-text-default u-text-font u-text-4">admin7!&nbsp;<span class="u-file-icon u-icon u-icon-11"><img src="images/599527.png" alt=""></span>
                    </h4>
                    <h3 class="u-text u-text-black u-text-5">Tugas</h3>
                    <form action="#" method="get" class="u-border-1 u-border-grey-30 u-radius u-search u-search-left u-white u-search-1">
                      <button class="u-search-button" type="submit">
                        <span class="u-search-icon u-spacing-10">
                          <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966"><use xlink:href="#svg-e334"></use></svg>
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-e334" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
                        </span>
                      </button>
                      <input class="u-custom-font u-heading-font u-search-input" type="search" name="search" value="" placeholder="Search">
                    </form>
                    <a href="#carousel_b24e" class="u-border-0 u-btn u-button-style u-dialog-link u-palette-1-base u-btn-10"><span class="u-file-icon u-icon u-text-white u-icon-12"><img src="images/2997933-1e106104.png" alt=""></span>&nbsp;Tambah​ Tugas
                    </a>

                    <div class="custom-expanded u-table u-table-responsive u-table-1">
        <table class="u-table-entity">
            <colgroup>
                <col width="6.6%">
                <col width="26.7%">
                <col width="37.2%">
                <col width="14.9%">
                <col width="14.6%">
            </colgroup>
            <thead class="u-align-center u-table-header u-table-header-1">
                <tr style="height: 45px;">
                    <th class="u-border-1 u-border-grey-dark-1 u-table-cell">ID</th>
                    <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Nama</th>
                    <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Tugas</th>
                    <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Tanggal<br>Mulai</th>
                    <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Tanggal<br>Selesai</th>
                </tr>
            </thead>
            <tbody class="u-align-center u-table-body u-table-body-1">
                <?php
                if ($result->num_rows > 0) {
                    // Menampilkan data ke dalam tabel
                    while($row = $result->fetch_assoc()) {
                        echo "<tr style='height: 46px;'>";
                        echo "<td class='u-border-1 u-border-grey-30 u-table-cell'>" . $row["idTugas"] . "</td>";
                        echo "<td class='u-border-1 u-border-grey-30 u-table-cell'>" . $row["namaAnggota"] . "</td>";
                        echo "<td class='u-border-1 u-border-grey-30 u-table-cell'>" . $row["namaTugas"] . "</td>";
                        echo "<td class='u-border-1 u-border-grey-30 u-table-cell'>" . $row["tanggalMulai"] . "</td>";
                        echo "<td class='u-border-1 u-border-grey-30 u-table-cell'>" . $row["tanggalSelesai"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr style='height: 46px;'><td colspan='5' class='u-border-1 u-border-grey-30 u-table-cell'>Tidak ada data</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>


                    <a href="#carousel_f522" class="u-border-0 u-btn u-button-style u-dialog-link u-palette-1-base u-btn-11"><span class="u-file-icon u-icon u-text-white u-icon-13"><img src="images/1828911-c7f81fa6.png" alt=""></span>&nbsp;Edit​ Tugas
                    </a>
                    <a href="#carousel_5eb3" class="u-border-0 u-btn u-button-style u-dialog-link u-palette-1-base u-btn-12"><span class="u-file-icon u-icon u-text-white u-icon-14"><img src="images/3405244-93167e14.png" alt=""></span>&nbsp;Hapus Tugas
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <section class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-valign-middle u-dialog-section-8" id="carousel_b24e">
      <div class="u-align-center u-container-style u-dialog u-gradient u-radius u-shape-round u-dialog-1">
        <div class="u-container-layout u-valign-middle u-container-layout-1">
          <h4 class="u-align-center u-text u-text-default u-text-1">Tambah Tugas</h4>
          <div class="custom-expanded u-border-2 u-border-palette-5-base u-custom-color-2 u-form u-radius u-form-1">
            <form action="tambah_tugas.php" class="u-clearfix u-form-spacing-12 u-form-vertical u-inner-form" source="email" name="form" style="padding: 20px;">

              <div class="u-form-group u-form-select u-label-top u-form-group-2">
                <label for="select-882b" class="u-custom-font u-heading-font u-label u-label-2">Nama Anggota</label>
                <div class="u-form-select-wrapper">
                <select id="select-882b" name="idAnggota" class="u-input u-input-rectangle u-radius u-input-2" required="required">
                <?php
                include 'koneksi.php';

                // Query to fetch anggota options
                $sql = "SELECT idAnggota, namaAnggota FROM daftar_anggota";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['idAnggota'] . "'>" . $row['namaAnggota'] . "</option>";
                  }
                }

                $conn->close();
                ?>
              </select>
                  <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
                </div>
              </div>
              <div class="u-form-group u-label-top u-form-group-3">
                <label for="text-b684" class="u-custom-font u-heading-font u-label u-label-3">Tugas</label>
                <input type="text" placeholder="Masukkan tugas" id="text-b684" name="namaTugas" class="u-input u-input-rectangle u-radius u-input-3" required="required">
              </div>
              <div class="u-form-date u-form-group u-form-partition-factor-2 u-label-top u-form-group-4">
  <label for="text-8f19" class="u-custom-font u-heading-font u-label u-label-4">Tanggal Mulai</label>
  <input type="text" id="text-8f19" name="tanggalMulai" class="u-input u-input-rectangle u-radius u-input-4" data-date-format="yyyy/mm/dd" placeholder="YYYY/MM/DD" required="required">
</div>
<div class="u-form-date u-form-group u-form-partition-factor-2 u-label-top u-form-group-5">
  <label for="text-8a13" class="u-custom-font u-heading-font u-label u-label-5">Tanggal Selesai</label>
  <input type="text" placeholder="YYYY/MM/DD" id="text-8a13" name="tanggalSelesai" class="u-input u-input-rectangle u-radius u-input-5" data-date-format="yyyy/mm/dd" required="required">
</div>

              <div class="u-align-center u-form-group u-form-submit u-label-top">
                <input type="submit" value="submit" class="u-form-control-hidden">
                <a href="tabel-tugas.php" onclick="location.reload();" class="u-border-0 u-btn u-btn-submit u-button-style u-white u-btn-1">Kirim</a>
              </div>
             
            </form>
          </div>
        </div><button class="u-dialog-close-button u-icon u-text-grey-40 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-efe9"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-efe9"><rect x="7" y="0" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="2" height="16"></rect><rect x="0" y="7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="16" height="2"></rect></svg></button>
      </div>
    </section><style>.u-dialog-section-8 .u-dialog-1 {
  width: 678px;
  min-height: 592px;
  height: auto;
  --radius: 15px;
  background-image: linear-gradient(150deg, #fefaf6, #dee5ff);
  margin: 60px auto;
}

.u-dialog-section-8 .u-container-layout-1 {
  padding: 30px;
}

.u-dialog-section-8 .u-text-1 {
  font-weight: 700;
  font-size: 1.625rem;
  margin: 0 auto;
}

.u-dialog-section-8 .u-form-1 {
  height: 455px;
  box-shadow: 0px 0px 4px 0px rgba(185,193,204,1);
  --radius: 7px;
  background-image: none;
  width: 524px;
  margin: 26px auto 0;
}

.u-dialog-section-8 .u-label-1 {
  font-weight: 700;
}

.u-dialog-section-8 .u-input-1 {
  --radius: 7px;
}

.u-dialog-section-8 .u-form-group-2 {
  margin-left: 0;
}

.u-dialog-section-8 .u-label-2 {
  font-weight: 700;
}

.u-dialog-section-8 .u-input-2 {
  --radius: 7px;
}

.u-dialog-section-8 .u-form-group-3 {
  margin-left: 0;
}

.u-dialog-section-8 .u-label-3 {
  font-weight: 700;
}

.u-dialog-section-8 .u-input-3 {
  --radius: 7px;
}

.u-dialog-section-8 .u-form-group-4 {
  margin-left: 0;
}

.u-dialog-section-8 .u-label-4 {
  font-weight: 700;
}

.u-dialog-section-8 .u-input-4 {
  --radius: 7px;
}

.u-dialog-section-8 .u-form-group-5 {
  margin-left: 0;
}

.u-dialog-section-8 .u-label-5 {
  font-weight: 700;
}

.u-dialog-section-8 .u-input-5 {
  --radius: 7px;
}

.u-dialog-section-8 .u-btn-1 {
  background-image: none;
  box-shadow: 0px 0px 4px 0px rgba(185,193,204,1);
}

.u-dialog-section-8 .u-icon-1 {
  width: 20px;
  height: 20px;
}

@media (max-width: 1199px) {
  .u-dialog-section-8 .u-dialog-1 {
    width: 678px;
  }

  .u-dialog-section-8 .u-form-1 {
    width: 524px;
  }
}

@media (max-width: 767px) {
  .u-dialog-section-8 .u-dialog-1 {
    width: 540px;
  }

  .u-dialog-section-8 .u-container-layout-1 {
    padding-left: 10px;
    padding-right: 10px;
  }

  .u-dialog-section-8 .u-form-1 {
    width: 520px;
    margin-left: 0;
    margin-right: 0;
  }
}

@media (max-width: 575px) {
  .u-dialog-section-8 .u-dialog-1 {
    width: 340px;
  }

  .u-dialog-section-8 .u-form-1 {
    width: 320px;
    margin-left: 0;
    margin-right: 0;
  }
}</style>

<section class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-valign-middle u-dialog-section-14" id="carousel_f522">
      <div class="u-align-center u-container-style u-dialog u-gradient u-radius u-shape-round u-dialog-1">
        <div class="u-container-layout u-valign-middle u-container-layout-1">
          <h4 class="u-align-center u-text u-text-default u-text-1">Edit Tugas</h4>
          <div class="custom-expanded u-border-2 u-border-palette-5-base u-custom-color-2 u-form u-radius u-form-1">
            <form action="edit_tugas.php" class="u-clearfix u-form-spacing-12 u-form-vertical u-inner-form" source="email" name="form" style="padding: 20px;">
              <div class="u-form-group u-form-name u-label-top">
                <label for="name-04ca" class="u-custom-font u-heading-font u-label u-label-1">ID</label>
                <select id="idTugas" name="idTugas" class="u-input u-input-rectangle u-radius u-input-3" required>
                                <?php

                                include 'koneksi.php';
                                // Fetch team options from database
                                $sql_tugas = "SELECT idTugas, namaTugas FROM daftar_tugas";
                                $result_tugas = $conn->query($sql_tugas);

                                if ($result_tugas->num_rows > 0) {
                                    while ($row_tugas = $result_tugas->fetch_assoc()) {
                                        $selected = ($row_tugas['idTugas'] == $row['idTugas']) ? 'selected' : '';
                                        echo "<option value='" . $row_tugas['idTugas'] . "' $selected>" . $row_tugas['namaTugas'] . "</option>";
                                    }
                                } else {
                                    echo "<option value=''>Tidak ada tugas</option>";
                                }
                                ?>
                            </select>
              </div>
              <div class="u-form-group u-form-select u-label-top u-form-group-2">
                <label for="select-882b" class="u-custom-font u-heading-font u-label u-label-2">Nama Anggota</label>
                <div class="u-form-select-wrapper">
                <select id="idAnggota" name="idAnggota" class="u-input u-input-rectangle u-radius u-input-2" required>
                                <?php

include 'koneksi.php';
                                // Fetch member options from database
                                $sql_anggota = "SELECT idAnggota, namaAnggota FROM daftar_anggota";
                                $result_anggota = $conn->query($sql_anggota);

                                if ($result_anggota->num_rows > 0) {
                                    while ($row_anggota = $result_anggota->fetch_assoc()) {
                                        $selected = ($row_anggota['idAnggota'] == $row['idAnggota']) ? 'selected' : '';
                                        echo "<option value='" . $row_anggota['idAnggota'] . "' $selected>" . $row_anggota['namaAnggota'] . "</option>";
                                    }
                                } else {
                                    echo "<option value=''>Tidak ada anggota</option>";
                                }
                                ?>
                            </select>
                  <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
                </div>
              </div>
              <div class="u-form-group u-label-top u-form-group-3">
                <label for="text-b684" class="u-custom-font u-heading-font u-label u-label-3">Tugas</label>
                <input type="text" placeholder="Masukkan tugas" id="text-b684" name="namaTugas" class="u-input u-input-rectangle u-radius u-input-3">
              </div>
              <div class="u-form-date u-form-group u-form-partition-factor-2 u-label-top u-form-group-4">
                <label for="text-8f19" class="u-custom-font u-heading-font u-label u-label-4">Tanggal Mulai</label>
                <input type="text" id="text-8f19" name="tanggalMulai" class="u-input u-input-rectangle u-radius u-input-4" data-date-format="dd/mm/yyyy" placeholder="DD/MM/YYYY">
              </div>
              <div class="u-form-date u-form-group u-form-partition-factor-2 u-label-top u-form-group-5">
                <label for="text-8a13" class="u-custom-font u-heading-font u-label u-label-5">Tanggal Selesai</label>
                <input type="text" placeholder="DD/MM/YYYY" id="text-8a13" name="tanggalSelesai" class="u-input u-input-rectangle u-radius u-input-5" data-date-format="dd/mm/yyyy">
              </div>
              <div class="u-align-center u-form-group u-form-submit u-label-top">
                <input type="submit" value="submit" class="u-form-control-hidden">
                <a href="#" class="u-border-0 u-btn u-btn-submit u-button-style u-white u-btn-1">Kirim</a>
              </div>
              <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
              <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
              <input type="hidden" value="" name="recaptchaResponse">
              <input type="hidden" name="formServices" value="d8203e9f-15ec-d0ac-5de7-a63c76739528">
            </form>
          </div>
        </div><button class="u-dialog-close-button u-icon u-text-grey-40 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-efe9"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-efe9"><rect x="7" y="0" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="2" height="16"></rect><rect x="0" y="7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="16" height="2"></rect></svg></button>
      </div>
    </section>
    
    <style>.u-dialog-section-14 .u-dialog-1 {
  width: 678px;
  min-height: 592px;
  height: auto;
  --radius: 15px;
  background-image: linear-gradient(150deg, #fefaf6, #dee5ff);
  margin: 60px auto;
}

.u-dialog-section-14 .u-container-layout-1 {
  padding: 30px;
}

.u-dialog-section-14 .u-text-1 {
  font-weight: 700;
  font-size: 1.625rem;
  margin: 0 auto;
}

.u-dialog-section-14 .u-form-1 {
  height: 455px;
  box-shadow: 0px 0px 4px 0px rgba(185,193,204,1);
  --radius: 7px;
  background-image: none;
  width: 524px;
  margin: 26px auto 0;
}

.u-dialog-section-14 .u-label-1 {
  font-weight: 700;
}

.u-dialog-section-14 .u-input-1 {
  --radius: 7px;
}

.u-dialog-section-14 .u-form-group-2 {
  margin-left: 0;
}

.u-dialog-section-14 .u-label-2 {
  font-weight: 700;
}

.u-dialog-section-14 .u-input-2 {
  --radius: 7px;
}

.u-dialog-section-14 .u-form-group-3 {
  margin-left: 0;
}

.u-dialog-section-14 .u-label-3 {
  font-weight: 700;
}

.u-dialog-section-14 .u-input-3 {
  --radius: 7px;
}

.u-dialog-section-14 .u-form-group-4 {
  margin-left: 0;
}

.u-dialog-section-14 .u-label-4 {
  font-weight: 700;
}

.u-dialog-section-14 .u-input-4 {
  --radius: 7px;
}

.u-dialog-section-14 .u-form-group-5 {
  margin-left: 0;
}

.u-dialog-section-14 .u-label-5 {
  font-weight: 700;
}

.u-dialog-section-14 .u-input-5 {
  --radius: 7px;
}

.u-dialog-section-14 .u-btn-1 {
  background-image: none;
  box-shadow: 0px 0px 4px 0px rgba(185,193,204,1);
}

.u-dialog-section-14 .u-icon-1 {
  width: 20px;
  height: 20px;
}

@media (max-width: 1199px) {
  .u-dialog-section-14 .u-dialog-1 {
    width: 678px;
  }

  .u-dialog-section-14 .u-form-1 {
    width: 524px;
  }
}

@media (max-width: 767px) {
  .u-dialog-section-14 .u-dialog-1 {
    width: 540px;
  }

  .u-dialog-section-14 .u-container-layout-1 {
    padding-left: 10px;
    padding-right: 10px;
  }

  .u-dialog-section-14 .u-form-1 {
    width: 520px;
    margin-left: 0;
    margin-right: 0;
  }
}

@media (max-width: 575px) {
  .u-dialog-section-14 .u-dialog-1 {
    width: 340px;
  }

  .u-dialog-section-14 .u-form-1 {
    width: 320px;
    margin-left: 0;
    margin-right: 0;
  }
}</style>

<section class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-valign-middle u-dialog-section-15" id="carousel_5eb3">
      <div class="u-align-center u-container-style u-dialog u-gradient u-radius u-shape-round u-dialog-1">
        <div class="u-container-layout u-valign-middle u-container-layout-1">
          <h4 class="u-align-center u-text u-text-default u-text-1">Hapus Tugas</h4>
          <div class="custom-expanded u-border-2 u-border-palette-5-base u-custom-color-2 u-form u-radius u-form-1">
            <form action="hapus_tugas.php" class="u-clearfix u-form-spacing-12 u-form-vertical u-inner-form" source="email" name="form" style="padding: 20px;">
              <div class="u-form-group u-form-select u-label-top u-form-group-1">
                <label for="select-000e" class="u-custom-font u-heading-font u-label u-label-1">ID</label>
                <div class="u-form-select-wrapper">
                <select id="select-000e" name="idTugas" class="u-input u-input-rectangle u-radius u-input-1" required="required">
                <?php
                include 'koneksi.php';
                // Loop untuk menampilkan opsi dropdown dari hasil query

                $sql = "SELECT idTugas, namaTugas FROM daftar_tugas";
                $result = $conn->query($sql);


                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row["idTugas"] . '">' . $row["namaTugas"] . '</option>';
                    }
                } else {
                    echo '<option value="">Tidak ada tugas tersedia</option>';
                }

                $conn->close();
                ?>
              </select>
                  <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
                </div>
              </div>
              <div class="u-align-center u-form-group u-form-submit u-label-top">
                <input type="submit" value="submit" class="u-form-control-hidden">
                <a href="tabel-tugas.php" onclick="location.reload();" class="u-border-0 u-btn u-btn-submit u-button-style u-white u-btn-1">Kirim</a>
              </div>
              
            </form>
          </div>
        </div><button class="u-dialog-close-button u-icon u-text-grey-40 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-efe9"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-efe9"><rect x="7" y="0" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="2" height="16"></rect><rect x="0" y="7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="16" height="2"></rect></svg></button>
      </div>
    </section>
    
    <style>.u-dialog-section-15 .u-dialog-1 {
  width: 678px;
  min-height: 377px;
  height: auto;
  --radius: 15px;
  background-image: linear-gradient(150deg, #fefaf6, #dee5ff);
  margin: 60px auto;
}

.u-dialog-section-15 .u-container-layout-1 {
  padding: 30px;
}

.u-dialog-section-15 .u-text-1 {
  font-weight: 700;
  font-size: 1.625rem;
  margin: 0 auto;
}

.u-dialog-section-15 .u-form-1 {
  height: 455px;
  box-shadow: 0px 0px 4px 0px rgba(185,193,204,1);
  --radius: 7px;
  background-image: none;
  width: 524px;
  margin: 26px auto 0;
}

.u-dialog-section-15 .u-form-group-1 {
  margin-left: 0;
}

.u-dialog-section-15 .u-label-1 {
  font-weight: 700;
}

.u-dialog-section-15 .u-input-1 {
  --radius: 7px;
}

.u-dialog-section-15 .u-btn-1 {
  background-image: none;
  box-shadow: 0px 0px 4px 0px rgba(185,193,204,1);
}

.u-dialog-section-15 .u-icon-1 {
  width: 20px;
  height: 20px;
}

@media (max-width: 1199px) {
  .u-dialog-section-15 .u-dialog-1 {
    width: 678px;
  }

  .u-dialog-section-15 .u-form-1 {
    width: 524px;
  }
}

@media (max-width: 767px) {
  .u-dialog-section-15 .u-dialog-1 {
    width: 540px;
  }

  .u-dialog-section-15 .u-container-layout-1 {
    padding-left: 10px;
    padding-right: 10px;
  }

  .u-dialog-section-15 .u-form-1 {
    width: 520px;
    margin-left: 0;
    margin-right: 0;
  }
}

@media (max-width: 575px) {
  .u-dialog-section-15 .u-dialog-1 {
    width: 340px;
  }

  .u-dialog-section-15 .u-form-1 {
    width: 320px;
    margin-left: 0;
    margin-right: 0;
  }
}</style>
</body></html>