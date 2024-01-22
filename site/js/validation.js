const validation = new JustValidate("#signup");

validation
    .addField("#name", [
        {
            rule: "required",
            errorMessage: "Campo obrigatório"
        }
    ])
    .addField("#email", [
        {
            rule: "required",
            errorMessage: "Campo obrigatório"
        },
        {
            rule: "email",
            errorMessage: "O email tem formato inválido"
        },
        {
            validator: (value) => () => {
                return fetch("validate-email.php?email=" +
                encodeURIComponent(value))
                    .then(function(response) {
                        return response.json();
                    })
                    .then(function(json) {
                        return json.available;
                    });
            },
            errorMessage: "O email já está registado"
        }
    ])
    .addField("#password", [
        {
            rule: "required",
            errorMessage: "Campo obrigatório"
        },
        {
            rule: "password",
            errorMessage: "A password deve conter pelo menos oito caracteres, e pelo menos uma letra e um número"
        }
    ])
    .addField("#password_confirmation", [
        {
            validator: (value, fields) => {
                return value === fields["#password"].elem.value;
            },
            errorMessage: "As passwords devem ser iguais"
        }
    ])
    .onSuccess((event) => {
        document.getElementById("signup").submit();
    });