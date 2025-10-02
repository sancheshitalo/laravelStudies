<?php require('layouts/header.php'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-5">

            <!-- logo -->
            <div class="text-center mb-5">
                <img src="assets/images/logo.png" alt="Logo" width="200px">
            </div>

            <!-- redefine password -->
            <div class="card p-5">

                <form action="#" method="post">

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="password">Senha</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    
                    <div class="mb-3">
                        <label for="password_confirmation ">Confirmar Senha</label>
                        <input type="password" class="form-control" id="password_confirmation " name="password_confirmation ">
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#">Já sei a minha senha?</a>
                        <button type="submit" class="btn btn-primary px-4">Definir Senha</button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

<?php require('layouts/footer.php'); ?>