function entrar() {
        
        let nome_user = document.getElementById("nome").value;
        let senha_user = document.getElementById("senha").value;
        let email_user = document.getElementById("email").value;

        if (nome_user > 5 && nome_user < 13) {
            alert("não pode entrar");
        }
        else if (email_user >= 8 && email < 50) {
            alert("não pode entrar");
        }
        else if (senha_user < 4 && senha_user == caracteres) {
            alert("não pode entrar");
        }
        else {
            alert("Bem_vindo!")
            window.location = "inicial/index_home.html"
            function resgistrado(nome_user, email_user, senha_user) {
                let usuario = [nome_user = [], email_user = [], senha_user = []];
                return resgistrado(nome_user, email_user, senha_user);
            }
        }
    }