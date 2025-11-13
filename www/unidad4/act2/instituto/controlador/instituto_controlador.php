<?php
// controlador/instituto_controlador.php

class InstitutoControlador {

    private Curso $curso;
    private Estudiante $estudiante;

    public function __construct(Curso $curso, Estudiante $estudiante) {
        
        $this->curso = $curso;
        $this->estudiante = $estudiante;
    }

    public function ejecutar(): array {
        
        $this->estudiante->vaciarTodo();
        $this->curso->vaciarTodo();

        // 📚 Cursos
        $idCiberseguridad = $this->curso->agregar("Ciberseguridad");
        $idProgramacionWeb   = $this->curso->agregar("Programación Web");

        // 👩‍🎓 Lista Inicial
        $this->estudiante->agregar("Ana Pérez", 20, $idCiberseguridad); // Añadir estudiantes
        $this->estudiante->agregar("Luis Gómez", 22, $idProgramacionWeb);

        $listaInicial = $this->estudiante->conCurso();

        // ✏️ Lista Modificada
        $this->estudiante->actualizarPorNombre("Ana Pérez", "Ana Torres", 21, $idProgramacionWeb);

        $listaModificada = $this->estudiante->conCurso();

        // 🗑️ Lista Final
        $this->estudiante->eliminarPorNombre("Luis Gómez"); // Eliminar estudiante

        $listaFinal = $this->estudiante->conCurso();

        // Array devuelto
        $cursos = $this->curso->todos();
        
        return 
        [   'cursos' => $cursos, // array de Cursos
            'listaInicial' => $listaInicial, // array con datos iniciales.
            'listaModificada' => $listaModificada,  // array con los datos modificados
            'listaFinal' => $listaFinal // array con los datos finales ( estudiante elminado )
        ]; 
    }

}