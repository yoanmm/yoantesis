<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreateSancionTable extends Migration
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
        $exist_table=$connection->hasTable("sancion");
        if(!$exist_table){
            Schema::create("sancion",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_sancion',true);
                $table->timestamp('fecha_sancion')->nullable();
                $table->string('razon',255)->nullable();
                $table->integer('puntos_sancion')->nullable();
                $table->boolean('suspendido')->nullable();
                $table->integer('juegos_suspendidos')->nullable();
                $table->boolean('expulsado')->nullable();
                $table->addColumn('integer', 'id_delegacion', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                $table->addColumn('integer', 'id_competencia', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
            });
        }else{
            Schema::table("sancion",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('sancion');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("sancion",'id_sancion')){
                   $table->integer('id_sancion',true)->change();
                }
               else{
                   $table->integer('id_sancion',true);
                }                
                if(Schema::hasColumn("sancion",'fecha_sancion')){
                   $table->timestamp('fecha_sancion')->nullable()->change();
                }
               else{
                   $table->timestamp('fecha_sancion')->nullable();
                }                
                if(Schema::hasColumn("sancion",'razon')){
                   $table->string('razon',255)->nullable()->change();
                }
               else{
                   $table->string('razon',255)->nullable();
                }                
                if(Schema::hasColumn("sancion",'puntos_sancion')){
                   $table->integer('puntos_sancion')->nullable()->change();
                }
               else{
                   $table->integer('puntos_sancion')->nullable();
                }                
                if(Schema::hasColumn("sancion",'suspendido')){
                   $table->boolean('suspendido')->nullable()->change();
                }
               else{
                   $table->boolean('suspendido')->nullable();
                }                
                if(Schema::hasColumn("sancion",'juegos_suspendidos')){
                   $table->integer('juegos_suspendidos')->nullable()->change();
                }
               else{
                   $table->integer('juegos_suspendidos')->nullable();
                }                
                if(Schema::hasColumn("sancion",'expulsado')){
                   $table->boolean('expulsado')->nullable()->change();
                }
               else{
                   $table->boolean('expulsado')->nullable();
                }                
                if(Schema::hasColumn("sancion",'id_delegacion')){
                   $table->addColumn('integer', 'id_delegacion', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                }
               else{
                   $table->addColumn('integer', 'id_delegacion', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                }                
                if(Schema::hasColumn("sancion",'id_competencia')){
                   $table->addColumn('integer', 'id_competencia', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                }
               else{
                   $table->addColumn('integer', 'id_competencia', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                }            
			});

		  }
            Schema::table("sancion",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('sancion');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_sancion', 'PRIMARY');


       /*Adding foreign keys*/ 

            $foreignkeylist = $sm->listTableForeignKeys('sancion');
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'sancion_ibfk_1';
            });

            if (count($find) > 0)
                $table->dropForeign('sancion_ibfk_1');
            $table->foreign('id_delegacion', 'sancion_ibfk_1')
                ->references('id_delegacion')
                ->on('delegacion')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'sancion_ibfk_2';
            });

            if (count($find) > 0)
                $table->dropForeign('sancion_ibfk_2');
            $table->foreign('id_competencia', 'sancion_ibfk_2')
                ->references('id_competencia')
                ->on('competencia')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");

            });

    }

   public function down()
    {
        Schema::dropIfExists('sancion');


        return false;
    }
}
