document.addEventListener('DOMContentLoaded', () => {
    const btnGET = document.getElementById('btnGET');
    const produtosContainer = document.getElementById('produtosContainer');

    btnGET.addEventListener('click', () => {
        fetch(`http://localhost/projetoExpo/API/Controller/produto.php`) 
            .then(response => response.json())
            .then(data => {
                data.forEach(produto => {
                    const card = document.createElement('div');
                    card.classList.add('card');
                    card.innerHTML = `
                        <h3>${produto.nome}</h3>
                        <p><strong>Descrição:</strong> ${produto.descricao}</p>
                        <p><strong>Quantidade:</strong> ${produto.qtd}</p>
                        <p><strong>Marca:</strong> ${produto.marca}</p>
                        <p><strong>Preço:</strong> R$ ${produto.preco}</p>
                        <p><strong>Validade:</strong> ${produto.validade}</p>
                    `;
                    produtosContainer.appendChild(card);
                });
            })
    });
});