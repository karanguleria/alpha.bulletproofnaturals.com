jQuery(document).ready(function () {
    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
    };
    var visits = jQuery.cookie('visits') || 0;
    console.log(getUrlParameter('subscribed') == 1);
    if (getUrlParameter('subscribed') == 1) {

        visits++;
        jQuery.cookie('visits', visits, {expires: 30, path: '/'});
        console.debug(jQuery.cookie('visits'));
        $("#subscribe-model-thankyou").click();
    }
    if (jQuery.cookie('visits') > 0) {

    } else {
        console.log("showing model");
        setTimeout(function () {
           $("#subscribe-model").click();
        }, 20000);
    }
    jQuery('#btn-close').click(function () {
        visits++;
        jQuery.cookie('visits', visits, {expires: 1, path: '/'});
    });
});

