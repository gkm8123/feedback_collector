function validateForm() {
  const message = document.querySelector('textarea[name="message"]').value.trim();
  if (message === "") {
    alert("Please enter your feedback message.");
    return false;
  }
  return true;
}
