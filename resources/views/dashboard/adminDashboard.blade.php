<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/dashboard.css">
    <title>Document</title>
</head>

<body>
    <main class="container">
        <aside class="aside-wrapper">
            <div>
                <nav class="nav-wrapper">
                    <div>
                        <figure class="nav-logo">
                            <div>
                                <img id="logo" src="/img/favicon.jpeg" alt="">
                            </div>
                            <div>
                                <h3>musicGate</h3>
                            </div>
                        </figure>
                        <main class="nav-list">
                            <div>
                                <figure class="nav-menu">
                                    <div>
                                        <i class='bx bx-home-alt'></i>
                                        <div class="nav-menu-title">
                                            <h4>Dashboard</h4>
                                        </div>
                                    </div>
                                    <span></span>
                                </figure>
                                <figure class="nav-menu">
                                    <div>
                                        <i class='bx bx-duplicate'></i>
                                        <div class="nav-menu-title">
                                            <h4>tambah tiket</h4>
                                        </div>
                                    </div>
                                    <span></span>
                                </figure>
                                <figure class="nav-menu">
                                    <div>
                                        <i class='bx bx-data'></i>
                                        <div class="nav-menu-title">
                                            <h4>data tiket</h4>
                                        </div>
                                    </div>
                                    <span></span>
                                </figure>
                            </div>
                        </main>
                    </div>
                </nav>
            </div>
        </aside>
        <main class="main-wrapper">
            <div>
                <nav class="nav-bar">
                    <article class="title-head">
                        <h3>hi, admin welcome back</h3>
                    </article>
                </nav>
                @include('component.tb-order')
                @include('component.formAdd')
                <footer class="footer">
                    <div>
                        <p>Desaign by Haidar Rifky</p>
                    </div>
                </footer>
            </div>
        </main>
    </main>
</body>

</html>