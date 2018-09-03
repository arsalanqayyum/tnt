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
        <?php } ?>
	});
</script>
