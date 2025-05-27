<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreateJuegoFaseTable extends Migration
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
        $exist_table=$connection->hasTable("juego_fase");
        if(!$exist_table){
            Schema::create("juego_fase",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_fase',true);
                $table->string('nombre_fase',255)->nullable();
                $table->boolean('es_final')->nullable();
            });
        }else{
            Schema::table("juego_fase",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('juego_fase');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("juego_fase",'id_fase')){
                   $table->integer('id_fase',true)->change();
                }
               else{
                   $table->integer('id_fase',true);
                }                
                if(Schema::hasColumn("juego_fase",'nombre_fase')){
                   $table->string('nombre_fase',255)->nullable()->change();
                }
               else{
                   $table->string('nombre_fase',255)->nullable();
                }                
                if(Schema::hasColumn("juego_fase",'es_final')){
                   $table->boolean('es_final')->nullable()->change();
                }
               else{
                   $table->boolean('es_final')->nullable();
                }            
			});

		  }
            Schema::table("juego_fase",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('juego_fase');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_fase', 'PRIMARY');


            });

    }

   public function down()
    {
        Schema::dropIfExists('juego_fase');


        return false;
    }
}
