<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <title>Kodesis | Business Development</title>
    <!-- Bootstrap -->
    <link href="<?= base_url(); ?>src/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url(); ?>src/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url(); ?>src/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= base_url(); ?>src/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="<?= base_url(); ?>src/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?= base_url(); ?>src/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url(); ?>src/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?= base_url(); ?>src/build/css/custom.min.css" rel="stylesheet">
    <!-- footer menu -->
    <link rel="stylesheet" href="<?= base_url(); ?>src/css/mobile_menu/header.css">
    <link rel="stylesheet" href="<?= base_url(); ?>src/css/mobile_menu/icons.css">

    <link href="<?= base_url(); ?>src/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>src/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>src/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>src/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>src/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- CKEditor -->
    <script type="text/javascript" src="<?= base_url(); ?>src/ckeditor/ckeditor.js"></script>

    <style>
        .col-xs-3 {
            width: 25%;
            background-color: #008080;
        }

        .row {
            margin-left: 0px;
        }

        .container-fluid {
            padding-right: 0px;
            padding-left: 0px
        }

        .btn_footer_panel .tag_ {
            padding-top: 37px;
        }
    </style>
    <style>
        .modal {
            text-align: center;
            padding: 0 !important;
        }

        .modal:before {
            content: '';
            display: inline-block;
            height: 100%;
            vertical-align: middle;
            margin-right: -4px;
        }

        .modal-dialog {
            display: inline-block;
            text-align: left;
            vertical-align: middle;
        }

        .select2-container .select2-dropdown .select2-results__option {
            text-align: left;
            /* Pastikan opsi dropdown rata kiri */
        }
    </style>
</head>

<header class="header_area sticky-header">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message_name') ?>"></div>
    <div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('message_error') ?>"></div>
    <!-- footer menu -->
    <div class="footer_panel">
        <div class="container-fluid text-center">
            <div class="row">

                <div class="col-xs-3 btn_footer_panel">
                    <a href="<?= base_url(); ?>app/create_memo">
                        <i class="la-i la-i-m la-i-home"></i>
                        <div class="tag_">
                            <font color="white">Create</font>
                        </div>
                    </a>
                </div>
                <div class="col-xs-3 btn_footer_panel">
                    <a href="<?= base_url(); ?>app/inbox">
                        <i class="la-i la-i-m la-i-order"></i>
                        <div class="tag_">
                            <font color="white">Inbox</font>
                        </div>
                    </a>
                </div>
                <div class="col-xs-3 btn_footer_panel">
                    <a href="<?= base_url(); ?>app/send_memo">
                        <i class="la-i la-i-m la-i-notif"></i>
                        <div class="tag_">
                            <font color="white">Outbox</font>
                        </div>
                    </a>
                </div>
                <div class="col-xs-3 btn_footer_panel">
                    <a href="<?= base_url(); ?>login/logout">
                        <i class="la-i la-i-m la-i-akun"></i>
                        <div class="tag_">
                            <font color="white">Logout</font>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- footer menu -->
