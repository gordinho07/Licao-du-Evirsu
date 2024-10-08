document.addEventListener('DOMContentLoaded', () => {
    const btnPUT = document.getElementById('btnPUT');
    const produtoForm = document.getElementById('produtoForm');

    btnPUT.addEventListener('click', (e) => {
        e.preventDefault();

        const id = document.getElementById('id').value;
        const nome = document.getElementById('nome').value;
        const descricao = document.getElementById('descricao').value;
        const qtd = document.getElementById('qtd').value;
        const marca = document.getElementById('marca').value;
        const preco = document.getElementById('preco').value;
        const validade = document.getElementById('validade').value;

        const produtoAtualizado = {
            id: id,
            nome: nome,
            descricao: descricao,
            qtd: qtd,
            marca: marca,
            preco: preco,
            validade: validade
        };

        fetch(`http://localhost/API/Controller/produto.php`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(produtoAtualizado)
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === '204') {
                alert('Produto atualizado com sucesso!');
            } else {
                alert('Erro ao atualizar o produto.');
            }
        })
        .catch(error => {
            console.error('Erro:', error);
        });
    });
});
