// URL
const url = "http://localhost/api/contactos";

// DOM
const listado = document.querySelector('#listado-clientes');
const editarBoton = document.querySelector('.editar');

document.addEventListener('DOMContentLoaded', mostrarClientes);

listado.addEventListener('click', editarContacto);
listado.addEventListener('click', confirmarEliminar);
listado.addEventListener('click', showCliente);


// Mostrar Clientes/Contactos
async function mostrarClientes() {
    const clientes = await obtenerClientes();
    
    clientes.forEach(cliente => {
        const {nombre, apellido, nacimiento, id} = cliente;

        const row = document.createElement('tr');
        row.setAttribute("id",id)

        row.innerHTML += `
        <td class="id">
            ${id}
        </td>
        <td class="nombre">
            ${nombre}
        </td>
        <td class="apellido">
            ${apellido}
        </td>
        <td class="nacimiento">    
            ${nacimiento}
        </td>
        <td>
            <a data-cliente="${id}"class="btn btn-primary ver">Ver</a>
            <a data-cliente="${id}" class="btn btn-success editar">Editar</a>
            <a data-cliente="${id}" class="btn btn-danger eliminar">Eliminar</a>
        </td>
    `;

    listado.appendChild(row);
    })
}

const obtenerClientes = async () => {
    try {
        const resultado = await fetch(url);
        const clientes = await resultado.json();
        return clientes;
    } catch (error) {
        console.log(error);
    }
}

function showCliente(e) {
    let showCliente = document.querySelector('#showCliente');
    let nombreShow = document.querySelector('#nombreShow');
    let apellidoShow = document.querySelector('#apellidoShow');
    let nacimientoShow = document.querySelector('#nacimientoShow');

    if(e.target.classList.contains('ver')) {
        const clienteId = parseInt(e.target.dataset.cliente);
        
        let clientes = listado.childNodes;

        clientes.forEach(cliente => {
    
            if(clienteId == cliente.childNodes[1].innerText){
                nombreShow.innerHTML = cliente.childNodes[3].textContent;
                apellidoShow.innerHTML = cliente.childNodes[5].textContent;
                nacimientoShow.innerHTML = cliente.childNodes[7].textContent;
            }
        });
        showCliente.scrollIntoView();
    } 

}


// Crear Contactos
const formulario = document.querySelector('#formulario');
formulario.addEventListener('submit', validarCliente);

function validarCliente(e) {
    e.preventDefault();

    const nombre = document.querySelector('#nombre').value;
    const apellido = document.querySelector('#apellido').value;
    const nacimiento = document.querySelector('#nacimiento').value;

    const cliente = {
        nombre,
        apellido,
        nacimiento,
    };
    nuevoCliente(cliente);
}

const nuevoCliente = async cliente => {

    try{
        await fetch(url, {
            method: 'POST',
            body: JSON.stringify(cliente),
            headers: {
                'Content-Type': 'application/json'
            }
        });
        location.reload();
    } catch(error){
        console.log(error);
    }
}

// Editar Contacto

function editarContacto(e) {
    if(e.target.classList.contains('editar')) {
        const cliente = parseInt(e.target.dataset.cliente);
        editarCliente(cliente)
    }
}

function editarCliente(clienteId) {
    let nombreShow = document.querySelector('#nombreUpdate');
    let apellidoShow = document.querySelector('#apellidoUpdate');
    let nacimientoShow = document.querySelector('#nacimientoUpdate');

    let clientes = listado.childNodes;
    clientes.forEach(cliente => {
        console.log(cliente.childNodes)
        // console.log(cliente.childNodes[0].textContent)

        if(clienteId == cliente.childNodes[1].innerText){
            nombreShow.value = cliente.childNodes[3].textContent;
            apellidoShow.value = cliente.childNodes[5].textContent;
            nacimientoShow.innerHTML = cliente.childNodes[7].textContent;
        }
        
    });
}

// Eliminar Contacto

function confirmarEliminar(e) {
    if(e.target.classList.contains('eliminar')) {
        const clienteId = parseInt(e.target.dataset.cliente);
        const confirmar = confirm('¿Deseas eliminar este registro?');

        if(confirmar) {
            eliminarCliente(clienteId)
        }
    }
}

const eliminarCliente = async id => {
    try {
        await fetch(`${url}/${id}`,{
            method: 'DELETE'
        });
        location.reload();
    }catch (error) {
        console.log(error);
    }
}