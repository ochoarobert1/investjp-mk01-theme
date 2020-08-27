var submitBtn = document.getElementById('submitBtn'),
    passd = true;

function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

function telephoneCheck(str) {
    var patt = new RegExp(/^(\+{0,})(\d{0,})([(]{1}\d{1,3}[)]{0,}){0,}(\s?\d+|\+\d{2,3}\s{1}\d+|\d+){1}[\s|-]?\d+([\s|-]?\d+){1,2}(\s){0,}$/gm);
    return patt.test(str);
}

if (submitBtn != null) {
    submitBtn.addEventListener('click', function (e) {
        e.preventDefault();
        passd = true;

        /* NAME VALIDATION  */
        var inputText = document.getElementById('contact_name').value;
        var elements = document.getElementsByClassName('error-nombre');
        if (inputText == '' || inputText == null) {
            if (elements[0].classList.contains('d-none')) {
                elements[0].classList.toggle("d-none");
            }
            elements[0].innerHTML = custom_admin_url.error_nombre;
            passd = false;
        } else {
            if (inputText.length < 3) {
                if (elements[0].classList.contains('d-none')) {
                    elements[0].classList.toggle("d-none");
                }
                elements[0].innerHTML = custom_admin_url.invalid_nombre;
                passd = false;
            } else {
                if (elements[0].classList.contains('d-none')) {
                    elements[0].classList.toggle("d-none");
                }
                elements[0].innerHTML = '';
            }
        }

        /* EMAIL VALIDATION  */
        var inputText = document.getElementById('contact_email').value;
        var elements = document.getElementsByClassName('error-email');
        if (inputText == '' || inputText == null) {
            if (elements[0].classList.contains('d-none')) {
                elements[0].classList.toggle("d-none");
            }
            elements[0].innerHTML = custom_admin_url.error_email;
            passd = false;
        } else {
            if (validateEmail(inputText) == false) {
                if (elements[0].classList.contains('d-none')) {
                    elements[0].classList.toggle("d-none");
                }
                elements[0].innerHTML = custom_admin_url.invalid_email;
                passd = false;
            } else {
                if (elements[0].classList.contains('d-none')) {
                    elements[0].classList.toggle("d-none");
                }
                elements[0].innerHTML = '';
            }
        }

        /* PHONE VALIDATION  */
        var inputText = document.getElementById('contact_phone').value;
        var elements = document.getElementsByClassName('error-phone');
        if (inputText == '' || inputText == null) {
            if (elements[0].classList.contains('d-none')) {
                elements[0].classList.toggle("d-none");
            }
            elements[0].innerHTML = custom_admin_url.error_phone;
            passd = false;
        } else {
            if (telephoneCheck(inputText) == false) {
                if (elements[0].classList.contains('d-none')) {
                    elements[0].classList.toggle("d-none");
                }
                elements[0].innerHTML = custom_admin_url.invalid_phone;
                passd = false;
            } else {
                if (elements[0].classList.contains('d-none')) {
                    elements[0].classList.toggle("d-none");
                }
                elements[0].innerHTML = '';
            }
        }

        /* MESSAGE VALIDATION  */
        var inputText = document.getElementById('contact_comments').value;
        var elements = document.getElementsByClassName('error-comments');
        if (inputText == '' || inputText < 0) {
            if (elements[0].classList.contains('d-none')) {
                elements[0].classList.toggle("d-none");
            }
            elements[0].innerHTML = custom_admin_url.error_message;
            passd = false;
        } else {
            if (elements[0].classList.contains('d-none')) {
                elements[0].classList.toggle("d-none");
            }
            elements[0].innerHTML = '';
        }

        if (passd == true) {
            var info = 'action=send_message&contact_name=' +
                document.getElementById('contact_name').value + '&contact_email=' + document.getElementById('contact_email').value + '&contact_phone=' + document.getElementById('contact_phone').value + '&contact_comments=' + document.getElementById('contact_comments').value + '&g-recaptcha-response=' + document.getElementById('g-recaptcha-response').value;
            var elements = document.getElementsByClassName('loader');
            elements[0].classList.toggle("d-none");
            /* SEND AJAX */
            newRequest = new XMLHttpRequest();
            newRequest.open('POST', custom_admin_url.ajax_url, true);
            newRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
            newRequest.onload = function () {
                var result = JSON.parse(newRequest.responseText);
                if (result.success == true) {
                    elements[0].classList.toggle("d-none");
                    swal({
                        title: custom_admin_url.success_title,
                        text: custom_admin_url.success_form,
                        icon: 'success',
                        buttons: {
                            confirm: {
                                className: 'btn btn-center btn-main-button',
                            },
                        },
                    });
                } else {
                    elements[0].classList.toggle("d-none");
                    swal({
                        title: custom_admin_url.error_title,
                        text: custom_admin_url.error_form,
                        icon: 'error',
                        buttons: {
                            confirm: {
                                className: 'btn btn-center btn-main-button',
                            },
                        },
                    });
                }
            };
            newRequest.send(info);
        }

    });
}
