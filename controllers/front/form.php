<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class DumelContactStepsFormModuleFrontController extends ModuleFrontController
{
    public function postProcess()
    {
        // Custom processing could go here if needed.
    }

    public function initContent()
    {
        parent::initContent();
        $this->setTemplate('module:dumelcontactsteps/views/templates/front/form.tpl');
    }
   
    public function getBreadcrumbLinks()
    {
        $breadcrumb = parent::getBreadcrumbLinks();

        // Home > Kontakt
        $breadcrumb['links'][] = [
            'title' => $this->trans('Kontakt', [], 'Shop.Theme.Global'),
            'url'   => $this->context->link->getPageLink('contact', true),
        ];

        // Home > Kontakt > Formularz kontaktowy
        $breadcrumb['links'][] = [
            'title' => $this->trans('Formularz kontaktowy', [], 'Shop.Theme.Global'),
            'url'   => $this->context->link->getModuleLink('dumelcontactsteps', 'form'),
        ];

        return $breadcrumb;
    }
}
