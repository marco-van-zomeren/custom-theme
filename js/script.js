// TABS
$('.js__tabs ul.tabs__list li').clone().appendTo(".list__clone");

$(window).on("load resize ", function () {
    $('.js__tabs ul.tabs__list li').each(function () {

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

$(".js__tabs .tabs__toggle").click(function () {
    $(this).toggleClass("open")
    $(".tabs__more").toggleClass("show");
});

// SUB-MENU 
$(".menu-item-has-children > a").click(function () {
	$(this).toggleClass("active").next(".sub-menu").toggle();
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
$(function () {
        $(".js__textarea").autoResize()
    }),
    function () {
        "use strict";
        var e = this.$,
            o = {
                resize: e.noop,
                minRows: 1,
                maxRows: 0
            };
        e.fn.autoResize = function (n) {
            var t = e.extend({}, o, n);
            return this.filter("textarea").each(function () {
                var o = e(this).css({
                        "overflow-y": "hidden",
                        height: "auto",
                        resize: "none"
                    }),
                    n = o.get(0),
                    r = function () {
                        return !!n.scrollHeight && (!!n.baseScrollHeight || (function () {
                            var e = n.value,
                                o = n.rows;
                            n.value = "", n.rows = 1, n.baseScrollHeight = n.scrollHeight, n.value = e, n.rows = o
                        }(), !0))
                    },
                    s = function () {
                        if (!r()) return !1;
                        var e = parseInt(o.css("line-height"));
                        n.rows = t.minRows;
                        var s = Math.ceil((n.scrollHeight - n.baseScrollHeight) / e) + 1;
                        t.maxRows > t.minRows && s > t.maxRows ? (n.rows = t.maxRows, o.css({
                            "overflow-y": "auto"
                        })) : (n.rows = Math.max(s, t.minRows), o.css({
                            "overflow-y": "hidden"
                        }))
                    };
                (!n.rows || n.rows < t.minRows) && (n.rows = t.minRows), o.off(".resize"), ! function () {
                    if ("oninput" in document.body) return !0;
                    document.body.setAttribute("oninput", "return");
                    var e = "function" == typeof document.body.oninput;
                    return delete document.body.oninput, e
                }() ? "onpropertychange" in document.body ? o.on("propertychange.resize", s) : o.on("keypress.resize", s) : o.on("input.resize", s), o.one("focus", s), s()
            }), this
        }
    }.call(this);

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


