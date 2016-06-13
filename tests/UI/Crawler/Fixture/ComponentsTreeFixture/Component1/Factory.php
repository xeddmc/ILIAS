<?php

/* Copyright (c) 2016 Timon Amstutz <timon.amstutz@ilub.unibe.ch> Extended GPL, see docs/LICENSE */

namespace ILIAS\UI\Interfaces;

use ILIAS\UI\Component as C;
/**
 * Some Random Comment
 */
interface ProperEntry {
    /**
     * ---
     * title: Non-Abstract Component 1.1
     * description:
     * rules:
     * ---
     *
     * @return  tests\UI\Crawler\Fixture\ComponentsTreeFixture\Component1\Component11
     */

    public function component1();

    /**
     * ---
     * title: Abstract Component 1.2
     * description:
     * rules:
     * ---
     *
     * @return  tests\UI\Crawler\Fixture\ComponentsTreeFixture\Component1\Component12\Factory
     */
    public function component2();
}