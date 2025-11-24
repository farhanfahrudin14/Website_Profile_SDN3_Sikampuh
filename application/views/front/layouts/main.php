<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <!-- Bootstrap -->
   <link rel="stylesheet" href="<?= base_url('asset/vendor/bootstrap/css/bootstrap.min.css') ?>">
   <link rel="stylesheet" href="<?= base_url('asset/vendor/fontawesome-free/css/all.min.css') ?>">
   <link rel="stylesheet" href="<?= base_url('asset/css/style.css') ?>">

   <link rel="shortcut icon" type="image/png" href="<?= base_url('asset/ump.png') ?>"/>
   
   <title><?= $title ?> - SD Negeri Sikampuh 03</title>
</head>
<body>

   <!-- Navbar -->
   <?php $this->load->view('front/layouts/_navbar'); ?>

   <!-- Content -->
   <?php $this->load->view('front/pages/' . $page); ?>

   <!-- Footer -->
   <?php $this->load->view('front/layouts/_footer'); ?>

   <script src="<?= base_url('asset/vendor/jquery/jquery.min.js') ?>"></script>
   <script src="<?= base_url('asset/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
</body>
</html>
