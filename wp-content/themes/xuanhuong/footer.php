    <footer>
        <div class="footer">
            <div class="col-left">
                <a class="logo" href=""><h1><strong>thẩm mỹ viện Xuân Hương </strong></h1></a>
                <address>
                    <strong>Cơ sở 1</strong> : 22 Triệu Việt Vương – Hai Bà Trưng – Hà Nội . <br/>
                    <strong>Cơ sở 2</strong> : 221C Khâm Thiên –Đống Đa – Hà Nội .
                </address>
            </div>
            <div class="col-right">
                <div class="facebook"><img src="<?php echo get_template_directory_uri(); ?>/images/tmp-fb.png" alt=""/></div>
                <div class="access-info">
                    Sô người truy cập: 876876876 <br/>
                    Số người online: 80 <br/>
                    Thiêt kê: trang salem
                </div>
            </div>

            <div class="footer-links">
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">CHĂM SÓC DA</a></li>
                    <li><a href="#">DỊCH VỤ TẮM TRẮNG</a></li>
                    <li><a href="#">DỊCH VỤ MASSAGE</a></li>
                    <li><a href="#">TƯ VẤN</a></li>
                    <li><a href="#">Tin tức</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>

            </div>
        </div>

    </footer>
</div>

<script type="text/javascript" >
    jQuery(function(){

        jQuery('#carousel').owlCarousel({
            items : 4,
            autoPlay : 3000
        });
        jQuery('.carousel-wrapper .prev').on('click', function(){ jQuery('#carousel').trigger('owl.prev');  });
        jQuery('.carousel-wrapper .next').on('click', function(){ jQuery('#carousel').trigger('owl.next');  });

        jQuery('#slider').owlCarousel({
            autoPlay : 3000,
            singleItem: true
        });
    });


</script>
<?php wp_footer(); ?>
</body>
</html>
     
