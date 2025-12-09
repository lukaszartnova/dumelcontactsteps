<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class DumelContactStepsFaqModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();
        $this->setTemplate('module:dumelcontactsteps/views/templates/front/faq.tpl');
    }
       public function getBreadcrumbLinks()
    {
        $breadcrumb = parent::getBreadcrumbLinks();

        // Home > Kontakt
        $breadcrumb['links'][] = [
            'title' => $this->trans('Kontakt', [], 'Shop.Theme.Global'),
            'url'   => $this->context->link->getPageLink('contact', true),
        ];

        // Home > Kontakt > FAQ
        $breadcrumb['links'][] = [
            'title' => $this->trans('FAQ', [], 'Shop.Theme.Global'),
            'url'   => $this->context->link->getModuleLink('dumelcontactsteps', 'faq'),
        ];

        return $breadcrumb;
    }
}
