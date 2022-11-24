<?php


class base{



    
    public function site(){


        $ci =& get_instance();

        $ci->load->helper('cookie');

        if (get_cookie('cookie_lgpd') == false){
            $cookie= array(
                'name'   => 'cookie_lgpd',
                'value'  => true,
                'expire' => '3600',
            );
            set_cookie($cookie);

            $data['cookie_lgpd'] = true;
        }else{
            $data['cookie_lgpd'] = false;
        }
        
        


/*
        $ci->load->model('layout_model');
        $data['layout'] = $ci->layout_model->mostra();
*/
        


        
        return $data;
    }
    
}
