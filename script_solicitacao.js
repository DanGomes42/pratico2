const form = document.getElementById('formCadastroSolicitacao');
const mensagem = document.getElementById('mensagem');

form.addEventListener('submit', (event) => {
    event.preventDefault();

    const descricao = document.getElementById('descricao').value;
    const urgencia = document.getElementById('urgencia').value;
    const funcionario = document.getElementById('funcionario').value;

    const dataAbertura = new Date().toISOString().slice(0, 10);

    fetch('solicitacao.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: `descricao=${descricao}&urgencia=${urgencia}&funcionario=${funcionario}&dataAbertura=${dataAbertura}`
    })
    .then(response => response.json())
    .then(data => {
        mensagem.textContent = data.mensagem;
    })
    .catch(error => {
        console.error('Erro ao enviar os dados:', error);
        mensagem.textContent = 'Ocorreu um erro ao cadastrar a solicitação.';
    });
});