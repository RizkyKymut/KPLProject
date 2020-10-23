<?php

/*
  Collapse Gibbs Sampling
  created: bambang subeno  
  
  A =  jumlah kata w yang masuk topik k 
  B =  jumlah kata pada topik ke-k 
  C = hitung jumlah kata pada dokumen ke-i dan topik ke-k  
  
*/

 class CollapsGibbs
 {
	private $alfa;
	private $beta;
	private $k_awal;
	private $Kawal;
	public $hasil_gibbs;
	
	public function __construct()
    {
        $this->CI =& get_instance();
    }
	
	public function setAlfa($alfa){
		$this->alfa=$alfa;
	}
	public function setBeta($beta){
		$this->beta=$beta;
	}
	public function setK_awal($k_awal){ // model 
		$this->k_awal=$k_awal;
	}
	public function setKawal($Kawal){ // start K topik
		$this->Kawal=$Kawal;
	}	
	
		  			  
		
					$row->new_topik=$topik_new;
					// save ke file, tujuannya untuk execusi insert sekaligus
					//$data_topik = $data_topik.$row->id_doc.",".$row->id_kata.",".$pwz[0]." ";	
					//file_put_contents('logfile/'.$file, $data_topik,FILE_APPEND);		
						
					if ($k_awal==$this->Kawal){  
						
						$this->hasil_gibbs[$n]= array(
										'id_doc'=>$row->id_doc,
										'id_kata'=>$row->id_kata,
										'kata'=>$row->kata,
										'topik'.$k_awal=>$pwz[0]//$top[$idx] 
									);			
						
					}else{
						if (! isset($this->hasil_gibbs[1]['topik'.$this->Kawal])){
							$this->hasil_gibbs[$n]= array(
										'id_doc'=>$row->id_doc,
										'id_kata'=>$row->id_kata,
										'kata'=>$row->kata
									);
						}
						$this->hasil_gibbs[$n]['topik'.$k_awal]=$pwz[0];//$top[$idx];
					}
					
				
				//$this->model[$k_awal][$pwz[0]] = isset($this->model[$k_awal][$pwz[0]]) ? $this->model[$k_awal][$pwz[0]]+1 : 1 ;
				//$this->vocab[$row->kata][$k_awal][$pwz[0]] = 
				//isset($this->vocab[$row->kata][$k_awal][$pwz[0]]) ? $this->vocab[$row->kata][$k_awal][$pwz[0]]+1 : 1;
			
					
					//$idx++;				
				}//end foreach
			  }				
			} // end iterasi							
		//}		
	}
	
	
 }
 
?>