<link rel="stylesheet" href="http://labdex.com/assets/css/main.css">
<section class="dvAboutus mt55">
    <div class="container">
        <table class="table table-bordered table-striped table-hover table-condensed table-responsive mt30">
            <thead>
            <?php
            if ($products) {
                echo '<tr><th style="text-align:center;vertical-align: middle;background: #004E53;color: #FFFFFF;">Compare  ' . count($products) . ' Items</th>';
                foreach ($products as $product) {
                    echo '<td>';
                    $img = json_decode($product['image_urls'], true);
                    $src = '';
                    if ($img) {
                        $src = $img['small'];
                    }
                    echo '<img src="' . base_url($src) . '"><br>';
                    echo '<a style="color: #222; font-weight: 600;" href="' . base_url($product['page_url']) . '">' . $product['name'] . '</a>';
                    echo '</td>';
                }
                echo '</tr>';
            }?>
            </thead>
            <tbody>
            <?php foreach ($keys as $k => $item) {
                echo '<tr>';
                echo "<td>" . $k . "</td>";
                if ($item['child']) {
                    foreach ($item['child'] as $v) {
                        if (!$v) {
                            $v = '&mdash;';
                        }
                        echo '<td>' . $v . '</td>';
                    }
                }
                echo '</tr>';

            }
            ?>
            </tbody>
        </table>
    </div>
</section>
<style>

    .table > thead > tr > td, .table > tbody > tr > td {
        text-align: center;
    }
</style>
<footer id="footer" class="footer-simple footer-dark">

      <script src="<?php echo base_url(); ?>assets/plugins/ResponsiveMultiLevelMenu/js/modernizr.custom.js"></script>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/plugins/megamenu/js/jquery-accessibleMegaMenu.js"></script>
      <script src="<?php echo base_url(); ?>assets/plugins/bx-slider/js/jquery.bxslider.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/plugins/owl-carousel/js/owl.carousel.js"></script>
      <script src="<?php echo base_url(); ?>assets/plugins/mixitup/js/jquery.mixitup.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/jquery.countdown.js"></script>
      <script src="<?php echo base_url(); ?>assets/plugins/ResponsiveMultiLevelMenu/js/jquery.dlmenu.js"></script>
      <script src="<?php echo base_url(); ?>assets/plugins/switcher/switcher.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
