<?php

class Emysqli{
		public $conn;





		/*

			MySQLi Class By Omar Dev
			Require Php 7.0+
			this class is made for make you easy to use mysqli

			Note :- This Class made for the most used tools in mysql not all tools in mysql in this class




			to run this class you need to run this comand

			$mysql = new Emysqli();
			$mysql->conn = mysqli_connect($db_host, $db_user,$db_pass,$db_name);





		Important Note :- Where SYNTAX = selectR(users, '*', " password= 'G#$GSA#@' "); note like this selectR(users, '*', " password=G#$GSA#@ ");


		*/
		// selectC is Using for check if column exist or no and to get number of selected rows
		// SELECTC SYNTAX = $mysql->selectC(table[requierd], column[requierd], where[optional])
		function selectC($table, $column, $where){
			if ($where == ""){
				$sql = "SELECT ". $column . "FROM " . $table . " ";
			} else {
				$sql = "SELECT $column FROM $table WHERE $where";
			}
			$go = mysqli_query($this->conn, $sql);
			$count = mysqli_num_rows($go);
			return $count;
		}
		// selectR is using for get a value of query after select nothing will happen but it will return a query value
		// SELECTR SYNTAX = $mysql->selectR(table[requierd], column[requierd], where[optional], echo[requierd])
		// using for make a  accounts list or history or somthing like this
		function selectR($table, $column, $where, $echo){
			if ($where == ""){
				$sql = "SELECT ". $column . "FROM " . $table . " ";
			} else {
				$sql = "SELECT $column FROM $table WHERE $where";
			}
			$go = mysqli_query($this->conn, $sql);
			return $go;

		}
		// insert is using for insert a values in sql and return a value of query
		// most using for create account or add admin or somthin like this
		// insert SYNTAX = $mysql->insert(table[requierd], column[requierd], values[requierd])
		function insert($table, $columns, $values){
				$sql = "INSERT INTO $table ($columns) VALUES ($values)";
			$go = mysqli_query($this->conn, $sql);
			return $go;
		}
		// remove is using for delete a column in sql and return a value of query
		// this is using for delete account or delete task or somthing like this
		// remove SYNTAX = $mysql->remove(table[requierd], where[requierd])
		function remove($table, $where){

				$sql = "DELETE FROM $table WHERE $where";

			$go = mysqli_query($this->conn, $sql);
			return $go;
		}
		// update is updating a value in sql and return value for query
		// most using for change password change price or something like this
	// update SYNTAX = $mysql->update(table[requierd], VALUES[requierd], where[requierd])
		function update($table, $values, $where){

				$sql = "UPDATE $table SET $values WHERE $where";
				$go = mysqli_query($this->conn, $sql);
				return $go;

		}
	}
	?>
