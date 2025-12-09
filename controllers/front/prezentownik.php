<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class DumelContactStepsPrezentownikModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();
        $this->setTemplate('module:dumelcontactsteps/views/templates/front/prezentownik.tpl');
    }

    public function getBreadcrumbLinks()
    {
        $breadcrumb = parent::getBreadcrumbLinks();

        // Home > Prezentownik
        $breadcrumb['links'][] = [
            'title' => $this->trans('Prezentownik', [], 'Shop.Theme.Global'),
            'url'   => $this->context->link->getModuleLink('dumelcontactsteps', 'prezentownik'),
        ];

        return $breadcrumb;
    }
}
