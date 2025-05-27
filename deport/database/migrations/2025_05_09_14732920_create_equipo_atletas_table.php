<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreateEquipoAtletaTable extends Migration
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
        $exist_table=$connection->hasTable("equipo_atleta");
        if(!$exist_table){
            Schema::create("equipo_atleta",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_equipo_atleta');
                $table->addColumn('integer', 'id_equipo', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                $table->addColumn('integer', 'id_atleta', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                $table->addColumn('integer', 'id_estado_atleta', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                $table->boolean('capitan')->nullable();
                $table->boolean('subcapitan')->nullable();
            });
        }else{
            Schema::table("equipo_atleta",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('equipo_atleta');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("equipo_atleta",'id_equipo_atleta')){
                   $table->integer('id_equipo_atleta')->change();
                }
               else{
                   $table->integer('id_equipo_atleta');
                }                
                if(Schema::hasColumn("equipo_atleta",'id_equipo')){
                   $table->addColumn('integer', 'id_equipo', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                }
               else{
                   $table->addColumn('integer', 'id_equipo', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                }                
                if(Schema::hasColumn("equipo_atleta",'id_atleta')){
                   $table->addColumn('integer', 'id_atleta', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                }
               else{
                   $table->addColumn('integer', 'id_atleta', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                }                
                if(Schema::hasColumn("equipo_atleta",'id_estado_atleta')){
                   $table->addColumn('integer', 'id_estado_atleta', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                }
               else{
                   $table->addColumn('integer', 'id_estado_atleta', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                }                
                if(Schema::hasColumn("equipo_atleta",'capitan')){
                   $table->boolean('capitan')->nullable()->change();
                }
               else{
                   $table->boolean('capitan')->nullable();
                }                
                if(Schema::hasColumn("equipo_atleta",'subcapitan')){
                   $table->boolean('subcapitan')->nullable()->change();
                }
               else{
                   $table->boolean('subcapitan')->nullable();
                }            
			});

		  }
            Schema::table("equipo_atleta",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('equipo_atleta');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_equipo_atleta', 'PRIMARY');


       /*Adding foreign keys*/ 

            $foreignkeylist = $sm->listTableForeignKeys('equipo_atleta');
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'equipo_atleta_ibfk_1';
            });

            if (count($find) > 0)
                $table->dropForeign('equipo_atleta_ibfk_1');
            $table->foreign('id_equipo', 'equipo_atleta_ibfk_1')
                ->references('id_equipo')
                ->on('equipo')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'equipo_atleta_ibfk_2';
            });

            if (count($find) > 0)
                $table->dropForeign('equipo_atleta_ibfk_2');
            $table->foreign('id_atleta', 'equipo_atleta_ibfk_2')
                ->references('id_atleta')
                ->on('persona_atleta')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'equipo_atleta_ibfk_3';
            });

            if (count($find) > 0)
                $table->dropForeign('equipo_atleta_ibfk_3');
            $table->foreign('id_estado_atleta', 'equipo_atleta_ibfk_3')
                ->references('id_estado')
                ->on('atleta_estado')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");

            });

    }

   public function down()
    {
        Schema::dropIfExists('equipo_atleta');


        return false;
    }
}
