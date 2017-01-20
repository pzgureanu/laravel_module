<?php
// namespace App\Migrations\GenerateMigration;
use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;

class GenerateMigration extends Migration {

	protected $langs = ['ro' => 'RO','ru' => 'RU'];

	public function generateTable($table_db, $fields ) {

		Schema::create($table_db, function($table) use ($fields) {
	
			foreach($this->langs as $key=>$item) {
	            
                foreach($fields as $field) {

                    $field_name = $field['name'].'_'.$key;
    
                    $field_length = !empty($field['length']) ? $field['length'] : 255;
    
                    if( $field['type'] == 'string') {
    
                        $table->string($field_name, $field_length);
    
                    } else if ( $field['type'] == 'char') {
    
                        $table->string($field_name, $field_length);
    
                    }
                }
	        }
	    });
    }

}
