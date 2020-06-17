<?php
$CI =& get_instance();
if(!$CI->session->userdata('language')) {
    $CI->session->set_userdata(array('language' => 'en'));
}
$idiom = $CI->session->userdata('language');
$CI->lang->load('content', $idiom);
?>

<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_service']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1><?php echo $service['name']; ?></h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Single-Service Start-->
<div class="single-service-area pt_60 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-info">
                    <div class="single-ser-carousel owl-carousel">
                        <div class="event-photo-item">
                            <img src="<?php echo base_url(); ?>public/uploads/<?php echo $service['photo']; ?>" alt="Service Photo">
                        </div>
                    </div>
                    <h2><?php echo $service['name']; ?></h2>
                    <?php echo $service['description']; ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-sidebar">
                    <div class="service-sidebar-item headstyle">
                        <h4><?php echo $CI->lang->line('SIDEBAR_SERVICE_HEADING_1'); ?></h4>
                        <ul>
                            <?php
                            foreach ($services as $row) {
                                ?>
                                <li><a href="<?php echo base_url(); ?>service/view/<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="service-sidebar-item headstyle">
                        <h4><?php echo $CI->lang->line('SIDEBAR_SERVICE_HEADING_2'); ?></h4>
                        <?php echo form_open(base_url().'service/send_email',array('class' => '')); ?>
                            <div class="form-row">
                                <input type="hidden" name="service" value="<?php echo $service['name']; ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="<?php echo $CI->lang->line('NAME'); ?>" name="name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="<?php echo $CI->lang->line('EMAIL_ADDRESS'); ?>" name="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="<?php echo $CI->lang->line('PHONE_NUMBER'); ?>" name="phone" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="<?php echo $CI->lang->line('MESSAGE'); ?>" name="message" required></textarea>
                                </div>
                                <div class="form-button">
                                    <button type="submit" class="btn" name="form_service"><?php echo $CI->lang->line('SUBMIT'); ?></button>
                                </div>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Single-Service End-->