<?php
$iden = $this->db->query("SELECT * FROM tb_web_identitas where id_identitas='1'")->row_array();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Bagus Maulana">
    <meta name="description" content="<?= $iden['meta_deskripsi']; ?>">
    <meta name="keywords" content="<?= $iden['meta_keyword']; ?>">
    <meta name="robots" content="all,index,follow">
    <meta http-equiv="Content-Language" content="id-ID">
    <meta NAME="Distribution" CONTENT="Global">
    <meta NAME="Rating" CONTENT="General">
    <link rel="canonical" href="<?= "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:title" content="<?= $title; ?>" />
    <meta property="og:description" content="<?= $iden['meta_deskripsi']; ?>" />
    <meta property="og:url" content="<?= "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" />
    <meta property="og:site_name" content="<?= $iden['nama_website']; ?>" />

    <link rel="icon" type="image/png" href="<?= base_url('assets/images/favicon/') ?><?= $iden['favicon']; ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    
     <!-- ::::::::::::::All CSS Files here :::::::::::::: -->
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/template_mobile/') ?>/css/vendor/icomoon.css" />

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/template_mobile/') ?>css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/template_mobile/') ?>css/plugins/ion.rangeSlider.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/template_mobile/') ?>css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="<?= base_url('assets/template/tema/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/template_mobile/') ?>js/vendor/jquery-3.6.0.min.js"></script>
    
    <link rel="stylesheet" href="<?= base_url('assets/template/css/'); ?>sweetalert2/sweetalert2.min.css">
    
    <script>
        var site_url = '<?= base_url() ?>';
    </script>
    
</head>