<?php

// Essa será a nossa interfasse da classe vehicle

interface Ivehicle {

    // Para a classe Vehicle funcionar, ela necessita possuir esse método
    public function getEngine($type = null);

}