<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreateJuegoTable extends Migration
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
        $exist_table=$connection->hasTable("juego");
        if(!$exist_table){
            Schema::create("juego",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_juego',true);
                $table->timestamp('fecha_inicio')->nullable();
                $table->timestamp('fecha_fin')->nullable();
                $table->string('descripcion_juego',255)->nullable();
                $table->addColumn('integer', 'id_competencia', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                $table->addColumn('integer', 'id_fase', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                $table->addColumn('integer', 'id_cancha', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
            });
        }else{
            Schema::table("juego",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('juego');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("juego",'id_juego')){
                   $table->integer('id_juego',true)->change();
                }
               else{
                   $table->integer('id_juego',true);
                }                
                if(Schema::hasColumn("juego",'fecha_inicio')){
                   $table->timestamp('fecha_inicio')->nullable()->change();
                }
               else{
                   $table->timestamp('fecha_inicio')->nullable();
                }                
                if(Schema::hasColumn("juego",'fecha_fin')){
                   $table->timestamp('fecha_fin')->nullable()->change();
                }
               else{
                   $table->timestamp('fecha_fin')->nullable();
                }                
                if(Schema::hasColumn("juego",'descripcion_juego')){
                   $table->string('descripcion_juego',255)->nullable()->change();
                }
               else{
                   $table->string('descripcion_juego',255)->nullable();
                }                
                if(Schema::hasColumn("juego",'id_competencia')){
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
                if(Schema::hasColumn("juego",'id_fase')){
                   $table->addColumn('integer', 'id_fase', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                }
               else{
                   $table->addColumn('integer', 'id_fase', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                }                
                if(Schema::hasColumn("juego",'id_cancha')){
                   $table->addColumn('integer', 'id_cancha', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                }
               else{
                   $table->addColumn('integer', 'id_cancha', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                }            
			});

		  }
            Schema::table("juego",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('juego');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_juego', 'PRIMARY');


       /*Adding foreign keys*/ 

            $foreignkeylist = $sm->listTableForeignKeys('juego');
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'juego_ibfk_1';
            });

            if (count($find) > 0)
                $table->dropForeign('juego_ibfk_1');
            $table->foreign('id_competencia', 'juego_ibfk_1')
                ->references('id_competencia')
                ->on('competencia')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'juego_ibfk_2';
            });

            if (count($find) > 0)
                $table->dropForeign('juego_ibfk_2');
            $table->foreign('id_fase', 'juego_ibfk_2')
                ->references('id_fase')
                ->on('juego_fase')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'juego_ibfk_3';
            });

            if (count($find) > 0)
                $table->dropForeign('juego_ibfk_3');
            $table->foreign('id_cancha', 'juego_ibfk_3')
                ->references('id_cancha')
                ->on('cancha')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");

            });

    }

   public function down()
    {
        Schema::dropIfExists('juego');


        return false;
    }
}
