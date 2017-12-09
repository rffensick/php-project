var edit = document.querySelectorAll('.btn-edit');
var add = document.querySelector('.btn-add');
var trHead = document.querySelector('thead tr');
var trHeadInputs = document.querySelectorAll('thead input');
var idInput = document.querySelector('input[name=id_user]');


function cb() {
    var btnEdit = this;

    var tr = btnEdit.parentNode.parentNode.parentNode;
    var trId = tr.getAttribute('data-value');

    trHead.setAttribute('data-value', trId);

    if (add.hasAttribute('name', 'do_add')) {
        add.setAttribute('name', 'do_edit');
        add.classList.remove('btn-primary');
        add.classList.add('btn-success');
        add.setAttribute('value', 'Save');
    }

    var allTd = tr.querySelectorAll('td');
    
    for (let i = 0; i < allTd.length - 1; i++) {
        const tdValue = allTd[i].innerText;
        trHeadInputs[i].value = tdValue;
    }

    idInput.setAttribute('value', trId);

}


for (var i = 0; i < edit.length; i++) {
    edit[i].addEventListener('click', cb);
}