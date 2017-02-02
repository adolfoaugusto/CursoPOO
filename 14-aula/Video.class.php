<?php /**
 * Video
 */
class Video
{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function getTitulo(){
        return $this->titulo;
    }

    private function setTitulo($titulo){
        $this->titulo = $titulo;

        return $this;
    }

    public function getAvaliacao(){
        return $this->avaliacao;
    }

    private function setAvaliacao($avaliacao){
        $this->avaliacao = $avaliacao;

        return $this;
    }

    public function getViews(){
        return $this->views;
    }

    private function setViews($views){
        $this->views = $views;

        return $this;
    }

    public function getCurtidas(){
        return $this->curtidas;
    }

    private function setCurtidas($curtidas){
        $this->curtidas = $curtidas;

        return $this;
    }

    public function getReproduzindo(){
        return $this->reproduzindo;
    }

    private function setReproduzindo($reproduzindo){
        $this->reproduzindo = $reproduzindo;

        return $this;
    }
}