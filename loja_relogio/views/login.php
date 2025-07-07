<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Login - Loja de Relógios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow rounded-4">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Iniciar Sessão</h3>
                        <form action="../api/auth.php" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" required placeholder="exemplo@email.com">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Palavra-passe:</label>
                                <input type="password" name="password" id="password" class="form-control" required placeholder="********">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Entrar</button>
                            </div>
                        </form>
                        <p class="mt-3 text-center">Ainda não tem conta? <a href="registo.php">Registe-se aqui</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
