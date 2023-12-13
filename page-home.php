<?php
/*
  Template name: Central Car Theme
*/
get_header('header');


function emphasisCard()
{
  echo "
    <div class='card'>
      " . criarBotao('Clique Aqui Hue', 'botao-padrao') . "
    </div>
  ";
}

?>
<main>
  <section class="sec-intro ds-flex flow-col-nw gap-md" id="intro">
    <div class="pm-container-lg">
      <div class="owl-intro owl-carousel" data-slider-id="1">
        <div class="slide-item">
          <div class="pm-row h-100 align-stretch">
            <div class="pm-col ps-relative content ds-flex flow-col-nw align-start justify-between">
              <div class="group-title ds-flex flow-col-nw">
                <h1>
                  Bem Vindo à Central!
                </h1>
                <p>Sinta-se em casa na Central Car, sua escolha de confiança para carros seminovos em Massachusetts. Faça parte da nossa comunidade de brasileiros satisfeitos e encontre os carros que você ama.</p>
              </div>
              <a href="<?php echo get_phone_number(); ?>" target=" _blank" rel="noopener noreferrer" class="btn-cta white">
                <span>Venha nos conhecer</span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15.2951 8.99141C15.8529 9.54926 15.8529 10.4552 15.2951 11.0131L6.72653 19.5816C6.16868 20.1395 5.26273 20.1395 4.70489 19.5816C4.14704 19.0238 4.14704 18.1178 4.70489 17.56L12.2649 10L4.70935 2.44003C4.1515 1.88218 4.1515 0.976236 4.70935 0.418387C5.2672 -0.139462 6.17314 -0.139462 6.73099 0.418387L15.2996 8.98695L15.2951 8.99141Z" fill="#3F3F3B" />
                </svg>

              </a>
            </div>
            <div class="pm-col ps-relative image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/public/image/slide-intro/slide-01.jpg)">

            </div>
          </div>
        </div>
        <div class="slide-item">
          <div class="pm-row h-100 align-stretch">
            <div class="pm-col ps-relative content ds-flex flow-col-nw align-start justify-between">
              <div class="group-title ds-flex flow-col-nw">
                <h2>
                  Qualidade
                </h2>
                <p>
                  Qualidade é nossa marca registrada. Nossos carros são minuciosamente inspecionados e garantidos para sua tranquilidade. Dirija com confiança os modelos mais desejados do mercado.
                </p>
              </div>
              <a href="<?php echo get_phone_number(); ?>" target=" _blank" rel="noopener noreferrer" class="btn-cta white">
                <span>Confiança e qualidade</span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15.2951 8.99141C15.8529 9.54926 15.8529 10.4552 15.2951 11.0131L6.72653 19.5816C6.16868 20.1395 5.26273 20.1395 4.70489 19.5816C4.14704 19.0238 4.14704 18.1178 4.70489 17.56L12.2649 10L4.70935 2.44003C4.1515 1.88218 4.1515 0.976236 4.70935 0.418387C5.2672 -0.139462 6.17314 -0.139462 6.73099 0.418387L15.2996 8.98695L15.2951 8.99141Z" fill="#3F3F3B" />
                </svg>

              </a>
            </div>
            <div class="pm-col ps-relative image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/public/image/slide-intro/slide-02.jpg)">

            </div>
          </div>
        </div>
        <div class="slide-item">
          <div class="pm-row h-100 align-stretch">
            <div class="pm-col content ps-relative ds-flex flow-col-nw align-start justify-between">
              <div class="group-title ds-flex flow-col-nw">
                <h1>
                  Transparência
                </h1>
                <p>
                  Somos transparentes em tudo o que fazemos. Com 30 anos de experiência e clientes satisfeitos, construímos nossa reputação na honestidade. Financiamento simples e rápido, mesmo para recém-chegados. Sua confiança é nossa prioridade.
                </p>
              </div>
              <a href="<?php echo get_phone_number(); ?>" target=" _blank" rel="noopener noreferrer" class="btn-cta white">
                <span>Sempre ao seu lado</span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15.2951 8.99141C15.8529 9.54926 15.8529 10.4552 15.2951 11.0131L6.72653 19.5816C6.16868 20.1395 5.26273 20.1395 4.70489 19.5816C4.14704 19.0238 4.14704 18.1178 4.70489 17.56L12.2649 10L4.70935 2.44003C4.1515 1.88218 4.1515 0.976236 4.70935 0.418387C5.2672 -0.139462 6.17314 -0.139462 6.73099 0.418387L15.2996 8.98695L15.2951 8.99141Z" fill="#3F3F3B" />
                </svg>

              </a>
            </div>
            <div class="pm-col ps-relative image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/public/image/slide-intro/slide-03.jpg)">

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="pm-container-lg scroll-md">
      <div class="content">
        <div class="owl-thumbs ds-flex flow-row-nw align-stretch gap-md" data-slider-id="1">
          <button class="owl-thumb-item ds-flex-start flow-row-nw flex-bgs">
            <div class="pm-row h-100 align-stretch">
              <div class="pm-col content">
                <h3>
                  Bem vindo
                </h3>
              </div>
            </div>
          </button>
          <button class="owl-thumb-item ds-flex-start flow-row-nw flex-bgs">
            <div class="pm-row h-100 align-stretch">
              <div class="pm-col content">
                <h3>
                  Qualidade
                </h3>
              </div>
            </div>
          </button>
          <button class="owl-thumb-item ds-flex-start flow-row-nw flex-bgs">
            <div class="pm-row h-100 align-stretch">
              <div class="pm-col content">
                <h3>
                  Transparência
                </h3>
              </div>
            </div>
          </button>
        </div>
      </div>
    </div> -->
  </section>
  <div class="main-content ds-flex flow-col-nw">
    <section class="sec-emphasis ds-flex flow-col-nw gap-lg" id="benefits">
      <div class="pm-container-md ds-flex-center flow-col-nw">
        <div class="title-content ds-flex flow-col-nw align-center gap-md">
          <h2 class="title">Conheça a Central Car</h2>
          <span class="subtitle">Os maiores destaques de quem escolhe ser Prime</span>
        </div>
      </div>
      <div class="pm-container-md scroll-sm">
        <div class="content">
          <div class="group-emphasis main">
            <div class="card-emphasis card-one">
              <div class="w-100 ds-flex flow-row-nw align-start justify-between gap-sm">
                <h3 class="title">Facilidade</h3>
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <mask id="mask0_233_3484" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="32" height="32">
                    <path d="M32 0H0V32H32V0Z" fill="white" />
                  </mask>
                  <path d="M22 16C22 17.3875 21.925 18.725 21.7938 20H10.2062C10.0688 18.725 10 17.3875 10 16C10 14.6125 10.075 13.275 10.2062 12H21.7938C21.9312 13.275 22 14.6125 22 16ZM23.8 12H31.4938C31.825 13.2812 32 14.6188 32 16C32 17.3812 31.825 18.7188 31.4938 20H23.8C23.9312 18.7125 24 17.375 24 16C24 14.625 23.9312 13.2875 23.8 12ZM30.8375 10H23.5438C22.9188 6.00624 21.6812 2.6625 20.0875 0.525C24.9812 1.81875 28.9625 5.36876 30.8312 10H30.8375ZM21.5188 10H10.4812C10.8625 7.725 11.45 5.71252 12.1688 4.08124C12.825 2.60625 13.5562 1.5375 14.2625 0.8625C14.9625 0.2 15.5438 0 16 0C16.4562 0 17.0375 0.2 17.7375 0.8625C18.4438 1.5375 19.175 2.60625 19.8312 4.08124C20.5562 5.70624 21.1375 7.71876 21.5188 10ZM8.45624 10H1.1625C3.0375 5.36876 7.01252 1.81875 11.9125 0.525C10.3188 2.6625 9.08124 6.00624 8.45624 10ZM0.506252 12H8.2C8.06876 13.2875 8 14.625 8 16C8 17.375 8.06876 18.7125 8.2 20H0.506252C0.175 18.7188 0 17.3812 0 16C0 14.6188 0.175 13.2812 0.506252 12ZM12.1688 27.9125C11.4438 26.2875 10.8625 24.275 10.4812 22H21.5188C21.1375 24.275 20.55 26.2875 19.8312 27.9125C19.175 29.3875 18.4438 30.4562 17.7375 31.1312C17.0375 31.8 16.4562 32 16 32C15.5438 32 14.9625 31.8 14.2625 31.1375C13.5562 30.4625 12.825 29.3938 12.1688 27.9188V27.9125ZM8.45624 22C9.08124 25.9938 10.3188 29.3375 11.9125 31.475C7.01252 30.1812 3.0375 26.6312 1.1625 22H8.45624ZM30.8375 22C28.9625 26.6312 24.9875 30.1812 20.0938 31.475C21.6875 29.3375 22.9188 25.9938 23.55 22H30.8375Z" fill="white" />
                </svg>
              </div>
              <p class="subtitle">
                Aprovamos seu financiamento de forma rápida e sem burocracia com nosso sistema 100% digital. Sua jornada de compra de carros nunca foi tão simples.
              </p>
            </div>
            <div class="card-emphasis card-two">
              <div class="w-100 ds-flex flow-row-nw align-start justify-between gap-sm">
                <h3 class="title">Aprovação e Garantia</h3>
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <mask id="mask0_233_3465" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="32" height="32">
                    <path d="M32 0H0V32H32V0Z" fill="white" />
                  </mask>
                  <path d="M0.25625 2.3875C0.0875 2.1375 0 1.8375 0 1.5375C0 0.6875 0.6875 0 1.5375 0H8.36873C9.06873 0 9.725 0.36875 10.0813 0.968747L14.3625 8.1C11.35 8.48127 8.65627 9.88753 6.65 11.9687L0.25625 2.3875ZM31.7375 2.3875L25.35 11.9687C23.3437 9.88753 20.65 8.48127 17.6375 8.1L21.9187 0.968747C22.2813 0.36875 22.9313 0 23.6313 0H30.4625C31.3125 0 32 0.6875 32 1.5375C32 1.8375 31.9125 2.1375 31.7437 2.3875H31.7375ZM5 21C5 18.0826 6.15893 15.2847 8.2218 13.2218C10.2847 11.1589 13.0826 10 16 10C18.9174 10 21.7153 11.1589 23.7782 13.2218C25.8411 15.2847 27 18.0826 27 21C27 23.9174 25.8411 26.7153 23.7782 28.7782C21.7153 30.8411 18.9174 32 16 32C13.0826 32 10.2847 30.8411 8.2218 28.7782C6.15893 26.7153 5 23.9174 5 21ZM16.525 15.0687C16.3125 14.6313 15.6937 14.6313 15.475 15.0687L14.075 17.9063C13.9875 18.0813 13.825 18.2 13.6375 18.225L10.5 18.6813C10.0187 18.75 9.83127 19.3375 10.175 19.6813L12.4437 21.8937C12.5813 22.0313 12.6437 22.2187 12.6125 22.4125L12.075 25.5313C11.9937 26.0063 12.4937 26.375 12.925 26.15L15.725 24.675C15.8937 24.5875 16.1 24.5875 16.2687 24.675L19.0687 26.15C19.5 26.375 20 26.0125 19.9187 25.5313L19.3813 22.4125C19.35 22.225 19.4125 22.0313 19.55 21.8937L21.8187 19.6813C22.1687 19.3437 21.975 18.7563 21.4937 18.6813L18.3625 18.225C18.175 18.2 18.0063 18.075 17.925 17.9063L16.525 15.0687Z" fill="#F2F2F2" />
                </svg>
              </div>
              <p class="subtitle">
                Não é necessário um crédito excelente para adquirir seu carro na Prime. Somos especialistas em aprovação, mesmo para quem está começando nos EUA.
              </p>
            </div>
            <div class="card-emphasis card-three">
              <div class="w-100 ds-flex flow-row-nw align-start justify-between gap-sm">
                <h3 class="title">Legado</h3>
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2.975 18.7748L14.2687 29.3186C14.7375 29.7561 15.3563 29.9998 16 29.9998C16.6437 29.9998 17.2625 29.7561 17.7313 29.3186L29.025 18.7748C30.925 17.0061 32 14.5248 32 11.9311V11.5686C32 7.19984 28.8437 3.47484 24.5375 2.7561C21.6875 2.2811 18.7875 3.21234 16.75 5.24984L16 5.99984L15.25 5.24984C13.2125 3.21234 10.3125 2.2811 7.46253 2.7561C3.15625 3.47484 0 7.19984 0 11.5686V11.9311C0 14.5248 1.075 17.0061 2.975 18.7748Z" fill="#F2F2F2" />
                </svg>
              </div>
              <p class="subtitle">
                Garantimos entrega rápida e fomos pioneiros no mercado em emplacamento ágil. Sua satisfação é nossa prioridade número um.
              </p>
            </div>
            <div class="card-emphasis card-four">
              <div class="w-100 ds-flex flow-row-nw align-start justify-between gap-sm">
                <h3 class="title">Carros seminovos</h3>
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.433333 13.0075C-0.294444 12.0274 -0.0833333 10.6509 0.905553 9.92966L7.9389 4.79258C9.2333 3.84555 10.8056 3.3335 12.4167 3.3335H21.3333H30.2222C31.2056 3.3335 32 4.12084 32 5.0954V8.61921C32 9.59378 31.2056 10.3811 30.2222 10.3811H28.1778L25.6833 12.3633C24.4222 13.3654 22.8555 13.9049 21.2389 13.9049H16.8889H16H12.4444C11.4611 13.9049 10.6667 13.1176 10.6667 12.143C10.6667 11.1685 11.4611 10.3811 12.4444 10.3811H16H16.8889C17.3778 10.3811 17.7778 9.98469 17.7778 9.50016C17.7778 9.01564 17.3778 8.61921 16.8889 8.61921H10.1889L3.53889 13.4754C2.55 14.1968 1.16111 13.9875 0.433333 13.0075ZM21.2444 10.3811H21.2945C21.2777 10.3811 21.2611 10.3811 21.2444 10.3811ZM31.5667 18.3262C32.2945 19.3063 32.0833 20.6827 31.0945 21.4041L24.0611 26.5411C22.7611 27.4881 21.1944 28.0002 19.5778 28.0002H10.6667H1.77778C0.794442 28.0002 0 27.2128 0 26.2383V22.7144C0 21.7399 0.794442 20.9525 1.77778 20.9525H3.82222L6.31668 18.9704C7.57778 17.9683 9.14442 17.4287 10.7611 17.4287H15.1111H16H19.5556C20.5389 17.4287 21.3333 18.2161 21.3333 19.1906C21.3333 20.1652 20.5389 20.9525 19.5556 20.9525H16H15.1111C14.6222 20.9525 14.2222 21.349 14.2222 21.8335C14.2222 22.318 14.6222 22.7144 15.1111 22.7144H21.8111L28.4611 17.8582C29.45 17.1369 30.8389 17.3462 31.5667 18.3262ZM10.7556 20.9525H10.7055C10.7222 20.9525 10.7389 20.9525 10.7556 20.9525Z" fill="#F2F2F2" />
                </svg>

              </div>
              <p class="subtitle">
                Na Central Car, todos os carros são minuciosamente inspecionados e incluem garantia. Dirija com confiança e tranquilidade.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="pm-container-md ds-flex-center flow-col-nw">
        <a href="<?php echo get_phone_number(); ?>" target=" _blank" rel="noopener noreferrer" class="btn-cta gradient">
          <span>Clique para conhecer</span>
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.2951 8.99141C15.8529 9.54926 15.8529 10.4552 15.2951 11.0131L6.72653 19.5816C6.16868 20.1395 5.26273 20.1395 4.70489 19.5816C4.14704 19.0238 4.14704 18.1178 4.70489 17.56L12.2649 10L4.70935 2.44003C4.1515 1.88218 4.1515 0.976236 4.70935 0.418387C5.2672 -0.139462 6.17314 -0.139462 6.73099 0.418387L15.2996 8.98695L15.2951 8.99141Z" fill="white" />
          </svg>
        </a>
      </div>
    </section>
    <section class="sec-cars ds-flex flow-col-nw gap-md" id="gallery">
      <div class="pm-container-md ds-flex-center flow-col-nw gap-lg">
        <div class="title-content ds-flex flow-col-nw align-center gap-md">
          <h2 class="title">Encontre o veículo dos seus sonhos</h2>
          <span class="subtitle">Uma grande variedade para todos os gostos</span>
        </div>
      </div>
      <div class="pm-container-md scroll-lg">
        <div class="content">
          <div class="group-cars main">
            <div class="card-car ds-flex flow-col-nw">
              <div class="image-content" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/public/image/cars/cars-sedan.jpg');">
              </div>
              <div class="content ds-flex flow-col-nw gap-sm">
                <h4 class="title">
                  SEDAN
                </h4>
                <p class="description">
                  Se você procura um compacto, com preço acessível e economia está no lugar certo! Temos milhares de vendas realizadas dos campeões das ruas da américa, entre eles: Honda Civic, Toyota Corolla e Ford Fusion.
                </p>
              </div>
            </div>
            <div class="card-car ds-flex flow-col-nw">
              <div class="image-content" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/public/image/cars/cars-suv.jpg');">
              </div>
              <div class="content ds-flex flow-col-nw gap-sm">
                <h4 class="title">
                  SUV
                </h4>
                <p class="description">
                  Sabe aquele robusto 4x4 que encara sol, chuva, neve e se precisar escala até montanha? Temos sempre em estoque e também podemos encomendar uma SUV de acordo com seu gosto e condição financeira. Temos milhares de vendas de SUV's realizadas nos últimos anos. Entre elas a Toyota Rav4, Honda CRV, Jeep Cherokee e Chevrolet Equinox.
                </p>
              </div>
            </div>
            <div class="card-car ds-flex flow-col-nw">
              <div class="image-content" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/public/image/cars/cars-truck.jpg');">
              </div>
              <div class="content ds-flex flow-col-nw gap-sm">
                <h4 class="title">
                  TRUCK
                </h4>
                <p class="description">
                  Agora se é carro pra trabalho que você quer, vem com a gente porque se tem um lugar que você vai encontrar a robusta Ford F-150, ou valente Chevrolet Silverado de qualidade é na Prime! Podemos encomendar de todos anos, marcas e modelo especialmente pra você.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pm-container-md ds-flex-center flow-col-nw gap-lg">
        <a href="<?php echo get_phone_number(); ?>" target=" _blank" rel="noopener noreferrer" class="btn-cta gradient">
          <span>Leve seu novo veículo pra casa</span>
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.2951 8.99141C15.8529 9.54926 15.8529 10.4552 15.2951 11.0131L6.72653 19.5816C6.16868 20.1395 5.26273 20.1395 4.70489 19.5816C4.14704 19.0238 4.14704 18.1178 4.70489 17.56L12.2649 10L4.70935 2.44003C4.1515 1.88218 4.1515 0.976236 4.70935 0.418387C5.2672 -0.139462 6.17314 -0.139462 6.73099 0.418387L15.2996 8.98695L15.2951 8.99141Z" fill="white" />
          </svg>

        </a>
      </div>

    </section>
    <section class="sec-about" id="about">
      <div class="pm-container-md ds-flex-center flow-col-nw gap-lg">
        <div class="title-content ds-flex flow-col-nw align-center gap-md">
          <h2 class="title">Sobre a Central Car</h2>
          <span class="subtitle">Nosso cliente, nossa majestade!</span>
        </div>
        <div class="pm-row align-stretch gap-lg">
          <div class="ds-flex flow-col-nw gap-md">
            <div class="description-content">
              <p>
                A Prime visa trazer ao mercado transparência, qualidade e confiança. Nossa equipe é treinada para atender nossos clientes de forma cordial e humana.
                <br>
                Acreditamos que fundamentar nossos serviços em qualidade e agilidade neste momento de tomar uma decisão tão importante quanto à compra do seu automóvel é fundamental para garantir a satisfação de todos os nosso clientes.
              </p>
            </div>
          </div>
          <div class="owl-mosaic owl-carousel owl-theme">
            <div class="slide-item">
              <div class="mosaic-group mosaic-one">
                <div class="mosaic-item item-one"></div>
                <div class="mosaic-item item-two"></div>
                <div class="mosaic-item item-three"></div>
              </div>
            </div>
            <div class="slide-item">
              <div class="mosaic-group mosaic-two">
                <div class="mosaic-item item-one"></div>
                <div class="mosaic-item item-two"></div>
                <div class="mosaic-item item-three"></div>
              </div>
            </div>
            <div class="slide-item">
              <div class="mosaic-group mosaic-three">
                <div class="mosaic-item item-one"></div>
                <div class="mosaic-item item-two"></div>
                <div class="mosaic-item item-three"></div>
              </div>
            </div>
            <div class="slide-item">
              <div class="mosaic-group mosaic-four">
                <div class="mosaic-item item-one"></div>
                <div class="mosaic-item item-two"></div>
                <div class="mosaic-item item-three"></div>
              </div>
            </div>
            <div class="slide-item">
              <div class="mosaic-group mosaic-five">
                <div class="mosaic-item item-one"></div>
                <div class="mosaic-item item-two"></div>
                <div class="mosaic-item item-three"></div>
                <div class="mosaic-item item-four"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="sec-asks" id="asks">
      <div class="pm-container-md ds-flex-center flow-col-nw gap-lg">
        <div class="title-content ds-flex flow-col-nw align-center gap-md">
          <h2 class="title">Perguntas frequentes</h2>
          <span class="subtitle">Perguntas Comuns sobre Nossos Serviços e Processo de Compra</span>
        </div>
        <div class="accordion-content ds-flex flow-col-nw gap-lg">
          <details class="ps-relative">
            <summary>
              <span>Qual o mínimo de entrada para comprar um carro na Prime?</span>
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.5873 25.4123C15.3686 26.1936 16.6373 26.1936 17.4186 25.4123L29.4186 13.4123C30.1998 12.6311 30.1998 11.3623 29.4186 10.5811C28.6373 9.7998 27.3686 9.7998 26.5873 10.5811L15.9998 21.1686L5.4123 10.5873C4.63105 9.80605 3.3623 9.80605 2.58105 10.5873C1.7998 11.3686 1.7998 12.6373 2.58105 13.4186L14.5811 25.4186L14.5873 25.4123Z" fill="#575756" />
              </svg>
            </summary>
            <div class="content">
              <p>O mínimo de entrada para adquirir um carro na Central Car é atualmente de $2000.</p>
            </div>
          </details>
          <details class="ps-relative">
            <summary>
              <span>Qual o prazo de entrega dos carros?</span>
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.5873 25.4123C15.3686 26.1936 16.6373 26.1936 17.4186 25.4123L29.4186 13.4123C30.1998 12.6311 30.1998 11.3623 29.4186 10.5811C28.6373 9.7998 27.3686 9.7998 26.5873 10.5811L15.9998 21.1686L5.4123 10.5873C4.63105 9.80605 3.3623 9.80605 2.58105 10.5873C1.7998 11.3686 1.7998 12.6373 2.58105 13.4186L14.5811 25.4186L14.5873 25.4123Z" fill="#575756" />
              </svg>
            </summary>
            <div class="content">
              <p>O prazo de entrega padrão na Central Car é de 2 a 3 semanas, caso o carro já esteja disponível em nossa loja. Se você fizer uma encomenda personalizada, o prazo estimado é de 4 semanas.</p>
            </div>
          </details>
          <details class="ps-relative">
            <summary>
              <span>A Prime parcela o pagamento da entrada?</span>
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.5873 25.4123C15.3686 26.1936 16.6373 26.1936 17.4186 25.4123L29.4186 13.4123C30.1998 12.6311 30.1998 11.3623 29.4186 10.5811C28.6373 9.7998 27.3686 9.7998 26.5873 10.5811L15.9998 21.1686L5.4123 10.5873C4.63105 9.80605 3.3623 9.80605 2.58105 10.5873C1.7998 11.3686 1.7998 12.6373 2.58105 13.4186L14.5811 25.4186L14.5873 25.4123Z" fill="#575756" />
              </svg>
            </summary>
            <div class="content">
              <p>Sim, na Central Car, você tem a flexibilidade de quitar a entrada e os impostos até o dia da entrega do carro. Não é necessário pagar o valor total no momento da compra.</p>
            </div>
          </details>
          <details class="ps-relative">
            <summary>
              <span>Já tenho um carro financiado, posso financiar outro na Prime?</span>
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.5873 25.4123C15.3686 26.1936 16.6373 26.1936 17.4186 25.4123L29.4186 13.4123C30.1998 12.6311 30.1998 11.3623 29.4186 10.5811C28.6373 9.7998 27.3686 9.7998 26.5873 10.5811L15.9998 21.1686L5.4123 10.5873C4.63105 9.80605 3.3623 9.80605 2.58105 10.5873C1.7998 11.3686 1.7998 12.6373 2.58105 13.4186L14.5811 25.4186L14.5873 25.4123Z" fill="#575756" />
              </svg>
            </summary>
            <div class="content">
              <p>Sim, é possível financiar outro carro na Central Car mesmo se você já tiver um financiamento em aberto. Trabalhamos em estreita colaboração com nossas financeiras para encontrar a melhor oferta para você.</p>
            </div>
          </details>
          <details class="ps-relative">
            <summary>
              <span>Posso financiar sem SSN/ITIN?</span>
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.5873 25.4123C15.3686 26.1936 16.6373 26.1936 17.4186 25.4123L29.4186 13.4123C30.1998 12.6311 30.1998 11.3623 29.4186 10.5811C28.6373 9.7998 27.3686 9.7998 26.5873 10.5811L15.9998 21.1686L5.4123 10.5873C4.63105 9.80605 3.3623 9.80605 2.58105 10.5873C1.7998 11.3686 1.7998 12.6373 2.58105 13.4186L14.5811 25.4186L14.5873 25.4123Z" fill="#575756" />
              </svg>
            </summary>
            <div class="content">
              <p>Sim, na Central Car, facilitamos o processo de financiamento para todos, independentemente do status do SSN ou ITIN.</p>
            </div>
          </details>
          <details class="ps-relative">
            <summary>
              <span>Não tenho carteira de motorista, posso financiar?</span>
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.5873 25.4123C15.3686 26.1936 16.6373 26.1936 17.4186 25.4123L29.4186 13.4123C30.1998 12.6311 30.1998 11.3623 29.4186 10.5811C28.6373 9.7998 27.3686 9.7998 26.5873 10.5811L15.9998 21.1686L5.4123 10.5873C4.63105 9.80605 3.3623 9.80605 2.58105 10.5873C1.7998 11.3686 1.7998 12.6373 2.58105 13.4186L14.5811 25.4186L14.5873 25.4123Z" fill="#575756" />
              </svg>
            </summary>
            <div class="content">
              <p>Todas as financeiras com as quais trabalhamos exigem que o carro financiado esteja assegurado. Para obter um seguro, é necessário ter uma carteira de motorista em nome do cliente.</p>
            </div>
          </details>
          <details class="ps-relative">
            <summary>
              <span>Acabei de chegar do Brasil, posso financiar?</span>
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.5873 25.4123C15.3686 26.1936 16.6373 26.1936 17.4186 25.4123L29.4186 13.4123C30.1998 12.6311 30.1998 11.3623 29.4186 10.5811C28.6373 9.7998 27.3686 9.7998 26.5873 10.5811L15.9998 21.1686L5.4123 10.5873C4.63105 9.80605 3.3623 9.80605 2.58105 10.5873C1.7998 11.3686 1.7998 12.6373 2.58105 13.4186L14.5811 25.4186L14.5873 25.4123Z" fill="#575756" />
              </svg>
            </summary>
            <div class="content">
              <p>Sim, temos financeiras que atendem a clientes recém-chegados aos Estados Unidos.</p>
            </div>
          </details>
          <details class="ps-relative">
            <summary>
              <span>Quanto tempo de garantia os carros da Prime têm?</span>
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.5873 25.4123C15.3686 26.1936 16.6373 26.1936 17.4186 25.4123L29.4186 13.4123C30.1998 12.6311 30.1998 11.3623 29.4186 10.5811C28.6373 9.7998 27.3686 9.7998 26.5873 10.5811L15.9998 21.1686L5.4123 10.5873C4.63105 9.80605 3.3623 9.80605 2.58105 10.5873C1.7998 11.3686 1.7998 12.6373 2.58105 13.4186L14.5811 25.4186L14.5873 25.4123Z" fill="#575756" />
              </svg>
            </summary>
            <div class="content">
              <p>Geralmente, nossos carros são financiados com dois anos de garantia estendida oferecida pela financeira.</p>
            </div>
          </details>
        </div>
      </div>
    </section>
    <section class="sec-contact" id="contact">
      <div class="pm-container-lg ds-flex flow-col-nw gap-lg">
        <div class="title-content ds-flex flow-col-nw align-center gap-md">
          <h2 class="title">Contato</h2>
          <span class="subtitle">Estamos Aqui para Ajudar!</span>
        </div>
        <div class="card-form">
          <div class="pm-row align-stretch">
            <div class="pm-col content-col is-5 ds-flex flow-col-nw justify-start align-start gap-md">
              <p>
                Precisa de ajuda ou informações adicionais? Estamos à disposição para atender às suas necessidades. Entre em contato conosco e deixe-nos ajudar a tornar sua experiência na Central Car excepcional.
              </p>
              <?php echo apply_shortcodes('[contact-form-7 id="e4dcff3" title="Formulário de contato 1"]'); ?>
            </div>
            <div class="pm-col image-col">

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>

<?php get_footer('footer'); ?>