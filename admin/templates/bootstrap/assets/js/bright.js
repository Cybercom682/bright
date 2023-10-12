function goToTab(target, tabContainerID) {
    let tabLink = $(target).attr('href');
    if ($(tabContainerID).length > 0) {
        $(tabContainerID).find('.active, .show').removeClass('active show');
        $(tabLink).addClass('show active');
    }
}
