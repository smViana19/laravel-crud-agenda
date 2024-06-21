document.addEventListener('DOMContentLoaded', (event) => {
    const btn = document.getElementById('btnNewTask');
    const modal = document.getElementById('myModal');
    const btnsub = document.getElementById('submit'); 

    btn.addEventListener('click', () => {
  //   const span = document.getElementById('spanerro'); 
    btnsub.style.backgroundColor = '#7d9eba'; 
    console.log('clicou');
    modal.style.display = "block";
    const inputTarefa = document.getElementById('tarefa');
    const inputCategoria = document.getElementById('categoria');
    const inputDesenvolvedor = document.getElementById('desenvolvedor');
    const selectUrgencia = document.getElementById('urgencia');
    const selectStatus = document.getElementById('status');
    const inputDataEntrega = document.getElementById('entrega');
    btnsub.disabled = true;
    inputTarefa.addEventListener('blur', verificarCamposVazios);
    inputCategoria.addEventListener('blur', verificarCamposVazios);
    inputDesenvolvedor.addEventListener('blur', verificarCamposVazios);
    selectUrgencia.addEventListener('blur', verificarCamposVazios);
    selectStatus.addEventListener('blur', verificarCamposVazios);
    inputDataEntrega.addEventListener('blur', verificarCamposVazios);




    function verificarCamposVazios() {
        const alertUser = document.querySelector('#errorSubmit')
        const campos = [inputTarefa, inputCategoria, inputDesenvolvedor, selectUrgencia, selectStatus, inputDataEntrega];
        let haCampoVazio = false;
      
        for (const campo of campos) {
          if (campo.value === '' || campo.value === null) {
            haCampoVazio = true;
            break;
          }
        }
      
        if (haCampoVazio) {
          btnsub.disabled = true;
          btnsub.style.backgroundColor = '#7d9eba'; 
          console.log('Campos vazios!');  
          alertUser.innerHTML = 'Preencha todos os campos'
       //   span.style.display = "block"

        } else {
          btnsub.disabled = false;
          btnsub.style.backgroundColor = '#0269C2';
          console.log('Todos os campos preenchidos!');
          alertUser.innerHTML = ' '

         //  span.style.display = "block"
        
        }
      }
    });

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    document.getElementById('searchInput').addEventListener('keyup', function() {
        const searchValue = this.value.toLowerCase();
        const rows = document.querySelectorAll('#dataTable tbody tr');
        
        rows.forEach(row => {
            const cells = row.querySelectorAll('td');
            let rowContainsSearchValue = false;

            cells.forEach(cell => {
                if (cell.textContent.toLowerCase().includes(searchValue)) {
                    rowContainsSearchValue = true;
                }
            });

            row.style.display = rowContainsSearchValue ? '' : 'none';
        });
    });
});


function updateStatus(id) {
    document.getElementById(`status-form-${id}`).submit();
}


function filterTasks(status) {
    const rows = document.querySelectorAll('tr[data-status]');
    rows.forEach(row => {
        if (status === 'all' || row.dataset.status === status) {
            row.classList.remove('hidden');
        } else {
            row.classList.add('hidden');
        }
    });
}

var checkboxid = [];

function handleCheckbox(checkbox) {
    console.log('Checkbox clicado:', checkbox.id);
    if (checkbox.checked) {
        console.log('Checkbox marcado');
        checkboxid.push(checkbox.id);
        console.log(checkboxid);
    } else {
        console.log('Checkbox desmarcado');
        checkboxid = checkboxid.filter(id => id !== checkbox.id);
        console.log(checkboxid);
    }
}

document.getElementById('btnDelete').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('idsInput').value = JSON.stringify(checkboxid);
    document.getElementById('deleteForm').submit();
});


 
