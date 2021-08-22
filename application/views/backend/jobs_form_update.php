<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            ฟอร์มอัพเดทงานซ่อม
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
                        <form role="form" action="<?= site_url('jobs/updatedata'); ?>" method="post" class="form-horizontal">
                            <div class="box-body">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-3 control-label">
                                            JobNo.
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="number" name="id" class="form-control" readonly value="<?= $query->id; ?>">
                                            <span class="fr"><?= form_error('id'); ?></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-3 control-label">
                                            ประเภทการแจ้ง
                                        </div>
                                        <div class="col-sm-7">
                                            <select class="form-control" disabled>
                                                <option value="<?= $query->case_type; ?>"><?= $query->case_type; ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3 control-label">
                                            รายละเอียด
                                        </div>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" disabled><?= $query->case_detail; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3 control-label">
                                            สถานที่
                                        </div>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" disabled><?= $query->case_loc; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3 control-label">
                                            ผู้แจ้ง
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" disabled value="<?= $query->p_name; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3 control-label">
                                            อีเมลผู้แจ้ง
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" disabled value="<?= $query->p_email; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3 control-label">
                                            ภาพประกอบ
                                        </div>
                                        <div class="col-sm-5">
                                            <img src="<?= base_url('./asset/uploads/' . $query->p_img); ?>" width="100%">
                                            <br>
                                            ว/ด/ป : <?= $query->date_save; ?>
                                        </div>
                                    </div>

                                </div> <!-- sm-6 -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            สถานะล่าสุด <span class="fr">*</span>
                                            <span class="fr"><?= form_error('case_statusID'); ?></span>
                                            <select name="case_statusID" required class="form-control">
                                                <option value="">
                                                    <?php
                                                    if ($query->case_statusID == 1) {
                                                        echo 'รอดำเนินการ';
                                                    } elseif ($query->case_statusID == 2) {
                                                        echo 'กำลังดำเนินการ';
                                                    } elseif ($query->case_statusID == 3) {
                                                        echo 'เสร็จสิ้น';
                                                    } else {
                                                        echo 'ยกเลิก';
                                                    }
                                                    ?>
                                                </option>
                                                <option value="">--เปลี่ยน---</option>
                                                <option value="1">-รอดำเนินการ</option>
                                                <option value="2">-กำลังดำเนินการ</option>
                                                <option value="3">-เสร็จสิ้น</option>
                                                <option value="4">-ยกเลิก</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            ว/ด/ป (ล่าสุด)
                                            <input type="text" class="form-control" value="<?= $query->case_update; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-7">
                                            บันทึกการอัพเดทงานซ่อม<span class="fr">*</span>
                                            <textarea name="case_update_log" placeholder="*ต้องการข้อมูล" class="form-control" required><?= $query->case_update_log; ?></textarea>
                                            <span class="fr"><?= form_error('case_update_log'); ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            ผู้บันทึก
                                            <input type="text" class="form-control" readonly name="tech_name" value="<?= $_SESSION['admin_name']; ?>">
                                            <input type="hidden" class="form-control" name="tech_id" value="<?= $_SESSION['id']; ?>">
                                            <span class="fr"><?= form_error('admin_name'); ?></span>
                                            <span class="fr"><?= form_error('tech_id'); ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-primary" type="submit">
                                                <i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                                            <a class="btn btn-danger" href="<?= site_url('jobs'); ?>" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>
                                        </div>
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