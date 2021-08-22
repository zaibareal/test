<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            จัดการ Admin/ช่าง
        </h1>
    </section>
    <!-- Top menu -->
    <?php // echo $this->session->flashdata('msginfo'); 
    ?>
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">ตารางข้อมูล</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-6">
                            <a class="btn btn-success" href="<?= site_url('admin/add'); ?>" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มข้อมูล</a>
                            <a class="btn btn-default" href="<?= site_url('admin'); ?>" role="button"><i class="fa fa-fw fa-refresh"></i> Refresh Data</a>
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <br />
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row" class="info">
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">id</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 40%;">ชื่อ-สกุล</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 25%;">Email</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">status</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">pwd</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">แก้ไข</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลบ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($query as $rs) { ?>
                                        <tr role="row">
                                            <td align="center"><?= $rs->id; ?></td>
                                            <td><?= $rs->admin_name; ?></td>
                                            <td><?= $rs->admin_email; ?></td>
                                            <td>
                                                <?php
                                                if ($rs->admin_status == 1) {
                                                    echo 'Online';
                                                } else {
                                                    echo 'Ban';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo site_url('admin/pwd/' . $rs->id); ?>" class="btn btn-info btn-xs">
                                                    pwd
                                                </a>
                                            </td>
                                            <td>
                                                <a href="<?php echo site_url('admin/edit/' . $rs->id); ?>" class="btn btn-warning btn-xs">
                                                    แก้ไข
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-danger btn-xs" href="<?= site_url('admin/del/' . $rs->id); ?>" role="button" onclick="return confirm('ยืนยันการลบข้อมูล??');"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                            </td>
                                        </tr>
                                    <?php  } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->