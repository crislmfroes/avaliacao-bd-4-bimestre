const alunoList = document.querySelector('.list-aluno-options');
const alunoInputId = document.querySelector('#aluno-id');
const alunoInput = document.querySelector('#aluno-search-input');
const api = 'http://localhost:8000/api/listAlunos.php';

alunoList.addEventListener('click', function (event) {
    alunoInput.value = event.target.innerText;
    alunoInputId.value = event.target.value;
    clearAlunoList();
});

function alunoInList(aluno) {
    alunoList.childNodes.forEach(node => {
        if (node.value == aluno.codigo) {
            return true;
        }
        return false;
    })
}

function clearAlunoList() {
    alunoList.innerHTML = '';
}

function onMouseOverAluno(event) {
    console.dir(event);
    event.target.classList.add('list-group-item-primary');
}

function onMouseLeaveAluno(event) {
    console.dir(event);
    event.target.classList.remove('list-group-item-primary');
}

function inserirAlunos(e) {
    clearAlunoList();
    e.forEach(aluno => {
        console.dir(aluno);
        if (!alunoInList(aluno)) {
            const alunoListItem = document.createElement("li");
            alunoListItem.classList.add('list-group-item');
            alunoListItem.value = aluno.codigo;
            alunoListItem.innerText = aluno.nome;
            alunoListItem.onmouseenter = onMouseOverAluno;
            alunoListItem.onmouseleave = onMouseLeaveAluno;
            alunoList.appendChild(alunoListItem);
        } else {
            removeAlunoFromList(aluno);
        }
    });
}

alunoInput.addEventListener('keyup', function (event) {
    const target = event.target;
    const nameQuery = '%'+target.value+'%';
    console.dir(nameQuery);
    $.getJSON(api, {
        nome: nameQuery,
        limit: 100,
        offset: 0
    }, inserirAlunos)
});