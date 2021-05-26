<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriggerLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared(
            'Create trigger crear_oferta BEFORE INSERT ON ofertas FOR EACH ROW
            BEGIN
                INSERT INTO logs (user,action,descripcion,fecha) VALUES ((SELECT name FROM users WHERE id = new.empresa_id), "Oferta creada" , new.desc, now());
            END'
        );

        DB::unprepared(
            'Create trigger eliminar_usuario AFTER DELETE ON users FOR EACH ROW
            BEGIN
                INSERT INTO logs (user,action,descripcion,fecha) VALUES (old.name, "Usuario eliminado" ,(select roles.desc from roles where roles.id = old.role_id), now());
            END'
        );

        DB::unprepared(
            'Create trigger aceptar_oferta AFTER UPDATE ON ofertas FOR EACH ROW
            BEGIN
             IF (old.estado="pendiente")
                THEN
                INSERT INTO logs (user,action,descripcion,fecha) VALUES ((SELECT name FROM users WHERE id = new.repartidor_id), "Oferta aceptada" ,new.desc, now());
             END IF;
            END'
        );

        DB::unprepared(
            'Create trigger entregar_oferta AFTER UPDATE ON ofertas FOR EACH ROW
            BEGIN
             IF (old.estado="reparto")
                THEN
                INSERT INTO logs (user,action,descripcion,fecha) VALUES ((SELECT name FROM users WHERE id = new.repartidor_id), "Oferta entregada" ,new.desc, now());
             END IF;
            END'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger_logs');
    }
}
