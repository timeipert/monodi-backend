<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20130625131226 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("ALTER TABLE fos_user ADD slug VARCHAR(255) DEFAULT NULL");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_957A6479989D9B62 ON fos_user (slug)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("DROP INDEX UNIQ_957A6479989D9B62 ON fos_user");
        $this->addSql("ALTER TABLE fos_user DROP slug");
    }
}
