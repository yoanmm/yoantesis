<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreateEventoDeportivoReglaTable extends Migration
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
        $exist_table=$connection->hasTable("evento_deportivo_regla");
        if(!$exist_table){
            Schema::create("evento_deportivo_regla",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_regla_evento',true);
                $table->string('nombre_regla',255)->nullable();
                $table->text('regla')->nullable();
            });
        }else{
            Schema::table("evento_deportivo_regla",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('evento_deportivo_regla');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("evento_deportivo_regla",'id_regla_evento')){
                   $table->integer('id_regla_evento',true)->change();
                }
               else{
                   $table->integer('id_regla_evento',true);
                }                
                if(Schema::hasColumn("evento_deportivo_regla",'nombre_regla')){
                   $table->string('nombre_regla',255)->nullable()->change();
                }
               else{
                   $table->string('nombre_regla',255)->nullable();
                }                
                if(Schema::hasColumn("evento_deportivo_regla",'regla')){
                   $table->text('regla')->nullable()->change();
                }
               else{
                   $table->text('regla')->nullable();
                }            
			});

		  }
            Schema::table("evento_deportivo_regla",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('evento_deportivo_regla');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_regla_evento', 'PRIMARY');


            });

    }

   public function down()
    {
        Schema::dropIfExists('evento_deportivo_regla');


        return false;
    }
}
