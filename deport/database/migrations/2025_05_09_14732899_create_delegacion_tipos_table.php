<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreatePermisosTable extends Migration
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
        $exist_table=$connection->hasTable("permisos");
        if(!$exist_table){
            Schema::create("permisos",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_permiso',true);
                $table->string('nombre_permiso',255)->nullable();
                $table->string('code',255)->nullable();
                $table->string('modulo',255)->nullable();
                $table->string('controller',255)->nullable();
                $table->string('accion',255)->nullable();
                $table->boolean('habilitado')->nullable();
            });
        }else{
            Schema::table("permisos",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('permisos');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("permisos",'id_permiso')){
                   $table->integer('id_permiso',true)->change();
                }
               else{
                   $table->integer('id_permiso',true);
                }                
                if(Schema::hasColumn("permisos",'nombre_permiso')){
                   $table->string('nombre_permiso',255)->nullable()->change();
                }
               else{
                   $table->string('nombre_permiso',255)->nullable();
                }                
                if(Schema::hasColumn("permisos",'code')){
                   $table->string('code',255)->nullable()->change();
                }
               else{
                   $table->string('code',255)->nullable();
                }                
                if(Schema::hasColumn("permisos",'modulo')){
                   $table->string('modulo',255)->nullable()->change();
                }
               else{
                   $table->string('modulo',255)->nullable();
                }                
                if(Schema::hasColumn("permisos",'controller')){
                   $table->string('controller',255)->nullable()->change();
                }
               else{
                   $table->string('controller',255)->nullable();
                }                
                if(Schema::hasColumn("permisos",'accion')){
                   $table->string('accion',255)->nullable()->change();
                }
               else{
                   $table->string('accion',255)->nullable();
                }                
                if(Schema::hasColumn("permisos",'habilitado')){
                   $table->boolean('habilitado')->nullable()->change();
                }
               else{
                   $table->boolean('habilitado')->nullable();
                }            
			});

		  }
            Schema::table("permisos",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('permisos');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_permiso', 'PRIMARY');


            });

    }

   public function down()
    {
        Schema::dropIfExists('permisos');


        return false;
    }
}
