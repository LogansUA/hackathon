<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150416102045 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE event DROP length, DROP logo, CHANGE name name VARCHAR(255) NOT NULL, CHANGE description description VARCHAR(255) NOT NULL, CHANGE datetime datetime DATETIME NOT NULL, CHANGE latitude latitude NUMERIC(18, 15) DEFAULT NULL, CHANGE longitude longitude NUMERIC(18, 15) DEFAULT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE event ADD length INT NOT NULL, ADD logo LONGTEXT NOT NULL, CHANGE name name VARCHAR(100) NOT NULL, CHANGE description description LONGTEXT NOT NULL, CHANGE datetime datetime DATE NOT NULL, CHANGE latitude latitude INT NOT NULL, CHANGE longitude longitude INT NOT NULL');
    }
}
