document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('produtoForm');
    const btnPOST = document.getElementById('btnPOST');

    btnPOST.addEventListener('click', async (e) => {
        e.preventDefault();  // Evita o recarregamento da página

        // Captura os valores do formulário
        const nome = document.getElementById('nome').value;
        const descricao = document.getElementById('descricao').value;
        const qtd = document.getElementById('qtd').value;
        const marca = document.getElementById('marca').value;
        const preco = document.getElementById('preco').value;
        const validade = document.getElementById('validade').value;

        // Cria o objeto do novo produto
        const novoProduto = {
            nome: nome,
            descricao: descricao,
            qtd: qtd,
            marca: marca,
            preco: preco,
            validade: validade
        };

        try {
            // Faz a requisição POST para inserir o produto
            const response = await fetch('http://localhost/projetoExpo/API/Controller/produto.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(novoProduto),
            });

            if (response.ok) {
                // Produto inserido com sucesso
                alert('Produto inserido com sucesso!');
                form.reset();  // Limpa o formulário
                window.location.href = '../../index.html';  // Redireciona para a página de listagem de produtos
            } else {
                // Tratamento de erro
                alert('Erro ao inserir o produto.');
            }
        } catch (error) {
            console.error('Erro:', error);
            alert('Ocorreu um erro ao inserir o produto.');
        }
    });
});
