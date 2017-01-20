<?php
// use Config;

// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Database\Migrations\Migration;

use App\Migrations\GenerateMigration;

class CreateSliderTable extends GenerateMigration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $fields_in_lang = [
    
        ['name' => 'title_','type' => 'string'],

        ['description' => 'title_','type' => 'string']
    
    ];

    protected $table = 'sliders';

    public function up()
    {
        $this->generateTable($this->table, $this->fields_in_lang); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
