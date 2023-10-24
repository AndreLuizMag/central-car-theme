<?php

function get_phone_number()
{
  return 'https://wa.me/15088186222';
}

?>

<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="profile" href="https://gmpg.org/xfn/11">

  <!-- Local files -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/compressed/main.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/compressed/local.css">

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/lib/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/lib/owlcarousel/assets/owl.theme.default.min.css">

  <!-- Fade in animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <?php wp_head(); ?>

</head>

<body class="main-body" data-scroll="scrolled">

  <header class="prime-header">
    <div class="pm-container-lg ds-flex justify-between align-center">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/brand/brand.png" alt="Logo da Prime Motors" class="brand-mobile">
      <nav class="nav-menu ds-flex justify-between align-center" data-status="hide">
        <a href="<?php echo get_site_url(); ?>/#intro" class="brand-desktop">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/image/brand/brand.png" alt="Logo da Prime Motors">
        </a>
        <button title="Botão de fechar" class="btn-close">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.5265 2.73247C16.1512 2.10776 16.1512 1.09324 15.5265 0.46853C14.9018 -0.156177 13.8872 -0.156177 13.2625 0.46853L8 5.73606L2.73247 0.473528C2.10776 -0.151179 1.09324 -0.151179 0.46853 0.473528C-0.156177 1.09824 -0.156177 2.11276 0.46853 2.73747L5.73606 8L0.473528 13.2675C-0.151179 13.8922 -0.151179 14.9068 0.473528 15.5315C1.09824 16.1562 2.11276 16.1562 2.73747 15.5315L8 10.2639L13.2675 15.5265C13.8922 16.1512 14.9068 16.1512 15.5315 15.5265C16.1562 14.9018 16.1562 13.8872 15.5315 13.2625L10.2639 8L15.5265 2.73247Z" fill="white" />
          </svg>
        </button>
        <div class="group-items ds-flex gap-md">
          <a href="<?php echo get_site_url(); ?>/#benefits" class="item">Benefícios</a>
          <a href="<?php echo get_site_url(); ?>/#gallery" class="item">Veículos</a>
          <a href="<?php echo get_site_url(); ?>/#about" class="item">Sobre</a>
          <a href="<?php echo get_site_url(); ?>/#asks" class="item">Dúvidas</a>
          <a href="<?php echo get_site_url(); ?>/#contact" class="item">Contato</a>
        </div>
        <div class="ds-flex flow-row-nw gap-md">
          <a href="<?php echo get_phone_number(); ?>" target="_blank" rel="noopener noreferrer" class="btn hide-on-mobile">
            <span class="ds-flex-center flow-row-nw gap-xs">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.6036 2.33052C12.1071 0.826958 10.1143 0 7.99643 0C3.625 0 0.0678571 3.56559 0.0678571 7.94739C0.0678571 9.34713 0.432143 10.7147 1.125 11.9211L0 16.038L4.20357 14.9318C5.36071 15.5654 6.66429 15.8984 7.99286 15.8984H7.99643C12.3643 15.8984 16 12.3328 16 7.95097C16 5.82809 15.1 3.83408 13.6036 2.33052ZM7.99643 14.5595C6.81071 14.5595 5.65 14.2409 4.63929 13.6394L4.4 13.4962L1.90714 14.1514L2.57143 11.7135L2.41429 11.4629C1.75357 10.4104 1.40714 9.19678 1.40714 7.94739C1.40714 4.30663 4.36429 1.34246 8 1.34246C9.76071 1.34246 11.4143 2.02981 12.6571 3.27919C13.9 4.52858 14.6643 6.18608 14.6607 7.95097C14.6607 11.5953 11.6286 14.5595 7.99643 14.5595ZM11.6107 9.61205C11.4143 9.51181 10.4393 9.0321 10.2571 8.96766C10.075 8.89964 9.94286 8.86742 9.81072 9.0679C9.67857 9.26837 9.3 9.71228 9.18214 9.84832C9.06786 9.98078 8.95 9.99868 8.75357 9.89844C7.58929 9.31491 6.825 8.85669 6.05714 7.5357C5.85357 7.18487 6.26071 7.20993 6.63929 6.45099C6.70357 6.31853 6.67143 6.20398 6.62143 6.10374C6.57143 6.0035 6.175 5.02619 6.01071 4.62882C5.85 4.24219 5.68571 4.29589 5.56429 4.28873C5.45 4.28157 5.31786 4.28157 5.18571 4.28157C5.05357 4.28157 4.83929 4.33169 4.65714 4.52858C4.475 4.72905 3.96429 5.20876 3.96429 6.18608C3.96429 7.16339 4.675 8.10849 4.77143 8.24094C4.87143 8.3734 6.16786 10.3781 8.15714 11.2409C9.41429 11.785 9.90714 11.8316 10.5357 11.7385C10.9179 11.6812 11.7071 11.2588 11.8714 10.7934C12.0357 10.328 12.0357 9.93066 11.9857 9.84832C11.9393 9.75882 11.8071 9.7087 11.6107 9.61205Z" fill="white" />
              </svg>
              Whatsapp
            </span>
          </a>
        </div>
      </nav>
      <button title="Button menu" class="btn-menu">
        <svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 1.33333C0 0.595833 0.606473 0 1.35714 0H17.6429C18.3935 0 19 0.595833 19 1.33333C19 2.07083 18.3935 2.66667 17.6429 2.66667H1.35714C0.606473 2.66667 0 2.07083 0 1.33333ZM0 8C0 7.2625 0.606473 6.66667 1.35714 6.66667H17.6429C18.3935 6.66667 19 7.2625 19 8C19 8.7375 18.3935 9.33333 17.6429 9.33333H1.35714C0.606473 9.33333 0 8.7375 0 8ZM19 14.6667C19 15.4042 18.3935 16 17.6429 16H1.35714C0.606473 16 0 15.4042 0 14.6667C0 13.9292 0.606473 13.3333 1.35714 13.3333H17.6429C18.3935 13.3333 19 13.9292 19 14.6667Z" fill="white" />
        </svg>
      </button>
      <div class="bg-menu ps-fixed" data-status="hide"></div>
    </div>
  </header>

  <aside class="btn-whatsapp-floating ps-fixed" data-show="false">
    <a href="<?php echo get_phone_number(); ?>" target="_blank" rel="noopener noreferrer" class="ds-flex-center">
      <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M27.2071 4.66104C24.2143 1.65392 20.2286 0 15.9929 0C7.25 0 0.135714 7.13117 0.135714 15.8948C0.135714 18.6943 0.864286 21.4293 2.25 23.8422L0 32.076L8.40714 29.8636C10.7214 31.1309 13.3286 31.7967 15.9857 31.7967H15.9929C24.7286 31.7967 32 24.6655 32 15.9019C32 11.6562 30.2 7.66816 27.2071 4.66104ZM15.9929 29.119C13.6214 29.119 11.3 28.4817 9.27857 27.2789L8.8 26.9925L3.81429 28.3027L5.14286 23.4269L4.82857 22.9257C3.50714 20.8207 2.81429 18.3936 2.81429 15.8948C2.81429 8.61325 8.72857 2.68493 16 2.68493C19.5214 2.68493 22.8286 4.05961 25.3143 6.55839C27.8 9.05716 29.3286 12.3722 29.3214 15.9019C29.3214 23.1906 23.2571 29.119 15.9929 29.119ZM23.2214 19.2241C22.8286 19.0236 20.8786 18.0642 20.5143 17.9353C20.15 17.7993 19.8857 17.7348 19.6214 18.1358C19.3571 18.5367 18.6 19.4246 18.3643 19.6966C18.1357 19.9616 17.9 19.9974 17.5071 19.7969C15.1786 18.6298 13.65 17.7134 12.1143 15.0714C11.7071 14.3697 12.5214 14.4199 13.2786 12.902C13.4071 12.6371 13.3429 12.408 13.2429 12.2075C13.1429 12.007 12.35 10.0524 12.0214 9.25764C11.7 8.48438 11.3714 8.59177 11.1286 8.57745C10.9 8.56313 10.6357 8.56313 10.3714 8.56313C10.1071 8.56313 9.67857 8.66337 9.31429 9.05716C8.95 9.45811 7.92857 10.4175 7.92857 12.3722C7.92857 14.3268 9.35 16.217 9.54286 16.4819C9.74286 16.7468 12.3357 20.7563 16.3143 22.4818C18.8286 23.5701 19.8143 23.6632 21.0714 23.477C21.8357 23.3625 23.4143 22.5176 23.7429 21.5868C24.0714 20.6561 24.0714 19.8613 23.9714 19.6966C23.8786 19.5176 23.6143 19.4174 23.2214 19.2241Z" fill="white" />
      </svg>
    </a>
  </aside>

  <?php
  // Output the menu modal.
  get_template_part('template-parts/modal-menu');
