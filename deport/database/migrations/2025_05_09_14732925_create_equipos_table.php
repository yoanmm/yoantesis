<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreateEquipoTable extends Migration
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
        $exist_table=$connection->hasTable("equipo");
        if(!$exist_table){
            Schema::create("equipo",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_equipo',true);
                $table->string('nombre_equipo',255)->nullable();
                $table->addColumn('integer', 'id_competencia', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                $table->addColumn('integer', 'id_delegacion', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                $table->addColumn('integer', 'id_estado', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
            });
        }else{
            Schema::table("equipo",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('equipo');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("equipo",'id_equipo')){
                   $table->integer('id_equipo',true)->change();
                }
               else{
                   $table->integer('id_equipo',true);
                }                
                if(Schema::hasColumn("equipo",'nombre_equipo')){
                   $table->string('nombre_equipo',255)->nullable()->change();
                }
               else{
                   $table->string('nombre_equipo',255)->nullable();
                }                
                if(Schema::hasColumn("equipo",'id_competencia')){
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
                if(Schema::hasColumn("equipo",'id_delegacion')){
                   $table->addColumn('integer', 'id_delegacion', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                }
               else{
                   $table->addColumn('integer', 'id_delegacion', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                }                
                if(Schema::hasColumn("equipo",'id_estado')){
                   $table->addColumn('integer', 'id_estado', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                }
               else{
                   $table->addColumn('integer', 'id_estado', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                }            
			});

		  }
            Schema::table("equipo",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('equipo');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_equipo', 'PRIMARY');


       /*Adding foreign keys*/ 

            $foreignkeylist = $sm->listTableForeignKeys('equipo');
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'equipo_ibfk_1';
            });

            if (count($find) > 0)
                $table->dropForeign('equipo_ibfk_1');
            $table->foreign('id_competencia', 'equipo_ibfk_1')
                ->references('id_competencia')
                ->on('competencia')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'equipo_ibfk_2';
            });

            if (count($find) > 0)
                $table->dropForeign('equipo_ibfk_2');
            $table->foreign('id_estado', 'equipo_ibfk_2')
                ->references('id_estado')
                ->on('equipo_estado')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'equipo_ibfk_3';
            });

            if (count($find) > 0)
                $table->dropForeign('equipo_ibfk_3');
            $table->foreign('id_delegacion', 'equipo_ibfk_3')
                ->references('id_delegacion')
                ->on('delegacion')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");

            });

    }

   public function down()
    {
        Schema::dropIfExists('equipo');


        return false;
    }
}
