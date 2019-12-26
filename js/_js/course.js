//@prepros-prepend jquery-2.1.1.min.js
//@prepros-prepend bootstrap.min.js
//@prepros-prepend flipclock.min.js

var isIE = false || !!document.documentMode;

if (isIE) {
    var head = document.getElementsByTagName("head")[0];
    var link = document.createElement("link");
    link.rel = "stylesheet";
    link.href = "../css/course-ie.min.css";
    head.appendChild(link);
}

$(document).ready(function () {
    /* Якорь */
    $(function () {
        $("a[href='#prices'], a[href='#tasks']").click(function (h) {
            h.preventDefault();
            var f = $(this).attr("href"),
                g = $(f).offset().top;
            $("body,html").animate({
                scrollTop: g
            }, 1500)
        });
    });
    /* Таймер */
    $(function () {
        /* Таймер */
        var clock;
        var futureDate = new Date("September 26, 2019 00:00 AM UTC+3");
        var currentDate = new Date();
        var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

        function dayDiff(first, second) {
            return (second - first) / (1000 * 60 * 60 * 24);
        }
        if (dayDiff(currentDate, futureDate) < 100) {
            $('.clock').addClass('twoDayDigits');
        } else {
            $('.clock').addClass('threeDayDigits');
        }
        if (diff < 0) {
            diff = 0;
            $('.clock-stop').addClass("alert-danger");
            $('.clock-stop').html("Скидка уменьшилась!!");
            // $('#link-1').attr('href', 'https://shop.mastervision.su/?r=ordering/cart/as1&id=3810&clean=true&lg=ru');
            // $('#link-2').attr('href', 'https://shop.mastervision.su/?r=ordering/cart/as1&id=3814&clean=true&lg=ru');
            // $('.prepayment, .timer,.cost-sale, .cost-today').remove();
            // $('.cost-full span').css('textDecoration', 'none');
        }
        clock = $('.clock').FlipClock(diff, {
            clockFace: 'HourlyCounter',
            countdown: true,
            language: 'ru',
            callbacks: {
                stop: function () {
                    $('.clock-stop').addClass("alert-danger");
                    $('.clock-stop').html("Скидка уменьшилась!!");
                    // $('#link-1').attr('href', 'https://shop.mastervision.su/?r=ordering/cart/as1&id=3810&clean=true&lg=ru');
                    // $('#link-2').attr('href', 'https://shop.mastervision.su/?r=ordering/cart/as1&id=3814&clean=true&lg=ru');
                    // $('.prepayment, .timer,.cost-sale, .cost-today').remove();
                    // $('.cost-full span').css('textDecoration', 'none');
                }
            },
        });
    });
    /*Конец документа*/
});