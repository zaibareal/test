<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <h3 class="jumbotron" style="margin-bottom: 0px;">
                ::Helpdesk v0.4::
            </h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col col-sm-12 col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #d6d4d0;">
                <a class="navbar-brand" href="<?= site_url(''); ?>">HelpDesk</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= site_url(''); ?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://devbanban.com/?p=2867" target="_blank">คอร์สออนไลน์สอน CodeIgniter</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= site_url('login'); ?>">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="container" style="margin-top: 30px">
    <div class="row">
        <div class="col-sm-4 col-md-4"></div>
        <div class="col col-sm-8 col-md-8">
            <form action="<?= site_url('login/authen'); ?>" method="post" class="form-horizontal">
                <div class="form-group col col-md-5">
                    <h3>Login Form</h3>
                </div>
                <div class="form-group col col-md-5">
                    <label>Username</label>
                    <input type="email" name="admin_email" class="form-control" required minlength="3" placeholder="*email" value="<?= set_value('admin_email'); ?>">
                    <span class="fr"><?= form_error('admin_email'); ?></span>
                </div>
                <div class="form-group col col-md-5">
                    <label>Password</label>
                    <input type="password" name="admin_pwd" class="form-control" required placeholder="*Password" value="<?= set_value('admin_pwd'); ?>">
                    <span class="fr"><?= form_error('admin_pwd'); ?></span>
                </div>
                <div class="form-group col col-md-5">
                    <button type="submit" class="btn btn-primary" style="width: 100%">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>