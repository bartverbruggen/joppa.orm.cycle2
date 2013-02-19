<?php

namespace joppa\orm\view\predefined;

use joppa\orm\view\AbstractContentOverviewView;

use zibo\cycle2\Module;

/**
 * View for a flexslider content list
 */
class ContentCycle2View extends AbstractContentOverviewView {

    /**
     * Path to the template of this view
     * @var string
     */
    const TEMPLATE = 'joppa/orm/cycle2';

    /**
     * Constructs a new content view
     * @return null
     */
    public function __construct() {
        parent::__construct(self::TEMPLATE);

        $this->addJavascript(Module::SCRIPT_CYCLE2);
        //$this->addInlineJavascript('$(".flexslider").flexslider();');
    }

}
