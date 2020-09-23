$(function() {
    // Custom back button of Bagisto
    var redirect = history.length > 1 ? 'document.referrer;' : `'` + window.location.origin + '/admin/dashboard' + `'`;
    var newElement = '<i onclick="window.location = ' + redirect + '" class="icon angle-left-icon back-link"></i>';
    $('.content-container .content-wrapper .page-header .page-title i').replaceWith(newElement);
});
