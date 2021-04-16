<?php

class Emysqli{
		public $conn;
        private  $php_ver;
                
                



                /*

			MySQLi Class By Omar Dev
			Require Php 5.x or 7.x
			this class is made for make you easy to use mysqli

			Note :- This Class made for the most used tools in mysql not all tools in mysql in this class




			to run this class you need to run this comand

			$mysql = new Emysqli();
			$mysql->conn = mysqli_connect($db_host, $db_user,$db_pass,$db_name);





		Important Note :- Where SYNTAX = selectR(users, '*', " password= 'G#$GSA#@' "); note like this selectR(users, '*', " password=G#$GSA#@ ");


		*/
                

                // setPHPver is using for set your php version if its 5.x.x than setPHPver(5) or if php version is 7.x.x than type setPHPver(7);
               public function setPHPver($version) {
                   $this->php_ver = $version;
               }
               // create is using to create database and return value of query
                public function create($db_name) {
                    $sql = "CREATE DATABASE $db_name";
                    if ($this->php_ver == 7){
                        $go = mysqli_query($this->conn, $sql);
                    } else if ($this->php_ver == 5){
                        $go = mysql_query($sql);
                    }
                    return $go;
                }
		// selectC is Using for check if column exist or no and to get number of selected rows
		// SELECTC SYNTAX = $mysql->selectC(table[requierd], column[requierd], where[optional])
		
                public function countRows($table, $column, $where){
			if ($where == ""){
				$sql = "SELECT ". $column . "FROM " . $table . " ";
			} else {
				$sql = "SELECT $column FROM $table WHERE $where";
			}
                        if ($this->php_ver == 7){
			$go = mysqli_query($this->conn, $sql);
                        $count = mysqli_num_rows($go);
                        
                        } else if ($this->php_ver == 5){
                            $go = mysql_query($sql);
                            $count = mysql_num_rows($go);
                        }
			return $count;
		}
		// selectR is using for get a value of query after select nothing will happen but it will return a query value
		// SELECTR SYNTAX = $mysql->selectR(table[requierd], column[requierd], where[optional])
		// using for make a  accounts list or history or somthing like this
		public function select($table, $column, $where){
			if ($where == ""){
				$sql = "SELECT ". $column . "FROM " . $table . " ";
			} else {
				$sql = "SELECT $column FROM $table WHERE $where";
			}
			  if ($this->php_ver == 7){
                        $go = mysqli_query($this->conn, $sql);
                    } else if ($this->php_ver == 5){
                        $go = mysql_query($sql);
                    }
			return $go;

		}
		// insert is using for insert a values in sql and return a value of query
		// most using for create account or add admin or somthin like this
		// insert SYNTAX = $mysql->insert(table[requierd], column[requierd], values[requierd])
		// Example $mysql->insert("accounts","user,pass","'Ahmed','Ahmed123'")
		public function insert($table, $columns, $values){
				$sql = "INSERT INTO $table ($columns) VALUES ($values)";
			  if ($this->php_ver == 7){
                        $go = mysqli_query($this->conn, $sql);
                    } else if ($this->php_ver == 5){
                        $go = mysql_query($sql);
                    }
			return $go;
		}
		// remove is using for delete a column in sql and return a value of query
		// this is using for delete account or delete task or somthing like this
		// remove SYNTAX = $mysql->delete(table[requierd], where[requierd])
	// Example $mysql->delete("accounts","user='ahmed'")
		public function delete($table, $where){

				$sql = "DELETE FROM $table WHERE $where";

			  if ($this->php_ver == 7){
                        $go = mysqli_query($this->conn, $sql);
                    } else if ($this->php_ver == 5){
                        $go = mysql_query($sql);
                    }
			return $go;
		}
		// update is updating a value in sql and return value for query
	// update SYNTAX = $mysql->update(table[requierd], VALUES[requierd], where[requierd])
	// Example $mysql->update("accounts","user='ahmed',pass='ahmed123'","user='ahmed'")
		public function update($table, $values, $where){

				$sql = "UPDATE $table SET $values WHERE $where";
				  if ($this->php_ver == 7){
                        $go = mysqli_query($this->conn, $sql);
                    } else if ($this->php_ver == 5){
                        $go = mysql_query($sql);
                    }
				return $go;

		}
		// Query function do sql Query and Return Value 
		public function query($sql)
		{
			  if ($this->php_ver == 7){
                        $go = mysqli_query($this->conn, $sql);
                    } else if ($this->php_ver == 5){
                        $go = mysql_query($sql);
                    }
			return $go;
		}
	}
	?>
