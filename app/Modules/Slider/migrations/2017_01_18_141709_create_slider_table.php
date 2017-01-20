<?php 
require_once(app_path().'/Migrations/GenerateMigration.php');
// use App\Migrations\GenerateMigration;
class CreateSliderTable extends GenerateMigration
{

    protected $fields = [
    
        ['name' => 'title','type' => 'string'],

        ['name' => 'description','type' => 'string']
    
    ];

    protected $table = 'sliders';

    public function up()
    {
        $this->generateTable($this->table, $this->fields); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop($this->table);
    }
}
