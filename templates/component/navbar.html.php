
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Home</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Css 100
                    </a>
                    <ul class="dropdown-menu">
                        <?php for($i = 1 ; $i <10 ; $i ++) :  ?>
                        <li><a class="dropdown-item" href="/day/<?=$i?>/">Jour <?= $i ?></a></li>
                        <?php endfor; ?>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>

            </ul>

        </div>
    </div>
</nav>