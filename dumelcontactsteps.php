<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class DumelContactSteps extends Module
{
    public function __construct()
    {
        $this->name = 'dumelcontactsteps';
        $this->tab = 'front_office_features';
        $this->version = '1.0.4';
        $this->author = 'Dumel';
        $this->need_instance = 0;

        $this->ps_versions_compliancy = [
            'min' => '8.0.0',
            'max' => _PS_VERSION_,
        ];

        parent::__construct();

        $this->displayName = $this->l('Contact pages (info, FAQ, form)');
        $this->description = $this->l('Splits contact into separate pages: info, FAQ and contact form.');
    }

    public function install()
    {
        // W razie potrzeby można dodać tu też registerHook na inne hooki
        return parent::install()
            && $this->registerHook('moduleRoutes');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    /**
     * Define friendly URLs for module front controllers.
     *
     * @param array $params
     * @return array
     */
    public function hookModuleRoutes($params)
    {
        return [
            // /kontakt/faq -> controller=faq
            'module-dumelcontactsteps-faq' => [
                'controller' => 'faq',
                'rule' => 'faq',
                'keywords' => [],
                'params' => [
                    'fc' => 'module',
                    'module' => $this->name,
                ],
            ],

            'module-dumelcontactsteps-form' => [
                'controller' => 'form',
                'rule' => 'formularz-kontaktowy',
                'keywords' => [],
                'params' => [
                    'fc' => 'module',
                    'module' => $this->name,
                ],
            ],
        ];
    }
}
