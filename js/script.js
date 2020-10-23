// TABS
jQuery('.js__tabs ul.tabs__list li').clone().appendTo(".list__clone");

jQuery(window).on("load resize ", function () {
    jQuery('.js__tabs ul.tabs__list li').each(function () {

        var tabsTotalWidth = $("ul.tabs__list").width();

        if ($(this).position().left + $(this).outerWidth() + 65 > tabsTotalWidth) {
            $(this).addClass("hide");
            $(".list__clone li").eq($(this).index()).addClass("show");
        }
        if ($(this).position().left + $(this).outerWidth() + 65 < tabsTotalWidth) {
            $(this).removeClass("hide");
            $(".list__clone li").eq($(this).index()).removeClass("show");
        }

        var tabsWithClassHide = $('.tabs__list .hide').length

        if (tabsWithClassHide > 0) {
            $(".tabs__toggle").css("opacity", "1");
            $(".tabs__toggle").addClass("show");
        }
        if (tabsWithClassHide === 0) {
            $(".tabs__toggle").css("opacity", "0");
            $(".tabs__toggle").removeClass("show");
        }

        var togglePosition = 0;
        $(".tabs__list li:not(.hide)").each(function () {
            togglePosition += $(this).outerWidth(true);
        });

        $(".tabs__toggle-container").css("left", togglePosition + 65);
       
        var tabs__toggleWidth = $(".tabs__toggle").outerWidth();

        var menuPosition = $(window).width() - tabs__toggleWidth - togglePosition - tabs__toggleWidth - 21;
        $(".tabs__more__list").css("right", menuPosition);
		
    });
});

jQuery(".js__tabs .tabs__toggle").click(function () {
    jQuery(this).toggleClass("open")
    jQuery(".tabs__more").toggleClass("show");
});

// SUB-MENU 
jQuery(".menu-item-has-children > a").click(function () {
	jQuery(this).toggleClass("active").next(".sub-menu").toggle();
});

// SHARE PAGE
jQuery(document).ready(function () {
    jQuery('.js__share-page a.share-page__on-facebook').click(function () {
        var link = jQuery(location).attr('href');
        var facebookUrl = "https://www.facebook.com/sharer/sharer.php?u=" + link;
        window.open(facebookUrl);
    });
    jQuery('.js__share-page a.share-page__on-twitter').click(function () {
        var link = jQuery(location).attr('href');
        var twitterUrl = "https://twitter.com/intent/tweet?url=" + link + '&text=' + "Hey, bekijk eens:" + link;
        window.open(twitterUrl);
    });
    jQuery('.js__share-page a.share-page__on-linkedin').click(function () {
        var link = jQuery(location).attr('href');
        var twitterUrl = "https://www.linkedin.com/shareArticle?mini=true&url=" + link + '&text=' + "Hey, bekijk eens:" + link;
        window.open(twitterUrl);
    });
});

// EQUAL HEIGHT
equalheight = function (container) {

    var currentTallest = 0,
        currentRowStart = 0,
        rowDivs = new Array(),
        jQueryel,
        topPosition = 0;
    jQuery(container).each(function () {

        jQueryel = jQuery(this);
        jQuery(jQueryel).height('auto')
        topPostion = jQueryel.position().top;

        if (currentRowStart != topPostion) {
            for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
            rowDivs.length = 0; // empty the array
            currentRowStart = topPostion;
            currentTallest = jQueryel.height();
            rowDivs.push(jQueryel);
        } else {
            rowDivs.push(jQueryel);
            currentTallest = (currentTallest < jQueryel.height()) ? (jQueryel.height()) : (currentTallest);
        }
        for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
            rowDivs[currentDiv].height(currentTallest);
        }
    });
}

jQuery(window).on("load resize", function () {
    equalheight('.js__equalheight');
});

// TEXTAREA //
function addAutoResize() {
  document.querySelectorAll('[data-autoresize]').forEach(function (element) {
    element.style.boxSizing = 'border-box';
    var offset = element.offsetHeight - element.clientHeight;
    element.addEventListener('input', function (event) {
      event.target.style.height = 'auto';
      event.target.style.height = event.target.scrollHeight + offset + 'px';
    });
    element.removeAttribute('data-autoresize');
  });
}
addAutoResize();

// ANIMATE
var animateHTML = function () {
    var elems;
    var windowHeight;

    function init() {
        elems = document.querySelectorAll('.js__fx');
        windowHeight = window.innerHeight;
        addEventHandlers();
        checkPosition();
    }

    function addEventHandlers() {
        window.addEventListener('load;', checkPosition);
        window.addEventListener('scroll', checkPosition);
        window.addEventListener('resize', init);
    }

    function checkPosition() {
        for (var i = 0; i < elems.length; i++) {
            var positionFromTop = elems[i].getBoundingClientRect().top;
            if (positionFromTop - windowHeight <= 0) {
                elems[i].className = elems[i].className.replace(
                    'js__fx',
                    'animate__animated',
                );
            }
        }
    }
    return {
        init: init
    };
};
animateHTML().init();


