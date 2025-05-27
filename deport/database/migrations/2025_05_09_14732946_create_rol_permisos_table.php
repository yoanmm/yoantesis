<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreateEventoDeportivoTable extends Migration
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
        $exist_table=$connection->hasTable("evento_deportivo");
        if(!$exist_table){
            Schema::create("evento_deportivo",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_evento',true);
                $table->string('nombre_evento',255)->nullable();
                $table->string('descripcion_evento',255)->nullable();
                $table->string('logo',255)->nullable();
                $table->timestamp('fecha_inicio')->nullable();
                $table->timestamp('fecha_fin')->nullable();
                $table->string('curso',255)->nullable();
                $table->string('edicion_evento',255)->nullable();
                $table->boolean('terminado')->nullable();
                $table->text('resultado_edicion')->nullable();
                $table->string('descripcion_delegaciones',255)->nullable();
                $table->addColumn('integer', 'id_regla_evento', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
            });
        }else{
            Schema::table("evento_deportivo",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('evento_deportivo');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("evento_deportivo",'id_evento')){
                   $table->integer('id_evento',true)->change();
                }
               else{
                   $table->integer('id_evento',true);
                }                
                if(Schema::hasColumn("evento_deportivo",'nombre_evento')){
                   $table->string('nombre_evento',255)->nullable()->change();
                }
               else{
                   $table->string('nombre_evento',255)->nullable();
                }                
                if(Schema::hasColumn("evento_deportivo",'descripcion_evento')){
                   $table->string('descripcion_evento',255)->nullable()->change();
                }
               else{
                   $table->string('descripcion_evento',255)->nullable();
                }                
                if(Schema::hasColumn("evento_deportivo",'logo')){
                   $table->string('logo',255)->nullable()->change();
                }
               else{
                   $table->string('logo',255)->nullable();
                }                
                if(Schema::hasColumn("evento_deportivo",'fecha_inicio')){
                   $table->timestamp('fecha_inicio')->nullable()->change();
                }
               else{
                   $table->timestamp('fecha_inicio')->nullable();
                }                
                if(Schema::hasColumn("evento_deportivo",'fecha_fin')){
                   $table->timestamp('fecha_fin')->nullable()->change();
                }
               else{
                   $table->timestamp('fecha_fin')->nullable();
                }                
                if(Schema::hasColumn("evento_deportivo",'curso')){
                   $table->string('curso',255)->nullable()->change();
                }
               else{
                   $table->string('curso',255)->nullable();
                }                
                if(Schema::hasColumn("evento_deportivo",'edicion_evento')){
                   $table->string('edicion_evento',255)->nullable()->change();
                }
               else{
                   $table->string('edicion_evento',255)->nullable();
                }                
                if(Schema::hasColumn("evento_deportivo",'terminado')){
                   $table->boolean('terminado')->nullable()->change();
                }
               else{
                   $table->boolean('terminado')->nullable();
                }                
                if(Schema::hasColumn("evento_deportivo",'resultado_edicion')){
                   $table->text('resultado_edicion')->nullable()->change();
                }
               else{
                   $table->text('resultado_edicion')->nullable();
                }                
                if(Schema::hasColumn("evento_deportivo",'descripcion_delegaciones')){
                   $table->string('descripcion_delegaciones',255)->nullable()->change();
                }
               else{
                   $table->string('descripcion_delegaciones',255)->nullable();
                }                
                if(Schema::hasColumn("evento_deportivo",'id_regla_evento')){
                   $table->addColumn('integer', 'id_regla_evento', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                }
               else{
                   $table->addColumn('integer', 'id_regla_evento', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                }            
			});

		  }
            Schema::table("evento_deportivo",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('evento_deportivo');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_evento', 'PRIMARY');


       /*Adding foreign keys*/ 

            $foreignkeylist = $sm->listTableForeignKeys('evento_deportivo');
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'FK_regla_evento';
            });

            if (count($find) > 0)
                $table->dropForeign('FK_regla_evento');
            $table->foreign('id_regla_evento', 'FK_regla_evento')
                ->references('id_regla_evento')
                ->on('evento_deportivo_regla')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");

            });

    }

   public function down()
    {
        Schema::dropIfExists('evento_deportivo');


        return false;
    }
}
