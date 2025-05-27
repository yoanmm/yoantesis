<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreateRolTable extends Migration
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
        if (!\Doctrine\DBAL\Types\Type::hasType('timestamp')) {
            \Doctrine\DBAL\Types\Type::addType('timestamp', \Illuminate\Database\DBAL\TimestampType::class);
        }        /*Generating tables and columns*/
        $connection =Schema::connection('db');
        $exist_table=$connection->hasTable("rol");
        if(!$exist_table){
            Schema::create("rol",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_rol',true);
                $table->string('nombre_rol',255)->nullable();
                $table->boolean('activo')->nullable();
                $table->timestamp('creado')->nullable();
                $table->timestamp('actualizado')->nullable();
            });
        }else{
            Schema::table("rol",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('rol');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("rol",'id_rol')){
                   $table->integer('id_rol',true)->change();
                }
               else{
                   $table->integer('id_rol',true);
                }                
                if(Schema::hasColumn("rol",'nombre_rol')){
                   $table->string('nombre_rol',255)->nullable()->change();
                }
               else{
                   $table->string('nombre_rol',255)->nullable();
                }                
                if(Schema::hasColumn("rol",'activo')){
                   $table->boolean('activo')->nullable()->change();
                }
               else{
                   $table->boolean('activo')->nullable();
                }                
                if(Schema::hasColumn("rol",'creado')){
                   $table->timestamp('creado')->nullable()->change();
                }
               else{
                   $table->timestamp('creado')->nullable();
                }                
                if(Schema::hasColumn("rol",'actualizado')){
                   $table->timestamp('actualizado')->nullable()->change();
                }
               else{
                   $table->timestamp('actualizado')->nullable();
                }            
			});

		  }
            Schema::table("rol",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('rol');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_rol', 'PRIMARY');


            });

    }

   public function down()
    {
        Schema::dropIfExists('rol');


        return false;
    }
}
