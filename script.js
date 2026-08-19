function buscarDados() {
    const id = document.getElementById("userId").value;

    fetch(`https://jsonplaceholder.typicode.com/users/${id}`, {
        method: "GET",
        headers: {
            "Content-Type": "application/json"
        }
    })
        .then(res => res.json())
        .then(usuario => {
            const resultado = document.getElementById("resultado");
            resultado.innerHTML += `<li>${usuario.name} - ${usuario.email}</li>`;
        })
        .catch(err => {
            console.error("Erro na requisição:", err);
        });
}

const btn = document.getElementById("btn");

btn.addEventListener("click", function (event) {
    event.preventDefault();
    buscarDados();
});

function listarUsuarios() {
    fetch("https://jsonplaceholder.typicode.com/users")
        .then(res => res.json())
        .then(usuarios => {
            const lista = document.getElementById("listaUsuarios");
            lista.innerHTML = "";
            usuarios.forEach(usuario => {
                lista.innerHTML += `
                    <li>${usuario.name} - ${usuario.email}</li>
                `;
            });
        })
        .catch(err => {
            console.error("Erro na requisição:", err);
        });
}