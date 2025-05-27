<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreatePersonaTable extends Migration
{

/**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!\Doctrine\DBAL\Types\Type::hasType('char')) {
            \Doctrine\DBAL\Types\Type::addType('char', \Doctrine\DBAL\Types\StringType::class);
        }
        /*Generating tables and columns*/
        $connection =Schema::connection('db');
        $exist_table=$connection->hasTable("persona");
        if(!$exist_table){
            Schema::create("persona",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_persona',true);
                $table->string('nombre',255)->nullable();
                $table->string('apellido',255)->nullable();
                $table->string('carnet',255)->nullable();
                $table->string('genero',255)->nullable();
            });
        }else{
            Schema::table("persona",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('persona');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("persona",'id_persona')){
                   $table->integer('id_persona',true)->change();
                }
               else{
                   $table->integer('id_persona',true);
                }                
                if(Schema::hasColumn("persona",'nombre')){
                   $table->string('nombre',255)->nullable()->change();
                }
               else{
                   $table->string('nombre',255)->nullable();
                }                
                if(Schema::hasColumn("persona",'apellido')){
                   $table->string('apellido',255)->nullable()->change();
                }
               else{
                   $table->string('apellido',255)->nullable();
                }                
                if(Schema::hasColumn("persona",'carnet')){
                   $table->string('carnet',255)->nullable()->change();
                }
               else{
                   $table->string('carnet',255)->nullable();
                }                
                if(Schema::hasColumn("persona",'genero')){
                   $table->string('genero',255)->nullable()->change();
                }
               else{
                   $table->string('genero',255)->nullable();
                }            
			});

		  }
            Schema::table("persona",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('persona');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_persona', 'PRIMARY');


            });

    }

   public function down()
    {
        Schema::dropIfExists('persona');


        return false;
    }
}
