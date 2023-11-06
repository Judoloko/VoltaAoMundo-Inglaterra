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
		$sql = "SELECT * FROM ";

		$conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar', 'root', '');

		$resultado = $conexao->query($sql);

		$lista = $resultado->fetchAll();

		return $lista;
	}


}