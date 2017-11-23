<?php

namespace Starling\Exception;

class RequiredValuesMissing extends \Exception
{
    /**
     * Whats required?
     *
     * @var array
     */
    protected $required;

    /**
     * Build our error.
     *
     * @param array $required
     */
    public function __construct(array $required = [])
    {
        parent::__construct();
        $this->required = $required;

        $msg = 'Sorry one or more of the required fields were missing.';
        $msg .= count($this->required) > 0 ? ' They are '.implode(', ', $this->required) : '';
        $this->message = $msg;
    }
}
