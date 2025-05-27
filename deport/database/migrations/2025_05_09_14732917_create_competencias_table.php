<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreateCompetenciaTable extends Migration
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
        $exist_table=$connection->hasTable("competencia");
        if(!$exist_table){
            Schema::create("competencia",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_competencia',true);
                $table->addColumn('integer', 'id_evento', [
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
                $table->addColumn('integer', 'id_supervisor', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                $table->text('resultado_competencia')->nullable();
                $table->boolean('terminado')->nullable();
                $table->timestamp('fin_inscripcion')->nullable();
            });
        }else{
            Schema::table("competencia",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('competencia');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("competencia",'id_competencia')){
                   $table->integer('id_competencia',true)->change();
                }
               else{
                   $table->integer('id_competencia',true);
                }                
                if(Schema::hasColumn("competencia",'id_evento')){
                   $table->addColumn('integer', 'id_evento', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                }
               else{
                   $table->addColumn('integer', 'id_evento', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                }                
                if(Schema::hasColumn("competencia",'id_deporte')){
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
                if(Schema::hasColumn("competencia",'id_supervisor')){
                   $table->addColumn('integer', 'id_supervisor', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                }
               else{
                   $table->addColumn('integer', 'id_supervisor', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                }                
                if(Schema::hasColumn("competencia",'resultado_competencia')){
                   $table->text('resultado_competencia')->nullable()->change();
                }
               else{
                   $table->text('resultado_competencia')->nullable();
                }                
                if(Schema::hasColumn("competencia",'terminado')){
                   $table->boolean('terminado')->nullable()->change();
                }
               else{
                   $table->boolean('terminado')->nullable();
                }                
                if(Schema::hasColumn("competencia",'fin_inscripcion')){
                   $table->timestamp('fin_inscripcion')->nullable()->change();
                }
               else{
                   $table->timestamp('fin_inscripcion')->nullable();
                }            
			});

		  }
            Schema::table("competencia",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('competencia');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_competencia', 'PRIMARY');


       /*Adding foreign keys*/ 

            $foreignkeylist = $sm->listTableForeignKeys('competencia');
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'competencia_ibfk_1';
            });

            if (count($find) > 0)
                $table->dropForeign('competencia_ibfk_1');
            $table->foreign('id_deporte', 'competencia_ibfk_1')
                ->references('id_deporte')
                ->on('deporte')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'competencia_ibfk_2';
            });

            if (count($find) > 0)
                $table->dropForeign('competencia_ibfk_2');
            $table->foreign('id_supervisor', 'competencia_ibfk_2')
                ->references('id_supervisor')
                ->on('persona_arbitro')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'competencia_ibfk_3';
            });

            if (count($find) > 0)
                $table->dropForeign('competencia_ibfk_3');
            $table->foreign('id_evento', 'competencia_ibfk_3')
                ->references('id_evento')
                ->on('evento_deportivo')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");

            });

    }

   public function down()
    {
        Schema::dropIfExists('competencia');


        return false;
    }
}
