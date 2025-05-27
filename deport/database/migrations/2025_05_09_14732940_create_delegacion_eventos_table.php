<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreateUsuarioRolTable extends Migration
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
        $exist_table=$connection->hasTable("usuario_rol");
        if(!$exist_table){
            Schema::create("usuario_rol",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_user_rol',true);
                $table->addColumn('integer', 'id_usuario', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                $table->addColumn('integer', 'id_rol', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
            });
        }else{
            Schema::table("usuario_rol",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('usuario_rol');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("usuario_rol",'id_user_rol')){
                   $table->integer('id_user_rol',true)->change();
                }
               else{
                   $table->integer('id_user_rol',true);
                }                
                if(Schema::hasColumn("usuario_rol",'id_usuario')){
                   $table->addColumn('integer', 'id_usuario', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                }
               else{
                   $table->addColumn('integer', 'id_usuario', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                }                
                if(Schema::hasColumn("usuario_rol",'id_rol')){
                   $table->addColumn('integer', 'id_rol', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                }
               else{
                   $table->addColumn('integer', 'id_rol', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                }            
			});

		  }
            Schema::table("usuario_rol",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('usuario_rol');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_user_rol', 'PRIMARY');


       /*Adding foreign keys*/ 

            $foreignkeylist = $sm->listTableForeignKeys('usuario_rol');
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'usuario_rol_ibfk_1';
            });

            if (count($find) > 0)
                $table->dropForeign('usuario_rol_ibfk_1');
            $table->foreign('id_usuario', 'usuario_rol_ibfk_1')
                ->references('id_usuario')
                ->on('usuarios')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'usuario_rol_ibfk_2';
            });

            if (count($find) > 0)
                $table->dropForeign('usuario_rol_ibfk_2');
            $table->foreign('id_rol', 'usuario_rol_ibfk_2')
                ->references('id_rol')
                ->on('rol')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");

            });

    }

   public function down()
    {
        Schema::dropIfExists('usuario_rol');


        return false;
    }
}
