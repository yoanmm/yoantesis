<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreatePersonaAtletaTable extends Migration
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
        $exist_table=$connection->hasTable("persona_atleta");
        if(!$exist_table){
            Schema::create("persona_atleta",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_atleta',true);
                $table->addColumn('integer', 'id_persona', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                $table->addColumn('integer', 'id_tipo', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                $table->string('foto',255)->nullable();
                $table->float('tamaño',12)->nullable();
                $table->float('peso',12)->nullable();
                $table->string('facultad',255)->nullable();
            });
        }else{
            Schema::table("persona_atleta",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('persona_atleta');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("persona_atleta",'id_atleta')){
                   $table->integer('id_atleta',true)->change();
                }
               else{
                   $table->integer('id_atleta',true);
                }                
                if(Schema::hasColumn("persona_atleta",'id_persona')){
                   $table->addColumn('integer', 'id_persona', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                }
               else{
                   $table->addColumn('integer', 'id_persona', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                }                
                if(Schema::hasColumn("persona_atleta",'id_tipo')){
                   $table->addColumn('integer', 'id_tipo', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                }
               else{
                   $table->addColumn('integer', 'id_tipo', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                }                
                if(Schema::hasColumn("persona_atleta",'foto')){
                   $table->string('foto',255)->nullable()->change();
                }
               else{
                   $table->string('foto',255)->nullable();
                }                
                if(Schema::hasColumn("persona_atleta",'tamaño')){
                   $table->float('tamaño',12)->nullable()->change();
                }
               else{
                   $table->float('tamaño',12)->nullable();
                }                
                if(Schema::hasColumn("persona_atleta",'peso')){
                   $table->float('peso',12)->nullable()->change();
                }
               else{
                   $table->float('peso',12)->nullable();
                }                
                if(Schema::hasColumn("persona_atleta",'facultad')){
                   $table->string('facultad',255)->nullable()->change();
                }
               else{
                   $table->string('facultad',255)->nullable();
                }            
			});

		  }
            Schema::table("persona_atleta",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('persona_atleta');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_atleta', 'PRIMARY');


       /*Adding foreign keys*/ 

            $foreignkeylist = $sm->listTableForeignKeys('persona_atleta');
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'persona_atleta_ibfk_1';
            });

            if (count($find) > 0)
                $table->dropForeign('persona_atleta_ibfk_1');
            $table->foreign('id_persona', 'persona_atleta_ibfk_1')
                ->references('id_persona')
                ->on('persona')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'persona_atleta_ibfk_2';
            });

            if (count($find) > 0)
                $table->dropForeign('persona_atleta_ibfk_2');
            $table->foreign('id_tipo', 'persona_atleta_ibfk_2')
                ->references('id_tipo')
                ->on('atleta_tipo')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");

            });

    }

   public function down()
    {
        Schema::dropIfExists('persona_atleta');


        return false;
    }
}
