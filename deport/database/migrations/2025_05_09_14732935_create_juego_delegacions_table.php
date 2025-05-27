<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 */
class CreateRolPermisoTable extends Migration
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
        $exist_table=$connection->hasTable("rol_permiso");
        if(!$exist_table){
            Schema::create("rol_permiso",function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->integer('id_rol_permiso',true);
                $table->addColumn('integer', 'id_rol', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                $table->addColumn('integer', 'id_permiso', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
            });
        }else{
            Schema::table("rol_permiso",function (Blueprint $table) {

				/*Validating pk */
                $sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();
                $foundpk = true;

				$indexesfound = $sm->listTableIndexes('rol_permiso');
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
                if (count($find) == 0) {
                    $foundpk = false;
                }                
                if(Schema::hasColumn("rol_permiso",'id_rol_permiso')){
                   $table->integer('id_rol_permiso',true)->change();
                }
               else{
                   $table->integer('id_rol_permiso',true);
                }                
                if(Schema::hasColumn("rol_permiso",'id_rol')){
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
                if(Schema::hasColumn("rol_permiso",'id_permiso')){
                   $table->addColumn('integer', 'id_permiso', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable()->change();
                }
               else{
                   $table->addColumn('integer', 'id_permiso', [
                    'length'   => 10,
                    'default'  => '1',
                    'autoIncrement' => false,
                    'unsigned' => false,
                ])->nullable();
                }            
			});

		  }
            Schema::table("rol_permiso",function (Blueprint $table) {

				/*Adding indexes */

				$sm=Schema::connection("db")->getConnection()->getDoctrineSchemaManager();

				$indexesfound = $sm->listTableIndexes('rol_permiso');
                foreach ($indexesfound as $el) {
                    if ($el->isUnique() && !$el->isPrimary())
                        $table->dropUnique($el->getName());
                }
                $find = array_filter($indexesfound, function ($element) {
                    return $element->getName() === 'PRIMARY';
                });
				if (count($find)==0)
					$table->primary('id_rol_permiso', 'PRIMARY');


       /*Adding foreign keys*/ 

            $foreignkeylist = $sm->listTableForeignKeys('rol_permiso');
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'FK_permiso';
            });

            if (count($find) > 0)
                $table->dropForeign('FK_permiso');
            $table->foreign('id_permiso', 'FK_permiso')
                ->references('id_permiso')
                ->on('permisos')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");
            $find = array_filter($foreignkeylist, function ($element) {
                return $element->getName() === 'FK_rol';
            });

            if (count($find) > 0)
                $table->dropForeign('FK_rol');
            $table->foreign('id_rol', 'FK_rol')
                ->references('id_rol')
                ->on('rol')
                ->onDelete("NO ACTION")
                ->onUpdate("NO ACTION");

            });

    }

   public function down()
    {
        Schema::dropIfExists('rol_permiso');


        return false;
    }
}
