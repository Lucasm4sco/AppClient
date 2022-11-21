const allDeleteButtons = document.querySelectorAll('.btn-deletar');
const btnConfirmDelete = document.querySelector('#deletar');

let id_telefone;

allDeleteButtons.forEach( button => 
    button.addEventListener('click', () => id_telefone = button.getAttribute('id')
));

btnConfirmDelete.addEventListener('click', () => {
    fetch(`/telefone/deletar/${id_telefone}`, {
        method: 'DELETE',
        headers: {
            "X-CSRF-Token": document.querySelector('input[name=_token]').value,
            url: '/telefone/deletar/' + id_telefone
        }
    })
    .then(() => window.location.reload())
    .catch((error) => alert('Ocorreu um erro inesperado:', error.message));
})