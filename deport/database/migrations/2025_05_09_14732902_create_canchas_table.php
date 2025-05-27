<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreateEquipoEstadoTable extends Migration
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
        $exist_table=$connection->hasTable("equipo_estado");
        if(!$exist_table){
            Schema::create("equipo_estado",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_estado');
                $table->string('estado_equipo',255)->nullable();
            });
        }else{
            Schema::table("equipo_estado",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('equipo_estado');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("equipo_estado",'id_estado')){
                   $table->integer('id_estado')->change();
                }
               else{
                   $table->integer('id_estado');
                }                
                if(Schema::hasColumn("equipo_estado",'estado_equipo')){
                   $table->string('estado_equipo',255)->nullable()->change();
                }
               else{
                   $table->string('estado_equipo',255)->nullable();
                }            
			});

		  }
            Schema::table("equipo_estado",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('equipo_estado');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_estado', 'PRIMARY');


            });

    }

   public function down()
    {
        Schema::dropIfExists('equipo_estado');


        return false;
    }
}
