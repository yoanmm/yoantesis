<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreateDeporteCategoriaPuntuacionTable extends Migration
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
        $exist_table=$connection->hasTable("deporte_categoria_puntuacion");
        if(!$exist_table){
            Schema::create("deporte_categoria_puntuacion",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_categoria',true);
                $table->string('nombre_categoria',255)->nullable();
                $table->string('puntos',255)->nullable();
            });
        }else{
            Schema::table("deporte_categoria_puntuacion",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('deporte_categoria_puntuacion');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("deporte_categoria_puntuacion",'id_categoria')){
                   $table->integer('id_categoria',true)->change();
                }
               else{
                   $table->integer('id_categoria',true);
                }                
                if(Schema::hasColumn("deporte_categoria_puntuacion",'nombre_categoria')){
                   $table->string('nombre_categoria',255)->nullable()->change();
                }
               else{
                   $table->string('nombre_categoria',255)->nullable();
                }                
                if(Schema::hasColumn("deporte_categoria_puntuacion",'puntos')){
                   $table->string('puntos',255)->nullable()->change();
                }
               else{
                   $table->string('puntos',255)->nullable();
                }            
			});

		  }
            Schema::table("deporte_categoria_puntuacion",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('deporte_categoria_puntuacion');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_categoria', 'PRIMARY');


            });

    }

   public function down()
    {
        Schema::dropIfExists('deporte_categoria_puntuacion');


        return false;
    }
}
