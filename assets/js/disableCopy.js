document.addEventListener("contextmenu", function (event) {
  event.preventDefault();
});

document.addEventListener("keydown", function (event) {
  if (event.ctrlKey && event.key === "c") {
    event.preventDefault();
  }

  if (event.key === "F12") {
    event.preventDefault();
  }

  if (
    (event.ctrlKey &&
      event.shiftKey &&
      (event.key === "I" || event.key === "J")) ||
    (event.ctrlKey && event.key === "U")
  ) {
    // Ctrl+U for viewing source
    event.preventDefault();
  }
});
