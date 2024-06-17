var modal = document.getElementById("myModal");
var btn = document.querySelector(".btn__new-task");
var span = document.getElementsByClassName("close")[0];

btn.addEventListener('click', () => {
    console.log('clicou');
    modal.style.display = "block";
});

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
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


var checkboxid = []

function handleCheckbox(checkbox) {
  console.log('Checkbox clicado:', checkbox.id);
  if (checkbox.checked) {
      console.log('Checkbox marcado');
      checkboxid.push = (getElementById(checkbox.id))
      console.log(checkboxid)
  } else {
      console.log('Checkbox desmarcado');
  }
}

function excluir(){
      
}