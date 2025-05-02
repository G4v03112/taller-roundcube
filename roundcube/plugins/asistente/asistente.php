<?php

class asistente extends rcube_plugin
{
    public $task = 'mail';

    function init()
    {
        $rcmail = rcmail::get_instance();

        // Cargar etiquetas de idioma del plugin
        $this->add_texts('localization/', true);

        if ($rcmail->action === 'compose') {
            $this->include_script('asistente.js');
            $this->include_stylesheet('skins/elastic/asistente.css');

            $this->add_button(array(
                'command' => 'asistente',
                'type'    => 'link',
                'label'   => 'asistente',
                'title'   => 'Asistente IA',
                'class'   => 'button-asistente',
                'innerclass' => 'icon image-asistente',
            ), 'toolbar');
            
            $this->register_action('plugin.asistente', array($this, 'asistente_command'));
            $this->include_script('asistente.js');
            $this->include_stylesheet('skins/elastic/asistente.css');
            
        }
    }
}
