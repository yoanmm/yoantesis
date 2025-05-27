<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreateDeporteReglaTable extends Migration
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
        $exist_table=$connection->hasTable("deporte_regla");
        if(!$exist_table){
            Schema::create("deporte_regla",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_regla_deporte');
                $table->string('nombre_regla',255)->nullable();
                $table->text('campos')->nullable();
                $table->text('cal_campos')->nullable();
            });
        }else{
            Schema::table("deporte_regla",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('deporte_regla');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("deporte_regla",'id_regla_deporte')){
                   $table->integer('id_regla_deporte')->change();
                }
               else{
                   $table->integer('id_regla_deporte');
                }                
                if(Schema::hasColumn("deporte_regla",'nombre_regla')){
                   $table->string('nombre_regla',255)->nullable()->change();
                }
               else{
                   $table->string('nombre_regla',255)->nullable();
                }                
                if(Schema::hasColumn("deporte_regla",'campos')){
                   $table->text('campos')->nullable()->change();
                }
               else{
                   $table->text('campos')->nullable();
                }                
                if(Schema::hasColumn("deporte_regla",'cal_campos')){
                   $table->text('cal_campos')->nullable()->change();
                }
               else{
                   $table->text('cal_campos')->nullable();
                }            
			});

		  }
            Schema::table("deporte_regla",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('deporte_regla');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_regla_deporte', 'PRIMARY');


            });

    }

   public function down()
    {
        Schema::dropIfExists('deporte_regla');


        return false;
    }
}
