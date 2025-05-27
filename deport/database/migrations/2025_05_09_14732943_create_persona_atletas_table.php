<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreatePersonaArbitroTable extends Migration
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
        $exist_table=$connection->hasTable("persona_arbitro");
        if(!$exist_table){
            Schema::create("persona_arbitro",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_supervisor',true);
                $table->addColumn('integer', 'id_persona', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                $table->addColumn('integer', 'id_deporte', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
            });
        }else{
            Schema::table("persona_arbitro",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('persona_arbitro');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("persona_arbitro",'id_supervisor')){
                   $table->integer('id_supervisor',true)->change();
                }
               else{
                   $table->integer('id_supervisor',true);
                }                
                if(Schema::hasColumn("persona_arbitro",'id_persona')){
                   $table->addColumn('integer', 'id_persona', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                }
               else{
                   $table->addColumn('integer', 'id_persona', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                }                
                if(Schema::hasColumn("persona_arbitro",'id_deporte')){
                   $table->addColumn('integer', 'id_deporte', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                }
               else{
                   $table->addColumn('integer', 'id_deporte', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                }            
			});

		  }
            Schema::table("persona_arbitro",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('persona_arbitro');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_supervisor', 'PRIMARY');


       /*Adding foreign keys*/ 

            $foreignkeylist = $sm->listTableForeignKeys('persona_arbitro');
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'persona_arbitro_ibfk_1';
            });

            if (count($find) > 0)
                $table->dropForeign('persona_arbitro_ibfk_1');
            $table->foreign('id_persona', 'persona_arbitro_ibfk_1')
                ->references('id_persona')
                ->on('persona')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'persona_arbitro_ibfk_2';
            });

            if (count($find) > 0)
                $table->dropForeign('persona_arbitro_ibfk_2');
            $table->foreign('id_deporte', 'persona_arbitro_ibfk_2')
                ->references('id_deporte')
                ->on('deporte')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");

            });

    }

   public function down()
    {
        Schema::dropIfExists('persona_arbitro');


        return false;
    }
}
