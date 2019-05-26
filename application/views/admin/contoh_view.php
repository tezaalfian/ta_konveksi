<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contoh</title>
    <?php $this->load->view('partial/admin/css');?>
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">
<!-- HEADER -->
    <?php $this->load->view('partial/admin/header');?>

<!-- SIDEBAR -->
    <?php $this->load->view('partial/admin/sidebar');?>

<!-- CONTENT -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
        </section>

        <!-- Main content -->

        <!-- /.content -->
    </div>
<!-- END CONTENT -->

<!-- FOOTER -->
    <?php $this->load->view('partial/admin/footer');?>
</div>
<!-- LIBRARY JS -->
    <?php $this->load->view('partial/admin/js');?>
    
</body>
</html>