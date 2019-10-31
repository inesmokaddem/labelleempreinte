<div id="sidebar">
    <div class="text-right">
        <a class="navbar-brand" href="<?php echo getenv('INDEX_URL') ?>">
            <img src="img/labelleempreinte-green.png" alt="La belle empreinte" width="128">
        </a>
    </div>
    <ul id="sidebar-menu" class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link <?php echo ($PAGE == 'quizz') ? 'active' : '' ?>" href="<?php echo getenv('INDEX_URL').'/quizz' ?>">QUIZZ ET LIVRET</a>
        </li>
        <div class="row"><div class="col-9 offset-3"><hr class="my-1"/></div></div>
        <li class="nav-item">
            <a class="nav-link <?php echo ($PAGE == 'presentation') ? 'active' : '' ?>" href="<?php echo getenv('INDEX_URL').'/presentation' ?>">PRESENTATION</a>
        </li>
        <div class="row"><div class="col-9 offset-3"><hr class="my-1"/></div></div>
        <li class="nav-item">
            <a class="nav-link after-red <?php echo ($PAGE == 'moteur-de-recherche') ? 'active' : '' ?>" href="<?php echo getenv('INDEX_URL').'/moteur-de-recherche' ?>">MOTEUR DE RECHERCHE</a>
        </li>
        <div class="row"><div class="col-9 offset-3"><hr class="my-1"/></div></div>
        <li class="nav-item">
            <a class="nav-link after-orange <?php echo ($PAGE == 'label') ? 'active' : '' ?>" href="<?php echo getenv('INDEX_URL').'/label' ?>">LABEL</a>
        </li>
        <div class="row"><div class="col-9 offset-3"><hr class="my-1"/></div></div>
        <li class="nav-item">
            <a class="nav-link <?php echo ($PAGE == 'nous-rejoindre') ? 'active' : '' ?>" href="<?php echo getenv('INDEX_URL').'/nous-rejoindre' ?>">NOUS REJOINDRE</a>
        </li>
        <div class="row"><div class="col-9 offset-3"><hr class="my-1"/></div></div>
        <li class="nav-item">
            <a class="nav-link <?php echo ($PAGE == 'blog') ? 'active' : '' ?>" href="<?php echo getenv('INDEX_URL').'/blog' ?>">BLOG</a>
        </li>
        <div class="row"><div class="col-9 offset-3"><hr class="my-1"/></div></div>
        <li class="nav-item">
            <a class="nav-link <?php echo ($PAGE == 'premiers-pas') ? 'active' : '' ?>" href="<?php echo getenv('INDEX_URL').'/premiers-pas' ?>">PREMIERS PAS</a>
        </li>
        <div class="row"><div class="col-9 offset-3"><hr class="my-1"/></div></div>
        <li class="nav-item">
            <a class="nav-link green <?php echo ($PAGE == 'coin-des-pros') ? 'active' : '' ?>" href="<?php echo getenv('INDEX_URL').'/coin-des-pros' ?>">LE COIN DES PROS</a>
        </li>
    </ul>
    <div class="row my-1 row-newsletter">
        <div class="offset-3 col-9 text-center">
            <button class="btn btn-green" data-toggle="modal" data-target="#newsletterModal">
                <i class="fa fa-envelope"></i>
                La lettre des emplettes responsables
            </button>
        </div>
    </div>
    <div class="row mt-3 row-social">
        <div class="offset-3 col-9 text-center">
            <i class="fab fa-2x fa-facebook-f green mx-2"></i>
            <i class="fab fa-2x fa-twitter green mx-2"></i>
            <i class="fab fa-2x fa-instagram green mx-2"></i>
        </div>
    </div>
</div>
