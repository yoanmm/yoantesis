<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreateUsuariosTable extends Migration
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
        $exist_table=$connection->hasTable("usuarios");
        if(!$exist_table){
            Schema::create("usuarios",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_usuario',true);
                $table->string('username',255)->nullable();
                $table->string('password',255)->nullable();
                $table->string('correo',255)->nullable();
                $table->timestamp('creado')->nullable();
                $table->timestamp('actualizado')->nullable();
                $table->boolean('activo')->nullable();
                $table->addColumn('integer', 'id_persona', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
            });
        }else{
            Schema::table("usuarios",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('usuarios');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("usuarios",'id_usuario')){
                   $table->integer('id_usuario',true)->change();
                }
               else{
                   $table->integer('id_usuario',true);
                }                
                if(Schema::hasColumn("usuarios",'username')){
                   $table->string('username',255)->nullable()->change();
                }
               else{
                   $table->string('username',255)->nullable();
                }                
                if(Schema::hasColumn("usuarios",'password')){
                   $table->string('password',255)->nullable()->change();
                }
               else{
                   $table->string('password',255)->nullable();
                }                
                if(Schema::hasColumn("usuarios",'correo')){
                   $table->string('correo',255)->nullable()->change();
                }
               else{
                   $table->string('correo',255)->nullable();
                }                
                if(Schema::hasColumn("usuarios",'creado')){
                   $table->timestamp('creado')->nullable()->change();
                }
               else{
                   $table->timestamp('creado')->nullable();
                }                
                if(Schema::hasColumn("usuarios",'actualizado')){
                   $table->timestamp('actualizado')->nullable()->change();
                }
               else{
                   $table->timestamp('actualizado')->nullable();
                }                
                if(Schema::hasColumn("usuarios",'activo')){
                   $table->boolean('activo')->nullable()->change();
                }
               else{
                   $table->boolean('activo')->nullable();
                }                
                if(Schema::hasColumn("usuarios",'id_persona')){
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
			});

		  }
            Schema::table("usuarios",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('usuarios');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_usuario', 'PRIMARY');


       /*Adding foreign keys*/ 

            $foreignkeylist = $sm->listTableForeignKeys('usuarios');
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'usuarios_ibfk_1';
            });

            if (count($find) > 0)
                $table->dropForeign('usuarios_ibfk_1');
            $table->foreign('id_persona', 'usuarios_ibfk_1')
                ->references('id_persona')
                ->on('persona')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");

            });

    }

   public function down()
    {
        Schema::dropIfExists('usuarios');


        return false;
    }
}
