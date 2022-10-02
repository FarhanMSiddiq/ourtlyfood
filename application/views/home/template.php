<?php include '_include/head.php'; ?>

<body <?php if($this->uri->segment(1)=='login'){ echo 'style="background-color:#FFFFFF;"';}?>>

    <?= $konten;?>

<?php include '_include/js.php'; ?>
</body>
</html>