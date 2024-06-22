<?php

		$Bco = 'padaria';
		$Usuario = 'root';
		$Senha = '';

		try 
		{
			$conexao = new PDO("mysql:host=localhost; dbname=$Bco", "$Usuario", "$Senha");
			$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$conexao->exec("set names utf8");
		} 
		catch (PDOException $erro) 
		{
			echo "Erro na conexão:" . $erro->getMessage();
		}

class Conexao{

	private static $instancia;

	public static function getConexao(){
		
		if(isset(self::$instancia)){
			try{
				self::$instancia = new PDO ('mysql:host=localhost; dbname=padaria; charset=utf8', 'root', '');
				$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING ); $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
				return self::$instancia;
			}
			catch(PDOException $e)
			{
				throw new PDOException($e);
			} 

		}
		else{
			return self::$instancia;
		}
		
	}
}