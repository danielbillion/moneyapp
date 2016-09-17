<?php

class SetupFields{
	
	private $db;
	
	public function __construct(){
	
	$this->db= new Database;
	}
	
	public function create(){
		$DB_NAME=DB_NAME;
		// create new column bank for agent_cust_receiver
				$this->db->query(
				"SET @preparedStatement2 =  (SELECT IF(
    (SELECT COUNT(*)
        FROM INFORMATION_SCHEMA.COLUMNS
        WHERE table_name = 'agent_cust_receiver'
        AND table_schema = '$DB_NAME'
        AND column_name = 'bank'
    ) > 0,
    'SELECT 1',
    'ALTER TABLE agent_cust_receiver ADD bank VARCHAR(100)'
));
											PREPARE alterIfNotExists FROM @preparedStatement2;
											EXECUTE alterIfNotExists;
											DEALLOCATE PREPARE alterIfNotExist
				");
				
$this->db->execute();				
						
    	
				// create new column bank for receiver
				
				$this->db->query(
				"SET @preparedStatement4 =  (SELECT IF(
    (SELECT COUNT(*)
        FROM INFORMATION_SCHEMA.COLUMNS
        WHERE table_name = 'receiver'
        AND table_schema = '$DB_NAME'
        AND column_name = 'bank'
    ) > 0,
    'SELECT 1',
    'ALTER TABLE receiver ADD bank VARCHAR(100)'
));
											PREPARE alterIfNotExists FROM @preparedStatement4;
											EXECUTE alterIfNotExists;
											DEALLOCATE PREPARE alterIfNotExist
				");
		
		$this->db->execute();
		
		
		// create new column myPhoto for agent
				
				$this->db->query(
				"SET @preparedStatement5 =  (SELECT IF(
    (SELECT COUNT(*)
        FROM INFORMATION_SCHEMA.COLUMNS
        WHERE table_name = 'agent'
        AND table_schema = '$DB_NAME'
        AND column_name = 'myPhoto_name'
		
    ) > 0,
    'SELECT 1',
    'ALTER TABLE agent ADD myPhoto_name VARCHAR(100),ADD myPhoto_size VARCHAR(100),ADD myPhoto_type VARCHAR(100)'
));
											PREPARE alterIfNotExists FROM @preparedStatement5;
											EXECUTE alterIfNotExists;
											DEALLOCATE PREPARE alterIfNotExist
				");
				
					// create new column myPhoto for customer
				
				$this->db->query(
				"SET @preparedStatement6 =  (SELECT IF(
    (SELECT COUNT(*)
        FROM INFORMATION_SCHEMA.COLUMNS
        WHERE table_name = 'new_customer'
        AND table_schema = '$DB_NAME'
        AND column_name = 'myPhoto_name'
		
    ) > 0,
    'SELECT 1',
    'ALTER TABLE new_customer ADD myPhoto_name VARCHAR(100),ADD myPhoto_size VARCHAR(100),ADD myPhoto_type VARCHAR(100)'
));
											PREPARE alterIfNotExists FROM @preparedStatement6;
											EXECUTE alterIfNotExists;
											DEALLOCATE PREPARE alterIfNotExist
				");
		
		$this->db->execute();
			
			
				
					return true;
		
	}
	
	
}


?>