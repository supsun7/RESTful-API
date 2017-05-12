var FormField = function(name, regex) {
    this.name = name;
    this.regex = regex;
};

var form = [
    new FormField('name', /^[a-zA-Z ]+$/),
    new FormField('email', /^[a-zA-Z0-9_]{1,}@[a-z0-9]{1,}\.[a-z]{1,}$/),
];


var validateForm = function() {
    var valid = true;
    var toggleError;

    for (var i = 0; i < form.length; i++) {
        toggleError = 'none';
        if (!isValidField(form[i])) {
            valid = false;
            toggleError = 'block';
        }
        toggleFieldError(form[i].name, toggleError);
    }

    if (valid) {
        document.getElementById('myForm').submit();
    }
};

var isValidField = function(formField) {
    return formField.regex.test(
        getFormFieldValue(formField.name)
    );
};

var getFormFieldValue = function(name) {
    return document.getElementsByName(name)[0].value;
};

var toggleFieldError = function(name, visibility) {
    document.getElementById('error-' + name).style.display = visibility;
};