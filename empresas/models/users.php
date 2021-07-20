<?php

class users{

	public static function findUser($usuario){

		$serverName = "88.12.40.67\MSSQL11.MSSQLSERVER, 1433"; //serverName\instanceName, portNumber (por defecto es 1433)
       	$connectionInfo = array( "Database"=>"ProinmeCoordinacionObras", "UID"=>"tessq", "PWD"=>"Abc01cba");
       	$conn = sqlsrv_connect( $serverName, $connectionInfo);	

        if( $conn ) {
            $query="select * from usuarios where login='".$usuario."'";
            $result = sqlsrv_query($conn,$query);
            if ($result===false){
            	return false;
            }
            else{
	            while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
				     $user['usuario'] = $row['Login'];
				     $user['contrasenya'] = $row['Password'];
				     $user['id'] = $row['ID_Usuario'];
				}
				return $user;
			}	
			sqlsrv_close ( $conn );
        }else{
            echo "<script text='javascript' charset='utf-8'> alert('No se pudo establecer la conexión con el servidor, por favor, inténtelo de nuevo más tarde');
			window.location.replace('?r=login/identificarse'); </script>";
			die;
        }

		
	}

	   
	
	
	
}

?>