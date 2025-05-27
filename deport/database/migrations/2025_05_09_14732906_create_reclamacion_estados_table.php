<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreateAtletaTipoTable extends Migration
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
        $exist_table=$connection->hasTable("atleta_tipo");
        if(!$exist_table){
            Schema::create("atleta_tipo",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_tipo',true);
                $table->string('tipo_atleta',255)->nullable();
            });
        }else{
            Schema::table("atleta_tipo",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('atleta_tipo');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("atleta_tipo",'id_tipo')){
                   $table->integer('id_tipo',true)->change();
                }
               else{
                   $table->integer('id_tipo',true);
                }                
                if(Schema::hasColumn("atleta_tipo",'tipo_atleta')){
                   $table->string('tipo_atleta',255)->nullable()->change();
                }
               else{
                   $table->string('tipo_atleta',255)->nullable();
                }            
			});

		  }
            Schema::table("atleta_tipo",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('atleta_tipo');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_tipo', 'PRIMARY');


            });

    }

   public function down()
    {
        Schema::dropIfExists('atleta_tipo');


        return false;
    }
}
