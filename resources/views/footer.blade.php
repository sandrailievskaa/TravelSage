<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TravelSage</title>
    <link rel="stylesheet" href="{{ asset('CSSs/homeStyle.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">

    <style>
        .footerIcons {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            justify-items: center;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
<footer id="kontakt" class="bg-body-tertiary text-center">
    <div class="container p-4 pb-0">
        <div class="container p-4">
            <section class="imgFooter">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <img src="{{ asset('images/f1.jpg') }}" class="w-100 rounded shadow">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <img src="{{ asset('images/f4.jpg') }}" class="w-100 rounded shadow">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <img src="{{ asset('images/f3.jpg') }}" class="w-100 rounded shadow">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <img src="{{ asset('images/f5.jpg') }}" class="w-100 rounded shadow">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <img src="{{ asset('images/f2.jpg') }}" class="w-100 rounded shadow">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <img src="{{ asset('images/f6.jpg') }}" class="w-100 rounded shadow">
                    </div>
                </div>
            </section>
        </div>

        <div class="row">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">
                    TravelSage
                </h6>
                <p>
                    Иновативен концепт за паметен избор на локација за патување.
                </p>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Контакт</h6>
                <p><i class="fas fa-home mr-3"></i> Скопје, Р. С. Македонија</p>
                <p><i class="fas fa-envelope mr-3"></i> travelSage@gmail.com</p>
                <p><i class="fas fa-phone mr-3"></i> + 389 77 888 888</p>
            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Заследете не</h6>
                <section class="footerIcons">
                    <a class="btn social-icon" style="background-color: #3b5998;" href="#"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn social-icon" style="background-color: #55acee;" href="#"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn social-icon" style="background-color: #dd4b39;" href="#"><i
                            class="fab fa-google"></i></a>
                    <a class="btn social-icon" style="background-color: #ac2bac;" href="#"><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn social-icon" style="background-color: #0082ca;" href="#"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn social-icon" style="background-color: #333333;" href="#"><i
                            class="fab fa-github"></i></a>
                </section>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
