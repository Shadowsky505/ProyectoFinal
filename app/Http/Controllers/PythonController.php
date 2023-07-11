<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class PythonController extends Controller
{
    public function ejecutarPython()
    {
        // Ejecutar el script de Python utilizando la clase Process de Symfony
        $process = new Process(['python', base_path('public/python/graficos.py')]);
        $process->run();

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        // Obtener la salida del script de Python
        $output = $process->getOutput();

        return $output;
    }
}
