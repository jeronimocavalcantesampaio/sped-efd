<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z0035 extends Element implements ElementInterface
{
    const REG = '0035';
    const LEVEL = 0;
    const PARENT = '2';

    protected $parameters = [
        'COD_SCP' => [
            'type' => 'numeric',
            'regex' => '^(\d{14})$',
            'required' => false,
            'info' => 'Identificação da SCP',
            'format' => ''
        ],
        'DESC_SCP' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Descrição da SCP',
            'format' => ''
        ],
        'INF_COMP' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Informação Complementar',
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
