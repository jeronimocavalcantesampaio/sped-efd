<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class A001 extends Element implements ElementInterface
{
    const REG = 'A001';
    const LEVEL = 1;
    const PARENT = '0000';

    protected $parameters = [
        'IND_MOV' => [
            'type' => 'string',
            'regex' => '^(0|1)$',
            'required' => false,
            'info' => 'Indicador de movimento: 0 - Bloco com dados informados; 1 - Bloco sem dados informados',
            'format' => ''
        ],

    ];

    /**
     * Constructor
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std)
    {
        parent::__construct(self::REG);
        $this->std = $this->standarize($std);
    }
}
