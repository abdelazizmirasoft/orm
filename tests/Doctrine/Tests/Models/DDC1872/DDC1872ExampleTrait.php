<?php

declare(strict_types=1);

namespace Doctrine\Tests\Models\DDC1872;

trait DDC1872ExampleTrait
{
    /** @Id @Column(type="string") */
    private $id;

    /**
     * @var int
     * @Column(name="trait_foo", type="integer", length=100, nullable=true, unique=true)
     */
    protected $foo;

    /**
     * @var DDC1872Bar
     * @OneToOne(targetEntity="DDC1872Bar", cascade={"persist", "merge"})
     * @JoinColumn(name="example_trait_bar_id", referencedColumnName="id")
     */
    protected $bar;
}
