<?php 

interface Crud {
    public function create($date);
    public function read();
    public function update();
    public function delete();
}

class Noticias implements Crud{
    public function create($date){
        //logica para criar uma noticia
    }

    public function read(){
        //logica para criar uma ler
    }

    public function update(){
        //logica para actualizar uma noticia
    }

    public function delete(){
        //logica para eliminar uma noticia
    }
}