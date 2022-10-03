<?php
// Sukurti klasę "FutboloRungtynes".
// Klasės parametrai:  $patirtaTrauma, $kuriKomandaLaimejo, $rungtyniuRezultatas
// Metodai:
// simuliuotiTraumas() - pasitelkiant rand() funkcija ir generuojant skaičius nuo 1 iki 1000, grąžinti tokią informaciją - jei sugeneruotas skaičius dalinasi iš 3,5 ir 10 - $patirtaTrauma = 2, kitais atvejais - $patirtaTrauma = 0.
// simuliuotiRungtynes() - pasitelkian rand() funkciją, grąžinti masyvą su dvejais skaičiais pvz.: [0,2], kur pirmas skaičius yra pirmos komandos komandos įvarčių kiekis, o antras - antros komandos įvarčių kiekis.
// laimetojai() - priskiria argumentui $kuriKomandaLaimejo reikšmes: jei pirma komanda laimėjo - $kuriKomandaLaimejo = 1, kitu atveju $kuriKomandaLaimejo = 2

// Po klasės sukūrimo, sukurti objektą ir paleisti visus metodus.

class FutboloRungtynes {
    public $patirtaTrauma=0;
    public $kuriKomandaLaimejo;
    public $rungtyniuRezultatas;
    public $skaicius1;

    public function simuliuotiTraumas() {
        $this->skaicius1 = rand(1,1000);
        if ($this->skaicius1 % 3 == 0 || $this->skaicius1 % 5 == 0 || $this->skaicius1 % 10 == 0){       
        $this->patirtaTrauma = 2;
        echo $this->skaicius1;
        return $this->patirtaTrauma;
        }
    }
    public function simuliuotiRungtynes(){
        $this->rungtyniuRezultatas = [rand(0,10),rand(0,10)];
        return $this->rungtyniuRezultatas;
    }
    public function laimetojai(){
        if ($this->rungtyniuRezultatas[0]>$this->rungtyniuRezultatas[1]){
            return $this->kuriKomandaLaimejo = 1;
        } else if ($this->rungtyniuRezultatas[0]<$this->rungtyniuRezultatas[1]){
            return $this->kuriKomandaLaimejo = 2;
        } else {
            return $this->kuriKomandaLaimejo = "Lygiosios";
        }

        }
    }

$rungtynes1 = new FutboloRungtynes();
$rungtynes1->simuliuotiTraumas();
$rungtynes1->simuliuotiRungtynes();
$rungtynes1->laimetojai();

var_dump($rungtynes1->patirtaTrauma);
var_dump($rungtynes1->rungtyniuRezultatas);
var_dump($rungtynes1->kuriKomandaLaimejo);
