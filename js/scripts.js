function runThis() {
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    });
  }
}

function openModal() {
  var modal = document.getElementById("myNav");
  if (!modal) {
    return;
  }
  modal.style.width = "100%";
  modal.removeAttribute("inert");
  var closeBtn = modal.querySelector(".closebtn");
  if (closeBtn) {
    closeBtn.focus();
  }
}

function closeModal() {
  var modal = document.getElementById("myNav");
  if (!modal) {
    return;
  }
  modal.style.width = "0%";
  modal.setAttribute("inert", "");
}

function initContactModal() {
  var modal = document.getElementById("myNav");
  if (!modal) {
    return;
  }

  var closeBtn = modal.querySelector(".closebtn");
  if (closeBtn) {
    closeBtn.addEventListener("click", closeModal);
  }

  document.addEventListener("keydown", function(event) {
    if (event.key === "Escape" && !modal.hasAttribute("inert")) {
      closeModal();
    }
  });

  document.querySelectorAll(".js-contact-link").forEach(function(link) {
    link.addEventListener("click", function(event) {
      event.preventDefault();
      openModal();
    });
  });

  document.querySelectorAll(".js-open-modal").forEach(function(button) {
    button.addEventListener("click", openModal);
  });
}

document.addEventListener("DOMContentLoaded", initContactModal);