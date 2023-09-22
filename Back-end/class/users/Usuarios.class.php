<?php
require_once 'Pergunta.class.php';
require_once 'CategoriaUsuario.class.php';
require_once 'instituicao.class.php';
require_once 'RedeSocial.class.php';

class Usuario{
    public function __construct(
        private int $id_usuario = 0,
        private string $nomeUsuario = "",
        private string $nome = "",
        private string $sobrenome = "",    
        private string $dataNascimento = "",    
        private string $email = "",
        private string $cpf = "",
        private $categoria = null,
        private string $lattes = "",
        private string $areaAtuacao = "",
        private $instituicao = null,
        private string $senha = "",
        private $pergunta = null,
        private string $resposta = "",
        private array $recursos = array(),
        private array $pa = array(),
        private array $seguidores = array(),
        private array $seguindo = array(),
        $id_redesocial = 0,
        $tiporede = null,
        $link = ""
    ){}

    //set methods
    public function setIdUsuario($id){
        $this->id_usuario = $id;
    }
    public function setNomeUsuario($nome){
        $this->nomeUsuario = $nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setSobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
    }
    public function setDataNasc($data){
        $this->dataNascimento = $data;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }
    public function setLattes($lattes){
        $this->lattes = $lattes;
    }
    public function setAreaAtuacao($area){
        $this->areaAtuacao = $area;
    }
    public function setInstituicao($instituicao){
        $this->instituicao = $instituicao;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }
    public function setPergunta($pergunta){
        $this->pergunta = $pergunta;
    }
    public function setResposta($resposta){
        $this->resposta = $resposta;
    }
    public function setRecursos($recurso){
        $this->recursos[] = $recurso;
    }
    public function setPA($pa){
        $this->pa[] = $pa;
    }
    public function setSeguidores($seguidores){
        $this->seguidores[] = $seguidores;
    }
    public function setSeguindo($seguindo){
        $this->seguindo[] = $seguindo;
    }
    public function setRedeSocial($id_redesocial, $tiporede, $link){
        $this->redesocial[] = new RedeSocial($id_redesocial, $tiporede, $link);
    }

    //get methods
    public function getIdUsuario(){
        return $this->id_usuario;
    }
    public function getNomeUsuario(){
        return $this->nomeUsuario;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getSobrenome(){
        return $this->sobrenome;
    }
    public function getDataNasc(){
        return $this->dataNascimento;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function getLattes(){
        return $this->lattes;
    }
    public function getAreaAtuacao(){
        return $this->areaAtuacao;
    }
    public function getInstituicao(){
        return $this->instituicao;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function getPergunta(){
        return $this->pergunta;
    }
    public function getResposta(){
        return $this->resposta;
    }
    public function getRecursos(){
        return $this->recursos;
    }
    public function getPA(){
        return $this->pa;
    }
    public function getSeguidores(){
        return $this->seguidores;
    }
    public function getSeguindo(){
        return $this->seguindo;
    }
    public function getRedeSocial(){
        return $this->redesocial;
    }
}