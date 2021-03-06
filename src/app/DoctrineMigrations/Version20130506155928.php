<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20130506155928 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("ALTER TABLE monodi_document CHANGE rev rev VARCHAR(64) DEFAULT NULL, CHANGE processNumber processNumber VARCHAR(255) DEFAULT NULL, CHANGE editionNumber editionNumber INT DEFAULT NULL");
        $this->addSql("ALTER TABLE fos_user ADD salutation VARCHAR(255) DEFAULT NULL, ADD title VARCHAR(255) DEFAULT NULL, ADD firstname VARCHAR(255) DEFAULT NULL, ADD lastname VARCHAR(255) DEFAULT NULL");
    }

    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("ALTER TABLE fos_user DROP salutation, DROP title, DROP firstname, DROP lastname");
        $this->addSql("ALTER TABLE monodi_document CHANGE rev rev VARCHAR(64) NOT NULL, CHANGE processNumber processNumber VARCHAR(255) NOT NULL, CHANGE editionNumber editionNumber INT NOT NULL");
    }
}
