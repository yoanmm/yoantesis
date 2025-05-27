<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreateCanchaTable extends Migration
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
        $exist_table=$connection->hasTable("cancha");
        if(!$exist_table){
            Schema::create("cancha",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_cancha',true);
                $table->string('nombre_cancha',255)->nullable();
            });
        }else{
            Schema::table("cancha",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('cancha');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("cancha",'id_cancha')){
                   $table->integer('id_cancha',true)->change();
                }
               else{
                   $table->integer('id_cancha',true);
                }                
                if(Schema::hasColumn("cancha",'nombre_cancha')){
                   $table->string('nombre_cancha',255)->nullable()->change();
                }
               else{
                   $table->string('nombre_cancha',255)->nullable();
                }            
			});

		  }
            Schema::table("cancha",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('cancha');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_cancha', 'PRIMARY');


            });

    }

   public function down()
    {
        Schema::dropIfExists('cancha');


        return false;
    }
}
