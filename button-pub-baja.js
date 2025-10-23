function publicarBaja() {
    var button = document.getElementById('btnpublicbaja');
    if (button.innerHTML === 'Publicar Evento') {
        button.innerHTML = 'Dar Baja Al Evento';
        button.classList.remove('btn-primary');
        button.classList.add('btn-danger');
    } else {
        button.innerHTML = 'Publicar Evento';
        button.classList.remove('btn-danger');
        button.classList.add('btn-primary');
    }
}