<?php
/**
 * Classe View
 * Classe responsável por exibir o conteúdo pra p usuário
 */
class View{
    /**
     * $tema
     * @access private
     */
    private $tema;
    
    /**
     * $user
     * Mantém informações do usuário corrente
     * @access private
     */
    private $user=null;

    /**
     * Método construtor
     */
    public function __construct(){
        $this->tema=TEMA;
    }
    /**
     * $setTema()
     * Define o tema corrente
     * @access public
     * @param String
     */
    public function setTema($tema){
        $this->tema=$tema;
    }

    /**
     * $setTema()
     * Define o usuário corrente
     * @access public
     * @param Object
     */
    public function setUser($user){
        $this->user=$user;
    }

    /**
     * $getUser()
     * Pega o usuário corrente
     * @access public
     * @return Object
     */
    public function getUser(){
        return $this->user;
    }

    /**
     * $show()
     * Exibe o conteúdo ao usuário
     * @access public
     * @param String
     * @param Array
     */
    public function show($content,$data){
        
        if(empty($this->tema)){
           $this->tema='default'; 
        }
      
        include DIR_TEMA.TEMA."/index.php";

    }



}
