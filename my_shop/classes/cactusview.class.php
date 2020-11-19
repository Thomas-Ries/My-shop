<?php

class CactusView extends Cactus {
    
    public function showName($id) {
        $results = $this->getCactuses($id);
        echo $results['name'];
    }
    public function showType($id) {
        $results = $this->getCactuses($id);
          echo $results['type'];
    }
    public function showPrice($id) {
        $results = $this->getCactuses($id);
        echo $results['price'];
    }
    public function showImg($id) {
        $results = $this->getCactuses($id);
        echo $results['img'];
    }

    public function showNote($id) {
        $results= $this->getCactuses($id);
        for ($i = 1; $i <= 5; $i++ ) {
            if ($i <= $results['note']) {
                print '<img src=".//img/Star - On.png" alt="Image d\'une étoile pleine de notation sur 5" title="Etoile pleine">';
            } else {
            print '<img src=".//img/Star.png" alt="Image d\'une étoile pleine de notation sur 5" title="Etoile creuse">';
        }
        }
    }
}