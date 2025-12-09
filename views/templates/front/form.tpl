{extends file='page.tpl'}

{block name='page_header_container'}
  {$smarty.block.parent}
{/block}


{block name='page_content'}
  <div class="container">
    <div id="contact-step-3" class="contact-step row justify-content-center">
      <div class="col-lg-12 d-flex flex-column gap-2xl">
        <h1 class="h6 ">{l s="Skontaktuj się z nami" d="Shop.Theme.Global"}</h1>
        {widget name="contactform"}
      </div>
    </div>
  </div>
{/block}

{block name='page_footer'}
  {$smarty.block.parent}
{/block}
