<?php if ( ! defined('ABSPATH')) exit; ?>


<header>
<nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand title-logo" href="<?php echo HOME_URL;?>">Douglas França</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
          aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link <?php echo $this->active_home;?>" aria-current="page" href="<?php echo HOME_URL;?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo $this->active_service;?>" href="<?php echo HOME_URL;?>/services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo $this->active_contacts;?>" href="<?php echo HOME_URL;?>/contacts">Contacts</a>
            </li>
          </ul>
          <span class="navbar-text">
            <i class="fa-brands fa-instagram"></i>
          </span>
        </div>
      </div>
    </nav>


    