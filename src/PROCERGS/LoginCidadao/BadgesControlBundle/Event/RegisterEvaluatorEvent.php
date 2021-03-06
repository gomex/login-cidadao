<?php

namespace PROCERGS\LoginCidadao\BadgesControlBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use PROCERGS\LoginCidadao\BadgesControlBundle\Model\BadgeEvaluatorInterface;

class RegisterEvaluatorEvent extends Event
{

    /** @var BadgeEvaluatorInterface **/
    protected $evaluator;

    public function __construct(BadgeEvaluatorInterface $evaluator)
    {
        $this->evaluator = $evaluator;
    }

    /**
     * @return BadgeEvaluatorInterface
     */
    public function getEvaluator()
    {
        return $this->evaluator;
    }

}
