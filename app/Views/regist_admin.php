<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
    <title>Register</title>
</head>
<body>
<section class="vh-100" style="background-color: #F3D200;"> 
    <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="<?= base_url('assets/img/fantasy.jpg') ?>"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; width: 100%; height: 100%;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                <form action="<?= base_url('regist_admin/register') ?>" method="post"> 
                <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('error') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?>
                    <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #33FFBE;"></i>
                    <span class="h1 fw-bold mb-0">Register</span>
                    </div>    
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Create your account</h5>
                    <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" name="email" id="form2Example17" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Email address</label>
                    <?php if (session()->getFlashdata('email_error')): ?>
                        <div class="text-danger"><?= session()->getFlashdata('email_error') ?></div>
                    <?php endif; ?>
                    </div>
                    <div data-mdb-input-init class="form-outline mb-4 position-relative">
                    <div class="input-group">
                    <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" />
                    <span class="input-group-text" onclick="togglePassword('form2Example27')">
                        <i class="fas fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                    </span>
                    </div>
                    <label class="form-label" for="form2Example27">Password</label>
                    <?php if (session()->getFlashdata('password_error')): ?>
                        <div class="text-danger"><?= session()->getFlashdata('password_error') ?></div>
                    <?php endif; ?>
                    </div>
                    <div data-mdb-input-init class="form-outline mb-4 position-relative">
                    <div class="input-group">
                    <input type="password" name="confirm_password" id="form2Example28" class="form-control form-control-lg" />
                    <span class="input-group-text" onclick="togglePassword('form2Example28')">
                        <i class="fas fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                    </span>
                    </div>
                    <label class="form-label" for="form2Example28">confirm Password</label>
                    <?php if (session()->getFlashdata('confirm_password_error')): ?>
                        <div class="text-danger"><?= session()->getFlashdata('confirm_password_error') ?></div>
                    <?php endif; ?>
                    </div>
                    <div class="pt-1 mb-4">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="submit">Register</button>
                    </div>
                <a class="small text-muted" href="#!">Forgot password?</a>
                <p class="mb-5 pb-lg-2" style="color: #393f81;">Already have an account? <a href="<?= base_url('log_admin') ?>" 
                    style="color: #393f81;">Login here</a></p>
                <a href="<?= base_url('log_admin') ?>" class="small text-muted">Back to Login</a>
                <a href="#!" class="small text-muted">Terms of use.</a>
                <a href="#!" class="small text-muted">Privacy policy</a>
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>
        function togglePassword(id) {
            var input = document.getElementById(id);
            input.type = (input.type === "password") ? "text" : "password";
        }
    </script>
</body>
</html>