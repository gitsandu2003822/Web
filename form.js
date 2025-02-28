function validateInput() {
    const n = document.getElementById("name").value.trim();

    const name_error = document.getElementById("name_error");

    name_error.textContent = "";

    let isValid = true;

  
    if (n === "" || n.length < 8) {
        name_error.textContent = "Please enter your name (at least 8 characters)";
        isValid = false;
    }

    return isValid;
}