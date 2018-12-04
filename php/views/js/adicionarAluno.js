const alunoForm = document.querySelector('.aluno-form');
const adicionarButton = alunoForm.querySelector('.btn');
adicionarButton.addEventListener('click', function () {
    alunoForm.insertBefore(getInput('aluno[]', 'aluno'), adicionarButton);
    alunoForm.insertBefore(getInput('email[]', 'email'), adicionarButton);
});

function getInput(name, placeholder) {
    const input = document.createElement('input');
    input.setAttribute('name', name);
    input.setAttribute('type', 'text');
    input.setAttribute('placeholder', placeholder);
    input.classList.add("form-control");
    return input;
}