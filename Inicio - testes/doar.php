<!DOCTYPE html>
<html lang="pt-BR">
	<head>

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" type="text/php" href="cadastro.php" />

		<meta charset="UTF-8" />
		<title> Doar </title>

    </head>

    <body>
        <form name="tcc" method="post" action="index.html" >
            <label>
                Nome :
            </label>
                <input type="text" name="nome" placeholder="Digite seu Nome" required /> <br><br>
            <label>
                Sobrenome:
            </label>
                <input type="text" name="sobrenome" placeholder="Digite seu Sobrenome" required/> <br><br>

            <label>
                Telefone:
            </label>
                <input type="number" name="telefone" required/> <br><br>

            <label>
                Data de nascimento:
            </label>
                <input type="date" name="datanas" required/> <br><br>

            <label>
                O que você deseja: <br>
            </label>
                <input type="radio" name="doar"value="doar"> Doar <br>
                <input type="radio" name="receber"value="receber" checked> Receber <br><br>

            <label>
                Qual linguagem de programação você conhece?<br>
            </label>
                <input type="checkbox" name="asp"  /> ASP <br>
                <input type="checkbox" name="php"  /> PHP <br>			
                <input type="checkbox" name="java" /> JAVA <br><br>
        
                <button> <a href="testando.html"> </a> </button> <input type="submit" value="Cadastrar" />
        </form>
    </body>
</html>
