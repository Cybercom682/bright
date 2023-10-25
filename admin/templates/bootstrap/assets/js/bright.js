//GENERAL
function openTab(tabLinkId) {
    $(`#${tabLinkId}`).tab('show');
}
function fadeOutAlert(){
    if ($('.alert').length > 0) {
        $('.alert').fadeOut(2000);
    }
}
//POST | DELETE
function deleteElement(idColumnName,id,handler){
    var form = document.createElement('form');
    form.method = 'POST';
    form.action = window.location.href;
    var hiddenInput = document.createElement('input');
    hiddenInput.type = 'hidden';
    hiddenInput.name = 'action';
    hiddenInput.value = 'delete';
    var hiddenInput2 = document.createElement('input');
    hiddenInput2.type = 'hidden';
    hiddenInput2.name = 'handler';
    hiddenInput2.value = handler;
    var idValue = document.createElement('input');
    idValue.type = 'hidden';
    idValue.name = idColumnName;
    idValue.value = id;
    form.appendChild(hiddenInput);
    form.appendChild(hiddenInput2);
    form.appendChild(idValue);
    document.body.appendChild(form);
    form.submit();
}
//EVENTS
document.addEventListener('DOMContentLoaded', () => {
    fadeOutAlert();
})