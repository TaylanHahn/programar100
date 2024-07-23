const menuDiv = document.getElementById('menu-mobile');
const btnAnimar = document.getElementById('btn-menu');

menuDiv.addEventListener('click', animar);

function animar() {
    menuDiv.classList.toggle('abrir');
    btnAnimar.classList.toggle('ativar');
};

document.addEventListener('DOMContentLoaded', (event) => {
    const check = document.getElementById('check');

    // Verifica se há uma preferência de tema salva no localStorage
    if (localStorage.getItem('theme') === 'dark') {
        document.body.classList.add('darkmode');
        check.checked = true;
    }

    check.addEventListener('click', () => {
        document.body.classList.toggle('darkmode');

        // Salva a preferência do tema no localStorage
        if (document.body.classList.contains('darkmode')) {
            localStorage.setItem('theme', 'dark');
        } else {
            localStorage.setItem('theme', 'light');
        }
    });
});

// Nota: chatGPT usado na implementação do localStorage :)