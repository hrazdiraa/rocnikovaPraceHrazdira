let name;
let email;
let file;
let describtion;

document.querySelector("form").addEventListener("submit", function (e) {
  e.preventDefault();
});

function checkInputs(form) {
  name = form.name.value;
  email = form.email.value;
  file = form.file.files[0];
  description = form.description.value;

  if (file.size < 70 * 1024) {
    let reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = function () {
      var obj = new XMLHttpRequest();
    
      if (name !== "" && email !== "" && file.name !== "") {
        if (
          name.length > 0 &&
          email.length > 0 &&
          email.includes("@") &&
          String(file.name).includes(".stl")
        ) {
          obj.open("post", form.action, true);
          obj.setRequestHeader("Content-Type", "application/json");

          obj.send(
            JSON.stringify({
              name: name,
              filename: file.name,
              file: reader.result,
              email: email,
              description: description,
            })
          );

          form.name.value = "";
          form.email.value = "";
          form.file.value = "";
          form.description.value = "";

          return false;
        } else {
          alert("Některé z polí je špatně zadáno! Zkuste to prosím znovu.");
        }
      } else {
        alert("Některé z polí je špatně zadáno! Zkuste to prosím znovu.");
      }
    };
  } else {
    alert("Soubor je moc velký! Vyberte prosím menší.");
  }
}