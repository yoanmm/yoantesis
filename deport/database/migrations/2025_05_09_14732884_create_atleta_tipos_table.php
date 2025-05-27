<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreateDelegacionTipoTable extends Migration
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
        $exist_table=$connection->hasTable("delegacion_tipo");
        if(!$exist_table){
            Schema::create("delegacion_tipo",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_tipo_delegacion',true);
                $table->string('tipo_delegacion',255)->nullable();
            });
        }else{
            Schema::table("delegacion_tipo",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('delegacion_tipo');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("delegacion_tipo",'id_tipo_delegacion')){
                   $table->integer('id_tipo_delegacion',true)->change();
                }
               else{
                   $table->integer('id_tipo_delegacion',true);
                }                
                if(Schema::hasColumn("delegacion_tipo",'tipo_delegacion')){
                   $table->string('tipo_delegacion',255)->nullable()->change();
                }
               else{
                   $table->string('tipo_delegacion',255)->nullable();
                }            
			});

		  }
            Schema::table("delegacion_tipo",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('delegacion_tipo');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_tipo_delegacion', 'PRIMARY');


            });

    }

   public function down()
    {
        Schema::dropIfExists('delegacion_tipo');


        return false;
    }
}
