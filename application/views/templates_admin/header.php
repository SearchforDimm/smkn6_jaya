<?php
$cek    = $user;
$nama   = $cek->nama_lengkap;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?php echo $judul_web; ?> | Admin <?= $nama ?></title>
  <base href="<?php echo base_url(); ?>" />
  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/assets_stisla/node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="assets/assets_stisla/node_modules/weathericons/css/weather-icons.min.css">
  <link rel="stylesheet" href="assets/assets_stisla/node_modules/weathericons/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="assets/assets_stisla/node_modules/summernote/dist/summernote-bs4.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/assets_stisla/css/style.css">
  <link rel="stylesheet" href="assets/assets_stisla/css/components.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
</head>