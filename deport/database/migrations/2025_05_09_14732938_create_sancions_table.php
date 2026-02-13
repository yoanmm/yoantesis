<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreateDelegacionTable extends Migration
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
        $exist_table=$connection->hasTable("delegacion");
        if(!$exist_table){
            Schema::create("delegacion",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_delegacion',true);
                $table->string('nombre_delegacion',255)->nullable();
                $table->string('abreviatura',255)->nullable();
                $table->string('mascota',255)->nullable();
                $table->string('color',255)->nullable();
                $table->string('logo',255)->nullable();
                $table->addColumn('integer', 'id_tipo_delegacion', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                $table->addColumn('integer', 'id_regla_delegacion', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                $table->text('reglamento')->nullable(); // Se agrega columna reglamento tipo archivo/base64
            });
        }else{
            Schema::table("delegacion",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('delegacion');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("delegacion",'id_delegacion')){
                   $table->integer('id_delegacion',true)->change();
                }
               else{
                   $table->integer('id_delegacion',true);
                }                
                if(Schema::hasColumn("delegacion",'nombre_delegacion')){
                   $table->string('nombre_delegacion',255)->nullable()->change();
                }
               else{
                   $table->string('nombre_delegacion',255)->nullable();
                }                
                if(Schema::hasColumn("delegacion",'abreviatura')){
                   $table->string('abreviatura',255)->nullable()->change();
                }
               else{
                   $table->string('abreviatura',255)->nullable();
                }                
                if(Schema::hasColumn("delegacion",'mascota')){
                   $table->string('mascota',255)->nullable()->change();
                }
               else{
                   $table->string('mascota',255)->nullable();
                }                
                if(Schema::hasColumn("delegacion",'color')){
                   $table->string('color',255)->nullable()->change();
                }
               else{
                   $table->string('color',255)->nullable();
                }                
                if(Schema::hasColumn("delegacion",'logo')){
                   $table->string('logo',255)->nullable()->change();
                }
               else{
                   $table->string('logo',255)->nullable();
                }                
                if(Schema::hasColumn("delegacion",'id_tipo_delegacion')){
                   $table->addColumn('integer', 'id_tipo_delegacion', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                }
               else{
                   $table->addColumn('integer', 'id_tipo_delegacion', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                }                
                if(Schema::hasColumn("delegacion",'id_regla_delegacion')){
                   $table->addColumn('integer', 'id_regla_delegacion', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                   if (!Schema::hasColumn('delegacion', 'reglamento')) {
                       $table->text('reglamento')->nullable();
                   }
                }
               else{
                   $table->addColumn('integer', 'id_regla_delegacion', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                   if (!Schema::hasColumn('delegacion', 'reglamento')) {
                       $table->text('reglamento')->nullable();
                   }
                }            
			});

		  }
            Schema::table("delegacion",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('delegacion');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_delegacion', 'PRIMARY');


       /*Adding foreign keys*/ 

            $foreignkeylist = $sm->listTableForeignKeys('delegacion');
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'delegacion_ibfk_1';
            });

            if (count($find) > 0)
                $table->dropForeign('delegacion_ibfk_1');
            $table->foreign('id_tipo_delegacion', 'delegacion_ibfk_1')
                ->references('id_tipo_delegacion')
                ->on('delegacion_tipo')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'delegacion_ibfk_2';
            });

            if (count($find) > 0)
                $table->dropForeign('delegacion_ibfk_2');
            $table->foreign('id_regla_delegacion', 'delegacion_ibfk_2')
                ->references('id_regla_delegacion')
                ->on('delegacion_regla')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");

            });

    }

   public function down()
    {
        Schema::dropIfExists('delegacion');


        return false;
    }
}
