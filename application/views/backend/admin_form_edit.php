<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            ฟอร์มแก้ไขข้อมูล Admin/ช่าง
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Your Page Content Here -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <!-- <h3 class="box-title"> +ข่าวใหม่ </h3> -->
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="<?= site_url('admin/editdata'); ?>" method="post" class="form-horizontal">
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="col-sm-2 control-label">
                                        Email
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="email" name="admin_email" class="form-control" required placeholder="email" value="<?= $rsedit->admin_email; ?>" disabled>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-2 control-label">
                                        ชื่อ
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" name="admin_name" class="form-control" required placeholder="ชื่อ ขั้นต่ำ 4 ตัว" value="<?= $rsedit->admin_name; ?>" minlength="4">
                                        <span class="fr"><?= form_error('admin_name'); ?></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-2 control-label">
                                        status
                                    </div>
                                    <div class="col-sm-3">
                                        <select name="admin_status" required class="form-control">
                                            <span class="fr"><?= form_error('admin_status'); ?></span>
                                            <option value="<?= $rsedit->admin_status; ?>">
                                                <?php if ($rsedit->admin_status == 1) {
                                                    echo 'Online';
                                                } else {
                                                    echo 'Ban';
                                                } ?> </option>
                                            <option value="">--เปลี่ยน---</option>
                                            <option value="1">-Online</option>
                                            <option value="0">-Ban</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-2 control-label">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="hidden" name="id" value="<?= $rsedit->id; ?>">
                                        <span class="fr"><?= form_error('id'); ?></span>
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                                        <a class="btn btn-danger" href="<?= site_url('admin'); ?>" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>


                                    </div>
                                </div>

                            </div><!-- /.box-body -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->