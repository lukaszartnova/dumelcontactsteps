{extends file='module:dumelcontactsteps/views/templates/front/contact-layout.tpl'}

{block name='contact_steps_content'}
  <div class="container">
    <div id="contact-step-2" class="contact-step row justify-content-center">
      <div class="contact-faq-section contact-section col-lg-12 d-flex flex-column gap-2xl">
        <h1 class="h6 ">{l s="Skontaktuj się z nami" d="Shop.Theme.Global"}</h1>

        <div class="contact-faq-section__card card-body col-12 col-md-10 mx-auto">
          {hook h="displayFaqAnywhere"}
        </div>

        <div class="contact-faq-section__cta text-center flex-column justify-content-center gap-2xl d-none" >
          <p class="p-xl p-xl-brand mb-m">
            {l s='Nie znalazłeś odpowiedzi?' d='Shop.Theme.Global'}<br/>
            {l s='Napisz do nas' d='Shop.Theme.Global'}
          </p>

          <a href="{$link->getModuleLink('dumelcontactsteps','form')}"
             class="c-btn c-btn-m c-btn-fill --blue --normal-hover c-white contact-faq-section__cta-btn d-flex mx-auto">
              <span class="p-m">{l s='Wyślij wiadomość' d='Shop.Theme.Global'}</span>
            <i class="icon-chevron-right"></i>
          </a>
        </div>

        <div class="contact-faq-section__toy d-none">
          <img src="{$urls.theme_dir}static/img/ekipa-ratownicza-min.png"
               alt=""
               class="img-fluid"
               loading="lazy">
        </div>
      </div>
    </div>
  </div>
{/block}
