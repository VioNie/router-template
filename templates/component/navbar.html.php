
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
                        <?php for($i = 1 ; $i <100 ; $i ++) :  ?>
                        <li><a class="dropdown-item" href="/day/<?=$i?>/">Jour <?= $i ?></a></li>
                        <?php endfor; ?>
                         </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Other
                    </a>
                    <ul class="dropdown-menu">
                             <li><a class="dropdown-item" href="/other/chinese-dragon/">Chinese Dragon</a></li>
                             <li><a class="dropdown-item" href="/other/fuji/">Mont Fuji</a></li>

                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>