$(function() {
    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
        // Avoid following the href location when clicking
        event.preventDefault(); 
        // Avoid having the menu to close when clicking
        event.stopPropagation(); 
        // If a menu is already open we close it
        // opening the one you clicked on
        if($(this).attr('aria-expanded') == "true" || $(this).parent().hasClass('open')){
            $(this).attr('aria-expanded',false);
            $(this).parent().removeClass('open');    
        } else {
            $(this).attr('aria-expanded',true);
            $(this).parent().addClass('open');
        }
    });
    //Loads the correct sidebar on window load,
    //collapses the sidebar on window resize.
    //Sets the min-height of #page-wrapper to window size
    $(window).bind("load resize", function() {
        if ($('body').hasClass('body')) {
            $('#page-wrapper>div>#sidebar').css("min-height", "");
            $('#page-wrapper>div>#right-sidebar').css("min-height", "");
            var $headerHeight = $('#wrapper>header').innerHeight();
            var $footerHeight = $('#wrapper>footer').innerHeight();
            var $width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
            var $height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
            var $hfHeight = $headerHeight + $footerHeight;
            $height = $height - $hfHeight;
            if ($height < 1) $height = 1;
            if ($height > $hfHeight) {
                $("#page-wrapper>div>#page-content").css("min-height", ($height) + "px");
                if ($width > 800) {
                    var $pageContentHeight = $("#page-wrapper>div>#page-content").innerHeight();
                    $('#page-wrapper>div>#sidebar').css("min-height", ($pageContentHeight) + "px");
                    $('#page-wrapper>div>#right-sidebar').css("min-height", ($pageContentHeight) + "px");
                }
            }
        }
    });
});