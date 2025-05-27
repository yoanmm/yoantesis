<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreateDelegacionReglaTable extends Migration
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
        $exist_table=$connection->hasTable("delegacion_regla");
        if(!$exist_table){
            Schema::create("delegacion_regla",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_regla_delegacion',true);
                $table->string('nombre_regla',255)->nullable();
                $table->text('regla')->nullable();
            });
        }else{
            Schema::table("delegacion_regla",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('delegacion_regla');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("delegacion_regla",'id_regla_delegacion')){
                   $table->integer('id_regla_delegacion',true)->change();
                }
               else{
                   $table->integer('id_regla_delegacion',true);
                }                
                if(Schema::hasColumn("delegacion_regla",'nombre_regla')){
                   $table->string('nombre_regla',255)->nullable()->change();
                }
               else{
                   $table->string('nombre_regla',255)->nullable();
                }                
                if(Schema::hasColumn("delegacion_regla",'regla')){
                   $table->text('regla')->nullable()->change();
                }
               else{
                   $table->text('regla')->nullable();
                }            
			});

		  }
            Schema::table("delegacion_regla",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('delegacion_regla');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_regla_delegacion', 'PRIMARY');


            });

    }

   public function down()
    {
        Schema::dropIfExists('delegacion_regla');


        return false;
    }
}
