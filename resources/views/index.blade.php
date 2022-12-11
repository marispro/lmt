<!doctype html>
<html lang="en">
<head>
    <title>LMT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />

    @vite(['resources/js/app.js'])
</head>
<body>

<div class="bg-black text-white navbar-dark bg-dark">
    <div id="navbar" class="navbar navbar-dark navbar-expand-md">
        <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Atvērt navigāciju">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand" href="{{ route('/') }}">
                    <img src="{{ asset('lmt/images/logo.svg') }}" alt="LMT">
                </a>

                <div class="d-md-none">
                    <a class="nav-link" href="#">
                        <span class="profile-white"></span>
                    </a>
                </div>

            <div class="d-none d-md-flex">
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="search-white"></span> Meklēt
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="book-white"></span> Palīdzība
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="profile-white"></span> Autorizēties
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="black-friday" class="container-fluid">
        <div class="container">
            <div class="title">Melnā piektdiena tikai 27. novembrī</div>

            <div class="subtitle">Kur skaties – tur atlaides!</div>
        </div>
    </div>

    <div class="container">
        <div id="countdown">
            <div class="time">
                <div class="days">
                    <div class="count">20</div>
                    <div class="label">dienas</div>
                </div>

                <div class="hours">
                    <div class="count">20</div>
                    <div class="label">stundas</div>
                </div>

                <div class="delimiter">:</div>

                <div class="minutes">
                    <div class="count">20</div>
                    <div class="label">minūtes</div>
                </div>

                <div class="delimiter">:</div>

                <div class="seconds">
                    <div class="count">20</div>
                    <div class="label">sekundes</div>
                </div>
            </div>

            <div class="expired" style="display: none">Melnā piektdiena ir beigusies</div>
        </div>


        <div id="categories" class="row">
            <div class="col-md-3">
                <a href="#" class="item">
                    <div class="icon icon-1"></div>
                    <div class="label">Telefoni</div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#" class="item"><div class="icon icon-2"></div> Planšetes</a>
            </div>
            <div class="col-md-3">
                <a href="#" class="item"><div class="icon icon-3"></div> Datori</a>
            </div>
            <div class="col-md-3">
                <a href="#" class="item"><div class="icon icon-4"></div> Televizori</a>
            </div>
            <div class="col-md-3">
                <a href="#" class="item"><div class="icon icon-5"></div> Viedpalīgi</a>
            </div>
            <div class="col-md-3">
                <a href="#" class="item"><div class="icon icon-6"></div> Droni</a>
            </div>
            <div class="col-md-3">
                <a href="#" class="item"><div class="icon icon-7"></div> Aksesuāri</a>
            </div>
            <div class="col-md-3">
                <a href="#" class="item red arrow text-center">Visas iekārtas</a>
            </div>
        </div>

        <div id="special-offer">
            <div class="title text-center text-lg-start">Īpašs piedāvājums tikai piektdien!</div>

            <div class="block">
                <div class="row">
                    <div class="col-md-5 item">
                        <div class="text-center">
                            <div class="subtitle">
                                LMT Viedtelevīzija + HBO filmas un seriāli
                            </div>

                            <img src="{{ asset('lmt/images/device.png') }}" alt="">
                        </div>

                        <div class="row align-items-end">
                            <div class="col">
                                <div class="price">
                                    <div class="prev">Iepriekš 24,99€/mēn</div>
                                    <div>
                                        <div class="euro">19</div>
                                        <div class="cents">
                                            98
                                            <div class="underprice">€/mēn.*</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col text-center text-md-start">
                                <a class="btn-outline-red arrow" href="#">
                                    Vairāk
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="row posters">
                            <div class="col-4 col-md-3">
                                <img src="{{ asset('lmt/images/posters/1.jpg') }}" alt="" class="poster">
                            </div>
                            <div class="col-4 col-md-3">
                                <img src="{{ asset('lmt/images/posters/2.jpg') }}" alt="" class="poster">
                            </div>
                            <div class="col-4 col-md-3">
                                <img src="{{ asset('lmt/images/posters/3.jpg') }}" alt="" class="poster">
                            </div>
                            <div class="col-4 col-md-3 d-none d-md-block">
                                <img src="{{ asset('lmt/images/posters/4.jpg') }}" alt="" class="poster">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-muted d-none d-md-block">
                Akcija 29.11.2019. Piedāvājums attiecas uz noteiktām preču kategorijām. Piedāvājums neattiecas uz citu akciju precēm.
            </div>
        </div>
    </div>


</div>

<div id="contest">
    <div class="container">
        <div v-if="!successMessage" class="title">
            Pieteikties konkursam!
        </div>

        <div v-if="successMessage">
            <div class="fs-3 text-center text-md-start" v-text="successMessage"></div>
        </div>

        <form v-else method="post" class="row" @submit.prevent="submit">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="input-name">Vārds, uzvārds</label>
                    <input type="text" class="form-control" id="input-name" placeholder="Vārds, uzvārds" v-model="name" v-bind:class="{ 'is-invalid': errors.name }">
                    <div class="invalid-feedback" v-if="errors.nameMessage" v-text="errors.nameMessage"></div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="input-name">E-pasta adrese</label>
                    <input type="email" class="form-control" id="input-name" placeholder="E-pasta adrese" v-model="email" v-bind:class="{ 'is-invalid': errors.email }">
                    <div class="invalid-feedback" v-if="errors.emailMessage" v-text="errors.emailMessage"></div>
                </div>
            </div>

            <div class="col-md-4">
                <label class="d-none d-md-block">&nbsp;</label>
                <div>
                    <button type="submit" class="btn-red btn-lg arrow">
                        Nosūtīt
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<footer class="bg-black text-white">
    <div class="container">
        <div class="copyright">© Latvijas Mobilais Telefons {{ date('Y') }}</div>
    </div>
</footer>
</body>
</html>
