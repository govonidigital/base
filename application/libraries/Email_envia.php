<?php


class Email_envia{






    public function enviar($para,$assunto,$mensagem,$anexo = ''){

        $this->CI =& get_instance();

        $this->CI->load->model('email_model');
        $email = $this->CI->email_model->lista();

        if ($email[0] ->protocol == 'api'){
            return $this->api($para,$assunto,$mensagem,$anexo);
        }else{
            return $this->smtp($para,$assunto,$mensagem,$anexo);
        }

    }


    public function api($para,$assunto,$mensagem,$anexo){


        /** está com a api fixa da govoni usada no gdloja */



        /*
        $x_auth_token = '33f25d54b886721daac19c80c982ec35';
        $api_url = 'https://api.smtplw.com.br/v1';

        $from = "naoresponda@gdloja.com.br";
        $to = array($para);
        $subject = $assunto;
        $body = $mensagem;

        $headers = array(
        "x-auth-token: $x_auth_token",
        "Content-type: application/json"
        );

        $data_string = array(
        'from'    => $from,
        'to'      => $to,
        'subject' => $subject,
        'body'    => $body,
        'headers' => array('Content-type' => 'text/html')
        );

        $ch = curl_init("$api_url/messages");

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data_string));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

        $response = curl_exec($ch);
        $curlInfo = curl_getinfo($ch);
        curl_close($ch);

        $ret = json_decode($response);

        if ($curlInfo['http_code'] == '201'){

            if (preg_match('@^Location: (.*)$@m', $response, $matches)) {
                $location = trim($matches[1]);
            }

            $retorno['status'] = 'ok';
            $retorno['mensagem'] = '';
            $retorno['url'] = $location;
        }else{

            $status = "Error: $curlInfo[http_code]";
            
            $retorno['status'] = 'erro';
            $retorno['mensagem'] = $status;
            $retorno['url'] = '';

        }


      

        return $retorno;

        
        */
    }


    public function smtp($para,$assunto,$mensagem,$anexo){

        $this->CI =& get_instance();

        $this->CI->load->library('email');
        $this->CI->email->initialize();
        
        
        $this->CI->load->model('email_model');
        $data_email = $this->CI->email_model->lista();


        $this->CI->email->from($data_email[0]->mail_to, $data_email[0]->nome_email);
        $this->CI->email->to($para);
        $this->CI->email->subject($assunto);
        $this->CI->email->message($mensagem);


        if ( ! $this->CI->email->send()){

            $erro = "<br><br>Erro ao enviar email<br><br>".
            $this->CI->email->print_debugger();

            $retorno['status'] = 'erro';
            $retorno['mensagem'] = $erro;

            return $retorno;

        }else{

            $retorno['status'] = 'ok';
            $retorno['mensagem'] = '';

            return $retorno;

        }

    }



}