</header>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="<?= base_url(); ?>" class="site_title"><img src="<?= base_url(); ?>img/logo-kodesis.png" alt="..." height="42" width="60"><span> Kodesis</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="<?= base_url(); ?>src/images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2><?= $this->session->userdata('nama'); ?></h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <?php $this->load->view('side_menu.php'); ?>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->

                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="<?= base_url(); ?>src/images/img.jpg" alt=""><?= $this->session->userdata('nama'); ?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="javascript:;"> Profile</a></li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li><a href="javascript:;">Help</a></li>
                                    <li><a href="<?= base_url(); ?>login/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="<?= base_url() . "app/inbox"; ?>" class="dropdown-toggle info-number">
                                    <i class="fa fa-envelope-o"></i>
                                    <?php if ($count_inbox == 0) { ?>
                                        <span class="badge bg-green"><?= $count_inbox; ?></span>
                                    <?php } else { ?>
                                        <span class="badge bg-red"><?= $count_inbox; ?></span>
                                    <?php } ?>
                                </a>
                            </li>
                            <?php include 'notif_tello.php' ?>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="clearfix"></div>

                <!-- Start content-->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel card">
                            <div class="x_title">
                                <h2>Outstanding agent</h2>
                                <!-- <ul class="nav navbar-right panel_toolbox">
                                    <li>
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Create Inv. <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li><a class="dropdown-item" href="<?= base_url('financial/create_invoice') ?>">Regular</a>
                                            </li>
                                            <li><a class="dropdown-item" href="<?= base_url('financial/create_invoice_khusus') ?>">Khusus</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul> -->
                            </div>
                            <div class="x_content">
                                <!-- <div class="row">
                                    <form class="form-horizontal form-label-left" method="POST" action="<?= base_url('financial/invoice') ?>">
                                        <div class="col-md-5 col-xs-12">
                                            <div class="form-group">
                                                <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Masukkan nomor invoice">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-xs-12">
                                            <button type="submit" class="btn btn-success">Cari</button>
                                            <a href="<?= base_url('financial/invoice') ?>" class="btn btn-warning">Reset</a>
                                        </div>
                                    </form>
                                    <div class="col-md-1"></div>
                                </div> -->
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Agen</th>
                                            <th>Current</th>
                                            <th>Out 1</th>
                                            <th>Out 2</th>
                                            <th>Out 3</th>
                                            <th>Out 4</th>
                                            <th>
                                                < 2023</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if ($outstanding) {
                                            $no = 1;
                                            $total_current = 0;
                                            $total_out1 = 0;
                                            $total_out2 = 0;
                                            $total_out3 = 0;
                                            $total_out4 = 0;
                                            $total_out5 = 0;
                                            $total = 0;
                                            foreach ($outstanding as $i) : ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $i['nama_customer'] ?></td>
                                                    <td class="text-right"><?= number_format($i['current']) ?></td>
                                                    <td class="text-right"><?= number_format($i['out1']) ?></td>
                                                    <td class="text-right"><?= number_format($i['out2']) ?></td>
                                                    <td class="text-right"><?= number_format($i['out3']) ?></td>
                                                    <td class="text-right"><?= number_format($i['out4']) ?></td>
                                                    <td class="text-right"><?= number_format($i['out5']) ?></td>
                                                    <td class="text-right"><?= number_format($i['total']) ?></td>
                                                </tr>

                                            <?php
                                                $total_current += $i['current'];
                                                $total_out1 += $i['out1'];
                                                $total_out2 += $i['out2'];
                                                $total_out3 += $i['out3'];
                                                $total_out4 += $i['out4'];
                                                $total_out5 += $i['out5'];
                                                $total += $i['total'];
                                            endforeach;
                                            $total_outstanding = $total_out1 + $total_out2 + $total_out3 + $total_out4 + $total_out5; ?>
                                            <tr>
                                                <td colspan="2" class="text-center" rowspan="2"><strong>Total</strong></td>
                                                <td class="text-right" rowspan="2"><strong><?= number_format($total_current) ?></strong></td>
                                                <td class="text-right"><strong><?= number_format($total_out1) ?></strong></td>
                                                <td class="text-right"><strong><?= number_format($total_out2) ?></strong></td>
                                                <td class="text-right"><strong><?= number_format($total_out3) ?></strong></td>
                                                <td class="text-right"><strong><?= number_format($total_out4) ?></strong></td>
                                                <td class="text-right"><strong><?= number_format($total_out5) ?></strong></td>
                                                <td class="text-right" rowspan="2"><strong><?= number_format($total) ?></strong></td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" class="text-center"><strong><?= number_format($total_outstanding) ?></td>
                                            </tr>
                                        <?php

                                        } else {
                                        ?>
                                            <tr>
                                                <td colspan="7">Tidak ada data yang ditampilkan</td>
                                            </tr>
                                        <?php
                                        } ?>
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>*klik nomor invoice untuk lihat detail invoice</h6>
                                        <p>Keterangan:</p>
                                        <p>Outstanding 1 = 1 - 10 hari</p>
                                        <p>Outstanding 2 = 11 - 30 hari</p>
                                        <p>Outstanding 3 = 31 - 90 hari</p>
                                        <p>Outstanding 4 = >91 hari</p>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <?= $this->pagination->create_links() ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Finish content-->

        </div>

        <!-- /page content -->

        <!-- footer content -->

        <!-- /footer content -->

        <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="jurnalModal">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">
                            Lihat laporan
                        </h4>
                    </div>
                    <form class="form-horizontal form-label-left" method="POST" action="<?= base_url('financial/showReport') ?>">
                        <div class="modal-body">
                            <div class="form-group row">
                                <div class="col-md-12 col-xs-12">
                                    <label for="no_invoice" class="form-label">Jenis laporan</label>
                                    <select name="jenis_laporan" id="jenis_laporan" class="form-control">
                                        <option value="">:: Pilih jenis laporan</option>
                                        <option value="neraca">Neraca</option>
                                        <option value="laba_rugi">Laba Rugi</option>
                                        <option value="invoice_nol">Invoice Nol</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Process
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="reportPerCoa">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">
                            Lihat laporan
                        </h4>
                    </div>
                    <form class="form-horizontal form-label-left" method="POST" action="<?= base_url('financial/showReport') ?>">
                        <div class="modal-body">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="no_invoice" class="form-label">No. COA</label>
                                    <select name="no_coa" id="no_coa" class="form-control select2" style="width: 100%; text-align: left;" required>
                                        <option value="">:: Pilih no coa</option>
                                        <?php
                                        foreach ($coa as $c) :
                                        ?>
                                            <option value="<?= $c->no_sbb ?>" data-nama="<?= $c->nama_perkiraan ?>" data-posisi="<?= $c->posisi ?>" style="text-align: left;"><?= $c->no_sbb . ' - ' . $c->posisi . ' - ' . $c->nama_perkiraan ?></option>
                                        <?php
                                        endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="tgl_invoice" class="form-label">Dari</label>
                                    <input type="date" class="form-control" name="tgl_dari" value="">
                                </div>
                                <div class="col-md-6">
                                    <label for="tgl_invoice" class="form-label">Sampai</label>
                                    <input type="date" class="form-control" name="tgl_sampai" value="<?= date('Y-m-d') ?>">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Process
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- jQuery -->
    <script src="<?= base_url(); ?>src/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url(); ?>src/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url(); ?>src/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?= base_url(); ?>src/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?= base_url(); ?>src/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?= base_url(); ?>src/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?= base_url(); ?>src/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?= base_url(); ?>src/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?= base_url(); ?>src/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?= base_url(); ?>src/vendors/Flot/jquery.flot.js"></script>
    <script src="<?= base_url(); ?>src/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?= base_url(); ?>src/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?= base_url(); ?>src/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?= base_url(); ?>src/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?= base_url(); ?>src/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?= base_url(); ?>src/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?= base_url(); ?>src/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?= base_url(); ?>src/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url(); ?>src/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?= base_url(); ?>src/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?= base_url(); ?>src/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?= base_url(); ?>src/vendors/moment/min/moment.min.js"></script>
    <script src="<?= base_url(); ?>src/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Sweetalert -->
    <!-- <script src="<?= base_url(); ?>src/build/js/sweetalert.js"></script>
	<link rel="stylesheet" href="<?= base_url(); ?>src/build/css/sweetalert.css" /> -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url(); ?>src/select2/css/select2.min.css">
    <script type="text/javascript" src="<?= base_url(); ?>src/select2/js/select2.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?= base_url(); ?>src/build/js/custom.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
            $('#reportPerCoa').on('shown.bs.modal', function() {
                $('.select2').select2({
                    dropdownParent: $('#reportPerCoa') // Menetapkan parent dropdown ke modal
                });
            });

            $("form").on("submit", function() {
                Swal.fire({
                    title: "Loading...",
                    timerProgressBar: true,
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                    },
                });
            });
        });



        function formatNumber(number) {
            return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        // function format_angka() {
        //     var nominal = document.getElementById('input_nominal').value;

        //     var formattedValue = formatNumber(parseFloat(nominal.split('.').join('')));

        //     document.getElementById('input_nominal').value = formattedValue;
        // }

        <?php
        if ($this->session->flashdata('message_name')) {
        ?>
            Swal.fire({
                title: "Success!! ",
                text: '<?= $this->session->flashdata('message_name') ?>',
                type: "success",
                icon: "success",
            });
        <?php
            // $this->session->sess_destroy('message_name');
            unset($_SESSION['message_name']);
        } ?>

        // const flashdata_error = $('<?= $this->session->flashdata("message_error") ?>').data("flashdata");
        const flashdata_error = $(".flash-data-error").data("flashdata");
        // const flashdata_error = $('.flash-data').data('flashdata');
        if (flashdata_error) {
            Swal.fire({
                title: "Error!! ",
                text: flashdata_error,
                type: "error",
                icon: "error",
            });
        }

        $(".btn-process").on("click", function(e) {
            e.preventDefault();
            const href = $(this).attr("href");

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, process it!",
            }).then((result) => {
                if (result.isConfirmed) {
                    document.location.href = href;
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            <?php foreach ($invoices as $i) : ?>
                    (function() {
                        var invoiceId = '<?= $i['Id'] ?>';

                        // Event listener saat modal ditampilkan
                        $('#modal<?= $i['Id'] ?>').on('shown.bs.modal', function() {
                            var checkbox = $('#status_bayar' + invoiceId);
                            var nominalBayarInput = $('#nominal_bayar' + invoiceId);
                            var piutangElement = $('#piutang' + invoiceId);

                            // console.log('Modal shown for invoice ID:', invoiceId); // Debug log

                            if (piutangElement.length > 0 && piutangElement.val() !== '') {
                                var piutang = parseFloat(piutangElement.val().replace(/,/g, ''));

                                // Fungsi untuk memperbarui nilai nominal bayar
                                function updateNominalBayar() {
                                    // console.log('Checkbox checked:', checkbox.is(':checked')); // Debug log

                                    if (checkbox.is(':checked')) {
                                        nominalBayarInput.val(piutang.toLocaleString('id-ID')).attr('readonly', true);
                                    } else {
                                        nominalBayarInput.val('0').attr('readonly', false);
                                    }
                                }

                                // Inisialisasi
                                updateNominalBayar();

                                // Event handler untuk checkbox menggunakan click event
                                checkbox.on('click', function() {
                                    updateNominalBayar();
                                });

                                // Event handler untuk input nominal bayar
                                nominalBayarInput.on('input', function() {
                                    var value = $(this).val().replace(/\./g, '').replace(',', '.');

                                    if (value === '' || isNaN(parseFloat(value))) {
                                        $(this).val('0').attr('readonly', false);
                                    } else {
                                        value = parseFloat(value);
                                        if (value > piutang) {
                                            alert('Nilai nominal bayar tidak boleh lebih dari piutang.');
                                            $(this).val(piutang.toLocaleString('id-ID'));
                                        } else {
                                            $(this).val(value.toLocaleString('id-ID'));
                                        }
                                    }
                                });
                            }
                        });
                    })();
            <?php endforeach; ?>
        });
    </script>

</body>

</html>