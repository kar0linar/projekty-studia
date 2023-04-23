<?php


require_once $conf->root_path.'/libs/Smarty.class.php';
require_once $conf->root_path.'/libs/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

class CalcCtrl {

	private $msgs;  
	private $form;   
	private $result; 
	
	

	public function __construct(){
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
        
	}
	
	
	public function getParams(){
		$this->form->waga = isset($_REQUEST ['waga']) ? $_REQUEST ['waga'] : null;
		$this->form->wzrost = isset($_REQUEST ['wzrost']) ? $_REQUEST ['wzrost'] : null;
		$this->form->plec = isset($_REQUEST ['plec']) ? $_REQUEST ['plec'] : null;
	}
	

	public function validate() {
		if ( ! (isset($this->form->wzrost) && isset($this->form->waga) && isset($this->form->plec))) {
            $this->msgs->addError('błędne wywołanie aplikacji -> brak jednego z parametrów');
        }
    
        if ( $this->form->wzrost == "") {
            $this->msgs->addError('nie podano wzrostu!');
        }
        if ( $this->form->waga == "") {
            $this->msgs->addError('nie podano wagi!');
        }
        
        if (! is_numeric( $this->form->wzrost )) {
            $this->msgs->addError('druga wartość nie jest liczbą całkowitą!');
        }
        
        if (! is_numeric( $this->form->waga )) {
            $this->msgs->addError('pierwsza wartość nie jest liczbą całkowitą!');
        }	
    	
		return ! $this->msgs->isError();
	}
	
	public function process(){

		$this->getparams();
		
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
			
			
			$this->msgs->addInfo('obliczenia wykonane poprawnie :D');
		}
		
		$this->generateView();
	}
	
	
	
	public function generateView(){
        global $conf;

    $smarty = new Smarty(); 
    
    $smarty->assign('conf',$conf);
    $smarty->assign('msgs',$this->msgs);
    $smarty->assign('form',$this->form);
    $smarty->assign('res',$this->result);

  
    
    $smarty->display($conf->root_path.'/app/CalcView.html');  

	}
}
