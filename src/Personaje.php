<?php

declare(strict_types=1);


include_once "funciones.php";

class Personaje
{
    public function __construct(
        private string $sexo,
        public string $nombre,
        public string $reino,
        private string $pueblo,
        public string $sociedad,
        public string $pSocial,
        public string $titulo,
        public string $profesion,
        private string $profesionPat,
        private string $sitFamiliar,
        private int $hermanos,
        private int $varones,
        private int $hembras,
        private int $posicion,
        public int $aspecto,
        public int $templanza,
        public int $edad,
        public float $altura,
        public float $peso,
        public int $racionalidad,
        public int $irracionalidad,
        private int $suerte,
        public array $caracteristicas,
        public array $competencias,
        public array $armas,
        public array $rasgos,
        public float $ingresos
    ) {
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getReino()
    {
        return $this->reino;
    }

    public function setReino($reino)
    {
        $this->reino = $reino;

        return $this;
    }

    public function getPueblo()
    {
        return $this->pueblo;
    }

    public function setPueblo($pueblo)
    {
        $this->pueblo = $pueblo;

        return $this;
    }

    public function getSociedad()
    {
        return $this->sociedad;
    }

    public function setSociedad($sociedad)
    {
        $this->sociedad = $sociedad;

        return $this;
    }

    public function getPSocial()
    {
        return $this->pSocial;
    }

    public function setPSocial($pSocial)
    {
        $this->pSocial = $pSocial;

        return $this;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getProfesion()
    {
        return $this->profesion;
    }

    public function setProfesion($profesion)
    {
        $this->profesion = $profesion;

        return $this;
    }

    public function getProfesionPat()
    {
        return $this->profesionPat;
    }

    public function setProfesionPat($profesionPat)
    {
        $this->profesionPat = $profesionPat;

        return $this;
    }

    public function getSitFamiliar()
    {
        return $this->sitFamiliar;
    }

    public function setSitFamiliar($sitFamiliar)
    {
        $this->sitFamiliar = $sitFamiliar;

        return $this;
    }

    public function getHermanos()
    {
        return $this->hermanos;
    }

    public function setHermanos($hermanos)
    {
        $this->hermanos = $hermanos;

        return $this;
    }

    public function getVarones()
    {
        return $this->varones;
    }

    public function setVarones($varones)
    {
        $this->varones = $varones;

        return $this;
    }

    public function getHembras()
    {
        return $this->hembras;
    }

    public function setHembras($hembras)
    {
        $this->hembras = $hembras;

        return $this;
    }

    public function getPosicion()
    {
        return $this->posicion;
    }


    public function setPosicion($posicion)
    {
        $this->posicion = $posicion;

        return $this;
    }

    public function getAspecto()
    {
        return $this->aspecto;
    }

    public function setAspecto($aspecto)
    {
        $this->aspecto = $aspecto;

        return $this;
    }

    public function getTemplanza()
    {
        return $this->templanza;
    }

    public function setTemplanza($templanza)
    {
        $this->templanza = $templanza;

        return $this;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    public function getRacionalidad()
    {
        return $this->racionalidad;
    }

    public function setRacionalidad($racionalidad)
    {
        $this->racionalidad = $racionalidad;

        return $this;
    }

    public function getIrracionalidad()
    {
        return $this->irracionalidad;
    }

    public function setIrracionalidad($irracionalidad)
    {
        $this->irracionalidad = $irracionalidad;

        return $this;
    }

    public function getSuerte()
    {
        return $this->suerte;
    }

    public function setSuerte($suerte)
    {
        $this->suerte = $suerte;

        return $this;
    }

    public function getCaracteristicas()
    {
        return $this->caracteristicas;
    }

    public function setCaracteristicas($caracteristicas)
    {
        $this->caracteristicas = $caracteristicas;

        return $this;
    }

    public function getCompetencias()
    {
        return $this->competencias;
    }

    public function setCompetencias($competencias)
    {
        $this->competencias = $competencias;

        return $this;
    }

    public function getArmas()
    {
        return $this->armas;
    }

    public function setArmas($armas)
    {
        $this->armas = $armas;

        return $this;
    }

    public function getRasgos()
    {
        return $this->rasgos;
    }

    public function setRasgos($rasgos)
    {
        $this->rasgos = $rasgos;

        return $this;
    }

    public function getIngresos()
    {
        return $this->ingresos;
    }

    public function setIngresos($ingresos)
    {
        $this->ingresos = $ingresos;

        return $this;
    }

    //array_merge - esto es para que una 2 arrays
    //ksort - esto es para que me ordene un array asociativo y me dé los nombre de los valores
    public function getCompetenciasTotales(): array
    {
        $competenciasTotales = array_merge($this->competencias, $this->armas);
        ksort($competenciasTotales);
        return $competenciasTotales;
    }

    public function getCompetenciasPat(): array
    {
        $competenciasPat = competenciasPri($this->profesionPat);
        return array_filter($this->competencias, function (string $competencia) use ($competenciasPat) {
            return in_array($competencia, $competenciasPat);
        }, ARRAY_FILTER_USE_KEY);
    }

    public function sesion(): void
    {
        $_SESSION['personaje'] = $this;
    }

    public function actualizarArmas(): Personaje
    {
        $this->armas = [
            "Arcos" => $this->competencias["Arcos"],
            "Ballestas" => $this->competencias["Ballestas"],
            "Cuchillos" => $this->competencias["Cuchillos"],
            "Escudos" => $this->competencias["Escudos"],
            "Espadas" => $this->competencias["Espadas"],
            "Espadones" => $this->competencias["Espadones"],
            "Hachas" => $this->competencias["Hachas"],
            "Hondas" => $this->competencias["Hondas"],
            "Lanzas" => $this->competencias["Lanzas"],
            "Mazas" => $this->competencias["Mazas"],
            "Palos" => $this->competencias["Palos"],
            "Pelea" => $this->competencias["Pelea"]
        ];
        return $this;
    }
}
