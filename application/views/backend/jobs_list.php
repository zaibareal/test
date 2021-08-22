<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            จัดการรายการแจ้งซ่อม
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

                <a href="<?= site_url('jobs/bystatus/' . $qstatus1->case_statusID); ?>?status=รอดำเนินการ" class="btn btn-primary"> งานใหม่ <span class="badge"><?= $qstatus1->totalstatus1; ?></span></a>
                <a href="<?= site_url('jobs/bystatus/' . $qstatus2->case_statusID); ?>?status=กำลังดำเนินการ" class="btn btn-info"> กำลังทำ <span class="badge"><?= $qstatus2->totalstatus2; ?></span></a>
                <a href="<?= site_url('jobs/bystatus/' . $qstatus3->case_statusID); ?>?status=เสร็จสิ้น" class="btn btn-success"> ปิดงาน <span class="badge"><?= $qstatus3->totalstatus3; ?></span></a>
                <a href="<?= site_url('jobs/bystatus/' . $qstatus4->case_statusID); ?>?status=ยกเลิก" class="btn btn-danger"> ยกเลิก <span class="badge"><?= $qstatus4->totalstatus4; ?></span></a>
                <br><br>

                <h3 class="box-title">ตารางข้อมูล :: <font color="blue"><?php echo $this->input->get('status'); ?></font>
                </h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-12">
                            <br />
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row" class="info">
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">No.</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ประเภท</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 45%;">รายละเอียด</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 25%;">ผู้แจ้ง</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">สถานะ</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">จัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($query as $rs) { ?>
                                        <tr role="row">
                                            <td align="center"><?= $rs->id; ?></td>
                                            <td><?= $rs->case_type; ?></td>
                                            <td><?=
                                                $rs->case_detail
                                                    . '<br>'
                                                    . 'ว/ด/ป '
                                                    . date('d/m/Y H:i:s', strtotime($rs->date_save))
                                                    . ' น.'; ?></td>
                                            <td>
                                                <?=
                                                $rs->p_name
                                                    . '<br>'
                                                    . 'email : '
                                                    . $rs->p_email; ?></td>
                                            <td>
                                                <?php
                                                if ($rs->case_statusID == 1) {
                                                    echo 'รอดำเนินการ';
                                                } elseif ($rs->case_statusID == 2) {
                                                    echo 'กำลังดำเนินการ';
                                                } elseif ($rs->case_statusID == 3) {
                                                    echo 'เสร็จสิ้น';
                                                } else {
                                                    echo 'ยกเลิก';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo site_url('jobs/getupdate/' . $rs->id); ?>" class="btn btn-success btn-xs">
                                                    จัดการ
                                                </a>
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