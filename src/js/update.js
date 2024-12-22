
let form = document.querySelector(".edit")
function showForm(id) {
  let personToEdit = document.querySelector(`#person${id}`)
  for (let i = 0; i < 3; i++) {
    form.children[i].value = personToEdit.children[i].children[2].innerHTML 
  }
  form.setAttribute("action",`update.php?id=${id}`)
  form.style.display = "flex"
}