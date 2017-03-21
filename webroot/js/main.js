//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
//Sets the min-height of #page-wrapper to window size
$(function() {
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