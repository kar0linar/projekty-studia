<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;


class CalcCtrl {

	private $form;   
	private $result; 
	private $records;

	
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
	
	
	public function action_calcCompute(){

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
		
			

			try{
				getDB()->insert("historia",[					
					"plec"=>$this->form->plec,
					"waga"=>$this->form->waga,
					"wzrost"=>$this->form->wzrost,
					"BMI"=>$this->result->result
				]);
				getMessages()->addInfo('Pomyślnie zapisano rekord');
	
			}
			catch (PDOException $e){
				getMessages()->addError('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}

			getMessages()->addInfo('obliczenia wykonane poprawnie :D');

		
		
		
	}
	
		
		$this->generateView();
	}
	
	public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}
	

	public function generateView(){

		try{
			$this->records = getDB()->select("historia", [
					"plec",
					"waga",
					"wzrost",
					"BMI",
				]);
		} catch (PDOException $e){
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
		}

		getSmarty()->assign('user',unserialize($_SESSION['user']));
				
		getSmarty()->assign('page_title','Kalkulator BMI - role');

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		getSmarty()->assign('records',$this->records);
	
		getSmarty()->display('CalcView.tpl');  
	
	}
}
