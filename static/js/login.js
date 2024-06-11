// Đối tượng `Validator`
function Validator(options) {

    function getParent(element, selector) {
        while (element.parentElement) {
            if (element.parentElement.matches(selector)) {
                return element.parentElement;
            }
            element = element.parentElement;
        }
    }
    var selectorRules = {};
    function validate(inputElement, rule, errorElement) {
        // var errorMessage = rule.test(inputElement.value);
        var errorMessage;
        var rules = selectorRules[rule.selector];
        for (var i = 0; i < rules.length; ++i) {
            errorMessage = rules[i](inputElement.value);
            if (errorMessage) break;
        }
        if (errorMessage) {
            errorElement.innerText = errorMessage;
            getParent(inputElement, options.formGroupSelector).classList.add('invalid');
        }

        return !errorMessage;
    }
    var formElement = document.querySelector(options.form);
    if (formElement) {
        formElement.onsubmit = function (e) {
            e.preventDefault();

            var isFormValid = true;

            options.rules.forEach(function (rule) {
                var inputElement = formElement.querySelector(rule.selector);
                var errorElement = getParent(inputElement, options.formGroupSelector).querySelector(options.errorSelector);
                var isValid = validate(inputElement, rule, errorElement);
                if (!isValid) {
                    isFormValid = false;
                }
            });

            if (isFormValid) {
                if (typeof options.onsubmit === 'function') {
                    var enableInput = formElement.querySelectorAll('[name]');
                    var formValues = Array.from(enableInput).reduce(function (values, input) {
                        values[input.name] = input.value
                        return values;
                    }, {});
                    options.onsubmit(formValues);
                }
                else {
                    formElement.onsubmit();
                }
            }
        }

        options.rules.forEach(function (rule) {
            if (Array.isArray(selectorRules[rule.selector])) {
                selectorRules[rule.selector].push(rule.test);
            } else {
                selectorRules[rule.selector] = [rule.test];
            }
            var inputElement = formElement.querySelector(rule.selector);
            var errorElement = getParent(inputElement, options.formGroupSelector).querySelector(options.errorSelector);
            if (inputElement) {
                inputElement.onblur = function () {
                    validate(inputElement, rule, errorElement);
                }
                inputElement.oninput = function () {
                    errorElement.innerText = '';
                    getParent(inputElement, options.formGroupSelector).classList.remove('invalid');
                }
            }
        });
    }


}

Validator.isRequired = function (selector, messager) {
    return {
        selector: selector,
        test: function (value) {
            return value ? undefined : messager || 'vui lòng nhập  trường này';
        }
    }
}

Validator.isEmail = function (selector) {
    return {
        selector: selector,
        test: function (value) {
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return mailformat.test(value) ? undefined : 'Email không chính xác';
        }
    }
}

//rule
// nếu True => undifined ngược lại thì trả về "..."
Validator.minLength = function (selector, min) {
    return {
        selector: selector,
        test: function (value) {
            return value.length >= min ? undefined : 'Tối thiểu 6 kí tự';
        }
    }
}

Validator.isComfirmed = function (selector, getComfirmed) {
    return {
        selector: selector,
        test: function (value) {
            return value === getComfirmed() ? undefined : 'kết quả không chính xác';
        }
    }
}