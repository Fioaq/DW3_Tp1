<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    //Funcion para crear las mascotas
    public function CrearMascota(){
        $nombre = 'Niki';
        $fecha_nac = '2023-02-26';
        $especie = 'Felina';
        $raza = 'Siames';
        $genero = 'femenino';
        $propietario = 'Fiorella Aquino';

        //Insertar datos en tabla Mascotas
        $mascotas = Mascota::create([
            'nombre'=>$nombre,
            'fecha_nac'=>$fecha_nac,
            'especie'=>$especie,
            'raza'=>$raza,
            'genero'=>$genero,
            'propietario'=>$propietario,
        ]);

        return response()->json(['message'=>'Mascota creada correctamente', 'mascota'=>$mascotas]);
    }

    //Funcion para ver todos las mascotas
    public function VerMascotas(){
        $mascotas = Mascota::all();

        return response()->json(['message'=>'Lista de mascotas', 'mascotas'=>$mascotas]);
    }

    //Funcion para ver una mascota por id
    public function VerMascota($id){
        $mascotas = Mascota::find($id);

        return response()->json(['message'=>'La mascota buscada es:', 'mascota'=>$mascotas]);
    }

    //Funcion para eliminar una mascota
    public function EliminarMascota($id){
        $mascotas = Mascota::find($id);
        if($mascotas == null){
            return response()->json(['message'=>'Mascota no existe']);
        }else{
            $mascotas->delete();
            return response()->json(['message'=>'Mascota eliminada correctamente']);
        }
    }

    public function ModificarMascota(){
        $mascota = Mascota::where('id', '1')
        ->first();

        $nombre = 'Pelusa';
        $fecha_nac = '2024-05-01';
        $especie = 'Felina';
        $raza = 'Comun europeo';
        $genero = 'femenino';
        $propietario = 'Fiorella Aquino';

        $mascota->update([
            'nombre'=>$nombre,
            'fecha_nac'=>$fecha_nac,
            'especie'=>$especie,
            'raza'=>$raza,
            'genero'=>$genero,
            'propietario'=>$propietario,
        ]);
        
        return response()->json(['message'=>'Mascota actualizada correctamente']);
    }
}
