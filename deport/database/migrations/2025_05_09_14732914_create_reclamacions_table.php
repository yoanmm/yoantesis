<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreateReclamacionTable extends Migration
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
        $exist_table=$connection->hasTable("reclamacion");
        if(!$exist_table){
            Schema::create("reclamacion",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_reclamacion');
                $table->timestamp('fecha_reclamacion')->nullable();
                $table->string('descripcion_reclamacion',255)->nullable();
                $table->addColumn('integer', 'id_delegacion', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                $table->addColumn('integer', 'id_sancion', [
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
            Schema::table("reclamacion",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('reclamacion');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("reclamacion",'id_reclamacion')){
                   $table->integer('id_reclamacion')->change();
                }
               else{
                   $table->integer('id_reclamacion');
                }                
                if(Schema::hasColumn("reclamacion",'fecha_reclamacion')){
                   $table->timestamp('fecha_reclamacion')->nullable()->change();
                }
               else{
                   $table->timestamp('fecha_reclamacion')->nullable();
                }                
                if(Schema::hasColumn("reclamacion",'descripcion_reclamacion')){
                   $table->string('descripcion_reclamacion',255)->nullable()->change();
                }
               else{
                   $table->string('descripcion_reclamacion',255)->nullable();
                }                
                if(Schema::hasColumn("reclamacion",'id_delegacion')){
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
                if(Schema::hasColumn("reclamacion",'id_sancion')){
                   $table->addColumn('integer', 'id_sancion', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                }
               else{
                   $table->addColumn('integer', 'id_sancion', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                }                
                if(Schema::hasColumn("reclamacion",'id_estado')){
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
            Schema::table("reclamacion",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('reclamacion');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_reclamacion', 'PRIMARY');


       /*Adding foreign keys*/ 

            $foreignkeylist = $sm->listTableForeignKeys('reclamacion');
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'reclamacion_ibfk_1';
            });

            if (count($find) > 0)
                $table->dropForeign('reclamacion_ibfk_1');
            $table->foreign('id_delegacion', 'reclamacion_ibfk_1')
                ->references('id_delegacion')
                ->on('delegacion')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'reclamacion_ibfk_2';
            });

            if (count($find) > 0)
                $table->dropForeign('reclamacion_ibfk_2');
            $table->foreign('id_sancion', 'reclamacion_ibfk_2')
                ->references('id_sancion')
                ->on('sancion')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'reclamacion_ibfk_3';
            });

            if (count($find) > 0)
                $table->dropForeign('reclamacion_ibfk_3');
            $table->foreign('id_estado', 'reclamacion_ibfk_3')
                ->references('id_estado')
                ->on('reclamacion_estado')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");

            });

    }

   public function down()
    {
        Schema::dropIfExists('reclamacion');


        return false;
    }
}
