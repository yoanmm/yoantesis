<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreateJuegoDelegacionTable extends Migration
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
        $exist_table=$connection->hasTable("juego_delegacion");
        if(!$exist_table){
            Schema::create("juego_delegacion",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_juego_delegacion',true);
                $table->addColumn('integer', 'id_juego', [
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
                $table->text('resultados')->nullable();
            });
        }else{
            Schema::table("juego_delegacion",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('juego_delegacion');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("juego_delegacion",'id_juego_delegacion')){
                   $table->integer('id_juego_delegacion',true)->change();
                }
               else{
                   $table->integer('id_juego_delegacion',true);
                }                
                if(Schema::hasColumn("juego_delegacion",'id_juego')){
                   $table->addColumn('integer', 'id_juego', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                }
               else{
                   $table->addColumn('integer', 'id_juego', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                }                
                if(Schema::hasColumn("juego_delegacion",'id_delegacion')){
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
                if(Schema::hasColumn("juego_delegacion",'resultados')){
                   $table->text('resultados')->nullable()->change();
                }
               else{
                   $table->text('resultados')->nullable();
                }            
			});

		  }
            Schema::table("juego_delegacion",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('juego_delegacion');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_juego_delegacion', 'PRIMARY');


       /*Adding foreign keys*/ 

            $foreignkeylist = $sm->listTableForeignKeys('juego_delegacion');
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'juego_delegacion_ibfk_1';
            });

            if (count($find) > 0)
                $table->dropForeign('juego_delegacion_ibfk_1');
            $table->foreign('id_juego', 'juego_delegacion_ibfk_1')
                ->references('id_juego')
                ->on('juego')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'juego_delegacion_ibfk_2';
            });

            if (count($find) > 0)
                $table->dropForeign('juego_delegacion_ibfk_2');
            $table->foreign('id_delegacion', 'juego_delegacion_ibfk_2')
                ->references('id_delegacion')
                ->on('delegacion')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");

            });

    }

   public function down()
    {
        Schema::dropIfExists('juego_delegacion');


        return false;
    }
}
