<?php
class Feedback
{
	public $id;
	public $nome;
	public $email;
	public $idade;
	public $sexo;
	public $cidade;
	public $nota;
	public $comentario;
	public $status_comentario;
	public function __construct($id = false)
	{
		if ($id) {
			$this->id = $id;
		}
	}


	public function inserir()
	{
		$sql = "INSERT INTO feedback (nome, email, idade, sexo, cidade, nota, comentario, status_comentario) VALUES ( 
					'" . $this->nome . "',
					'" . $this->email . "',
					'" . $this->idade . "',
					'" . $this->sexo . "',
					'" . $this->cidade . "',
					'" . $this->nota . "',
					'" . $this->comentario . "',
					'" . $this->status_comentario . "'
				)";




		$conexao = new PDO('mysql:host=127.0.0.1;dbname=login-inglaterra', 'root', '');
		$conexao->exec($sql);
		echo "Registro gravado com sucesso";
	}

	public function listar()
	{
		$sql = "SELECT nome,email,comentario,status_comentario FROM  feedback";

		$conexao = new PDO('mysql:host=127.0.0.1;dbname=login-inglaterra', 'root', '');

		$resultado = $conexao->query($sql);

		$lista = $resultado->fetchALL();

		return $lista;
	}

	public function listarAvaliacao()
	{
		$sql = "SELECT nome,email,idade,sexo,cidade,nota FROM  feedback";

		$conexao = new PDO('mysql:host=127.0.0.1;dbname=login-inglaterra', 'root', '');

		$resultado = $conexao->query($sql);

		$lista = $resultado->fetchALL();

		return $lista;
	}


}