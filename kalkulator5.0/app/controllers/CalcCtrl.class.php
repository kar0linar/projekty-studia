<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {

	private $form;   
	private $result; 
	
	

	public function __construct(){
		
		$this->form = new CalcForm();
		$this->result = new CalcResult();
        
	}
	
	
	public function getParams(){
		$this->form->waga = getFromRequest('waga');
        $this->form->wzrost = getFromRequest('wzrost');
        $this->form->plec = getFromRequest('plec');
	}
	

	public function validate() {
		if ( ! (isset($this->form->wzrost) && isset($this->form->waga) && isset($this->form->plec))) {
            getMessages()->addError('błędne wywołanie aplikacji -> brak jednego z parametrów');
            return false;
        }
    
        if ( $this->form->wzrost == "") {
            getMessages()->addError('nie podano wzrostu!');
        }
        if ( $this->form->waga == "") {
            getMessages()->addError('nie podano wagi!');
        }
        
        if (! is_numeric( $this->form->wzrost )) {
            getMessages()->addError('druga wartość nie jest liczbą całkowitą!');
        }
        
        if (! is_numeric( $this->form->waga )) {
            getMessages()->addError('pierwsza wartość nie jest liczbą całkowitą!');
        }	
    	
		return ! getMessages()->isError();
	}
	
	public function process(){

		$this->getParams();
		
		if ($this->validate()) {
				
                $this->form->wzrost = floatval($this->form->wzrost);
                $this->form->waga = intval($this->form->waga);
                $this->result->result = $this->form->waga/(($this->form->wzrost/100)**2);

                if( $this->form->plec == "kobieta"){
                    $dolny =19;
                    $gorny =24;
                }else {
                    $dolny =20;
                    $gorny =25;
                }

                if($this->result->result<= $dolny){
                $this->result->przedzial = "niedowaga";

                } else if($this->result->result>= $gorny){
                    $this->result->przedzial = "nadwaga";

                } else {
                    $this->result->przedzial = "waga w normie";
                }
			
			
                getMessages()->addInfo('obliczenia wykonane poprawnie :D');
		}
		
		$this->generateView();
	}
	
	
	
	public function generateView(){
    
    getSmarty()->assign('form',$this->form);
    getSmarty()->assign('res',$this->result);

    getSmarty()->display('CalcView.tpl');  

	}
}
