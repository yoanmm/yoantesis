<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreateDeporteTable extends Migration
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
        $exist_table=$connection->hasTable("deporte");
        if(!$exist_table){
            Schema::create("deporte",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_deporte',true);
                $table->string('nombre_deporte',255)->nullable();
                $table->integer('max_atleta')->nullable();
                $table->integer('min_atleta')->nullable();
                $table->string('icono_deporte',255)->nullable();
                $table->string('genero',255)->nullable();
                $table->boolean('individual')->nullable();
                $table->addColumn('integer', 'id_categoria', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                $table->addColumn('integer', 'id_regla', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                $table->addColumn('integer', 'id_deporte_padre', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
            });
        }else{
            Schema::table("deporte",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('deporte');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("deporte",'id_deporte')){
                   $table->integer('id_deporte',true)->change();
                }
               else{
                   $table->integer('id_deporte',true);
                }                
                if(Schema::hasColumn("deporte",'nombre_deporte')){
                   $table->string('nombre_deporte',255)->nullable()->change();
                }
               else{
                   $table->string('nombre_deporte',255)->nullable();
                }                
                if(Schema::hasColumn("deporte",'max_atleta')){
                   $table->integer('max_atleta')->nullable()->change();
                }
               else{
                   $table->integer('max_atleta')->nullable();
                }                
                if(Schema::hasColumn("deporte",'min_atleta')){
                   $table->integer('min_atleta')->nullable()->change();
                }
               else{
                   $table->integer('min_atleta')->nullable();
                }                
                if(Schema::hasColumn("deporte",'icono_deporte')){
                   $table->string('icono_deporte',255)->nullable()->change();
                }
               else{
                   $table->string('icono_deporte',255)->nullable();
                }                
                if(Schema::hasColumn("deporte",'genero')){
                   $table->string('genero',255)->nullable()->change();
                }
               else{
                   $table->string('genero',255)->nullable();
                }                
                if(Schema::hasColumn("deporte",'individual')){
                   $table->boolean('individual')->nullable()->change();
                }
               else{
                   $table->boolean('individual')->nullable();
                }                
                if(Schema::hasColumn("deporte",'id_categoria')){
                   $table->addColumn('integer', 'id_categoria', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                }
               else{
                   $table->addColumn('integer', 'id_categoria', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                }                
                if(Schema::hasColumn("deporte",'id_regla')){
                   $table->addColumn('integer', 'id_regla', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                }
               else{
                   $table->addColumn('integer', 'id_regla', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                }                
                if(Schema::hasColumn("deporte",'id_deporte_padre')){
                   $table->addColumn('integer', 'id_deporte_padre', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                }
               else{
                   $table->addColumn('integer', 'id_deporte_padre', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                }            
			});

		  }
            Schema::table("deporte",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('deporte');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_deporte', 'PRIMARY');


       /*Adding foreign keys*/ 

            $foreignkeylist = $sm->listTableForeignKeys('deporte');
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'FK_categoria';
            });

            if (count($find) > 0)
                $table->dropForeign('FK_categoria');
            $table->foreign('id_categoria', 'FK_categoria')
                ->references('id_categoria')
                ->on('deporte_categoria_puntuacion')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'FK_padre';
            });

            if (count($find) > 0)
                $table->dropForeign('FK_padre');
            $table->foreign('id_deporte_padre', 'FK_padre')
                ->references('id_deporte')
                ->on('deporte')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'FK_regla';
            });

            if (count($find) > 0)
                $table->dropForeign('FK_regla');
            $table->foreign('id_regla', 'FK_regla')
                ->references('id_regla_deporte')
                ->on('deporte_regla')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");

            });

    }

   public function down()
    {
        Schema::dropIfExists('deporte');


        return false;
    }
}
