<?php $this->load->view('admin/components/page_head'); ?>
<body>
    <div class="navbar navbar-static-top navbar-inverse">
        <div class="navbar-inner">
            <a class="brand" href="<?php echo site_url('admin/dashboard'); ?>"><?php echo $meta_title; ?></a>
            <ul class="nav">
                <li class="active"><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
                <li><?php echo anchor('admin/page', 'pages'); ?></li>
                <li><?php echo anchor('admin/user', 'users'); ?></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="span9">
                <section>
                    <h2>Page name</h2>
                </section>
            </div>
            <div class="span3">
                <section>
                    <?php echo mailto('ambition.sajid@gmail.com', '<i class="icon-user"></i> ambition.sajid@gmail.com'); ?><br>
                    <?php echo anchor('admin/user/logout','<i class = "icon-off"></i> logout'); ?>
                </section>
            </div>

        </div>
    </div>


<?php $this->load->view('admin/components/page_tail'); ?>