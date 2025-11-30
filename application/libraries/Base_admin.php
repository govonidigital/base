<?php


class base_admin{



    
    public function site(){


        $ci =& get_instance();



        $data['menu_galeria']  = 'SIM';
        $data['menu_banners']  = 'SIM';
        $data['menu_blog']     = 'SIM';
        $data['menu_leads']    = 'SIM';
        $data['menu_layout']   = 'SIM';
        $data['menu_codigo']   = 'SIM';
        $data['menu_email']    = 'SIM';
        $data['menu_usuarios'] = 'SIM';

        /*
        $ci->load->model('layout_model');
        $data['layout'] = $ci->layout_model->mostra();
        */
        

        return $data;
    }
    
}
