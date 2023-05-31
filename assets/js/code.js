function validateForm(){
    var inputs = document.querySelectorAll('input[name^="q"]');
    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].value == null) {
          alert('Please answer all the questions before submitting the quiz.');
          return false; // Prevent the form from being submitted
        }
      }
      
    // If all questions have been answered, allow the form to be submitted
    return true;
}

//function to display block if clicked
function openSubMenu(index){
    var subMenu = document.getElementsByClassName("sub-menu")[index];
    if(subMenu.style.display == 'block'){
      subMenu.style.display = 'none';
    }else{
      subMenu.style.display = 'block';
    }

}

//funciton for opening menu when clicked
function openingMenu(){
  var menu = document.getElementById("nav-menu");
  console.log(menu);
  if(menu.style.display == 'block'){
      menu.style.display = 'none';
  }else{
      menu.style.display = 'block';
  }


}

//validation
function validation() {
    let name = document.forms.form.name.value;
    let comment = document.forms.form.comment.value;

    if (!name || !comment) {
        alert('Both fields must be filled out!');
        return false;
    }
    return true;
}






