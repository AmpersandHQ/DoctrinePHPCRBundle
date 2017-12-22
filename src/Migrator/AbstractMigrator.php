<?php


namespace Doctrine\Bundle\PHPCRBundle\Migrator;

use Symfony\Component\Console\Output\OutputInterface;
use PHPCR\SessionInterface;
use PHPCR\Util\TraversingItemVisitor;

abstract class AbstractMigrator extends TraversingItemVisitor implements MigratorInterface
{
    /**
     * @var SessionInterface
     */
    protected $session;

    /*
     * @var Symfony\Component\Console\Output\OutputInterface
     */
    protected $output;

    public function init(SessionInterface $session, OutputInterface $output)
    {
        $this->session = $session;
        $this->output = $output;
    }

    public function setLevel($level)
    {
        $this->currentDepth = $level;
    }
}