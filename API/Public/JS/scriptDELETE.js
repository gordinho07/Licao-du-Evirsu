document.addEventListener('DOMContentLoaded', () => {
    const btnDELETE = document.getElementById('btnDELETE');
    const deleteForm = document.getElementById('deleteForm');

    btnDELETE.addEventListener('click', (event) => {
        event.preventDefault();
        const id = document.getElementById('id').value; 

        if (id) {
            fetch(`http://localhost/projetoExpo/API/Controller/produto.php`, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json', 
                },
                body: JSON.stringify({ id }) 
            })
            .then(response => response.json())
            .then(data => {
                alert("Produto excluido com sucesso"); 
            })
        } else {
            alert('Por favor, insira um ID válido.');
        }
    });
});
