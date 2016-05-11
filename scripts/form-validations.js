function onError(e, msg) {
  var error = document.createElement('span');

  e.className += ' has-error';
  error.setAttribute('class', 'error-validation')
  error.appendChild(document.createTextNode(msg));
  e.parentNode.appendChild(error);
}

function validateForm() {
  var email = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/
  var form = document.forms[0];
  var validates = true;
  var fields = form.querySelectorAll('has-error');
  var errormsgs = form.getElementsByClassName('error-validation');

  for (var i = 0; i < fields.length; i++) {
    fields[i].className = fields[i].className.replace('has-error', '');
  }

  while (errormsgs[0]) {
    errormsgs[0].parentNode.removeChild(errormsgs[0]);
  }

  for (var i = 0; i < form.elements.length; i++) {
    var elem = form.elements[i];

    if (elem.required) {
      if (!elem.value) {
        onError(elem, 'Can not be blank');
        validates = false;
      } else if (elem.name === 'mail' && !email.test(elem.value)) {
        onError(elem, 'Must be a valid email');
        validates = false;
      } else if (elem.name === 'name' && !(/^[a-zA-Z ]+$/.test(elem.value))) {
        onError(elem, 'Can only contain letters');
        validates = false;
      }
    }
  }

  return validates;
}
