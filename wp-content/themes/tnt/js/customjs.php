<script>
	$(document).ready(function(){
        <?php if(is_front_page()){ ?>
            $('.products--top-rated li.product').removeAttr('class').addClass('product-item col-lg-3 col-md-6 col-sm-12');
            $("#owl-demo").owlCarousel({
                autoPlay: true, //Set AutoPlay to 3 seconds
                items : 4,
                itemsDesktop : [1199,3],
                itemsDesktopSmall : [1000,1],
                navigation:true,
                navigationText: [
                    "<i class='fa fa-chevron-left'></i>",
                    "<i class='fa fa-chevron-right'></i>"
                ]
            });
            $("#owl-demo-2").owlCarousel({
                autoPlay: true, //Set AutoPlay to 3 seconds
                items : 3,
                itemsDesktop : [1199,3],
                itemsDesktopSmall : [1200,1],
                navigation:true,
                navigationText: [
                    "<i class='fa fa-chevron-left'></i>",
                    "<i class='fa fa-chevron-right'></i>"
                ]
            });
        <?php } if(is_singular('product')){ ?>
            var container_upsell_content = $('#container--upsell').html();
            $('#container--upsell').remove();
            $('.single-product-content-area').append(container_upsell_content);
            $('.single-product-content-area .upsell ul.products').attr('id', 'owl-demo-3');
            $('.single-product-content-area .upsell ul.products li.item').addClass('product-item col-xs-12');
            $("#owl-demo-3").owlCarousel({
                autoPlay: true, //Set AutoPlay to 3 seconds
                items : 4,
                itemsDesktop : [1199,3],
                itemsDesktopSmall : [979,3],
                navigation:true,
                navigationText: [
                    "<i class='fa fa-chevron-left'></i>",
                    "<i class='fa fa-chevron-right'></i>"
                ]
            });
            var reviews_summary = $('#reviews_summary');
            $('#reviews_summary').remove();
            $('.single-product-content-area .product-gallery').append(reviews_summary);
        <?php } if(is_archive()){ ?>
            setInterval(function(){
                $('.products--top-rated li.product').removeAttr('class').addClass('product-item col-lg-3 col-md-6 col-sm-12');
            }, 1000);
            var sidebar = $('.woof.woof_sid').clone();
            $('.woof.woof_sid').hide();
            $('#filters').append(sidebar);
            $('.button.woof_reset_search_form').click();
        <?php } ?>

        $.each($('.products--top-rated .products .product-item .woocommerce-loop-product__title'),function () {
            $(this).before(`<div class="overlay">
                <ul class="list-inline" style="text-align: right;">
                    <li style="display: none;"><a href="" class="product--view-link"><i class="glyphicon glyphicon-eye-open"></i></a></li>
                    <li style="display: none;" class="product--wishlist"><a href=""><i class="glyphicon glyphicon-heart-empty"></i></a></li>
                    <li><a href="javascript:void(0);" class="product--view-options"> <i class="glyphicon glyphicon-option-vertical"></i></a></li>
                </ul>
            </div>`)
        });

        $.each($('.products--top-rated .products .product-item'), function () {
            $(this).find('.product--view-link').attr('href', $(this).find('.woocommerce-loop-product__link').attr('href'));
            var html = $(this).find('.yith-wcwl-add-to-wishlist').clone();
            $(this).find('.yith-wcwl-add-to-wishlist').remove();
            $(this).find('.product--wishlist').html(html);
            $(this).find('.product--wishlist .feedback').remove();
            $(this).find('.product--wishlist .yith-wcwl-add-button a').html('<i class="glyphicon glyphicon-heart-empty"></i>');
            $(this).find('.product--wishlist .yith-wcwl-wishlistaddedbrowse a, .product--wishlist .yith-wcwl-wishlistexistsbrowse a').html('<i class="glyphicon glyphicon-heart"></i>');
        });

        $('.products--top-rated .products .product-item').hover(function () {
            $(this).find('.overlay').css('opacity', '1');
        }, function () {
            $(this).find('.overlay').css('opacity', '0');
        });

        $('.product--view-options').click(function () {
            $(this).closest('ul').find('li:nth-child(1), li:nth-child(2)').toggle();
        });

	});
</script>
