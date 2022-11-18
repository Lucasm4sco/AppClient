const allDeleteButtons = document.querySelectorAll('.btn-deletar');
const btnConfirmDelete = document.querySelector('#deletar');

let id_cliente;

allDeleteButtons.forEach( button => 
    button.addEventListener('click', () => id_cliente = button.getAttribute('id')
));

btnConfirmDelete.addEventListener('click', () => {
    fetch(`/cliente/deletar/${id_cliente}`, {
        method: 'DELETE',
        headers: {
            "X-CSRF-Token": document.querySelector('input[name=_token]').value,
            url: '/cliente/deletar/' + id_cliente
        }
    })
    .then(() => window.location.reload())
    .catch((error) => alert('Ocorreu um erro inesperado:', error.message));
})