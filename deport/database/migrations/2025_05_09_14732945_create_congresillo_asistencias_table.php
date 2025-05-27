<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreateCongresilloDeporteTable extends Migration
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
        if (!\Doctrine\DBAL\Types\Type::hasType('timestamp')) {
            \Doctrine\DBAL\Types\Type::addType('timestamp', \Illuminate\Database\DBAL\TimestampType::class);
        }        /*Generating tables and columns*/
        $connection =Schema::connection('db');
        $exist_table=$connection->hasTable("congresillo_deporte");
        if(!$exist_table){
            Schema::create("congresillo_deporte",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_congresillo',true);
                $table->timestamp('fecha_congresillo')->nullable();
                $table->addColumn('integer', 'id_competencia', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
            });
        }else{
            Schema::table("congresillo_deporte",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('congresillo_deporte');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("congresillo_deporte",'id_congresillo')){
                   $table->integer('id_congresillo',true)->change();
                }
               else{
                   $table->integer('id_congresillo',true);
                }                
                if(Schema::hasColumn("congresillo_deporte",'fecha_congresillo')){
                   $table->timestamp('fecha_congresillo')->nullable()->change();
                }
               else{
                   $table->timestamp('fecha_congresillo')->nullable();
                }                
                if(Schema::hasColumn("congresillo_deporte",'id_competencia')){
                   $table->addColumn('integer', 'id_competencia', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                }
               else{
                   $table->addColumn('integer', 'id_competencia', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                }            
			});

		  }
            Schema::table("congresillo_deporte",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('congresillo_deporte');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_congresillo', 'PRIMARY');


       /*Adding foreign keys*/ 

            $foreignkeylist = $sm->listTableForeignKeys('congresillo_deporte');
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'congresillo_deporte_ibfk_1';
            });

            if (count($find) > 0)
                $table->dropForeign('congresillo_deporte_ibfk_1');
            $table->foreign('id_competencia', 'congresillo_deporte_ibfk_1')
                ->references('id_competencia')
                ->on('competencia')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");

            });

    }

   public function down()
    {
        Schema::dropIfExists('congresillo_deporte');


        return false;
    }
}
